<?php


class Model_customer extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_customer($ID)
    {
        return $this->db->get_where('customer',array('id'=>$ID))->row_array();
    }

    function get_all_customer()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('customer')->result_array();
    }

    function add_customer($params)
    {
        $this->db->insert('customer',$params);
        return $this->db->insert_id();
    }

    function update_customer($ID,$params)
    {
        $this->db->where('id',$ID);
        return $this->db->update('customer',$params);
    }

    function delete_customer($ID)
    {
        return $this->db->delete('customer',array('id'=>$ID));
    }
}
