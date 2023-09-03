<template>
    <div class="col-lg-8">
        <!-- Nested row for non-featured blog posts-->
        <div class="row">
            <div class="col-6" v-for="(post, index) in posts">
                <div class="card mb-4">
                    <a href="#!"><img class="card-img-top" :src="post.image" alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted">{{ post.created_at }}</div>
                        <h2 class="card-title h4">{{ post.title }}</h2>
                        <p class="card-text">{{ truncateText(post.body, 30) }}</p>
                        <router-link :to="'/post/' + post.id" class="btn btn-primary">Read more →</router-link>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pagination-->
        <div class="col-lg-8">
            <!-- Nested row for non-featured blog posts -->
            <!-- ... (your existing code for displaying posts) ... -->

            <!-- Pagination -->
            <nav aria-label="Pagination">
                <hr class="my-0" />
                <ul class="pagination justify-content-center my-4">
                    <!-- Previous page link -->
                    <li class="page-item" :class="{ disabled: !pagination.prev_page_url }">
                        <a class="page-link" @click="getPosts(pagination.prev_page_url)" href="#" tabindex="-1"
                            aria-disabled="true">
                            Newer
                        </a>
                    </li>

                    <!-- Page links -->
                    <li v-for="page in pagination.last_page" :key="page" class="page-item"
                        :class="{ active: page === pagination.current_page }">
                        <a class="page-link" @click="getPosts(pagination.path + '?page=' + page)" href="#">
                            {{ page }}
                        </a>
                    </li>

                    <!-- Next page link -->
                    <li class="page-item" :class="{ disabled: !pagination.next_page_url }">
                        <a class="page-link" @click="getPosts(pagination.next_page_url)" href="#">
                            Older
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</template>

<!-- <script>
import axios from "axios"

export default {
    data() {
        return {
            posts: [],
            pagination: {}
        }
    },
    mounted() {
        this.GetPosts()
    },
    methods: {
        GetPosts() {
            axios.get('/api/posts')
                .then((response) => {
                    this.posts = response.data.data,
                        this.pagination = response.data

                });
        }
    }
}
</script> -->

<script>
import axios from "axios";

export default {
    data() {
        return {
            posts: [],
            pagination: {},
        };
    },
    mounted() {
        this.getPosts("/api/posts");
    },
    methods: {
        getPosts(url) {
            axios.get(url).then((response) => {
                this.posts = response.data.data;
                this.pagination = response.data;
            });
        },
        truncateText(text, maxLength) {
            if (text && text.length > maxLength) {
                return text.slice(0, maxLength) + "...";
            }
            return text;
        },
    },
};
</script>
