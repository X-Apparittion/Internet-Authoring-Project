@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<div id="bg3">
        <!-- Desktop view-->
            <div class="uk-container-large panel uk-visible@l">

                    <h2 class="headeer1">Map of Crime hot spots</h2>

                        <div class="uk-child-width-1-1@m" uk-grid>
                            <div>
                                <div class="uk-card uk-card-default uk-card-large uk-card-body box2">
                                    <h3 class="uk-card-title">All Crimes</h3>
                                    <!--Map Styling -->
                                    <style>
                                        #map{
                                            height: 300px;
                                            width: 100%;
                                        }
                                    </style>

                                    <!--Map Div-->
                                    <div id='map'></div>
                                    
                                    <!--Map functions and coordinates-->
                                    <script>
                                        function initMap() {
                                            var options = {
                                                zoom: 25, 
                                                center: {lat:18.014115,lng:-77.501873}
                                            }

                                            var map = new google.maps.Map(document.getElementById('map'), options);

                                            //Marker
                                            var marker = new google.maps.Marker({
                                                position:{lat:18.014115,lng:-77.501873},
                                                map:map
                                            })
                                        }
                                    </script>

                                    <!--API Key Placement-->
                                    <script 
                                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI1O_SUM_faILxAVa2bVJp8NPBTPjBHq0&callback=initMap" async defer>
                                    </script>




                                </div>
                            </div>
                        </div>

                    <br>
                    <h2 id="txt">Daliy Activities</h2>
                    <br>
                    <h3  id="txt"> {{ session('msg') }}</h3>
                    <p class="post-btn-container" uk-margin>
                        <a class="uk-button uk-button-default post-btn" href="/CrimePost/create">
                            CREATE POST ...  <img src="/img/arrow.png" alt="">
                        </a>
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
                                    <a class="uk-button uk-button-default btn" href="/CrimePost/{{$CrimePost->id}}" >EDIT</a>
                                </p>

                            </div>
                        </div>
                        @endforeach

                    </div>

                    <br>
            </div>
        <!-- Desktop view-->

        <!-- Mobile view-->
        <div class="uk-container-large mobile-panel uk-hidden@s">

            <h2 class="">Map of crime hot spots</h2>


            <div class="uk-child-width-1-1@m" uk-grid>
                            <div>
                                <div class="uk-card uk-card-default uk-card-large uk-card-body box2">
                                    <h3 class="uk-card-title">All Crimes</h3>
                                    <!--Map Styling -->
                                    <style>
                                        #map1{
                                            height: 75px;
                                            width: 25px%;
                                        }
                                    </style>

                                    <!--Map Div-->
                                    <div id='map1'></div>
                                    
                                    <!--Map functions and coordinates-->
                                    <script>
                                        function initMap() {
                                            var options = {
                                                zoom: 15,
                                                center: {lat:17.9979389,lng:-76.7807113}
                                            },

                                            var map = new google.maps.Map(document.getElementById('map'), options);

                                            //Marker
                                            var marker = new google.maps.Marker({                               
                                                for(i = 0; i< count($latitudes);i++) {
                                                    position:{<?php echo'lat:'. $latitudes[i] .', lng:'. $longitudes[i] ;?>},

                                                     map:map
                                                } 
                                         
                                               
                                            })
                                        }
                                    </script>

                                    <!--API Key Placement-->
                                    <script 
                                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI1O_SUM_faILxAVa2bVJp8NPBTPjBHq0&callback=initMap" async defer>
                                    </script>
                                </div>
                            </div>
                        </div>

            <h2 id="txt">Daliy Activities</h2>

                    <h3 id="txt"> {{ session('msg') }}</h3>

                    <p class="post-btn-container-mobile" uk-margin>
                        <a class="uk-button uk-button-default post-btn-mobile" href="/CrimePost/create">CREATE POST !</a>
                    </p>

                    <div class="uk-child-width-1-1@m uk-grid-small uk-grid-match" uk-grid>

                        @foreach($CrimePosts as $CrimePost)
                        <div>
                            <div class="uk-card uk-card-default uk-card-body box-mobile">
                                <span>
                                <img src="/img/siren.png" alt="">
                                <h3 class="uk-card-title">{{ $CrimePost->title }}</h3>
                                </span>
                                <p class="txt-mobile"> {{ $CrimePost->post }}, at the location of ;{{$CrimePost->place}}</p>

                                <p uk-margin>
                                    <a class="uk-button uk-button-default btn-mobile" href="/CrimePost/{{$CrimePost->id}}" >EDIT</a>
                                </p>

                            </div>
                        </div>
                        @endforeach

                    </div>

        </div>
        <!-- Mobile view-->

      <!-- fotter -->
      <div class="uk-section uk-section-muted footer-background">
            <div class="uk-container">

                    <h3 id="hesder-txt">About US</h3>

                    <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
                        <p>
                            The Crime and Prevention and Predictive Analysis Application's (C.A.P.P.A.A) was formed September 2019. It's mission is 
                            to assist people keep themselves, their families, and their communities safe from crime. To achieve this, C.A.P.P.A.A. has 
                            produced tools that communitites can use to engage in crime prevention stratgies, engage community members, and coordrinate 
                            with local authorities.
                        </p>                      
                         
                         <p>
                             This application was created for a class project and sets out to address the challenges of the community and later the world. 
                             Inspiration was drawn from the increase in criminal activities from a nearby community which had a huge impact on students and 
                             members of the community alike.
                         </p>
                         
                         <p>
                             C.A.P.P.A.A. just as the Ministry of Justice has similar priorities; to strengthened public trust and confidence in the justice system; 
                             improved access to justice; strengthened linkages between justice sector institutions; establishing a sound court infrastructure and implementing
                              a social component to the delivery of justice.
                         </p> 
                    </div>

                    </div>
            </div>
            <footer class="footer">
                    <center>
                    <h4 id="hesder-txt">Copyright CAPPA 2020</h4>
                    </center>
            </footer>
      </div>
      <!-- fotter -->
</div>

<?php
	// Select all the rows in the markers table
	$query = "SELECT  `lat`, `lng` FROM `markers` ";
	$result = $mysqli->query($query) or die('data selection for google map failed: ' . $mysqli->error);

 	while ($row = mysqli_fetch_array($result)) {

		$latitudes[] = $row['lat'];
		$longitudes[] = $row['lng'];
		$coordinates[] = 'new google.maps.LatLng(' . $row['lat'] .','. $row['lng'] .'),';
	}

	//remove the comaa ',' from last coordinate
	$lastcount = count($coordinates)-1;
	$coordinates[$lastcount] = trim($coordinates[$lastcount], ",");	
?>
@endsection
