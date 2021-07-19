<?php $__env->startSection('content'); ?>
<!-- Add Modal -->
<div class="modal fade" id="Add_Specialities_details" aria-hidden="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Lawyer Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo e(route('lawyerType.store')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="row form-row">
                        <div class="col-12 col-sm-12">
                            <div class="form-group">
                                <label>Type Name</label>
                                <input type="text" name="name" class="form-control">
                                <div style="color: #ff0000; font-size: small;" class="mt-2"><?php echo e($errors->first('name')); ?></div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Add Type</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /ADD Modal -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mainlayout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Workspace\appointment-scheduling-system\resources\views/admin/LawyerType/create.blade.php ENDPATH**/ ?>