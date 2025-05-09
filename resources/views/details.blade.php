
<!DOCTYPE html>
<html class="wide wow-animation" lang="fr">
  <head>
    <title>Jacky-Services-Immobiliers</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="{{asset('site/images/logo3.jpg')}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800%7CPoppins:300,400,700">
    <link rel="stylesheet" href="{{asset('site/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/style.css')}}" id="main-styles-link">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}

        .article-container {
            width: 100%;
            max-width: 600px; /* Ajuste la largeur */
            padding: 20px;
            border: 2px solid #ddd; /* Bordure grise */
            border-radius: 10px;
            background-color: #f9f9f9; /* Fond léger */
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .article-title {
            font-size: 40px;
            margin: 0 0 15px;
            color: #222;
            font-weight: bold;
        }
        
        .article-info {
            font-size: 16px;
            color: #333;
            font-weight: 500;
            margin-bottom: 8px;
            font-family: 'Poppins', 'Arial', 'Helvetica', sans-serif;
        }
        
        .article-details {
            font-size: 14px;
            color: #555;
            text-align: justify;
            line-height: 1.6;
        }
        
        .article-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #7657E6;
            color: white;
            font-size: 16px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background 0.3s;
        }
        
        .article-btn:hover {
            background-color: #5a42c9;
            color:#fff;
        }
        .tiktok-button {
            position: fixed;
            bottom: 20px; /* Ajuste la position verticale */
            right: 10px; /* Place-le à droite */
            background-color: #D3D3D3; /* Fond noir TikTok */
            padding: 10px;
            border-radius: 50%;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
            z-index: 999;
        }
    
        .tiktok-button img {
            width: 40px;
            height: 40px;
        }

    </style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="site/images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-logo"><img src="{{asset('site/images/logo3.jpg')}}" alt="" width="151" height="44" srcset="{{asset('site/images/logo3.jpg 2x')}}"/>
      </div>
      <div class="preloader-body">
        <div id="loadingProgressG">
          <div class="loadingProgressG" id="loadingProgressG_1"></div>
        </div>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      <header class="section novi-background page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-lg-stick-up="true" data-lg-stick-up-offset="118px" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xl-stick-up="true" data-xl-stick-up-offset="118px" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-xxl-stick-up-offset="118px" data-xxl-stick-up="true">
            <div class="rd-navbar-aside-outer" style="background-color:#0F056B;">
                <div class="rd-navbar-aside" >
                  <!-- RD Navbar Panel-->
                  <div class="rd-navbar-panel">
                    <!-- RD Navbar Toggle-->
                    <button class="rd-navbar-toggle" data-rd-navbar-toggle="#rd-navbar-nav-wrap-1"><span></span></button>
                    <!-- RD Navbar Brand-->
                    <a class="rd-navbar-brand" href="/"><img src="{{asset('site/images/logo3.jpg')}}" style=" border-radius: 50%;
                              width: 60px;
                              height: 60px;
                              object-fit: cover;" alt=" Logo" width="151" height="44" srcset="{{asset('site/images/logo3.jpg 2x')}}"/></a>
                  </div>
                  <div class="rd-navbar-collapse">
                    {{--  <button class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle="#rd-navbar-collapse-content-1"><span></span></button>  --}}
                    <div class="rd-navbar-collapse-content" id="rd-navbar-collapse-content-1">
                      <article class="unit align-items-center">
                        <div class="unit-left"><span style="color:#fff;"  class="icon novi-icon icon-md icon-modern mdi mdi-phone"></span></div>
                        <div class="unit-body">
                          <ul class="list-0">
                            <li><a class="link-default" style="color:#fff;" href="tel:#">(+229) 0140338964</a></li>
                            <li><a class="link-default" style="color:#fff;"  href="tel:#">(+229) 0161484370</a></li>
                          </ul>
                        </div>
                      </article>
                      <article class="unit align-items-center">
                        <div class="unit-left"><span style="color:#fff;" class="icon novi-icon icon-md icon-modern mdi mdi-map-marker"></span></div>
                        <div class="unit-body"><a class="link-default" style="color:#fff;"  href="tel:#">Bénin, Atlantique <br> TORI GARE CENTRE</a></div>
                      </article>
                      {{--  <a class="button button-gray-bordered button-winona" href="#">Request a call</a>  --}}
                    </div>
                  </div>
                </div>
              </div>
            <div style="background-color:#000;"  class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="/">Accueil</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="/a-propos">Qui sommes-nous</a></li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{url('parcelle')}}">Nos parcelles</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{url('habitations')}}">Nos habitations</a>
                    </li>
                    {{--  <li class="rd-nav-item"><a class="rd-nav-link" href="about-us.html">A propos</a>
                    </li>
                     --}}
                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{url('contact')}}">Contacts</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      {{--  <section class="section novi-background breadcrumbs-custom bg-image context-dark" style="background-image: url('{{ asset('site/images/immo.jpg') }}');">
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h6 class="breadcrumbs-custom-subtitle title-decorated"></h6>
              <h2 class="text-uppercase breadcrumbs-custom-title">Détails</h2>
            </div>
            <ul class="breadcrumbs-custom-path">
              <li><a href="/">Accueil</a></li>
             <li class="active">Détails</li>
            </ul>
         </div>
        </div>
      </section>  --}}
     
      {{--  <section class="section novi-background section-sm">
        <div class="container">
          <div class="row">
            <div class="col-lg-10 col-xl-8">
              <h6>Centered image</h6>
              <figure class="figure-light"><img class="img-centered" src="site/images/typography-1-770x456.jpg" alt="" width="770" height="456"/>
                <figcaption>
                  <p>Offering the best properties</p>
                </figcaption>
              </figure>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
            </div>
          </div>
        </div>
      </section>  --}}
     
             
      <section class="section novi-background section-sm">
        <div style="margin-top:49px;" class="container">
            <div class="row d-flex ">
                <!-- Image à gauche -->
                <div class="col-md-6">
                    <figure class="figure-light">
                        {{--  <img src="{{ $value->image ? asset('assets/uploads/articles_images/'.$value->image) : asset('assets/uploads/articles_images/terrain.jpg') }}" style="width: 571px;
                        height: 353px;
                        object-fit: cover;" alt="" width="571" height="353"/>  --}}

                        <img class="img-fluid img-thumbnail"  src="{{ $article->image ? asset('assets/uploads/articles_images/'.$article->image) : asset('assets/uploads/articles_images/terrain.jpg') }}" alt="" width="770" height="356"/>
                        <figcaption>
                            {{--  <p>Offering the best properties</p>  --}}
                        </figcaption>
                    </figure>
                </div>
    
                <!-- Texte à droite -->
                <div class="col-md-6">
                    {{--  <h4 style="font-size:49px; margin-top:0px;" class="mb-4 fs-3"><strong>{{ $article->name}} </strong> </h4>
                    <h6 style=" font-size: 16px;
   
    color: #333;
    
    font-family: 'Arial', sans-serif;
                    "class=" mb-2" > Site: {{ $article->site->name }}  </h6>
                    <h6 class="mb-4"> Superficie: {{ $article->area }} m²  </h6>
                    <h6 class="mb-4"> Montant: {{ number_format($article->normal_price, 0, ',', ' ') }} FCFA  </h6>
                   
                    <p style="text-align:justify;">{!! $article->details !!}</p>

                    <a href="#" class="btn btn-primary mt-3 ">Contacter-nous</a>  --}}

                    <div class="article-container">
                        <h4 class="article-title">{{ $article->name }}</h4>
                    
                        <h6 class="article-info">Site: {{ $article->site->name }}</h6>
                        <h6 class="article-info">Superficie: {{ $article->area }} m²</h6>
                        <h6 class="article-info">Montant: {{ number_format($article->normal_price, 0, ',', ' ') }} FCFA</h6>
                    
                        <p class="article-details mb-4">{!! $article->details !!}</p>
                    
                        <a href="#" class="article-btn">Contacter-nous</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    

    <footer class="section novi-background footer-advanced bg-gray-700">

        {{--  <div class="footer-advanced-aside">  --}}
          {{--  <div class="container">
            <div class="footer-advanced-layout">
              <div>
                <ul class="list-nav">
                  <li><a href="/">Accueil</a></li>
                  <li><a href="a-propos">Qui sommes-nous</a></li>
                  <li><a href="parcelle">Nos parcelles</a></li>
                  <li><a href="habitations">Nos habitations</a></li>

                  <li><a href="contact">Contacts</a></li>
                </ul>
              </div>
              <div>
                <ul class="foter-social-links list-inline list-inline-md">
                  <li><a class="icon novi-icon icon-sm link-default mdi mdi-facebook" target="_blank" href="https://www.facebook.com/profile.php?id=61550218523699"></a></li>


                    <li>
                        <a class="fa-brands fa-tiktok text-white" target="_blank" href="https://www.tiktok.com/@jackyservicesimmo?_t=ZM-8v9OYgrDtvp&_r=1"></a>
                    </li>

                    <li>
                            <a class="icon novi-icon icon-sm link-default mdi mdi-whatsapp" href="https://wa.me/22940338964" target="_blank"></a>
                        </li>

                   <li><a class="icon novi-icon icon-sm link-default mdi mdi-twitter" href="#"></a></li>
                    <li><a class="icon novi-icon icon-sm link-default mdi mdi-instagram" href="#"></a></li>
                  <li><a class="icon novi-icon icon-sm link-default mdi mdi-google" href="#"></a></li>  -
                  <li><a class="icon novi-icon icon-sm link-default mdi mdi-linkedin" href="#"></a></li>
                </ul>
              </div>
            </div>
          </div>
            </div>  --}}
            
        <div class="footer-advanced-aside">
          <div class="container">
            <div class="footer-advanced-layout">
                <a style="margin-left:30px;"class="brand " href="login"><img src="{{asset('site/images/logo3-1.jpg')}}" style=" border-radius: 50%;
                           margin-left:45px; width: 60px;
                            height: 60px;
                            object-fit: cover;" alt=" logo tettdd" width="115" height="34" srcset="site/images/logo3-1.jpg 2x"/></a>

                             <ul class="foter-social-links list-inline list-inline-md">
                  <li><a class="icon novi-icon icon-sm link-default mdi mdi-facebook" target="_blank" href="https://www.facebook.com/profile.php?id=61550218523699"></a></li>


                    <li>
                        <a class="fa-brands fa-tiktok text-white" target="_blank" href="https://www.tiktok.com/@jackyservicesimmo?_t=ZM-8v9OYgrDtvp&_r=1"></a>
                    </li>

                    <li>
                            <a class="icon novi-icon icon-sm link-default mdi mdi-whatsapp" href="https://wa.me/22940338964" target="_blank"></a>
                        </li>
                        <li>
                          <a class="icon novi-icon icon-sm link-default" href="https://web53.lws-hosting.com:2096/cpsess6637140572/3rdparty/roundcube/?_task=mail&_mbox=INBOX" target="_blank">webmail</a>
                      </li>
                   {{--  <li><a class="icon novi-icon icon-sm link-default mdi mdi-twitter" href="#"></a></li>
                    <li><a class="icon novi-icon icon-sm link-default mdi mdi-instagram" href="#"></a></li>
                  <li><a class="icon novi-icon icon-sm link-default mdi mdi-google" href="#"></a></li>  -
                  <li><a class="icon novi-icon icon-sm link-default mdi mdi-linkedin" href="#"></a></li>  --}}
                </ul>
              <!-- Rights-->
              <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span>. Tous droit réservées. Designé Par  <a href="https://digitalis-benin.com/">Digitalis</a></p>
            </div>
          </div>
        </div>
    </footer>
      <a href="https://www.tiktok.com/@jackyservicesimmo?_t=ZM-8v9OYgrDtvp&_r=1" 
   class="tiktok-button" 
   target="_blank">
    <img src="https://upload.wikimedia.org/wikipedia/en/a/a9/TikTok_logo.svg" alt="TikTok">
</a>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script type="text/javascript">
        (function () {
            var options = {
                whatsapp: "22940338964", // Remplace avec ton numéro WhatsApp
                call_to_action: "", 
                position: "left", // Position du bouton (left ou right)
            };
            var proto = document.location.protocol, 
                host = "getbutton.io", 
                url = proto + "//static." + host;
            var s = document.createElement("script");
            s.type = "text/javascript"; 
            s.async = true; 
            s.src = url + "/widget-send-button/js/init.js";
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            document.getElementsByTagName("body")[0].appendChild(s);
        })();
    </script>
    <script src="{{asset('site/js/core.min.js')}}"></script>
    <script src="{{asset('site/js/script.js')}}"></script>
  </body>
</html>