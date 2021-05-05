<?php
class Library
{
    public function __construct()
    {
        $host = "localhost";
        $dbname = "database_user";
        $username = "root";
        $password = "";
        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    }
    public function add_data($semester, $ipk)
    {
        $data = $this->db->prepare('INSERT INTO tb_ipk (semester, ipk) VALUES (?, ?)');
        
        $data->bindParam(1, $semester);
        $data->bindParam(2, $ipk);

        $data->execute();
        return $data->rowCount();
    }
    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM tb_ipk");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

    public function get_by_id($semester){
        $query = $this->db->prepare("SELECT * FROM tb_ipk where semester=?");
        $query->bindParam(1, $semester);
        $query->execute();
        return $query->fetch();
    }

    public function update($semester, $ipk){
        $query = $this->db->prepare('UPDATE tb_ipk set semester=?,ipk=? where semester=?');
        
        $query->bindParam(1, $semester);
        $query->bindParam(2, $ipk);
        
        $query->execute();
        return $query->rowCount();
    }

    public function delete($kd_siswa)
    {
        $query = $this->db->prepare("DELETE FROM tb_siswa where kd_siswa=?");

        $query->bindParam(1, $kd_siswa);

        $query->execute();
        return $query->rowCount();
    }

}
?>