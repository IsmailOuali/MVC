<?php 

// require_once '../app/init.php';

// $app = new App;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>

    <section class="header">
    <div class="artist__header">
            
            <div class="artist__info">
            
            <div class="profile__img">
            
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/g_eazy_propic.jpg" alt="G-Eazy" />
                
            </div>
            
            <div class="artist__info__meta">
            
                <div class="artist__info__type">Playlist</div>
                
                <div class="artist__info__name">G-Eazy Playlist</div>
                
                <div class="artist__info__actions">
                
                <button class="button-dark">
                    <i class="ion-ios-play"></i>
                    Play
                </button>
                
                <button class="button-light">Delete</button>
                
                </div>
                
            </div>
            
            
            </div>
            
            <div class="artist__listeners">
            
            <div class="artist__listeners__count">4 min 11 seconds in total</div>
            
            <div class="artist__listeners__label">2 Songs</div>
            
            </div>
            
            <div class="artist__navigation">
            
            <ul class="nav nav-tabs" role="tablist">
                
                <li role="presentation" class="active">
                <a href="#artist-overview" aria-controls="artist-overview" role="tab" data-toggle="tab">Overview</a>
                </li>
                
                <li role="presentation">
                <a href="#related-artists" aria-controls="related-artists" role="tab" data-toggle="tab">Related Artists</a>
                </li>
                
                <!--<li role="presentation">
                <a href="#artist-about" aria-controls="artist-about" role="tab" data-toggle="tab">About</a>
                </li>-->
                
            </ul>
            
            <div class="artist__navigation__friends">
            
                <a href="#">
                <img src="http://zblogged.com/wp-content/uploads/2015/11/17.jpg" alt="" />
                </a>
                
                <a href="#">
                <img src="http://zblogged.com/wp-content/uploads/2015/11/5.png" alt="" />
                </a>
                
                <a href="#">
                <img src="http://cdn.devilsworkshop.org/files/2013/01/enlarged-facebook-profile-picture.jpg" alt="" />
                </a>
                
            </div>
            
            </div>
            
        </div>

    </section>
    <div class="album">
                
                
                <div class="album__tracks">
                
                  <div class="tracks">
                    
                    <div class="tracks__heading">
                    
                      <div class="tracks__heading__number">#</div>
                      
                      <div class="tracks__heading__title">Song</div>
                      
                      <div class="tracks__heading__length">
                      
                        <i class="ion-ios-stopwatch-outline"></i>
                        
                      </div>
                      
                      <div class="tracks__heading__popularity">
                      
                        <i class="ion-thumbsup"></i>
                        
                      </div>
                      
                    </div>

                    <div class="track">

                      <div class="track__number">1</div>

                      <div class="track__added">

                        <i class="ion-checkmark-round added"></i>

                      </div>

                      <div class="track__title">Intro</div>

                      <div class="track__explicit">

                        <span class="label">Explicit</span>

                      </div>
                      
                      <div class="track__length">1:11</div>
                      
                      <div class="track__popularity">
                      
                        <i class="ion-arrow-graph-up-right"></i>
                        
                      </div>

                    </div>
                    
                    <div class="track">

                      <div class="track__number">2</div>

                      <div class="track__added">

                        <i class="ion-checkmark-round added"></i>

                      </div>

                      <div class="track__title">Random</div>

                      <div class="track__explicit">

                        <span class="label">Explicit</span>

                      </div>
                      
                      <div class="track__length">3:00</div>
                      
                      <div class="track__popularity">
                      
                        <i class="ion-arrow-graph-up-right"></i>
                        
                      </div>

                    </div>
                    <div class="overview__related">

                <div class="section-title">Related Artists</div>
                
                <div class="related-artists">
                
                  <a href="#" class="related-artist">
                  
                    <span class="related-artist__img">
                    
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/hoodie.jpg" alt="Hoodie Allen">
                      
                    </span>
                    
                    <span class="related-artist__name">Hoodie Allen</span>
                    
                  </a>
                  
                  <a href="#" class="related-artist">
                  
                    <span class="related-artist__img">
                    
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/mikestud.jpg" alt="Mike Stud">
                      
                    </span>
                    
                    <span class="related-artist__name">Mike Stud</span>
                    
                  </a>
                  
                  <a href="#" class="related-artist">
                  
                    <span class="related-artist__img">
                    
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/drake.jpeg" alt="Drake">
                      
                    </span>
                    
                    <span class="related-artist__name">Drake</span>
                    
                  </a>
                  
                  <a href="#" class="related-artist">
                  
                    <span class="related-artist__img">
                    
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/jcole.jpg" alt="J. Cole">
                      
                    </span>
                    
                    <span class="related-artist__name">J. Cole</span>
                    
                  </a>
                  
                  <a href="#" class="related-artist">
                  
                    <span class="related-artist__img">
                    
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/bigsean.jpg" alt="Big Sean">
                      
                    </span>
                    
                    <span class="related-artist__name">Big Sean</span>
                    
                  </a>
                  
                  <a href="#" class="related-artist">
                  
                    <span class="related-artist__img">
                    
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/wiz.jpeg" alt="Wiz Khalifa">
                      
                    </span>
                    
                    <span class="related-artist__name">Wiz Khalifa</span>
                    
                  </a>
                  
                  <a href="#" class="related-artist">
                  
                    <span class="related-artist__img">
                    
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/yonas.jpg" alt="Yonas">
                      
                    </span>
                    
                    <span class="related-artist__name">Yonas</span>
                    
                  </a>
                  
                </div>

              </div>
              
                        
                
        
    <script>
            // Sliders

    var slider = document.getElementById('song-progress');

    noUiSlider.create(slider, {
        start: [ 20 ],
        range: {
            'min': [   0 ],
            'max': [ 100 ]
        }
    });

    var slider = document.getElementById('song-volume');

    noUiSlider.create(slider, {
        start: [ 90 ],
        range: {
            'min': [   0 ],
            'max': [ 100 ]
        }
    });


    // Tooltips

    $(function () {
    $('[data-toggle="tooltip"]').tooltip()
    })

    // Viewport Heights

    $(window).on("resize load", function(){
    
    var totalHeight = $(window).height();

    var headerHeight = $('.header').outerHeight();
    var footerHeight = $('.current-track').outerHeight();
    var playlistHeight = $('.playlist').outerHeight();
    var nowPlaying = $('.playing').outerHeight();

    var navHeight = totalHeight - (headerHeight + footerHeight + playlistHeight + nowPlaying);
    var artistHeight = totalHeight - (headerHeight + footerHeight);

    console.log(totalHeight);
    
    $(".navigation").css("height" , navHeight);
    $(".artist").css("height" , artistHeight);
    $(".social").css("height" , artistHeight);
    
    });
        


    

    // Collapse Toggles

    $(".navigation__list__header").on( "click" , function() {
    
    $(this).toggleClass( "active" );
    
    });


    // Media Queries

    $(window).on("resize load", function(){
        if ($(window).width() <= 768){	
            
        $(".collapse").removeClass("in");
        
        $(".navigation").css("height" , "auto");
        
        $(".artist").css("height" , "auto");
        
        }	
    });

    $(window).on("resize load", function(){
        if ($(window).width() > 768){	
            
        $(".collapse").addClass("in");
        
        }	
    });

        </script>
</body>
</html>