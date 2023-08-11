import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Dashboard',
    component: () => import('../views/Dashboard.vue')
  },
  {
    path: '/brands',
    name: 'Brands',
    component: () => import('../views/Brand.vue')
  },
  {
    path: '/brands/create',
    name: 'Create Brand',
    component: () => import('../views/Brands/CreateBrand.vue')
  },
  {
    path: '/brands/:id',
    name: 'View Brand',
    component: () => import('../views/Brands/ViewBrand.vue'),
    props: true
  },
  {
    path: '/appliances/create',
    name: 'Create Appliance',
    component: () => import('../views/Appliances/CreateAppliance.vue')
  },
  {
    path: '/appliances/:id',
    name: 'View Appliance',
    component: () => import('../views/Appliances/ViewAppliance.vue'),
    props: true
  }
]

const router = new VueRouter({
  routes
})

export default router