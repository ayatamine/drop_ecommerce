<template>
<div>
<mainheader></mainheader>
  <div id="tt-pageContent">
	<div class="container-indent">
		<div class="container">
			<h1 class="tt-title-subpages noborder">إنشاء حساب</h1>
			<div class="tt-login-form">
				<div class="row justify-content-center">
					<div class="col-md-8 col-lg-6">
						<div class="tt-item">
                            <ul class="list-group " v-if="this.errors.length > 0">
                            <li class="list-group-item  text-danger" v-for="error in errors"
                            :key="error.indexOf(error)"
                            >
                            {{error}}
                            </li>
                            </ul>
							<h2 class="tt-title">المعلومات الشخصية</h2>
							<div class="form-default">

                                <div v-if="registred" class="border w-100 p-3 text-center" style="box-shadow: rgb(193, 179, 179) 0px 0px 8px 0px;">
                                <div class="alert alert-success">تم بنجاح ، لقد أرسلنا اليك رمز التحقق عبر البريد الالكتروني يرجى تفعيل البريد</div>
                                <router-link to="/verifyEmailpage" class="btn btn-primary m-auto">التحقق من البريد</router-link>
                                </div>
								<form v-else id="contactform" method="post" novalidate="novalidate">
									<div class="form-group">
                                        <div class="tt-required float-left">* خانة إجبارية</div>
										<label for="loginInputName">الاسم الاول *</label>

										<input type="text" name="name" class="form-control" id="loginInputName" placeholder="ادخل الاسم الشخصي" v-model="firstname">
                                        <div v-show="firstname.length < 3 && firstname.length > 0" class="text-danger font-weight-bold mt-1">
                                                  الاسم الاول قصير جدا ...
                                        </div>
									</div>
									<div class="form-group">
										<label for="loginLastName">الاسم العائلي *</label>
										<input type="text" name="lastName" class="form-control" id="loginLastName" placeholder="ادخل الاسم العائلي" v-model="lastname">
                                        <div v-show="lastname.length < 3 && lastname.length > 0" class="text-danger font-weight-bold mt-1">
                                                  الاسم العائلي قصير جدا ...
                                        </div>
									</div>
									<div class="form-group">
										<label for="loginLastName">العنوان *</label>
										<input type="text" name="lastName" class="form-control" id="loginLastName" placeholder="ادخل عنوان السكن" v-model="address">
                                        <div v-show="address.length < 3 && address.length > 0" class="text-danger font-weight-bold mt-1">
                                                   العنوان قصير جدا ...
                                        </div>
									</div>
									<div class="form-group">
										<label for="loginLastName">رقم الهاتف *</label>
										<input type="number" name="lastName" class="form-control" id="loginLastName" placeholder="رقم الهاتف" v-model="phone">
                                        <div v-show="phone.length < 9 && phone.length > 0" class="text-danger font-weight-bold mt-1">
                                                   رقم الهاتف قصير ...
                                        </div>
                                        <div v-show="phone.length > 13" class="text-danger font-weight-bold mt-1">
                                                  رقم الهاتف طويل ...
                                        </div>
									</div>
									<div class="form-group">
										<label for="loginInputEmail">البريد الإلكتروني *</label>
										<input type="text" name="email" class="form-control" id="loginInputEmail" placeholder="ادخل البريد الالكتروني" v-model="email">
                                        <div v-if="EmailError" class="text-danger font-weight-bold mt-1">
                                                الايميل غير صحيح...
                                        </div>
									</div>
									<div class="form-group">
										<label for="loginInputPassword">كلمة السر *</label>
										<input type="password" name="passowrd" class="form-control" id="loginInputPassword" placeholder="ادخل كلمة السر" v-model="password">
                                         <div v-show="password.length < 6 && password.length > 0" class="text-danger font-weight-bold mt-1">
                                                    كلمة السر يجب أن تكون أكبر من 5 أحرف
                                         </div>
									</div>
									<div class="form-group">
										<label for="loginInputPasswordc">تأكيد كلمة السر *</label>
										<input type="password" name="passowrd" class="form-control" id="loginInputPasswordc" placeholder="أعد كتابة كلمة السر" v-model="passwordconfirm">
                                        <div v-if="password.length > 5 && passwordconfirm.length> 5 && passwordconfirm != password" class="text-danger font-weight-bold mt-1">
                                                   تأكيد كلمة السر غير متطابقة ...
                                        </div>
                                        <div v-if="passwordError.length > 0" class="text-danger font-weight-bold mt-1">
                                                {{passwordError}}
                                        </div>
									</div>
									<div class="row">
										<div class="col-auto">
											<div class="form-group">
												<button class="btn btn-border" type="submit"
                                                 :disabled="!isVadlidLoginForm" @click.prevent="validateForm()">
                                                    إنشاء حساب</button>
											</div>
										</div>
										<div class="col-auto align-self-center">
											<div class="form-group">
												<ul class="additional-links">
													<li>أو <router-link to="/">العودة للمتجر</router-link></li>
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
            firstname:'',
            lastname:'',
            address:'',
            phone:'',
            email:'',
            password :'',
            passwordconfirm:'',
            errors : [],
            registred:false,
            //password and email errors
            emailError:'',
            passwordError:'',
      }
  },
  components:{
	  mainheader
  },
    computed:{
       isVadlidLoginForm(){
         return (this.firstname.length > 2) && (this.firstname.length > 2) &&
                (this.address.length > 2) && (this.isPhoneValide()) &&
                this.isEmailValide() && this.isPasswordValide()
       },
       EmailError(){
          return this.email.length && !(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(this.email))
       }
    },
    methods:{
        isPhoneValide(){
            return (this.phone.length < 14) && (this.phone.length >= 9);
        },
        isEmailValide()
        {
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(this.email))
            {
                return (true)
            }
                return (false)
        },
        isPasswordValide(){
            return (this.password.length > 5) && (this.passwordconfirm == this.password)
        },
         validateForm(){
            this.errors = [];this.emailError='';this.passwordError='';
            axios.post('/users/store',{
                firstname:this.firstname,lastname:this.lastname,address:this.address,phone:this.phone,
                 email : this.email, password : this.password,password_confirmation : this.passwordconfirm
            })
            .then(res =>{
                //console.log(res.data.errors)
                if(res.data.errors){
                    //this.errors = res.data.errors;
                    res.data.errors.forEach(error =>{
                        if(error.includes('email')){ this.emailError = error}
                        else{
                            if(error.includes('password'))
                            { this.passwordError = error}
                            else
                            {this.errors.push(error) }
                        }

                    })
                }else{

                  this.registred = true;
                }

                //window.location.reload();
            })
            .catch(errors => {
                console.log(errors)
                if(errors.response.status ==  '422'){
                  console.log('err',errors)
                }else{
                    this.errors.push('Something went wrong please refresh \
                    the page and try again')
                }
            })
        }

    }
}
</script>

<style>

</style>