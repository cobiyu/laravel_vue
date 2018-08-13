import Vue from 'vue'
import VueRouter from 'vue-router'
import routes from './routes'

Vue.use(VueRouter)

import App from '../components/App'

const router = new VueRouter(routes);

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});
