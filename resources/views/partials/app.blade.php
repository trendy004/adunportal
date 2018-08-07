<!doctype html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="msapplication-TileColor" content="#FFFFFF" />
        <meta name="msapplication-TileImage" content="{{ url('assets/img/icons/mstile-144x144.png') }}" />
        <title>ADUN</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ url('assets/img/icons/apple-touch-icon-144x144.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ url('assets/img/icons/apple-touch-icon-152x152.png') }}" />
        <link rel="icon" type="image/png" href="{{ url('assets/img/icons/favicon-32x32.png') }}" sizes="32x32" />
        <link rel="icon" type="image/png" href="{{ url('assets/img/icons/favicon-16x16.png') }}" sizes="16x16" />
        <link type="text/css" rel="stylesheet" href="css/adun.css">
        <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap-daterangepicker/daterangepicker.css') }}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
        <!-- jQuery-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        {{--<script type="text/javascript" src="{{asset('node_modules/jquery/dist/jquery.min.js')}}"></script>--}}
        {{-- For production, it is recommended to combine following styles into one. --}}
        {{--{!! HTML::style('assets/css/bootstrap.min.css') !!}--}}
        {{--{!! HTML::style('assets/css/font-awesome.min.css') !!}--}}
        {{--{!! HTML::style('assets/css/metisMenu.css') !!}--}}
        {{--{!! HTML::style('assets/css/sweetalert.css') !!}--}}
        {{--{!! HTML::style('assets/css/bootstrap-social.css') !!}--}}
        {{--{!! HTML::style('assets/css/app.css') !!}--}}
    </head>
    <body>
        <div id="page-wrapper">
            <div class="container">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container">
                            <a class="navbar-brand" href="{{ route('dashboard') }}" style="padding: 7px 0 0 0;">
                            </a>
                        </div>
                        <div id="navbar" class="navbar-collapse">
                                <img alt="image"  class="img-responsive img-circle avatar" src="{{ url('/uploads/adun_logo.jpg') }}" id="userDetails">
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                                <table id="username">
                                    <tr>
                                        <td><span><b>{{ $candidateDetails->username }}</b></span></td>
                                    </tr>
                                    <tr>
                                        <td><span id="useremail">{{ $candidateDetails->email }}</span></td>
                                    </tr>
                                </table><hr>
                            <div class="nav navbar-nav navbar-left pull-left">
                                <div class="btn btn-group-xs" style="margin: 10px;">
                                    <a href="{{ route('jamb') }}" class="btn btn-outline-secondary">Jamb</a>
                                    <div class="dropdown">
                                        <button class="btn btn-outline-secondary">O'Levels</button>
                                        <div class="dropdown-content">
                                            <a href="{{ route('olevels') }}">First Sitting</a>
                                            <a href="{{ route('second_sitting') }}">Second Sitting</a>
                                        </div>
                                    </div>
                                    <a href="{{ route('course') }}" class="btn btn-outline-secondary">Course of Study</a>
                                    <a href="{{ route('photo') }}" class="btn btn-outline-secondary">Photo</a>
                                    <a href="{{ route('payment') }}" class="btn btn-outline-secondary">Payment</a>
                                </div>
                            </div>
                        </div>
                </nav>
                    @yield('content')
            </div>
        </div>
        {{-- For production, it is recommended to combine following scripts into one. --}}
        {{--{!! HTML::script('assets/js/jquery-2.1.4.min.js') !!}--}}
        {{--{!! HTML::script('assets/js/bootstrap.min.js') !!}--}}
        {{--{!! HTML::script('assets/js/metisMenu.min.js') !!}--}}
        {{--{!! HTML::script('assets/js/sweetalert.min.js') !!}--}}
        {{--{!! HTML::script('assets/js/delete.handler.js') !!}--}}
        {{--{!! HTML::script('assets/plugins/js-cookie/js.cookie.js') !!}--}}
        {{--<script type="text/javascript">--}}
            {{--$.ajaxSetup({--}}
                {{--headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }--}}
            {{--});--}}
        {{--</script>--}}
        {{--{!! HTML::script('vendor/jsvalidation/js/jsvalidation.js') !!}--}}
        {{--{!! HTML::script('assets/js/as/app.js') !!}--}}
        {{--@yield('scripts')--}}

        <script type="text/javascript">

            $('.date').datepicker({

                format: 'yyyy-mm-dd'

            });

        </script>
    </body>
</html>