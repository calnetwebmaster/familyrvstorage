<main role="main">
    <br/><br/><br/><br/><br/><br/><br/><br/>
    <div class="container marketing">
        <div class="card">
            <div id="map_container" style="width:100%; height:500px; background-color: lime;"></div>
        </div>
        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 text-center">
                <h2 class="featurette-heading text-left">Our Location</span></h2>
                <p class="lead text-left"> Conveniently located less than one minute from Highway 50 West in Shingle Springs California.</p>
                <p class="lead text-left">
                    4050 Mother Lode Drive<br/>
                    Shingle Springs, CA 95682
                </p>
                <a class="btn btn-primary btn-xlg" href="tel:530-677-4926" style="padding:20px;background-color:#194f2f;;">
                    <i class="fas fa-phone-square fa-lg"></i>&nbsp;(530) 677-4926
                </a>
            </div>
            <div class="col-md-5">

            </div>
        </div>
        <br/><br/><br/><br/><br/>



    </div><!-- /.container -->
</main>
<script>
    //----------------------------------------------------------
    //create LatLng object for initial center of the map -------
    let latlng = new google.maps.LatLng(38.661455,-120.9356);
    var options = {
        zoom: 15,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById("map_container"), options);
    marker = new google.maps.Marker({
        map: map,
        draggable: false
    });
    marker.setPosition(latlng);

</script>