<!DOCTYPE html>
<html lang="en">
<head>
    <title>Templating example</title>
    <?php $use('styles.template.php') ?>
</head>
<body>

<?php $use('sidebar.template.php') ?>

<div class="main">
    <?php $use('body.template.php') ?>
</div>

</body>
</html>
