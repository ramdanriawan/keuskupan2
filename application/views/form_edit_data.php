<?php include "header.php" ?>


<div class="content-wrapper">
	<!-- Page header -->
	<div class="page-header page-header-default">
		<div class="page-header-content">
			<div class="page-title">
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Edit Data <?php echo ucwords(str_replace("_", " ", $_GET["table"])); ?></h4>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form action="edit_data" method="post">
					
					<!-- Jika Media Yang Akan Di Edit Adalah Agama -->
					<?php if($_GET["table"] == "agama"): ?>
					<?php $query = $this->db->query("select * from agama where id = $_GET[id]")->row(); ?>
					<div class="form-group">
						<input class="form-control" type="" name="agama" placeholder="Agama" required value="<?php echo $query->agama; ?>">	
					</div>

					<input type="hidden" name="table" value="agama">
					<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">

					<!-- jika media yang akan diedit adalah status perkawinan -->
					<?php elseif($_GET["table"] == "status_perkawinan"): ?>
					<?php $query = $this->db->query("select * from status_perkawinan where id = $_GET[id]")->row(); ?>
					<div class="form-group">
						<input class="form-control" type="" name="status_perkawinan" placeholder="Status Perkawinan" required value="<?php echo $query->status_perkawinan; ?>">	
					</div>

					<input type="hidden" name="table" value="status_perkawinan">
					<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
					
					<!-- Jika media yang akan diedit adlah kondisi ekonomi -->
					<?php elseif($_GET["table"] == "kondisi_ekonomi"): ?>
					<?php $query = $this->db->query("select * from kondisi_ekonomi where id = $_GET[id]")->row(); ?>
					<div class="form-group">
						<input class="form-control" type="" name="kondisi_ekonomi" placeholder="Kondisi Ekonomi" required value="<?php echo $query->kondisi_ekonomi; ?>">	
					</div>

					<input type="hidden" name="table" value="kondisi_ekonomi">
					<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">

					
					<!-- Jika media yang akan diedit adlah hubungan dengan kepala rumah tangga -->
					<?php elseif($_GET["table"] == "hub_dngn_kepala_rt"): ?>
					<?php $query = $this->db->query("select * from hub_dngn_kepala_rt where id = $_GET[id]")->row(); ?>
					<div class="form-group">
						<input class="form-control" type="" name="hub_dngn_kepala_rt" placeholder="Hubungan Dengan Kepala Rt" required value="<?php echo $query->hub_dngn_kepala_rt; ?>">	
					</div>

					<input type="hidden" name="table" value="hub_dngn_kepala_rt">
					<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">

					<!-- Jika media yang akan diedit adlah kode suku bangsa -->
					<?php elseif($_GET["table"] == "kode_suku_bangsa"): ?>
					<?php $query = $this->db->query("select * from kode_suku_bangsa where id = $_GET[id]")->row(); ?>
					<div class="form-group">
						<input class="form-control" type="" name="etnis" placeholder="Etnis Kode Suku Bangsa" required value="<?php echo $query->etnis; ?>">	
					</div>

					<input type="hidden" name="table" value="kode_suku_bangsa">
					<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">

					<!-- Jika media yang akan diedit adlah Pendidikan -->
					<?php elseif($_GET["table"] == "pendidikan"): ?>
					<?php $query1 = $this->db->query("select * from pendidikan where id = $_GET[id]")->row(); ?>
					<div class="form-group">
						<input class="form-control" type="" name="pendidikan" placeholder="Pendidikan" required value="<?php echo $query1->pendidikan; ?>">	
					</div>
					<div class="form-group">
						<select class="form-control" required name="kategory">
							<option value="">--Kategory--</option>

							<?php 

							$query = $this->db->query('select distinct kategory from pendidikan');


							foreach ($query->result() as $key => $value) {
								$kategory = ucwords(str_replace("_", " ", $value->kategory));

								$selected = $value->kategory == $query1->kategory ? "selected": "";
								
								echo "<option value='$value->kategory' $selected>$kategory</option>";
							}
							 ?>
						</select>	
					</div>

					<input type="hidden" name="table" value="pendidikan">
					<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">

					<!-- khusus untuk tabel bidang studi -->
					<?php elseif($_GET["table"] == "kode_bidang_studi"): ?>
					<?php $query = $this->db->query("select * from kode_bidang_studi where id = $_GET[id]")->row(); ?>
					<div class="form-group">
						<input class="form-control" type="" name="bidang_studi" placeholder="Kode Bidang Studi" required value="<?php echo $query->bidang_studi; ?>">
					</div>

					<input type="hidden" name="table" value="kode_bidang_studi">
					<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">



					<!-- Jika media yang akan diedit adlah kode pekerjaan -->
					<?php elseif($_GET["table"] == "kode_pekerjaan"): ?>
					<?php $query1 = $this->db->query("select * from kode_pekerjaan where id = $_GET[id]")->row(); ?>
					<div class="form-group">
						<input class="form-control" type="" name="jenis_pekerjaan" placeholder="Jenis Pekerjaan" required value="<?php echo $query1->jenis_pekerjaan; ?>">	
					</div>
					<div class="form-group">
						<input class="form-control" type="" name="kode" required placeholder="Kode" value="<?php echo $query1->kode; ?>">	
					</div>

					<input type="hidden" name="table" value="kode_pekerjaan">
					<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">

					<!-- Jika media yang akan diedit adlah status kesehatan -->
					<?php elseif($_GET["table"] == "status_kesehatan"): ?>
					<?php $query1 = $this->db->query("select * from status_kesehatan where id = $_GET[id]")->row(); ?>
					<div class="form-group">
						<input class="form-control" type="" name="status_kesehatan" placeholder="Status Kesehatan" required value="<?php echo $query1->status_kesehatan; ?>">	
					</div>
					<div class="form-group">
						<input class="form-control" type="" name="kode" required placeholder="Kode" value="<?php echo $query1->kode; ?>">	
					</div>

					<input type="hidden" name="table" value="status_kesehatan">
					<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">

					<!-- Jika media yang akan diedit adlah wkatu baptis -->
					<?php elseif($_GET["table"] == "waktu_baptis"): ?>
					<?php $query1 = $this->db->query("select * from waktu_baptis where id = $_GET[id]")->row(); ?>
					<div class="form-group">
						<input class="form-control" type="" name="waktu_baptis" placeholder="Waktu Baptis" required value="<?php echo $query1->waktu_baptis; ?>">	
					</div>

					<input type="hidden" name="table" value="waktu_baptis">
					<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">


					<!-- Jika media yang akan diedit adlah di luar paroki -->
					<?php elseif($_GET["table"] == "di_luar_paroki"): ?>
					<?php $query1 = $this->db->query("select * from di_luar_paroki where id = $_GET[id]")->row(); ?>
					<div class="form-group">
						<input class="form-control" type="" name="di_luar_paroki" placeholder="Di Luar Paroki" required value="<?php echo $query1->di_luar_paroki; ?>">	
					</div>
					<div class="form-group">
						<input class="form-control" type="" name="kode" required placeholder="Kode" value="<?php echo $query1->kode; ?>">	
					</div>

					<input type="hidden" name="table" value="di_luar_paroki">
					<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">

					<!-- Jika media yang akan diedit adlah di luar paroki -->
					<?php elseif($_GET["table"] == "kode_keuskupan"): ?>
					<?php $query1 = $this->db->query("select * from kode_keuskupan where id = $_GET[id]")->row(); ?>
					<div class="form-group">
						<input class="form-control" type="" name="nama_keuskupan" placeholder="Nama Keuskupan" required value="<?php echo $query1->nama_keuskupan; ?>">	
					</div>
					<div class="form-group">
						<input class="form-control" type="" name="kode" required placeholder="Kode" value="<?php echo $query1->kode; ?>">	
					</div>

					<input type="hidden" name="table" value="kode_keuskupan">
					<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">

					<!-- Jika media yang akan diedit adlah keuskupan lainnya -->
					<?php elseif($_GET["table"] == "keuskupan_lainnya"): ?>
					<?php $query1 = $this->db->query("select * from keuskupan_lainnya where id = $_GET[id]")->row(); ?>
					<div class="form-group">
						<input class="form-control" type="" name="lainnya" placeholder="Keuskupan Lainnya" required value="<?php echo $query1->lainnya; ?>">	
					</div>

					<input type="hidden" name="table" value="keuskupan_lainnya">
					<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">

					<!-- Jika media yang akan diedit adlah Status keterlibatan -->
					<?php elseif($_GET["table"] == "keterlibatan"): ?>
					<?php $query1 = $this->db->query("select * from keterlibatan where id = $_GET[id]")->row(); ?>
					<div class="form-group">
						<input class="form-control" type="" name="keterlibatan" placeholder="Keterlibatan" required value="<?php echo $query1->keterlibatan; ?>">	
					</div>

					<input type="hidden" name="table" value="keterlibatan">
					<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">

					<!-- Jika media yang akan diedit adlah wilayah -->
					<?php elseif($_GET["table"] == "wilayah"): ?>
					<?php $query1 = $this->db->query("select * from wilayah where id = $_GET[id]")->row(); ?>
					<div class="form-group">
						<input class="form-control" type="" name="wilayah" placeholder="Wilayah" required value="<?php echo $query1->wilayah; ?>">	
					</div>

					<input type="hidden" name="table" value="wilayah">
					<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
					<?php endif; ?>

					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<button class="btn btn-primary btn-block" type="submit">
									<span class="glyphicon glyphicon-saved"></span>
									Simpan Data
								</button>
							</div>

							<div class="col-md-6">
								<button class="btn btn-warning btn-block" type="reset">
									<span class="glyphicon glyphicon-refresh"></span>
									Reset
								</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php include "footer.php" ?>
<?php 

if($this->session->flashdata("pesan_insert") != "")
{
	alert($this->session->flashdata("pesan_insert"));
}

 ?>