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
                                                    <th class="text-center">Action</th>
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
                                                        <?php if($appointment->status == 'Pending'): ?>
                                                            <td><span class="badge badge-pill bg-info-light"><?php echo e($appointment->status); ?></span></td>
                                                        <?php endif; ?>
                                                        <?php if($appointment->status == 'Confirm'): ?>
                                                            <td><span class="badge badge-pill bg-success-light"><?php echo e($appointment->status); ?></span></td>
                                                        <?php endif; ?>
                                                        <?php if($appointment->status == 'Reject'): ?>
                                                            <td><span class="badge badge-pill bg-danger-light"><?php echo e($appointment->status); ?></span></td>
                                                        <?php endif; ?>
                                                        <td class="text-center">
                                                            <div class="dropdown d-inline-block">
                                                                <a class="dropdown-toggle arrow-none" id="dLabel11" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                    <i class="las la-ellipsis-v font-20 text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel11">
                                                                    <a href="#book_lawyer" data-date="<?php echo e($appointment->appointment_date); ?>" data-time="<?php echo e($appointment->appointment_time); ?>" data-id="<?php echo e($appointment->id); ?>" data-toggle="modal" class="dropdown-item">Edit</a>
                                                                    <?php if($appointment->status != 'Reject'): ?>
                                                                        <form id="<?php echo e('reject_'.$appointment->id); ?>" method="post" action="<?php echo e(route('appointment.updateStatus', ['appointment' => $appointment])); ?>">
                                                                            <?php echo csrf_field(); ?>
                                                                            <?php echo method_field('PATCH'); ?>
                                                                            <input type="hidden" name="status" value="2">
                                                                            <a class="dropdown-item" style="cursor: pointer;" onclick="document.getElementById('<?php echo e('reject_'.$appointment->id); ?>').submit()">Reject</a>
                                                                        </form>
                                                                    <?php endif; ?>
                                                                    <?php if($appointment->status != 'Confirm'): ?>
                                                                        <form id="<?php echo e('confirm_'.$appointment->id); ?>" method="post" action="<?php echo e(route('appointment.updateStatus', ['appointment' => $appointment])); ?>">
                                                                            <?php echo csrf_field(); ?>
                                                                            <?php echo method_field('PATCH'); ?>
                                                                            <input type="hidden" name="status" value="1">
                                                                            <a class="dropdown-item" style="cursor: pointer;" onclick="document.getElementById('<?php echo e('confirm_'.$appointment->id); ?>').submit()">Confirm</a>
                                                                        </form>
                                                                    <?php endif; ?>
                                                                </div>
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
<div class="modal fade" id="book_lawyer" aria-hidden="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Appointment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="book_lawyer_form">
                    <?php echo csrf_field(); ?>
                    <div class="row form-row">
                        <div class="col-12 col-sm-12">
                            <div class="form-group">
                                <input type="hidden" id="id" name="id">
                                <label>Select Date</label>
                                <input type="date" name="appointment_date" id="appointment_date" class="form-control">
                                <span class="text-danger error-text appointment_date_error"></span>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12">
                            <div class="form-group">
                                <label>Select Time</label>
                                <input type="time" name="appointment_time" id="appointment_time" class="form-control">
                                <span class="text-danger error-text appointment_time_error"></span>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function (){
        $('#book_lawyer').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var appointment_date = button.data('date')
            var appointment_time = button.data('time')
            var id = button.data('id')
            var modal = $(this)
            modal.find('.modal-body #appointment_date').val(appointment_date);
            modal.find('.modal-body #appointment_time').val(appointment_time);
            modal.find('.modal-body #id').val(id);
        });
        $('#book_lawyer_form').on('submit', function (e){
            e.preventDefault();
            $.ajax({
                type: "post",
                url: "appointment",
                data: $('#book_lawyer_form').serialize(),
                dataType:'json',
                beforeSend:function (){
                    $(document).find('span.error-text').text('');
                },
                success: function (response) {
                    if (response.status == 0){
                        $('#book_lawyer').modal('show')
                        $.each(response.error, function (prefix, val){
                            $('span.'+prefix+'_error').text(val[0]);
                        });
                    }else {
                        $('#book_lawyer_form')[0].reset();
                        $('#book_lawyer').modal('hide')
                        alert("Appointment Updated Successfully ")
                    }
                },
                error: function (error){
                    console.log(error)
                    $('#book_lawyer').modal('show')
                    alert("Appointment not updated")
                }
            });
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mainlayout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Workspace\appointment-scheduling-system\resources\views/admin/appointment/index.blade.php ENDPATH**/ ?>