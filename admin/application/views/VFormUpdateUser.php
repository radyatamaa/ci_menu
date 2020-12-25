 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0 text-dark">Edit User</h1>
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
                         <form action="<?php echo site_url('Welcome/UpdateDataUser'); ?>" method="post" enctype="multipart/form-data">
                                 <div class="card-body">
                                    <div class="form-group">
 										<label>Username</label>
 										<input type="hidden" name="id" value="<?php echo $detail['id']; ?>" class="form-control">
 										<input type="text" class="form-control" name="username" value="<?php echo $detail['username']; ?>" placeholder="Username">
                                     </div>
                                     <div class="form-group">
 										<label>Password</label>
 										<input type="hidden" name="id" value="<?php echo $detail['id']; ?>" class="form-control">
 										<input type="text" class="form-control" name="password" value="<?php echo $detail['password']; ?>" placeholder="Username">
                                     </div>
                                     <div class="form-group">
 										<label>Fullname</label>
 										<input type="hidden" name="id" value="<?php echo $detail['id']; ?>" class="form-control">
 										<input type="text" class="form-control" name="fullname" value="<?php echo $detail['fullname']; ?>" placeholder="Username">
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