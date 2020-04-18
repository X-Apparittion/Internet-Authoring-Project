@extends('layouts.app')

@section('content')
<div id="bg"> 
        <!-- Desktop view-->
            <div class="uk-container-large panel uk-visible@l">
            
                    <h2 class="headeer">Map of Crime hot spots</h2>

                        <div class="uk-child-width-1-1@m" uk-grid>
                            <div>
                                <div class="uk-card uk-card-default uk-card-large uk-card-body box2">
                                    <h3 class="uk-card-title">Map of crime</h3>
                                    <p>
                                        MAP API
                                    </p>
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
        <!-- Desktop view-->

        <!-- Mobile view-->
        <div class="uk-container-large mobile-panel uk-hidden@s">

            <h2 class="">Map of crime hot spots</h2>
          
                <div class="uk-child-width-1-1@m " uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-large uk-card-body mobilebox2">
                            <h3 class="uk-card-title">Map of crime</h3>
                            <p> MAP API </p>
                        </div>
                    </div>
                </div>

            <h2>Daliy Activities</h2>    
           
                    <h3> {{ session('msg') }}</h3>
                    
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
                                <p class="txt-mobile"> {{ $CrimePost->post }} At the location of {{$CrimePost->place}}</p>

                                <p uk-margin>
                                    <a class="uk-button uk-button-default btn-mobile" href="/CrimePost/{{$CrimePost->id}}" >View</a>
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
      <!-- fotter -->      
</div>    
@endsection