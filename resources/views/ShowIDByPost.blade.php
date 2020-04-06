@extends('layouts.app')

@section('content')
  <div>
        <div class="section">
            <h1> ID = {{$CrimePosts->id}}</h1>
            <h2>Title = {{$CrimePosts->title}}</h2>
            <p>{{$CrimePosts->post}}</p>
            <p>
                {{$CrimePosts->place}}
            </p>
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