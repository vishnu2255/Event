<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Carnival') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/script3.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/script4.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/script5.js')}}"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>

{{-- <script src="{{ asset('js/script.js') }}"></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/customcss.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom2.css') }}" rel="stylesheet">

    {{-- <style>
    #images {
  padding-top: 54px;
}

@media (min-width: 992px) {
  #images {
    padding-top: 56px;
  }
}
    </style> --}}
</head>
<body style="margin-bottom: 5px">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                    <a class="navbar-brand ml-auto" href="#"><img src="http://carnivalguideintl.com/img/Carnival_guide_intl_logo.png"></a>
                {{-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Carnival') }}
                </a> --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                            <li><a class="navbar-brand nav-item" href="/index.php">Home</a></li>
                            <li><a class="navbar-brand nav-item" href="/bandslist">Bands</a></li>
                         <li><a class="navbar-brand nav-item" href="/costumeslist">Costumes</a></li>
                       <li><a class="navbar-brand nav-item" href="/eventslist">Events</a></li>
                             <li><a class="navbar-brand nav-item" href="/restaurantslist">Food</a></li>
                              <li><a class="navbar-brand nav-item" href="#">Accommodations</a></li>
                             <li><a class="navbar-brand nav-item" href="/packageslist">Packages</a></li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                  
                </div>
            </div>
        </nav>

        <main class="role">
            @yield('content')
        </main>
    </div>

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>

{{-- @include('carnivallayouts.footer2'); --}}
    
    {{-- @include('layouts/footer'); --}}
    {{-- <nav class="navbar fixed-bottom navbar-light bg-dark" style="margin-top: 10px">
        <a class="navbar-brand" href="#">Fixed bottom</a>
      </nav>  --}}
    
</body>


</html>



