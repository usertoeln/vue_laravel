import Vue from 'vue';
/**************/
import VueRouter from 'vue-router';
import appRoutes from './Services/Services';

Vue.use(VueRouter);
const appRouter = new VueRouter({
    mode: 'history',
    routes: appRoutes
});
/**************/

const app = new Vue({
    el: '#wrapper',
    router: appRouter
});

export default 'home';