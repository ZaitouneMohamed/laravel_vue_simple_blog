<template>
    <!-- Page header with logo and tagline-->
    <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                    <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <Posts-list />
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <Search />
                    <!-- Categories widget-->
                    <Categorie />
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header">Side Widget</div>
                        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>
import Categorie from "./Categorie.vue"
import Search from "./Search.vue"
import PostsList from "./Posts.vue"

export default {
    components:{
        Categorie,
        Search,
        PostsList
    }
};
</script>
