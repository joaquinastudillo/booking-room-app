import HomeComponent from './components/Home.vue' 
import CreateComponent from './components/Create.vue'

export const routes = [
    {
        path: '/showpanel',
        component: HomeComponent
    },
    {
        path: '/createbooking',
        component: CreateComponent
    }
    
]