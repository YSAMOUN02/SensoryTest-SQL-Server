
<?php $__env->startSection("content"); ?>
<div class="container">
    
<div class="test-list-panel">
    <span id="title-list-test"> Test For Today   </span>
<table>
        <tr>
            <th>Title</th>
            <th>Test Method</th>
            <th>Prodct</th>
            <th>Created Date</th>
            <th>Action</th>
        </tr>
        <?php if(count($test_today) != 0): ?>
            <?php $__currentLoopData = $test_today; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->title); ?></td>
                    <td><?php echo e($item->product_qty); ?></td>
                    <td><?php echo e($item->option_qty); ?></td>
                    <td><?php echo e($item->created_at); ?></td>
                    <td><a href="/test/takepart/id=<?php echo e($item->id); ?>/em=<?php echo e($employee->serial); ?>"><button>Take Path</button></a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr>
                <td>No Test For Today</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

        <?php endif; ?>
    
    
   
</table>

    <a href="/login" class="float-right"><button>Back</button></a>

</div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("frontend.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\itsupport1\Desktop\Project_Website\Project\SensoryTest-SQL-Server\resources\views/frontend/test-list.blade.php ENDPATH**/ ?>