<?php include "header.php"; ?>

<!-- Main content -->
<div class="content-wrapper">

	<!-- Page header -->
	<div class="page-header page-header-default">
		<div class="page-header-content">
			<div class="page-title">
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Setting</h4>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h3 class="panel-title">Jumlah Umat Di Lingkungan</h3>
						  </div>
						  <div class="panel-body">
							  <h3>Di Luar Paroki</h3>
						    <table class='table table-striped table-bordered table-hover table-condensed'>
						      <thead>
						        <tr  class="navbar-inverse">
						          <th>Lingkungan</th>
						          <th></th>
						          <th>Jumlah Umat</th>
						        </tr>
						      </thead>
						      <tbody>
						        <?php 
								$query = $this->db->query("select * from di_luar_paroki");
								
								foreach ($query->result() as $key => $value) {
									$query2 = $this->db->query("select COUNT(*) as jumlah from list_anggota_keluarga where tempat_tinggal='$value->di_luar_paroki'")->row();
									
									echo "<tr><td>$value->di_luar_paroki</td><td> : </td><td>$query2->jumlah</td></tr>";
								}
								
								 ?>
						      </tbody>
						    </table>
							
							<h3>Di Luar Keuskupan</h3>
						    <table class='table table-striped table-bordered table-hover table-condensed'>
						      <thead>
						        <tr  class="navbar-inverse">
						          <th>Lingkungan</th>
						          <th></th>
						          <th>Jumlah Umat</th>
						        </tr>
						      </thead>
						      <tbody>
						       <?php 
							   $query = $this->db->query("select * from kode_keuskupan");
							   
							   foreach ($query->result() as $key => $value) {
								   $query2 = $this->db->query("select COUNT(*) as jumlah from list_anggota_keluarga where tempat_tinggal='$value->nama_keuskupan'")->row();
								   
								   echo "<tr><td>$value->nama_keuskupan</td><td> : </td><td>$query2->jumlah</td></tr>";
							   }
							   
								?>
						      </tbody>
						    </table>
							
							<h3>Keuskupan Lainnya</h3>
						    <table class='table table-striped table-bordered table-hover table-condensed'>
						      <thead>
						        <tr  class="navbar-inverse">
						          <th>Lingkungan</th>
						          <th></th>
						          <th>Jumlah Umat</th>
						        </tr>
						      </thead>
						      <tbody>
							   <?php 
							   $query = $this->db->query("select * from keuskupan_lainnya");
							   
							   foreach ($query->result() as $key => $value) {
								   $query2 = $this->db->query("select COUNT(*) as jumlah from list_anggota_keluarga where tempat_tinggal='$value->lainnya'")->row();
								   
								   echo "<tr><td>$value->lainnya</td><td> : </td><td>$query2->jumlah</td></tr>";
							   }
							   
								?>
						      </tbody>
						    </table>
						  </div>
						</div>
					</div>
					
					<!--  untuk mendapatkan report berdasarkan golongan pekerjaan -->
					<div class="col-md-12">
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h3 class="panel-title">Jumlah Umat Berdasarkan Golongan Pekerjaan</h3>
						  </div>
						  <div class="panel-body">
						    <table class='table table-striped table-bordered table-hover table-condensed'>
						      <thead>
						        <tr  class="navbar-inverse">
						          <th>Pekerjaan</th>
						          <th></th>
						          <th>Jumlah Umat</th>
						        </tr>
						      </thead>
						      <tbody>
						        <?php 
								$query = $this->db->query("select * from kode_pekerjaan");
								
								foreach ($query->result() as $key => $value) {
									$this->libraries->escape_str($value->jenis_pekerjaan);
									$query2 = $this->db->query("select COUNT(*) as jumlah from list_anggota_keluarga where pekerjaan='$value->jenis_pekerjaan'")->row();
									
									echo "<tr><td>$value->jenis_pekerjaan</td><td> : </td><td>$query2->jumlah</td></tr>";
								}
								
								 ?>
						      </tbody>
						    </table>
						  </div>
						</div>
					</div>
					
					<!--  untuk mendapatkan report berdasarkan Agama -->
					<div class="col-md-12">
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h3 class="panel-title">Jumlah Umat Berdasarkan Agama</h3>
						  </div>
						  <div class="panel-body">
						    <table class='table table-striped table-bordered table-hover table-condensed'>
						      <thead>
						        <tr  class="navbar-inverse">
						          <th>Agama</th>
						          <th></th>
						          <th>Jumlah Umat</th>
						        </tr>
						      </thead>
						      <tbody>
						        <?php 
								$query = $this->db->query("select * from agama");
								
								foreach ($query->result() as $key => $value) {
									$this->libraries->escape_str($value->agama);
									$query2 = $this->db->query("select COUNT(*) as jumlah from list_anggota_keluarga where agama='$value->agama'")->row();
									
									echo "<tr><td>$value->agama</td><td> : </td><td>$query2->jumlah</td></tr>";
								}
								
								 ?>
						      </tbody>
						    </table>
						  </div>
						</div>
					</div>
					
					<!--  untuk mendapatkan report berdasarkan Agama -->
					<div class="col-md-12">
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h3 class="panel-title">Jumlah Umat Berdasarkan Jenis Kelamin</h3>
						  </div>
						  <div class="panel-body">
						    <table class='table table-striped table-bordered table-hover table-condensed'>
						      <thead>
						        <tr  class="navbar-inverse">
						          <th>Jenis Kelamin</th>
						          <th></th>
						          <th>Jumlah Umat</th>
						        </tr>
						      </thead>
						      <tbody>
						        <?php 
								$query = $this->db->query("select * from jenis_kelamin");
								
								foreach ($query->result() as $key => $value) {
									$this->libraries->escape_str($value->jenis_kelamin);
									$query2 = $this->db->query("select COUNT(*) as jumlah from list_anggota_keluarga where jenis_kelamin='$value->jenis_kelamin'")->row();
									
									echo "<tr><td>$value->jenis_kelamin</td><td> : </td><td>$query2->jumlah</td></tr>";
								}
								
								 ?>
						      </tbody>
						    </table>
						  </div>
						</div>
					</div>
					
					<!--  untuk mendapatkan report berdasarkan Hub dengan kepala rt -->
					<div class="col-md-12">
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h3 class="panel-title">Jumlah Umat Berdasarkan Hub Dngn Kepala Rt</h3>
						  </div>
						  <div class="panel-body">
						    <table class='table table-striped table-bordered table-hover table-condensed'>
						      <thead>
						        <tr  class="navbar-inverse">
						          <th>Hub dngn Kepala Rt</th>
						          <th></th>
						          <th>Jumlah Umat</th>
						        </tr>
						      </thead>
						      <tbody>
						        <?php 
								$query = $this->db->query("select * from hub_dngn_kepala_rt");
								
								foreach ($query->result() as $key => $value) {
									$this->libraries->escape_str($value->hub_dngn_kepala_rt);
									$query2 = $this->db->query("select COUNT(*) as jumlah from list_anggota_keluarga where hub_dngn_kepala_rt='$value->hub_dngn_kepala_rt'")->row();
									
									echo "<tr><td>$value->hub_dngn_kepala_rt</td><td> : </td><td>$query2->jumlah</td></tr>";
								}
								
								 ?>
						      </tbody>
						    </table>
						  </div>
						</div>
					</div>
					
					<!--  untuk mendapatkan report berdasarkan Kode Suku Bangsa -->
					<div class="col-md-12">
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h3 class="panel-title">Jumlah Umat Berdasarkan Kode Suku Bangsa</h3>
						  </div>
						  <div class="panel-body">
						    <table class='table table-striped table-bordered table-hover table-condensed'>
						      <thead>
						        <tr  class="navbar-inverse">
						          <th>Etnis</th>
						          <th></th>
						          <th>Jumlah Umat</th>
						        </tr>
						      </thead>
						      <tbody>
						        <?php 
								$query = $this->db->query("select * from kode_suku_bangsa");
								
								foreach ($query->result() as $key => $value) {
									$this->libraries->escape_str($value->etnis);
									$query2 = $this->db->query("select COUNT(*) as jumlah from list_anggota_keluarga where suku_bangsa='$value->etnis'")->row();
									
									echo "<tr><td>$value->etnis</td><td> : </td><td>$query2->jumlah</td></tr>";
								}
								
								 ?>
						      </tbody>
						    </table>
						  </div>
						</div>
					</div>
					
				</div>	
			</div>

			<div class="col-md-6">
				
				<div class="row">
					<!--  untuk mendapatkan report berdasarkan Pendidikan -->
					<div class="col-md-12">
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h3 class="panel-title">Jumlah Umat Berdasarkan Pendidikan</h3>
						  </div>
						  <div class="panel-body">
						    <table class='table table-striped table-bordered table-hover table-condensed'>
						      <thead>
						        <tr  class="navbar-inverse">
						          <th>Pendidikan</th>
						          <th></th>
						          <th>Jumlah Umat</th>
						        </tr>
						      </thead>
						      <tbody>
						        <?php 
								$query = $this->db->query("select * from pendidikan");
								
								foreach ($query->result() as $key => $value) {
									$this->libraries->escape_str($value->etnis);
									$query2 = $this->db->query("select COUNT(*) as jumlah from list_anggota_keluarga where pendidikan='$value->pendidikan'")->row();
									
									echo "<tr><td>$value->pendidikan</td><td> : </td><td>$query2->jumlah</td></tr>";
								}
								
								 ?>
						      </tbody>
						    </table>
						  </div>
						</div>
					</div>

					<!--  untuk mendapatkan report berdasarkan kode bidang studi -->
					<div class="col-md-12">
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h3 class="panel-title">Jumlah Umat Berdasarkan Bidang Studi</h3>
						  </div>
						  <div class="panel-body">
						    <table class='table table-striped table-bordered table-hover table-condensed'>
						      <thead>
						        <tr  class="navbar-inverse">
						          <th>Bidang Studi</th>
						          <th></th>
						          <th>Jumlah Umat</th>
						        </tr>
						      </thead>
						      <tbody>
						        <?php 
								$query = $this->db->query("select * from kode_bidang_studi");
								
								foreach ($query->result() as $key => $value) {
									$this->libraries->escape_str($value->etnis);
									$query2 = $this->db->query("select COUNT(*) as jumlah from list_anggota_keluarga where bidang_studi='$value->bidang_studi'")->row();
									
									echo "<tr><td>$value->bidang_studi</td><td> : </td><td>$query2->jumlah</td></tr>";
								}
								
								 ?>
						      </tbody>
						    </table>
						  </div>
						</div>
					</div>
					
					
					<!--  untuk mendapatkan report berdasarkan golongan darah -->
					<div class="col-md-12">
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h3 class="panel-title">Jumlah Umat Berdasarkan Golongan Darah</h3>
						  </div>
						  <div class="panel-body">
						    <table class='table table-striped table-bordered table-hover table-condensed'>
						      <thead>
						        <tr  class="navbar-inverse">
						          <th>Golongan Darah</th>
						          <th></th>
						          <th>Jumlah Umat</th>
						        </tr>
						      </thead>
						      <tbody>
						        <?php 
								$query = $this->db->query("select * from golongan_darah");
								
								foreach ($query->result() as $key => $value) {
									$this->libraries->escape_str($value->golongan_darah);
									$query2 = $this->db->query("select COUNT(*) as jumlah from list_anggota_keluarga where golongan_darah='$value->golongan_darah'")->row();
									
									echo "<tr><td>$value->golongan_darah</td><td> : </td><td>$query2->jumlah</td></tr>";
								}
								
								 ?>
						      </tbody>
						    </table>
						  </div>
						</div>
					</div>

					<!--  untuk mendapatkan report berdasarkan golongan darah -->
					<div class="col-md-12">
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h3 class="panel-title">Jumlah Umat Berdasarkan Waktu Baptis</h3>
						  </div>
						  <div class="panel-body">
						    <table class='table table-striped table-bordered table-hover table-condensed'>
						      <thead>
						        <tr  class="navbar-inverse">
						          <th>Waktu Baptis</th>
						          <th></th>
						          <th>Jumlah Umat</th>
						        </tr>
						      </thead>
						      <tbody>
						        <?php 
								$query = $this->db->query("select * from waktu_baptis");
								
								foreach ($query->result() as $key => $value) {
									$this->libraries->escape_str($value->waktu_baptis);
									$query2 = $this->db->query("select COUNT(*) as jumlah from list_anggota_keluarga where waktu_baptis='$value->waktu_baptis'")->row();
									
									echo "<tr><td>$value->waktu_baptis</td><td> : </td><td>$query2->jumlah</td></tr>";
								}
								
								 ?>
						      </tbody>
						    </table>
						  </div>
						</div>
					</div>
					
					<!--  untuk mendapatkan report berdasarkan status perkawinan -->
					<div class="col-md-12">
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h3 class="panel-title">Jumlah Umat Berdasarkan Status Perkawinan</h3>
						  </div>
						  <div class="panel-body">
						    <table class='table table-striped table-bordered table-hover table-condensed'>
						      <thead>
						        <tr  class="navbar-inverse">
						          <th>Status Perkawinan</th>
						          <th></th>
						          <th>Jumlah Umat</th>
						        </tr>
						      </thead>
						      <tbody>
						        <?php 
								$query = $this->db->query("select * from status_perkawinan");
								
								foreach ($query->result() as $key => $value) {
									$this->libraries->escape_str($value->status_perkawinan);
									$query2 = $this->db->query("select COUNT(*) as jumlah from list_anggota_keluarga where status_perkawinan='$value->status_perkawinan'")->row();
									
									echo "<tr><td>$value->status_perkawinan</td><td> : </td><td>$query2->jumlah</td></tr>";
								}
								
								 ?>
						      </tbody>
						    </table>
						  </div>
						</div>
					</div>
					
					<!--  untuk mendapatkan report berdasarkan jabatan sosial -->
					<div class="col-md-12">
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h3 class="panel-title">Jumlah Umat Berdasarkan Jabatan Sosial</h3>
						  </div>
						  <div class="panel-body">
						    <table class='table table-striped table-bordered table-hover table-condensed'>
						      <thead>
						        <tr  class="navbar-inverse">
						          <th>Jabatan Sosial</th>
						          <th></th>
						          <th>Jumlah Umat</th>
						        </tr>
						      </thead>
						      <tbody>
						        <?php 
								$query = $this->db->query("select * from jabatan_sosial");
								
								foreach ($query->result() as $key => $value) {
									$this->libraries->escape_str($value->jabatan_sosial);
									$query2 = $this->db->query("select COUNT(*) as jumlah from list_anggota_keluarga where jabatan_sosial='$value->jabatan_sosial'")->row();
									
									echo "<tr><td>$value->jabatan_sosial</td><td> : </td><td>$query2->jumlah</td></tr>";
								}
								
								 ?>
						      </tbody>
						    </table>
						  </div>
						</div>
					</div>
					
					<!--  untuk mendapatkan report berdasarkan jabatan sosial -->
					<div class="col-md-12">
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h3 class="panel-title">Jumlah Umat Berdasarkan Komuni Pertama</h3>
						  </div>
						  <div class="panel-body">
						    <table class='table table-striped table-bordered table-hover table-condensed'>
						      <thead>
						        <tr  class="navbar-inverse">
						          <th>Komuni Pertama</th>
						          <th></th>
						          <th>Jumlah Umat</th>
						        </tr>
						      </thead>
						      <tbody>
						        <?php 
								$query = $this->db->query("select * from komuni_pertama");
								
								foreach ($query->result() as $key => $value) {
									$this->libraries->escape_str($value->komuni_pertama);
									$query2 = $this->db->query("select COUNT(*) as jumlah from list_anggota_keluarga where komuni_pertama='$value->komuni_pertama'")->row();
									
									echo "<tr><td>$value->komuni_pertama</td><td> : </td><td>$query2->jumlah</td></tr>";
								}
								
								 ?>
						      </tbody>
						    </table>
						  </div>
						</div>
					</div>
					
					
					<!--  untuk mendapatkan report berdasarkan jabatan sosial -->
					<div class="col-md-12">
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h3 class="panel-title">Jumlah Umat Berdasarkan Status Gerejawi</h3>
						  </div>
						  <div class="panel-body">
						    <table class='table table-striped table-bordered table-hover table-condensed'>
						      <thead>
						        <tr  class="navbar-inverse">
						          <th>Komuni Status Gerejawi</th>
						          <th></th>
						          <th>Jumlah Umat</th>
						        </tr>
						      </thead>
						      <tbody>
						        <?php 
								$query = $this->db->query("select * from status_gerejawi");
								
								foreach ($query->result() as $key => $value) {
									$this->libraries->escape_str($value->status_gerejawi);
									$query2 = $this->db->query("select COUNT(*) as jumlah from list_anggota_keluarga where status_gerejawi='$value->status_gerejawi'")->row();
									
									echo "<tr><td>$value->status_gerejawi</td><td> : </td><td>$query2->jumlah</td></tr>";
								}
								
								 ?>
						      </tbody>
						    </table>
						  </div>
						</div>
					</div>
					
					
					<!--  untuk mendapatkan report berdasarkan jabatan sosial -->
					<div class="col-md-12">
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h3 class="panel-title">Jumlah Umat Berdasarkan Keterlibatan</h3>
						  </div>
						  <div class="panel-body">
						    <table class='table table-striped table-bordered table-hover table-condensed'>
						      <thead>
						        <tr  class="navbar-inverse">
						          <th>Keterlibatan</th>
						          <th></th>
						          <th>Jumlah Umat</th>
						        </tr>
						      </thead>
						      <tbody>
						        <?php 
								$query = $this->db->query("select * from keterlibatan");
								
								foreach ($query->result() as $key => $value) {
									$this->libraries->escape_str($value->status_gerejawi);
									$query2 = $this->db->query("select COUNT(*) as jumlah from list_anggota_keluarga where keterlibatan='$value->keterlibatan'")->row();
									
									echo "<tr><td>$value->keterlibatan</td><td> : </td><td>$query2->jumlah</td></tr>";
								}
								
								 ?>
						      </tbody>
						    </table>
						  </div>
						</div>
					</div>		

					<!--  untuk mendapatkan report berdasarkan wilayah atau lingkungan -->
					<div class="col-md-12">
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h3 class="panel-title">Jumlah Lingkungan Berdasarkan Wilayah</h3>
						  </div>
						  <div class="panel-body">
						    <table class='table table-striped table-bordered table-hover table-condensed'>
						      <thead>
						        <tr  class="navbar-inverse">
						          <th>Keterlibatan</th>
						          <th></th>
						          <th>Jumlah Lingkungan</th>
						        </tr>
						      </thead>
						      <tbody>
						        <?php 
								$query = $this->db->query("select * from wilayah");
								
								foreach ($query->result() as $key => $value) {
									$this->libraries->escape_str($value->status_gerejawi);
									$query2 = $this->db->query("select COUNT(*) as jumlah from lingkungan where wilayah='$value->wilayah'")->row();
									
									echo "<tr><td>$value->wilayah</td><td> : </td><td>$query2->jumlah</td></tr>";
								}
								
								 ?>
						      </tbody>
						    </table>
						  </div>
						</div>
					</div>
					
			</div>
			</div>
		</div>
		
</div>

<?php include 'footer.php'; ?>