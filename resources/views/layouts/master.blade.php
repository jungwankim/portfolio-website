<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
    
</head>
<body>
    @if (Auth::user()) 
      @include('adminLayouts.adminNav')
    @endif

    <div class="site">
      @yield('content')
    </div>
    @include('layouts.footer')
</body>
</html>