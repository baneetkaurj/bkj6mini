<!doctype html>
<html lang="en">

@include('includes.head1')

<body>

<div class="container">
<header>
    @include('includes.menu1')
</header>

<main role="main">
    @yield('content')
</main>
@include('includes.jsfooter1')
<footer>
    @include('includes.footer1')
</footer>
</div>
</body>
</html>