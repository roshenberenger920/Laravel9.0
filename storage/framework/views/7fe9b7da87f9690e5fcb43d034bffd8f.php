<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
</head>
<body>
    <div class="container" align="center">
        <div class="raw" style="background-color:grey;">
            <div class="col-md-3"></div>
            <div class="col-md-6">

               <!-- <form action="/Student-Data/save" method="post"></form>-->
               <form action="<?php echo e(route('student.save')); ?>" method="post">
               <?php echo csrf_field(); ?>

                <div class="stu-form-area">
                    <div class="row">
                        <div class="col">
                            <lable class="name">Name</lable>
                          <input name="stuName" type="text" class="form-control <?php $__errorArgs = ["stuName"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="First name" aria-label="First name">

                          <?php $__errorArgs = ['stuName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <div  class="text-danger form-text"><?php echo e($message); ?></div>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                         <div class="col">
                            <i class="fa fa-birthday-cake" aria-hidden="true"><lable class="name">Date of Birth</lable></i>
                          <input name="stuDOB" type="date" class="form-control <?php $__errorArgs = ["stuDOB"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="DOB" aria-label="Last name">

                          <?php $__errorArgs = ["stuDOB"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <div class="text-danger  form-text">Please Enter Your <i class="fa fa-birthday-cake" aria-hidden="true"></i> Birthday </div>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </div>
                        </div>

                     <div class="raw">
                        <div class="col">
                            <lable class="name">House</lable>
                        <input name="stuHome" type="text" class="form-control <?php $__errorArgs = ['stuHome'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="House" aria-label="First name">
                        <?php $__errorArgs = ['stuHome'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                </div>
                <div class="raw">
                   <button class="btn btn-primary mt-3 mb-3" type="submit">Save</button>

                </div>
                </div>
            </form>
                </div>

            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>
<?php /**PATH E:\Projects\laravel\Projects\testProject\resources\views/components/form1.blade.php ENDPATH**/ ?>