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
                <li><a href="#<?php echo $ReadDS->id_jenis; ?>" data-toggle="tab"><?php echo $ReadDS->nama_jenis; ?></a></li>
                <!-- <li><a href="#non-coffee" data-toggle="tab">Non-Coffee</a></li> -->
                <?php
                                }
                            }

                            ?>
                             <?php } ?>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="coffee">
                  <div class="mu-tab-content-area">
                    <div class="row">

                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                              <div class="media-left">
                                  <a href="#">
                                  <img  class="media-object" src="<?php echo base_url('assets/assets/img/americano.jpg'); ?>" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">English Breakfast</h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p><input class="mu-menu-price" type="number" id="quantity" name="quantity" min="1" max="100"></p>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                  <img  class="media-object" src="<?php echo base_url('assets/assets/img/americano.jpg'); ?>" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">English Breakfast</h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p><input class="mu-menu-price" type="number" id="quantity" name="quantity" min="1" max="100"></p>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                              <div class="media-left">
                                  <a href="#">
                                  <img  class="media-object" src="<?php echo base_url('assets/assets/img/americano.jpg'); ?>" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">English Breakfast</h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p><input class="mu-menu-price" type="number" id="quantity" name="quantity" min="1" max="100"></p>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>

                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                              <div class="media-left">
                                  <a href="#">
                                  <img  class="media-object" src="<?php echo base_url('assets/assets/img/americano.jpg'); ?>" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">English Breakfast</h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p><input class="mu-menu-price" type="number" id="quantity" name="quantity" min="1" max="100"></p>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                              <div class="media-left">
                                  <a href="#">
                                  <img  class="media-object" src="<?php echo base_url('assets/assets/img/americano.jpg'); ?>" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">English Breakfast</h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p><input class="mu-menu-price" type="number" id="quantity" name="quantity" min="1" max="100"></p>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                              <div class="media-left">
                                  <a href="#">
                                  <img  class="media-object" src="<?php echo base_url('assets/assets/img/americano.jpg'); ?>" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">English Breakfast</h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p><input class="mu-menu-price" type="number" id="quantity" name="quantity" min="1" max="100"></p>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                       </div>
                     </div>
                    

                   </div>
                 </div>
                </div>

                <div class="tab-pane fade" id="non-coffee">
                  <div class="mu-tab-content-area">
                    <div class="row">

                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                              <div class="media-left">
                                  <a href="#">
                                  <img  class="media-object" src="<?php echo base_url('assets/assets/img/americano.jpg'); ?>" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">English Breakfast</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                              <div class="media-left">
                                  <a href="#">
                                  <img  class="media-object" src="<?php echo base_url('assets/assets/img/americano.jpg'); ?>" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Chines Breakfast</a></h4>
                                  <span class="mu-menu-price">$11.95</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                              <div class="media-left">
                                  <a href="#">
                                  <img  class="media-object" src="<?php echo base_url('assets/assets/img/americano.jpg'); ?>" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Indian Breakfast</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                        </div>
                      </div>

                     <div class="col-md-6">
                       <div class="mu-tab-content-right">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                              <div class="media-left">
                                  <a href="#">
                                  <img  class="media-object" src="<?php echo base_url('assets/assets/img/americano.jpg'); ?>" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">English Breakfast</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                              <div class="media-left">
                                  <a href="#">
                                  <img  class="media-object" src="<?php echo base_url('assets/assets/img/americano.jpg'); ?>" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Chines Breakfast</a></h4>
                                  <span class="mu-menu-price">$11.95</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                              <div class="media-left">
                                  <a href="#">
                                  <img  class="media-object" src="<?php echo base_url('assets/assets/img/americano.jpg'); ?>" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Indian Breakfast</a></h4>
                                  <span class="mu-menu-price">$15.85</span>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                </div>
                              </div>
                            </li>
                          </ul>   
                       </div>
                     </div>

                   </div>
                 </div>
                </div>
                <button type="submit" class="mu-readmore-btn">Make Reservation</button>
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