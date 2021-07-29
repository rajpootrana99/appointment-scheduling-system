<?php $page="patient-dashboard";?>

<?php $__env->startSection('content'); ?>
<!-- Breadcrumb -->
<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Dashboard</h2>
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
                                        <a href="#" class="booking-doc-img">
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
											<li class="active">
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
											<li>
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
						<!-- / Profile Sidebar -->

						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card">
								<div class="card-body pt-0">

									<!-- Tab Menu -->
									<nav class="user-tabs mb-4">
										<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
											<li class="nav-item">
												<a class="nav-link active" href="#client_appointments" data-toggle="tab">Appointments</a>
											</li>
										</ul>
									</nav>
									<!-- /Tab Menu -->

									<!-- Tab Content -->
									<div class="tab-content pt-0">

										<!-- Appointment Tab -->
										<div id="client_appointments" class="tab-pane fade show active">
											<div class="card card-table mb-0">
												<div class="card-body">
													<div class="table-responsive">
														<table class="table table-hover table-center mb-0">
															<thead>
																<tr>
																	<th>Lawyer</th>
																	<th>Appt Date</th>
																	<th>Booking Date</th>
																	<th>Status</th>
																	<th></th>
																</tr>
															</thead>
															<tbody>
                                                                <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <tr>
                                                                        <td>
                                                                            <h2 class="table-avatar">
                                                                                <?php if(isset($appointment->lawyer->image)): ?>
                                                                                    <a href="<?php echo e(route('lawyer.show', ['lawyer' => $appointment->lawyer->id])); ?>" class="avatar avatar-sm mr-2">
                                                                                        <img class="avatar-img rounded-circle" src="<?php echo e(asset('storage/'.$appointment->lawyer->image)); ?>" alt="User Image">
                                                                                    </a>
                                                                                <?php endif; ?>
                                                                                <a href="<?php echo e(route('lawyer.show', ['lawyer' => $appointment->lawyer->id])); ?>"><?php echo e($appointment->lawyer->name); ?> <span><?php echo e($appointment->lawyerType->name); ?></span></a>
                                                                            </h2>
                                                                        </td>
                                                                        <td><?php echo e($appointment->appointment_date); ?> <span class="d-block text-info"><?php echo e($appointment->appointment_time); ?></span></td>
                                                                        <td><?php echo e($appointment->created_at); ?></td>
                                                                        <?php if($appointment->status == 'Pending'): ?>
                                                                            <td><span class="badge badge-pill bg-info-light"><?php echo e($appointment->status); ?></span></td>
                                                                        <?php endif; ?>
                                                                        <?php if($appointment->status == 'Confirm'): ?>
                                                                            <td><span class="badge badge-pill bg-success-light"><?php echo e($appointment->status); ?></span></td>
                                                                        <?php endif; ?>
                                                                        <?php if($appointment->status == 'Reject'): ?>
                                                                            <td><span class="badge badge-pill bg-danger-light"><?php echo e($appointment->status); ?></span></td>
                                                                        <?php endif; ?>
                                                                        <td class="text-right">
                                                                            <div class="table-action">
                                                                                <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                                    <i class="fas fa-print"></i> Print
                                                                                </a>
                                                                                <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                                    <i class="far fa-eye"></i> View
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<!-- /Appointment Tab -->
									</div>
									<!-- Tab Content -->

								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
			<!-- /Page Content -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Workspace\appointment-scheduling-system\resources\views/client/index.blade.php ENDPATH**/ ?>