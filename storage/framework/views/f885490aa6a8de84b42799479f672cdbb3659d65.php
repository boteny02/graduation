<!-- School Name Field -->
<div class="form-group col-sm-6">
    <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
    <?php echo Form::label('school_name', 'School Name:'); ?>

    <?php echo Form::text('school_name', null, ['class' => 'form-control']); ?>

</div>

<!-- School Web Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('school_web', 'School Web:'); ?>

    <?php echo Form::text('school_web', null, ['class' => 'form-control']); ?>

</div>

<!-- Degree Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('degree_name', 'Degree Name:'); ?>

    <?php echo Form::text('degree_name', null, ['class' => 'form-control']); ?>

</div>

<!-- Grade Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('grade', 'Grade:'); ?>

    <?php echo Form::text('grade', null, ['class' => 'form-control']); ?>

</div>

<!-- Year In Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('year_in', 'Year In:'); ?>

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
<div class="form-group col-sm-6">
    <?php echo Form::label('year_out', 'Year Out:'); ?>

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


<!-- Education Level Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('education_level', 'Education Level:'); ?>

    <?php echo Form::select('education_level', ['Primary' => 'Primary', 'Secondary' => 'Secondary', 'Vocational' => 'Vocational', 'Diploma' => 'Diploma', 'Bachelor' => 'Bachelor', 'Post-graduate' => 'Post-graduate'], null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('education.index')); ?>" class="btn btn-secondary">Cancel</a>
</div>
<?php /**PATH C:\xampp\htdocs\laragra\resources\views/education/fields.blade.php ENDPATH**/ ?>