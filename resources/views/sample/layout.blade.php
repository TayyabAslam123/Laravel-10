<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <title>Laravel - 10</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

@php
    $arr = ['apple', 'mango', 'banana', 'watermelon'];
@endphp

@yield('content')

<script>
    var fruits = @json($arr);
</script>    

@stack('scripts')

</body>
</html>
