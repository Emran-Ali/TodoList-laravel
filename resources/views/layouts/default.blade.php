<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container text-center border border-5 w-25">

    <header class="row ">
        @include('includes.header')
    </header>
    <div id="main" class="row">
        @yield('content')
    </div>
    <footer class="row">
        @include('includes.footer')
    </footer>
</div>
</body>
</html>
