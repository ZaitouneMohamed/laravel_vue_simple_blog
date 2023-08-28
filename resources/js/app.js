require('./bootstrap')

import { createApp } from 'vue'
import Welcome from './components/index.vue'

const app = createApp({})

app.component('welcome', Welcome)

app.mount('#app')
