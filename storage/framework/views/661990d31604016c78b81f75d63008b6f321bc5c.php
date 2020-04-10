<!-- User Id Field -->
<div class="form-group col-sm-6">
<input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
    <?php echo Form::hidden('', null, ['class' => 'form-control']); ?>

</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('title', 'Title:'); ?>

    <?php echo Form::select('title', [''=>'','Mr' => 'Mr', 'Mrs' => 'Mrs', 'Miss' => 'Miss'], null, ['class' => 'form-control']); ?>

</div>

<!-- First Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('first_name', 'First Name:'); ?>

    <?php echo Form::text('first_name', null, ['class' => 'form-control']); ?>

</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('last_name', 'Last Name:'); ?>

    <?php echo Form::text('last_name', null, ['class' => 'form-control']); ?>

</div>

<!-- Phone Number Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('phone_number', 'Phone Number:'); ?>

    <?php echo Form::text('phone_number', null, ['class' => 'form-control']); ?>

</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('email', 'Email:'); ?>

    <input class="form-control" type="text" name="email" id="email" value="<?php echo e(Auth::user()->email); ?>" readonly>
</div>

<!-- Address Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('address', 'Address:'); ?>

    <?php echo Form::textarea('address', null, ['class' => 'form-control']); ?>

</div>

<!-- Date Of Birth Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('date_of_birth', 'Date Of Birth:'); ?>

    <?php echo Form::text('date_of_birth', null, ['class' => 'form-control','id'=>'date_of_birth']); ?>

</div>

<?php $__env->startPush('scripts'); ?>
   <script type="text/javascript">
           $('#date_of_birth').datetimepicker({
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


<!-- Career Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('career_description', 'Career Description:'); ?>

    <?php echo Form::textarea('career_description', null, ['class' => 'form-control']); ?>

</div>

<!-- Personal Website Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('personal_website', 'Personal Website:'); ?>

    <?php echo Form::text('personal_website', null, ['class' => 'form-control']); ?>

</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('gender', 'Gender:'); ?>

    <?php echo Form::select('gender', ['Male' => 'Male', 'Female' => 'Female'], null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('profiles.index')); ?>" class="btn btn-secondary">Cancel</a>
</div>
<?php /**PATH C:\xampp\htdocs\laragra\resources\views/profiles/fields.blade.php ENDPATH**/ ?>