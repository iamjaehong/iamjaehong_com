<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >	    
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
		<style>
			body {
				padding: 10px;
			}
		</style>
	</head>
	<body>
		<div data-role="page">
				<div data-role="header">
		<h1>자바스크립트</h1>
	</div><!-- /header -->
		<div data-role="content">	
		<?php
		mysql_connect('localhost', 'root', '111111');
		mysql_select_db('iamjaehong');
		mysql_query("set session character_set_connection=utf8;");
		mysql_query("set session character_set_results=utf8;");
		mysql_query("set session character_set_client=utf8;");
		$sql = "select id,title from topic";
		$result = mysql_query($sql);
		?>
				<h1>자바스크립트</h1>
		<div class="row">
			<div class="span4">
				<ol data-role="listview" data-inset="true">
				<?php
				while ($row = mysql_fetch_assoc($result)) {
				?>
					<li><a href="index.php?id=<?=$row['id'] ?>"><?=htmlspecialchars($row['title']) ?></a></li>
				<?php
				}
				?>
				</ol>
			</div>
			<?php
			$sql = "select * from topic where id = " . mysql_real_escape_string($_GET['id']);
			$result = mysql_query($sql);
			$row = mysql_fetch_assoc($result);
			?>
			<div class="span8">
				<div>
					<h2><?=htmlspecialchars($row['title']) ?></h2>
					<div><?=$row['description'] ?></div>
				</div>
			</div>
		</div>
		<?php ?>
			</div><!-- /content -->
		</div><!-- /page -->
	</body>
</html>