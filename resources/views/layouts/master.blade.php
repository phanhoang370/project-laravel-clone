<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/img/favicon.144x144.html" rel="apple-touch-icon" type="image/png" sizes="144x144">
    <link href="/img/favicon.114x114.html" rel="apple-touch-icon" type="image/png" sizes="114x114">
    <link href="/img/favicon.72x72.html" rel="apple-touch-icon" type="image/png" sizes="72x72">
    <link href="/img/favicon.57x57.html" rel="apple-touch-icon" type="image/png">
    <link href="/img/favicon.html" rel="icon" type="image/png">
    <link href="/img/favicon-2.html" rel="shortcut icon">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="/css/lib/lobipanel/lobipanel.min.css">
    <link rel="stylesheet" href="/css/separate/vendor/lobipanel.min.css">
    <link rel="stylesheet" href="/css/lib/jqueryui/jquery-ui.min.css">
    <link rel="stylesheet" href="/css/separate/pages/widgets.min.css">
    <link rel="stylesheet" href="css/lib/bootstrap-table/bootstrap-table.min.css">
    <link rel="stylesheet" href="/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="/css/lib/jstree/jstree.css">
    <link rel="stylesheet" href="/css/main.css">

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/styles.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dsmorse-gridster@0.7.0/dist/jquery.gridster.css">

    <!-- ReLoad  -->
    <link rel="stylesheet" href="/css/mainreload.css">
    <link rel="stylesheet" href="/css/normalize.css">

    <!-- Login & Register -->
    <link rel="stylesheet" href="/css/separate/pages/login.min.css">
</head>
@yield('content')
<!-- Scripts -->
<script src="/js/lib/jquery/jquery-3.2.1.min.js"></script>
<script src="/js/lib/popper/popper.min.js"></script>
<script src="/js/lib/tether/tether.min.js"></script>
<script src="/js/lib/bootstrap/bootstrap.min.js"></script>
<script src="/js/plugins.js"></script>

<script type="text/javascript" src="/js/lib/jqueryui/jquery-ui.min.js"></script>
<script type="text/javascript" src="/js/lib/match-height/jquery.matchHeight.min.js"></script>
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/gauge.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/none.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/amcharts/3.21.12/plugins/dataloader/dataloader.min.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<script src="https://www.amcharts.com/lib/3/pie.js"></script>
<script src="js/main-chart.js"></script>
<script src="js/lib/jstree/jstree.min.js"></script>


<script src="js/lib/bootstrap-table/bootstrap-table.js"></script>
<script src="js/lib/bootstrap-table/bootstrap-table-export.min.js"></script>
<script src="js/lib/bootstrap-table/tableExport.min.js"></script>
<script src="js/lib/bootstrap-table/bootstrap-table-init-evtlist.js"></script>


<script src="/js/app-theme.js"></script>
<script src="https://cdn.jsdelivr.net/npm/dsmorse-gridster@0.7.0/dist/jquery.gridster.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/dsmorse-gridster@0.7.0/dist/jquery.gridster.with-extras.js"></script>
<script src="https://cdn.jsdelivr.net/npm/dsmorse-gridster@0.7.0/dist/jquery.gridster.with-extras.js"></script>
<script src="/js/main.js"></script>
<script src="/js/app.js"></script>

@yield('scripts')
</body>
</html>
