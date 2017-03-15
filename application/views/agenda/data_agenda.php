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
                      <h2 class="title">Data Agenda</h2>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="card">
                              <div class="header">
                                <div style="margin-bottom:-20px;"></div>
                              </div>
                              <div class="content table-responsive table-full-width">
                                 <table class="table table-hover table-striped">
                                      <thead>
                                          <th>Judul</th>
                                          <th>Tempat</th>
                                          <th>Waktu</th>
                                          <th>Penyelenggara</th>
                                          <th>Isi</th>
                                          <th>Action</th>
                                      </thead>
                                      <tbody>
                                  <?php
                                  foreach($ok as $u){ 
                                  ?>
                                            <tr>
                                              <td><?php echo $u->nama ?></td>
                                              <td><?php echo $u->tempat ?></td>
                                              <td><?php echo $u->waktu ?></td>
                                              <td><?php echo $u->penyelenggara ?></td>
                                              <td><?php echo $u->isi ?></td>
                                              <td>
                                              <?php echo anchor('agenda/edit/'.$u->slug, 'Edit'); ?>
                                              <?php echo " || " ?>
                                              <?php echo anchor('agenda/hapus/'.$u->id,'Hapus'); ?>
                                              </td>
<!--                                               <td>
                                                  <button type="button" class="btn btn-primary btn-fill btn-sm" name="button">Edit</button>
                                                  <button type="button" class="btn btn-primary btn-fill btn-sm" name="button">Hapus</button>
                                              </td> -->
                                          </tr>
                                  <?php } ?>
                                      </tbody>
                                  </table>
                                  <div class="text-center">
                                      <ul class="pagination">
                                          <li><a href="#">1</a></li>
                                          <li><a href="#">2</a></li>
                                          <li><a href="#">3</a></li>
                                          <li><a href="#">4</a></li>
                                          <li><a href="#">5</a></li>
                                      </ul>
                                  </div>
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
