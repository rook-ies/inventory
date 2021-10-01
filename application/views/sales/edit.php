<?php echo form_open('sales/edit/'.$sales['code_transaksi']); ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<h2 class="text-center">Edit Item</h2>
<div class="container" >
	<form>
	<div class="form-group">
		Item :
		<select name="item" class="form-control">
			<option value="">select item</option>
			<?php
			foreach($all_item as $item)
			{
				$selected = ($item['id'] == $sales['item']) ? ' selected="selected"' : "";

				echo '<option value="'.$item['id'].'" '.$selected.'>'.$item['id'].'</option>';
			}
			?>
		</select>
	</div>
	<div class="form-group">
		Customer :
		<select name="customer" class="form-control">
			<option value="">select customer</option>
			<?php
			foreach($all_customer as $customer)
			{
				$selected = ($customer['id'] == $sales['customer']) ? ' selected="selected"' : "";

				echo '<option value="'.$customer['id'].'" '.$selected.'>'.$customer['id'].'</option>';
			}
			?>
		</select>
	</div>
	<div class="form-group">
		<span class="text-danger">*</span>Tanggal Transaksi :
		<input type="text" class="form-control" name="tanggal_transaksi" value="<?php echo ($this->input->post('tanggal_transaksi') ? $this->input->post('tanggal_transaksi') : $sales['tanggal_transaksi']); ?>" />
		<span class="text-danger"><?php echo form_error('tanggal_transaksi');?></span>
	</div>
	<div class="form-group">
		<span class="text-danger">*</span>Qty :
		<input type="text" class="form-control" name="qty" value="<?php echo ($this->input->post('qty') ? $this->input->post('qty') : $sales['qty']); ?>" />
		<span class="text-danger"><?php echo form_error('qty');?></span>
	</div>
	<div class="form-group">
		<span class="text-danger">*</span>Total Diskon :
		<input type="text" class="form-control" name="total_diskon" value="<?php echo ($this->input->post('total_diskon') ? $this->input->post('total_diskon') : $sales['total_diskon']); ?>" />
		<span class="text-danger"><?php echo form_error('total_diskon');?></span>
	</div>
	<div class="form-group">
		<span class="text-danger">*</span>Total Harga :
		<input type="text" class="form-control" name="total_harga" value="<?php echo ($this->input->post('total_harga') ? $this->input->post('total_harga') : $sales['total_harga']); ?>" />
		<span class="text-danger"><?php echo form_error('total_harga');?></span>
	</div>
	<div class="form-group">
		<span class="text-danger">*</span>Total Bayar :
		<input type="text" class="form-control" name="total_bayar" value="<?php echo ($this->input->post('total_bayar') ? $this->input->post('total_bayar') : $sales['total_bayar']); ?>" />
		<span class="text-danger"><?php echo form_error('total_bayar');?></span>
	</div>

	<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php echo form_close(); ?>
