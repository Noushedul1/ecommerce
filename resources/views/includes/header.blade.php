<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('admin_title')</title>
<!-- GLOBAL MAINLY STYLES-->
<link href="{{ asset('admin') }}/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
<link href="{{ asset('admin') }}/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
<link href="{{ asset('admin') }}/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
<!-- PLUGINS STYLES-->
<link href="{{ asset('admin') }}/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
<!-- THEME STYLES-->
<link href="{{ asset('admin') }}/assets/css/main.min.css" rel="stylesheet" />
<!-- PAGE LEVEL STYLES-->
<!-- PLUGINS STYLES-->
<link href="{{ asset('admin') }}/assets/vendors/DataTables/datatables.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@stack('admin_link')
