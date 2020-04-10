<?php $__env->startSection('content'); ?>
  
<div class="animated fadeIn">
    <?php echo $__env->make('coreui-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row" style="margin:20px">
        <div class="col-sm-8">
            <div class="col-sm-12 col-xl-12">
                <div class="card">
                <div class="card-header"> 
                    <strong>My Profile</strong>

                <?php if($count ==0): ?>
                    <a class="btn btn-success" href="<?php echo e(route('profiles.create')); ?>" style="float:right; font-family:Verdana, Geneva, Tahoma, sans-serif"> <i class="fa fa-plus"> Profile</i></a>
                <?php else: ?>
                  <a class="btn btn-success" href="<?php echo e(route('profiles.edit', [$profile->id])); ?>" style="float:right; font-family:Verdana, Geneva, Tahoma, sans-serif"> <i class="fa fa-edit"> Edit Profile</i></a>
                <?php endif; ?>
                
                </div>
                
                
                
               

               <?php if($count ==0): ?>
               <div class="card-body">
                            <a class="btn btn-success" href="<?php echo e(route('profiles.create')); ?>" style="float:right; font-family:Verdana, Geneva, Tahoma, sans-serif"> <i class="fa fa-plus"> Profile</i></a>
                 </div>
                <?php else: ?>
                <div class="card-body"> 
                           <strong><?php echo e($profile->title); ?> <?php echo e($profile->first_name); ?> <?php echo e($profile->last_name); ?></strong>
                        <p><?php echo e($profile->career_description); ?></p>
                        <p><?php echo e($profile->address); ?></p>
                        <p><?php echo e($profile->email); ?></p>
                        
                </div> 
                <div class="card-footer">
                        <i class="fa fa-calendar"></i> <?php echo e($profile->date_of_birth->format('d-m-Y ')); ?> | <i class="fa fa-phone"></i> <?php echo e($profile->phone_number); ?> 
                </div>           
                <?php endif; ?>   
            

                


                </div>
                </div>
                


            <div class="col-sm-12 col-xl-12">
                <div class="card">
                <div class="card-header">  Work Experience
                    <a class="btn btn-success" href="<?php echo e(route('workExperiences.create')); ?>" 
                    style="float:right; font: sans-serif">
                     <i class="fa fa-plus"> Work Experience</i></a></div>
                <div class="card-body">
                   

                    <?php if($cwork==0): ?>
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">   <a class="btn btn-success" href="<?php echo e(route('workExperiences.create')); ?>"> Add work Experiences</a> </h5>
                        </div>
                    <?php else: ?>
                         <?php $__currentLoopData = $works; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $work): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         
                        <a class="list-group-item list-group-item-action flex-column align-items-start" href="<?php echo e(route('workExperiences.edit', [$work->id])); ?>">
                        <h5 class="mb-1"><?php echo e($work->job_title); ?> </h5>
                        <div class="d-flex w-100 justify-content-between">
                        
                        <p class="mb-1"><?php echo e($work->Name_of_employer); ?></p><small class="text-muted"><?php echo e($work->year_in->format('d m Y ')); ?>-<?php echo e($work->year_out->format('d m Y ')); ?></small>
                        </div>
                        <p class="mb-1"><?php echo e($work->job_description); ?></p><small class="text-muted">Donec id elit non mi porta.</small>
                        
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>

                   
                    
                
                </div>
                </div>
                </div>
                <div class="col-lg-12">
        <div class="card">
                <div class="card-header">  Education
                    <a class="btn btn-success" href="<?php echo e(route('education.create')); ?>" 
                    style="float:right; font: sans-serif">
                     <i class="fa fa-plus"> Education</i></a></div>
                <div class="card-body">
                   

                    <?php if($ceducate==0): ?>
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">   <a class="btn btn-success" href="<?php echo e(route('education.create')); ?>"> Add Education</a> </h5>
                        </div>
                    <?php else: ?>
                         <?php $__currentLoopData = $educates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $educate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         
                        <a class="list-group-item list-group-item-action flex-column align-items-start" href="<?php echo e(route('education.edit', [$educate->id])); ?>">
                        <h5 class="mb-1"><?php echo e($educate->school_web); ?> </h5>
                        <div class="d-flex w-100 justify-content-between">
                            <p class="mb-1"><?php echo e($educate->school_name); ?></p><small class="text-muted"><?php echo e($educate->year_in->format('d m Y ')); ?>-<?php echo e($educate->year_out->format('d m Y ')); ?></small>
                        </div>
                            <p class="mb-1"><?php echo e($educate->degree_name); ?></p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>

                   
                    
                </div>
                </div>
                </div>
        </div>
           
        <div class="col-lg-4">
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
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laragra\resources\views/home.blade.php ENDPATH**/ ?>