<!-- <link rel="stylesheet" href="css/materialize.min.css">
<link rel="stylesheet" href="css/aos.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/style.css">
 -->

<link rel="stylesheet" href="{{URL::asset('assets/css/materialize.min.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/aos.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/animate.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">

@include('header')

@yield('content')



<script type="text/javascript" src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/materialize.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/aos.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/tilt.jquery.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/script.js')}}"></script>
