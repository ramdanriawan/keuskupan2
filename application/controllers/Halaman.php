<?php 

 class Halaman extends CI_Controller
 {
 	
 	function index()
 	{
        header('Location: Halaman/login');
 	}

 	function login()
 	{
 		$this->load->view("login");
 	}

 	function list_kepala_keluarga()
 	{
 		$this->load->view("list_kepala_keluarga");
 	}

 	function list_anggota_keluarga()
 	{
 		$this->load->view("list_anggota_keluarga");
 	}

 	function test()
 	{
 		$this->load->view("test");
 	}

 	function user()
 	{
 		$this->load->view("user");
 	}
    
    function insert()
    {
        $this->load->view("insert");
    }

    function admin()
    {
    	$this->load->view("admin");
    }

    function list_anggota_keluarga_admin()
    {
    	$this->load->view("list_anggota_keluarga_admin");
    }

    function edit_anggota_keluarga_user()
    {
    	$this->load->view("edit_anggota_keluarga_user");
    }

    function cari()
    {
        $this->load->view("cari");
    }

    function edit_kepala_keluarga_admin()
    {
        $this->load->view("edit_kepala_keluarga_admin");
    }

    function edit_anggota_keluarga_admin()
    {
        $this->load->view("edit_anggota_keluarga_admin");
    }
    
    function setting()
    {
        $this->load->view("setting");
    }
    
    function tambah_data()
    {
        $this->load->view("tambah_data");
    }
    
    function form_tambah_data()
    {
        $this->load->view("form_tambah_data");
    }

    function form_edit_data()
    {
        $this->load->view("form_edit_data");
    }

    function edit_data()
    {
        $this->load->view("edit_data");
    }

    function delete_data()
    {
        $this->load->view("delete_data");
    }
    
    function report()
    {
        $this->load->view("report");
    }

 }

 ?>