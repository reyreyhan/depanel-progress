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
                        <button data-toggle="modal" data-target="#wkwk" type="button" class="btn btn-primary pull-right paddingright" name="button"><i class="fa fa-pencil"></i> Write New</button>
                    </div>
                    <div class="clearfix"></div>
                    <div class="toppost"></div>
                    <form action="<?php echo site_url('anggota/hasil_search');?>" method = "post">
                    <div class="col-sm-1 pull-right">
                      <input type="submit" value = "Cari" class="btn btn-warning" name="button" />
                    </div>
                    <div class="col-md-2 pull-right">
                      <input type="text" name="kw" class="form-control" placeholder="Keyword">
                    </div>
                    </form>
                    <div class="col-md-12">
                      <h2 class="title">Data Anggota</h2>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="card">
                              <div class="header">
                                <div style="margin-bottom:-20px;"></div>
                              </div>
                              <div class="content table-responsive table-full-width">
                                 <table class="table table-hover table-striped">
                                      <thead>
                                          <th>Id Anggota</th>
                                          <th>Nama</th>
                                          <th>Job</th>
                                          <th>Email</th>
                                          
                                      </thead>
                                      <tbody>
                                  <?php
                                  foreach($ok as $u){ 
                                  ?>
                                          <tr>
                                              <td><?php echo $u->id_pengguna ?></td>
                                              <td>
                                              <?php echo $u->nama ?>
                                              </a>
                                              </td>
                                              <td><?php echo $u->jabatan ?></td>
                                              <td><?php echo $u->email ?></td>
                                              <td>
                                                <a href="<?php echo base_url('anggota/edit/'.$u->id_pengguna); ?>"><button type="button" class="btn btn-primary btn-fill btn-sm" name="button">Edit</button></a>
                                                <a href="<?php echo base_url('anggota/hapus/'.$u->id_pengguna); ?>" onclick="javascript: return confirm('Yakin Hapus <?php echo $u->nama ?>?')"><button type="button" class="btn btn-danger btn-fill btn-sm" name="button">Hapus</button></a>
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
                                        <?php 
                                          echo $halaman;
                                        ?>

<!--                                      <li><a href="#">1</a></li>
                                          <li><a href="#">2</a></li>
                                          <li><a href="#">3</a></li>
                                          <li><a href="#">4</a></li>
                                          <li><a href="#">5</a></li> -->
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

<!-- Modal -->
  <div class="modal fade" id="wkwk" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Input Data Anggota</h4>
        </div>
        <div class="modal-body">
    <?php echo form_open_multipart('/anggota/data'); ?>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Nama Anggota</p>
                                                <input type="text" id="title_id" class="form-control" name="nama" value="" placeholder="Nama Anggota" id="InputName" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="InputName">Job</label>
                                        <select class="form-control" id="sel1" name="jabatan">
                                        <div class="input-group">
                                            <option>Penulis</option>
                                            <option>Editor</option>
                                            <option>Fotografer</option>
                                        </div>
                                        </select>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Email</p>
                                                <input type="text" id="title_id" class="form-control" name="email" value="" placeholder="Nama Email" id="InputName" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Password</p>
                                                <input type="password" id="title_id" class="form-control" name="password" value="" placeholder="Isi Password" id="InputName" required>
                                            </div>
                                        </div>
                                    </div>                                      


        </div>
        <div class="modal-footer">
        <tr>
          <td>
            <button class="btn btn-danger btn-fill btn-sm" data-dismiss="modal">Close</button>
          </td>
            <td>
              <button type="submit" class="btn btn-success btn-fill btn-sm" name="upload" value="upload">Post</button>
          </td>
        </tr>
        </div>

<?php echo form_close();?>
      </div>

  </center>
  </div></div></div>

<script type="text/javascript" src="<?php echo base_url('assets/js/tinymce/tinymce.min.js'); ?>"></script>
<script type="text/javascript">
tinyMCE.init({
    selector:'textarea',
    plugins: [
        'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        'searchreplace wordcount visualblocks visualchars code fullscreen autoresize',
        'insertdatetime media nonbreaking save table contextmenu directionality',
        'emoticons template paste textcolor colorpicker textpattern imagetools'
    ]
})
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("#translate-btn").click(function(){
        btn = $(this);
        content = tinyMCE.get('content_id').getContent({format: 'text'});
        btn.attr('disabled','disabled');
        btn.html('Translating...');
        title = $('#title_id').val();
        $.post('http://ent.pens.ac.id/translator/',{'content_id':content,'title_id':title},function(data){
            data = $.parseJSON(data);
            tinyMCE.get('content_en').setContent(data['content']);
            $('#title_en').val(data['title']);
            btn.attr('disabled',false);
            btn.html('Translate');
        })
    })
})
</script>


<?php
$this->load->view("skeleton/mainscript")
?>
</html>
