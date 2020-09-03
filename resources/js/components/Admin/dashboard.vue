<template>
    <div id="admin-dashboard" class="Theme-two">
    <div class="col mt-3">
     <div class="row justify-content-center mt-1">
       <div class="col-sm-12">
         <div class="card Theme">
            <h5 class="card-header heading-color heading-style text-center">Buyers and Products</h5>
           <div class="card-body">
            <div class="col-md-12">
                <div class="card Theme">
                   <div class="card-header p-2">
                        <ul class="nav nav-pills">
                          <li class="nav-item mr-5"><button href="#users" class="btn nav-link  link-color  active show" data-toggle="tab"> <i class="fas fa-users    "></i> Users </button></li>
                          <li class="nav-item"><button href="#products" class="btn nav-link link-color " data-toggle="tab"> <i class="fab fa-product-hunt fa-1x" aria-hidden="true"></i> Products </button></li>
                        </ul>
                   </div>
                   <!-- /.card-header -->
                   <div class="card-body">
                     <div class="tab-content">
                       <!-- Users Tab -->
                       <div class="tab-pane active show" id="users">
                          <!--users-->
                         <div class="row justify-content-center Theme">
                          <!--users-->
                            <div  class="col-xs-12 text-center col-sm-6 col-md-4 col-lg-4 shadow p-1 mt-3 mb-5 rounded">
                              <div class="card-title"><p class="nav-link heading-style heading-color">Users</p></div>
                              <div id="total-Users" class="card Theme text-center   offset-sm-2">
                                <ul class="nav flex-column mt-4">
                                  <li class="nav-item mt-3">
                                    <p class="nav-link active">
                                    <span style="color: Dodgerblue;">
                                      <i class="fas fa-users  fa-4x  "></i>
                                    </span>
                                      </p>
                                  </li>
                                  <li class="nav-item mt-3">
                                    <p class="nav-link text-primary label-number"> {{ totalUsers }} </p>
                                  </li>
                                </ul>
                              </div>
                              <ul class="nav flex-column mt-4">
                               <li class="nav-item  mt-3">
                                <a href="http://127.0.0.1:8000/admin/users" type="button" class="btn  btn-success text-white"> Manage users</a>
                               </li>
                              </ul>
                            </div>
                          <!--subscribers-->
                            <div  class="col-xs-12 text-center col-sm-6 col-md-4 col-lg-4 shadow p-1 mt-3 mb-5 rounded">
                             <div class="card-title"><p class="nav-link heading-style heading-color">Subscribres</p></div>
                               <div id="total-Subscribers" class="card Theme text-center   offset-sm-2">
                                 <ul class="nav flex-column mt-4">
                                   <li class="nav-item mt-3">
                                     <p class="nav-link active">
                                     <span style="color: Mediumslateblue;">
                                     <i class="fas fa-newspaper fa-4x"></i>
                                     </span>
                                       </p>
                                   </li>
                                   <li class="nav-item mt-3">
                                     <p class="nav-link text-light label-number"> {{ totalSubscribers }} </p>
                                   </li>
                                 </ul>
                               </div>
                               <ul class="nav flex-column mt-4">
                                <li class="nav-item  mt-3">
                                 <a href="http://127.0.0.1:8000/admin/users" type="button" class="btn  btn-success text-white"> Manage subscribers</a>
                                </li>
                               </ul>
                            </div>
                         </div>
                       </div>
                       <!-- products Tab -->
                       <div class="tab-pane " id="products">
                          <!--Products-->
                         <div class="row justify-content-center Theme">
                          <!--products-->
                            <div  class="col-xs-12 text-center col-sm-6 col-md-4 col-lg-4 shadow p-1 mt-3 mb-5 rounded">
                              <div class="card-title"><p class="nav-link heading-style heading-color">Products</p></div>
                              <div id="total-products" class="card Theme text-center   offset-sm-2">
                                <ul class="nav flex-column mt-4">
                                  <li class="nav-item mt-3">
                                    <p class="nav-link active">
                                    <span style="color: Dodgerblue;">
                                      <i class="fab fa-product-hunt fa-4x "></i>
                                    </span>
                                      </p>
                                  </li>
                                  <li class="nav-item mt-3">
                                    <p class="nav-link text-primary label-number">{{ totalProducts }} </p>
                                  </li>
                                </ul>
                              </div>
                              <ul class="nav flex-column mt-4">
                               <li class="nav-item  mt-3">
                                <a href="http://127.0.0.1:8000/products" type="button" class="btn  btn-success text-white"> Manage Products</a>
                               </li>
                              </ul>
                            </div>
                          <!--categories-->
                            <div  class="col-xs-12 text-center col-sm-6 col-md-4 col-lg-4 shadow p-1 mt-3 mb-5 rounded">
                             <div class="card-title"><p class="nav-link heading-style heading-color">Categories</p></div>
                               <div id="total-categories" class="card Theme text-center   offset-sm-2">
                                 <ul class="nav flex-column mt-4">
                                   <li class="nav-item mt-3">
                                     <p class="nav-link active">
                                     <span style="color: tomato;">
                                     <i class="fas fa-network-wired fa-4x"></i>
                                     </span>
                                       </p>
                                   </li>
                                   <li class="nav-item mt-3">
                                     <p class="nav-link text-light label-number"> {{ totalCategories }} </p>
                                   </li>
                                 </ul>
                               </div>
                               <ul class="nav flex-column mt-4">
                                <li class="nav-item  mt-3">
                                 <a href="http://127.0.0.1:8000/categories" type="button" class="btn  btn-success text-white">Manage Categories</a>
                                </li>
                               </ul>
                            </div>
                         </div>
                       </div>
                     </div>
                   </div>
                </div>
            </div>
           </div>
         </div>
       </div>
     </div>
     <!--Sales-->
     <div class="row justify-content-center mt-1">
       <div class="col-sm-12">
         <div class="card Theme">
            <h5 class="card-header heading-color heading-style text-center">Sales and Money</h5>
           <div class="card-body">
            <div class="col-md-12">
                <div class="card Theme">
                   <div class="card-header p-2">
                        <ul class="nav nav-pills">
                          <li class="nav-item mr-5"><a href="#sales" class="nav-link link-color active show" data-toggle="tab"> <i class="fab fa-salesforce"></i> Sales </a></li>
                          <li class="nav-item"><a href="#money" class="nav-link link-color" data-toggle="tab"><i class="fas fa-money-bill-wave"></i>Money</a></li>
                        </ul>
                   </div>
                   <!-- /.card-header -->
                   <div class="card-body">
                     <div class="tab-content">
                       <!-- sales Tab -->
                       <div class="tab-pane active show" id="sales">
                      <div class="flex-center position-ref full-height">
                        <div class="col-sm-12">
                         <table class="table table-hover table-dark">
                           <thead>
                             <tr>
                               <th class="heading-color" scope="col"> <h4>Order Id</h4> </th>
                               <th class="heading-color" scope="col"> <h4>Order Date</h4> </th>
                               <th class="heading-color" scope="col"> <h4>Buyer Id</h4> </th>
                               <th class="heading-color" scope="col"> <h4>Adress Id</h4> </th>
                               <th class="heading-color" scope="col"> <h4>Payment Id</h4> </th>
                               <th class="heading-color" scope="col"> <h4>Actions</h4> </th>
                             </tr>
                           </thead>
                           <tbody>
                             <tr class="text-primary" v-for="(order, index) in allOrders" :key="index">
                               <th scope="row"> {{order.id}} </th>
                               <td> {{order.created_at}} </td>
                               <td> {{order.user_id}} </td>
                               <td> {{order.address_id}} </td>
                               <td> {{order.payment_id}} </td>
                               <td class="col-sm-12">
                                <button class="btn btn-primary">Buyer Details</button>
                                 <hr class="bg-white">
                                <button class="btn btn-warning text-dark">Order Details</button>
                               </td>
                             </tr>
                           </tbody>
                         </table>
                        </div>
                      </div>
                       </div>
                       <!--money Tab -->
                       <div class="tab-pane " id="money">
                         <div class='row justify-content-start'>
                           <div class='col-sm-12'>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                </div>
            </div>
           </div>
         </div>
       </div>
     </div>
    </div>
    </div>
