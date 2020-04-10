<?php $__env->startSection('content'); ?>
  
<div class="animated fadeIn">
    <?php echo $__env->make('coreui-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row" style="margin:20px">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-plus-square-o fa-lg"></i>
                <strong>My Profile</strong>

                <?php if($count !=0): ?>
                    <a class="btn btn-success" href="<?php echo e(route('profiles.create')); ?>" style="float:right"> <i class="fa fa-plus"> Profile</i></a>
                <?php else: ?>
                  <a class="btn btn-success" href="<?php echo e(route('profiles.edit', [$profile->id])); ?>" style="float:right"> <i class="fa fa-edit"> Edit Profile</i></a>
                <?php endif; ?>
                
                </div>
                <div class="card-body">
<?php if($count ==0): ?>
<a class="btn btn-success" href="<?php echo e(route('profiles.create')); ?>" style="float:right"> <i class="fa fa-plus"> Profile</i></a>
</div>
               
                    <?php else: ?>
                <strong><?php echo e($profile->title); ?> <?php echo e($profile->first_name); ?> <?php echo e($profile->last_name); ?></strong>
                <p><?php echo e($profile->career_description); ?></p>
                <p><?php echo e($profile->address); ?></p>
                <p><?php echo e($profile->email); ?></p>
                
            </div>
                <?php endif; ?>
                
                
                <div class="card-footer">
                    <i class="c-icon c-icon-2xl mt-5 mb-2 cil-birthday-cake"></i> <?php echo e($profile->date_of_birth); ?> <i class="c-icon c-icon-2xl mt-5 mb-2 cil-phone"></i> <?php echo e($profile->phone_number); ?> 
                 
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-plus-square-o fa-lg"></i>
                    <strong>Create Profile</strong>
                </div>
                <div class="card-body">

                </div>
            </div>

</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laragra\resources\views//home.blade.php ENDPATH**/ ?>