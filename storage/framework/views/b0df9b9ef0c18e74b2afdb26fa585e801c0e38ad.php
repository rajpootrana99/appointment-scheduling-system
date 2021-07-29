<?php $page="profile-settings";?>

<?php $__env->startSection('content'); ?>
<!-- Breadcrumb -->
<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Profile Settings</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->

			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">

						<!-- Profile Sidebar -->
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
							<div class="profile-sidebar">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
										<<a href="#" class="booking-doc-img">
                                            <?php if(isset(Auth::user()->image)): ?>
                                                <img src="<?php echo e(asset('storage/'.Auth::user()->image)); ?>" alt="User Image">
                                            <?php else: ?>
                                                <img src="assets/img/patients/patient.jpg" alt="User Image">
                                            <?php endif; ?>
                                        </a>
                                        <div class="profile-det-info">
                                            <h3><?php echo e(Auth::user()->name); ?></h3>
                                        </div>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li>
												<a href="<?php echo e(route('user')); ?>">
													<i class="fas fa-columns"></i>
													<span>Dashboard</span>
												</a>
											</li>
											<li>
												<a href="<?php echo e(route('favourites')); ?>">
													<i class="fas fa-bookmark"></i>
													<span>Favourites</span>
												</a>
											</li>
											<li class="active">
												<a href="<?php echo e(route('profile-settings')); ?>">
													<i class="fas fa-user-cog"></i>
													<span>Profile Settings</span>
												</a>
											</li>
											<li>
												<a href="<?php echo e(route('change-user-password')); ?>">
													<i class="fas fa-lock"></i>
													<span>Change Password</span>
												</a>
											</li>
                                            <li>
                                                <form action="<?php echo e(route('logout')); ?>"  style="display: none;" method="post" id="lgut">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="submit" id="logoutbtn">
                                                </form>
                                                <a type="button" onclick="$('#lgut').submit()">
                                                    <i class="fas fa-sign-out-alt"></i>
                                                    <span>Logout</span>
                                                </a>
                                            </li>
										</ul>
									</nav>
								</div>

							</div>
						</div>
						<!-- /Profile Sidebar -->

						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card">
								<div class="card-body">

									<!-- Profile Settings Form -->
									<form>
										<div class="row form-row">
											<div class="col-12 col-md-12">
												<div class="form-group">
													<div class="change-avatar">
														<div class="profile-img">
                                                            <?php if(isset(Auth::user()->image)): ?>
                                                                <img src="<?php echo e(asset('storage/'.Auth::user()->image)); ?>" alt="User Image">
                                                            <?php else: ?>
                                                                <img src="assets/img/patients/patient.jpg" alt="User Image">
                                                            <?php endif; ?>
														</div>
														<div class="upload-img">
															<div class="change-photo-btn">
																<span><i class="fa fa-upload"></i> Upload Photo</span>
																<input type="file" name="image" class="upload">
															</div>
															<small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
														</div>
													</div>
												</div>
											</div>
											<div class="col-12 col-md-12">
												<div class="form-group">
													<label>Name</label>
													<input type="text" class="form-control" name="name" value="<?php echo e(Auth::user()->name); ?>">
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Email ID</label>
													<input type="email" class="form-control" name="email" value="<?php echo e(Auth::user()->email); ?>" readonly>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Mobile</label>
													<input type="text" value="<?php echo e(Auth::user()->phone); ?>" class="form-control">
												</div>
											</div>
										</div>
										<div class="submit-section">
											<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
										</div>
									</form>
									<!-- /Profile Settings Form -->

								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
            <!-- /Page Content -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Workspace\appointment-scheduling-system\resources\views/client/profile-settings.blade.php ENDPATH**/ ?>