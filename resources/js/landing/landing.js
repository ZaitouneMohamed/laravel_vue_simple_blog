import { createApp } from 'vue';
import LandingApp from './components/index.vue'; // Adjust the path to your main landing component

const app = createApp(LandingApp);

// Optionally, you can use Vue Router for landing routes here
// import router from './router';
// app.use(router);

app.mount('#landing'); // Mount the app to a specific element in your landing.blade.php
