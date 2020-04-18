@extends('layouts.app')

@section('content')
  <div id="bg3">     
   
  <div class="container2 uk-visible@l" >      
           <div class="boxscetion">
                <div class="uk-card uk-card-default uk-card-body uk-width-1-2@m box3">
                    <h3 class="uk-card-title">{{$CrimePosts->title}}</h3>
                        <p>{{$CrimePosts->post}}</p>
                        <p>The location {{$CrimePosts->place}}</p>
                </div>
            </div>

            <div class="boxsection">
                <div class="uk-card uk-card-default uk-card-body uk-width-1-2@m box2">
                    <h3 class="uk-card-title">MAP API</h3>
                    <p>Location {{$CrimePosts->place}}</p>
                </div>
            </div>
    </div>


    <div class="container2-mobile uk-hidden@s" >      
           <div class="boxscetion-mobile">
                <div class="uk-card uk-card-default uk-card-body uk-width-1-2@m box3-mobile">
                    <h3 class="uk-card-title">{{$CrimePosts->title}}</h3>
                        <p>{{$CrimePosts->post}}</p>
                        <p>The location {{$CrimePosts->place}}</p>
                </div>
            </div>

            <div class="boxsection">
                <div class="uk-card uk-card-default uk-card-body uk-width-1-2@m box2--mobile">
                    <h3 class="uk-card-title">MAP API</h3>
                    <p>Location {{$CrimePosts->place}}</p>
                </div>
            </div>
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