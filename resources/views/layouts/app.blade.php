<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Masr AL-Mahrosa</title>

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
        <a href="{{route('home.index')}}" class="clogo">Masr AL-Mahrosa</a>

        <form action="search.html" method="post" class="csearch-form">
          <input
            type="text"
            name="search_box"
            required
            placeholder="search cases..."
            maxlength="100"
          />
          <button type="submit" class="fas fa-search"></button>
        </form>

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

    <div class="cside-bar">
      <div id="close-btn">
        <i class="fas fa-times"></i>
      </div>

      <div class="cprofile">
        <img src="{{asset('assets/images/default-user.png')}}" class="cimage" alt="" />
        <h3 class="cname">User</h3>
      </div>

      <nav class="cnavbar">
        <a href="index.html"
          ><i class="fas fa-home"></i><span> الرئيسية </span></a
        >
        <a href="{{route('cases')}}"
          ><i class="fas fa-chalkboard-user"></i><span> الحالات </span></a
        >
      </nav>
    </div>

    {{$slot}}

    <footer class="cfooter">
      &copy; copyright @ 2023 by
      <a href="https://eltasmem.com/"><span> eltasmem.com </span></a> | all
      rights reserved!
    </footer>

    <!-- custom js file link  -->
    <script src="{{asset('assets/js/script.js')}}"></script>

    <!-- bootstrap link  -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    @livewireScripts
  </body>
</html>
