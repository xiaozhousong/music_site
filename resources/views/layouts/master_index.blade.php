<!DOCTYPE html>
<html lang="en">

  @include('partials._head')
 
  <body>

    @include('partials._nav_index')   
      
      <div class="container"> 
	      
	      <!-- {{ Auth::check() ? "Logged In" : "Logged Out"}} -->



	      @yield('content')
	      @include('partials._footer')
      </div>

    @include('partials._js')
    @yield('scripts')
    
  </body>

</html>