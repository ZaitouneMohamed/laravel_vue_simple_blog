import { createRouter, createWebHistory } from "vue-router";

import Home from "./landing/components/Home/Home.vue";
import Post from "./landing/components/post/Show.vue";
import Profile from "./landing/components/auth/profile/Profile.vue";
import AdminHome from "./admin/components/Home/Home.vue";
import NotFound from "./errors/404.vue";
import Posts from "./admin/components/posts/Index.vue";

const routes = [
    { path: "/", component: Home },
    { path: "/post/:id", component: Post },
    {
        path: "/Profile",
        component: Profile,
        beforeEnter: (to, from, next) => {
            const variableValue = localStorage.getItem("token");
            if (variableValue) {
                next();
            } else {
                next("/");
            }
        },
    },
    {
        path: "/admin",
        component: AdminHome,
    },
    {
        path: "/admin/posts",
        component: Posts,
    },
    {
        path: "/:catchAll(.*)",
        component: NotFound,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
