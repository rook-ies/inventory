<?php

class Sales extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_sales');
    }


    function index()
    {
        $data['sales'] = $this->Model_sales->get_all_sales();

        $data['_view'] = 'sales/index';
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

            $sale_id = $this->Model_sales->add_sales($params);
            redirect('sales/index');
        }
        else
        {
			$this->load->model('Model_item');
			$data['all_item'] = $this->Model_item->get_all_item();

			$this->load->model('Model_customer');
			$data['all_customer'] = $this->Model_customer->get_all_customer();

            $data['_view'] = 'sales/add';
            $this->load->view('layouts/main',$data);
        }
    }

    function edit($code_transaksi)
    {

        $data['sales'] = $this->Model_sales->get_sales($code_transaksi);

        if(isset($data['sales']['code_transaksi']))
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

                $this->Model_sales->update_sales($code_transaksi,$params);
                redirect('sales/index');
            }
            else
            {
				$this->load->model('Model_item');
				$data['all_item'] = $this->Model_item->get_all_item();

				$this->load->model('Model_customer');
				$data['all_customer'] = $this->Model_customer->get_all_customer();

                $data['_view'] = 'sales/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The sales you are trying to edit does not exist.');
    }

    function remove($code_transaksi)
    {
        $sale = $this->Model_sales->get_sales($code_transaksi);

        if(isset($sale['code_transaksi']))
        {
            $this->Model_sales->delete_sales($code_transaksi);
            redirect('sales/index');
        }
        else
            show_error('The sales you are trying to delete does not exist.');
    }

}
