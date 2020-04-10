<div class="table-responsive-sm">
    <table class="table table-striped" id="profiles-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Title</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Address</th>
        <th>Date Of Birth</th>
        <th>Career Description</th>
        <th>Personal Website</th>
        <th>Gender</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $profiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($profile->user_id); ?></td>
            <td><?php echo e($profile->title); ?></td>
            <td><?php echo e($profile->first_name); ?></td>
            <td><?php echo e($profile->last_name); ?></td>
            <td><?php echo e($profile->phone_number); ?></td>
            <td><?php echo e($profile->email); ?></td>
            <td><?php echo e($profile->address); ?></td>
            <td><?php echo e($profile->date_of_birth); ?></td>
            <td><?php echo e($profile->career_description); ?></td>
            <td><?php echo e($profile->personal_website); ?></td>
            <td><?php echo e($profile->gender); ?></td>
                <td>
                    <?php echo Form::open(['route' => ['profiles.destroy', $profile->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('profiles.show', [$profile->id])); ?>" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="<?php echo e(route('profiles.edit', [$profile->id])); ?>" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        <?php echo Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div><?php /**PATH C:\xampp\htdocs\laragra\resources\views/profiles/table.blade.php ENDPATH**/ ?>