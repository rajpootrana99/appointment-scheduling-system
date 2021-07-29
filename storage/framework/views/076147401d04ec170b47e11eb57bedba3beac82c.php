<?php $__env->startSection('content'); ?>
			<!-- Page Wrapper -->
            <div class="page-wrapper">

                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Welcome Admin!</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Dashboard</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="row">
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-primary border-primary">
											<i class="fe fe-users"></i>
										</span>
										<div class="dash-count">
											<h3><?php echo e(count($lawyers)); ?></h3>
										</div>
									</div>
									<div class="dash-widget-info">
										<h6 class="text-muted">Lawyers</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-primary w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-success">
											<i class="fe fe-credit-card"></i>
										</span>
										<div class="dash-count">
											<h3><?php echo e(count($clients)); ?></h3>
										</div>
									</div>
									<div class="dash-widget-info">

										<h6 class="text-muted">Clients</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-success w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-danger border-danger">
											<i class="fe fe-money"></i>
										</span>
										<div class="dash-count">
											<h3><?php echo e(count($appointments)); ?></h3>
										</div>
									</div>
									<div class="dash-widget-info">

										<h6 class="text-muted">Appointment</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-danger w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 d-flex">

							<!-- Recent Orders -->
							<div class="card card-table flex-fill">
								<div class="card-header">
									<h4 class="card-title">Lawyers List</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Lawyer Name</th>
													<th>Lawyer Type</th>
													<th>phone</th>
													<th>Reviews</th>
												</tr>
											</thead>
											<tbody>
                                            <?php $__currentLoopData = $lawyers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lawyer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<tr>
													<td>
														<h2 class="table-avatar">
                                                            <?php if(isset($lawyer->user->image)): ?>
															    <a href="profile" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="<?php echo e(asset('storage/'.$lawyer->user->image)); ?>" alt="User Image"></a>
                                                            <?php endif; ?>
                                                            <a href="profile"><?php echo e($lawyer->user->name); ?></a>
														</h2>
													</td>
													<td><?php echo e($lawyer->lawyerType->name); ?></td>
													<td><?php echo e($lawyer->user->phone); ?></td>
													<td>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star text-warning"></i>
														<i class="fe fe-star-o text-secondary"></i>
													</td>
												</tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- /Recent Orders -->

						</div>
						<div class="col-md-6 d-flex">

							<!-- Feed Activity -->
							<div class="card  card-table flex-fill">
								<div class="card-header">
									<h4 class="card-title">Clients List</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Client Name</th>
													<th>Phone</th>
													<th>Last Visit</th>
													<th>Paid</th>
												</tr>
											</thead>
											<tbody>
                                            <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<tr>
													<td>
														<h2 class="table-avatar">
                                                            <?php if(isset($client->image)): ?>
															    <a href="profile" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="<?php echo e(asset('storage/'.$client->image)); ?>" alt="User Image"></a>
                                                            <?php endif; ?>
                                                            <a href="profile"><?php echo e($client->name); ?></a>
														</h2>
													</td>
													<td><?php echo e($client->phone); ?></td>
													<td>20 Oct 2019</td>
													<td class="text-right">$100.00</td>
												</tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- /Feed Activity -->

						</div>
					</div>
					<div class="row">
						<div class="col-md-12">

							<!-- Recent Orders -->
							<div class="card card-table">
								<div class="card-header">
									<h4 class="card-title">Appointment List</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Lawyer Name</th>
													<th>Lawyer Type</th>
													<th>Client Name</th>
													<th>Apointment Time</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
                                                <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <?php if(isset($appointment->lawyer->image)): ?>
                                                                    <a href="profile" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="<?php echo e(asset('storage/'.$appointment->lawyer->image)); ?>" alt="User Image"></a>
                                                                <?php endif; ?>
                                                                <a href="profile"><?php echo e($appointment->lawyer->name); ?></a>
                                                            </h2>
                                                        </td>
                                                        <td><?php echo e($appointment->lawyerType->name); ?></td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <?php if(isset($appointment->user->image)): ?>
                                                                    <a href="profile" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="<?php echo e(asset('storage/'.$appointment->user->image)); ?>" alt="User Image"></a>
                                                                <?php endif; ?>
                                                                <a href="profile"><?php echo e($appointment->user->name); ?></a>
                                                            </h2>
                                                        </td>
                                                        <td><?php echo e($appointment->appointment_date); ?> <span class="text-primary d-block"><?php echo e($appointment->appointment_time); ?></span></td>
                                                        <td>
                                                            <div class="status-toggle">
                                                                <input type="checkbox" id="status_1" class="check" checked>
                                                                <label for="status_1" class="checktoggle">checkbox</label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- /Recent Orders -->

						</div>
					</div>

				</div>
			</div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->
	   <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mainlayout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Workspace\appointment-scheduling-system\resources\views/admin/index.blade.php ENDPATH**/ ?>