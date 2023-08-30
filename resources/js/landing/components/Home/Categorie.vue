<template>
    <!-- Categories widget-->
    <div class="card mb-4">
        <div class="card-header">Categories</div>
        <div class="card-body">
            <div class="row">
                <div class="col-6" v-for="(categorie, index) in categories">
                    <ul class="list-unstyled mb-0">
                        <li><a href="#">{{ categorie.name }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from "axios"
export default {
    data() {
        return {
            categories: []
        }
    },
    mounted() {
        this.GetCategories()
    },
    methods: {
        GetCategories() {
            axios.get('/api/categories')
                .then((response) => this.categories = response.data.data);
        }
    }
}
</script>
