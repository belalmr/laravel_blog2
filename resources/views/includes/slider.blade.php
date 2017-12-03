

<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
 

 <div id="mycarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
    <li data-target="#mycarousel" data-slide-to="1"></li>
    <li data-target="#mycarousel" data-slide-to="2"></li>
 
  </ol>

  <!-- Wrapper for slides -->

  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="/img/car-guru-deals.jpg" data-color="lightblue" alt="First Image"  >
      <div class="carousel-caption mycolor4">
        <h1 class="myfonty" style="color: white"> car guru deals</h1>
      </div>
    </div>
    <div class="item">
      <img src="/img/luxury-cars.jpg" data-color="firebrick" alt="Second Image" >
      <div class="carousel-caption mycolor4">
        <h1 class="myfonty" style="color: white">luxury-cars</h1>
      </div>
    </div>
    <div class="item">
      <img src="/img/Project Cars (PC).jpg" data-color="violet" alt="Third Image">
      <div class="carousel-caption mycolor4">
        <h1 class="myfonty" style="color: white">Project Cars (PC)</h1>
      </div>
    </div>
    
    
  </div>

  <!-- Controls -->
 
</div>

<style>

.carousel-caption h1, .carousel-caption h2, .carousel-caption h3, .carousel-caption h4, .carousel-caption h5, .carousel-caption h6{
 color:#000;
  
 }
 
.p {
  text-align: center;
  padding-top: 40px;
  font-size: 13px;
}

.carousel-inner .item{ 
   height:500px; 
   background-size:cover;
   background-position: center center;
}

.carousel-indicators li {
    background: #ccc;
}

.carousel-indicators .active {
    background: #CF000F;
}


</style>
<script>
$('.carousel').carousel({
  interval: 5000,
  pause: "false"
});
</script>
 


