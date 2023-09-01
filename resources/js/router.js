import { createRouter, createWebHistory } from "vue-router";

import Home from "./landing/components/Home/Home.vue";
import Post from "./landing/components/post/Show.vue";
import Profile from "./landing/components/auth/profile/Profile.vue";

const routes = [
    { path: "/", component: Home, name: "home" },
    { path: "/post/:id", component: Post },
    {
        path: "/Profile",
        component: Profile,
        beforeEnter: (to, from, next) => {
            const variableValue = localStorage.getItem("token"); // Replace with your variable value
            if (variableValue) {
                next();
            } else {
                next("/");
            }
        },
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
