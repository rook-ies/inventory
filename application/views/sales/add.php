<?php echo form_open('sales/add'); ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<h2 class="text-center">Add Item</h2>
<div class="container" >
	<form>
	<div class="form-group">
		Item :
		<select class="form-control" name="item">
			<option value="">select item</option>
			<?php
			foreach($all_item as $item)
			{
				$selected = ($item['id'] == $this->input->post('item')) ? ' selected="selected"' : "";

				echo '<option value="'.$item['id'].'" '.$selected.'>'.$item['id'].'</option>';
			}
			?>
		</select>
	</div>
	<div class="form-group">
		Customer :
		<select class="form-control" name="customer">
			<option value="">select customer</option>
			<?php
			foreach($all_customer as $customer)
			{
				$selected = ($customer['id'] == $this->input->post('customer')) ? ' selected="selected"' : "";

				echo '<option value="'.$customer['id'].'" '.$selected.'>'.$customer['id'].'</option>';
			}
			?>
		</select>
	</div>
	<div class="form-group">
		<span class="text-danger">*</span>Tanggal Transaksi :
		<input class="form-control" type="text" name="tanggal_transaksi" value="<?php echo $this->input->post('tanggal_transaksi'); ?>" />
		<span class="text-danger"><?php echo form_error('tanggal_transaksi');?></span>
	</div>
	<div class="form-group">
		<span class="text-danger">*</span>Qty :
		<input class="form-control" type="text" name="qty" value="<?php echo $this->input->post('qty'); ?>" />
		<span class="text-danger"><?php echo form_error('qty');?></span>
	</div>
	<div class="form-group">
		<span class="text-danger">*</span>Total Diskon :
		<input class="form-control" type="text" name="total_diskon" value="<?php echo $this->input->post('total_diskon'); ?>" />
		<span class="text-danger"><?php echo form_error('total_diskon');?></span>
	</div>
	<div class="form-group">
		<span class="text-danger">*</span>Total Harga :
		<input class="form-control" type="text" name="total_harga" value="<?php echo $this->input->post('total_harga'); ?>" />
		<span class="text-danger"><?php echo form_error('total_harga');?></span>
	</div>
	<div class="form-group">
		<span class="text-danger">*</span>Total Bayar :
		<input class="form-control" type="text" name="total_bayar" value="<?php echo $this->input->post('total_bayar'); ?>" />
		<span class="text-danger"><?php echo form_error('total_bayar');?></span>
	</div>

	<button type="submit" class="btn btn-primary">Submit</button>

<?php echo form_close(); ?>
