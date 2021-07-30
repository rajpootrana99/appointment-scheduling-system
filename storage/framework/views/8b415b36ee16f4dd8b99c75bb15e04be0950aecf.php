	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<!-- Header -->
		<div class="header">

			<!-- Logo -->
			<div class="header-left">
				<a href="<?php echo e(route('admin')); ?>" class="logo">
                    <?php if(isset($setting['logo'])): ?>
					    <img src="<?php echo e(asset('storage/'.$setting['logo'])); ?>" alt="Logo" width="300" height="50">
                    <?php endif; ?>
                    <h4 class="mt-3">Akram Khan</h4>
				</a>
				<a href="<?php echo e(route('admin')); ?>" class="logo logo-small">
                    <?php if(isset($setting['logo'])): ?>
					    <img src="<?php echo e(asset('storage/'.$setting['logo'])); ?>" alt="Logo" width="300" height="50">
                    <?php endif; ?>
                    <h4>Akram Khan</h4>
				</a>
			</div>
			<!-- /Logo -->

			<a href="javascript:void(0);" id="toggle_btn">
				<i class="fe fe-text-align-left"></i>
			</a>

			<!-- Mobile Menu Toggle -->
			<a class="mobile_btn" id="mobile_btn">
				<i class="fa fa-bars"></i>
			</a>
			<!-- /Mobile Menu Toggle -->

			<!-- Header Right Menu -->
			<ul class="nav user-menu">
				<!-- User Menu -->
				<li class="nav-item dropdown has-arrow">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
						<span class="user-img"><img class="rounded-circle" src="<?php echo e(asset('storage/'.Auth::user()->image)); ?>" width="31" alt=""></span>
					</a>
					<div class="dropdown-menu">
						<div class="user-header">
							<div class="avatar avatar-sm">
								<img src="<?php echo e(asset('storage/'.Auth::user()->image)); ?>" alt="User Image" class="avatar-img rounded-circle">
							</div>
							<div class="user-text">
								<h6><?php echo e(Auth::user()->name); ?></h6>
								<p class="text-muted mb-0">Administrator</p>
							</div>
						</div>
						<a class="dropdown-item" href="<?php echo e(route('profile.index')); ?>">My Profile</a>
						<a class="dropdown-item" href="<?php echo e(route('settings.index')); ?>">Settings</a>
                        <form action="<?php echo e(route('logout')); ?>"  style="display: none;" method="post" id="lgut">
                            <?php echo csrf_field(); ?>
                            <input type="submit" id="logoutbtn">
                        </form>
						<a class="dropdown-item" type="button" onclick="$('#lgut').submit()">Logout</a>
					</div>
				</li>
				<!-- /User Menu -->

			</ul>
			<!-- /Header Right Menu -->

		</div>
		<!-- /Header -->
<?php /**PATH D:\Workspace\appointment-scheduling-system\resources\views/layout/partials/header_admin.blade.php ENDPATH**/ ?>