<template>
<section>
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

<style lang="scss" scoped>
section {
  padding: 2rem 4rem;
}
</style>