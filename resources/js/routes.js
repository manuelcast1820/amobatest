import AllProfiles from './components/AllProfiles.vue';
import Home from './components/Home.vue';
import CreateProfile from './components/CreateProfile.vue';
import EditProfile from './components/EditProfile.vue';
import Login from './components/Auth/Login.vue';
import Register from './components/Auth/Register.vue';
 
export const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'register',
        path: '/register',
        component: Register
    },
    {
        name: 'login',
        path: '/login',
        component: Login
    },
    {
        name: 'profiles',
        path: '/profiles',
        component: AllProfiles
    },
    {
        name: 'create',
        path: '/profiles/create',
        component: CreateProfile
    },
    {
        name: 'edit',
        path: '/profiles/edit/:id',
        component: EditProfile
    }
];