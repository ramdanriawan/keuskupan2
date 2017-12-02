
<?php 
if($_POST["table"] == "list_anggota_keluarga" && $_POST["media"] == "edit_anggota_keluarga_user")
{
	unset($_POST["table"]);
	unset($_POST["media"]);

	$this->db->where("id", $_POST["id"]);

	if($this->db->update("list_anggota_keluarga", $_POST))
	{
		setcookie("pesan_insert", "Berhasil Melakukan Edit Data !", time() + 1000000, "/");
		header("Location: user");
	}
	else
	{
		setcookie("pesan_insert", "Gagal Melakukan Edit Data !", time() + 1000000, "/");
		header("Location: user");
	}

}
elseif($_POST["table"] == "list_anggota_keluarga" && $_POST["media"] == "edit_anggota_keluarga_admin")
{
	unset($_POST["table"]);
	unset($_POST["media"]);

	$this->db->where("id", $_POST["id"]);

	if($this->db->update("list_anggota_keluarga", $_POST))
	{
		setcookie("pesan_insert", "Berhasil Melakukan Edit Data !", time() + 1000000, "/");
		header("Location: list_anggota_keluarga_admin?id_anggota_keluarga=$_POST[id_anggota_keluarga]");
	}
	else
	{
		setcookie("pesan_insert", "Gagal Melakukan Edit Data !", time() + 1000000, "/");
		header("Location: list_anggota_keluarga_admin?id_anggota_keluarga=$_POST[id_anggota_keluarga]");
	}

}
elseif($_POST["table"] == "list_anggota_keluarga" && $_POST["media"] == "edit_admin")
{
	unset($_POST["table"]);
	unset($_POST["media"]);

	setcookie("id_anggota_keluarga_edit",  $_POST["id_anggota_keluarga_edit"], time() + 1000000, "/");
	setcookie("id_edit",  $_POST["id_edit"], time() + 1000000, "/");
	unset($_POST["id_anggota_keluarga_edit"]);
	unset($_POST["id_edit"]);

	$this->db->where("id", $_GET["id"]);

	if($this->db->update("list_anggota_keluarga", $_POST))
	{
		setcookie("pesan_insert", "Berhasil Melakukan Edit Data !", time() + 1000000, "/");
		header("Location: list_anggota_keluarga_admin?id_anggota_keluarga=$_GET[id_anggota_keluarga]");
	}
	else
	{
		setcookie("pesan_insert", "Gagal Melakukan Edit Data !", time() + 1000000, "/");
		header("Location: list_anggota_keluarga_admin?id_anggota_keluarga=$_GET[id_anggota_keluarga]");
	}

}
elseif($_GET["table"] == "list_anggota_keluarga" && $_GET["media"] == "delete")
{

	$this->db->where("id", $_GET["id"]);

	if($this->db->delete("list_anggota_keluarga"))
	{
		setcookie("pesan_insert", "Berhasil Melakukan Penghapusan Data !", time() + 1000000, "/");
		header("Location: list_anggota_keluarga_admin?id_anggota_keluarga=$_GET[id_anggota_keluarga]");
	}
	else
	{
		setcookie("pesan_insert", "Gagal Melakukan Penghapusan Data !", time() + 1000000, "/");
		header("Location: list_anggota_keluarga_admin?id_anggota_keluarga=$_GET[id_anggota_keluarga]");
	}
}

elseif($_POST["table"] == "list_anggota_keluarga" && $_POST["media"] == "tambah_anggota_keluarga_admin" && $_POST["id_anggota_keluarga"])
{
	unset($_POST["table"]);
	unset($_POST["media"]);

	foreach ($_POST as $key => $value) {
		if(!$_POST["$key"])
		{
			setcookie("pesan_insert", "Semua Form Wajib diisi", time() + 1000000, "/");
		}
	}
	
	if($_FILES["foto_profile"]["size"] > 1024000)
	{
		setcookie("pesan_insert", "Ukuran Maksimal File Upload Adalah 1MB", time() + 1000000, "/");
		header("Location: list_anggota_keluarga_admin?id_anggota_keluarga=$_POST[id_anggota_keluarga]");
	}elseif(!preg_match("/image/", $_FILES["foto_profile"]["type"]))
	{
		setcookie("pesan_insert", "File Yang Di Upload Haruslah Berupa Gambar !", time() + 1000000, "/");
		header("Location: list_anggota_keluarga_admin?id_anggota_keluarga=$_POST[id_anggota_keluarga]");
	}else 
	{
		if(!move_uploaded_file($_FILES["foto_profile"]["tmp_name"], $this->config->item("base_path") . "foto_profile/{$_FILES["foto_profile"]["name"]}"))
		{
			setcookie("pesan_insert", "Gagal Memindahkan File Upload", time() + 1000000, "/");
			header("Location: list_anggota_keluarga_admin?id_anggota_keluarga=$_POST[id_anggota_keluarga]");
		}else 
		{
			$_POST["foto_profile"] = $this->config->item("base_url") . "foto_profile/{$_FILES["foto_profile"]["name"]}";
			
			if($this->db->insert("list_anggota_keluarga", $_POST))
			{
				setcookie("pesan_insert", "Berhasil Menambah Data Anggota Keluarga", time() + 1000000, "/");
				header("Location: list_anggota_keluarga_admin?id_anggota_keluarga=$_POST[id_anggota_keluarga]");
			}
		}
	}

}
elseif($_POST["table"] == "list_anggota_keluarga")
{
	$_POST["id_anggota_keluarga"] = $_COOKIE["id_anggota_keluarga"];
	unset($_POST["table"]);
	
	if($_FILES["foto_profile"]["size"] > 1024000)
	{
		setcookie("pesan_insert", "Maksimal Ukuran File Upload Adalah 1MB", time() + 1000000, "/");
		header("Location: user");
	}elseif(!preg_match("/image/", $_FILES["foto_profile"]["type"]))
	{
		setcookie("pesan_insert", "File Yang Dapat Diupload Hanyalah Bertipe Image", time() + 1000000, "/");
		header("Location: user");
	}else 
	{
		if(!move_uploaded_file($_FILES["foto_profile"]["tmp_name"], $this->config->item("base_path") . "foto_profile/{$_FILES["foto_profile"]["name"]}"))
		{
			setcookie("pesan_insert", "Gagal Memindahkan File ke Directory Foto Profile", time() + 1000000, "/");
			header("Location: user");
		}else 
		{
			$_POST["foto_profile"] = $this->config->item("base_url") . "foto_profile/{$_FILES["foto_profile"]["name"]}";
			
			foreach ($_POST as $key => $value) {
				if($_POST["$key"] || empty($_POST["$key"]))
				{
					setcookie("pesan_insert", "Semua Field Wajib Diisi", time() + 1000000, "/");
					header("Location: user");
				}
			}
			
			if($this->db->insert("list_anggota_keluarga", $_POST))
			{
				setcookie("pesan_insert", "Berhasil Menambah Anggota Keluarga", time() + 1000000, "/");
				header("Location: user");
			}else
			{
				setcookie("pesan_insert", "Gagal Menambah Anggota Keluarga", time() + 1000000, "/");
				header("Location: user");
			}
		}
	}
}


 ?>