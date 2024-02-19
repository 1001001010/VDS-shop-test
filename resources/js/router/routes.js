import Home from '../pages/Home.vue'
import Servers from '../pages/Servers.vue'
import Info from '../pages/Info.vue'
import Register from '../pages/Register.vue'
import Login from '../pages/Login.vue'

const routes = [
    {
        path: '/', 
        component: Home
    },
    {
        path: '/servers', 
        component: Servers,
        children: [
            {
              path: '', // leaves the path as '/servers'
              component: Servers,
            },
            {
              path: ':location', // adds a parameter for the location
              component: Servers,
            },
        ],
    },
    {
        path: '/info', 
        component: Info 
    },
    {
        path: '/register', 
        component: Register 
    },
    {
        path: '/login', 
        component: Login 
    }
];
export default routes;