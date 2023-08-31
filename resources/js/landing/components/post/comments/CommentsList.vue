<template>
    <!-- Comments section-->
    <section class="mb-5">
        <div class="card bg-light">
            <h4 class="text text-center">Comment List</h4>
            <div class="card-body">
                <!-- Comment form-->
                <addcomment @commentAdded="refreshList" />
                <!-- Comment with nested comments-->
                <div class="d-flex mb-4" v-for="comment in comments">
                    <!-- Parent comment-->
                    <div class="flex-shrink-0"><img class="rounded-circle"
                            src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                    <div class="ms-3">
                        <div class="fw-bold">{{ comment.user.name }}</div>
                        {{ comment.body }}
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import AddComment from "./AddComment.vue"

export default {
    components: {
        'addcomment': AddComment
    },
    props: {
        comments: Array
    },
    data() {
        return {
            commentsList: this.comments
        }
    },
    methods: {
        refreshList() {
            console.log('dfghjk')
            // this.commentsList = this.comments
        },
    }
}
</script>
