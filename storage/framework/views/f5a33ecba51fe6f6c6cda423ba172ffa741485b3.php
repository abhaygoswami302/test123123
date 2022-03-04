

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center p-4">
                <h3 class="m-0 font-weight-bold text-primary">Add New User</h3>
            </div>
      
            <div class="col-sm-8 offset-2">
                <?php echo $__env->make('admin.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="card shadow mb-4 my-card">
                    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                        role="button" aria-expanded="true" aria-controls="collapseCardExample">
                        <h6 class="m-0 font-weight-bold text-primary">
                           Add New User
                        </h6>
                    </a>
                    <div class="collapse show" id="collapseCardExample">
                        <div class="card-body">
                           <form action="<?php echo e(route('admin.users.store')); ?>" method="POST">
                               <?php echo csrf_field(); ?>
                               <div class="row">
                                    <div class="col-sm-6 p-1">
                                        <label for="name" class="px-2">Name</label>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" >
                                    </div>
                                    <div class="col-sm-6 p-1">
                                        <label for="flag" class="px-2">Choose User Role</label>
                                        <select name="flag" id="flag" class="form-control">
                                            <option value="">Select User Role</option>
                                            <option value="11">Editor</option>
                                            <option value="21">Contributor</option>
                                            <option value="2">Standard</option>
                                            <option value="3">Premium</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 p-1"></div>
                                    <div class="col-sm-6 p-1">
                                        <label for="email" class="px-2">Email</label>
                                        <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email" >
                                    </div>
                                    <div class="col-sm-6 p-1">
                                        <label for="location" class="px-2">Location</label>
                                        <input type="text" name="location" id="location" class="form-control" placeholder="Enter Location" >
                                    </div>
                                    <div class="col-sm-12 p-1"></div>
                                    <div class="col-sm-6 p-1">
                                        <label for="password" class="px-2">Password</label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" >
                                    </div>
                                    <div class="col-sm-6 p-1">
                                        <label for="confirm_password" class="px-2">Confirm Password</label>
                                        <input type="password" name="password_confirmation" id="confirm_password" class="form-control" placeholder="Confirm Password" >
                                    </div>
                                    <div class="col-sm-12 py-1"></div>
                                    <div class="col-sm-12 px-0">
                                        <button type="submit" class="btn btn-primary btn-block">Add New User</button>
                                    </div>
                               </div>
                           </form>
                        </div>
                    </div>
                </div>
            </div>                
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ucc\resources\views/admin/users/create.blade.php ENDPATH**/ ?>