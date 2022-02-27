<template>
  <div>
    <Header></Header>
    <Main></Main>
  </div>
</template>



<script>
import Header from "./Header.vue";
import Main from "./Main.vue";

export default {
  name: "App",
  // data(){
  //   return {
  //   }
  // },
  components: {
    Main,
    Header
  },
}
</script>



<style lang="scss">
@import url('https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,400;0,700;1,900&display=swap');

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  background-color: #FFDAC0;
  background-image: url("../../../public/images/back-pattern.png");
}
</style>