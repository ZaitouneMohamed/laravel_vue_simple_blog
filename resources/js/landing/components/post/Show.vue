<template>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">{{ post.title }}</h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">Posted on {{ post.created_at }}</div>
                        <!-- Post categories-->
                        <a class="badge bg-secondary text-decoration-none link-light" href="#!">{{ post.category }}</a>
                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4"><img class="img-fluid rounded" :src="post.image" alt="..." /></figure>
                    <!-- Post content-->
                    <section class="mb-5">
                        <p class="fs-5 mb-4">{{ post.body }}</p>
                    </section>
                </article>
                <!-- Comments section-->
                <CommentsList :comments=comments :post_id=post.id @commentAdded="refresh" v-if="logged" />
                <div v-else>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Login">
                        Login
                    </button>
                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#register">
                        Register
                    </button> -->
                </div>
            </div>
            <div class="col-lg-4">
                <!-- Search widget-->
                <Search />
                <!-- Categories widget-->
                <Categorie />
                <!-- Side widget-->
                <div class="card mb-4">
                    <div class="card-header">Side Widget</div>
                    <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use,
                        and feature the Bootstrap 5 card component!</div>
                </div>
            </div>
        </div>
    </div>
    <Login @logged="login_success" />
    <!-- <Register/> -->
</template>

<script>
import axios from "axios"
import Categorie from "../Home/Categorie.vue"
import Search from "../Home/Search.vue"
import Login from "../auth/Login"
import Register from "../auth/Register"
import CommentsList from "./comments/CommentsList.vue"

export default {
    components: {
        Categorie,
        Search,
        Login,
        Register,
        CommentsList
    },
    data() {
        return {
            post: [],
            comments: [],
            post_id: this.$route.params.id,
            logged: localStorage.getItem('token') ? true : false
        }
    },
    mounted() {
        this.GetPost()
    },
    methods: {
        GetPost() {
            axios.get('/api/posts/' + this.post_id)
                .then((response) => {
                    this.post = response.data,
                        this.comments = response.data.comments
                });
        },
        refresh() {
            this.GetPost()
        },
        login_success() {
            this.logged = true
        }
    }
};
</script>
