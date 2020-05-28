<template>
  <div>
    <mainheader></mainheader>
    <div id="tt-pageContent">
        <div class="container-indent">
            <div class="container">
                <div class="tt-login-form">
                    <div class="row">
                        <div class="col-sm-8 m-auto">

                            <div class="tt-item">
                                <h2 class="tt-title">تفعيل البريد الالكتروني</h2>
                                <div class="form-default form-top">
                                    <ul class="list-group " v-if="this.errors.length > 0">
                                        <li class="list-group-item  text-danger" v-for="error in errors"
                                        :key="error.indexOf(error)"
                                        >
                                        {{error}}
                                        </li>
                                    </ul>
                                    <div v-if="activated" class="border w-100 p-3 text-center" style="box-shadow: rgb(193, 179, 179) 0px 0px 8px 0px;">
                                    <div class="alert alert-success">تم بنجاح يرجى العودة لتسجيل الدخول</div>
                                    <router-link to="/login" class="btn btn-primary m-auto">تسجيل الدخول</router-link>
                                    </div>
                                    <form id="customer_login" method="post" novalidate="novalidate">
                                        <div class="form-group">
                                            <label for="loginInputName">أدخل رمز التحقق *</label>
                                            <input type="text" name="emailtokenv" class="form-control" id="loginInputName" placeholder="البريد الالكتروني" v-model="emailtokenv">
                                        </div>
                                        <div class="row">
                                            <div class="col-auto mr-auto">
                                                <div class="form-group">
                                                    <button class="btn btn-border"
                                                    :disabled="!isVadlidForm"
                                                     @click.prevent="validateForm()"
                                                    type="submit">تأكيد</button>
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
            emailtokenv:'',
            remember:true,emailverified:true,
            errors : [],
            activated:false,
        }
    },
 components:{
	  mainheader
  },
    computed:{
        isVadlidForm(){
         return this.emailtokenv.length
       }
    },
    methods:{
        validateForm(){

            this.errors = [];

            axios.post('/verifyEmail2/',{emailtokenv:this.emailtokenv})
            .then(res =>{
              if(res.data.code == '0'){
                  this.errors.push(res.data.message)
              }else{
                  this.activated = true;
              }
            })
            .then(err => {
               // console.log(err)
            })

        }
    }
}
</script>

<style>

</style>