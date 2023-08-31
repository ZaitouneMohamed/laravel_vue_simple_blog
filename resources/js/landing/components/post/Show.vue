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
                <CommentsList :comments=comments />
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
</template>

<script>
import axios from "axios"
import Categorie from "../Home/Categorie.vue"
import Search from "../Home/Search.vue"
import CommentsList from "./comments/CommentsList.vue"

export default {
    components: {
        Categorie,
        Search,
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
        }
    }
};
</script>
