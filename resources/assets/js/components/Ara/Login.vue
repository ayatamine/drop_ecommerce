<template>
  <div>
    <mainheader></mainheader>
    <div id="tt-pageContent">
        <div class="container-indent">
            <div class="container">
                <h1 class="tt-title-subpages noborder">مسجل من قبل ؟</h1>
                <div class="tt-login-form">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <div class="tt-item">
                                <h2 class="tt-title">مستخدم جديد</h2>
                                <p>
                                  . من خلال إنشاء حساب في متجرنا ، ستتمكن من التنقل عبر عملية الدفع بشكل أسرع ، وتخزين عناوين شحن متعددة ، وعرض وتتبع طلباتك في حسابك والمزيد.

                                </p>
                                <div class="form-group">
                                    <router-link to="/register" class="btn btn-top btn-border">إنشاء حساب</router-link>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">

                            <div class="tt-item">
                                <h2 class="tt-title">تسجيل الدخول</h2>
                                ادا كان لديك حساب معنا قم بتسجيل الدخول من فضلك
                                <div class="form-default form-top">
                                    <ul class="list-group " v-if="this.errors.length > 0">
                                        <li class="list-group-item  text-danger" v-for="error in errors"
                                        :key="error.indexOf(error)"
                                        >
                                        {{error}}
                                        </li>
                                        <router-link  v-show="!this.emailverified" to="/verifyEmail" class="btn btn-primary  btn-sm ml-auto  mr-auto mt-2">التحقق من البريد</router-link>
                                    </ul>
                                    <form id="customer_login" method="post" novalidate="novalidate">
                                        <div class="form-group">
                                            <div class="tt-required float-left">* خانة الزامية</div>
                                            <label for="loginInputName">البريد الالكتروني *</label>
                                            <input type="text" name="name" class="form-control" id="loginInputName" placeholder="البريد الالكتروني" v-model="email">
                                            <div v-if="EmailError" class="text-danger font-weight-bold mt-1">
                                                الايميل غير صحيح...
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="loginInputEmail">كلمة السر *</label>
                                            <input type="password" name="passowrd" class="form-control" id="loginInputEmail" placeholder="كلمة السر" v-model="password">
                                        </div>
                                        <div class="row">
                                            <div class="col-auto mr-auto">
                                                <div class="form-group">
                                                    <button class="btn btn-border"
                                                    :disabled="!isVadlidLoginForm"
                                                     @click.prevent="validateForm()"
                                                    type="submit">تسجيل الدخول</button>
                                                </div>
                                            </div>
                                            <div class="col-auto align-self-end">
                                                <div class="form-group">
                                                    <ul class="additional-links">
                                                        <li><a href="#">نسيت كلمة السر ؟</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</template>

<script>
import mainheader from './header/Main.vue'
export default {
 data(){
        return {
            email:'',
            password :'',
            remember:true,emailverified:true,
            errors : []
        }
    },
 components:{
	  mainheader
  },
    computed:{
        isVadlidLoginForm(){
         return this.isEmailValide() && this.isPasswordValide
       },
       EmailError(){
          return this.email.length && !(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(this.email))
       }
    },
    methods:{
        isEmailValide()
        {
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(this.email))
            {
                return (true)
            }
                return (false)
        },
        isPasswordValide(){
            return this.password.length > 5
        },
        validateForm(){

            this.errors = [];

            axios.get('/checkIfUserBlocked/'+this.email)
            .then(res =>{
                if(res.data.type == '0'){
                    this.errors.push(res.data.msg);
                    this.emailverified = false;
                }else{
                if(res.data.type == '3'){
                    this.errors.push('لم يتم العثور على مستخدم بهدا البريد');
                }else{
                 if(res.data.type == '1'){
                    this.errors.push(res.data.msg);
                 }else{
                    axios.post('/login',{
                        email : this.email, password : this.password,remember : this.remember
                    })
                    .then(res =>{
                        window.location.pathname ='/'
                        //this.$store.commit('setUser');


                    })
                    .catch(errors => {
                        //console.log(errors)
                        if(errors.response.status ==  '422'){

                        this.errors.push('البريد الالكتروني أو كلمة السر خاطئة')
                        }else{
                            this.errors.push('هناك خطأ داخلي أعد تحميل الصفحة  وحاول مجددا ')
                        }
                    })
                 }
                }
                }
            })

        }
    }
}
</script>

<style>

</style>