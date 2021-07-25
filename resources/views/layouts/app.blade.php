{{--  <!DOCTYPE html>  --}}
{{--  <html lang="en">  --}}
<head>
  {{-- ////////// --}}
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  {{--  <link rel="stylesheet" href="public.styles.css">  --}}
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

      <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- DATATABLE -->
  <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">

</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light fs-3">
  <a class="navbar-brand font-weight-bolder"  href="#">Yorktown Machinery & Supplies</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="p-2 nav-item nav-link active mx-2 " href= {{ route('employee.index') }}>Employees <span class="sr-only">(current)</span></a>
      {{--  <a class="nav-item nav-link" href= {{ route('create') }}>Add Employee</a>  --}}
      <a class="p-2 nav-item nav-link active mx-2" href= {{ route('customer.index') }}>Customers <span class="sr-only">(current)</span></a>
      <a class="p-2 nav-item nav-link active mx-2" href= {{ route('product.indexInternal') }}>Order Form <span class="sr-only">(current)</span></a>
      <a class="p-2 nav-item nav-link active mx-2" href= "#">Management Statistics<span class="sr-only">(current)</span></a>
    </div>
  </div>
</nav>
<body>
  @yield('content')
</body>
</html>
<Style>
  setTimeout(function() {
    $('#successMessage').fadeOut('fast');
  }, 30000);
  </Style>