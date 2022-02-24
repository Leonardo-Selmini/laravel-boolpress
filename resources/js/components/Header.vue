<template>
  <header>
    <a href="/admin/home">Reserved Area</a>
    <nav>
      <li>
        <router-link :to="{ name: 'Home' }">Home</router-link>
      </li>
      <li>
        <router-link :to="{ name: 'About' }">About</router-link>
      </li>
    </nav>
  </header>
</template>

<script>
export default {
  name: "Header"
}
</script>

<style>

</style>