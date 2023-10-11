<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tbldata</title>
    </head>
<body>

    <table class="table mt-5">
        <thead>

          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">DOB</th>
            <th scope="col">Home</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $students): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <th scope="row"><?php echo e(++$key); ?></th>
            <td><?php echo e($students->stuName); ?></td>
            <td><?php echo e($students->stuDOB); ?></td>
            <td><?php echo e($students->stuHome); ?></td>
            <td><?php echo e($students->status); ?></td>
            <td><a href="<?php echo e(route("student.edit", $students->id)); ?>"><i class="bi bi-pen"></i></a>
                | <a href="<?php echo e(route("student.delete", $students->id)); ?>" class="vertical"><i class="bi bi-person-dash"></i></a></td>
           </tr>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </tbody>

      </table>

</body>
</html>
<?php /**PATH E:\Projects\laravel\Projects\testProject\resources\views/components/tbldata.blade.php ENDPATH**/ ?>