<?php echo form_open('customer/add'); ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<h2 class="text-center">Add Customer</h2>
<div class="container" >
	<form>
	<div class="form-group">
		<span class="text-danger">*</span>Nama :
		<input class="form-control" type="text" name="nama" value="<?php echo $this->input->post('nama'); ?>" />
		<span class="text-danger"><?php echo form_error('nama');?></span>
	</div>
	<div class="form-group">
		<span class="text-danger">*</span>Alamat :
		<textarea class="form-control" name="alamat"><?php echo $this->input->post('alamat'); ?></textarea>
		<span class="text-danger"><?php echo form_error('alamat');?></span>
	</div>
	<div class="form-group">
		<span class="text-danger">*</span>Contact :
		<input type="text" class="form-control" name="contact" value="<?php echo $this->input->post('contact'); ?>" />
		<span class="text-danger"><?php echo form_error('contact');?></span>
	</div>
	<div class="form-group">
		<span class="text-danger">*</span>Email :
		<input type="text" class="form-control" name="email" value="<?php echo $this->input->post('email'); ?>" />
		<span class="text-danger"><?php echo form_error('email');?></span>
	</div>
	<div class="form-group">
		<span class="text-danger">*</span>Tipe Diskon :
		<select class="form-control" name="tipe_diskon">
			<option value="">select</option>
			<?php
			$tipe_diskon_values = array(
				'persentase'=>'persentase',
				'fix_diskon'=>'fix diskon',
			);

			foreach($tipe_diskon_values as $value => $display_text)
			{
				$selected = ($value == $this->input->post('tipe_diskon')) ? ' selected="selected"' : "";

				echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
			}
			?>
		</select>
		<span class="text-danger"><?php echo form_error('tipe_diskon');?></span>
	</div>
	<div class="form-group">
		<span class="text-danger">*</span>Diskon :
		<input type="text" class="form-control" name="diskon" value="<?php echo $this->input->post('diskon'); ?>" />
		<span class="text-danger"><?php echo form_error('diskon');?></span>
	</div>
	<div class="form-group">
		<span class="text-danger">*</span>Ktp :
		<input type="file" class="form-control-file" name="ktp" value="<?php echo $this->input->post('ktp'); ?>" />
		<span class="text-danger"><?php echo form_error('ktp');?></span>
	</div>

	<div class="form-group">
		<div>
			<button type="submit" class="btn btn-primary">Submit</button>

		</div>
	</div>
</form>
</div>

<?php echo form_close(); ?>
