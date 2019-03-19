<template>
  <div>
    <form @submit.prevent="submitForm">
      <br>
        <label>Kategori</label>
        <input type="text" v-model="barang.kategori">
        <label>Nama Barang</label>
        <input type="text" v-model="barang.nama_barang">
        <label>Stok</label>
        <input type="text" v-model="barang.stok">
        <button type="submit">Save</button>
    </form>
  </div>
</template>

<script>
import { api } from '@/helper/api'

export default {
  name: 'barangForm',
  data (){
    return{
      barang: {
        id: null,
        kategori: '',
        nama_barang: '',
        stok: ''
      }
    }
  },
  mounted (){
    let id = this.$route.params.id

    if (id){
      api.get('/barang/' + id).then(res => {
        this.barang = res.data.result
      })
    }
},
methods: {
  submitForm (){
    let data = this.barang
    let url = 'barang'

    if (this.barang.id){
      url += '/' + this.barang.id
    }

    api.post(url, data).then(res => {
      if(res.data.status === 'success'){
        this.$router.push('/barang')
      }else{
        console.log(res.data.message)
      }
    }).catch(err => {
      console.log(err)
    })
  }
}
}
</script>
