<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title>Polio Vaccination System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
  </script>
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsgQq90_2MRa9neT6D9wr1TU60ipnBIDM&callback=initMap&libraries=&v=weekly"
    async></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body style="background: #EEEEEE">
  <div class="container">
    <a href="{{ route('admin.dashboard') }}" class="btn btn-success mt-5 mb-3 align-center">Dashbaord</a>
    <div class="card mb-3 shadow" style="width: 100%;">
      <div class="card-body">
        <h4>Reported Paralytic Polio</h4>
        <iframe src="https://ourworldindata.org/grapher/the-number-of-reported-paralytic-polio-cases?tab=map&time=2019"
          loading="lazy" style="width: 100%; height: 600px; border: 0px none;"></iframe>
      </div>
    </div>
    <div class="card shadow mb-3" style="width: 100%;">
      <div class="card-body">
        <h4>Worker Location</h4>
        <div id="worker-map" style="width: 100%; height: 400px;"></div>
      </div>
    </div>
  </div>




  <script type="text/javascript">
    function initMap() {
    var workermap = new google.maps.Map(document.getElementById('worker-map'), {
      zoom: 10,
      center: new google.maps.LatLng(31.5204, 74.3587),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var workerinfowindow = new google.maps.InfoWindow();
    var workerMarker, j;

    setInterval(function(){ 
      $.ajax({
          url: "{{route('admin.workerlocation')}}",
          method: 'post',
          success: function(result){
            for (j = 0; j < result.length; j++) {  
              var res = result[j].split(",");
              workerMarker = new google.maps.Marker({
                position: new google.maps.LatLng(res[0],res[1]),
                map: workermap
              });
              workerMarker.setMap(workermap);
            }
          }
          
         
    });

     }, 5000);
    

   
    }
  </script>
</body>

</html>