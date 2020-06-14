<header class="header_v2">
         
            <section class="navbar_outer">
               <div class="navbar navbar-expand-lg  bsnav bsnav-sticky bsnav-sticky-slide">
                  <div class="container">
                     <a class="navbar-brand" href="{{ url('home') }}"><img src="{{asset('../assets/image/home-1-logo.png')}}" class="img-fluid" alt="img"></a>
                     <button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
                     <div class="collapse navbar-collapse scroll-nav">
                        <ul class="navbar-nav navbar-mobile navbar_left  ml-auto" id="nav">
                           <li class="nav-item nav_item ">
                              <a class="nav-link link_hd" href="{{ url('home') }}">  Inicio  </a>
                              <a class="nav-link link_hd" href="{{ url('/logout') }}"> Cerrar sesión </a>
                           </li>
                           
                        </ul>
                     </div>
                  </div>
               </div>
            </section>
         </header>