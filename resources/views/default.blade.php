<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/main.css">
    <script src="/js/main.js" defer></script>
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar u-grid-12">
        <section class="navbar__section">
            <h2 class="navbar__section__header"><a class="navbar__heading_a" href="/dieren">PassenOpJeDier.nl</a></h2>
        </section>
        <ul class="navbar__ul">
            <li class="navbar__li"><a class="navbar__a" href="/dieren/create">Advertentie maken</a></li>
            @if (Auth::user()->hasPage == 'no')
                <li class="navbar__li"><a class="navbar__a" href="/oppassers/create">Profiel maken</a></li>
            @endif
                @if (Auth::user()->admin == 'yes')
                <li class="navbar__li"><a class="navbar__a" href="/admin/create">accounts blokkeren</a></li>
            @endif
            <li class="navbar__li"><a class="navbar__a" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
        </ul>
    </nav>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    @yield('content')
</body>
</html>
