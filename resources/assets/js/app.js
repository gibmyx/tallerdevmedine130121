require('./bootstrap');

window.Vue = require('vue');

import router from './routes';
import Vuelidate from 'vuelidate';
import VueNumeric from 'vue-numeric';
import CxltToastr from 'cxlt-vue2-toastr';


const toastrConfigs = {
    position: 'top right',
    showDuration: 2000,
    timeOut: 5000,
    progressBar: true,
    successColor: 'green',
    infoColor: 'blue',
    warningColor: 'orange',
    errorColor: 'red',
};

Vue.use(CxltToastr, toastrConfigs);
Vue.use(Vuelidate);
Vue.use(VueNumeric);
Vue.component('app', require('./components/app.vue'));

const app = new Vue({
    el: '#app',
    router
});
