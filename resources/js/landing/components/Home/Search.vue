<template>
    <div class="card mb-4">
        <div class="card-header">Search</div>
        <div class="card-body">
            <div class="input-group">
                <input class="form-control" type="text" v-model="inputValue" @input="handleInput"
                    placeholder="search here" />
            </div>
            <div v-if="inputValue">

                <div class="list-group" v-for="post in posts" v-if="posts.length">
                    <router-link :to="'/post/' + post.id" class="list-group-item list-group-item-action flex-column align-items-start"
                        aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">{{ post.title }}</h5>
                        </div>
                    </router-link>
                </div>
                <div v-else>
                    <h4 class="text text-center">nothing found</h4>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            inputValue: "",
            posts:[]
        };
    },
    methods: {
        handleInput(event) {
            this.inputValue = event.target.value;
            axios.get('/api/search/' + event.target.value)
                .then((response) => this.posts = response.data);
        },
        GetPost() {
        }
    }
};
</script>
