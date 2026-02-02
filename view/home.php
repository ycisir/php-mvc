<?php

echo "All students" . PHP_EOL;
echo "----------------------------------------" . PHP_EOL;
foreach($students as $student) {
	echo $student->name . PHP_EOL;
}
echo "----------------------------------------" . PHP_EOL;