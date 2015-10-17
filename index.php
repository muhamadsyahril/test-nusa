
<?php 

include_once($_SERVER['DOCUMENT_ROOT'].'/test-nusa/soaltiga/includes/connect_database.php'); 
		$sql_query = "SELECT a.id, a.tanggal, sum(b.harga_satuan) as total
			  FROM penjualan a
			  JOIN penjualan_detil b
			  on a.id = b.id_penjualan
			  WHERE Month(tanggal) = '02'
			  GROUP BY Month(tanggal) ";
			
			$result = $connect->query($sql_query) or die ("Error :".mysql_error());
	 
			$data = array();
			while($data = $result->fetch_assoc()) {
				$penjualanBulan[] = $data;
			}

			$sql_query = 
			" SELECT b.id_barang, sum(b.jumlah_dijual) as total
			  FROM penjualan a
			  JOIN penjualan_detil b
			  on a.id = b.id_penjualan
			  GROUP BY b.id_barang
			  ORDER BY sum(b.jumlah_dijual) DESC LIMIT 1";
			
			$result = $connect->query($sql_query) or die ("Error :".mysql_error());
	 
			$data = array();
			while($data = $result->fetch_assoc()) {
				$barang[] = $data;
			}
	

			$sql_query = 
			" SELECT b.id_barang, b.harga_satuan, b.jumlah_dijual
			  FROM penjualan a
			  JOIN penjualan_detil b
			  on a.id = b.id_penjualan";
			
			$result = $connect->query($sql_query) or die ("Error :".mysql_error());
	 
			$data = array();
			while($data = $result->fetch_assoc()) {
				$data['total'] = $data['harga_satuan'] * $data['jumlah_dijual'];
				$transaksi[] = $data;
			}
			foreach($transaksi as $value){
				$total = $total + $value['total'];
			}
	

			$sql_query = 
			" SELECT b.id_barang, b.harga_satuan as harga, sum(b.jumlah_dijual) as quantity
			  FROM penjualan a
			  JOIN penjualan_detil b
			  on a.id = b.id_penjualan
			  GROUP BY b.id_barang
			  ORDER BY b.id_barang";
			
			$result = $connect->query($sql_query) or die ("Error :".mysql_error());
	 
			$data = array();
			while($data = $result->fetch_assoc()) {
				$data['total'] = $data['harga'] * $data['quantity'];
				$transaksiBarang[] = $data;
			}

			$sql_query = 
			" SELECT a.id, a.kode, b.id_barang, b.harga_satuan as harga, b.jumlah_dijual as jumlah_dijual 
			  FROM penjualan a
			  JOIN penjualan_detil b
			  on a.id = b.id_penjualan
			  ORDER BY a.id";
			
			$result = $connect->query($sql_query) or die ("Error :".mysql_error());
	 
			$data = array();
			while($data = $result->fetch_assoc()) {
				$data['total'] = $data['harga'] * $data['jumlah_dijual'];
				$transaksiPenjualan[] = $data;
			}

			$groups = array();
		    foreach ($transaksiPenjualan as $item) {
		        $key = $item['id'];
		        if (!isset($groups[$key])) {
		            $groups[$key] = array(
		                'id' => $key,
		                'kode' => $item['kode'],
		                'jumlah_dijual' => $item['jumlah_dijual'],
		                'total' => $item['total'],
		            );
		        } else {
		            $groups[$key]['jumlah_dijual'] = $groups[$key]['jumlah_dijual'] + $item['jumlah_dijual'];
		            $groups[$key]['total'] = $groups[$key]['total'] +$item['total'];
		        }
		    }


		    $connect->close();
			

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Jawaban Soal 3</h1>
<h2>a.</h2>
<div>Total penjualan pada bulan february = <?php echo 'Rp '.$penjualanBulan[0]['total']; ?> </div>
<h2>b.</h2>
<div>ID Barang yang paling banyak dibeli = <?php echo $barang[0]['id_barang']; ?> </div>
<h2>c.</h2>
<div>Jumlah Transaksi keseluruhan = <?php echo 'Rp '.$total; ?> </div>
<h2>d.</h2>
<div>Total penjualan per ID Barang.</div>
<table>
<tr>
<th>ID Barang</th>
<th>Jumlah</th>
</tr>
<?php 
	foreach ($transaksiBarang as $value) {
?>
<tr>
<td><?php echo $value['id_barang']; ?></td>
<td><?php echo $value['total']; ?></td>
</tr>
<?php } ?>
</table>
<h2>e.</h2>
<div>Jumlah Barang dan Total Penjualan setiap transaksi.</div>
<table>
<tr>
<th>ID Transaksi</th>
<th>Kode</th>
<th>Jumlah</th>
<th>Total</th>
</tr>
<?php 
	foreach ($groups as $value) {
?>
<tr>
<td><?php echo $value['id']; ?></td>
<td><?php echo $value['kode']; ?></td>
<td><?php echo $value['jumlah_dijual']; ?></td>
<td><?php echo $value['total']; ?></td>
</tr>
<?php } ?>
</table>
</body>
</html>