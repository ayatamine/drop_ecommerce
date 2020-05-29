export default {

    methods: {
        setProductInViewer(product, event) {
            console.log('cliken', product)
            this.$store.commit('setProductInViewer', product);
        },
        /* filte products by categorie */
        filterproducts(type) {

            let products = this.$store.state.products;

            let fil = products
                .filter((element) =>
                    element.categories.some((c) => c.name.en == type))
                .map(element => {
                    return Object.assign({}, element, { categories: element.categories.filter(subElement => subElement.name.en == type) });

                });
            this.$store.state.currentProducts = fil;
            localStorage.clear('activeCategory')
            this.hiderestc();
        },
        fetchallProducts() {

            axios.get('/getProducts')
                .then(res => {
                    console.log("all", res)
                        // this.products = res.data.products;
                        //sessionStorage.setItem('products',JSON.stringify(this.products))
                    this.$store.state.products = res.data.products
                    sessionStorage.setItem('products', JSON.stringify(res.data.products))
                    this.setShirtsProducts();
                    this.setPhoneProducts();
                    /* set alll the categories */
                    setTimeout(this.setCategories(), 2000)

                })
                .catch(error => {
                    alert("error")
                })
        },
        /*filter duplicated objects **/
        getUnique(arr, comp) {

            const unique = arr
                .map(e => e[comp])

            // store the keys of the unique objects
            .map((e, i, final) => final.indexOf(e) === i && i)

            // eliminate the dead keys & store unique objects
            .filter(e => arr[e]).map(e => arr[e]);

            return unique;
        },
        /// add to favorite fonctionality
        addPToFavorite(product, event) {
            if (!!this.auth) {
                // event.target.parentNode.classList.add('favorited')
                axios.post('/user/favorites/add', { user_id: this.auth.id, sku: product.sku })
                    .then(res => {
                        //console.log(res)

                        if (res.data.data !== "the product already favorited") {
                            this.$store.commit('addToFavorites', product)
                            Swal.fire({
                                type: 'success',
                                html: res.data.data,
                            })
                        } else {

                            Swal.fire({
                                type: 'info',
                                html: 'تم إضافته مسبقا',
                            })
                        }

                        event.target.classList.add('active')

                    })
            } else {
                Swal.fire({
                        type: 'error',
                        html: `
                        من فضلك قم بتسجيل الدخول < br > \
                        <
                        router - link to = "/login" > تسجيل الدخول < /router-link>`

                    })
                    // document.querySelector('#loginto').style.display = 'block';
            }
        },
        //set the color of button to favorited items
        checkFavoritedProducts() {
            document.querySelectorAll('.wishlist').forEach(item => {
                if (this.favoritedProducts.indexOf(item.getAttribute("datasku")) > -1) {
                    item.classList.add('favorited');
                }
            })
        },
        //add item to cart both in products page and in details page
        addToCart(product, event) {
            if (this.auth) {
                let maxQTE = 0;
                product.variations.forEach(variation => {
                    maxQTE += variation.quantity;
                })
                if (maxQTE == 0) {
                    Swal.fire({
                        type: 'warning',
                        title: '     كمية المنتج غير متوفرة الان ',
                    })
                    return false;
                }

                Swal.fire({
                    title: 'من فضلك اختر الكمية',
                    html: '<h6>الكمية المتوفرة' + maxQTE + '</h6>',
                    input: 'number',
                    inputAttributes: {
                        min: 1,
                        max: maxQTE,
                        step: 1
                    },
                    showCancelButton: true,
                    confirmButtonText: 'تأكيد',
                    showLoaderOnConfirm: true,
                    preConfirm: (quantity) => {

                    },
                    allowOutsideClick: () => !Swal.isLoading()
                }).then((quantity) => {
                    if (quantity.value) {
                        axios.post('/user/carItems/add', {
                                user_id: this.auth.id,
                                sku: product.sku,
                                quantity: quantity.value
                            })
                            .then(res => {
                                if (res.data.type == "success") {
                                    this.$store.commit('addToCart', product)
                                }
                                Swal.fire({
                                    title: res.data.msg,
                                    type: res.data.type,
                                })
                            })
                            .catch(err => { alert(err) })
                    }
                })
            } else {
                Swal.fire({
                        type: 'error',
                        html: `<router-link to="/login" > تسجيل الدخول </router-link>' : 'قم بتسجيل الدخول لإضافة المنتج للسلة<br>`,
                    })
                    // document.querySelector('#loginto').style.display = 'block';
            }
        },
        //check if an item is in cart or not
        //the item is an object {sku,quantity}
        checkItemIsInCart(sku) {
            return this.cartItems.filter(item => item.sku == sku).length == 1;
        }


    },
    computed: {
        cartItems() {
            return this.$store.state.cartItems;
        },
        auth() {
            return this.$store.getters.auth;
        },
        favorites() {
            return this.$store.getters.favorites;
        },
        products() {
            return this.$store.getters.products
        }

    }
};