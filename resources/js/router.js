import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import Home from "./pages/Home";
import About from "./pages/About";
import Post from "./components/Post";

const router = new VueRouter({
    mode: "history",
    routes: [
      {
          path: "/",
          name: "Home",
          component: Home
      },
      {
        path: "/who",
        name: "About",
        component: About
      },
      {
        path: "/posts/:slug",
        name: "Post",
        component: Post
      },
    ]
});

export default router