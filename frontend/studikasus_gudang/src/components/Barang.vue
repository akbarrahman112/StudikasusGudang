<template>
  <div>
    <router-link to="/barang/create">Tambah Data</router-link>
    <center>
      <br>
      <table border="5">
          <tr>
            <th>No</th>
            <th>Kategori</th>
            <th>Nama Barang</th>
            <th>Stok</th>
            <th>Action</th>
          </tr>
          <tr v-for="(barang, i) in data_barang" :key="i">
            <td>{{ i + 1 }}</td>
            <td>{{ barang.kategori }}</td>
            <td>{{ barang.nama_barang }}</td>
            <td>{{ barang.stok }}</td>
            <td>
              <router-link :to="'/barang/' + barang.id">Edit</router-link>
              <button @click="deleteRow(barang.id)">Delete</button>
            </td>
          </tr>
      </table>
    </center>
  </div>
</template>

<script>
import { api } from '@/helper/api'

export default {
  name: 'Barang',
  data (){
    return {
      data_barang: []
    }
  },
  mounted (){
    this.get()
  },
  methods: {
    get (){
      api.get('barang').then(res => {
        if(res.data.status === 'success'){
          this.data_barang = res.data.result
        }else{
          console.log(res.data.message)
        }
      }).catch(err => {
        console.log(err)
      })
    },
    deleteRow (id){
      api.delete('barang/' + id).then(res => {
        if (res.data.status === 'success'){
          this.get()
        }else {
          console.log(res.data.message)
        }
      }).catch(err => {
        console.log(err)
      })
    }
  }
}
</script>
