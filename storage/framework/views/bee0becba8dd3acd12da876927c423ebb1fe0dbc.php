
<?php $__env->startSection('content'); ?>
<!-- Page Wrapper -->
<div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">List of Client</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
									<li class="breadcrumb-item active">Client</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Client ID</th>
													<th>Client Name</th>
													<th>Client Email</th>
													<th>Phone</th>
												</tr>
											</thead>
											<tbody>
                                            <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<tr>
													<td><?php echo e($client->id); ?></td>
													<td>
														<h2 class="table-avatar">
                                                            <?php if(isset($client->image)): ?>
															    <a href="profile" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="<?php echo e(asset('storage/'.$client->image)); ?>" alt="User Image"></a>
                                                            <?php endif; ?>
                                                            <a href="profile"><?php echo e($client->name); ?></a>
														</h2>
													</td>
													<td><?php echo e($client->email); ?></td>
													<td><?php echo e($client->phone); ?></td>
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
			</div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mainlayout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Workspace\appointment-scheduling-system\resources\views/admin/client/index.blade.php ENDPATH**/ ?>