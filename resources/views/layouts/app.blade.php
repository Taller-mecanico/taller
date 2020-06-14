<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  
<meta charset="utf-8">
<meta name="title" content="Corona">
      <meta property="fb:app_id" content="312" />
      <meta property="og:type" content="Corona" />
      <meta property="og:url" content="http://steelthemes.com/demo/Elango/Corona-final" />
      <meta property="og:title" content="Corona">
      <meta property="og:image" content="http://steelthemes.com/demo/Elango/Corona-final/assets/image/fbimg-210x210.jpg">
      <meta property="og:description" content="Corona is html 5 Template">
      <meta name="full-screen" content="yes">
      <meta name="theme-color" content="#269bef ">
      <!-- Responsive -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      
      <link rel="stylesheet" type="text/css" href="{{asset('../assets/css/bootstrap.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('../assets/css/style.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('../assets/fonts/font/flaticon.css')}}">
      
     
</head>
<body>

@include('includes.header')
    <div id="app">
    
  

        <main class="py-4">
            @yield('content')
            
        </main>
    </div>
    <section class="footer type_two ">
               <div class="footer_layer" style="background-image: url({{asset('../assets/image/resources/footer-bg1.png')}});"></div>
               <div class="container ">
                  <div class="row ">
                    
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                        <div class="footer_widgets tp_two ">
                           <h3 class="widgets_title ">Links útiles</h3>
                           <div class="inner_widgets ">
                              <ul>
                                 <li><a href="{{ url('privacidad') }} ">Politica de privacidad</a></li>
                                 <li><a href="{{ url('prevencion') }}  ">Prevención COVID-19</a></li>
                                 <li><a href="{{ url('contacto') }} ">Contacto</a></li>
                                 <li><a href="{{ url('faqs') }}  ">FAQ'S</a></li>
                                 
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                        <div class="footer_widgets tp_two ">
                           <h3 class="widgets_title ">Contáctanos</h3>
                           <div class="inner_widgets ">
                              <div class="text_box ">
                                 <span class="fa fa-map-marker"></span>
                                 <p>I.E.S José Planes / Espinardo, Murcia</p>
                              </div>
                              <div class="text_box ">
                                 <span class="fa fa-phone"></span>
                                 <p>+63 666666666</p>
                              </div>
                              <div class="text_box ">
                                 <span class="fa fa-clock-o"></span>
                                 <p>Lun - Vie: 09.00h a 18.00h</p>
                              </div>
                              <div class="text_box ">
                                 <span class="fa fa-envelope"></span>
                                 <p>info@taller.com</p>
                              </div>
                              
                           </div>
                        </div>
                     </div>
                     
                  </div>
                  <div class="footer_last type_two">
                     <div class="row">
                        <div class="col-lg-12 text-center ">
                           <p><p xmlns:dct="http://purl.org/dc/terms/" xmlns:cc="http://creativecommons.org/ns#" class="license-text"><span rel="dct:title">Taller mecánico</span> by <span rel="cc:attributionName">Angelina, Jesús y Kevin</span>CC BY-NC-ND 4.0<a href="https://creativecommons.org/licenses/by-nc-nd/4.0"><img style="height:22px!important;margin-left: 3px;vertical-align:text-bottom;" src="https://search.creativecommons.org/static/img/cc_icon.svg" /><img  style="height:22px!important;margin-left: 3px;vertical-align:text-bottom;" src="https://search.creativecommons.org/static/img/cc-by_icon.svg" /><img  style="height:22px!important;margin-left: 3px;vertical-align:text-bottom;" src="https://search.creativecommons.org/static/img/cc-nc_icon.svg" /><img  style="height:22px!important;margin-left: 3px;vertical-align:text-bottom;" src="https://search.creativecommons.org/static/img/cc-nd_icon.svg" /></a></p></p>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
              <!---------mbile-navbar----->
      <div class="bsnav-mobile ">
         <div class="bsnav-mobile-overlay"></div>
         <div class="navbar ">
            <button class="navbar-toggler toggler-spring mobile-toggler"><span class="fa fa-close "></span></button>
         </div>
      </div>
       <!---------mbile-navbar----->
    
      <!-----------------------------------script-------------------------------------->
      <script src="{{asset('../assets/js/jquery.js')}} "></script>
      <script src="{{asset('../assets/js/popper.min.js')}} "></script>
      <script src="{{asset('../assets/js/bootstrap.min.js')}} "></script>
      <script src="{{asset('../assets/js/bsnav.min.js')}} "></script>
      <script src="{{asset('../assets/js/jquery-ui.js')}} "></script>
      <script src="{{asset('../assets/js/isotope.min.js')}} "></script>
      <script src="{{asset('../assets/js/wow.js')}} "></script>
      <script src="{{asset('../assets/js/owl.js')}} "></script>
      <script src="{{asset('../assets/js/jquery.fancybox.js')}} "></script>
      <script src="{{asset('../assets/js/TweenMax.min.js')}} "></script>
      <script src="{{asset('../assets/js/validator.min.js')}} "></script>
      <script src="{{asset('../assets/js/appear.js')}} "></script>
      <script src="{{asset('../assets/js/moment.js')}} "></script>
      <script src="{{asset('../assets/js/jquery.flexslider-min.js')}}"></script>
      <script src="{{asset('../assets/js/pagenav.js')}}"></script>
      <script src="{{asset('../assets/js/custom.js')}} "></script>
</body>

</html>
