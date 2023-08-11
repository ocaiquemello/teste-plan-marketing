<template>
  <div>
    <h3> Cadastrar Marca </h3>
    <form v-on:submit.prevent="submitForm">
      <div class="form-group col-6">
        <label for="name">Nome</label>
        <input type="text" class="form-control" id="name" placeholder="Nome" v-model="form.name">
      </div>
      <div class="form-group mt-3">
        <button class="btn btn-primary">Criar</button>
      </div>
    </form>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'CreateBrand',
  data(){
    return{
      form: {
        name: '',
      }
    }
  },
  methods:{
    submitForm(){
      axios.post('http://localhost:8000/api/brands/create', this.form)
        .then(() => {
          alert("Marca cadastrada com sucesso!")
        })
        .catch(() => {
          alert("Houve um erro ao cadastrar a Marca.")
        });
    }
  }
}
</script>
