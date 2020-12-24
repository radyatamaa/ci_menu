 <!-- Start Restaurant Menu -->
 <section id="mu-restaurant-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-restaurant-menu-area">

            <div class="mu-title">
              <span class="mu-subtitle">Discover</span>
              <h2>OUR MENU</h2>
            </div>

            <?php if (count($DataJenis) > 0) {
                    ?>
            <div class="mu-restaurant-menu-content">
              <ul class="nav nav-tabs mu-restaurant-menu">
              <?php
                            if (!empty($DataJenis)) {
                                foreach ($DataJenis as $ReadDS) {
                            ?>
                <li><a href="#<?php echo $ReadDS->id; ?>" data-toggle="tab"><?php echo $ReadDS->nama_jenis; ?></a></li>
                <!-- <li><a href="#non-coffee" data-toggle="tab">Non-Coffee</a></li> -->
                <?php
                                }
                            }

                            ?>
                             <?php } ?>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="1">
                  <div class="mu-tab-content-area">
                    <div class="row">
                    
                    <?php if (count($DataMenu) > 0) {
                      foreach($DataMenu as $index => $menu){
                        
                    ?>

                    <?php if ($index % 2 != 0){  ?>

                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                              <div class="media-left">
                                  <a href="#">
                                  <img  class="media-object" src="<?php echo base_url('upload/' . $menu->foto_menu); ?>" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><?php echo $menu->nama_menu . ' ' . $menu->nama_company; ?></h4>
                                  <span class="mu-menu-price"><?php echo 'Rp. ' . $menu->harga_menu; ?></span>
                                  <input type="hidden" name="id_menu[]" value="<?php echo $menu->id; ?>">                  
                                  <p><input class="mu-menu-price" type="number" name="qty[]" min="1" max="100"></p>
                                  <p><?php echo $menu->deskripsi_menu; ?></p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>

                    <?php }else{  ?>

                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                              <div class="media-left">
                                  <a href="#">
                                  <img  class="media-object" src="<?php echo base_url('upload/' . $menu->foto_menu); ?>" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><?php echo $menu->nama_menu . ' ' . $menu->nama_company; ?></h4>
                                  <span class="mu-menu-price"><?php echo 'Rp. ' . $menu->harga_menu; ?></span>
                                  <input type="hidden" name="id_menu[]" value="<?php echo $menu->id; ?>">                  
                                  <p><input class="mu-menu-price" type="number" name="qty[]" min="1" max="100"></p>
                                  <p><?php echo $menu->deskripsi_menu; ?></p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                       </div>
                     </div>
                    
                    <?php }} }?>
                   </div>
                 </div>
                </div>

                <div class="tab-pane fade" id="2">
                  <div class="mu-tab-content-area">
                    <div class="row">

                    <?php if (count($DataMenuNonCoffe) > 0) {
                      foreach($DataMenuNonCoffe as $index => $menu){
                        
                    ?>

                    <?php if ($index % 2 != 0){  ?>

                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                              <div class="media-left">
                                  <a href="#">
                                  <img  class="media-object" src="<?php echo base_url('upload/' . $menu->foto_menu); ?>" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><?php echo $menu->nama_menu . ' ' . $menu->nama_company; ?></h4>
                                  <span class="mu-menu-price"><?php echo 'Rp. ' . $menu->harga_menu; ?></span>
                                  <input type="hidden" name="id_menu[]" value="<?php echo $menu->id; ?>">                  
                                  <p><input class="mu-menu-price" type="number" name="qty[]" min="1" max="100"></p>
                                  <p><?php echo $menu->deskripsi_menu; ?></p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>

                    <?php }else{  ?>

                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                              <div class="media-left">
                                  <a href="#">
                                  <img  class="media-object" src="<?php echo base_url('upload/' . $menu->foto_menu); ?>" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><?php echo $menu->nama_menu . ' ' . $menu->nama_company; ?></h4>
                                  <span class="mu-menu-price"><?php echo 'Rp. ' . $menu->harga_menu; ?></span>
                                  <input type="hidden" name="id_menu[]" value="<?php echo $menu->id; ?>">                  
                                  <p><input class="mu-menu-price" type="number" name="qty[]" min="1" max="100"></p>
                                  <p><?php echo $menu->deskripsi_menu; ?></p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                       </div>
                     </div>
                    
                    <?php }} }?>

                   </div>
                 </div>
                </div>

                <div class="form-group">
                <input id="no_meja" name="no_meja" type="text" class="form-control" placeholder="No Meja">
                </div>

                <button id="btnShow" type="submit" class="mu-readmore-btn">Make Reservation</button>
                   </div>
                   <!-- <input id="btnShow" type="button" value="Show PDF" /> -->
<div id="dialog" style="display: none">
</div>
                 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Restaurant Menu -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
  <link href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/blitzer/jquery-ui.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript">
    jQuery(function($){
        var fileName = "Bill Pesanan";
        $("#btnShow").click(function () {
          debugger
          var fd = new FormData(); 
    var noMeja = document.getElementById("no_meja").value;
    fd.append( 'no_meja', noMeja);   
    var elements = document.getElementsByName("qty[]");
    for(var x=0; x < elements.length; x++)   // comparison should be "<" not "<="
    {
      fd.append( 'qty[]', elements[x].value);
    }
  
    var elementsMenu = document.getElementsByName("id_menu[]");
    for(var x=0; x < elementsMenu.length; x++)   // comparison should be "<" not "<="
    {
      fd.append('id_menu[]', elementsMenu[x].value);
    }
    $.ajax({
  url: "<?php echo site_url(); ?>" + "/Welcome/AddOrder",
  data: fd,
  processData: false,
  contentType: false,
  type: 'POST',
  success: function(data){
    alert('Sukses Order');
    
    $("#dialog").dialog({
                modal: true,
                title: fileName,
                width: 540,
                height: 450,
                buttons: {
                    Close: function () {
                        $(this).dialog('close');
                        location.reload();
                    }
                },
                open: function () {
                  var request = JSON.parse(data);
                    var object = `<!DOCTYPE html>
<html>
<head>
<title>Biling Pesanan</title>
</head>
<body>

<h1>Biling Pesanan</h1>
<table>
<tr>
<td>No Meja</td>
<td>: ` + request.noMeja + `</td>
</tr>
<tr>
<td>Total Yang Harus Di Bayar</td>
<td>: ` + request.totalharga + `</td>
</tr>
<tr>
<td>Status </td>
<td>: ` + request.status + `</td>
</tr>



</table>

</body>
</html>
`;
           
                    $("#dialog").html(object);
                }
            });

            
  }
  });
          
        });
    });
</script>

