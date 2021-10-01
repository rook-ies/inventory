<?php

class Model_sales extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_saleS($code_transaksi)
    {
        return $this->db->get_where('sales',array('code_transaksi'=>$code_transaksi))->row_array();
    }


    function get_all_sales()
    {
        $this->db->order_by('code_transaksi', 'desc');
        return $this->db->get('sales')->result_array();
    }


    function add_sales($params)
    {
        $this->db->insert('sales',$params);
        return $this->db->insert_id();
    }


    function update_sales($code_transaksi,$params)
    {
        $this->db->where('code_transaksi',$code_transaksi);
        return $this->db->update('sales',$params);
    }


    function delete_sales($code_transaksi)
    {
        return $this->db->delete('sales',array('code_transaksi'=>$code_transaksi));
    }
}
