<?php
	$path = '/dir1/myfile.php';
	$file1 = 'file1.txt';

	// Return filename:
	echo 'Return Filename '.basename($path).'<br><br>';

	// Return filename without ext:
	echo basename($path, '.php').'<br><br>';

	// Return the dir name from the path:
	echo dirname($path).'<br><br>';

	// Check file exists:
	echo file_exists($file1).'<br><br>';

	// Real path (Gets Absolute path):
	echo realpath($file1).'<br><br>';

	// isfile (checks to see if file):
	echo is_file($file1).'<br><br>';

	// Check if file is Writeable:
	echo 'Is Writeable '.is_writable($file1).'<br><br>';

	// checks if file is Readable:
	echo 'Is Readable: '.is_readable($file1).'<br><br>';

	// Get file size:
	echo filesize($file1).'<br><br>';

	// Create a directory:
	// mkdir('testing'); ***DOESN"T WORK BECAUSE OF PERMISSIONS ERROR***

	// Delete a directory:
	// rmdir('testing'); ***DOESN"T WORK BECAUSE OF PERMISSIONS ERROR*** 

	// Copy file:
	// echo copy('file1.txt', 'file2.txt'); ***DOESN"T WORK BECAUSE OF PERMISSIONS ERROR***

	// Rename a file:
	// rename('file1.txt', 'myfile.txt'); ***DOESN"T WORK BECAUSE OF PERMISSIONS ERROR***

	// Delete File:
	// unlink('myfile.txt');***DOESN"T WORK BECAUSE OF PERMISSIONS ERROR***

	// Write string to file (returns file size):
	echo file_put_contents($file1, 'Goodbye World').'<br><br>';

	// Write from file to string:
	// echo file_get_contents('file1.txt').'<br><br>';

	$current = file_get_contents($file1);

	$current .= ' Hello World';

	file_put_contents($file1, $current);

	// echo file_get_contents($file1).'<br><br>';

	// Open File for Reading:
	$handle = fopen($file1, 'r');
	$data = fread($handle, filesize($file1));
	fclose($handle);

	// echo $data;

	// Open File for Writing:
	$handle = fopen($file1, 'w');
	$txt = 'Johnny Doe back at it again'."\n";
	fwrite($handle, $txt);
	$txt2 = 'Steve Smith';
	fwrite($handle, $txt2);
	fclose($handle);