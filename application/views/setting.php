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
		
		<div class='row  navbar-inverse scroll' data-spy="affix" data-offset-top="100" style="display: inline-block; padding: 10px;">
		<strong>Jumpt To: </strong>
		<div class="btn-group btn-group-sm">
			<a href='#agama' class="btn btn-default">
			  Agama
			</a>
			<a href='#status_perkawinan' class="btn btn-default">
			  Status Perkawinan
			</a>
			<a href='#kondisi_ekonomi' class="btn btn-default">
			  Kondisi Ekonomi
			</a>
			<a href='#hub_dngn_kepala_rt' class="btn btn-default">
			  Hub Dngn Kepala RT
			</a>
			<a href='#kode_suku_bangsa' class="btn btn-default">
			  Kode Suku Bangsa
			</a>
			<a href='#pendidikan' class="btn btn-default">
			  Pendidikan
			</a>
			<a href='#kode_bidang_studi' class="btn btn-default">
			  Kode Bidang Studi
			</a>
			<a href='#kode_pekerjaan' class="btn btn-default">
			  Kode Pekerjaan
			</a>
			<a href='#kode_status_kesehatan' class="btn btn-default">
			  Status Kesehatan
			</a>
			<a href='#waktu_baptis' class="btn btn-default">
			  Waktu Baptis
			</a>
			<a href='#tempat_tinggal_di_luar_paroki' class="btn btn-default">
			  Tempat Tinggal Di Luar Paroki
			</a>
			<a href='#tempat_tinggal_di_luar_keuskupan' class="btn btn-default">
			  Tempat Tinggal Di Luar Keuskupan
			</a>
			<a href='#tempat_tinggal_lainnya' class="btn btn-default">
			  Tempat Tinggal Lainnya
			</a>
			<a href='#keterlibatan' class="btn btn-default">
			  Keterlibatan
			</a>
			<a href='#wilayah' class="btn btn-default">
			  Wilayah
			</a>
		</div>
		  
		
		</div>
		
		<div class='row '>
		  <div class="col-md-12">
			  <h3 id="agama">Agama</h3>
			  <div class="row" style="margin-bottom: 10px;">
			  	<div class="col-md-6">
			  		<a  class="btn btn-primary" href="form_tambah_data?table=agama">
			  			<span  class="glyphicon glyphicon-plus"></span>
						Tambah Data
			  		</a>
			  	</div>
				
			  </div>
		    <table class='table table-striped table-bordered table-hover table-condensed table-responsive filter '>
		      <thead class="navbar-inverse">
		        <tr>
		          <th>Id</th>
		          <th>Agama</th>
		          <th>Actions</th>
		        </tr>
		      </thead class="navbar-inverse">
		      <tbody>
		          <?php 
				  $query = $this->db->get("agama");
				  
				  foreach ($query->result() as $key => $value) {
					  echo 
					  "<tr>
						  <td>$value->id</td><td>$value->agama</td>
						  <td>
						  	<a class='btn btn-danger' href='delete_data?table=agama&id=$value->id'>
							  	<span class='glyphicon glyphicon-trash'></span>
							</a>
						  	<a class='btn btn-primary' href='form_edit_data?table=agama&id=$value->id'>
							  	<span class='glyphicon glyphicon-edit'></span>
							</a>
							</td>
					  </tr>";
				  }
				  
				   ?>
		        </tr>
		      </tbody>
		    </table>
		  </div>
		</div>
		
		<div class='row '>
		  <div class="col-md-12">
			 <h3 id="status_perkawinan">Status Perkawinan</h3>
			  <div class="row" style="margin-bottom: 10px;">
			  	<div class="col-md-6">
			  		<a  class="btn btn-primary" href="form_tambah_data?table=status_perkawinan">
			  			<span  class="glyphicon glyphicon-plus"></span>
						Tambah Data
			  		</a>
			  	</div>
			  </div>
		    <table class='table table-striped table-bordered table-hover table-condensed table-responsive'>
		      <thead class="navbar-inverse">
		        <tr>
		          <th>Id</th>
		          <th>Status Perkawinan</th>
		          <th>Actions</th>
		        </tr>
		      </thead class="navbar-inverse">
		      <tbody>
		          <?php 
				  $query = $this->db->get("status_perkawinan");
				  
				  foreach ($query->result() as $key => $value) {
					  echo 
					  "<tr>
						  <td>$value->id</td><td>$value->status_perkawinan</td>
						  <td>
						  	<a class='btn btn-danger' href='delete_data?table=status_perkawinan&id=$value->id'>
							  	<span class='glyphicon glyphicon-trash'></span>
							</a>
						  	<a class='btn btn-primary' href='form_edit_data?table=status_perkawinan&id=$value->id'>
							  	<span class='glyphicon glyphicon-edit'></span>
							</a>
							</td>
					  </tr>";
				  }
				  
				   ?>
		        </tr>
		      </tbody>
		    </table>
		  </div>
		</div>
		
		<div class='row '>
		  <div class="col-md-12"><h3  id="kondisi_ekonomi">Kondisi Ekonomi</h3>
			  <div class="row" style="margin-bottom: 10px;">
			  	<div class="col-md-6">
			  		<a   class="btn btn-primary" href="form_tambah_data?table=kondisi_ekonomi">
			  			<span  class="glyphicon glyphicon-plus"></span>
						Tambah Data
			  		</a>
			  	</div>
			  </div>
		    <table class='table table-striped table-bordered table-hover table-condensed table-responsive'>
		      <thead class="navbar-inverse">
		        <tr>
		          <th>Id</th>
		          <th>Kondisi Ekonomi</th>
		          <th>Actions</th>
		        </tr>
		      </thead class="navbar-inverse">
		      <tbody>
		          <?php 
				  $query = $this->db->get("kondisi_ekonomi");
				  
				  foreach ($query->result() as $key => $value) {
					  echo 
					  "<tr>
						  <td>$value->id</td><td>$value->kondisi_ekonomi</td>
						  <td>
						  	<a class='btn btn-danger' href='delete_data?table=kondisi_ekonomi&id=$value->id'>
							  	<span class='glyphicon glyphicon-trash'></span>
							</a>
						  	<a class='btn btn-primary' href='form_edit_data?table=kondisi_ekonomi&id=$value->id'>
							  	<span class='glyphicon glyphicon-edit'></span>
							</a>
							</td>
					  </tr>";
				  }
				  
				   ?>
		        </tr>
		      </tbody>
		    </table>
		  </div>
		</div>
		
		<div class='row '>
		  <div class="col-md-12"><h3  id="hub_dngn_kepala_rt">Hubungan Dengan Kepala RT</h3>
			  <div class="row" style="margin-bottom: 10px;">
			  	<div class="col-md-6">
			  		<a  class="btn btn-primary" href="form_tambah_data?table=hub_dngn_kepala_rt">
			  			<span  class="glyphicon glyphicon-plus"></span>
						Tambah Data
			  		</a>
			  	</div>
			  </div>
		    <table class='table table-striped table-bordered table-hover table-condensed table-responsive'>
		      <thead class="navbar-inverse">
		        <tr>
		          <th>Id</th>
		          <th>Hub dngn kepala rt</th>
		          <th>Actions</th>
		        </tr>
		      </thead class="navbar-inverse">
		      <tbody>
		          <?php 
				  $query = $this->db->get("hub_dngn_kepala_rt");
				  
				  foreach ($query->result() as $key => $value) {
					  echo 
					  "<tr>
						  <td>$value->id</td><td>$value->hub_dngn_kepala_rt</td>
						  <td>
						  	<a class='btn btn-danger' href='delete_data?table=hub_dngn_kepala_rt&id=$value->id'>
							  	<span class='glyphicon glyphicon-trash'></span>
							</a>
						  	<a class='btn btn-primary' href='form_edit_data?table=hub_dngn_kepala_rt&id=$value->id'>
							  	<span class='glyphicon glyphicon-edit'></span>
							</a>
							</td>
					  </tr>";
				  }
				  
				   ?>
		        </tr>
		      </tbody>
		    </table>
		  </div>
		</div>
		
		<div class='row '>
		  <div class="col-md-12"><h3  id="kode_suku_bangsa">Kode Suku Bangsa</h3>
			  <div class="row" style="margin-bottom: 10px;">
			  	<div class="col-md-6">
			  		<a   class="btn btn-primary" href="form_tambah_data?table=kode_suku_bangsa">
			  			<span  class="glyphicon glyphicon-plus"></span>
						Tambah Data
			  		</a>
			  	</div>
			  </div>
		    <table class='table table-striped table-bordered table-hover table-condensed table-responsive'>
		      <thead class="navbar-inverse">
		        <tr>
		          <th>Id</th>
		          <th>Etnis</th>
		          <th>Actions</th>
		        </tr>
		      </thead class="navbar-inverse">
		      <tbody>
		          <?php 
				  $query = $this->db->get("kode_suku_bangsa");
				  
				  foreach ($query->result() as $key => $value) {
					  echo 
					  "<tr>
						  <td>$value->id</td><td>$value->etnis</td>
						  <td>
						  	<a class='btn btn-danger' href='delete_data?table=kode_suku_bangsa&id=$value->id'>
							  	<span class='glyphicon glyphicon-trash'></span>
							</a>
						  	<a class='btn btn-primary' href='form_edit_data?table=kode_suku_bangsa&id=$value->id'>
							  	<span class='glyphicon glyphicon-edit'></span>
							</a>
							</td>
					  </tr>";
				  }
				  
				   ?>
		        </tr>
		      </tbody>
		    </table>
		  </div>
		</div>
		
		<div class='row '>
		  <div class="col-md-12"><h3  id="pendidikan">Pendidikan</h3>
			  <div class="row" style="margin-bottom: 10px;">
			  	<div class="col-md-6">
			  		<a   class="btn btn-primary" href="form_tambah_data?table=pendidikan">
			  			<span  class="glyphicon glyphicon-plus"></span>
						Tambah Data
			  		</a>
			  	</div>
			  </div>
		    <table class='table table-striped table-bordered table-hover table-condensed table-responsive'>
		      <thead class="navbar-inverse">
		        <tr>
		          <th>Id</th>
		          <th>Pendidikan</th>
		          <th>Kategory</th>
		          <th>Actions</th>
		        </tr>
		      </thead class="navbar-inverse">
		      <tbody>
		          <?php 
				  $query = $this->db->get("pendidikan");
				  
				  foreach ($query->result() as $key => $value) {
					  echo 
					  "<tr>
						  <td>$value->id</td><td>$value->pendidikan</td><td>$value->kategory</td>
						  <td>
						  	<a class='btn btn-danger' href='delete_data?table=pendidikan&id=$value->id'>
							  	<span class='glyphicon glyphicon-trash'></span>
							</a>
						  	<a class='btn btn-primary' href='form_edit_data?table=pendidikan&id=$value->id'>
							  	<span class='glyphicon glyphicon-edit'></span>
							</a>
							</td>
					  </tr>";
				  }
				  
				   ?>
		        </tr>
		      </tbody>
		    </table>
		  </div>
		</div>
		
		
		<div class='row '>
		  <div class="col-md-12"><h3  id="kode_bidang_studi">Kode Bidang Studi</h3>
			  <div class="row" style="margin-bottom: 10px;">
			  	<div class="col-md-6">
			  		<a   class="btn btn-primary" href="form_tambah_data?table=kode_bidang_studi">
			  			<span  class="glyphicon glyphicon-plus"></span>
						Tambah Data
			  		</a>
			  	</div>
			  </div>
		    <table class='table table-striped table-bordered table-hover table-condensed table-responsive'>
		      <thead class="navbar-inverse">
		        <tr>
		          <th>Id</th>
		          <th>Kondisi Ekonomi</th>
		          <th>Actions</th>
		        </tr>
		      </thead class="navbar-inverse">
		      <tbody>
		          <?php 
				  $query = $this->db->get("kode_bidang_studi");
				  
				  foreach ($query->result() as $key => $value) {
					  echo 
					  "<tr>
						  <td>$value->id</td><td>$value->bidang_studi</td>
						  <td>
						  	<a class='btn btn-danger' href='delete_data?table=kode_bidang_studi&id=$value->id'>
							  	<span class='glyphicon glyphicon-trash'></span>
							</a>
						  	<a class='btn btn-primary' href='form_edit_data?table=kode_bidang_studi&id=$value->id'>
							  	<span class='glyphicon glyphicon-edit'></span>
							</a>
							</td>
					  </tr>";
				  }
				  
				   ?>
		        </tr>
		      </tbody>
		    </table>
		  </div>
		</div>
		
		<div class='row '>
		  <div class="col-md-12"><h3 id="kode_pekerjaan">Kode Pekerjaan</h3>
			  <div class="row" style="margin-bottom: 10px;">
			  	<div class="col-md-6">
			  		<a   class="btn btn-primary" href="form_tambah_data?table=kode_pekerjaan">
			  			<span  class="glyphicon glyphicon-plus"></span>
						Tambah Data
			  		</a>
			  	</div>
			  </div>
		    <table class='table table-striped table-bordered table-hover table-condensed table-responsive'>
		      <thead class="navbar-inverse">
		        <tr>
		          <th>Id</th>
		          <th>Kode Pekerjaan</th>
		          <th>Actions</th>
		        </tr>
		      </thead class="navbar-inverse">
		      <tbody>
		          <?php 
				  $query = $this->db->get("kode_pekerjaan");
				  
				  foreach ($query->result() as $key => $value) {
					  echo 
					  "<tr>
						  <td>$value->id</td><td>$value->jenis_pekerjaan</td>
						  <td>
						  	<a class='btn btn-danger'  href='delete_data?table=kode_pekerjaan&id=$value->id'>
							  	<span class='glyphicon glyphicon-trash'></span>
							</a>
						  	<a class='btn btn-primary' href='form_edit_data?table=kode_pekerjaan&id=$value->id' >
							  	<span class='glyphicon glyphicon-edit'></span>
							</a>
							</td>
					  </tr>";
				  }
				  
				   ?>
		        </tr>
		      </tbody>
		    </table>
		  </div>
		</div>
		
		
		<div class='row '>
		  <div class="col-md-12"><h3 id="kode_status_kesehatan">Kode Status Kesehatan</h3>
			  <div class="row" style="margin-bottom: 10px;">
			  	<div class="col-md-6">
			  		<a   class="btn btn-primary" href="form_tambah_data?table=status_kesehatan">
			  			<span  class="glyphicon glyphicon-plus"></span>
						Tambah Data
			  		</a>
			  	</div>
			  </div>
		    <table class='table table-striped table-bordered table-hover table-condensed table-responsive'>
		      <thead class="navbar-inverse">
		        <tr>
		          <th>Id</th>
		          <th>Kode</th>
		          <th>Status Kesehatan</th>
		          <th>Actions</th>
		        </tr>
		      </thead class="navbar-inverse">
		      <tbody>
		          <?php 
				  $query = $this->db->get("status_kesehatan");
				  
				  foreach ($query->result() as $key => $value) {
					  echo 
					  "<tr>
						  <td>$value->id</td><td>$value->kode</td><td>$value->status_kesehatan</td>
						  <td>
						  	<a class='btn btn-danger' href='delete_data?table=status_kesehatan&id=$value->id'>
							  	<span class='glyphicon glyphicon-trash'></span>
							</a>
						  	<a class='btn btn-primary' href='form_edit_data?table=status_kesehatan&id=$value->id' >
							  	<span class='glyphicon glyphicon-edit'></span>
							</a>
							</td>
					  </tr>";
				  }
				  
				   ?>
		        </tr>
		      </tbody>
		    </table>
		  </div>
		</div>
		
		
		
		<div class='row '>
		  <div class="col-md-12"><h3 id="waktu_baptis">Waktu Baptis</h3>
			  <div class="row" style="margin-bottom: 10px;">
			  	<div class="col-md-6">
			  		<a   class="btn btn-primary" href="form_tambah_data?table=waktu_baptis">
			  			<span  class="glyphicon glyphicon-plus"></span>
						Tambah Data
			  		</a>
			  	</div>
			  </div>
			  
		    <table class='table table-striped table-bordered table-hover table-condensed table-responsive'>
		      <thead class="navbar-inverse">
		        <tr>
		          <th>Id</th>
		          <th>Waktu Baptis</th>
		          <th>Actions</th>
		        </tr>
		      </thead class="navbar-inverse">
		      <tbody>
		          <?php 
				  $query = $this->db->get("waktu_baptis");
				  
				  foreach ($query->result() as $key => $value) {
					  echo 
					  "<tr>
						  <td>$value->id</td><td>$value->waktu_baptis</td>
						  <td>
						  	<a class='btn btn-danger'  href='delete_data?table=waktu_baptis&id=$value->id'>
							  	<span class='glyphicon glyphicon-trash'></span>
							</a>
						  	<a class='btn btn-primary' href='form_edit_data?table=waktu_baptis&id=$value->id'>
							  	<span class='glyphicon glyphicon-edit'></span>
							</a>
							</td>
					  </tr>";
				  }
				  
				   ?>
		        </tr>
		      </tbody>
		    </table>
		  </div>
		</div>
		
		<div class='row '>
		  <div class="col-md-12"><h3 id="tempat_tinggal_di_luar_paroki">Tempat Tinggal (Di Luar Paroki)</h3>
			  <div class="row" style="margin-bottom: 10px;">
			  	<div class="col-md-6">
			  		<a class="btn btn-primary" href="form_tambah_data?table=di_luar_paroki">
			  			<span  class="glyphicon glyphicon-plus"></span>
						Tambah Data
			  		</a>
			  	</div>
			  </div>
		    <table class='table table-striped table-bordered table-hover table-condensed table-responsive'>
		      <thead class="navbar-inverse">
		        <tr>
		          <th>Id</th>
		          <th>Tempat Tinggal</th>
		          <th>Actions</th>
		        </tr>
		      </thead class="navbar-inverse">
		      <tbody>
		          <?php 
				  $query = $this->db->get("di_luar_paroki");
				  
				  foreach ($query->result() as $key => $value) {
					  echo 
					  "<tr>
						  <td>$value->id</td><td>$value->di_luar_paroki</td>
						  <td>
						  	<a class='btn btn-danger' href='delete_data?table=di_luar_paroki&id=$value->id'>
							  	<span class='glyphicon glyphicon-trash'></span>
							</a>
						  	<a class='btn btn-primary' href='form_edit_data?table=di_luar_paroki&id=$value->id'>
							  	<span class='glyphicon glyphicon-edit'></span>
							</a>
							</td>
					  </tr>";
				  }
				  
				   ?>
		        </tr>
		      </tbody>
		    </table>
		  </div>
		  
		  <div class="col-md-12"><h3  id="tempat_tinggal_di_luar_keuskupan">Tempat Tinggal (Di Luar Keuskupan)</h3>
			  <div class="row" style="margin-bottom: 10px;">
			  	<div class="col-md-6">
			  		<a  class="btn btn-primary" href="form_tambah_data?table=kode_keuskupan">
			  			<span  class="glyphicon glyphicon-plus"></span>
						Tambah Data
			  		</a>
			  	</div>
			  </div>
		    <table class='table table-striped table-bordered table-hover table-condensed table-responsive'>
		      <thead class="navbar-inverse">
		        <tr>
		          <th>Id</th>
		          <th>Tempat Tinggal</th>
		          <th>Actions</th>
		        </tr>
		      </thead class="navbar-inverse">
		      <tbody>
		          <?php 
				  $query = $this->db->get("kode_keuskupan");
				  
				  foreach ($query->result() as $key => $value) {
					  echo 
					  "<tr>
						  <td>$value->id</td><td>$value->nama_keuskupan</td>
						  <td>
						  	<a class='btn btn-danger' href='delete_data?table=kode_keuskupan&id=$value->id'>
							  	<span class='glyphicon glyphicon-trash'></span>
							</a>
						  	<a class='btn btn-primary' href='form_edit_data?table=kode_keuskupan&id=$value->id'>
							  	<span class='glyphicon glyphicon-edit'></span>
							</a>
							</td>
					  </tr>";
				  }
				  
				   ?>
		        </tr>
		      </tbody>
		    </table>
		  </div>
		  
		  <div class="col-md-12"><h3 id="tempat_tinggal_lainnya">Tempat Tinggal (Lainnya)</h3>
			  <div class="row" style="margin-bottom: 10px;">
			  	<div class="col-md-6">
			  		<a   class="btn btn-primary" href="form_tambah_data?table=keuskupan_lainnya">
			  			<span  class="glyphicon glyphicon-plus"></span>
						Tambah Data
			  		</a>
			  	</div>
			  </div>
		    <table class='table table-striped table-bordered table-hover table-condensed table-responsive'>
		      <thead class="navbar-inverse">
		        <tr>
		          <th>Id</th>
		          <th>Tempat Tinggal</th>
		          <th>Actions</th>
		        </tr>
		      </thead class="navbar-inverse">
		      <tbody>
		          <?php 
				  $query = $this->db->get("keuskupan_lainnya");
				  
				  foreach ($query->result() as $key => $value) {
					  echo 
					  "<tr>
						  <td>$value->id</td><td>$value->lainnya</td>
						  <td>
						  	<a class='btn btn-danger' href='delete_data?table=keuskupan_lainnya&id=$value->id'>
							  	<span class='glyphicon glyphicon-trash'></span>
							</a>
						  	<a class='btn btn-primary' href='form_edit_data?table=keuskupan_lainnya&id=$value->id'>
							  	<span class='glyphicon glyphicon-edit'></span>
							</a>
							</td>
					  </tr>";
				  }
				  
				   ?>
		        </tr>
		      </tbody>
		    </table>
		  </div>
		</div>
		
	
		<div class='row'>
		  <div class="col-md-12"><h3 id="keterlibatan">Keterlibatan</h3>
			  <div class="row" style="margin-bottom: 10px;">
			  	<div class="col-md-6">
			  		<a  class="btn btn-primary" href="form_tambah_data?table=keterlibatan">
			  			<span  class="glyphicon glyphicon-plus"></span>
						Tambah Data
			  		</a>
			  	</div>
			  </div>
		    <table class='table table-striped table-bordered table-hover table-condensed table-responsive'>
		      <thead class="navbar-inverse">
		        <tr>
		          <th>Id</th>
		          <th>Status Keterlibatan</th>
		          <th>Actions</th>
		        </tr>
		      </thead class="navbar-inverse">
		      <tbody>
		          <?php 
				  $query = $this->db->get("keterlibatan");
				  
				  foreach ($query->result() as $key => $value) {
					  echo 
					  "<tr>
						  <td>$value->id</td><td>$value->keterlibatan</td>
						  <td>
						  	<a class='btn btn-danger' href='delete_data?table=keterlibatan&id=$value->id'>
							  	<span class='glyphicon glyphicon-trash'></span>
							</a>
						  	<a class='btn btn-primary' href='form_edit_data?table=keterlibatan&id=$value->id'>
							  	<span class='glyphicon glyphicon-edit'></span>
							</a>
							</td>
					  </tr>";
				  }
				  
				   ?>
		        </tr>
		      </tbody>
		    </table>
		  </div>
		</div>

			
		<div class='row'>
		  <div class="col-md-12"><h3 id="wilayah">Wilayah</h3>
			  <div class="row" style="margin-bottom: 10px;">
			  	<div class="col-md-6">
			  		<a  class="btn btn-primary" href="form_tambah_data?table=wilayah">
			  			<span  class="glyphicon glyphicon-plus"></span>
						Tambah Data
			  		</a>
			  	</div>
			  </div>
		    <table class='table table-striped table-bordered table-hover table-condensed table-responsive'>
		      <thead class="navbar-inverse">
		        <tr>
		          <th>Id</th>
		          <th>Status Keterlibatan</th>
		          <th>Actions</th>
		        </tr>
		      </thead class="navbar-inverse">
		      <tbody>
		          <?php 
				  $query = $this->db->get("wilayah");
				  
				  foreach ($query->result() as $key => $value) {
					  echo 
					  "<tr>
						  <td>$value->id</td><td>$value->wilayah</td>
						  <td>
						  	<a class='btn btn-danger' href='delete_data?table=wilayah&id=$value->id'>
							  	<span class='glyphicon glyphicon-trash'></span>
							</a>
						  	<a class='btn btn-primary' href='form_edit_data?table=wilayah&id=$value->id'>
							  	<span class='glyphicon glyphicon-edit'></span>
							</a>
							</td>
					  </tr>";
				  }
				  
				   ?>
		        </tr>
		      </tbody>
		    </table>
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