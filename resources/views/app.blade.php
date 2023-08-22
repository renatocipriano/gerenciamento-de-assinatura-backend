<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">

  <!-- Scripts -->
  @routes
  <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body>
  @inertia

  <!-- Add any additional script tags or content here -->
</body>

</html>