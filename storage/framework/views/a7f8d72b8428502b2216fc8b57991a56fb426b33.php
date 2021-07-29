<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <?php if(Route::is('admin')): ?>
        <title><?php echo e($setting['website_name'] ?? 'Lawyer'); ?> - Dashboard</title>
        <?php endif; ?>
        <?php if(Route::is('appointment.index')): ?>
        <title><?php echo e($setting['website_name'] ?? 'Lawyer'); ?> - Appointment List</title>
        <?php endif; ?>
        <?php if(Route::is('lawyerType.index')): ?>
        <title><?php echo e($setting['website_name'] ?? 'Lawyer'); ?> - Lawyer Type</title>
		<?php endif; ?>
        <?php if(Route::is('lawyerType.destroy')): ?>
            <title><?php echo e($setting['website_name'] ?? 'Lawyer'); ?> - Lawyer Type Delete</title>
        <?php endif; ?>
        <?php if(Route::is('lawyerInformation.index')): ?>
        <title><?php echo e($setting['website_name'] ?? 'Lawyer'); ?> - Lawyers List</title>
        <?php endif; ?>
        <?php if(Route::is('lawyerInformation.create')): ?>
            <title><?php echo e($setting['website_name'] ?? 'Lawyer'); ?> - Create Lawyer</title>
        <?php endif; ?>
        <?php if(Route::is('lawyerInformation.edit')): ?>
            <title><?php echo e($setting['website_name'] ?? 'Lawyer'); ?> - Edit Lawyer</title>
        <?php endif; ?>
        <?php if(Route::is(['client.index'])): ?>
        <title><?php echo e($setting['website_name'] ?? 'Lawyer'); ?> - Client List</title>
        <?php endif; ?>
        <?php if(Route::is('reviews.index')): ?>
        <title><?php echo e($setting['website_name'] ?? 'Lawyer'); ?> - Reviews</title>
        <?php endif; ?>
        <?php if(Route::is('settings.index')): ?>
        <title><?php echo e($setting['website_name'] ?? 'Lawyer'); ?> - Settings</title>
        <?php endif; ?>
        <?php if(Route::is('profile.index')): ?>
        <title><?php echo e($setting['website_name'] ?? 'Lawyer'); ?> - Admin Profile</title>
        <?php endif; ?>
        <?php if(Route::is(['login'])): ?>
        <title><?php echo e($setting['website_name'] ?? 'Lawyer'); ?> - Login</title>
		<?php endif; ?>
        <?php if(Route::is(['register'])): ?>
        <title><?php echo e($setting['website_name'] ?? 'Lawyer'); ?> - Register</title>
        <?php endif; ?>
        <?php if(Route::is(['forgot-password'])): ?>
        <title><?php echo e($setting['website_name'] ?? 'Lawyer'); ?> - Forgot Password</title>
        <?php endif; ?>
        <?php if(Route::is(['lock-screen'])): ?>
        <title><?php echo e($setting['website_name'] ?? 'Lawyer'); ?> - Lock Screen</title>
        <?php endif; ?>
        <?php if(Route::is(['error-404'])): ?>
        <title><?php echo e($setting['website_name'] ?? 'Lawyer'); ?> - Error 404</title>
		<?php endif; ?>
        <?php if(Route::is(['error-500'])): ?>
        <title><?php echo e($setting['website_name'] ?? 'Lawyer'); ?> - Error 500</title>
		<?php endif; ?>
        <?php if(Route::is(['blank-page'])): ?>
        <title><?php echo e($setting['website_name'] ?? 'Lawyer'); ?> - Blank</title>
        <?php endif; ?>
        <?php if(Route::is(['components'])): ?>
        <title><?php echo e($setting['website_name'] ?? 'Lawyer'); ?> - Components</title>
        <?php endif; ?>
        <?php if(Route::is(['form-basic'])): ?>
        <title><?php echo e($setting['website_name'] ?? 'Lawyer'); ?> - Basic Inputs</title>
        <?php endif; ?>
        <?php if(Route::is(['form-inputs'])): ?>
        <title><?php echo e($setting['website_name'] ?? 'Lawyer'); ?> - Form Input Groups</title>
        <?php endif; ?>
        <?php if(Route::is(['form-horizontal'])): ?>
        <title><?php echo e($setting['website_name'] ?? 'Lawyer'); ?> - Horizontal Form</title>
        <?php endif; ?>
        <?php if(Route::is(['form-vertical'])): ?>
        <title><?php echo e($setting['website_name'] ?? 'Lawyer'); ?> - Vertical Form</title>
        <?php endif; ?>
        <?php if(Route::is(['form-mask'])): ?>
        <title><?php echo e($setting['website_name'] ?? 'Lawyer'); ?> - Form Mask</title>
        <?php endif; ?>
        <?php if(Route::is(['form-validation'])): ?>
        <title><?php echo e($setting['website_name'] ?? 'Lawyer'); ?> - Form Validation</title>
        <?php endif; ?>
        <?php if(Route::is(['tables-basic'])): ?>
        <title><?php echo e($setting['website_name'] ?? 'Lawyer'); ?> - Tables Basic</title>
        <?php endif; ?>
        <?php if(Route::is(['data-tables'])): ?>
        <title><?php echo e($setting['website_name'] ?? 'Lawyer'); ?> - Data Tables</title>
        <?php endif; ?>
        <?php if(Route::is(['invoice'])): ?>
        <title><?php echo e($setting['website_name'] ?? 'Lawyer'); ?> - Invoice</title>
        <?php endif; ?>
        <?php if(Route::is(['calendar'])): ?>
        <title><?php echo e($setting['website_name'] ?? 'Lawyer'); ?> - Calendar</title>
        <?php endif; ?>
		<!-- Favicon -->
        <?php if(isset($setting['fav_icon'])): ?>
            <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('storage/'.$setting['fav_icon'])); ?>">
        <?php else: ?>
            <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets_admin/img/favicon.png')); ?>">
        <?php endif; ?>
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets_admin/css/bootstrap.min.css')); ?>">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets_admin/css/font-awesome.min.css')); ?>">

		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets_admin/css/feathericon.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets_admin/plugins/morris/morris.css')); ?>">
        <!-- Select2 CSS -->
		<link rel="stylesheet" href="<?php echo e(asset('assets_admin/css/select2.min.css')); ?>">
        	<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="<?php echo e(asset('assets_admin/css/bootstrap-datetimepicker.min.css')); ?>">

		<!-- Full Calander CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets_admin/plugins/fullcalendar/fullcalendar.min.css')); ?>">
        <!-- Datatables CSS -->
		<link rel="stylesheet" href="<?php echo e(asset('assets_admin/plugins/datatables/datatables.min.css')); ?>">

		<!-- <link rel="stylesheet" href="assets/plugins/morris/morris.css"> -->

		<!-- Main CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets_admin/css/style.css')); ?>">


        <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<?php /**PATH D:\Workspace\appointment-scheduling-system\resources\views/layout/partials/head_admin.blade.php ENDPATH**/ ?>