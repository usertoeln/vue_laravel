import about from '../components/about';
import contact from '../components/contact';
import home from '../components/home';

let appRoutes = [
    {path: '/About', name: 'about', component: about},
    {path: '/Contact', name: 'contact', component: contact},
    {path: '/', name: 'home', component: home},
];
export default appRoutes;