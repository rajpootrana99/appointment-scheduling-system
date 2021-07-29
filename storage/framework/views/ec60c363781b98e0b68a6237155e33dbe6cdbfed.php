<?php $__env->startSection('content'); ?>
<!-- Page Wrapper -->
<div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Appointments</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
									<li class="breadcrumb-item active">Appointments</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<div class="row">
						<div class="col-md-12">

							<!-- Recent Orders -->
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Lawyer Name</th>
													<th>Lawyer Type</th>
													<th>Client Name</th>
													<th>Apointment Time</th>
													<th>Status</th>
												</tr>
											</thead>
                                            <?php if(count($appointments)): ?>
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
                                            <?php endif; ?>
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

<?php echo $__env->make('layout.mainlayout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Workspace\appointment-scheduling-system\resources\views/admin/appointment/index.blade.php ENDPATH**/ ?>