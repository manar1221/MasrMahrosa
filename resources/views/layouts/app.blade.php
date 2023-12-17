<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Masr AL-Mahrosa</title>

    <meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:title" content="">
<meta property="og:type" content="">
<meta property="og:url" content="">
<meta property="og:image" content="">
<link rel="shortcut icon" type="image/x-icon" href="#">

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />

    <!-- bootstrap link  -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    @livewireStyles
  </head>

  <body>
    <header class="cheader">
      <section class="cflex">
        @auth
            <a href="{{route('home.index')}}" class="clogo">Masr AL-Mahrosa</a>
        @else
            <a href="{{route('login')}}" class="clogo">Masr AL-Mahrosa</a>
        @endif

        @livewire('header-search-component')

        <div class="cicons">
          <div id="menu-btn" class="fas fa-bars"></div>
          <div id="search-btn" class="fas fa-search"></div>
          <div id="user-btn" class="fas fa-user"></div>
          <div id="toggle-btn" class="fas fa-sun"></div>
        </div>

        @auth
            <div class="cprofile">
                <img src="{{asset('assets/images/default-user.png')}}" class="cimage" alt="" />
                <h3 class="cname">{{Auth::user()->name}}</h3>
                <div class="cflex-btn">
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <a href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();" class="coption-btn text-decoration-none">logout</a>
                </form>
                </div>
            </div>
        @else
            <div class="cprofile">
                <img src="{{asset('assets/images/default-user.png')}}" class="cimage" alt="" />
                <h3 class="cname">User</h3>
                <div class="cflex-btn">
                  <a href="{{route('login')}}" class="coption-btn text-decoration-none"
                    >login</a
                  >
                  <a href="{{route('register')}}" class="coption-btn text-decoration-none"
                    >register</a
                  >
                </div>
              </div>
        @endif

      </section>
    </header>
    @auth
        <div class="cside-bar">
        <div id="close-btn">
            <i class="fas fa-times"></i>
        </div>

        <div class="cprofile">
            <img src="{{asset('assets/images/default-user.png')}}" class="cimage" alt="" />
            <h3 class="cname">{{Auth::user()->name}}</h3>
        </div>

        <nav class="cnavbar">
            <a href="/"
            ><i class="fas fa-home"></i><span> الرئيسية </span></a
            >
            <a href="{{route('cases')}}"
            ><i class="fas fa-chalkboard-user"></i><span> الحالات </span></a
            >
        </nav>
        </div>
    @else
    <div class="cside-bar">
        <div id="close-btn">
          <i class="fas fa-times"></i>
        </div>

        <div class="cprofile">
          <img src="{{asset('assets/images/default-user.png')}}" class="cimage" alt="" />
          <h3 class="cname">User</h3>
        </div>

        <nav class="cnavbar">
          <a href="{{route('login')}}"
            ><i class="fas fa-home"></i><span> الرئيسية </span></a
          >
          <a href="{{route('login')}}"
            ><i class="fas fa-chalkboard-user"></i><span> الحالات </span></a
          >
        </nav>
      </div>
    @endif

    {{$slot}}

    <footer class="cfooter">
      &copy; copyright @ 2023 by
      <a href="https://eltasmem.com/"><span> eltasmem.com </span></a> | all
      rights reserved!
    </footer>

    <!-- custom js file link  -->
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- bootstrap link  -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/slick.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.syotimer.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/wow.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/waypoints.js') }}"></script>
<script src="{{ asset('assets/js/plugins/counterup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/images-loaded.js') }}"></script>
<script src="{{ asset('assets/js/plugins/isotope.js') }}"></script>
<script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.vticker-min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.theia.sticky.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.elevatezoom.js') }}"></script>
    @livewireScripts
    @stack('scripts')
  </body>
</html>
