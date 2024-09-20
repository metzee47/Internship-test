<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('app.css') }}">
</head>
<body>

    <nav>
        <h1>Gestionnaire de Contacts</h1>
        <a href="{{route('contacts.create')}}"><button class="add-contact">Nouveau Contact</button></a>
    </nav>

    

    <main>

        @if (session('suppression'))
            <div class="session suppression-contact">
                {{session('suppression')}}
            </div>
        @endif
        @if (session('nouveau'))
            <div class="session nouveau-contact">
                {{session('nouveau')}}
            </div>
        @endif
        @if (session('modification'))
            <div class="session nouveau-contact">
                {{session('modification')}}
            </div>
        @endif

        @yield('content')
    </main>
    
</body>
</html>