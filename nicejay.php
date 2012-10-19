<!DOCTYPE html>
<html>
	<head>
<meta http-equiv="Content-Type" content="textt/html;charset=utf-8">
</head>
<body>
<?php
mysql_connect('localhost','root','111111');
mysql_select_db('iamjaehong');
$sql = "select * from topic;";
$result = mysql_query($sql);
?>
<ol>


<?php
while($row = mysql_fetch_assoc($result)){
?>	
<li>
	<a href="nicejay.php?id=<?=$row['id']?>"><?=$row['title']?></a>
</li>

<?php
}

print_r($_GET['id']);
$sql = "select * from topic where id = ".$_GET['id'];
$result = mysql_query($sql);
$row = mysql_fetch_assoc($result);
print_r($row)
?>
</body>
</html>
