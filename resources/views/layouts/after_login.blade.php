<!DOCTYPE html>
<html lang="en">

  @include('partials._head')
 
  <body class="full2">

    @include('partials._nav_home')   
      
      <div class="container" id="app"> 

      @include('partials._messages')
          
          <!-- {{ Auth::check() ? "Logged In" : "Logged Out"}} -->



          @yield('content')
          
      </div>

    @include('partials._js')
    @yield('scripts')
    
  </body>

</html>