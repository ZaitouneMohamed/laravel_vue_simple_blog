<template>
    <NavigationBar />
    <router-view></router-view>
</template>

<script>
import NavigationBar from "./NavBar.vue";

export default {
    components: {
        NavigationBar
    },
};
</script>
