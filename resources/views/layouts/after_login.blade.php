<!DOCTYPE html>
<html lang="en">

  @include('partials._head')
 
  <body>

    @include('partials._nav_home')   
      
      <div class="container"> 

      @include('partials._messages')
          
          <!-- {{ Auth::check() ? "Logged In" : "Logged Out"}} -->



          @yield('content')
          
      </div>

    @include('partials._js')
    @yield('scripts')
    
  </body>

</html>