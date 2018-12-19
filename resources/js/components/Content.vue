<template>
<div class="container" id="wrapper">
         <transition name="slide" mode="out-in">
           <router-view></router-view>
         </transition>
         <p></p>
</div>
</template>

<script>
    export default {
        name: 'ContentComponent',
        props: ['user-id'],
        data(){
          return {
            events: []
          }
        },
        mounted() {
            this.setupIdUser()
            this.showRouterView()
        },
        methods: {
          setupIdUser(){
            this.$store.commit('setupIdUser', this.$props.userId)
          },
          showRouterView(){
            this.$router.push('/showpanel')
          }
        }
    }
</script>

<style>
#wrapper {
  padding-top: 20px;
}
.slide-enter-active{
  animation: slide-in 200ms ease-out forwards;
}
.slide-leave-active{
  animation: slide-out 200ms ease-out forwards;
}
@keyframes slide-in{
  from{
      transform: translateY(-30px);
      opacity: 0;
  }
  to{
    transform: translateY(0);
    opacity: 1;
  }
}
@keyframes slide-out{
  from{
      transform: translateY(0px);
      opacity: 1;
  }
  to{
    transform: translateY(-30);
    opacity: 0;
  }
}
</style>
