 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0 text-dark">Tambah User</h1>
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
                         <form action="<?php echo site_url('Welcome/AddDataUser'); ?>" method="post" enctype="multipart/form-data">
                                 <div class="card-body">
                                     <div class="form-group">
                                         <label>Username</label>
                                         <input type="text" name="username" class="form-control" placeholder="Username">
                                     </div>
                                     <div class="form-group">
                                         <label>Password</label>
                                         <input type="password" name="password" class="form-control" placeholder="Password">
                                     </div>
                                     <div class="form-group">
                                         <label>Fullname</label>
                                         <input type="text" name="fullname" class="form-control" placeholder="Fullname">
                                     </div>
                                     <!-- <div class="form-group">
                                         <label>Hak Akses</label>
                                         <select class="form-control " name="hak_akses">
                                             <option value="1">
                                                 Kasir
                                             </option>
                                             <option value="2">
                                                 Admin
                                             </option>
                                         </select>
                                     </div> -->
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