<template>
  <div>
    <div class="nav">
      <a href="#" class="nav-logo">
        <img src="../assets/logo.png" alt="">
      </a>
      <div class="nav-mobile">
        <i class="fa fa-bars" v-on:click="openMenuMobile()"></i>  
      </div>
    </div>
    <div class="sidebar-list" id="sidebar">
      <div class="sidebar-list-item">
        <router-link to="/">
          <i class="fa fa-home"></i>
          <span class="tooltip">Eletrodomésticos</span>
        </router-link>
      </div>
      <div class="sidebar-list-item">
        <router-link to="/brands">
          <i class="fa fa-user"></i>
          <span class="tooltip">Marcas</span>
        </router-link>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'HeaderApp',
  data(){
    return{

    }
  },
  methods:{
    openMenuMobile(){
      document.getElementById("menu").classList.toggle("showMenu");
      document.getElementById("sidebar").classList.toggle("showSidebar");
    }
  }
}
</script>

<style>
.nav{
  width: 80px;
  height: 100%;
  display: inline-block;
  background-color:#5DAE8B;
  z-index: 5;
  position: fixed;
}

.nav-logo{
  display: flex;
  justify-content: center;
  align-items: center;
  border-bottom: 1px solid rgba(255, 255, 255, 0.25);
}

.nav-logo img{
  width: 50px;
  padding: 10px;
  vertical-align: middle;
}

.nav-mobile{
  display: none;
}

@media only screen and (max-width: 768px) {
  .nav{
      height: auto;
  }
  
  .nav-mobile{
      display: block;
      cursor: pointer;
      position: absolute;
      right: -3rem;
      text-align: center;
      top: 50%;
      transform: translateY(-50%);
      z-index: 9999;
      font-size: 1.4rem;
      padding: 2px 0.5rem 0;
      border-radius: 2px;
  }

  .nav-mobile i{
      font-size: 30px;
      color: #5CAD8A;
  }
}

.menu{
  width: 255px;
  position: fixed;
  top: 0;
  left: 5rem;
  height: 100%;
  background: #fff;
  z-index: 4;
  box-shadow: 0px 0px 40px 0px rgba(82, 63, 105, 0.1);
}

.menu-logo{
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100px;
}

.menu-logo img{
  box-shadow: 0px 5px 5px 0px rgba(44, 44, 44, 0.2);
  border: 2px solid #ccd4e8;
  padding: 4px;
  border-radius: 50%;
  width: 90px;
  height: 90px;
  margin-top: 60px;
}

.menu-name{
  border-bottom: 1px solid #eee;
}

.menu-name h2{
  text-align: center;
  margin-top: 50px;
  font-size: 17px;
}

.menu-name-social-icons{
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 10px;
}

.menu-name-social-icons a{
 margin: 0px 10px 10px;
  color: #41B883;
  background: #ebeef6;
  border-radius: 4px;
  padding: 10px;
  width: 20px;
  height: 20px;
  text-align: center;
}

@media only screen and (max-width: 768px) {
  .menu{
      left: -100%;
      transition: all 500ms ease-in-out;
  }
  .showMenu{
      left: 5rem;
  }

}

.header-top{
  position: fixed;
  top: 0;
  width: 100%;
  height: 71px;
  padding: 0rem;
  background-color: #fff;
  z-index: 1;
  transition: all .2s ease;
  box-shadow: 0px 0px 40px 0px rgba(82, 63, 105, 0.1);
}

