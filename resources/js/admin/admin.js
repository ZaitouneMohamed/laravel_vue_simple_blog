import { createApp } from 'vue';
import router from '../admin/router';
import AdminApp from './components/index.vue';
import NavigationBar from "./components/NavBar";

const app = createApp(AdminApp);

app.use(router);

app.mount('#admin');
