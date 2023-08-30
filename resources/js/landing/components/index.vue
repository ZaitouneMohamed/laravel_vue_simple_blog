<!-- landing/components/index.vue -->
<template>
    <div>
        <NavigationBar />
        <router-view></router-view>
    </div>
</template>

<script>
import NavigationBar from "./navbar.vue"; // Adjust the import path as needed

export default {
    components: {
        NavigationBar
    },
    // ...
};
</script>
