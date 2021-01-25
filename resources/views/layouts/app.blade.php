<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- CoreUI CSS -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>

   <link href="{{ asset('vendors/@coreui/chartjs/css/coreui-chartjs.css') }}" rel="stylesheet">

</head>

<body class="c-app">
@include('layouts.sidebar')

<div class="c-wrapper">
    <header class="c-header c-header-light c-header-fixed">
        @include('layouts.header')
        
    </header>

    <div class="c-body">
        <main class="c-main">
            @yield('content')
        </main>
    </div>

    <footer class="c-footer">
        <div><a href="https://coreui.io">CoreUI</a> © 2020 creativeLabs.</div>
        <div class="mfs-auto">Powered by&nbsp;<a href="https://coreui.io/">CoreUI</a></div>
    </footer>
</div>
 <script src="{{ asset('vendors/@coreui/coreui/js/coreui.bundle.min.js') }}"></script>
<!--[if IE]><!-->
<script src="{{ asset('vendors/@coreui/icons/js/svgxuse.min.js') }}"></script>
<!--<![endif]-->
<!-- Plugins and scripts required by this view-->
<script src="{{ asset('vendors/@coreui/chartjs/js/coreui-chartjs.bundle.js') }}"></script>
<script src="{{ asset('vendors/@coreui/utils/js/coreui-utils.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
