 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0 text-dark">Edit MEnu</h1>
                 </div>
                 <!-- <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Home</a></li>
                         <li class="breadcrumb-item active">Dashboard v1</li>
                     </ol>
                 </div>/.col -->
             </div><!-- /.row -->
         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->

     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">
             <!-- Small boxes (Stat box) -->
             <div class="box">
                 <div class="box-header with-border">
                     <div class="row">
                         <div class="col-12">
                         <form action="<?php echo site_url('Welcome/UpdateDataMenu'); ?>" method="post" enctype="multipart/form-data">
                                 <div class="card-body">
                                    <div class="form-group">
 										<label>Nama Menu</label>
 										<input type="hidden" name="id" value="<?php echo $detail['id']; ?>" class="form-control">
 										<input type="text" class="form-control" name="nama_menu" value="<?php echo $detail['nama_menu']; ?>" placeholder="Username">
                                     </div>
                                     <label>Foto Sebelumnya</label><br>
 										<img src="<?php echo $detail['foto_menu']; ?>" width="200px" height="200px" style="border-radius: 100%;"><br>
 										<label>Upload Image</label>
 										<input type="file" name="userfile"><br>
                                     <div class="form-group">
 										<label>Harga Menu</label>
 										<input type="text" class="form-control" name="harga_menu" value="<?php echo $detail['harga_menu']; ?>" placeholder="Username">
                                     </div>
                                     <div class="form-group">
 										<label>Deskripsi Menu</label>
 										<input type="text" class="form-control" name="deskripsi_menu" value="<?php echo $detail['deskripsi_menu']; ?>" placeholder="Username">
                                     </div>
                                     <div class="form-group">
 										<label>Jenis Menu</label>
 										<select class="form-control" name="id_jenis_menu" required>
 											<option selected disabled>Jenis Menu</option>
 											<?php
												foreach ($detail['jenis'] as $ReadDS) {
													if ($ReadDS->id == $detail['id_jenis_menu']) {
												?>
 													<option value="<?php echo $ReadDS->id; ?>" selected> <?php echo $ReadDS->nama_jenis; ?></option>
 												<?php } else {
													?>
 													<option value="<?php echo $ReadDS->id; ?>"> <?php echo $ReadDS->nama_jenis; ?></option>
 											<?php
													}
												}
												?>
 										</select>
                                     </div>
                                     <div class="form-group">
 										<label>Nama Perusahaan</label>
 										<select class="form-control" name="id_company" required>
 											<option selected disabled>Nama Perusahaan</option>
 											<?php
												foreach ($detail['company'] as $ReadDS) {
													if ($ReadDS->id == $detail['id_company']) {
												?>
 													<option value="<?php echo $ReadDS->id; ?>" selected> <?php echo $ReadDS->nama_company; ?></option>
 												<?php } else {
													?>
 													<option value="<?php echo $ReadDS->id; ?>"> <?php echo $ReadDS->nama_company; ?></option>
 											<?php
													}
												}
												?>
 										</select>
 									</div>

                                     <div class="form-group">
                                         <button type="submit" class="btn btn-primary">Submit</button>
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
     </section>
 </div>