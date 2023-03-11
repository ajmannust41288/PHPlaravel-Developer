<!-- <h1>User login</h1>
<form action="users" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" name="username" placeholder="enter user id ">
    <br><br>
    <input type="password" name="password" placeholder="enter user password ">
    <br><br>
    <button type="submit">login</button>
</form> -->
<h1>Welcome to the website </h1>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Profile Photo</td>
    </tr>
    <?php $__currentLoopData = $collection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($user['id']); ?></td>
        <td><?php echo e($user['first_name']); ?></td>
        <td><?php echo e($user['email']); ?></td>
        <td><img src=<?php echo e($user['avatar']); ?> alt=""/></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php /**PATH D:\Documentnust\Sem10\PHP Developer\laravelDeveloper\tut\blog9\resources\views/users.blade.php ENDPATH**/ ?>