@yield('head-script')

<link rel="shortcut icon" href="{{ asset('assets/system/favicon.ico') }}">
<link href="{{ asset('assets/template/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ asset('assets/template/js/layout.js') }}"></script>
<link href="{{ asset('assets/template/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/template/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/template/css/app.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/template/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

{{-- <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.min.css" /> --}}

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
<!--datatable responsive css-->
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@yield('css-aux')
