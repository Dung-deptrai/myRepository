<?php
class Project_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function loginUser($params = null)
    {
        $sql = "SELECT * FROM `user` WHERE `userName` = ? AND `passWord` = ?";
        $query = $this->db->query($sql, array($params["userName"], $params["passWord"]));
        $result = array();
        $result = ["status" => "403", "message" => "Failed", "data" => null];
        if ($query->num_rows() > 0) {
            $result = ["status" => "200", "message" => "Success", "data" => $query->row_array()];
        }

        return $result;
    }

    public function listMedicine($httpRequest = null)
    {
        $id = ($httpRequest != null && !empty($httpRequest)) ? "WHERE `statusMedicine` ='" . $httpRequest["statusMedicine"] . "'" : "";
        $sql = "SELECT * FROM `list_medicine` $id";
        $query = $this->db->query($sql);
        $result = ["status" => "403", "message" => "Failed", "data" => null];

        if ($query->num_rows() > 0) {
            // $resultQuery = ($id == "") ? $query->result_array() : [$query->row_array()];
            $result = ["status" => "200", "message" => "Success", "data" => $query->result_array()];
        }
        return $result;
    }
}
