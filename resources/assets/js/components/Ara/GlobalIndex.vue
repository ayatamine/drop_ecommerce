<template>
   <div>
      <mainheader></mainheader>
      <router-view></router-view>
      <mainFooter></mainFooter>
   </div>

</template>

<script>
import mainheader from '../Ara/header/Main'
import mainFooter from '../Ara/footer/Main'
export default {
  data(){
      return {

      }
  },
  components:{
     mainheader,mainFooter
  }
}
</script>
