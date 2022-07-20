<?php
class M_dashboard extends CI_Model
{

    function tampil_data()
    {
        return $this->db->get('monitoring');
    }

    function insert_data($data)
    {
        return $this->db->insert('monitoring', $data);
    }

    function edit_data($where)
    {
        return $this->db->get_where('monitoring', $where);
    }

    function update_data($data, $where)
    {
        $this->db->where($where);
        $this->db->update('monitoring', $data);
    }

    function hapus_data($where)
    {
        $this->db->where($where);
        $this->db->delete('monitoring');
    }
}
