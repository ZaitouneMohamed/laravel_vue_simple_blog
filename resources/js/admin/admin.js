import { createApp } from 'vue';
import AdminApp from './components/index.vue'; // Adjust the path to your main admin component

const app = createApp(AdminApp);

// Optionally, you can use Vue Router for admin routes here
import router from './router';
app.use(router);

app.mount('#admin'); // Mount the app to a specific element in your admin.blade.php
