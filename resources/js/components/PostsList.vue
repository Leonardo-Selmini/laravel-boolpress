<template>
  <section>
    <h3>Posts List</h3>
    <ul>
      <li v-for="post in posts" :key="post.id">
        <h3>{{post.title}}</h3>
        <p>{{post.content}}</p>
        <router-link :to="{ name: 'Post', params: { slug: post.slug } }">View</router-link>
      </li>
    </ul>
  </section>
</template>

<script>
export default {
  name: "PostsList",
  data(){
    return {
      posts: [],
    }
  },
  created(){
    axios.get('/api/posts')
    .then( (response) => {
      // handle success
      console.log(response.data);
      this.posts = response.data;
  })
  }
}
</script>

<style>

</style>