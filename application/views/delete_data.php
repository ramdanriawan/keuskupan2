<?php 
$_GET = $this->libraries->escape_array($_GET);
extract($_GET);

$this->db->where("id", $id);

if($this->db->delete($table))
{
	$this->session->set_flashdata("pesan_insert", "Berhasil mendelete data dari $table dengan id $id");
}else 
{
	$this->session->set_flashdata("pesan_insert", "Gagal mendelete data dari $table dengan id $id");
}

location("setting#$table");

 ?>