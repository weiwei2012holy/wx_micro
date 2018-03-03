import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter);

export default new VueRouter({
    routes: [
        {
            name:"test",
            path:'/',
            component: resolve => void (require(['./components/ExampleComponent.vue'], resolve))
        },
        {
            name: "login",
            path: '/login',
            component: resolve => void (require(['./components/AdminLogin.vue'], resolve))
        },
    ],
    
})