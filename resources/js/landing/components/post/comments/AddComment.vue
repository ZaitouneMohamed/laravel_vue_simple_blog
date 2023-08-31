<template>
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
        }
    },
    methods: {
        CreateComment() {
            axios.post('/api/AddComment/' + 1, this.comment)
                .then((response) => {
                    this.comment = { body: "" },
                        this.$emit('commentAdded')
                })
                .catch(err => console.log(err))

        }
    }
}

</script>
