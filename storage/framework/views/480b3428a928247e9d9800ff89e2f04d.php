<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="border-login">
        <form action="/login/submit" method="get">
            <div class="login">
                <span id="login-label">Login</span>
                <div class="name"><input type="text" autocomplete="off" name="serial" placeholder="Serial Card ..."><i class="fa-solid fa-address-card"></i></div>
                <span id="or-serial">Or...</span>
                <div class="serial"><input type="text" name="id" placeholder="ID ..."><i class="fa-solid fa-id-badge"></i></div>
                <button>Submit</button>
                <div class="menu-register">
                    <a href="/register" id="Register" class="mt-3">Register</a>
                <a href="/admin/login" id="Register" class="text mt-3">Admin</a>
                </div>
            </div>
        </form>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\itsupport1\Desktop\Project_Website\Project\SensoryTest-SQL-Server\resources\views/frontend/login.blade.php ENDPATH**/ ?>