<?php
class Halaman_model
{
    private $table;
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getHalamanData()
    {
        $query = "SELECT * FROM content";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
    }
}
