<?php $page="my-patients";?>

<?php $__env->startSection('content'); ?>
	<!-- Breadcrumb -->
    <div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">My Clients</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">My Patients</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->

			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

							<!-- Profile Sidebar -->
							<div class="profile-sidebar">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
                                        <a href="#" class="booking-doc-img">
                                            <img src="<?php echo e(asset('storage/' .$lawyer->user->image)); ?>" alt="User Image">
                                        </a>
                                        <div class="profile-det-info">
                                            <h3><?php echo e($lawyer->user->name); ?></h3>

                                            <div class="patient-details">
                                                <h5 class="mb-0">
                                                    <?php echo e($lawyer->education); ?> - <?php echo e($lawyer->lawyerType->name); ?></h5>
                                            </div>
                                        </div>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li>
												<a href="<?php echo e(route('lawyer')); ?>">
													<i class="fas fa-columns"></i>
													<span>Dashboard</span>
												</a>
											</li>
											<li>
												<a href="<?php echo e(route('appointments')); ?>">
													<i class="fas fa-calendar-check"></i>
													<span>Appointments</span>
												</a>
											</li>
											<li class="active">
												<a href="<?php echo e(route('my-clients')); ?>">
													<i class="fas fa-user-injured"></i>
													<span>My Clients</span>
												</a>
											</li>
											<li>
												<a href="<?php echo e(route('reviews')); ?>">
													<i class="fas fa-star"></i>
													<span>Reviews</span>
												</a>
											</li>
											<li>
												<a href="<?php echo e(route('profile-settings')); ?>">
													<i class="fas fa-user-cog"></i>
													<span>Profile Settings</span>
												</a>
											</li>
											<li>
												<a href="<?php echo e(route('change-lawyer-password')); ?>">
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
							<!-- /Profile Sidebar -->

						</div>
						<div class="col-md-7 col-lg-8 col-xl-9">

							<div class="row row-grid">
                                <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="card widget-profile pat-widget-profile">
                                            <div class="card-body">
                                                <div class="pro-widget-content">
                                                    <div class="profile-info-widget">
                                                        <a href="<?php echo e(route('client-profile.show', ['user' => $appointment->user])); ?>" class="booking-doc-img">
                                                            <?php if(isset($appointment->user->image)): ?>
                                                                <img src="<?php echo e(asset('storage/'.$appointment->user->image)); ?>" alt="User Image">
                                                            <?php endif; ?>
                                                        </a>
                                                        <div class="profile-det-info">
                                                            <h3><a href="<?php echo e(route('client-profile.show', ['user' => $appointment->user])); ?>"><?php echo e($appointment->user->name); ?></a></h3>

                                                            <div class="patient-details">
                                                                <h5><b>Client ID :</b> C00<?php echo e($appointment->user->id); ?></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="patient-info">
                                                    <ul>
                                                        <li>Phone <span><?php echo e($appointment->user->phone); ?></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							</div>

						</div>
					</div>

				</div>

			</div>
			<!-- /Page Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Workspace\appointment-scheduling-system\resources\views/lawyer/my-clients.blade.php ENDPATH**/ ?>