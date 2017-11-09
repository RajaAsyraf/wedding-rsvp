<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="description" content="Invitation to the wedding of Nur Fadzlina & Raja Mohamad Asyraf.">
        <title>Fadzlina x Asyraf</title>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Italianno" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=IM+Fell+French+Canon:400,400i" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <!-- jQuery Countdown -->
        <script src="{{ asset('/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.countdown/jquery.countdown.js') }}"></script>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap_css/bootstrap.min.css') }}">
        <script src="{{ asset('js/bootstrap_js/popper.js') }}"></script>
        <script src="{{ asset('js/bootstrap_js/bootstrap.min.js') }}"></script>

        <!-- Styles -->
        <link href="{{ asset('/css/wedding_style.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>
        <div class="container-fluid full-height text-center">

          <div class="row justify-content-center">
            <div class="col">
              <a class="hamburger">&#9776;</a>
              <a class="cross">&#10005;</a>
              <div class="menu">
                <ul>
                  <a class="links" href="#story"><li>Our Story</li></a>
                  <a class="links" href="#groom"><li>Bride & Groom</li></a>
                  <a class="links" href="#flow"><li>Ceremony Flow</li></a>
                  <a class="links" href="#venue"><li>Venue</li></a>
                  <a class="links" href="#rsvp" title="The French expression 'répondez s'il vous plaît', meaning 'please respond'."><li>RSVP</li></a>
                  <a class="links" href="#wishes"><li>Wedding Wishes</li></a>
                </ul>
              </div>
              <p class="header">Invitation To The Wedding Of</p>
              <div>
                  <h1 class="main-title">Fadzlina <br class="break2"/> & <br class="break2"/>&nbsp;Asyraf</h1>
              </div>

              <div class="all-links">
                <hr style="border-top: 1px solid #71AD55;">
                <a class="links" href="#story">Our Story</a>
                <a class="links" href="#groom">Bride & Groom</a>
                <a class="links" href="#flow">Ceremony Flow</a>
                <a class="links" href="#venue">Venue</a>
                <a class="links" href="#rsvp" title="The French expression 'répondez s'il vous plaît', meaning 'please respond'.">RSVP</a>
                <a class="links" href="#wishes">Wedding Wishes</a>
                <hr style="border-top: 1px solid #71AD55;">
              </div>

              <div id="clock" class="h1">Countdown</div>
              <small>until the wedding day</small>

              <p class="venue">Alor Setar, Kedah | Saturday 9<small>th of</small> December 2017</p>

            </div>
          </div>

        </div>

        <div class="container-fluid text-center full-height" id="story">
          <div class="row">
            <div class="col">

              <div>
                <h1 class="title">Our Story</h1>
              </div>

              <div class="intro_story">
                <p>On June 2016, girl was having her last semester in university, boy came confessing to girl.</p>
                <p>"Go and ask my parent", girl said.</p>
                <p>On January 2017, boy finish his last semester in university.</p>
                <p>From south, he went up north. ALONE. Asking for permission from girl's parents.</p>
                <p>March 2017, they got engaged.</p>
                <p>Finally, on December 2017 they are getting married.</p>
              </div>

              <div class="">
                <a href="#story_chapter1" id="full_story_link1">Click here for full story.</a>
              </div>

            </div>
          </div>
        </div>

        <div class="container-fluid text-center full-height" id="story_chapter1">
          <div class="row">
            <div class="col">

              <div>
                <h1 class="title">Chapter 1</h1>
              </div>

              <div class="intro_story">
                <p>On June 2016, girl was having her last semester in university, boy came confessing to girl.</p>
                <p>"Go and ask my parent", girl said.</p>
                <p>On January 2017, boy finish his last semester in university.</p>
                <p>From south, he went up north. ALONE. Asking for permission from girl's parents.</p>
                <p>March 2017, they got engaged.</p>
                <p>Finally, on December 2017 they are getting married.</p>
                <p>On January 2017, boy finish his last semester in university.</p>
                <p>From south, he went up north. ALONE. Asking for permission from girl's parents.</p>
                <p>March 2017, they got engaged.</p>
                <p>Finally, on December 2017 they are getting married.</p>
              </div>

              <div class="">
                <a href="#story_chapter2" id="full_story_link2">Next (Chapter 2 - out of 3)</a>
              </div>

            </div>
          </div>
        </div>

        <div class="container-fluid text-center full-height" id="story_chapter2">
          <div class="row">
            <div class="col">

              <div>
                <h1 class="title">Chapter 2</h1>
              </div>

              <div class="intro_story">
                <p>On June 2016, girl was having her last semester in university, boy came confessing to girl.</p>
                <p>"Go and ask my parent", girl said.</p>
                <p>On January 2017, boy finish his last semester in university.</p>
                <p>From south, he went up north. ALONE. Asking for permission from girl's parents.</p>
                <p>March 2017, they got engaged.</p>
                <p>Finally, on December 2017 they are getting married.</p>
                <p>On January 2017, boy finish his last semester in university.</p>
                <p>From south, he went up north. ALONE. Asking for permission from girl's parents.</p>
                <p>March 2017, they got engaged.</p>
                <p>Finally, on December 2017 they are getting married.</p>
              </div>

              <div class="">
                <a href="#story_chapter3" id="full_story_link3">Next (Chapter 3 - out od 3)</a>
              </div>

            </div>
          </div>
        </div>

        <div class="container-fluid text-center full-height" id="story_chapter3">
          <div class="row">
            <div class="col">

              <div>
                <h1 class="title">Chapter 3</h1>
              </div>

              <div class="intro_story">
                <p>On June 2016, girl was having her last semester in university, boy came confessing to girl.</p>
                <p>"Go and ask my parent", girl said.</p>
                <p>On January 2017, boy finish his last semester in university.</p>
                <p>From south, he went up north. ALONE. Asking for permission from girl's parents.</p>
                <p>March 2017, they got engaged.</p>
                <p>Finally, on December 2017 they are getting married.</p>
                <p>On January 2017, boy finish his last semester in university.</p>
                <p>From south, he went up north. ALONE. Asking for permission from girl's parents.</p>
                <p>March 2017, they got engaged.</p>
                <p>Finally, on December 2017 they are getting married.</p>
              </div>

              <div class="">
                <a href="#story" id="full_story_link_close">Close all chapters</a>
              </div>

            </div>
          </div>
        </div>

        <div class="container-fluid text-center full-height" id="groom">
          <div class="row">
            <div class="col">

              <div>
                <h1 class="title">Bride & Groom</h1>
              </div>

            </div>
          </div>
        </div>

        <div class="container-fluid text-center full-height" id="flow" style="padding-top: 10em;">
          <div class="row">
            <div class="col">

              <h1 class="title">Ceremony Flow</h1>

              <div style="padding-top: 10em;">
                <p>Banquet Feast: 12pm till 5pm</p>
                <p>Arrival of Bride & Groom: 2pm</p>
              </div>

            </div>
          </div>
        </div>

        <div class="container-fluid text-center full-height" id="venue">
          <div class="row">
            <div class="col">
              <div>
                  <h1 class="title">Venue</h1>
              </div>
              <h3>Zee Homestay, Alor Setar</h2><br>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7296.111221073366!2d100.36947791924524!3d6.1629298646845925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304b5b134d012467%3A0x6c1c2418261b7a90!2sZee+Homestay!5e0!3m2!1sen!2smy!4v1508561172847" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="container-fluid text-center full-height" id="rsvp" style="padding-top: 10em;">
          <div class="row justify-content-center">
            <div class="col-sm col-md-8 col-lg-6 col-xl-6">

              <h1 class="title">RSVP</h1>

              <div id="app" style="padding-top: 5em;">
                <form v-on:submit.prevent="addRSVP()" v-if="!sendRSVP">

                  <div class="form-group">
                    <div class="row justify-content-center">
                      <div class="col-8">
                        <input v-model="rsvpName" type="text" placeholder="Your name" class="form-control text-center" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="radio">
                      <input type="radio" id="one" value="Yeayy!!! See you there, " v-model="rsvp" required>
                      <label for="one">I am coming!</label>
                    </div>
                    <div class="radio">
                      <input type="radio" id="two" value="It'okay, " v-model="rsvp" required>
                      <label for="two">Sorry, can't make it.</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="">@{{ rsvp }} @{{ rsvpName }}</label>
                  </div>
                  <div class="form-group">
                    <div class="row justify-content-center">
                      <div class="col-6" style="background-color: #05341f;">
                        <input type="submit" name="buttonAccept" v-bind:value="rsvpStatus" style="color: white; background-color: transparent;" class="btn btn-block" :class="{ disabled: isDisabled }" :disabled="isDisabled">
                      </div>
                    </div>
                  </div>
                </form>

                <div class="alert alert-success" v-if="sendRSVP">
                  <p>Thank you for your response, @{{ rsvpName }}.</p>
                  <p>Would you like to send wedding wishes to us?</p>
                  <div class="form-group">
                    <div class="row justify-content-center">
                      <div class="col-6" style="background-color: #05341f;">
                        <a href="#wishes" class="btn btn-block" style="background-color: transparent; color: white;">Send Wedding Wishes</a>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid text-center full-height" id="wishes" style="position: relative;">
          <div class="row justify-content-center">
            <div class="col-sm col-md-8 col-lg-6 col-xl-6">
              <h1 class="title">
                  Wedding Wishes
              </h1>
              <div id="app2">
                <form v-on:submit.prevent="addWish()" v-if="!sendWish">
                  <p>Send your wedding wishes to us and we will display it on our special day!</p>
                  <div class="form-group">
                    <input v-model="wishName" type="text" placeholder="Your name" class="form-control text-center" required>
                  </div>
                  <div class="form-group">
                    <textarea v-model="wishMessage" class="form-control text-center" rows="10" cols="50" placeholder="Your message" style="resize: none;" required></textarea>
                  </div>
                  <div class="form-group">
                    <div class="row justify-content-center">
                      <div class="col-6" style="background-color: #05341f;">
                        <input type="submit" name="buttonSendWish" v-bind:value="wishStatus" style="color: white; background-color: transparent;" class="btn btn-block" :class="{ disabled: isDisabled }" :disabled="isDisabled">
                      </div>
                    </div>
                  </div>
                </form>
                <div class="alert alert-success" v-if="sendWish">
                  <p>Great! Thank you so much for your wishes, @{{ wishName }}.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="">
            <div style="margin-top: 2em; opacity: 0.5;">
              <p><small> Design by The Bride & Develop by The Groom</small></p>
            </div>
          </div>
          <!-- <div style="position: absolute; bottom: 0; left:0; right:0; opacity: 0.5;"><p><small>All rights belong to us.</small></p><p><small> Design by The Bride & Develop by The Groom</small></p></div> -->
        </div>

        <a id="back-to-top" href="#" class="btn btn-success btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="fa fa-arrow-up"></span></a>

    </body>

    <!-- CKEditor 5 -->
    <script src="https://cdn.ckeditor.com/ckeditor5/1.0.0-alpha.1/classic/ckeditor.js"></script>

    <!-- Vue JS & Axios -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue"></script>
    <script src="{{ asset('js/vue-main.js') }}"></script>

    <script type="text/javascript">
    $('#clock').countdown('2017/12/09 00:00:00').on('update.countdown', function(event) {
      var $this = $(this).html(event.strftime(''
        + '<span>%-w</span> week%!w '
        + '<span>%-d</span> day%!d '
        + '<span>%H</span> hr '
        + '<span>%M</span> min '
        + '<span>%S</span> sec'));
    });

    // $('div.alert').not('.alert-important').delay(3000).fadeOut(350);

    $(document).on('click', 'a[href^="#"]', function (event){
      event.preventDefault();

      $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
      }, 500);
    });

    $(document).scroll(function(e){
        var scrollTop = $(document).scrollTop();
        if(scrollTop > 200){
            //console.log(scrollTop);
            $('.all-links').css("position","fixed");
            $('.all-links').css("top","0");
            $('.all-links').css("left","0");
            $('.all-links').css("width","100%");
            $('.all-links').css("background-color","white");
            $('.all-links').css("z-index","10");
        } else {
             $('.all-links').css("position","relative");
        }
    });

    $( document ).ready(function() {

      $( ".cross" ).hide();

      $( ".hamburger" ).click(function() {
        $( ".hamburger" ).hide();
        $( ".cross" ).show();
        $( ".menu" ).slideToggle( "slow" );
      });

      $( ".cross" ).click(function() {
        $( ".cross" ).hide();
        $( ".hamburger" ).show();
        $( ".menu" ).slideToggle( "slow" );
      });

      $( "#full_story_link1" ).click(function() {
        $( "#story_chapter1" ).show();
      });

      $( "#full_story_link2" ).click(function() {
        $( "#story_chapter2" ).show();
      });

      $( "#full_story_link3" ).click(function() {
        $( "#story_chapter3" ).show();
      });

      $( "#full_story_link_close" ).click(function() {
        $( "#story_chapter1" ).hide();
        $( "#story_chapter2" ).hide();
        $( "#story_chapter3" ).hide();
      });

      $(window).scroll(function () {
           if ($(this).scrollTop() > 50) {
               $('#back-to-top').fadeIn();
           } else {
               $('#back-to-top').fadeOut();
           }
       });
       // scroll body to 0px on click
       $('#back-to-top').click(function () {
           $('#back-to-top').tooltip('hide');
           $('body,html').animate({
               scrollTop: 0
           }, 800);
           return false;
       });

       $('#back-to-top').tooltip('show');

    });
  </script>
</html>
