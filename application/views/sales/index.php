<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <h2 class="text-center">List Sales</h2>
  <div class="container">
  <table class="table table-striped">
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
            <a href="<?php echo site_url('sales/edit/'.$s['code_transaksi']); ?>">Edit</a> |
            <a href="<?php echo site_url('sales/remove/'.$s['code_transaksi']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
  <a href="<?php echo site_url('sales/add/'); ?>" type="button" class="btn btn-primary btn-lg btn-block">Add Data</a>
  <a href="<?php echo site_url('home/'); ?>" type="button" class="btn btn-secondary btn-lg btn-block">Back to Menu</a>
</body>
