import { createRouter, createWebHistory, type RouteRecordRaw } from 'vue-router'
import Home from '@/views/Home.vue'
import About from '@/views/About.vue'
import Research from '@/views/Research.vue'
import Projects from '@/views/Projects.vue'
import Team from '@/views/Team.vue'
import Events from '@/views/Events.vue'
import Contact from '@/views/Contact.vue'

const routes: RouteRecordRaw[] = [
  {
    path: '/',
    name: 'Home',
    component: Home,
  },
  {
    path: '/about',
    name: 'About',
    component: About,
  },
  {
    path: '/research',
    name: 'Research',
    component: Research,
  },
  {
    path: '/projects',
    name: 'Projects',
    component: Projects,
  },
  {
    path: '/team',
    name: 'Team',
    component: Team,
  },
  {
    path: '/events',
    name: 'Events',
    component: Events,
  },
  {
    path: '/contact',
    name: 'Contact',
    component: Contact,
  },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
  scrollBehavior() {
    return { top: 0 }
  },
})

export default router
