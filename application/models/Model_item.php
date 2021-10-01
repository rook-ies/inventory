<?php

class Model_item extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    function get_item($ID)
    {
        return $this->db->get_where('item',array('id'=>$ID))->row_array();
    }


    function get_all_item()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('item')->result_array();
    }


    function add_item($params)
    {
        $this->db->insert('item',$params);
        return $this->db->insert_id();
    }


    function update_item($ID,$params)
    {
        $this->db->where('id',$ID);
        return $this->db->update('item',$params);
    }

    function delete_item($ID)
    {
        return $this->db->delete('item',array('id'=>$ID));
    }
}
