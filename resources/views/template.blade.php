<!doctype html>
<html>
	<head>
		<title>@yield('pagename')</title>
		<meta name="description" content="КцсонApiGenerator 5000"> 
		<meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
	</head>
	<body>
        <header style="text-align:left; background-color:pink;">
            <h1>КЦСОН API ГЕНЕРАТОР</h1>
        </header>
        <section class="bodysection" style="text-align:center; width: 75%; margin-left:auto; margin-right:auto;">
            @yield('content');
        </section>
        <footer>
        <p>Футера не будет, он принял ислам</p>
        </footer>
	</body>