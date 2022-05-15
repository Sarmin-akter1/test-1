<!DOCTYPE html>

<html lang="en">

@include('layouts.head')

<body>
<!-- =============== Preloader =============== -->

<div id="preloader">
    <div id="loading">
        <img width="256" height="32" src="{{asset('assets/img/loading-cylon-red.svg')}}">
    </div>
</div>
<!-- =============== nav =============== -->
@include('layouts.navigation')
<!-- =============== header =============== -->
@include('layouts.header')
<!-- =============== About =============== -->
@include('about')
<!-- =============== Services =============== -->
@include('service')
<!-- =============== Gallery =============== -->
@include('gallary')
<!-- blog -->
@include('blog')
<!-- contact -->
@include('contact')
<!-- Footer -->
@include('layouts.footer')
<!-- =============== jQuery =============== -->
@include('layouts.js style')
</body>
</html>


