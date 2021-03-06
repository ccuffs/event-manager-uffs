/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('base-card', require('./components/base/Card.vue').default);
Vue.component('base-header', require('./components/base/Header.vue').default);
Vue.component('base-modal', require('./components/base/Modal.vue').default);

Vue.component('event-form', require('./components/EventForm.vue').default);
Vue.component('speaker-form', require('./components/SpeakerForm.vue').default);

Vue.component('alert-toast', require('./components/ToastAlert.vue').default);
Vue.component('img-handler', require('./components/ImgUploadHandler.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
