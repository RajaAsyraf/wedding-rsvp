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
        <div class="container-fluid full-height text-center" id="screen-top">

          <div class="row justify-content-center">
            <div class="col">
              <div class="header">
                <img src="{{ asset('images/walimatulurus-01.png')}}" alt="" height="30px;">
                <p class="header-text">Invitation To The Wedding Of</p>
              </div>
              <div>
                  <!-- <h1 class="main-title">Fadzlina & Asyraf</h1> -->
                  <img class="name-title" src="{{ asset('images/Title-02.png')}}" alt="">
              </div>
              <div class="all-links">
                <a class="links" href="#story">Our Story</a>
                <a class="links" href="#groom">Bride & Groom</a>
                <a class="links" href="#flow">Ceremony Flow</a>
                <a class="links" href="#venue">Venue</a>
                <a class="links" href="#rsvp" title="The French expression 'répondez s'il vous plaît', meaning 'please respond'.">RSVP</a>
                <a class="links" href="#wishes">Wedding Wishes</a>
              </div>

              <div id="clock" class="h1">Countdown</div>
              <small>until the reception</small>

              <br>
              <br>
              <a class="hamburger">&#9776;</a>
              <a class="cross">&#10005;</a>

              <div class="menu">
                <br>
                <ul>
                  <a class="links" href="#story"><li>Our Story</li></a>
                  <a class="links" href="#groom"><li>Bride & Groom</li></a>
                  <a class="links" href="#flow"><li>Ceremony Flow</li></a>
                  <a class="links" href="#venue"><li>Venue</li></a>
                  <a class="links" href="#rsvp" title="The French expression 'répondez s'il vous plaît', meaning 'please respond'."><li>RSVP</li></a>
                  <a class="links" href="#wishes"><li>Wedding Wishes</li></a>
                </ul>
              </div>

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
                <p>On June 2016, Girl was having her last semester in university, Boy came confessing to Girl.</p>

                <p>“ Go and ask my parents ”, Girl said.</p>

                <p>On January 2017, boy finished his last semester in university.</p>

                <p>From down south, he went up north. ALONE. Asking for permission from Girl’s parents.</p>

                <p>March 2017, they got engaged.</p>

                <p>Finally, in December 2017 they are getting married!</p>
              </div>
              <br>
              <div class="">
                <a href="#story_chapter1" id="full_story_link1"><u>Can’t get enough of it? Click here for full story.</u></a>
              </div>

            </div>
          </div>
        </div>

        <div class="container-fluid text-center full-height" id="story_chapter1">
          <div class="row">
            <div class="col">

              <div>
                <h1 class="title" style="margin-top:0;">Chapter 1</h1>
              </div>

              <div class="story1">
                <p>On 2012, Boy & Girl (both 18 years old) are in the same batch during a preparation program before entering university.</p>

                <p>They barely knew each other's existence except for when they met in the batch gathering every once a year.</p>

                <p>Boy thought Girl was some pain in the ass while Girl thought boy was some lame dude who won’t talk to girls.</p>

                <p>Not until January 2014, they started joining the same event and became committees.</p>

                <p>Girl was always sneaky and jokes around inside the meeting where she obviously being super loud.</p>

                <p>Meanwhile, Boy started making more friends out of his circle and obviously he can actually talk to girls.</p>

                <p>They became more friendly and Boy started joining and hanging out with Girl’s circle of friends.</p>

                <p>Day by day, they became closer and became good friends.</p>

                <p>Little did Girl know, Boy never thought of her as a friend even from the start.</p>
              </div>
              <br>
              <div class="">
                <a href="#story_chapter2" id="full_story_link1"><u>Chapter 2</u></a>
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

              <div class="story2">
                <p>Girl started sharing secrets with Boy. She has been crushing on someone for almost 4 years.</p>

                <p>Boy remained calm and became a good listener (at least that’s what Girl thought). Boy knew he was friend zoned by Girl.</p>

                <p>Boy did not give up and aggressively tried to get Girl’s attention.</p>

                <p>Girl got a hunch of Boy’s feeling but she did not feel right about some different feelings between friends.</p>

                <p>So Girl said, “ Let’s remains friends. I love our friendship.”</p>

                <p>After that huge rejection, Boy messed up. He no longer able to stay and Boy needed some spaces.</p>

                <p>That’s when Girl felt like losing somebody she really cares. A friend. A best friend. Girl was still in denial.</p>

                <p>Girl tried to make sure that nothing will change between them.</p>

                <p>After all, they are still best friends.</p>
              </div>
              <br>
              <div class="">
                <a href="#story_chapter3" id="full_story_link1"><u>Chapter 3</u></a>
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

              <div class="story3">
                <p>They started hanging out again but this time Boy was cold, bald and so different.</p>

                <p>He changed his style as well as his personality. Boy would never meet Girl’s glances.</p>

                <p>Girl felt distant again, she felt like she will lose him again for real. Girl started to question herself. A LOT.</p>

                <p>Is it worth the time and energy to wait for somebody who never thinks of her existence?</p>

                <p>There’s somebody in front of her who still loyal and stands right beside her.</p>

                <p>And that’s when Girl decided, she won’t be happy waiting for someone who does not want her back.</p>

                <p>So Girl said to boy, “ Bro, jom Mamak! ”</p>

                <hr style="width:50%;">

                <p>“ I may not be perfect, you know my flaws, my secrets, what I love and what I hate. Give me some chance to know yours too.</p>

                <p>If you sincerely want me,

                go and ask my parents.”</p>

              </div>
              <br>
              <div class="">
                <a href="#story" id="full_story_link_close">Close story</a>
              </div>

            </div>
          </div>
        </div>

        <div class="container-fluid text-center full-height" id="groom">
          <div class="row">
            <div class="col">
              <div>
                <h1 class="title" style="margin-top:0.4em;">Bride & Groom</h1>
              </div>
            </div>
          </div>
          <div class="row" style="margin-right: 10px; margin-left: 10px;">
            <div class="col-sm col-md-3" style="background-color: rgba(220,220,220, 0.5); padding-top: 10px; padding-bottom: 10px;">
              <img src="{{ asset('images/bride.jpg') }}" alt="" width="100%">
            </div>
            <div class="col-sm col-md-3 text-justify" style="padding-top: 3em; background-color: rgba(220,220,220, 0.5);">
              <h4>Nur Fadzlina</h4>
              <p><small>The Bride</small></p>
              <p><i class="fa fa-quote-left" aria-hidden="true"></i>&nbsp;&nbsp;Asyraf and I are not that sweet-cheesy kind of couple cuz we never started that way. So yeah, I am the mischievous ones while he's the well-behaved kind. So very often in our relationship, I am the troublemaker and he's the problem-solver. Never thought I will get married in my early 20's but he managed to change my mind. I wish nothing but the best for our next steps. More ups, more downs, more adventure!&nbsp;&nbsp;<i class="fa fa-quote-right" aria-hidden="true"></i></p>
            </div>

            <div class="col-sm col-md-3 text-right" style="padding-top: 3em; background-color: rgba(245,245,245, 0.8);">
              <h4>Raja Mohamad Asyraf</h4>
              <p><small>The Groom</small></p>
              <p class="text-justify"><i class="fa fa-quote-left" aria-hidden="true"></i>&nbsp;&nbsp;She taught me many things in life. With endless motivations and supports during my study until the beginning of my career, she always there for me to share her honest thoughts. Being in a relationship with her is totally a different experience, it was like a roller-coaster! She loves adventure and I am enjoying it! Getting married to my best friend is like a dream come true. This is just a new beginning of our journey, hope for the best!&nbsp;&nbsp;<i class="fa fa-quote-right" aria-hidden="true"></i></p>
            </div>
            <div class="col-sm col-md-3" style="background-color: rgba(245,245,245, 0.8); padding-top: 10px; padding-bottom: 10px;">
              <img src="{{ asset('images/groom.jpg') }}" alt="" width="100%">
            </div>

          </div>
        </div>

        <div class="container-fluid text-center full-height" id="flow" style="padding-top: 10em;">
          <div class="row">
            <div class="col">

              <h1 class="title" style="margin-top:0.1em;">Ceremony Flow</h1>

              <div style="padding-top: 5em;">
                <h4>Banquet Feast: 12pm till 5pm</h4>
                <h4>Arrival of Bride & Groom: 2pm</h4>
                <br><br><br><br>
                <p>Exciting amusement</p>
                <p>Cake cutting ceremony | Photobooth | Confectionaries | Dessert Stations</p>
              </div>

            </div>
          </div>
        </div>

        <div class="container-fluid text-center full-height" id="venue" style="padding-top: 4em;">
          <div class="row">
            <div class="col">
              <div>
                  <h1 class="title">Venue</h1>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm col-md-7" style="padding-left: 60px;">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7296.111221073366!2d100.36947791924524!3d6.1629298646845925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304b5b134d012467%3A0x6c1c2418261b7a90!2sZee+Homestay!5e0!3m2!1sen!2smy!4v1508561172847" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-sm col-md-5 text-left" style="padding-right: 20px;">
              <h4>Recommended Accomodations</h4>
              <p>
                <ul>
                  <li>
                    <a href="https://www.airasiago.com.my/Kampung-Titi-Gajah-Hotels-TH-Hotel-Convention-Centre-Alor-Setar.h8349584.Hotel-Information?mdpcid=AAG-MY.META.TRIVAGO.CORESEARCH.HOTEL&abax=15859.0&mctc=5&langid=2057&trv_curr=MYR&chkin=08/12/2017&chkout=09/12/2017&rateplanid=207960335_24&trv_dp=155&rm1=a2&paandi=true" target="_blank">TH Hotel & Convention Centre Alor Setar</a> &nbsp;
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                  </li>
                  <li>
                    <a href="https://www.expedia.com.my/Kampung-Permatang-Bogak-Hotels-Hotel-Grand-Crystal-Kedah.h4318318.Hotel-Information?chkin=08%2F12%2F2017&chkout=09%2F12%2F2017&rm1=a2&regionId=399&hwrqCacheKey=2097e1c4-c966-4282-91f7-d4875689f05cHWRQ1510381776860&vip=false&c=b04b1222-c941-4057-a574-beff19b6ac8a&mctc=5&exp_dp=117.92&exp_ts=1510381778924&exp_curr=MYR&swpToggleOn=false&exp_pg=HSR" target="_blank">Hotel Grand Crystal Kedah</a> &nbsp;
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                  </li>
                  <li>
                    <a href="https://www.booking.com/hotel/my/the-leverage-business-kuala-kedah.en-gb.html?aid=383725;label=metatrivago-hotel-428022_xqdz-e19396b935d472c1748f7de8bcca64cb_los-1_nrm-1_gstadt-2_gstkid-0_curr-myr_lang-en;sid=19c8f5c1b8e338f461a97ef1d70fb412;all_sr_blocks=42802201_91048224_0_0_0;checkin=2017-12-08;checkout=2017-12-09;dest_id=-2401814;dest_type=city;dist=0;group_adults=2;group_children=0;hapos=1;highlighted_blocks=42802201_91048224_0_0_0;hpos=1;no_rooms=1;room1=A%2CA;sb_price_type=total;show_room=42802201_91048224_0_0_0;srepoch=1510381788;srfid=61248192a3a2048abd4ed599581c31c956db835cX1;srpvid=87032dadb3a500d8;type=total;ucfs=1&#hotelTmpl" target="_blank">The Leverage Business Hotel - Kuala Kedah</a> &nbsp;
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                  </li>
                  <li>
                    <a href="https://www.airasiago.com.my/Kampung-Permatang-Bogak-Hotels-Fuller-Hotel.h10962526.Hotel-Information?mdpcid=AAG-MY.META.TRIVAGO.CORESEARCH.HOTEL&abax=15859.0&mctc=5&langid=2057&trv_curr=MYR&chkin=08/12/2017&chkout=09/12/2017&rateplanid=211719161_24&trv_dp=109&rm1=a2&paandi=true" target="_blank">Fuller Hotel</a> &nbsp;
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                  </li>
                  <li>
                    <a href="https://www.expedia.com.my/Taman-Senangin-Hotels-Tanjak-Motel-Hostel.h17416896.Hotel-Information?chkin=08%2F12%2F2017&chkout=09%2F12%2F2017&rm1=a2&regionId=399&hwrqCacheKey=2097e1c4-c966-4282-91f7-d4875689f05cHWRQ1510382133232&vip=false&c=cf91b61b-2d25-4173-ba14-fdf01a3ca222&mctc=5&exp_dp=47.22&exp_ts=1510382134213&exp_curr=MYR&swpToggleOn=false&exp_pg=HSR" target="_blank">Tanjak Motel - Hostel</a> &nbsp;
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                  </li>
                </ul>
              </p>
              <h4>Recommended Transportation</h4>
              <p>
                <ul>
                  <li>Flight (Sultan Abdul Halim Airport, Alor Setar)</li>
                  <li>ETS (Anak Bukit Railway Station, Alor Setar)</li>
                  <li>Bus Express (Shahab Perdana Bus Terminal, Alor Setar)</li>
                </ul>
              </p>
              <h4>Recommended Place to Eat</h4>
              <ul>
                <li>
                  <a href="https://www.google.com/maps/place/Laksa+Ikan+Sekoq+-+Baru/@6.1339725,100.3517549,15z/data=!4m8!1m2!2m1!1sLaksa+Ikan+Sekoq+-+Baru,+255,+Taman+Wira+Mergong,+05350+Alor+Setar,+Kedah!3m4!1s0x304b5b4e14fa0779:0xdd2059d623051b8c!8m2!3d6.1429706!4d100.36227" target="_blank">Laksa Ikan Sekoq</a>
                </li>
                <li>
                  <a href="https://www.google.com/maps/place/Mee+Sham/@6.1766403,100.3530059,17z/data=!3m1!4b1!4m5!3m4!1s0x304b60bb421ff261:0x27cfaed8e286db9d!8m2!3d6.176635!4d100.3551946" target="_blank">Roti Doll Mee Sham</a>
                </li>
                <li>
                  <a href="https://www.google.com/maps/place/NASI+LEMAK+ROYALE/@6.1057171,100.3628601,17.86z/data=!4m5!3m4!1s0x304b4491d0e53095:0xefca2a80c6127edc!8m2!3d6.105683!4d100.364323" target="_blank">Nasi Lemak Royale Hijau Kuning</a>
                </li>
                <li>
                  <a href="https://www.google.com/maps/place/Star+Avenue+(Food+Court)/@6.0981783,100.3601426,17z/data=!3m1!4b1!4m5!3m4!1s0x304b448892962545:0xcb2ec45f1ab67a74!8m2!3d6.098173!4d100.3623313" target="_blank">Roti Celaru Star Avenue</a>
                </li>
                <li>
                  <a href="https://www.google.com/maps/place/Iman+Kuey+Teow/@6.1435646,100.3625271,17z/data=!3m1!4b1!4m5!3m4!1s0x304b5b4eea86ef4d:0xe0c2310acc001659!8m2!3d6.1435646!4d100.3647158" target="_blank">Kuey Teow Iman</a>
                </li>
                <li>
                  <a href="https://www.google.com/maps/place/Mee+Udang+Kg+Kuala+Dulang+Kecik/@5.8490742,100.3649733,17.45z/data=!4m12!1m6!3m5!1s0x304b3ba563963a87:0xdfa6827eb57d9c59!2sMee+Udang!8m2!3d5.8530279!4d100.3832123!3m4!1s0x304b3b9c6c4a45d3:0x4484c7c6a20cd55f!8m2!3d5.8490742!4d100.3649736" target="_blank">Mee Udang D'ombak Lara, Kg. Kuala Dulang Kecil</a>
                </li>
                <li>
                  <a href="https://www.google.com/maps/place/Medan+Selera+PKNK/@6.1196572,100.3703186,13z/data=!4m5!3m4!1s0x0:0xc4299dca3b08bbcd!8m2!3d6.1377706!4d100.3839657" target="_blank">Laksa Hadyai, Medan Selera PKNK</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div id="app"> <!-- Vue component -->
          <div class="container-fluid text-center full-height" id="rsvp" style="padding-top: 8em;">
            <div class="row justify-content-center">
              <div class="col-sm col-md-8 col-lg-6 col-xl-6">

                <h1 class="title" title="The French expression 'répondez s'il vous plaît', meaning 'please respond'.">RSVP</h1>

                <div style="padding-top: 5em;">
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

                    <div class="form-group" v-if="rsvpName">
                      <label v-if="rsvp">@{{ rsvp }} @{{ rsvpName }}</label>
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
                    <p>Would you like to send us a wish?</p>
                    <div class="form-group">
                      <div class="row justify-content-center">
                        <div class="col-6" style="background-color: #05341f;">
                          <a href="#wishes" class="btn btn-block" style="background-color: transparent; color: white;">Wedding Wishes</a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="container-fluid text-center full-height" id="wishes" >
            <div class="row justify-content-center">
              <div class="col-sm col-md-8 col-lg-6 col-xl-6">
                <h1 class="title">
                    Wedding Wishes
                </h1>
                <div>
                  <form v-on:submit.prevent="addWish()" v-if="!sendWish">
                    <p>Send your wedding wishes to us and we will display it on our special day!</p>
                    <div class="form-group">
                      <input v-model="rsvpName" type="text" placeholder="Your name" class="form-control text-center" required></input>
                    </div>
                    <div class="form-group">
                      <textarea v-model="wishMessage" class="form-control text-center" rows="8" cols="50" placeholder="Your message" style="resize: none;" required></textarea>
                    </div>
                    <div class="form-group">
                      <div class="row justify-content-center">
                        <div class="col-6" style="background-color: #05341f;">
                          <input type="submit" name="buttonSendWish" v-bind:value="wishStatus" style="color: white; background-color: transparent;" class="btn btn-block" :class="{ disabled: isDisabled2 }" :disabled="isDisabled2">
                        </div>
                      </div>
                    </div>
                  </form>
                  <div class="alert alert-success" v-if="sendWish">
                    <p>Great! Thank you so much for your wish, @{{ rsvpName }}.</p>
                    <p>We are going to put your wish up on our cherish board.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="">
              <div style="margin-top: 1em; opacity: 1;">
                <p><small> Designed by The Bride & Developed by The Groom</small></p>
              </div>
              <br><br><br><br><br>
            </div>
            <!-- <div style="position: absolute; bottom: 0; left:0; right:0; opacity: 0.5;"><p><small>All rights belong to us.</small></p><p><small> Design by The Bride & Develop by The Groom</small></p></div> -->
          </div>
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
        $( "#story_chapter2" ).show();
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
