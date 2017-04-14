<!DOCTYPE html>
<html lang="en">

  @include('partials._head')
 
  <body class="full">

    @include('partials._nav_index')   
      
      <div class="container">

      @include('partials._messages')
	      
	      <!-- {{ Auth::check() ? "Logged In" : "Logged Out"}} -->



	      @yield('content')
	      
      </div>

    @include('partials._js')
    @yield('scripts')
    
  </body>

</html>