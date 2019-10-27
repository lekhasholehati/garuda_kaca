<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Export to Excel</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data-order.xls");
?>
	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Jenis Kaca</th>
				<th>Ukuran Kaca</th>
				<th>Ketebalan Kaca</th>
				<th>Quantity</th>
			</tr>
		</thead>
		<tbody>
		<?php $i = 1; ?>
        <?php foreach ($data as $d) : ?>
			<tr>
				<td scope="row"><?= $i; ?></td>
				<td><?= $d['jenis_kaca']; ?></td>
				<td><?= $d['ukuran']; ?></td>
				<td><?= $d['ketebalan']; ?></td>
				<td><?= $d['qty']; ?></td>
			</tr>
		<?php $i++ ?>
        <?php endforeach; ?>
		</tbody>
	</table>
	
</body>
</html>