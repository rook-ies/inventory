<table border="1" width="100%">
    <tr>
		<th>Code Transaksi</th>
		<th>Item</th>
		<th>Customer</th>
		<th>Tanggal Transaksi</th>
		<th>Qty</th>
		<th>Total Diskon</th>
		<th>Total Harga</th>
		<th>Total Bayar</th>
		<th>Actions</th>
    </tr>
	<?php foreach($sales as $s){ ?>
    <tr>
		<td><?php echo $s['code_transaksi']; ?></td>
		<td><?php echo $s['item']; ?></td>
		<td><?php echo $s['customer']; ?></td>
		<td><?php echo $s['tanggal_transaksi']; ?></td>
		<td><?php echo $s['qty']; ?></td>
		<td><?php echo $s['total_diskon']; ?></td>
		<td><?php echo $s['total_harga']; ?></td>
		<td><?php echo $s['total_bayar']; ?></td>
		<td>
            <a href="<?php echo site_url('sale/edit/'.$s['code_transaksi']); ?>">Edit</a> | 
            <a href="<?php echo site_url('sale/remove/'.$s['code_transaksi']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
