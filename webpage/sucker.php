<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
			<dd><?= $_REQUEST["Name"]; ?></dd>

			<dt>Section</dt>
			<dd><?= $_REQUEST["course"]; ?></dd>

			<dt>Credit Card</dt>
			<dd>
			<?= $_REQUEST["credit_number"]; ?>
			<?= $_REQUEST["visa"]; ?>
			</dd>
			<dt>Here are all sucker who have submitted here</dt>
		    </dd>
			<?php
			$file = 'sucker.txt';
			$all = file_get_contents($file, true);
			echo $all;
			$current = "\r\n".$_REQUEST["Name"].";";
			$current .= $_REQUEST["course"].";";
			$current .= $_REQUEST["credit_number"].";";
			$current .= $_REQUEST["visa"];
			file_put_contents($file,  $current, FILE_APPEND);
			?>
			</dd>
		</dl>


	
  </body>
</html>