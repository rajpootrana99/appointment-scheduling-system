<?php $__env->startSection('content'); ?>
<!-- Page Wrapper -->
<div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Reviews</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
									<li class="breadcrumb-item active">Reviews</li>
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
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Client Name</th>
													<th>Lawyer Name</th>
													<th>Ratings</th>
													<th>Description</th>
													<th>Date</th>
													<th class="text-right">Actions</th>
												</tr>
											</thead>
											<tbody>
                                                <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <?php if(isset($review->user->image)): ?>
                                                                    <a href="profile" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="<?php echo e(asset('storage/'.$review->user->image)); ?>" alt="User Image"></a>
                                                                <?php endif; ?>
                                                                <a href="profile"><?php echo e($review->user->name); ?></a>
                                                            </h2>
                                                        </td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <?php if(isset($review->lawyer->image)): ?>
                                                                    <a href="profile" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="<?php echo e(asset('storage/'.$review->lawyer->image)); ?>" alt="User Image"></a>
                                                                <?php endif; ?>
                                                                <a href="profile"><?php echo e($review->lawyer->name); ?></a>
                                                            </h2>
                                                        </td>

                                                        <td>
                                                            <?php $rating = $review->rating ; ?>
                                                            <?php $remaining_rating = 5-$review->rating ; ?>
                                                            <?php for($i = 1; $i <= $rating ; $i++): ?>
                                                                <i class="fe fe-star text-warning"></i>
                                                            <?php endfor; ?>
                                                            <?php for($i = 1; $i <= $remaining_rating ; $i++): ?>
                                                                <i class="fe fe-star-o text-secondary"></i>
                                                            <?php endfor; ?>
                                                        </td>

                                                        <td>
                                                            <?php echo e($review->review); ?>

                                                        </td>
                                                            <td><?php echo e($review->created_at); ?></td>
                                                        <td class="text-right">
                                                            <div class="actions">
                                                                <a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
                                                                    <i class="fe fe-trash"></i> Delete
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
					</div>

				</div>
			</div>
			<!-- /Page Wrapper -->

			<!-- Delete Modal -->
			<div class="modal fade" id="delete_modal" aria-hidden="true" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document" >
					<div class="modal-content">
					<!--	<div class="modal-header">
							<h5 class="modal-title">Delete</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>-->
						<div class="modal-body">
							<div class="form-content p-2">
								<h4 class="modal-title">Delete</h4>
								<p class="mb-4">Are you sure want to delete?</p>
								<button type="button" class="btn btn-primary">Save </button>
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Delete Modal -->
        </div>
		<!-- /Main Wrapper -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mainlayout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Workspace\appointment-scheduling-system\resources\views/admin/reviews/index.blade.php ENDPATH**/ ?>