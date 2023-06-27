import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
// import router from './router'

import './static/main.css'

const app = createApp(App)

app.use(createPinia())

app.mount('#app')

