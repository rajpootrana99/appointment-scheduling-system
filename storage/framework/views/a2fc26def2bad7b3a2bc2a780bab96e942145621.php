
<?php $__env->startSection('content'); ?>

			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-7 col-auto">
								<h3 class="page-title">List of Lawyers</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
									<li class="breadcrumb-item active">Lawyer</li>
								</ul>
							</div>
                            <div class="col-sm-5 col">
                                <a href="<?php echo e(route('lawyerInformation.create')); ?>" class="btn btn-primary float-right mt-2">Add Lawyer</a>
                            </div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="row">
						<div class="col-sm-12">
							<div class="card">
                                <?php if(\Session::has('success')): ?>
                                    <div class="alert alert-success border-0" role="alert">
                                        <strong>Success!</strong> <?php echo e(\Session::get('success')); ?>

                                    </div>
                                <?php endif; ?>
								<div class="card-body">
									<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Lawyer Name</th>
													<th>Lawyer Type</th>
													<th>Address</th>
													<th>Phone</th>
													<th>Education</th>
                                                    <th>Action</th>

												</tr>
											</thead>
											<tbody>
                                            <?php $__currentLoopData = $lawyers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lawyer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<tr>
													<td>
														<h2 class="table-avatar">
                                                            <?php if(isset($lawyer->user->image)): ?>
															    <a href="profile" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="<?php echo e(asset('storage/' .$lawyer->user->image)); ?>" alt="User Image"></a>
                                                            <?php endif; ?>
                                                            <a href="profile"><?php echo e($lawyer->user->name); ?></a>
														</h2>
													</td>
													<td><?php echo e($lawyer->lawyerType->name); ?></td>

													<td><?php echo e($lawyer->address); ?></td>

													<td><?php echo e($lawyer->user->phone); ?></td>

													<td><?php echo e($lawyer->education); ?></td>
                                                    <td><div class="action">
                                                            <a class="btn btn-sm bg-success-light float-right mr-2" href="<?php echo e(route('lawyerInformation.edit', ['lawyerInformation' => $lawyer])); ?>">
                                                                <i class="fe fe-pencil"></i> Edit
                                                            </a>
                                                        </div> </td>
												</tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mainlayout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Workspace\appointment-scheduling-system\resources\views/admin/lawyer/index.blade.php ENDPATH**/ ?>