import { createApp } from 'vue'
import Home from './components/landing/index.vue'

const app = createApp({})

app.component('welcome', Home)

app.mount('#app')
