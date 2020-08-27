import Vue from 'vue';
import Vuex from 'vuex';
Vue.use(Vuex);

export const store = new Vuex.Store({
   state:{

   },
   getters: {
       saleProducts: state=>{
         var saleProducts = state.products.map(product=>{
            return {
                name: '**' + product.name + '**',
                price: product.price/2,
            }
        });
        return saleProducts;
       },
   },
   mutations:{
    reducePrice: (state,payload)=>{
     state.products.forEach(product => {
         product.price -= payload;
      });   
    }  ,
    reportErrors: (payload)=>{
        this.$swal({
         icon: 'error',
         title: 'error',
         text: payload
       })
    }

   },
   showdeleteModal: ()=>{
           
    }
},
   actions:{
    reducePrice: (context,payload)=>{
         
    },
    showdeleteModal:(context)=>{
       
    }
   }
});