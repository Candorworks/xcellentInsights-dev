<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('/admin/images/favicon.png')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/web/css/font-awesome-new.min.css')}}">
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('admin/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ asset('admin/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ asset('admin/morrisjs/morris.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">

    <!-- Styles -->
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- select 2 plugin for multiselect option for tag -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- close multiselect options for tag -->
</head>

<body class="font-sans">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        {{-- <div class="min-h-screen bg-gray-100"> --}}
        @include('layouts.header')
        @include('layouts.navigation')

        <!-- Page Heading -->
        {{-- <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
    </div>
    </header> --}}

    <!-- Page Content -->
    <main>
        {{ $slot }}
        <footer class="footer text-center" id="footer_date">  </footer>
    </main>
    </div>


    {{-- </div> --}}
    <!-- jQuery -->
    <script src="{{ asset('admin/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('admin/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{ asset('admin/metisMenu/dist/metisMenu.min.js') }}"></script>
    <!--Nice scroll JavaScript -->
    <script src="{{ asset('admin/js/jquery.nicescroll.js') }}"></script>
    <!--Morris JavaScript -->
    <script src="{{ asset('admin/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('admin/morrisjs/morris.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('admin/js/waves.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('admin/js/myadmin.js') }}"></script>
    <!-- Flot Charts JavaScript -->
    <script src="{{ asset('admin/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('admin/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('admin/js/dashboard3.js') }}"></script>
    <script src="{{ asset('admin/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('admin/jquery-sparkline/jquery.charts-sparkline.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- Fontawesome Lib -->
    <script src="https://kit.fontawesome.com/30792213b3.js" crossorigin="anonymous"></script>

    {{ $script }}
    <script src="{{url('admin/bower_components/tinymce/tinymce.min.js')}}"></script>
    <script>
        $(document).ready(function() {


            if ($(".mymce").length > 0) {
                tinymce.init({
                    selector: "textarea.mymce",
                    theme: "modern",
                    height: 300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

                });
            }
        });
    </script>
    <script>
        var date = new Date();
        document.getElementById("footer_date").innerHTML = date.getFullYear() + " &copy; Myadmin brought to you by TTRS";
    </script>
</body>

</html>