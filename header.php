
<!-- 
  Bootstrap docs: https://getbootstrap.com/docs
-->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>


<header>
    <div class="owl-carousel owl-theme">
        <div class="item">
            <img src="./images/IMG_1873.jpeg" alt="capitain" >
            <div class="cover">
                <div class="container">
                    <div class="header-content">
                        <div class="line"></div>
                        <h2>BabyShower</h2>
                        <h1>CHAMS & YASMINE</h1>
                        
                    </div>
                </div>
             </div>
        </div>                    
        <div class="item">
            <img src="./images/IMG_1872.jpg" alt="Girl">
            <div class="cover">
                <div class="container">
                    <div class="header-content">
                        <div class="line animated bounceInLeft"></div>
                        <h2>à la fin de ce vote vous saurez que c'est</h2>
                        <h1>UNE FILLE</h1>
                        
                    </div>
                </div>
             </div>
        </div>                
        <div class="item">
            <img src="./images/3498177.jpg" alt="Boy">
            <div class="cover">
                <div class="container">
                    <div class="header-content">
                        <div class="line animated bounceInLeft"></div>
                        <h2>Ou c'est peut etre bien que ca soit</h2>
                        <h1>UN GARÇON</h1>
                        
                    </div>
                </div>
             </div>
        </div>
    </div>
</header>

<script>
	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    dots:false,
    nav:true,
    mouseDrag:false,
    autoplay:true,
    animateOut: 'slideOutUp',
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
</script>


