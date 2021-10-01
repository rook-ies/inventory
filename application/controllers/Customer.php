<?php


class Customer extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_customer');
    }


    function index()
    {
        $data['customer'] = $this->Model_customer->get_all_customer();

        $data['_view'] = 'customer/index';
        $this->load->view('layouts/main',$data);
    }

    function add()
    {
        $this->load->library('form_validation');

    		$this->form_validation->set_rules('nama','Nama','required|max_length[255]');
    		$this->form_validation->set_rules('contact','Contact','required|integer');
    		$this->form_validation->set_rules('email','Email','required|max_length[255]');
    		$this->form_validation->set_rules('diskon','Diskon','required|integer');
    		$this->form_validation->set_rules('tipe_diskon','Tipe Diskon','required|max_length[255]');
    		$this->form_validation->set_rules('ktp','Ktp','required');
    		$this->form_validation->set_rules('alamat','Alamat','required');

		if($this->form_validation->run())
        {
            $params = array(
      				'tipe_diskon' => $this->input->post('tipe_diskon'),
      				'nama' => $this->input->post('nama'),
      				'contact' => $this->input->post('contact'),
      				'email' => $this->input->post('email'),
      				'diskon' => $this->input->post('diskon'),
      				'ktp' => $this->input->post('ktp'),
      				'alamat' => $this->input->post('alamat'),
            );

            $customer_id = $this->Model_customer->add_customer($params);
            redirect('customer/index');
        }
        else
        {
            $data['_view'] = 'customer/add';
            $this->load->view('layouts/main',$data);
        }
    }

    function edit($id)
    {

        $data['customer'] = $this->Model_customer->get_customer($id);

        if(isset($data['customer']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nama','Nama','required|max_length[255]');
			$this->form_validation->set_rules('contact','Contact','required|integer');
			$this->form_validation->set_rules('email','Email','required|max_length[255]');
			$this->form_validation->set_rules('diskon','Diskon','required|integer');
			$this->form_validation->set_rules('tipe_diskon','Tipe Diskon','required|max_length[255]');
			$this->form_validation->set_rules('ktp','Ktp','required');
			$this->form_validation->set_rules('alamat','Alamat','required');

			if($this->form_validation->run())
            {
                $params = array(
					'tipe_diskon' => $this->input->post('tipe_diskon'),
					'nama' => $this->input->post('nama'),
					'contact' => $this->input->post('contact'),
					'email' => $this->input->post('email'),
					'diskon' => $this->input->post('diskon'),
					'ktp' => $this->input->post('ktp'),
					'alamat' => $this->input->post('alamat'),
                );

                $this->Model_customer->update_customer($id,$params);
                redirect('customer/index');
            }
            else
            {
                $data['_view'] = 'customer/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The customer you are trying to edit does not exist.');
    }

    function remove($id)
    {
        $customer = $this->Model_customer->get_customer($id);

        if(isset($customer['id']))
        {
            $this->Model_customer->delete_customer($id);
            redirect('customer/index');
        }
        else
            show_error('The customer you are trying to delete does not exist.');
    }

}
