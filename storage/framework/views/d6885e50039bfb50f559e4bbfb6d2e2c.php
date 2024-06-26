<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    
    <div class="d-flex">
        <a href="<?php echo e(route('employees.show', ['employee' => $employee->id])); ?>" class="btn btn-outline-dark btn-sm me-2"><i class="bi bi-person-lines-fill"></i>Show</a>
        <a href="<?php echo e(route('employees.edit', ['employee' => $employee->id])); ?>" class="btn btn-outline-dark btn-sm me-2"><i class="bi bi-pencil-square"></i>Edit</a>
        <div>
            <form action="<?php echo e(route('employees.destroy', ['employee' => $employee->id])); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('delete'); ?>
                <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i>Delete</button>
            </form>
        </div>
    </div>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\modul5\resources\views/employee/actions.blade.php ENDPATH**/ ?>