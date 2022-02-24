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
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: sans-serif;
}

li {
  margin: 1rem 0;
}
</style>