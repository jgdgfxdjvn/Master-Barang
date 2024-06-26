<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>
<style>
body {
  background-image: url("{{ Vite::asset('resources/images/photo3.jpg') }}");
  background-size: 100%;
  background-repeat: no-repeat;
  background-position: center;
}
</style>
<body>

    @extends('layouts.app')
    @section('content')
    <br><br><br><br>
    <div class="container">

        <h1 style="color: white"><a style="font-family: Courier">Stephanie Debora Assa</a></h1>
        <h3 style="color: white "><a style="font-family: Courier">I am an active student at Telkom University Surabaya campus.</a></h3>
        <ul style="color: white">

        <h4 style="font-family: Courier">
        <br>
        <li>Study Program: S1 Information System</li>
        <br>
        <li>NIM: 1204220134</li>
        <br>
        <li>Class: IS 05-01</li>
        </h4>
        </ul>

      </div>
    @endsection



    @vite('resources/js/app.js')
</body>
</html>
