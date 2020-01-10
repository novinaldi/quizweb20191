<?php
class Modellogin extends CI_Model
{
    function cekuseradmin($iduser)
    {
        return $this->db->get_where('admin0910169', array('adminid0910169' => $iduser));
    }

    function cekuserregistrasi($iduser)
    {
        return $this->db->get_where('reg0910169', array('reguserid0910169' => $iduser));
    }
}
