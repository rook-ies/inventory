<?php echo form_open('sale/edit/'.$sale['code_transaksi']); ?>

	<div>
		Item : 
		<select name="item">
			<option value="">select item</option>
			<?php 
			foreach($all_item as $item)
			{
				$selected = ($item['id'] == $sale['item']) ? ' selected="selected"' : "";

				echo '<option value="'.$item['id'].'" '.$selected.'>'.$item['id'].'</option>';
			} 
			?>
		</select>
	</div>
	<div>
		Customer : 
		<select name="customer">
			<option value="">select customer</option>
			<?php 
			foreach($all_customer as $customer)
			{
				$selected = ($customer['id'] == $sale['customer']) ? ' selected="selected"' : "";

				echo '<option value="'.$customer['id'].'" '.$selected.'>'.$customer['id'].'</option>';
			} 
			?>
		</select>
	</div>
	<div>
		<span class="text-danger">*</span>Tanggal Transaksi : 
		<input type="text" name="tanggal_transaksi" value="<?php echo ($this->input->post('tanggal_transaksi') ? $this->input->post('tanggal_transaksi') : $sale['tanggal_transaksi']); ?>" />
		<span class="text-danger"><?php echo form_error('tanggal_transaksi');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Qty : 
		<input type="text" name="qty" value="<?php echo ($this->input->post('qty') ? $this->input->post('qty') : $sale['qty']); ?>" />
		<span class="text-danger"><?php echo form_error('qty');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Total Diskon : 
		<input type="text" name="total_diskon" value="<?php echo ($this->input->post('total_diskon') ? $this->input->post('total_diskon') : $sale['total_diskon']); ?>" />
		<span class="text-danger"><?php echo form_error('total_diskon');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Total Harga : 
		<input type="text" name="total_harga" value="<?php echo ($this->input->post('total_harga') ? $this->input->post('total_harga') : $sale['total_harga']); ?>" />
		<span class="text-danger"><?php echo form_error('total_harga');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Total Bayar : 
		<input type="text" name="total_bayar" value="<?php echo ($this->input->post('total_bayar') ? $this->input->post('total_bayar') : $sale['total_bayar']); ?>" />
		<span class="text-danger"><?php echo form_error('total_bayar');?></span>
	</div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>