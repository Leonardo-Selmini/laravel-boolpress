<template>
<section>
  <h1>Home Page</h1>
  <PostsList></PostsList>
</section>
</template>

<script>
import PostsList from "./../components/PostsList.vue";

export default {
  name: "Home",
  components: {
    PostsList,
  }
}
</script>

<style>

</style>