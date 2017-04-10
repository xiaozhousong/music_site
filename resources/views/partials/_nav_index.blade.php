<nav class = "navbar navbar-inverse">
  <div class="container-fluid">
  
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#topNavBar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      <a class="navbar-brand" href="{{ url('/') }}">Music</a>
    </div>

    <div class="collapse navbar-collapse" id="topNavBar">
        <ul class="nav navbar-nav">
          <li class="">
            <a href="{{ url('/albums') }}">
              <span class="glyphicon glyphicon-cd" aria-hidden="true"></span>&nbsp;
              Albums
            </a>
          </li>
          
          <li class="">
            <a href="">
              <span class="glyphicon glyphicon-music" aria-hidden="true"></span>&nbsp;
              Songs
            </a>
          </li>
          
        </ul>

        <ul class="nav navbar-nav navbar-right">

        @if (Route::has('login'))
               
        @if (Auth::check())
            <li class="">
              <a href="">
              Hello {{ Auth::user()->name }}
              </a>
            </li>
            <li class="">
              <a href="{{ url('/home') }}">
                <span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span>&nbsp;
                dashboard
              </a>
            </li>
            <li class="">
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>

            
          </li>
                        
        @else
                        
            <li class="">
              <a href="{{ url('/login') }}">
                <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;
                Login
              </a>
            </li>
            <li class="">
              <a href="{{ route('register') }}">
                <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;
                Register
              </a>
            </li>
                       
          @endif
               
        @endif

       




        </ul>



    
    

  </div>
</nav>