<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{ template:metadata }}

    <!-- Stylesheet Includes -->
    <link rel="stylesheet" href="{{ theme_url }}/assets/css/normalize.css">
    <link rel="stylesheet" href="{{ theme_url }}/assets/css/foundation.min.css">
    <link rel="stylesheet" href="{{ theme_url }}/assets/css/app.css">
    <link rel="stylesheet" href="{{ theme_url }}/assets/css/rwd-helper.css">
    <!-- Controller Defined Styles -->
    {{ template:stylesheets }}

    <!-- Javascript Includes -->
    <script src="{{ theme_url }}/assets/js/vendor/modernizr.js"></script>
    <!-- Controller Defined Scripts -->
    {{ template:javascripts }}

    <!-- Content Type Defined META/CSS/JS -->
    {{ template:page_head }}

    <!-- Google Analytics -->
    {{ template:universal_analytics }}

</head>