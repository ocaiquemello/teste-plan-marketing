<template>
  <div>
    <h3> Visualizar Eletrodoméstico </h3>
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
          <option v-for="brand in brands" :selected="form.brand_id ? true : false"  :value="brand.id" v-bind:key="brand.id">{{ brand.name }}</option>
        </select>
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
  name: 'ViewAppliance',
  data(){
    return{
      form: {
        name: '',
        description: '',
        tension: '',
        brand_id: '',
      },
      brands: null
    }
  },
  methods:{
    submitForm(){
      axios.put('http://localhost:8000/api/appliances/' + this.id, this.form)
        .then(() => {
          alert("Eletrodoméstico alterado com sucesso!")
        })
        .catch(() => {
          alert("Houve um erro ao alterar o Eletrodoméstico.")
        });
    }
  },
  mounted () {
    axios
      .get('http://localhost:8000/api/brands/')
      .then(response => ( this.brands = response.data ))

      axios
      .get('http://localhost:8000/api/appliances/' + this.id)
      .then(response => (this.form.name = response.data.name,
      this.form.description = response.data.description,
      this.form.tension = response.data.tension,
      this.form.brand_id = response.data.brand_id
      ))
  }
}
</script>
