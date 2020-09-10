<template>
    <!--header-->
 <div id="home_header" class="Theme container col-sm-12 col-md-12 col-xs-12">
   <!--Background Carousel-->
   <div class="row justify-content-center mt-1">
     <div class="col-sm-12 col-md-12 col-xs-12">
       <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
           <div class="carousel-item img-carousel-height active" data-interval="10000">
             <img src="Images/Baby Products.jpg" class="d-block img-height w-100" alt="...">
           </div>
           <div class="carousel-item img-carousel-height" data-interval="2000">
             <img src="Images/phones and tablets.jpg" class="d-block img-height w-100" alt="...">
           </div>
           <div class="carousel-item img-carousel-height">
             <img src="Images/Electronics.jpg" class="d-block img-height w-100" alt="...">
           </div>
           <div class="carousel-item img-carousel-height">
             <img src="Images/fashion.jpg" class="d-block img-height w-100" alt="...">
           </div>
           <div class="carousel-item img-carousel-height">
             <img src="Images/home and office.jpg" class="d-block img-height w-100" alt="...">
           </div>
           <div class="carousel-item img-carousel-height">
             <img src="Images/Sporting Goods.jpg" class="d-block img-height w-100" alt="...">
           </div>
           <div class="carousel-item img-carousel-height">
             <img src="Images/Gaming.jpg" class="d-block img-height w-100" alt="...">
           </div>
         </div>
       </div>
     </div>
   </div>
   <!--Backgrond Carousel Overlay-->
  <div class="row p-2 justify-content-center">
    <div id="seo-header" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="row heading-slide-right justify-content-center header-slide-in-up mt-5">
            <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-12  text-center">
                <h1  class="heading-style heading-color">Get Started with e-shop</h1>
            </div>
        </div>
        <div class="row justify-content-center header-slide-in-up">
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-5">
          <p class="text-center font-size text-white  font-family">
             e-shop An online shop you can trust.
          </p>
         </div>
        </div>
        <div class="row justify-content-center header-slide-in-up">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
             <button @click="launchGetStartedWizard()" type="button" class="btn btn-success btn-lg text-white"  data-toggle="modal" data-target="#get-started-wizard">Get Started</button>
            </div>
        </div>
    </div>
  </div>
 </div>
</template>

<script>
export default {
    methods: {
        launchGetStartedWizard(){
            Event.$emit('get-started-wizard');
        }
    },
    mounted() {

    },
}
</script>

<style scoped>
.img-carousel-height{
    height: 70vh;
}

.img-height{
    height: 100%;
}

#seo-header{
    float: inline-start;
    position: absolute;
    top: 0px;
    height: 75vh;
    height: 100%;
    background-color: rgba(139, 139, 184,0.7);
}

.font-size{
    font-size: 18px;
}

.btn-color{
    background-color: turquoise;
}
/*Heading style*/
.heading-style{
  font-size: 36px;
  font-weight: 900;
  text-decoration: underline;
}


/**
*Annimate carousel bg-overlay
*upwards
*/
.header-slide-in-up{
    position: relative;
    animation: moveup 5s ;
    animation-delay: 1s;
}

/* Chrome, Safari, Opera */
@keyframes moveup {
    from {margin-bottom: 100px;}
    to {margin-top: 1px;}
}

@-webkit-keyframes moveup {
    from {margin-bottom: 100px;}
    to {margin-top: 1px;}
}
/**
*annimate heading from left
*/

.heading-slide-right{
    animation: slide-right 5s ;
    animation-delay: 1s;
}

/* Chrome, Safari, Opera */
@keyframes slide-right {
    from {margin-bottom: 100px;}
    to {margin-top: 1px;}
}

@-webkit-keyframes slide-right {
    from {left: 0px;}
    to {right: 200px;}
}
/**
*Slide Up Solutions
*advert section
*/
.slide-right{
    animation: moveup2 4s ;
    animation-delay: 0s;
}
/* Chrome, Safari, Opera */
@keyframes moveup2 {
    from {margin-left: -15px;}
    to {margin-left: 0px;}
}

@-webkit-keyframes moveup2 {
    from {margin-left: -15px;}
    to {margin-left: 1px;}
}
</style>
