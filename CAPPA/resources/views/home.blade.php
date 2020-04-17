@extends('layouts.app')

@section('content')
<div>
  
<div class="container loginpanel uk-visible@l">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <br> <br>
                    <p uk-margin>
                       <a class="uk-button uk-button-default btn" href="/" >BACK</a>
                    </p>
                </div>
            </div>
        </div>
        <br>
       
    </div>
   
</div>


  <div class="uk-hidden@s conbox">
    <div class="uk-card uk-card-default uk-card-body uk-width-1-2@m card1">
        <h3 class="uk-card-title">Dashboard</h3> 
        @if (session('status'))
             <div class="alert alert-success" role="alert">
                {{ session('status') }}
             </div>
        @endif
             
             You are logged in!
            <br> 
        <p uk-margin>
             <a class="uk-button uk-button-default btn" href="/" >BACK</a>
        </p>
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
