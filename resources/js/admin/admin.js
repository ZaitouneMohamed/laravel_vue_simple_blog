import { createApp } from 'vue';
import router from '../router';
import AdminApp from './components/index.vue';

const app = createApp(AdminApp);

app.use(router);

app.mount('#admin');
