@extends('layouts.app')

@section('content')
   <div id="bg3">
    <br><br><br><br>
   <div class="container-large Welcome-panel uk-visible@l">
            <div class="Welcome-panel2">
                    <center>
                        <img src="/img/security.png" width="150px" alt="">
                    </center>
                    <p id="wel-head-txt"> WELCOME TO CAPPA</p>
                    <p id="wel-txt">
                        Crime and Prevention and Predictive Analysis Application C.A.P.P.A.A
                    </p>
                    <a class="uk-button uk-button-default welcome-btn" href="/CrimePost">VIEW POST</a>
            </div>
    </div>

    <div class="container-large uk-hidden@s">
            <div class="wel-panel">
                    <p id="wel-msg-mobile">WELCOME</p>
                    <p id="wel-msg-mobile2">TO</p>
                    <p id="wel-msg-mobile3">CAPPA</p>
                    <p id="wel-msg-mobile4">
                        Crime and Prevention and Predictive Analysis Application C.A.P.P.A.A
                    </p>
                    <br>
                    <center>
                        <img src="/img/security.png" width="75px" alt="">
                    </center>
                    <br>
                    <a class="uk-button uk-button-default  welcome-btn-mobile" href="/CrimePost">VIEW POST</a>
                    
            </div>
    </div>
    <br><br><br>
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

   </div>
@endsection