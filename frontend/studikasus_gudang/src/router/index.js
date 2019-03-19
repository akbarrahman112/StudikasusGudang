import Vue from 'vue'
import Router from 'vue-router'
import Barang from '@/components/Barang'
import BarangForm from '@/components/BarangForm'
Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/barang',
      name: 'Barang',
      component: Barang
    },
    {
      path: '/barang/create',
      name: 'BarangCreate',
      component: BarangForm
    },
    {
      path: '/barang/:id',
      name: 'BarangEdit',
      component: BarangForm
    }
  ]
})
