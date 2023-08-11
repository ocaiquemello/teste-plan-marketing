<template>
  <div>
    <h3> Cadastrar Eletrodoméstico </h3>
    <form v-on:submit.prevent="submitForm">
      <div class="form-group col-6">
        <label for="name">Nome</label>
        <input type="text" class="form-control" id="name" placeholder="Nome" v-model="form.name">

        <label for="description">Descrição</label>
        <input type="text" class="form-control" id="description" placeholder="Descrição" v-model="form.description">

        <label for="tension">Tensão</label>
        <input type="text" class="form-control" id="tension" placeholder="Tensão" v-model="form.tension">

        <label for="brand">Marca</label>
        <select class="form-control" v-model="form.brand_id">
          <option selected="true">Selecione uma Marca</option>
          <option v-for="brand in brands" :value="brand.id" v-bind:key="brand.id">{{ brand.name }}</option>
        </select>
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
  name: 'CreateAppliance',
  data(){
    return{
      form: {
        name: '',
        description: '',
        tension: '',
        brand_id: 'Selecione uma Marca',
      },
      brands: null
    }
  },
  methods:{
    submitForm(){
      axios.post('http://localhost:8000/api/appliances/create', this.form)
        .then(() => {
          alert("Eletrodoméstico cadastrado com sucesso!")
        })
        .catch(() => {
          alert("Houve um erro ao cadastrar o Eletrodoméstico.")
        });
    }
  },
  mounted () {
    axios
      .get('http://localhost:8000/api/brands/')
      .then(response => ( this.brands = response.data ))
  }
}
</script>
