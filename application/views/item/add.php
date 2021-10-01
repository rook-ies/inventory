<?php echo form_open('item/add'); ?>
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
		<span class="text-danger">*</span>Nama Item :
		<input class="form-control" type="text" name="nama_item" value="<?php echo $this->input->post('nama_item'); ?>" />
		<span class="text-danger"><?php echo form_error('nama_item');?></span>
	</div>
	<div class="form-group">
		<span class="text-danger">*</span>Unit :
		<select name="unit">
			<option value="">select</option>
			<?php
			$unit_values = array(
				'kg'=>'kg',
				'pcs'=>'pcs',
			);

			foreach($unit_values as $value => $display_text)
			{
				$selected = ($value == $this->input->post('unit')) ? ' selected="selected"' : "";

				echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
			}
			?>
		</select>
		<span class="text-danger"><?php echo form_error('unit');?></span>
	</div>
	<div class="form-group">
		<span class="text-danger">*</span>Stok :
		<input class="form-control" type="text" name="stok" value="<?php echo $this->input->post('stok'); ?>" />
		<span class="text-danger"><?php echo form_error('stok');?></span>
	</div>
	<div class="form-group">
		<span class="text-danger">*</span>Harga Satuan :
		<input class="form-control" type="text" name="harga_satuan" value="<?php echo $this->input->post('harga_satuan'); ?>" />
		<span class="text-danger"><?php echo form_error('harga_satuan');?></span>
	</div>
	<div class="form-group">
		<span class="text-danger">*</span>Gambar Barang :
		<input class="form-control-file" type="file" name="barang" value="<?php echo $this->input->post('barang'); ?>" />
		<span class="text-danger"><?php echo form_error('barang');?></span>
	</div>

	<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?php echo form_close(); ?>
