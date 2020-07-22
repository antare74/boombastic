<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  @include('includes.admin.style')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  @include('includes.admin.header')

  @include('includes.admin.sidebar')

  @yield('content')
  
  @include('includes.admin.footer')
</div>
<!-- ./wrapper -->

@include('includes.admin.script')
</body>
</html>
