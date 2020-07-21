<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Advirtising</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

    <!-- Bootstrap core CSS -->
<link href="{{asset('dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="{{asset('docs/4.5/assets/img/favicons/apple-touch-icon.png')}}" sizes="180x180">
<link rel="icon" href="{{asset('docs/4.5/assets/img/favicons/favicon-32x32.png')}}" sizes="32x32" type="image/png">
<link rel="icon" href="{{asset('docs/4.5/assets/img/favicons/favicon-16x16.png')}}" sizes="16x16" type="image/png">
<link rel="mask-icon" href="{{asset('docs/4.5/assets/img/favicons/safari-pinned-tab.svg')}}" color="#563d7c">
<link rel="icon" href="{{asset('docs/4.5/assets/img/favicons/favicon.ico')}}">
<meta name="msapplication-config" content="{{asset('docs/4.5/assets/img/favicons/browserconfig.xml')}}">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        width: 500px;
        height: auto;
        margin: 30px,30px,30px,30px;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{asset('dist/css/carousel.css')}}" rel="stylesheet">
  </head>
  <body>
    <main role="main">

      @yield('content')

    </main>
    @stack('scripts')
  </body>
</html>