<?php extract($_POST); extract($_GET); ?>
<?php include "header.php"; ?>

<div class="content-wrapper">
	<!-- Page header -->
	<div class="page-header page-header-default">
		<div class="page-header-content">
			<div class="page-title">
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Tambah Data <?php echo ucwords(str_replace("_", " ", $_GET["table"])); ?></h4>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
					<form action="tambah_data" method="post">
						
						<!--  khusus data agama -->
						<?php if($table == "agama"): ?>
							<div class='form-group'>
							    <label for='agama'>Agama</label>
							    <input type='' class='form-control input-lg' placeholder='' name="agama" placeholder="agama" required value="<?php echo $this->session->flashdata("data_insert")["agama"]; ?>">
							</div>
							
							<input type="hidden" name="table" value="agama">
						
						<!--  Khusus Data Status Perkawinan -->
						<?php elseif($table == "status_perkawinan"): ?>
							<div class='form-group'>
								<label for='agama'>Status Perkawinan</label>
								<input type='' class='form-control input-lg' placeholder='' name="status_perkawinan" placeholder="agama" required value="<?php echo $this->session->flashdata("data_insert")["status_perkawinan"]; ?>">
							</div>
							
							<input type="hidden" name="table" value="status_perkawinan">
						
						<!--  khusus data Kondisi Ekonomi -->
						<?php elseif($table == "kondisi_ekonomi"): ?>
							<div class='form-group'>
								<label for='kondisi_ekonomi'>Kondisi Ekonomi</label>
								<input type='' class='form-control input-lg' placeholder='' name="kondisi_ekonomi" placeholder="agama" required value="<?php echo $this->session->flashdata("data_insert")["kondisi_ekonomi"]; ?>">
							</div>
							
							<input type="hidden" name="table" value="kondisi_ekonomi">
						
						<!--  khusus data Hubungan Dengan Kepala Rt -->
						<?php elseif($table == "hub_dngn_kepala_rt"): ?>
							<div class='form-group'>
								<label for='hub_dngn_kepala_rt'>Hubungan Dengan Kepala RT</label>
								<input type='' class='form-control input-lg' placeholder='' name="hub_dngn_kepala_rt" placeholder="Hub Dengan Kepala Rt" required value="<?php echo $this->session->flashdata("data_insert")["hub_dngn_kepala_rt"]; ?>">
							</div>
							
							<input type="hidden" name="table" value="hub_dngn_kepala_rt">
						
						<!--  khusus data Kode Suku Bangsa -->
						<?php elseif($table == "kode_suku_bangsa"): ?>
							<div class='form-group'>
								<label for='kode_suku_bangsa'>Kode Suku Bangsa</label>
								<input type='' class='form-control input-lg' placeholder='' name="etnis" placeholder="Kode Suku Bangsa" required value="<?php echo $this->session->flashdata("data_insert")["kode_suku_bangsa"]; ?>">
							</div>
							
							<input type="hidden" name="table" value="kode_suku_bangsa">
						
						<!--  khusus data Pendidikan -->
						<?php elseif($table == "pendidikan"): ?>
							<div class='form-group'>
								<label for='pendidikan'>Pendidikan</label>
								<input type='' class='form-control input-lg' placeholder='' name="pendidikan" placeholder="Pendidikan" required value="<?php echo $this->session->flashdata("data_insert")["pendidikan"]; ?>">
							</div>
							
							<div class="form-group">
								<select class='form-control' name="kategory" required>
								  <option value="">--Kategory--</option>
								  <?php 
								  $query = $this->db->query("select distinct kategory from pendidikan");
								  
								  foreach ($query->result() as $key => $value) {
									 $kategory = ucwords(str_replace("_", " ", $value->kategory));
								  	echo "<option value='$value->kategory'>$kategory</option>";
								  }
								  
								   ?>
								</select>
								
							</div>
							
							<input type="hidden" name="table" value="pendidikan">
							
								
						<!--  khusus data Kode Bidang Studi -->
						<?php elseif($table == "kode_bidang_studi"): ?>
							<div class='form-group'>
								<label for='kode_bidang_studi'>Kode Bidang Studi</label>
								<input type='' class='form-control input-lg' placeholder='' name="bidang_studi" placeholder="Kode Bidang Studi" required value="<?php echo $this->session->flashdata("data_insert")["bidang_studi"]; ?>">
							</div>
							
							<input type="hidden" name="table" value="kode_bidang_studi">
					
								
						<!--  khusus data Kode Pekerjaan -->
						<?php elseif($table == "kode_pekerjaan"): ?>
							<div class='form-group'>
								<label for='jenis_pekerjaan'>Jenis Pekerjaan</label>
								<input type='' class='form-control input-lg' placeholder='' name="jenis_pekerjaan" placeholder="Jenis Pekerjaan" required value="<?php echo $this->session->flashdata("data_insert")["jenis_pekerjaan"]; ?>">
							</div>
							<div class='form-group'>
								<label for='kode_pekerjaan'>Kode Pekerjaan</label>
								<input type='number' class='form-control input-lg' placeholder='' name="kode" placeholder="Kode Pekerjaan" required value="<?php echo $this->session->flashdata("data_insert")["kode"]; ?>" min="1">
							</div>
							
							<input type="hidden" name="table" value="kode_pekerjaan">
								
						<!--  khusus data Status Kesehatan -->
						<?php elseif($table == "status_kesehatan"): ?>
							<div class='form-group'>
								<label for='status_kesehatan'>Status Kesehatan</label>
								<input type='' class='form-control input-lg' placeholder='' name="status_kesehatan" placeholder="Jenis Pekerjaan" required value="<?php echo $this->session->flashdata("data_insert")["status_kesehatan"]; ?>">
							</div>
							<div class='form-group'>
								<label for='kode_kesehatan'>Kode</label>
								<input type='number' class='form-control input-lg' placeholder='' name="kode" placeholder="Kode Status Kesehatan" required value="<?php echo $this->session->flashdata("data_insert")["kode"]; ?>" min="1">
							</div>
							
							<input type="hidden" name="table" value="status_kesehatan">
								
						<!--  khusus data Tempat Tinggal Di Luar Paroki -->
						<?php elseif($table == "di_luar_paroki"): ?>
							<div class='form-group'>
								<label for='di_luar_paroki'>Di Luar Paroki</label>
								<input type='' class='form-control input-lg' placeholder='' name="di_luar_paroki" placeholder="Di Luar Paroki" required value="<?php echo $this->session->flashdata("data_insert")["di_luar_paroki"]; ?>">
							</div>
							<div class='form-group'>
								<label for='kode_di_luar_paroki'>Kode</label>
								<input type='number' class='form-control input-lg' placeholder='' name="kode" placeholder="Kode Di Luar Paroki" required value="<?php echo $this->session->flashdata("data_insert")["kode"]; ?>" min="1">
							</div>
							
							<input type="hidden" name="table" value="di_luar_paroki">
								
						<!--  khusus data Kode Keuskupan -->
						<?php elseif($table == "kode_keuskupan"): ?>
							<div class='form-group'>
								<label for='nama_keuskupan'>Nama Keuskupan</label>
								<input type='' class='form-control input-lg' placeholder='' name="nama_keuskupan" placeholder="Nama Keuskupan" required value="<?php echo $this->session->flashdata("data_insert")["nama_keuskupan"]; ?>">
							</div>
							<div class='form-group'>
								<label for='kode'>Kode</label>
								<input type='number' class='form-control input-lg' placeholder='' name="kode" placeholder="Kode Nama Keuskupan" required value="<?php echo $this->session->flashdata("data_insert")["kode"]; ?>" min="1">
							</div>
							
							<input type="hidden" name="table" value="kode_keuskupan">
							
						<!--  khusus data Keuskupan Lainnya -->
						<?php elseif($table == "keuskupan_lainnya"): ?>
							<div class='form-group'>
								<label for='lainnya'>Nama Keuskupan</label>
								<input type='' class='form-control input-lg' placeholder='' name="lainnya" placeholder="Nama Keuskupan" required value="<?php echo $this->session->flashdata("data_insert")["lainnya"]; ?>">
							</div>
							<div class='form-group'>
								<label for='kode'>Kode</label>
								<input type='number' class='form-control input-lg' placeholder='' name="kode" placeholder="Kode Nama Keuskupan" required value="<?php echo $this->session->flashdata("data_insert")["kode"]; ?>" min="1">
							</div>
							
							<input type="hidden" name="table" value="keuskupan_lainnya">
							
									
						<!--  khusus data Keterlibatan -->
						<?php elseif($table == "keterlibatan"): ?>
							<div class='form-group'>
								<label for='keterlibatan'>Keterlibatan</label>
								<input type='' class='form-control input-lg' placeholder='' name="keterlibatan" placeholder="Keterlibatan" required value="<?php echo $this->session->flashdata("data_insert")["keterlibatan"]; ?>">
							</div>
							
							<input type="hidden" name="table" value="keterlibatan">

						<!--  khusus data wilayah -->
						<?php elseif($table == "wilayah"): ?>
							<div class='form-group'>
								<label for='wilayah'>Wilayah</label>
								<input type='' class='form-control input-lg' placeholder='' name="wilayah" placeholder="wilayah" required value="<?php echo $this->session->flashdata("data_insert")["wilayah"]; ?>">
							</div>
							
							<input type="hidden" name="table" value="wilayah">
					
						<?php endif; ?>
							
						<div class='form-group'>
							<button type="submit" class="btn btn-primary">
								<span  class="glyphicon glyphicon-saved"></span>
								Simpan Data
							</button>
						</div>
					</form>
			</div>
		</div>
	</div>
</div>



<?php include "footer.php"; ?>

<?php 

if($this->session->flashdata("pesan_insert") != "")
{
	alert($this->session->flashdata("pesan_insert"));
}

 ?>