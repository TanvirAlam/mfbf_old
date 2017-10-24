import Vue from 'vue'
import store from './store'
import router from './router'
import App from './components/App.vue'
import VeeValidate from 'vee-validate'
import VueSweetAlert from 'vue-sweetalert'
import './utils/interceptors'
import VueBlu from 'vue-blu'

Vue.use(VeeValidate);
Vue.use(VueSweetAlert)
Vue.use(VueBlu)

Vue.component('icon', require('./components/Icon'))
Vue.component('alert', require('./components/Alert'))
Vue.component('loader', require('./components/Loader'))

const app = new Vue({
    el: '#app',
    store,
    router,
    ...App
})

app.$mount('#app')
