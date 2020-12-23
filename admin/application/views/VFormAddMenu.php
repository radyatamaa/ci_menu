 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0 text-dark">Tambah Menu</h1>
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
                         <form action="<?php echo site_url('Welcome/AddDataMenu'); ?>" method="post" enctype="multipart/form-data">
                                 <div class="card-body">
                                     <div class="form-group">
                                         <label>Nama Menu</label>
                                         <input type="text" name="nama_menu" class="form-control" placeholder="Nama Menu">
                                     </div>
                                     <div class="form-group">
                                         <label>Foto Menu</label>
                                         <input type="file" name="userfile" >
                                     </div>
                                     <div class="form-group">
                                         <label>Harga Menu</label>
                                         <input type="text" name="harga_menu" class="form-control" placeholder="Harga Menu">
                                     </div>
                                     <div class="form-group">
                                         <label>Deskripsi Menu</label>
                                         <input type="text" name="deskripsi_menu" class="form-control" placeholder="Deskripsi Menu">
                                     </div>
                                     <div class="form-group">
 									<label>Jenis Menu</label>
 									<select class="form-control" name="id_jenis_menu" required>
 										<option selected disabled>Jenis Produk</option>
 										<?php
											foreach ($JenisMenu as $ReadDS) {
											?>
 											<option value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->nama_jenis; ?></option>
 										<?php
											}
											?>
 									</select>
                                     </div>
                                     <div class="form-group">
 									 <label>Company</label>
 									 <select class="form-control" name="id_company" required>
 										<option selected disabled>Company</option>
 										<?php
											foreach ($Company as $ReadDS) {
											?>
 											<option value="<?php echo $ReadDS->id; ?>"><?php echo $ReadDS->nama_company; ?></option>
 										<?php
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