<!DOCTYPE html>
<html>
<title>Гоце Мебел</title>
<link rel="shortcut icon" type="image/png" href="images\favicon.png">
<head>
<!-- Latest compiled and minified Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<link rel="stylesheet" href="styles/style.css" type="text/css">
<link rel="stylesheet" href="js/slick-1.8.0/slick/slick.css" type="text/css"/>
<link rel="stylesheet" href="js/slick-1.8.0/slick/slick-theme.css" type="text/css"/> 

</head>
<body>
<div class="container">
		
<nav class="navbar navbar-expand-sm navbar-light bg-faded">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<!-- Brand -->
<a class="navbar-brand" href="#">
 <img src="images\logo.jpg" width="105" height="55" alt="">
</a>

<!-- Links -->
<div class="collapse navbar-collapse justify-content-end" id="nav-content">   
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="#">За Нас</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Производство</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Контакт</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">Локација</a>
</li>
</ul>
</nav>
</div>
<div class="container stripe">
</div>

<div class="container slick-slider">
   <img src="images\slide1.jpg" alt="" >
   <img src="images\slide2.jpg" alt="" >
   <img src="images\slide3.jpg" alt="" >
   <img src="images\slide4.jpg" alt="" >
   <img src="images\slide5.jpg" alt="" >
   <img src="images\slide6.jpg" alt="" >
   <img src="images\slide7.jpg" alt="" >
   <img src="images\slide8.jpg" alt="" >
   
</div>

<div class="container">
<hr>
<div class="row">

<div class="col-12 about">

<p>Мебелот за седење е повеќе од парче мебел кое го надоплнува просторот во домот, мебелот за седење има голема улога при достигнување на високо ниво на удобност во животниот простор.</p>

<p>Токму поради овие прични, нашата главна цел е да Ви понудиме решение кое ќе се вклопи не само во вашиот стил или вкус кога внатрешното уредување е во прашање, туку и идеално решение кое ќе придонесе за Вашетo чувство на удобност во моментите кои ги поминувате со Вашите најмили.</p>
</div>




</div>
<hr>
</div>

</body>
</html>

		
<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<!-- Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<script type="text/javascript" src="js/slick-1.8.0/slick/slick.js"></script>

<!-- Initialize Bootstrap functionality -->
<script>
// Initialize tooltip component
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Initialize popover component
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script>

<script>
$('.slick-slider').slick({
	  dots: true,
  infinite: false,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
		
		
	
</script>

