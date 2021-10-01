<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <h2 class="text-center">List Customer</h2>
  <div class="container">
    <table class="table table-striped">
        <tr>
    		<th>ID</th>
    		<th>Tipe Diskon</th>
    		<th>Nama</th>
    		<th>Contact</th>
    		<th>Email</th>
    		<th>Diskon</th>
    		<th>Ktp</th>
    		<th>Alamat</th>
    		<th>Actions</th>
        </tr>
    	<?php foreach($customer as $c){ ?>
        <tr>
    		<td><?php echo $c['id']; ?></td>
    		<td><?php echo $c['tipe_diskon']; ?></td>
    		<td><?php echo $c['nama']; ?></td>
    		<td><?php echo $c['contact']; ?></td>
    		<td><?php echo $c['email']; ?></td>
    		<td><?php echo $c['diskon']; ?></td>
    		<td><?php echo $c['ktp']; ?></td>
    		<td><?php echo $c['alamat']; ?></td>
    		<td>
                <a href="<?php echo site_url('customer/edit/'.$c['id']); ?>">Edit</a> |
                <a href="<?php echo site_url('customer/remove/'.$c['id']); ?>">Delete</a>
            </td>
        </tr>
    	<?php } ?>
    </table>
    <a href="<?php echo site_url('customer/add/'); ?>" type="button" class="btn btn-primary btn-lg btn-block">Add Data</a>
    <a href="<?php echo site_url('home/'); ?>" type="button" class="btn btn-secondary btn-lg btn-block">Back to Menu</a>
  </div>
</body>
