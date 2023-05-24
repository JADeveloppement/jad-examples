import './bootstrap';
import { createApp } from 'vue';

const app = createApp({});

import AppHeader from './components/AppHeader.vue';
app.component('headerapp', AppHeader);

app.mount('#app');
