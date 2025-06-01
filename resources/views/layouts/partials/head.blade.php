<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HRMIS</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}" >
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/jqvmap/jqvmap.min.css') }}" >
  
  <!-- Theme style -->  
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}" >
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/daterangepicker/daterangepicker.css') }}" >
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}" >
  
  <!-- Custom styles -->
@if (session('locale') === 'fa' && ($direction ?? 'ltr') === 'rtl')
    <link rel="stylesheet" href="{{ asset('Admin/dist/css/adminlte-rtl.css') }}">
@endif

  <link rel="stylesheet" href="{{ asset('admin/dist/css/custom-rtl.css') }}">


@if (session('success'))
    <meta name="swal-success" content="{{ session('success') }}">
@endif

@if (session('error'))
    <meta name="swal-error" content="{{ session('error') }}">
@endif
<meta name="swal-success" content="Test success flash message!">

<script>
    window.translations = {
        swalSuccessTitle: "{{ __('sweetalert.success_title') }}",
        swalErrorTitle: "{{ __('sweetalert.error_title') }}",
        swalDeleteTitle: "{{ __('sweetalert.delete_title') }}",
        swalDeleteText: "{{ __('sweetalert.delete_text') }}",
        swalDeleteConfirm: "{{ __('sweetalert.delete_confirm') }}",
        swalDeleteCancel: "{{ __('sweetalert.cancel_button') }}",
    };
</script>
