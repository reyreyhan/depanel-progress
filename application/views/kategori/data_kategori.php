<?php
$this->load->view("skeleton/head");
?>
<link rel="stylesheet" href="http://fullcalendar.io/js/fullcalendar-2.7.2/fullcalendar.css" media="screen" title="no title" charset="utf-8">
<link rel="stylesheet" href="http://fullcalendar.io/js/fullcalendar-2.7.2/fullcalendar.print.css" media="print" title="no title" charset="utf-8">
<body>

    <div class="wrapper">

        <?php
        $this->load->view("skeleton/sidebar")
        ?>

        <?php
        $this->load->view("skeleton/topmenu")
        ?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                <div class="col-md-12">
                    </div>
                    <div class="clearfix"></div>
                    <div class="toppost"></div>
                    <div class="col-sm-1 pull-right">
                    </div>
                    <div class="col-md-12">
                      <h2 class="title">Data Kategori PENS Post</h2>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="card">
                              <div class="header">
                                <div style="margin-bottom:-20px;"></div>
                              </div>
                              <div class="content table-responsive table-full-width">
                                 <table class="table table-hover table-striped">
                                      <thead>
                                          <th>Id Kategori</th>
                                          <th>Nama Kategori</th>
                                          <th>Slug</th>
                                          <th>Keterangan</th>
                                          
                                      </thead>
                                      <tbody>
                                  <?php
                                  foreach($ok as $u){ 
                                  ?>
                                          <tr>
                                              <td><?php echo $u->id_kategori ?></td>
                                              <td>
                                              <?php echo $u->nama_kategori ?>
                                              </a>
                                              </td>
                                              <td><?php echo $u->slug ?></td>
                                              <td><?php echo $u->deskripsi ?></td>
                                              
<!--                                                 <a href="<?php //echo base_url('kategori/edit/'.$u->id_kategori); ?>"><button type="button" class="btn btn-primary btn-fill btn-sm" name="button">Edit</button></a>
                                                <a href="<?php //echo base_url('kategori/hapus/'.$u->id_kategori); ?>"><button type="button" class="btn btn-danger btn-fill btn-sm" name="button">Hapus</button></a> -->
                                              
<!--                                               <td>
                                                  <button type="button" class="btn btn-primary btn-fill btn-sm" name="button">Edit</button>
                                                  <button type="button" class="btn btn-primary btn-fill btn-sm" name="button">Hapus</button>
                                              </td> -->
                                          </tr>
                                  <?php } ?>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>



        <?php
        $this->load->view("skeleton/footer")
        ?>

    </div>
</body>
<?php
$this->load->view("skeleton/mainscript")
?>
</html>
