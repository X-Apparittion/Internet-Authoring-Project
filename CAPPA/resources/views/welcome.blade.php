@extends('layouts.app')

@section('content')
   <div>

   <div class="container-large Welcome-panel uk-visible@l">
            <div class="Welcome-panel2">
                    <p id="wel-head-txt"> WELCOME TO CAPPA</p>
                    <p id="wel-txt">
                        Crime and Prevention and Predictive Analysis Application C.A.P.P.A.A
                    </p>
                    <a class="uk-button uk-button-default welcome-btn" href="/CrimePost">VIEW POST</a>
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