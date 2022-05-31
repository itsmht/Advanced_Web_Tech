<html>
    <head></head>
    <body>
        <div>
        <a href="{{route('page.landingpage')}}">Home</a>
        <a href="{{route('page.about')}}">About</a>
        <a href="{{route('page.contact')}}">Contact</a>
        <a href="{{route('products.service')}}">List</a>

        </div>
        @yield('content')
    </body>
</html>