.header-top-content{
  padding-left: 370px;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.header-top-content input[type='text']{
  border: 1px solid #e2e8f5;
  background-color: #ffffff;
  height: 30px;
  border-radius: 6px;
  width: 232px;
  padding: 5px 10px;
}

.options-user{
      padding-right: 25px;
  list-style: none;
}

.options-user a.options-user-head{
  font-size: 20px;
  border: 1px solid #e2e8f5;
  padding: 10px;
  border-radius: 4px;
  color: #99CDA9;
}

.options-user ul li{
  position: relative;
}

.options-user li ul{
  display: none;
  background-color: #ffffff;
  width: 100%;
  z-index: 900;
  border-radius: 0;
  box-shadow: 0px 0px 40px 0px rgba(82, 63, 105, 0.1);
  border: 1px solid #deebfd;
  position: absolute;
  top: 70px;
  left: auto;
  right: 10px;
  bottom: auto;
  width: 230px;
  border-width: 1px;
  border-radius: 6px;
  list-style: none;
}

.options-user li ul:before {
  content: '';
  position: absolute;
  top: -8.5px;
  right: 24px;
  border-bottom: 9px solid #fff;
  border-left: 9px solid transparent;
  border-right: 9px solid transparent;
}

.options-user li ul li a{
  position: relative;
  padding: 8px 15px;
  height: 38px;
  display: flex;
  align-items: center;
  font-size: 16px;
  color: #000;
  border-bottom: 1px solid #eee;
}

.options-user li ul li a:hover{
  background-color: #eee;
}

.options-user li ul li a i{
  margin-right: 10px;
}

.options-user li a:hover .options-user li ul{
  visibility: visible;
}

@media only screen and (max-width: 768px) {
  .header-top-content input[type="text"]{
      width: 60%;
  }

  .header-top-content {
      padding-left: 132px;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
  }

  .options-user {
      margin-top: 0px;
  }
}

.sidebar-list{
  position: fixed;
  top: 12%;
  z-index: 5;
  display: flex;
  flex-direction: column;
  width: 80px;
}

.sidebar-list-item{
  flex: 1;
  justify-content: center;
  align-items: center;
  text-align: center;
  margin: 15px 0;
  position: relative;
}

.sidebar-list-item i{
  color: #fff;
  font-size: 25px;
  display: block;
  line-height: 1;
}

.sidebar-list-item .tooltip{
  visibility: hidden;
    background-color: black;
  color: #fff;
  text-align: center;
  padding: 5px 20px;
  font-size: 12px;
  border-radius: 6px;
  position: absolute;
  z-index: 1;    
  top: 0;
  left: 80%;
  min-width: 45px;
}

.sidebar-list-item:hover .tooltip{
  visibility: visible;
}

@media only screen and (max-width: 768px) {
  .sidebar-list{
      left: -100%;
      transition: all 300ms ease-in-out;
      background-color: #5CAD8A;
      height: 100%;
  }
  .showSidebar{
      left: 0%;
      top: 0;
  }
}

.menu-list{
  padding: 15px 25px 0px;
      border-bottom: 1px solid rgba(0, 0, 0, 0.05);
  height: calc(100vh - 280px);
  overflow-y: scroll;
}

.menu-list ul{
  list-style: none;
  margin-top: 20px;
}

.menu-list ul li a{
  font-size: 16px;
  color: #2d3240;
  padding: 10px 0;
  display: block;
  font-weight: 400;
  line-height: 1;
}

.menu-list ul li a:hover{
  color: #99cda9;
}

.menu-list-title{
  padding: 0;
  margin: 0;
  border-top: 0;
  padding-bottom: 10px;
  margin-bottom: 10px;
  border-bottom: 1px solid #eee;
  font-size: 18px;
  color: #000;
  font-weight: 600;
  position: relative;
}

.menu-list-title::before{
      content: "";
  display: block;
  width: 50px;
  height: 1px;
  background-color: #99CDA9;
  position: absolute;
  bottom: -1px;
  left: 0;
}

.dropdown {
position: relative;
display: block;
transition: all 300ms ease-in-out;
}

.dropdown-content {
display: none;
min-width: 160px;
z-index: 1;
margin: 5px 20px;
}

.dropdown-content a {
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
}

.dropdown-content a:hover{
  color: #99cda9;
}

.show {
  display:block !important;
}

.menu-list-item-2{
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.menu-list-item-2{
  background-color: #f9f9f9;
  margin-bottom: 10px;
}

.menu-list-item-2 h5{
  margin: 0;
  padding-right: 10px;
}

.menu-list-item-2 i{
  background: #ebeef6;
  padding: 10px;
  width: 20px;
  height: 20px;
  text-align: center;
}

.menu-list::-webkit-scrollbar {
width: 5px;
}

.menu-list::-webkit-scrollbar-track {
  background-color: #f4f4f4;
}

.menu-list::-webkit-scrollbar-thumb {
  background-color: #f1f1f1;
}

.menu-list::-webkit-scrollbar-thumb:hover {
background: #99CDA9;
}
</style>