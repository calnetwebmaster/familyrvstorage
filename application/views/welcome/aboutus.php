<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php echo $description; ?>"/>
    <meta name="keywords" content="<?php echo $keywords; ?>"/>
    <base href="<?php echo base_url(); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?= base_url()?>css/main.css">
    <?php if (isset($js)) {foreach($js as $js_){ ?>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/<?php echo $js_; ?>"></script>
    <?php }} ?>
    <!-- Custom styles for this template -->
    <?php if(isset($css)) { foreach($css as $css_){ ?>
        <link type="text/css" href="<?php echo base_url(); ?><?php echo $css_; ?>"  rel="stylesheet" /><!--Style Sheet Reset-->
    <?php }} ?>

</head>
<body>
<header>
    <nav class="navbar navbar-expand-md navbar-green fixed-top" style="background-color: #194f2f;">
        <a class="navbar-brand" href="#"><img src="http://familyrvstorage.com/images/familyRVllogo.jpg"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" style="font-size:20px !Important; color:white;" aria-hidden="true"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="http://familyrvstorage.com">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="http://familyrvstorage.com/index.php/welcome/aboutus">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Location</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Contact</a>
                </li>

            </ul>

        </div>
    </nav>
    <hr/>
</header>



<main role="main">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="http://familyrvstorage.com/images/family-banner.png" alt="First slide" style="max-width: 100%;">
                <div class="container">
                    <div class="carousel-caption text-left">


                    </div>
                </div>
            </div>
            <!--
            <div class="carousel-item">
                <img class="first-slide" src="http://familyrvstorage.com/images/openroad.jpg" alt="First slide" style="max-width: 100%;">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Fully Paved Secure Lot</h1>
                        <ul>
                            <li>24/7 Video Surveillance</li>
                            <li>Key Card Entry</li>
                        </ul>

                    </div>
                </div>
            </div>-->

        </div>

        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br/><br/>

    <div class="container marketing">
        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 text-center">
                <h2 class="featurette-heading text-left">About Us</span></h2>
                <p class="lead text-left">Family RV is a locally owned, fair and trustworthy company that is committed to providing storage and the services that you need. Customer service is our primary focus, and a friendly helpful staff is our standard.
                </p>
                <a class="btn btn-primary btn-xlg" href="tel:530-677-4926" style="padding:20px;background-color:#194f2f;;">
                    <i class="fas fa-phone-square fa-lg"></i>&nbsp;(530) 677-4926
                </a>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="http://familyrvstorage.com/images/hwy50_small.jpg" alt="Generic placeholder image" ">
            </div>
        </div>
        <br/><br/><br/><br/><br/>



    </div><!-- /.container -->
</main>