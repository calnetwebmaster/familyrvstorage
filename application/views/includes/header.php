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
    <script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAF8pAwxK0vH3YvICczuChcvLyxFheF4Gs"></script>
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
                    <a class="nav-link text-white" href="http://familyrvstorage.com/index.php/welcome/location">Location</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="http://familyrvstorage.com/index.php/welcome/contact">Contact</a>
                </li>

            </ul>

        </div>
    </nav>
    <hr/>
</header>

