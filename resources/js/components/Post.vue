<template>
  <section>
    <h2>{{post.title}}</h2>
    <p>{{post.content}}</p>
  </section>
</template>

<script>
export default {
  name: "Post",
  data(){
    return {
      post: {},
    }
  },
  created(){
    axios.get(`/api/posts/${this.$route.params.slug}`).then((response) => {
      this.post = response.data
    })
  }
}
</script>

<style>

</style>