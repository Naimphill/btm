<?php
class Adminpanel extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mcrud');
        $this->cek_login();
    }
    public function cek_login()
    {
        if (empty($this->session->userdata('username'))) {
            redirect('Login');
        }
    }
    public function index()
    {
        // cek login
        $data['content'] = "adminpanel";
        $data['olah_barang'] = $this->Mcrud->get_all_data('tbl_data_barang')->result();
        $data['kategori'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
        $data['admin'] = $this->Mcrud->get_all_data('tbl_admin')->result();
        $data['barang'] = $this->Mcrud->get_all_data('tbl_barang')->result();

        //load view
        $this->load->view('template', $data);
    }
    public function admin()
    {
        // cek login
        $data['content'] = "admin";
        $data['admin'] = $this->Mcrud->get_all_data('tbl_admin')->result();

        //load view
        $this->load->view('template', $data);
    }
    public function add_admin()
    {
        // Get Data
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        // cek login
        // save data
        $datainsert = array(
            'username' => $username,
            'password' => $password
        );

        // Update data ke tabel
        $this->Mcrud->insert('tbl_admin', $datainsert);
        $this->session->set_flashdata('flash', 'Disimpan');
        redirect('Adminpanel/admin');
    }
    public function edit_admin()
    {
        // Get Data
        $id_admin = $_POST['id_admin'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        // cek login
        // save data
        $datainsert = array(
            'username' => $username,
            'password' => $password
        );

        // Update data ke tabel
        $this->Mcrud->update('tbl_admin', $datainsert, 'id_admin', $id_admin);
        $this->session->set_flashdata('flash', 'Disimpan');
        redirect('Adminpanel/admin');
    }
    public function hapus_admin($id)
    {
        $datawhere = array('id_admin' => $id);
        $data['admin'] = $this->Mcrud->hapus_data($datawhere, 'tbl_admin');
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Adminpanel/admin');
    }


    public function kategori()
    {
        // cek login
        $data['content'] = "kategori";
        $data['kategori'] = $this->Mcrud->get_all_data('tbl_kategori')->result();

        //load view
        $this->load->view('template', $data);
    }
    public function add_kategori()
    {
        // Get Data
        $nm_kategori = $_POST['nm_kategori'];
        // cek login
        // save data
        $datainsert = array(
            'nm_kategori' => $nm_kategori
        );

        // Update data ke tabel
        $this->Mcrud->insert('tbl_kategori', $datainsert);
        $this->session->set_flashdata('flash', 'Disimpan');
        redirect('Adminpanel/kategori');
    }
    public function edit_kategori()
    {
        // Get Data
        $id_kategori = $_POST['id_kategori'];
        $nm_kategori = $_POST['nm_kategori'];
        // cek login
        // save data
        $datainsert = array(
            'nm_kategori' => $nm_kategori
        );

        // Update data ke tabel
        $this->Mcrud->update('tbl_kategori', $datainsert, 'id_kategori', $id_kategori);
        $this->session->set_flashdata('flash', 'Disimpan');
        redirect('Adminpanel/kategori');
    }
    public function hapus_kategori($id)
    {
        $datawhere = array('id_kategori' => $id);
        $data['kategori'] = $this->Mcrud->hapus_data($datawhere, 'tbl_kategori');
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Adminpanel/kategori');
    }
    public function barang()
    {
        // Load Data
        $data['content'] = "barang";
        $data['barang'] = $this->Mcrud->get_all_data('tbl_barang')->result();
        $data['kategori'] = $this->Mcrud->get_all_data('tbl_kategori')->result();

        //load view
        $this->load->view('template', $data);
    }
    public function add_barang()
    {
        // Get Data
        $nm_barang = $_POST['nm_barang'];
        $id_kategori = $_POST['id_kategori'];
        $keterangan = $_POST['keterangan'];
        $stok = $_POST['stok'];
        $harga = $_POST['harga'];

        //setting file foto
        $data_file = $_FILES['foto'];
        $config['file_name'] = time() . $data_file['name'];
        $config['upload_path'] = './upload_gambar/';
        $config['allowed_types'] = 'jpg|png|jpeg|PNG';
        $config['max_size'] = 2048;

        $this->load->library('upload', $config);

        //foto
        $this->upload->do_upload('foto');
        $data = $this->upload->data();
        $foto = $data['file_name'];
        // save data
        $datainsert = array(
            'nm_barang' => $nm_barang,
            'id_kategori' => $id_kategori,
            'keterangan' => $keterangan,
            'stok' => $stok,
            'harga' => $harga,
            'foto' => $foto
        );

        // Update data ke tabel
        $this->Mcrud->insert('tbl_barang', $datainsert);
        $this->session->set_flashdata('flash', 'Disimpan');
        redirect('Adminpanel/barang');
    }
    public function edit_barang()
    {
        // Get Data
        $id_barang = $_POST['id_barang'];
        $nm_barang = $_POST['nm_barang'];
        $id_kategori = $_POST['id_kategori'];
        $keterangan = $_POST['keterangan'];
        $stok = $_POST['stok'];
        $harga = $_POST['harga'];
        //setting file foto
        $data_file = $_FILES['foto'];
        $config['file_name'] = time() . $data_file['name'];
        $config['upload_path'] = './upload_gambar/';
        $config['allowed_types'] = 'jpg|png|jpeg|PNG';
        $config['max_size'] = 2048;

        $this->load->library('upload', $config);

        //foto
        if ($this->upload->do_upload('foto')) {
            $data = $this->upload->data();
            $foto = $data['file_name'];
            // save data
            $datainsert = array(
                'nm_barang' => $nm_barang,
                'id_kategori' => $id_kategori,
                'keterangan' => $keterangan,
                'stok' => $stok,
                'harga' => $harga,
                'foto' => $foto
            );
        } else {
            // Get Data
            $id_barang = $_POST['id_barang'];
            $nm_barang = $_POST['nm_barang'];
            $id_kategori = $_POST['id_kategori'];
            $keterangan = $_POST['keterangan'];
            $stok = $_POST['stok'];
            // save data
            $datainsert = array(
                'nm_barang' => $nm_barang,
                'id_kategori' => $id_kategori,
                'keterangan' => $keterangan,
                'stok' => $stok,
                'harga' => $harga
            );
        }

        // Update data ke tabel
        $this->Mcrud->update('tbl_barang', $datainsert, 'id_barang', $id_barang);
        $this->session->set_flashdata('flash', 'Disimpan');
        redirect('Adminpanel/barang');
    }
    public function hapus_barang($id)
    {
        $datawhere = array('id_barang' => $id);
        $data['barang'] = $this->Mcrud->hapus_data($datawhere, 'tbl_barang');
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Adminpanel/barang');
    }
    public function olah_barang()
    {
        // cek login
        $data['content'] = "olah_barang";
        $data['kat'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
        $data['barang'] = $this->Mcrud->get_all_data('tbl_barang')->result();
        $data['olah_barang'] = $this->Mcrud->get_all_data('tbl_data_barang')->result();

        //load view
        $this->load->view('template', $data);
    }
    public function add_data_barang()
    {
        // get data
        $id_barang = $_POST['id_barang'];
        $jumlah = $_POST['jumlah'];
        $data_b = $_POST['data_b'];
        // save data
        $datainsert = array(
            'id_barang' => $id_barang,
            'jumlah' => $jumlah,
            'data' => $data_b
        );
        $this->Mcrud->insert('tbl_data_barang', $datainsert);

        $this->db->select('stok');
        $this->db->where('id_barang', $id_barang);
        $query = $this->db->get('tbl_barang');


        $row = $query->row();
        $stok_a = $row->stok;


        if ($data_b == 'Barang_masuk') {
            $tot = $stok_a + $jumlah;
            $dataupdate = array(
                'stok' => $tot
            );
            $this->Mcrud->update('tbl_barang', $dataupdate, 'id_barang', $id_barang);
            $this->session->set_flashdata('flash', 'Disimpan');
            redirect('Adminpanel/barang');
        } elseif ($data_b == 'Barang_keluar') {
            $tot = $stok_a - $jumlah;
            $dataupdate = array(
                'stok' => $tot
            );
            $this->Mcrud->update('tbl_barang', $dataupdate, 'id_barang', $id_barang);
            $this->session->set_flashdata('flash', 'Disimpan');
            redirect('Adminpanel/barang');
        }
        // Update data ke tabel 'tbl_seleksi'

    }
    public function get_autocomplete_data()
    {
        $query = $this->input->get('query');
        $data = $data['barang'] = $this->Mcrud->get_all_data('tbl_barang')->result();
        echo json_encode($data);
    }

}