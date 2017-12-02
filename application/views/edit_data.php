<?php 
$table = $_POST["table"];
$id    = $_POST["id"];

unset($_POST["table"]);
unset($_POST["id"]);

$this->db->where("id", $id);
if($this->db->update($table, $_POST))
{
	$this->session->set_flashdata("pesan_insert", "Berhasil Melakukan Pengeditan Data $table");
}else 
{
	$this->session->set_flashdata("pesan_insert", "Gagal Melakukan Pengeditan Data $table");

}

location("form_edit_data?table=$table&id=$id");


 ?>