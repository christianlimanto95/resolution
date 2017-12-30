<?php

class Home_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function submit_resolution($data) {
        $this->db->insert("item", $data);
        return $this->db->insert_id();
    }

    function get_resolution($item_id) {
        $this->db->where("resolution_id", $item_id);
        return $this->db->get("item")->result();
    }
}
