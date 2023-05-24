import './bootstrap';
import { createApp } from 'vue';

const header = createApp({});
const presentation = createApp({});
const login = createApp({});
const footer = createApp({})

import AppHeader from './components/AppHeader.vue';
import AppPresentation from './components/AppPresentation.vue';
import AppLogin from './components/AppLogin.vue';
import AppFooter from './components/AppFooter.vue';

header.component('headerapp', AppHeader);
presentation.component('presentation-app', AppPresentation);
login.component('login-app', AppLogin);
footer.component('footerapp', AppFooter);

header.mount('#header');
presentation.mount("#presentation");
login.mount("#login")
footer.mount("#footer");