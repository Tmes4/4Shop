<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>3Shop</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/narrow-jumbotron.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <script src="/js/app.js"></script>
</head>
<body>
    <div class="container">
      <header class="header d-flex justify-content-between align-items-center">
        <h3 class="text-muted"><a href="{{ route('home') }}" class="no-link">4Shop</a></h3>
        <a href="{{ route('cart') }}"><img class="cart" src="{{ url('img/cart.png') }}" alt=""></a>
      </header>

      <div class="text-holder">
        <div>
          <img src="{{ url('img/staf.jpg') }}" alt="">
        </div>

        <div>
          <div class="text">
              <h7>T-shrit Stafleden</h7>
          </div>
        </div>
      </div>

      <main role="main">
        @if (session('status'))
            <div class="alert alert-{{ session('status')[0] }}">
                {!! session('status')[1] !!}
            </div>
        @endif
        @if($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        @yield('content')
      </main>

      <footer class="footer">
        <p><strong>Mail bij vragen: <a href="mailto:winkelbeheer@scoutingrveer.nl">winkelbeheer@scoutingrveer.nl</a></strong> &middot; <br>S.B.B.S. namens Scouting Raamsdonksveer,<br> Terheijdenseweg 350, 4826 AA Breda,<br>tel: 0162769096 <br>KvK: 41100325</p>
      </footer>

    </div>
</body>
</html>
