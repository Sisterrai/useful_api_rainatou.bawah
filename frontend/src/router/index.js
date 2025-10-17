import { createRouter, createWebHistory } from 'vue-router'
import ModuleSection from '@/components/Modules/ModuleSection.vue'
import Sidebar from '@/components/Modules/Sidebar.vue'
import Home from '@/components/Modules/Home.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/modules',
      name: 'modulesection',
      component: ModuleSection,
    },
    {
      path: '/sidebar',
      name: 'sidebar',
      component: Sidebar,
    },{
      path: '/',
      name: 'home',
      component: Home,
    },
  ],
})

export default router
