<template>
  <section>
    <h1>Our best recipes</h1>
    <ul>
      <li v-for="post in posts" :key="post.id">
        <div>
          <h3>{{post.title}}</h3>
          <h4>{{post.category.name}}</h4>
          <p>{{post.content}}</p>
          <router-link :to="{ name: 'Post', params: { slug: post.slug } }">View</router-link>
        </div>
        <img :src="'../../../storage/' + post.image" :alt="post.title + ' image' ">
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

<style lang="scss" scoped>
@import url('https://fonts.googleapis.com/css2?family=PT+Serif:wght@400;700&display=swap');

section {
  width: 90%;
  
  background-color: #f7f2e7dc;

  margin: 0 auto;
  border-radius: 2rem;

  h1 {
    font-family: 'Fira Sans', sans-serif;
    font-size: 2.4rem;

    color: #1C1C1E;

    padding-bottom: 1.6rem;
  }

  ul {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1rem;

    li {
      position: relative;

      aspect-ratio: .66;

      display: flex;
      justify-content: center;

      text-align: center;

      background-color: #F7F2E7;

      padding: 2rem 1.4rem;
      border-radius: 16px;

      list-style: none;

      &:hover img {
        opacity: 0;
        z-index: -100;
      }

      h3 {
        font-family: 'Fira Sans', sans-serif;
        font-size: 1.6rem;

        color: #1C1C1E;
      }

      h4 {
        font-size: 1.1rem;
        font-weight: 400;
        font-style: italic;

        color: #8E8E93;

        padding-bottom: 1rem;
      }

      p {
        max-height: 70%;
        overflow-y: scroll;

        font-family: 'PT Serif', serif;
        font-size: 1.2rem;

        color: #3C3930;
      }

      img {
        position: absolute;
        top: 0;
        left: 0;

        width: 100%;
        height: 100%;

        border-radius: 16px;

        transition: opacity .3s linear;
      }

      a {
        font-family: 'Fira Sans', sans-serif;
        font-size: 1.2rem;
        font-weight: 600;

        text-decoration: none;
        color: #BF5747;

        padding: 2rem;

        transition: .3s linear;

        &:hover {
          font-size: 1.4rem;
          text-decoration: underline;
        }
      }
    }
  }

}
</style>