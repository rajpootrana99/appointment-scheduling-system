<?php $page="patient-profile";?>

<?php $__env->startSection('content'); ?>
<!-- Breadcrumb -->
<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Profile</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Profile</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->

			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar dct-dashbd-lft">

							<!-- Profile Widget -->
							<div class="card widget-profile pat-widget-profile">
								<div class="card-body">
									<div class="pro-widget-content">
										<div class="profile-info-widget">
											<a href="#" class="booking-doc-img">
                                                <?php if(isset($user->image)): ?>
                                                    <img src="<?php echo e(asset('storage/'.$user->image)); ?>" alt="User Image">
                                                <?php else: ?>
                                                    <img src="<?php echo e(asset('assets/img/patients/patient.jpg')); ?>" alt="User Image">
                                                <?php endif; ?>
											</a>
											<div class="profile-det-info">
												<h3><?php echo e($user->name); ?></h3>

												<div class="patient-details">
													<h5><b>Client ID :</b> C00<?php echo e($user->id); ?></h5>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Profile Widget -->

							<!-- Last Booking -->
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Last Booking</h4>
								</div>
								<ul class="list-group list-group-flush">
                                    <?php $__currentLoopData = $lawyers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lawyer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="list-group-item">
                                            <div class="media align-items-center">
                                                <div class="mr-3">
                                                    <?php if(isset($lawyer->lawyer->image)): ?>
                                                        <img alt="Image placeholder" src="<?php echo e(asset('storage/'.$lawyer->lawyer->image)); ?>" class="avatar  rounded-circle">
                                                    <?php else: ?>
                                                        <img alt="Image placeholder" src="<?php echo e(asset('assets/img/doctors/doctor-thumb-02.jpg')); ?>" class="avatar  rounded-circle">
                                                    <?php endif; ?>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="d-block mb-0"><?php echo e($lawyer->lawyer->name); ?> </h5>
                                                    <span class="d-block text-sm text-muted"><?php echo e($lawyer->lawyerType->name); ?></span>
                                                    <span class="d-block text-sm text-muted"><?php echo e($lawyer->appointment_date); ?> <?php echo e($lawyer->appointment_time); ?></span>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
							</div>
							<!-- /Last Booking -->

						</div>

						<div class="col-md-7 col-lg-8 col-xl-9 dct-appoinment">
							<div class="card">
								<div class="card-body pt-0">
									<div class="user-tabs">
										<ul class="nav nav-tabs nav-tabs-bottom nav-justified flex-wrap">
											<li class="nav-item">
												<a class="nav-link active" href="#pat_appointments" data-toggle="tab">Appointments</a>
											</li>
										</ul>
									</div>
									<div class="tab-content">

										<!-- Appointment Tab -->
										<div id="pat_appointments" class="tab-pane fade show active">
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
                                                                <?php $__currentLoopData = $user->userAppointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																<tr>
																	<td>
																		<h2 class="table-avatar">
																			<a href="<?php echo e(route('lawyers.show', ['lawyer' => $appointment->lawyer->id])); ?>" class="avatar avatar-sm mr-2">
                                                                                <?php if(isset($appointment->lawyer->image)): ?>
																				    <img class="avatar-img rounded-circle" src="<?php echo e(asset('storage/'.$appointment->lawyer->image)); ?>" alt="User Image">
                                                                                <?php else: ?>
																				    <img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
                                                                                <?php endif; ?>
																			</a>
																			<a href="<?php echo e(route('lawyers.show', ['lawyer' => $appointment->lawyer->id])); ?>"><?php echo e($appointment->lawyer->name); ?> <span><?php echo e($appointment->lawyerType->name); ?></span></a>
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
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
            <!-- /Page Content -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Workspace\appointment-scheduling-system\resources\views/lawyer/client-profile.blade.php ENDPATH**/ ?>