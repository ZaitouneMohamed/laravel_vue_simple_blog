import { createApp } from 'vue'
import Home from './components/index.vue'

const app = createApp({})

app.component('Home', Home)

app.mount('#app')
