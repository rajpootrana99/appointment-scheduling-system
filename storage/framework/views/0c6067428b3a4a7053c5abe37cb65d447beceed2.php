<?php error_reporting(0);?>
<!-- Loader -->
<?php if(Route::is(['map-grid','map-list'])): ?>
<div id="loader">
		<div class="loader">
			<span></span>
			<span></span>
		</div>
	</div>
	<?php endif; ?>
	<!-- /Loader  -->
<div class="main-wrapper">
<!-- Header -->
<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="<?php echo e(route('index')); ?>" class="navbar-brand logo">
                            <?php if(isset($setting['logo'])): ?>
							    <img src="<?php echo e(asset('storage/'.$setting['logo'])); ?>" alt="Logo" width="80" height="50">
                            <?php endif; ?>
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="<?php echo e(route('index')); ?>" class="menu-logo">
                                <?php if(isset($setting['logo'])): ?>
								    <img src="<?php echo e(asset('storage/'.$setting['logo'])); ?>" alt="Logo" width="80" height="50" class="img-fluid">
                                <?php endif; ?>
                            </a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li class="<?php echo e(Request::is('index') ? 'active' : ''); ?>">
								<a href="<?php echo e(route('index')); ?>">Home</a>
							</li>
                            <?php if(Auth::check()): ?>
                                <?php if(Auth::user()->hasRole(Config::get('constants.roles.Lawyer'))): ?>
                                    <li class="has-submenu <?php if($page=="review" || $page=="register" || $page=="doctor-dashboard" || $page=="appointments" || $page=="schedule-timings" || $page=="my-patients" || $page=="patient-profile" || $page=="chat-doctor" || $page=="invoices" || $page=="doctor-profile-settings") { echo 'active'; } ?>">
                                    <a href="">Lawyer <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu">
                                        <li class="<?php if($page=="index") { echo 'active'; } ?>"><a href="<?php echo e(route('lawyer')); ?>">Lawyer Dashboard</a></li>
                                        <li class="<?php if($page=="appointments") { echo 'active'; } ?>"><a href="<?php echo e(route('appointments')); ?>">Appointments</a></li>
                                        <li class="<?php if($page=="schedule-timings") { echo 'active'; } ?>"><a href="<?php echo e(route('schedule-timings')); ?>">Schedule Timing</a></li>
                                        <li class="<?php if($page=="my-patients") { echo 'active'; } ?>"><a href="<?php echo e(route('my-clients')); ?>">Patients List</a></li>
                                        <li class="<?php if($page=="patient-profile") { echo 'active'; } ?>"><a href="<?php echo e(route('client-profile')); ?>">Clients Profile</a></li>
                                        <li class="<?php if($page=="doctor-profile-settings") { echo 'active'; } ?>"><a href="<?php echo e(route('profile-settings')); ?>">Profile Settings</a></li>
                                        <li class="<?php if($page=="review") { echo 'active'; } ?>"><a href="<?php echo e(route('reviews')); ?>">Reviews</a></li>
                                    </ul>
                                </li>
                                <?php endif; ?>
                            <?php endif; ?>
                            <?php if(Auth::check()): ?>
                                <?php if(Auth::user()->hasRole(Config::get('constants.roles.User'))): ?>
                                    <li class="has-submenu <?php if($page=="map-grid" || $page=="map-list" || $page=="search1" || $page=="doctor-profile" || $page=="booking" || $page=="checkout" || $page=="booking-success" || $page=="patient-dashboard" || $page=="favourites" || $page=="chat" || $page=="profile-settings" || $page=="change-password") { echo 'active'; } ?>">
								<a href="">User <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li class="has-submenu <?php if($page=="map-grid" || $page=="map-list") { echo 'active'; } ?>">
										<a href="#">Lawyer</a>
										<ul class="submenu">
											<li class="<?php if($page=="map-grid") { echo 'active'; } ?>"><a href="map-grid">Map Grid</a></li>
											<li class="<?php if($page=="map-list") { echo 'active'; } ?>"><a href="map-list">Map List</a></li>
										</ul>
									</li>
									<li class="<?php if($page=="search1") { echo 'active'; } ?>"><a href="search">Search Lawyer</a></li>
									<li class="<?php if($page=="patient-dashboard") { echo 'active'; } ?>"><a href="<?php echo e(route('user')); ?>">Dashboard</a></li>
									<li class="<?php if($page=="favourites") { echo 'active'; } ?>"><a href="<?php echo e(route('favourites')); ?>">Favourites</a></li>
									<li class="<?php if($page=="profile-settings") { echo 'active'; } ?>"><a href="<?php echo e(route('profile-settings')); ?>">Profile Settings</a></li>
									<li class="<?php if($page=="change-password") { echo 'active'; } ?>"><a href="<?php echo e(route('change-user-password')); ?>">Change Password</a></li>
								</ul>
							</li>
                                <?php endif; ?>
                            <?php endif; ?>
                        </li>
						</ul>
					</div>
					<ul class="nav header-navbar-rht">
                        <?php if(auth()->guard()->guest()): ?>
						<li class="nav-item contact-item">
							<div class="header-contact-img">
								<i class="far fa-hospital"></i>
							</div>
							<div class="header-contact-detail">
								<p class="contact-header">Contact</p>
								<p class="contact-info-header"> +92 313 5263526 </p>
							</div>
							<li class="nav-item">
							<a class="nav-link header-login" href="<?php echo e(route('login')); ?>">login / Signup </a>
							</li>
						</li>
                        <?php endif; ?>
                        <?php if(Auth::check()): ?>
                            <?php if(Auth::user()->hasRole(Config::get('constants.roles.User'))): ?>
                            <li class="nav-item dropdown has-arrow logged-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <span class="user-img">
                                        <?php if(isset(Auth::user()->image)): ?>
                                        <img class="rounded-circle" src="<?php echo e(asset('storage/'.Auth::user()->image)); ?>" width="31" alt="Ryan Taylor">
                                        <?php else: ?>
                                        <?php echo e(Auth::user()->name); ?>

                                        <?php endif; ?>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="user-header">
                                        <div class="avatar avatar-sm">
                                            <?php if(isset(Auth::user()->image)): ?>
                                            <img src="<?php echo e(asset('storage/'.Auth::user()->image)); ?>" alt="User Image" class="avatar-img rounded-circle">
                                            <?php endif; ?>
                                        </div>
                                        <div class="user-text">
                                            <h6><?php echo e(\Illuminate\Support\Facades\Auth::user()->name); ?></h6>
                                        </div>
                                    </div>
                                    <a class="dropdown-item" href="patient-dashboard">Dashboard</a>
                                    <a class="dropdown-item" href="profile-settings">Profile Settings</a>
                                    <form action="<?php echo e(route('logout')); ?>"  style="display: none;" method="post" id="lgut">
                                        <?php echo csrf_field(); ?>
                                        <input type="submit" id="logoutbtn">
                                    </form>
                                    <a class="dropdown-item" type="button" onclick="$('#lgut').submit()">Logout</a>
                                </div>
                            </li>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if(Auth::check()): ?>
                            <?php if(Auth::user()->hasRole(Config::get('constants.roles.Lawyer'))): ?>
                            <!-- User Menu -->
                            <li class="nav-item dropdown has-arrow logged-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <span class="user-img">
                                        <img class="rounded-circle" src="<?php echo e(asset('storage/' .Auth::user()->image)); ?>" width="31" alt="Darren Elder">
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="user-header">
                                        <div class="avatar avatar-sm">
                                            <img src="<?php echo e(asset('storage/' .Auth::user()->image)); ?>" alt="User Image" class="avatar-img rounded-circle">
                                        </div>
                                        <div class="user-text">
                                            <h6><?php echo e(Auth::user()->name); ?></h6>
                                        </div>
                                    </div>
                                    <a class="dropdown-item" href="<?php echo e(route('lawyer')); ?>">Dashboard</a>
                                    <a class="dropdown-item" href="<?php echo e(route('profile-settings')); ?>">Profile Settings</a>
                                    <form action="<?php echo e(route('logout')); ?>"  style="display: none;" method="post" id="lgut">
                                        <?php echo csrf_field(); ?>
                                        <input type="submit" id="logoutbtn">
                                    </form>
                                    <a class="dropdown-item" type="button" onclick="$('#lgut').submit()">Logout</a>
                                </div>
                            </li>
                            <!-- /User Menu -->
                            <?php endif; ?>
                        <?php endif; ?>

					</ul>
				</nav>
			</header>
			<!-- /Header -->
<?php /**PATH D:\Workspace\appointment-scheduling-system\resources\views/layout/partials/header.blade.php ENDPATH**/ ?>