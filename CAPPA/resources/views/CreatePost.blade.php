@extends('layouts.app')

@section('content')
 <div id="bg2">

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
          <input class="uk-button uk-button-default btn2-2" type="submit" value="POST !">
          <a class="uk-button uk-button-default btn2-3" href="/CrimePost">BACK TO BLOG</a>
      </form>
      <br>
      <p uk-margin>
      
      </p>
     </div>
    <!-- Desktop View-->


    <!-- Mobile View-->
    <div class="uk-container-small fromPanel-mobile uk-hidden@s">
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
     <!-- Footer -->
</div>
@endsection