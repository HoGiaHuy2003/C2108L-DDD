<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style="text-align: center">Quan Ly Sach</h1>

<?php
$N = rand(1, 100);
?>
<table border="1" cellpadding="5">
	<thead>
		<tr>
			<th>No</th>
			<th>Title</th>
			<th>Author</th>
			<th>Price</th>
			<th>Manufacturer</th>
		</tr>
	</thead>
	<tbody>
<?php
	for ($i=0; $i < $N; $i++) { 
		echo "<tr>
			<td>".($i + 1)."</td>
			<td>Quyen sach $i</td>
			<td>Tac gia $i</td>
			<td>".(1000 + 10 * $i)."</td>
			<td>Nha xuat ban $i</td>
		</tr>";
	}
?>
	</tbody>
</table>
</body>
</html>