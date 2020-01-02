<?php

class Pelanggan extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Pelanggan';
        $data['plg'] = $this->model('Pelanggan_model')->getAllPelanggan();
        $this->view('templates/header', $data);
        $this->view('pelanggan/index', $data);
        $this->view('templates/footer');
    }

    public function detail($kd_pelanggan)
    {
        $data['judul'] = 'Detail Pelanggan';
        $data['plg'] = $this->model('Pelanggan_model')->getPelangganByKd($kd_pelanggan);
        $this->view('templates/header', $data);
        $this->view('pelanggan/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Pelanggan_model')->tambahDataPelanggan($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location:' . BASEURL . '/pelanggan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location:' . BASEURL . '/pelanggan');
            exit;
        }
    }

    public function hapus($kd_pelanggan)
    {
        if ($this->model('Pelanggan_model')->hapusDataPelanggan($kd_pelanggan) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location:' . BASEURL . '/pelanggan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location:' . BASEURL . '/pelanggan');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Pelanggan_model')->getPelangganByKd($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model('Pelanggan_model')->ubahDataPelanggan($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location:' . BASEURL . '/pelanggan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location:' . BASEURL . '/pelanggan');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Pelanggan';
        $data['plg'] = $this->model('Pelanggan_model')->cariDataPelanggan();
        $this->view('templates/header', $data);
        $this->view('pelanggan/index', $data);
        $this->view('templates/footer');
    }
}
