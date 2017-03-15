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
                    <form action="<?php echo site_url('dp/hasil_search');?>" method = "post">
                    <div class="col-sm-1 pull-right">
                      <input type="submit" value = "Cari" class="btn btn-warning" name="button" />
                    </div>
                    <div class="col-md-2 pull-right">
                      <input type="text" name="keyword" class="form-control" placeholder="Keyword">
                    </div>
                    </form>
                    <div class="col-md-12">
                      <h2 class="title">Data Departement</h2>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="card">
                              <div class="header">
                                <div style="margin-bottom:-20px;"></div>
                              </div>
                              <div class="content table-responsive table-full-width">
                                 <table class="table table-hover table-striped">
                                      <thead>
                                          <th>Gambar</th>
                                          <th>Nama</th>
                                          <th>Keterangan</th>
                                          <th>Nama Kadep</th>
                                          <th>Fotone</th>
                                          <th>Action</th>
                                      </thead>
                                      <tbody>
                                  <?php
                                  foreach($ok as $u){ 
                                  ?>
                                          <tr>
                                              <td>
                                              <img height="50" width="50" src="<?php echo base_url(). "assets/uploads/departemen/".$u->gambar ?>">
                                              </td>
                                              <td><?php echo $u->nama_dp ?></td>
                                              <td><?php echo $u->deskripsi ?></td>
                                              <td><?php echo $u->kadep ?></td>
                                              <td>
                                              <img height="50" width="50" src="<?php echo base_url(). "assets/uploads/departemen_k/".$u->gambar_k ?>">
                                              </td>
                                              <td>
                                                <a href="<?php echo base_url('dp/edit/'.$u->id); ?>"><button type="button" class="btn btn-primary btn-fill btn-sm" name="button">Edit</button></a>
                                                <a href="<?php echo base_url('dp/hapus/'.$u->id); ?>" onclick="javascript: return confirm('Yakin Hapus <?php echo $u->nama_dp ?>?')"><button type="button" class="btn btn-danger btn-fill btn-sm" name="button">Hapus</button></a>
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
                                      
<!--                                           <li><a href="#">1</a></li>
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
          <h4 class="modal-title">Input Data Departemen</h4>
        </div>
        <div class="modal-body">
    <?php echo form_open_multipart('/dp/data'); ?>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Nama Departemen</p>
                                                <input type="text" id="title_id" class="form-control" name="nama_dp" value="" placeholder="Nama Departement" id="InputName" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Keterangan</p>
                                                    <textarea name="deskripsi" class="post" id="content_id" rows="8" cols="40"></textarea><br>
                                            </div>
                                        </div>
                                    </div>


                                    <p>Upload Gambar Departemen Disini</p>
                                    <input id="file" type="file" name="userfile">
                                    <input hidden name="gambar" id="gambar" type="text" />

                                    <script type="text/javascript">
                                    document.getElementById('file').onchange = uploadOnChange;

                                    function uploadOnChange() {
                                        var gambar = this.value;
                                        var lastIndex = gambar.lastIndexOf("\\");
                                        if (lastIndex >= 0) {
                                            gambar = gambar.substring(lastIndex + 1);
                                        }
                                        document.getElementById('gambar').value = gambar;
                                    }
                                    </script>
                                    <br>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Nama Kepala Departemen</p>
                                                <input type="text" id="title_id" class="form-control" name="kadep" value="" placeholder="Nama Kepala Departemen" id="InputName" required>
                                            </div>
                                        </div>
                                    </div>

                                    <input hidden name="gambar_k" id="gambar" type="text" value="sek error"/>

                                    <br>
                                   <p>Upload Foto Kepala Departemen Disini</p>
                                    <input id="file_k" type="file" name="userfile2">
                                    <input hidden name="gambar_k" id="poto" type="text" />

                                    <script type="text/javascript">
                                    document.getElementById('file_k').onchange = uploadOnChange;

                                    function uploadOnChange() {
                                        var gambar = this.value;
                                        var lastIndex = gambar.lastIndexOf("\\");
                                        if (lastIndex >= 0) {
                                            gambar = gambar.substring(lastIndex + 1);
                                        }
                                        document.getElementById('poto').value = gambar;
                                    }
                                    </script>

        </div>
        <div class="modal-footer">
        <tr>
          <td>
            <button class="btn btn-danger btn-fill btn-sm" data-dismiss="modal">Close</button>
          </td>
            <td>
              <button type="submit" class="btn btn-success btn-fill btn-sm" name="up" value="up">Post</button>
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