</template>


<script>
export default {
     data() {
         return {
             totalProducts: 0,
             totalCategories: 0,
             totalUsers: 0,
             totalSubscribers: 0,
             allOrders: []
         }
     },
     methods: {
         //fetch total number products in the stock
          getTotalProducts(){
              axios.get('totalproducts')
              .then((response)=>{
               this.totalProducts =  response.data.totalProducts;
               this.totalCategories =  response.data.totalCategories ;
              })
          },
         //fetch total number categories of products
          getTotalUsers(){
             axios.get('totalusers')
             .then((response)=>{
                 console.log(response);
               this.totalUsers =  response.data.totalUsers;
               this.totalSubscribers =  response.data.totalSubcribers;
             })
          },
          getOrders(){
              axios.get('getallorders')
              .then((response)=>{
                  this.allOrders = response.data;
              })
          }
     },
     mounted() {
         this.getTotalProducts();
         this.getTotalUsers();
         this.getOrders();
     },
}
</script>

<style scoped>
#admin-dashboard{
    min-height: 80vh;
}
#total-Users{
    width: 200px;
    height: 200px;
    border-radius: 50%;
    background-color: crimson;
}
.label-number{
  font-size: 32px;
  font-weight: 800;
  font-family: algerian;
}
#total-Subscribers{
    width: 200px;
    height: 200px;
    border-radius: 50%;
    background-color: green;
}
#total-products{
    width: 200px;
    height: 200px;
    background-color: coral;
}
#total-categories{
    width: 200px;
    height: 200px;
    background-color: pink;
}
</style>
