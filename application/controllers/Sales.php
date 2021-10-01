<?php

class Sales extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Sale_model');
    }


    function index()
    {
        $data['sales'] = $this->Sale_model->get_all_sales();

        $data['_view'] = 'sale/index';
        $this->load->view('layouts/main',$data);
    }

    function add()
    {
        $this->load->library('form_validation');

		$this->form_validation->set_rules('tanggal_transaksi','Tanggal Transaksi','required');
		$this->form_validation->set_rules('qty','Qty','required|integer');
		$this->form_validation->set_rules('total_diskon','Total Diskon','required|integer');
		$this->form_validation->set_rules('total_harga','Total Harga','required|integer');
		$this->form_validation->set_rules('total_bayar','Total Bayar','required|integer');

		if($this->form_validation->run())
        {
            $params = array(
				'item' => $this->input->post('item'),
				'customer' => $this->input->post('customer'),
				'tanggal_transaksi' => $this->input->post('tanggal_transaksi'),
				'qty' => $this->input->post('qty'),
				'total_diskon' => $this->input->post('total_diskon'),
				'total_harga' => $this->input->post('total_harga'),
				'total_bayar' => $this->input->post('total_bayar'),
            );

            $sale_id = $this->Sale_model->add_sale($params);
            redirect('sale/index');
        }
        else
        {
			$this->load->model('Item_model');
			$data['all_item'] = $this->Item_model->get_all_item();

			$this->load->model('Customer_model');
			$data['all_customer'] = $this->Customer_model->get_all_customer();

            $data['_view'] = 'sale/add';
            $this->load->view('layouts/main',$data);
        }
    }

    function edit($code_transaksi)
    {

        $data['sale'] = $this->Sale_model->get_sale($code_transaksi);

        if(isset($data['sale']['code_transaksi']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('tanggal_transaksi','Tanggal Transaksi','required');
			$this->form_validation->set_rules('qty','Qty','required|integer');
			$this->form_validation->set_rules('total_diskon','Total Diskon','required|integer');
			$this->form_validation->set_rules('total_harga','Total Harga','required|integer');
			$this->form_validation->set_rules('total_bayar','Total Bayar','required|integer');

			if($this->form_validation->run())
            {
                $params = array(
					'item' => $this->input->post('item'),
					'customer' => $this->input->post('customer'),
					'tanggal_transaksi' => $this->input->post('tanggal_transaksi'),
					'qty' => $this->input->post('qty'),
					'total_diskon' => $this->input->post('total_diskon'),
					'total_harga' => $this->input->post('total_harga'),
					'total_bayar' => $this->input->post('total_bayar'),
                );

                $this->Sale_model->update_sale($code_transaksi,$params);
                redirect('sale/index');
            }
            else
            {
				$this->load->model('Item_model');
				$data['all_item'] = $this->Item_model->get_all_item();

				$this->load->model('Customer_model');
				$data['all_customer'] = $this->Customer_model->get_all_customer();

                $data['_view'] = 'sale/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The sale you are trying to edit does not exist.');
    }

    function remove($code_transaksi)
    {
        $sale = $this->Sale_model->get_sale($code_transaksi);

        if(isset($sale['code_transaksi']))
        {
            $this->Sale_model->delete_sale($code_transaksi);
            redirect('sale/index');
        }
        else
            show_error('The sale you are trying to delete does not exist.');
    }

}
