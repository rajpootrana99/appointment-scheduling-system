<?php $__env->startSection('content'); ?>

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-7 col-auto">
                        <h3 class="page-title">Lawyers</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index">Users</a></li>
                            <li class="breadcrumb-item"><a href="javascript:(0);">Lawyer</a></li>
                            <li class="breadcrumb-item active">Create</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <form method="post" action="<?php echo e(route('lawyerInformation.store')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="card-header">
                                <h4 class="card-title">Lawyer Details</h4>
                            </div>
                            <div class="card-body">
                                <div class="row form-row">
                                    <div class="col-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" value="<?php echo e(old('name')); ?>" class="form-control">
                                            <div style="color: #ff0000; font-size: small;" class="mt-2"><?php echo e($errors->first('name')); ?></div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" value="<?php echo e(old('email')); ?>" class="form-control">
                                            <div style="color: #ff0000; font-size: small;" class="mt-2"><?php echo e($errors->first('email')); ?></div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control">
                                            <div style="color: #ff0000; font-size: small;" class="mt-2"><?php echo e($errors->first('password')); ?></div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" name="password_confirmation" class="form-control">
                                            <div style="color: #ff0000; font-size: small;" class="mt-2"><?php echo e($errors->first('password_confirmation')); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header">
                                <h4 class="card-title">Personal Information</h4>
                            </div>
                            <div class="card-body">
                                <div class="row form-row">
                                    <div class="col-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Lawyer Type</label>
                                            <select name="lawyer_type_id" class="form-control">
                                                <?php $__currentLoopData = $lawyerTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lawyerType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($lawyerType->id); ?>"><?php echo e($lawyerType->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <div style="color: #ff0000; font-size: small;" class="mt-2"><?php echo e($errors->first('lawyer_type_id')); ?></div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" name="phone" value="<?php echo e(old('phone')); ?>" class="form-control">
                                            <div style="color: #ff0000; font-size: small;" class="mt-2"><?php echo e($errors->first('phone')); ?></div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" name="address" value="<?php echo e(old('address')); ?>" class="form-control">
                                            <div style="color: #ff0000; font-size: small;" class="mt-2"><?php echo e($errors->first('address')); ?></div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-6">
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" name="city" value="<?php echo e(old('city')); ?>" class="form-control">
                                            <div style="color: #ff0000; font-size: small;" class="mt-2"><?php echo e($errors->first('city')); ?></div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-6">
                                        <div class="form-group">
                                            <label>CNIC</label>
                                            <input type="number" name="cnic" value="<?php echo e(old('cnic')); ?>" class="form-control">
                                            <div style="color: #ff0000; font-size: small;" class="mt-2"><?php echo e($errors->first('cnic')); ?></div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-6">
                                        <div class="form-group">
                                            <img id="output" width="100" class="justify-content-center" alt="">
                                            <div class="form-group">
                                                <label for="file" style="cursor: pointer; color: #ff0000" class="text-center mt-3 ml-1">Upload Image</label>
                                                <input type="file" name="image" id="file" onchange="loadFile(event)" style="display: none;" class="form-control">
                                            </div>
                                            <div style="color: #ff0000; font-size: small;" class="mt-2"><?php echo e($errors->first('image')); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header">
                                <h4 class="card-title">Education</h4>
                            </div>
                            <div class="card-body">
                                <div class="row form-row">
                                    <div class="col-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Education</label>
                                            <input type="text" name="education" value="<?php echo e(old('education')); ?>" class="form-control">
                                            <div style="color: #ff0000; font-size: small;" class="mt-2"><?php echo e($errors->first('education')); ?></div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Passing Year</label>
                                            <input type="number" name="passing_year" value="<?php echo e(old('passing_year')); ?>" class="form-control">
                                            <div style="color: #ff0000; font-size: small;" class="mt-2"><?php echo e($errors->first('passing_year')); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header"></div>
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary float-right">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->
    <script>
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mainlayout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Workspace\appointment-scheduling-system\resources\views/admin/lawyer/create.blade.php ENDPATH**/ ?>