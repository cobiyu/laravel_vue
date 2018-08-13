import NotFoundComponent from '../components/NotFoundComponent'
import Hello from '../components/Hello'
import Home from '../components/Home'
import UserProfileComponent from '../components/UserProfileComponent'

const routes = {
    mode: 'history',
    routes: [
        {
            path: '/service',
            name: 'home',
            component: Home
        },
        {
            path: '/service/hello',
            name: 'hello',
            component: Hello,
            children: [
                {
                    path: 'profile',
                    component: UserProfileComponent
                }
            ]
        },
        {
            path: '*',
            component: NotFoundComponent
        }
    ],
};

export default routes;