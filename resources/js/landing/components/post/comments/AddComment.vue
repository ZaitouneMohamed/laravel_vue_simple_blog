<template>
    <div class="alert alert-success" v-if="message" role="alert">
        {{ message }}
    </div>
    <form class="mb-4">
        <textarea class="form-control" rows="3" v-model="comment.body"
            placeholder="Join the discussion and leave a comment!"></textarea>
        <button type="button" class="btn btn-success" @click="CreateComment">Submit</button>
    </form>
</template>

<script>

import axios from 'axios';

export default {
    data() {
        return {
            comment: { body: "" },
            message: "",
            token: JSON.parse(localStorage.getItem('token')) || '',
        }
    },
    props: {
        post_id: Number,
    },
    mounted() {
        console.log(this.token)
    },
    methods: {
        CreateComment() {
            const config = {
                headers: {
                    "Authorization": `Bearer ${this.token}`
                },
            };
            axios.post('/api/AddComment/' + this.post_id, this.comment, config)
                .then((response) => {
                    this.comment = { body: "" },
                        this.message = response.data.message
                    this.$emit('commentAdded')
                })
                .catch(err => console.log(err))

        }
    }
}

</script>
