<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Versão do GIT</title>

	<link rel="stylesheet" type="text/css" href="src/Bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="src/Normalize/normalize.css">

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="container-fluid">
		<h3>ÚLTIMO COMMIT</h3>
		<?php

			$branchs_tags = `git log -1 --pretty=format:"%D"`;
			$release = explode(",",explode("tag: ",$branchs_tags)[1]);
			$hash = `git log -1 --pretty=format:"%h"`;
			$author_name = `git log -1 --pretty=format:"%an"`;
			$author_email = `git log -1 --pretty=format:"%ae"`;
			$committer_date = `git log -1 --date=short --pretty=format:"%cd"`;
			$commit_subject = `git log -1 --date=short --pretty=format:"%s"`;


			echo "<pre>";
			echo "branchs_tags: ".$branchs_tags;
			echo "<br>release: ".$release[0];
			echo "<br>hash: ".$hash;
			echo "<br>author_name: ".$author_name;
			echo "<br>author_email: ".$author_email;
			echo "<br>committer_date: ".$committer_date;
			echo "<br>commit_subject: ".$commit_subject;
			echo "</pre>";
		?>
	</div>

	<script type="text/javascript" src="src/jQuery/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="src/Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>