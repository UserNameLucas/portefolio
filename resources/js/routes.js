import Logo from './components/Logo';
import LogoSymbol from './components/LogoSymbol';
import Colors from './components/Colors';
import Illustrations from './components/Illustrations';
import LoadersAnimations from './components/LoadersAnimations';
import Mascot from './components/Mascot';
import Typography from './components/Typography';
import Wallpapers from './components/Wallpapers';
import NotFound from './components/NotFound';

export default{
    mode:'history',

    linkActiveClass: 'font-bold',
    
    routes:[
        {
            path:'*',
            component: NotFound
        },
        {
            path:'/',
            component: Logo
        },
        {
            path:'/colors',
            component: Colors
        },{
            path:'/logoSymbol',
            component: LogoSymbol
        },{
            path:'/illustrations',
            component: Illustrations
        },{
            path:'/loadersAnimations',
            component: LoadersAnimations
        },{
            path:'/mascot',
            component: Mascot
        },{
            path:'/typography',
            component: Typography
        },{
            path:'/wallpapers',
            component: Wallpapers
        },
        
]
};