<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Admin Dashboard</title>

    <link rel="canonical" href="../../examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('dist/css/bootstrap.min.css')}}" rel="stylesheet" >
    
        <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{asset('assets/img/favicons/apple-touch-icon.png')}}" sizes="180x180">
    <link rel="icon" href="{{asset('assets/img/favicons/favicon-32x32.png')}}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{asset('assets/img/favicons/favicon-16x16.png')}}" sizes="16x16" type="image/png">
    <link rel="manifest" href="{{asset('assets/img/favicons/manifest.json')}}">
    <link rel="mask-icon" href="{{asset('assets/img/favicons/safari-pinned-tab.svg')}}" color="#563d7c">
    <link rel="icon" href="{{asset('assets/img/favicons/favicon.ico')}}">
    <meta name="msapplication-config" content="../../assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" >
  </head>
  <body>
    @include('partials.header') 
     <div id="app">
       @yield('content')
     </div>
     @include('partials.footer') 
    <script src="{{asset('assets/js/vendor/jquery.slim.min.js')}}" ></script>
    <script>window.jQuery || document.write('<script src="{{asset('assets/js/vendor/jquery.slim.min.js')}}"><\/script>')</script><script src="../../dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script src="dashboard.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
 </body>
</html>