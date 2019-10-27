<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Export Detail penjualan</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data-detail-penjualan.xls");
?>
	<table border="1">
		<thead>
			<tr>
				<th>Jenis Kaca</th>
				<th>3mm</th>
				<th>4mm</th>
				<th>5mm</th>
				<th>6mm</th>
				<th>8mm</th>
				<th>10mm</th>
				<th>Total Penjualan</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Kaca Rayben</td>
				<td><?= $detail['rayben3']['qty']?></td>
				<td><?= $detail['rayben4']['qty']?></td>
				<td><?= $detail['rayben5']['qty']?></td>
				<td><?= $detail['rayben6']['qty']?></td>
				<td><?= $detail['rayben8']['qty']?></td>
				<td><?= $detail['rayben10']['qty']?></td>
				<td><strong><?= $data['rayben']['qty'];?></strong></td>
			</tr>
			<tr>
				<td>Kaca Polos</td>
				<td><?= $detail['polos3']['qty']?></td>
				<td><?= $detail['polos4']['qty']?></td>
				<td><?= $detail['polos5']['qty']?></td>
				<td><?= $detail['polos6']['qty']?></td>
				<td><?= $detail['polos8']['qty']?></td>
				<td><?= $detail['polos10']['qty']?></td>
				<td><strong><?= $data['polos']['qty'];?></strong></td>
			</tr>

			<tr>
				<td>Kaca Cermin</td>
				<td><?= $detail['cermin3']['qty']?></td>
				<td><?= $detail['cermin4']['qty']?></td>
				<td><?= $detail['cermin5']['qty']?></td>
				<td><?= $detail['cermin6']['qty']?></td>
				<td><?= $detail['cermin8']['qty']?></td>
				<td><?= $detail['cermin10']['qty']?></td>
				<td><strong><?= $data['cermin']['qty'];?></strong></td>
			</tr>
			<tr>
				<td>Kaca Black</td>
				<td><?= $detail['black3']['qty']?></td>
				<td><?= $detail['black4']['qty']?></td>
				<td><?= $detail['black5']['qty']?></td>
				<td><?= $detail['black6']['qty']?></td>
				<td><?= $detail['black8']['qty']?></td>
				<td><?= $detail['black10']['qty']?></td>
				<td><strong><?= $data['black']['qty'];?></strong></td>
			</tr>
			<tr>
				<td>Kaca Es</td>
				<td><?= $detail['es3']['qty']?></td>
				<td><?= $detail['es4']['qty']?></td>
				<td><?= $detail['es5']['qty']?></td>
				<td><?= $detail['es6']['qty']?></td>
				<td><?= $detail['es8']['qty']?></td>
				<td><?= $detail['es10']['qty']?></td>
				<td><strong><?= $data['es']['qty'];?></strong></td>
			</tr>
		</tbody>
	</table>













	
</body>
</html>