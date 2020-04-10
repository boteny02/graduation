<li class="nav-item <?php echo e(Request::is('profiles*') ? 'active' : ''); ?>">
    <a class="nav-link" href="<?php echo e(route('profiles.index')); ?>">
        <i class="fa fa-user"></i>
        <span>Profiles</span>
    </a>
</li>
<li class="nav-item <?php echo e(Request::is('workExperiences*') ? 'active' : ''); ?>">
    <a class="nav-link" href="<?php echo e(route('workExperiences.create')); ?>">
        <i class="fa fa-bank"></i>
        <span>Work Experiences</span>
    </a>
</li>
<li class="nav-item <?php echo e(Request::is('education*') ? 'active' : ''); ?>">
    <a class="nav-link" href="<?php echo e(route('education.create')); ?>">
        <i class="fa fa-building"></i>
        <span>Education</span>
    </a>
</li>
<?php /**PATH C:\xampp\htdocs\laragra\resources\views/layouts/menu.blade.php ENDPATH**/ ?>