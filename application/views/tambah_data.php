<?php 

$_POST = $this->libraries->escape_array($_POST);
$table = $_POST["table"];

//simpan datanya sebagai flash data
$this->session->set_flashdata("data_insert", $_POST);

//unset variabel post table untuk menghilangkan dari database
unset($_POST["table"]);

//insert ke database
if($this->db->insert($table, $_POST))
{
	$this->session->set_flashdata("pesan_insert", "Berhasil Menambah Data $table");
}else 
{
	$this->session->set_flashdata("pesan_insert", "Gagal Menambah Data $table");
}

//redirect ke menu setting
location("form_tambah_data?table=$table");





 ?>