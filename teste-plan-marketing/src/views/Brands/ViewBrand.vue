<template>
  <div>
    <h3> Visualizar Marca </h3>
    <form v-on:submit.prevent="submitForm">
      <div class="form-group col-6">
        <label for="name">Nome</label>
        <input type="text" class="form-control" id="name" placeholder="Nome" v-model="form.name">
      </div>
      <div class="form-group mt-3">
        <button class="btn btn-primary">Alterar</button>
      </div>
    </form>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  props: ['id'],
  name: 'ViewBrand',
  data(){
    return{
      form: {
        name: '',
      }
    }
  },
  methods:{
    submitForm(){
      axios.put('http://localhost:8000/api/brands/' + this.id, this.form)
        .then(() => {
          alert("Marca alterada com sucesso!")
        })
        .catch(() => {
          alert("Houve um erro ao alterar a Marca.")
        });
    }
  },
  mounted () {
    axios
      .get('http://localhost:8000/api/brands/' + this.id)
      .then(response => (this.form.name = response.data.name))
  }
}
</script>
