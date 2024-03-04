<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container m-auto text-center">
    <div>
        @include('user.nav')
    </div>

    <div id="main" class="">
        <div class="container mx-auto px-4 flex flex-row">
            @yield('userList')
        </div>
    </div>
    <footer class="row">
        @include('includes.footer')
    </footer>
</div>
</body>
</html>
