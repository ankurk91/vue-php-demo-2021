import '@/sass/app.scss';
import '@/sass/vendor.scss';
import './bootstrap';

import Vue from 'vue';

import Welcome from "./Components/Welcome.vue";

const app = new Vue({
    data() {
        return {
            //
        }
    },
    components: {
        Welcome
    }
})

if (document.getElementById('app')) {
    app.$mount('#app')
} else {
    console.warn('Could not load app!')
}