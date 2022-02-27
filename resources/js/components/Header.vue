<template>
  <header>
    <img src="../../../public/images/logo.png" alt="logo">
    <nav>
      <li>
        <router-link :to="{ name: 'Home' }">Home</router-link>
      </li>
      <li>
        <router-link :to="{ name: 'About' }">About</router-link>
      </li>
      <li>
        <a href="/admin/home">Reserved Area</a>
      </li>
    </nav>
  </header>
</template>

<script>
export default {
  name: "Header"
}
</script>

<style lang="scss" scoped>
header {
  display: flex;

  background-color: #BF5747;
  
  padding: .6rem 1rem;

  img {
    height: 3.4rem;
  }

  nav {
    display: flex;
    align-items: center;

    li {
      font-family: 'Fira Sans', sans-serif;
      
      list-style: none;

      padding-left: 1.4rem;
      
      a {
        font-size: 1.1rem;
        font-weight: 900;

        color: white;
        text-decoration: none;

        transition: font-size .3s linear;

        &:hover {
          font-size: 1.2rem;
        }
      }

    }
  }
}
</style>