
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="border-login">
        <form action="/login/admin/submit" method="post">
            <?php echo csrf_field(); ?>
            <div class="login">
                <span id="login-label">Admin Login</span>
                <div class="name"><input type="text" autocomplete="off"  name="serial" placeholder="Serial or username"><i class="fa fa-user" aria-hidden="true"></i></div>
                <span id="or-serial"></span>
                <div class="serial"><input type="password" autocomplete="off" name="password" placeholder="Password"><i class="fa fa-key" aria-hidden="true"></i></div>
    
                <button>Submit</button>
                <div class="menu-register">

                <a href="/login" id="Register" class="text mt-3">Login as Tester</a>
                </div>
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\itsupport1\Desktop\Project_Website\Project\SensoryTest-SQL-Server\resources\views/frontend/login-admin.blade.php ENDPATH**/ ?>