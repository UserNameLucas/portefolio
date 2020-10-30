import Home from './components/Home';
import Contacts from './components/Contacts';
import Projects from './components/Projects';
import About from './components/About';
import NotFound from './components/NotFound';


export default{
    mode:'history',

    // linkActiveClass: 'bg-white',
    
    routes:[
        {
            path:'/',
            component: Home, 
            children: [
                {
                    path:'/contacts',
                    component: Contacts
                },{
                    path:'/projects',
                    component: Projects
                },{
                    path:'/about',
                    component: About
                }
              ]
        },{
            path:'*',
            component: NotFound
        }
        
]
};