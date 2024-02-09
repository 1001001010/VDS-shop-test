import Home from '../pages/Home.vue'
import Servers from '../pages/Servers.vue'
import Info from '../pages/Info.vue'

const routes = [
    {
        path: '/', 
        component: Home
    },
    {
        path: '/servers', 
        component: Servers 
    },
    {
        path: '/info', 
        component: Info 
    }
];

export default routes;