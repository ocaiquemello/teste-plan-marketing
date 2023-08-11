<template>
  <div class="dashboard">
    <div class="card-icon">
      <div class="card-icon-body">
        <router-link to="/appliances/create" title="Cadastrar">
          <h3>Cadastrar Eletrodoméstico</h3>
        </router-link>
      </div>
    </div>
    <div class="table">
      <div class="table-head">
        <h3>Eletrodomésticos</h3>
      </div>
      <div class="table-body">
        <div class="table-responsive">
          <table>
            <thead>
              <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Tensão</th>
                <th>Marca</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="appliance in appliances" v-bind:key="appliance.id">
                <td>
                  {{appliance.name }}
                </td>
                <td>
                  {{appliance.description }}
                </td>
                <td>
                  {{appliance.tension }}
                </td>
                <td>
                  {{appliance.brand.name }}
                </td>
                <td>
                  <div class="btn-group">
                    <router-link :to="'/appliances/' + appliance.id" title="Visualizar">
                      <i class="fa fa-eye"></i>
                    </router-link>
                    <a title="Deletar" v-on:click="deleteProduct(appliance.id)">
                      <i class="fa fa-trash"></i>
                    </a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: 'DashboardPage',
  data () {
    return {
      appliances: null
    }
  },
  methods: {
    deleteProduct(id) {
      var result = confirm("Você quer realmente deletar esse Eletrodoméstico?");
      if (result) {
        axios.delete("http://localhost:8000/api/appliances/" + id)
        .then(() => {
          alert("Eletrodoméstico deletada com sucesso!")
          window.location.reload()
        })
        .catch(() => {
          alert("Houve um erro ao deletar o Eletrodoméstico.")
          window.location.reload()
        });
      }
    }
  },
  mounted () {
    axios
      .get('http://localhost:8000/api/appliances/')
      .then(response => (this.appliances = response.data))
  }
}
</script>

<style>
.dashboard{
    display: grid;
    align-content: stretch;
}

.card-icon{
    flex: 1 1 18%;
    background: #ffffff;
    border-radius: 6px;
    border: 1px solid #deebfd;
    box-shadow: 0 3px 10px rgba(62,85,120,.045);
    margin: 0 8px 30px;
}

.card-icon .card-icon-body{
    padding: 20px;
}

.card-icon-i{
    width: 90px;
    height: 90px;
    border-radius: 50%;
    background-color:#e5f4e7;
    margin: 0 auto;
    position: relative;
}

.card-icon .card-icon-body h3{
    text-align: center;
    margin-bottom: 0;
    margin-top: 10px;
    font-size: 18px;
    font-weight: 400;
}

.table{
  flex: 0 1 58%;
  background: #ffffff;
  border-radius: 6px;
  border: 1px solid #deebfd;
  box-shadow: 0 3px 10px rgba(62,85,120,.045);
  margin: 0 8px 30px;
}

.table-responsive {
  display: block;
  width: 100%;
  overflow-x: auto;
}

.table .table-head{
  border-bottom: 1px solid #eee;
  padding: 0 15px;
}

.table .table-body{
  padding: 25px;
}

.table .table-body table{
  width: 100%;
  border-collapse: collapse;
}

.table table thead tr th{
  padding: 0 10px;
  height: 50px;
  vertical-align: middle;
  color: #666;
  font-weight: 500;
  border-bottom-color: #e2e8f0;
  background-color: #f7f8f9;
  border-top-width: 1px;
  border-bottom-width: 1px;
}

.table tbody tr td, .table tbody tr th {
  padding: 10px;
  border-bottom: 1px solid #eee;
  vertical-align: middle;
  font-size: 14px;
  color: #212529;
  text-align: center;
}

.btn-group{
  display: flex;
  align-items: center;
  justify-content: center;
}

.btn-group a{
  padding: 3px;
  width: 26px;
  height: 26px;
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
  margin: 0 5px;
      color: #fff;
  background-color:#5dae8b;
  border-color: #5dae8b;
  border-radius: 0.375rem;
  font-weight: 500;
}

.btn-group a{
      text-align: center;
  line-height: 25px;
  display: block;
}

@media only screen and (max-width: 768px) {
  .table{
      flex: 1 1 100%;
      overflow-x: scroll;
  }
}
</style>