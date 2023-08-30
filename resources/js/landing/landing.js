import { createApp } from 'vue';
import router from '../router.js';
import LandingApp from './components/index.vue';

const app = createApp(LandingApp);

app.use(router);

app.mount('#landing');
