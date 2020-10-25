<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.jpg"alt="" class="img-fluid"></a>
   <!-- Uncomment below if you prefer to use an letter logo -->
      <!--<h1 class="logo mr-auto"><a href="index.html">Thineth</a></h1>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
        <li><a href="{{url('about')}}">About</a></li>
          <li><a href="{{url('courses')}}">Courses</a></li>
          <li><a href="{{url('lecturers')}}">Lecturers</a></li>
          <li><a href="{{url('events')}}">Events</a></li>
          <li><a href="{{url('pricing')}}">Pricing</a></li>
          <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="{{url('contact')}}">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      @if (Auth::check())
      <a href="{{url('login')}}" class="get-started-btn" >Logout</a>
      @endif
      @if (!Auth::check())
      <a href="{{url('login')}}" class="get-started-btn" >Get Started</a>
      @endif

    </div>
  </header><!-- End Header -->