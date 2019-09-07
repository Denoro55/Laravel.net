/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import 'jquery';

import initMessages from './block/messages.js';

$(function(){
    initMessages();
});

// window.Vue = require('vue');
//
// /**
//  * The following block of code may be used to automatically register your
//  * Vue components. It will recursively scan this directory for the Vue
//  * components and automatically register them with their "basename".
//  *
//  * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
//  */
//
// // const files = require.context('./', true, /\.vue$/i)
// // files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
//
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//
// /**
//  * Next, we will create a fresh Vue application instance and attach it to
//  * the page. Then, you may begin adding components to this application
//  * or customize the JavaScript scaffolding to fit your unique needs.
//  */
//
// import initSliders from './libs/toggle.js';
//
// const app = new Vue({
//     el: '#app',
//     methods: {
//         showMessage() {
//
//         }
//     },
//     mounted() {
//         let btn = document.querySelector('.js-show-post');
//         let content = document.querySelector('.card-content');
//         let obj1 = new initSliders(content);
//         btn.addEventListener('click',function() {
//             obj1.toggle(1000);
//         })
//     }
// });
