<template>
    <div class="col-lg-8">
        <!-- Nested row for non-featured blog posts-->
        <div class="row">
            <div class="col-6" v-for="(post, index) in posts">
                <div class="card mb-4">
                    <a href="#!"><img class="card-img-top" :src="post.image"
                            alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted">{{ post.created_at }}</div>
                        <h2 class="card-title h4">{{ post.title }}</h2>
                        <p class="card-text">Lorem consectetur adipisicing elit. Reiciendis aliquid
                            atque, nulla.</p>
                        <router-link :to="'/post/' + post.id" class="btn btn-primary" >Read more →</router-link>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pagination-->
        <nav aria-label="Pagination">
            <hr class="my-0" />
            <ul class="pagination justify-content-center my-4">
                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a>
                </li>
                <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                <li class="page-item"><a class="page-link" href="#!">2</a></li>
                <li class="page-item"><a class="page-link" href="#!">3</a></li>
                <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                <li class="page-item"><a class="page-link" href="#!">15</a></li>
                <li class="page-item"><a class="page-link" href="#!">Older</a></li>
            </ul>
        </nav>
    </div>
</template>

<script>
import axios from "axios"

export default {
    data() {
        return {
            posts: []
        }
    },
    mounted() {
        this.GetPosts()
    },
    methods: {
        GetPosts() {
            axios.get('/api/posts')
                .then((response) => this.posts = response.data);
        }
    }
}
</script>
