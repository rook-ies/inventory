<?php


class Item extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_item');
    }

    function index()
    {
        $data['item'] = $this->Model_item->get_all_item();
        $data['_view'] = 'item/index';
        $this->load->view('layouts/main',$data);

    }

    function add()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('unit','Unit','required|max_length[255]');
    		$this->form_validation->set_rules('nama_item','Nama Item','required|max_length[255]');
    		$this->form_validation->set_rules('stok','Stok','required|integer');
    		$this->form_validation->set_rules('harga_satuan','Harga Satuan','required|integer');

		if($this->form_validation->run())
        {
            $params = array(
              'unit' => $this->input->post('unit'),
      				'nama_item' => $this->input->post('nama_item'),
      				'stok' => $this->input->post('stok'),
      				'harga_satuan' => $this->input->post('harga_satuan'),
      				'barang' => $this->input->post('barang'),
            );

            $item_id = $this->Model_item->add_item($params);
            redirect('item/index');
        }
        else
        {
            $data['_view'] = 'item/add';
            $this->load->view('layouts/main',$data);
        }
    }


    function edit($id)
    {
          $data['item'] = $this->Model_item->get_item($id);

          if(isset($data['item']['id']))
          {
              $this->load->library('form_validation');

        $this->form_validation->set_rules('unit','Unit','required|max_length[255]');
        $this->form_validation->set_rules('nama_item','Nama Item','required|max_length[255]');
        $this->form_validation->set_rules('stok','Stok','required|integer');
        $this->form_validation->set_rules('harga_satuan','Harga Satuan','required|integer');
        $this->form_validation->set_rules('barang','Barang','required');

        if($this->form_validation->run())
            {
                $params = array(
					'unit' => $this->input->post('unit'),
					'nama_item' => $this->input->post('nama_item'),
					'stok' => $this->input->post('stok'),
					'harga_satuan' => $this->input->post('harga_satuan'),
					'barang' => $this->input->post('barang'),
                );

                $this->Model_item->update_item($id,$params);
                redirect('item/index');
            }
            else
            {
                $data['_view'] = 'item/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The item you are trying to edit does not exist.');
    }

    function remove($id)
    {
        $item = $this->Model_item->get_item($id);

        if(isset($item['id']))
        {
            $this->Model_item->delete_item($id);
            redirect('item/index');
        }
        else
            show_error('The item you are trying to delete does not exist.');
    }


}
