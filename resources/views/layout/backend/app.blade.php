<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="{{asset('assets/bootstrap/bootstrap.min.css')}}" rel="stylesheet" crossorigin="anonymous">
    <script src="{{asset('assets/js/config.js')}}"></script>
    <script src="{{asset('assets/js/loader.js')}}"></script>
    <script src="{{asset('assets/axios/axios.min.js')}}"></script>
  </head>
  <body>
    <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 1px">
        <div class="progress-bar bg-success d-none" id="progress" style="width: 100%"></div>
      </div>
    @yield('content')
    <script src="{{asset('assets/bootstrap/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
    
    
  </body>
</html>