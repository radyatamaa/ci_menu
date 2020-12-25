 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="col-sm-6">
                 <h1 class="m-0 text-dark">Pesanan</h1>
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

                             <table id="example1" class="table table-bordered table-striped">
                                 <thead>
                                     <tr>
                                         <th>No</th>
                                         <th>No Meja</th>
                                         <th>Nama Menu</th>
                                         <th>QTY</th>
                                         <th>Total Harga Menu</th>
                                         <th>Total Harga</th>
                                         <th>Status</th>
                                         <th>Waktu Order</th>
                                         <!-- <th>
                                             &nbsp;
                                         </th> -->
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr>
                                     <?php
											if (!empty($DataOrder)) {
												foreach ($DataOrder as $index => $ReadDS) {
													$index = $index + 1;
											?>
													<tr>
														<!-- <td> <input type="checkbox" name="kd_jenis[]" value=" <?php echo $ReadDS->id; ?>" /></td> -->
														<td><?php echo $index; ?></td>
                                                        <td><?php echo $ReadDS->no_meja; ?></td>
                                                        <td><?php echo $ReadDS->nama_menu; ?></td>
                                                        <td><?php echo $ReadDS->qty; ?></td>
                                                        <td><?php echo $ReadDS->total_harga_menu; ?></td>
                                                        <td><?php echo $ReadDS->total_harga; ?></td>
                                                        <td><?php echo $ReadDS->status; ?></td>
                                                        <td><?php echo $ReadDS->tgl_order; ?></td>

                                                        <td>
                                                            <a href="<?php echo site_url('Welcome/UpdateStatus?id=' . $ReadDS->id); ?>" class="btn btn-xs btn-info">
                                                                 Confirmasi Pembayaran
                                                            </a>
                                                            <!-- <a href="<?php echo site_url('Welcome/DeleteDataOrder/' . $ReadDS->id); ?>" class="btn btn-xs btn-danger">
                                                                 Delete
                                                            </a> -->
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