<?php

class ExampleModal
{
    // private $table = 'table_name';
    // private $db;

    // public function __construct()
    // {
    //     $this->db = new Database;
    // }

    // public function get()
    // {
    //     $this->db->query('SELECT * FROM ' . $this->table);
    //     return $this->db->resultSet();
    // }

    // public function find($id)
    // {
    //     $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    //     $this->db->bind('id', $id);
    //     return $this->db->single();
    // }

    // public function create($data)
    // {
    //     $query = "INSERT INTO " . $this->table . " VALUES ('', :nim, :nama, :jurusan, :email)";

    //     $this->db->query($query);
    //     $this->db->bind('nim', $data['nim']);
    //     $this->db->bind('nama', $data['nama']);
    //     $this->db->bind('jurusan', $data['jurusan']);
    //     $this->db->bind('email', $data['email']);

    //     $this->db->execute();

    //     return $this->db->rowCount();
    // }

    // public function update($id, $data)
    // {
    //     $query = "UPDATE " . $this->table . " SET nim=:nim, nama=:nama, jurusan=:jurusan, email=:email WHERE id=:id";

    //     $this->db->query($query);
    //     $this->db->bind('id', $id);
    //     $this->db->bind('nim', $data['nim']);
    //     $this->db->bind('nama', $data['nama']);
    //     $this->db->bind('jurusan', $data['jurusan']);
    //     $this->db->bind('email', $data['email']);

    //     $this->db->execute();

    //     return $this->db->rowCount();        
    // }

    // public function delete($id)
    // {
    //     $query = "DELETE FROM " . $this->table . " WHERE id=:id";

    //     $this->db->query($query);
    //     $this->db->bind('id', $id);
        
    //     $this->db->execute();

    //     return $this->db->rowCount();
    // }

}