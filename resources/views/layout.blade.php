<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">

    {{-- glide js --}}

    <link href="https://cdn.jsdelivr.net/npm/@glidejs/glide@3.4.1/dist/css/glide.core.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide@3.4.1/dist/glide.min.js"></script>


    {{-- Font Google : Rubik --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css') <!-- Tailwind CSS -->
</head>

<body class="font-sans bg-[#F9FAFE]">
    @yield('content')
</body>

</html>

<script>
    new Glide('.glide', {
      type: 'carousel',
      autoplay: 2500,
      perView: 3,
      animationDuration: 1000,
      hoverpause: true
    }).mount();
  </script>