<h1>All students</h1>

<ol>
	<?php foreach($students as $student) : ?>
		<li><?php echo $student->name; ?></li>
	<?php endforeach; ?>	
</ol>
