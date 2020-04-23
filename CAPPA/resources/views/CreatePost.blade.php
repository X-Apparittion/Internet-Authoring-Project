@extends('layouts.app')

@section('content')
 <div id="bg3">

    <!-- Desktop View-->
     <div class="uk-container-small fromPanel uk-visible@l">
        <span>
          <img src="/img/pen.png" alt="Create Post">
        </span>
       <form class="uk-form-stacked" action="/CrimePost" method="POST" >
       @csrf
         <div class="uk-margin">
              <label class="uk-form-label" id="lablel" for="form-stacked-text">TITLE</label>
               <div class="uk-form-controls">
                   <input class="uk-input" id="form-stacked-text" type="text" name='title' placeholder="Please give a title for your post">
               </div>
          </div>
           <br>
          <div class="uk-margin">
              <label class="uk-form-label"  id="lablel" for="form-stacked-text">Please select your Location</label>
              <input class="uk-input" id="form-stacked-text" type="text" name='place' placeholder="Please give the loactiom">
          </div>
           <br>
          <div class="uk-margin">
              <label class="uk-form-label"  id="lablel" for="form-stacked-text">POST</label>
               <div class="uk-form-controls">
                 <textarea class="uk-textarea" rows="3" name="post" placeholder="Please give a detail description of event."></textarea>
               </div>
          </div>
          <input class="uk-button uk-button-default btn2-2" type="submit" value="POST !">
          <a class="uk-button uk-button-default btn2-3" href="/CrimePost">BACK TO BLOG</a>
      </form>
      <br>
      <p uk-margin>
      
      </p>
     </div>
    <!-- Desktop View-->


    <!-- Mobile View-->
    <div class="uk-container-small fromPanel-mobile uk-hidden@m">
        <span>
          <img src="/img/pen.png" alt="Create Post">
        </span>
       <form class="uk-form-stacked" action="/CrimePost" method="POST" >
       @csrf
         <div class="uk-margin">
              <label class="uk-form-label" id="lablel" for="form-stacked-text">TITLE</label>
               <div class="uk-form-controls">
                   <input class="uk-input" id="form-stacked-text" type="text" name='title' placeholder="Please give a title for your post">
               </div>
          </div>

          <div class="uk-margin">
              <label class="uk-form-label"  id="lablel" for="form-stacked-text">LOCATION</label>
               <div class="uk-form-controls">
                   <input class="uk-input" id="form-stacked-text" type="text" name="place" placeholder="Please state the location">
               </div>
          </div>

          <div class="uk-margin">
              <label class="uk-form-label"  id="lablel" for="form-stacked-text">POST</label>
               <div class="uk-form-controls">
                 <textarea class="uk-textarea" rows="3" name="post" placeholder="Please give a detail description of event."></textarea>
               </div>
          </div>
          <input class="uk-button uk-button-default btn2-2-mobile" type="submit" value="POST !">
          <a class="uk-button uk-button-default btn2-3-mobile" href="/CrimePost">BACK TO BLOG</a>
      </form>
      <br>
      <p uk-margin>
      
      </p>
     </div>
    <!-- Mobile View-->

    <!-- Footer -->
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
     <!-- Footer -->
</div>
@endsection