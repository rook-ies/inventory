<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <h2 class="text-center">List Item</h2>
  <div class="container">
  <table class="table table-striped">
      <tr>
  		<th>ID</th>
  		<th>Unit</th>
  		<th>Nama Item</th>
  		<th>Stok</th>
  		<th>Harga Satuan</th>
  		<th>Barang</th>
  		<th>Actions</th>
      </tr>
  	<?php foreach($item as $i){ ?>
      <tr>
  		<td><?php echo $i['id']; ?></td>
  		<td><?php echo $i['unit']; ?></td>
  		<td><?php echo $i['nama_item']; ?></td>
  		<td><?php echo $i['stok']; ?></td>
  		<td><?php echo $i['harga_satuan']; ?></td>
  		<td><?php echo $i['barang']; ?></td>
  		<td>
              <a href="<?php echo site_url('item/edit/'.$i['id']); ?>">Edit</a> |
              <a href="<?php echo site_url('item/remove/'.$i['id']); ?>">Delete</a>
          </td>
      </tr>
  	<?php } ?>
  </table>
  <a href="<?php echo site_url('customer/add/'); ?>" type="button" class="btn btn-primary btn-lg btn-block">Add Data</a>
</div>
</body>
