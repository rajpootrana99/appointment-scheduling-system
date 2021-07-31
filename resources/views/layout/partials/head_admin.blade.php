<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        @if(Route::is('admin'))
        <title>{{ $setting['website_name'] ?? 'Lawyer' }} - Dashboard</title>
        @endif
        @if(Route::is('appointment.index'))
        <title>{{ $setting['website_name'] ?? 'Lawyer' }} - Appointment List</title>
        @endif
        @if(Route::is('lawyerType.index'))
        <title>{{ $setting['website_name'] ?? 'Lawyer' }} - Lawyer Type</title>
		@endif
        @if(Route::is('lawyerType.destroy'))
            <title>{{ $setting['website_name'] ?? 'Lawyer' }} - Lawyer Type Delete</title>
        @endif
        @if(Route::is('lawyerInformation.index'))
        <title>{{ $setting['website_name'] ?? 'Lawyer' }} - Lawyers List</title>
        @endif
        @if(Route::is('lawyerInformation.create'))
            <title>{{ $setting['website_name'] ?? 'Lawyer' }} - Create Lawyer</title>
        @endif
        @if(Route::is('lawyerInformation.edit'))
            <title>{{ $setting['website_name'] ?? 'Lawyer' }} - Edit Lawyer</title>
        @endif
        @if(Route::is(['client.index']))
        <title>{{ $setting['website_name'] ?? 'Lawyer' }} - Client List</title>
        @endif
        @if(Route::is('reviews.index'))
        <title>{{ $setting['website_name'] ?? 'Lawyer' }} - Reviews</title>
        @endif
        @if(Route::is('settings.index'))
        <title>{{ $setting['website_name'] ?? 'Lawyer' }} - Settings</title>
        @endif
        @if(Route::is('profile.index'))
        <title>{{ $setting['website_name'] ?? 'Lawyer' }} - Admin Profile</title>
        @endif
        @if(Route::is(['login']))
        <title>{{ $setting['website_name'] ?? 'Lawyer' }} - Login</title>
		@endif
        @if(Route::is(['register']))
        <title>{{ $setting['website_name'] ?? 'Lawyer' }} - Register</title>
        @endif
        @if(Route::is(['forgot-password']))
        <title>{{ $setting['website_name'] ?? 'Lawyer' }} - Forgot Password</title>
        @endif
        @if(Route::is(['lock-screen']))
        <title>{{ $setting['website_name'] ?? 'Lawyer' }} - Lock Screen</title>
        @endif
        @if(Route::is(['error-404']))
        <title>{{ $setting['website_name'] ?? 'Lawyer' }} - Error 404</title>
		@endif
        @if(Route::is(['error-500']))
        <title>{{ $setting['website_name'] ?? 'Lawyer' }} - Error 500</title>
		@endif
        @if(Route::is(['blank-page']))
        <title>{{ $setting['website_name'] ?? 'Lawyer' }} - Blank</title>
        @endif
        @if(Route::is(['components']))
        <title>{{ $setting['website_name'] ?? 'Lawyer' }} - Components</title>
        @endif
        @if(Route::is(['form-basic']))
        <title>{{ $setting['website_name'] ?? 'Lawyer' }} - Basic Inputs</title>
        @endif
        @if(Route::is(['form-inputs']))
        <title>{{ $setting['website_name'] ?? 'Lawyer' }} - Form Input Groups</title>
        @endif
        @if(Route::is(['form-horizontal']))
        <title>{{ $setting['website_name'] ?? 'Lawyer' }} - Horizontal Form</title>
        @endif
        @if(Route::is(['form-vertical']))
        <title>{{ $setting['website_name'] ?? 'Lawyer' }} - Vertical Form</title>
        @endif
        @if(Route::is(['form-mask']))
        <title>{{ $setting['website_name'] ?? 'Lawyer' }} - Form Mask</title>
        @endif
        @if(Route::is(['form-validation']))
        <title>{{ $setting['website_name'] ?? 'Lawyer' }} - Form Validation</title>
        @endif
        @if(Route::is(['tables-basic']))
        <title>{{ $setting['website_name'] ?? 'Lawyer' }} - Tables Basic</title>
        @endif
        @if(Route::is(['data-tables']))
        <title>{{ $setting['website_name'] ?? 'Lawyer' }} - Data Tables</title>
        @endif
        @if(Route::is(['invoice']))
        <title>{{ $setting['website_name'] ?? 'Lawyer' }} - Invoice</title>
        @endif
        @if(Route::is(['calendar']))
        <title>{{ $setting['website_name'] ?? 'Lawyer' }} - Calendar</title>
        @endif
		<!-- Favicon -->
        @if(isset($setting['fav_icon']))
            <link rel="shortcut icon" type="image/x-icon" href="{{asset('storage/'.$setting['fav_icon'])}}">
        @else
            <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets_admin/img/favicon.png')}}">
        @endif
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('assets_admin/css/bootstrap.min.css')}}">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('assets_admin/css/font-awesome.min.css')}}">

		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="{{asset('assets_admin/css/feathericon.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets_admin/plugins/morris/morris.css')}}">
        <!-- Select2 CSS -->
		<link rel="stylesheet" href="{{asset('assets_admin/css/select2.min.css')}}">
        	<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="{{asset('assets_admin/css/bootstrap-datetimepicker.min.css')}}">

		<!-- Full Calander CSS -->
        <link rel="stylesheet" href="{{asset('assets_admin/plugins/fullcalendar/fullcalendar.min.css')}}">
        <!-- Datatables CSS -->
		<link rel="stylesheet" href="{{asset('assets_admin/plugins/datatables/datatables.min.css')}}">

		<!-- <link rel="stylesheet" href="assets/plugins/morris/morris.css"> -->

		<!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('assets_admin/css/style.css')}}">


        <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
