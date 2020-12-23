 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="col-sm-6">
                 <h1 class="m-0 text-dark">Data Menu</h1>
             </div>
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
                         <div class="card-body">
                             <div style="margin-bottom: 10px;">
                                 <div class="col-lg-12">
                                     <a href="<?php echo site_url('Welcome/VFormAddMenu'); ?>" class="btn btn-success">
                                         Tambah data
                                     </a>
                                 </div>
                             </div>
                             <table id="example1" class="table table-bordered table-striped">
                                 <thead>
                                     <tr>
                                         <th>No</th>
                                         <th>Nama Menu</th>
                                         <th>Foto Menu</th>
                                         <th>Harga</th>
                                         <th>Deskripsi</th>
                                         <th>Jenis Menu</th>
                                         <th>
                                             &nbsp;
                                         </th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr>
                                     <?php
											if (!empty($DataMenu)) {
												foreach ($DataMenu as $index => $ReadDS) {
													$index = $index + 1;
											?>

													<tr>
														<!-- <td> <input type="checkbox" name="kd_jenis[]" value=" <?php echo $ReadDS->kd_jenis; ?>" /></td> -->
														<td><?php echo $index; ?></td>
														<td><?php echo $ReadDS->nama_menu; ?></td>
                                                        <td><?php echo $ReadDS->foto_menu; ?></td>
                                                        <td><?php echo $ReadDS->harga_menu; ?></td>
                                                        <td><?php echo $ReadDS->deskripsi_menu; ?></td>
                                                        <td><?php echo $ReadDS->nama_menu; ?></td>
                                                        <td>
                                             <a href="<?php echo site_url('Welcome/VFormUpdateLaporanKerusakan'); ?>" class="btn btn-xs btn-info">
                                                 Edit
                                             </a>
                                             <a class="btn btn-xs btn-danger" href="">
                                                 Delete
                                             </a>

                                                        </td>
													</tr>
											<?php
												}
											} ?>
                                     </tr>
                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
     </section>
 </div>