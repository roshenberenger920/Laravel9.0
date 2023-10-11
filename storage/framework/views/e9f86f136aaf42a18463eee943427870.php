<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>layout</title>
</head>
<body>
    <?php echo $__env->make('Sources.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('Sources.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div><?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
<div><?php echo $__env->make("components.navs", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
<div><?php echo $__env->yieldContent("contents"); ?></div>
<div><?php echo $__env->yieldContent("students"); ?></div>
<div><?php echo $__env->yieldContent("formdata"); ?></div>
<div><?php echo $__env->yieldContent("formdataEdit"); ?></div>
<div><?php echo $__env->yieldContent("tbldata"); ?></div>
<div>  <?php echo $__env->make('components.footer0', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>

</body>
</html>
<?php /**PATH E:\Projects\laravel\Projects\testProject\resources\views/layouts/app.blade.php ENDPATH**/ ?>