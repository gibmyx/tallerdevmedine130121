import VueRouter from "vue-router";
import Vue from 'vue';
Vue.use(VueRouter);
import inicio from "./../components/inicio";
import registrar from "./../components/registrar";

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'inicio',
            meta: {
                title: "Inicio"
            },
            component: inicio
        },
        {
            path: '/registrar',
            name: 'registrar',
            meta: {
              title: "Registrar"
            },
            component: registrar
        },
    ],
});

export default router;
