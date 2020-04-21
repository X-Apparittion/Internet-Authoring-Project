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
