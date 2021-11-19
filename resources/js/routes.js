import AllProfiles from './components/AllProfiles.vue';
import CreateProfile from './components/CreateProfile.vue';
import EditProfile from './components/EditProfile.vue';
 
export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllProfiles
    },
    {
        name: 'create',
        path: '/create',
        component: CreateProfile
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditProfile
    }
];