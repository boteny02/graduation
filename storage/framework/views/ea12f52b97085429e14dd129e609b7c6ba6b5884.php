<!-- Name Of Employer Field -->
<div class="form-group col-sm-6">
   <strong><?php echo Form::label('Name_of_employer', 'Name Of Employer:'); ?></strong> 
    <?php echo Form::text('Name_of_employer', null, ['class' => 'form-control']); ?>

    <small>Your Employer Name</small>
</div>

<!-- Industry Employer Field -->
<div class="form-group col-sm-6">
    <strong><?php echo Form::label('industry_employer', 'Industry Employer:'); ?></strong>
    <?php echo Form::select('industry_employer', ['Agriculture' => 'Agriculture', 'Banking' => 'Banking', 'Construction' => 'Construction', 'Computer' => 'Computer', 'Consulting' => 'Consulting','Education' => 'Education', 'Entertainment' => 'Entertainment', 'Medical' => 'Medical', 'Maintance' => 'Maintance', 'Government' => 'Government','Other'=>'Others'], null, ['class' => 'form-control']); ?>

<small>Your line of business the employer was in?</small>
</div>

<!-- Job Title Field -->
<div class="form-group col-sm-6">
    <strong><?php echo Form::label('job_title', 'Job Title:'); ?></strong>
    <?php echo Form::text('job_title', null, ['class' => 'form-control']); ?>

</div>
<div class="row col-sm-12" >

    <!-- Year In Field -->
<div class="form-group col-sm-4">
    <strong><?php echo Form::label('year_in', 'Stated Date:'); ?></strong>
    <?php echo Form::text('year_in', null, ['class' => 'form-control','id'=>'year_in']); ?>

</div>

<?php $__env->startPush('scripts'); ?>
   <script type="text/javascript">
           $('#year_in').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
<?php $__env->stopPush(); ?>


<!-- Year Out Field -->
<div class="form-group col-sm-4">
    <strong><?php echo Form::label('year_out', 'Ended Date:'); ?></strong>
    <?php echo Form::text('year_out', null, ['class' => 'form-control','id'=>'year_out']); ?>

</div>

<?php $__env->startPush('scripts'); ?>
   <script type="text/javascript">
           $('#year_out').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
<?php $__env->stopPush(); ?>

</div>



<!-- Job Catergory Field -->
<div class="form-group col-sm-6">
   <strong><?php echo Form::label('job_catergory', 'Job Catergory:'); ?></strong> 
    <?php echo Form::text('job_catergory', null, ['class' => 'form-control']); ?>

    <small>What was your work about?</small>
</div>

<!-- Job Level Field -->
<div class="form-group col-sm-6">
    <strong><?php echo Form::label('job_level', 'Job Level:'); ?></strong>
    <?php echo Form::select('job_level', ['intern' => 'intern', 'Basic Level' => 'Basic_level', 'Experienced' => 'Experienced', 'Expert' => 'Expert', 'Manager' => 'Manager', 'Senior' => 'Senior', 'Excultive' => 'Excultive'], null, ['class' => 'form-control']); ?>

<small>Your role in the organisation?</small>
</div>

<!-- Job Description Field -->
<div class="form-group col-sm-12 col-lg-8">
    <strong><?php echo Form::label('job_description', 'Job Description:'); ?></strong>
    <?php echo Form::textarea('job_description', null, ['class' => 'form-control']); ?>

    <small>Tell briefly about your work: your role and responsibilities, daily tasks and main achievements.</small>
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('workExperiences.index')); ?>" class="btn btn-secondary">Cancel</a>
</div>
<?php /**PATH C:\xampp\htdocs\laragra\resources\views/work_experiences/fields.blade.php ENDPATH**/ ?>