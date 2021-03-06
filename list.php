<?php 
	$all_files = glob('tests/*.json');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>List of tests.</title>
</head>
<body>
	<a href="index.php">Load the text.</a>
	<hr> 

	<!-- Цикл который выводит список всех файлов  -->
	<?php if (!empty($all_files)): ?>
        <?php foreach ($all_files as $file): ?>

            <div class="file-block">
                <h2><?php echo str_replace('tests/', '', $file); ?></h2><br>
                <em>Loaded: <?php echo date("d-m-Y H:i", filemtime($file)); ?></em><br>
                <a href="test.php?number=<?php echo array_search($file, $all_files); ?>">Go to page with tests. ></a>
            </div>
            <hr>

         <?php endforeach; ?>
    <?php endif; ?>

	<?php if(empty($all_files)) echo 'There is not any loaded test.'; ?>
	
</body>
</html>
