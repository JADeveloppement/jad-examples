import Vue from "vue";
import ExApp from "./components/ExampleComponent.vue"

Vue.component('example-component', ExampleComponent);

new Vue({
    el: '#app',
});

console.log("ok");