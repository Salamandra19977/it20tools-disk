import VueRouter from 'vue-router'
import Disk from './components/disk/Index'
import Available from './components/available/Index'
import Recent from './components/recent/Index'
import Favorites from './components/favorites/Index'
import Basket from './components/basket/Index'
export default new VueRouter ({
    routes: [
        {
            path: '/disk',
            component: Disk,
            name: 'Disk',
        },
        {
            path: '/available',
            component: Available,
            name: 'Available',

        },
        {
            path: '/recent',
            component: Recent,
            name: 'Recent',

        },
        {
            path: '/favorities',
            component: Favorites,
            name: 'Favorites',

        },
        {
            path: '/basket',
            component: Basket,
            name: 'Basket',
        }
    ],
    mode: 'history',
})