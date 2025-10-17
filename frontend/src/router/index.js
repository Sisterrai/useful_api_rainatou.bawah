import { createRouter, createWebHistory } from 'vue-router'
import ModuleSection from '@/components/Modules/ModuleSection.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/modules',
      name: 'modulesection',
      component: ModuleSection,
    },
  ],
})

export default router
