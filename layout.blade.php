<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <style>
        .datepicker-date-display {
            background: #8bc34a !important;
        }

    </style>
</head>

<body>
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="/grants" class="black-text">Гранты</a></li>
        <li><a href="/competitions" class="black-text">Конкурсы</a></li>
    </ul>
    <nav>
        <div class="nav-wrapper light-green">
            <div class="container">
                <a href="#" class="brand-logo">Абитуриенту.ру</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="/abit">Абитуриентам</a></li>
                    <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Дополнительно<i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
            </div>

        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <div>
        @yield('parallax')
    </div>
    <div class="container">
        @yield('content2')
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>
        $(".dropdown-trigger").dropdown();

        $(document).ready(function() {
            $('.parallax').parallax();
        });

        $(document).ready(function() {
            $('.collapsible').collapsible();
        });

        $(document).ready(function() {
            $('.datepicker').datepicker();
        });

        $(document).ready(function() {
            $('.tabs').tabs();
        });

    </script>
    @yield('script')
</body>

</html>
