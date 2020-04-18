@extends('layouts.app')

@section('content')
<div id="bg">
    <div class="uk-container-large panel uk-visible@l">
    
             <h2 class="headeer">Map of Crime hot spots</h2>

                <div class="uk-child-width-1-1@m" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-large uk-card-body box2">
                            <h3 class="uk-card-title">Map of crime</h3>
                            <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
                            <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
                            
                            <style>
                                #map {
                                    height: 100%;
                                }
                                /* Optional: Makes the sample page fill the window. */
                                html, body {
                                    height: 100%;
                                    margin: 0;
                                    padding: 0;
                                }
                            </style>

                            <body>
                                <div id="map"></div>

                                <script>
                                var customLabel = {
                                    restaurant: {
                                    label: 'R'
                                    },
                                    bar: {
                                    label: 'B'
                                    }
                                    House: {
                                    label: 'H'
                                    }
                                    Street: {
                                    label: 'S'
                                    }
                                    Car: {
                                    label: 'C'
                                    }

                                };

                                function initMap() {
                                    var map = new google.maps.Map(document.getElementById('map'), {
                                    center: new google.maps.LatLng(18.014115, -77.501873),
                                    zoom: 12
                                    });
                                    var infoWindow = new google.maps.InfoWindow;

                                    // Change this depending on the name of your PHP or XML file
                                    downloadUrl('https://storage.googleapis.com/mapsdevsite/json/mapmarkers2.xml', function(data) {
                                        var xml = data.responseXML;
                                        var markers = xml.documentElement.getElementsByTagName('marker');
                                        Array.prototype.forEach.call(markers, function(markerElem) {
                                        var id = markerElem.getAttribute('id');
                                        var name = markerElem.getAttribute('name');
                                        var address = markerElem.getAttribute('address');
                                        var type = markerElem.getAttribute('location type');
                                        var point = new google.maps.LatLng(
                                            parseFloat(markerElem.getAttribute('lat')),
                                            parseFloat(markerElem.getAttribute('lng')));

                                        var infowincontent = document.createElement('div');
                                        var strong = document.createElement('strong');
                                        strong.textContent = name
                                        infowincontent.appendChild(strong);
                                        infowincontent.appendChild(document.createElement('br'));

                                        var text = document.createElement('text');
                                        text.textContent = address
                                        infowincontent.appendChild(text);
                                        var icon = customLabel[type] || {};
                                        var marker = new google.maps.Marker({
                                            map: map,
                                            position: point,
                                            label: icon.label
                                        });
                                        marker.addListener('click', function() {
                                            infoWindow.setContent(infowincontent);
                                            infoWindow.open(map, marker);
                                        });
                                        });
                                    });
                                    }

                                    function downloadUrl(url, callback) {
                                        var request = window.ActiveXObject ?
                                            new ActiveXObject('Microsoft.XMLHTTP') :
                                            new XMLHttpRequest;

                                        request.onreadystatechange = function() {
                                        if (request.readyState == 4) {
                                            request.onreadystatechange = doNothing;
                                            callback(request, request.status);
                                        }
                                        };

                                        request.open('GET', url, true);
                                        request.send(null);
                                    }

                                    function doNothing() {}
                                    </script>
                                    <script async defer
                                    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
                                    </script>
                                </body>
                        </div>
                    </div>
                </div>
            

            <h2 class="headeer">Daliy Activities</h2>
            <br>
            <h3 class="headeer"> {{ session('msg') }}</h3>
            <p class="post-btn-container" uk-margin>
                <a class="uk-button uk-button-default post-btn" href="/CrimePost/create">CREATE POST !</a>
            </p>

            <br>
            <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
            
                @foreach($CrimePosts as $CrimePost)
                <div>
                    <div class="uk-card uk-card-default uk-card-body box">
                        <span>
                        <img src="/img/siren.png" alt="">
                        <h3 class="uk-card-title headeer">{{ $CrimePost->title }}</h3> 
                        </span>
                        <p class="txt"> {{ $CrimePost->post }} At the location of {{$CrimePost->place}}</p>

                        <p uk-margin>
                            <a class="uk-button uk-button-default btn" href="/CrimePost/{{$CrimePost->id}}" >View</a>
                        </p>

                    </div>
                </div>
                @endforeach
               
            </div>

            <br>
    </div>  

      <div class="uk-section uk-section-muted footer-background">
            <div class="uk-container">

                    <h3 id="hesder-txt">About US</h3>

                    <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        </div>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        </div>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>

                    </div>
            </div>
            <footer class="footer">
                    <center>
                    <h4 id="hesder-txt">Copyright CAPPA 2020</h4>
                    </center>
            </footer>
      </div>      
</div>    
@endsection