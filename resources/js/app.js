require('./bootstrap')

import Vue from "vue";
import Vuetify from 'vuetify'
import Producto from './components/Producto.vue'

Vue.use(Vuetify)

const app = new Vue({
    el: '#app',
    components: { Producto },
    vuetify: new Vuetify()
})
