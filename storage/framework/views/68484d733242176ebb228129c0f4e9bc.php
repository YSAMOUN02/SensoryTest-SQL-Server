<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">



  <!-- Bootstrap CSS -->
  <link href="<?php echo e(URL('assets/Css/bootstrap.min.css')); ?>" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="icon" href="<?php echo e(URL('assets/image/photo_2024-01-03_10-04-12.jpg')); ?>" type="image/x-icon">

  <link rel="stylesheet" href="<?php echo e(URL('assets/Css/fonts6/css/all.css')); ?>">


  <script src="<?php echo e(URL('assets/JS/jquery.min.js')); ?>"></script>
  <title>Sensory Test</title>
   <!-- CSS -->
   <link rel="stylesheet" href="<?php echo e(URL('assets/Css/frontend.css')); ?>">
  </head>
  <body>

    <div class="container-fluid">

      <div class="blur">
        <div class="mid">
          <div class="spinner-border text-secondary" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <span>Loadding...</span>
        </div>

    </div>
        <?php if(Session::has("message-fail")): ?>
        <div class="aler_login_fail" style="display: block;
        display: flex;
        align-items: center;
        justify-content: center;">
            <span><?php echo e(Session::get("message-fail")); ?></span>
        </div>
        <?php endif; ?>

        <?php if(Session::has("message-success")): ?>
        <div class="aler_login_fail bg-success" style="display: block;
        display: flex;
        align-items: center;
        justify-content: center;">
            <span><?php echo e(Session::get("message-success")); ?></span>
        </div>
        <?php endif; ?>

        <?php if(Session::has("message-primary")): ?>
        <div class="aler_login_fail bg-primary" style="display: block;
        display: flex;
        align-items: center;
        justify-content: center;">
            <span><?php echo e(Session::get("message-primary")); ?></span>
        </div>
        <?php endif; ?>
        



            <?php echo $__env->yieldContent('content'); ?>


        

        <script src="<?php echo e(URL('assets/JS/bootstrap.bundle.min.js')); ?>"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


    <script src="<?php echo e(URL('/assets/JS/front.js')); ?>"></script>

  </body>
</html>
<?php /**PATH C:\Users\itsupport1\Desktop\Project_Website\Project\SensoryTest-SQL-Server\resources\views/frontend/master.blade.php ENDPATH**/ ?>