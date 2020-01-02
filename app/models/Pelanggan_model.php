<?php

class Pelanggan_model
{
    private $table = 'pelanggan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPelanggan()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPelangganByKd($kd_pelanggan)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE kd_pelanggan=:kd_pelanggan');
        $this->db->bind('kd_pelanggan', $kd_pelanggan);
        return $this->db->single();
    }

    public function tambahDataPelanggan($data)
    {
        $query = "INSERT INTO pelanggan
                    VALUES
                    (:kd_pelanggan,:nama_pelanggan,:alamat,:telp)";

        $this->db->query($query);
        $this->db->bind('kd_pelanggan', $data['kd_pelanggan']);
        $this->db->bind('nama_pelanggan', $data['nama_pelanggan']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('telp', $data['telp']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataPelanggan($kd_pelanggan)
    {
        $query = "DELETE FROM pelanggan WHERE kd_pelanggan=:kd_pelanggan";
        $this->db->query($query);
        $this->db->bind('kd_pelanggan', $kd_pelanggan);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataPelanggan($data)
    {
        $query = "UPDATE pelanggan SET
                    kd_pelanggan = :kd_pelanggan,
                    nama_pelanggan = :nama_pelanggan,
                    alamat = :alamat,
                    telp = :telp
                    WHERE kd_pelanggan = :kd_pelanggan";

        $this->db->query($query);
        $this->db->bind('kd_pelanggan', $data['kd_pelanggan']);
        $this->db->bind('nama_pelanggan', $data['nama_pelanggan']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('telp', $data['telp']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataPelanggan()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM pelanggan WHERE nama_pelanggan LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
