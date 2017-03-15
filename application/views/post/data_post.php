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
  <!--                    <a href="<?php //echo base_url('kategori');?>"><button type="button" class="btn btn-primary pull-right" name="button"><i class="fa fa-archive"></i> Categories</button></a>
                        <button data-toggle="modal" data-target="#wkwk" type="button" class="btn btn-primary pull-right paddingright" name="button"><i class="fa fa-pencil"></i> Write New</button>
  -->                <a href="<?php echo base_url('post/upload');?>"><button type="button" class="btn btn-primary pull-right paddingright" name="button"><i class="fa fa-pencil"></i> Write New</button>
                      </a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="toppost"></div>

                    <form action="<?php echo site_url('post/hasil_search');?>" method = "post">
                    <div class="col-sm-1 pull-right">
                    <input type="submit" value = "Cari" class="btn btn-warning" name="button" />
                      <!-- <button type="submit" class="btn btn-warning" name="button">Search</button> -->
                    </div>

                    <div class="col-md-2 pull-right">
                      <input type="text" name="keyword" class="form-control" placeholder="Keyword">
                    </div>
                    </form>

<!--                     <div class="col-md-2 pull-right">
                      <input type="date" name="datefilter" class="form-control">
                    </div> -->


                    <div class="col-md-12">
                      <h2 class="title">Data Postingan</h2>
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
                                          <th>Penulis</th>
                                          <th>Editor</th>
                                          <th>Jenis Kegiatan</th>
                                          <th>Featured</th>
                                          <th>Action</th>
                                      </thead>
                                      <tbody>
                                  <?php
                                  foreach($ok as $u){
                                  ?>
                                          <tr>

                                              <td><?php echo $u->judul_id ?></td>
                                              <td><?php echo $u->id_penulis?></td>
                                              <td><?php echo $u->id_editor ?></td>
                                              <td><?php echo $u->nama_kategori ?></td>
                                              <td><?php echo $u->featured ?></td>
                                              <td>
                                                <a href="<?php echo base_url('post/edit/'.$u->id); ?>"><button type="button" class="btn btn-primary btn-fill btn-sm" name="button">Edit</button></a>

                                                <a href="<?php echo base_url('post/hapus/'.$u->id); ?>" onclick="javascript: return confirm('Yakin Hapus <?php echo $u->judul_id ?> ?')"><button type="button" class="btn btn-danger btn-fill btn-sm" name="button">Hapus</button></a>

                                                <!-- <a href="<?php // echo base_url('post/detail/'.$u->id); ?>"><button type="button" class="btn btn-primary btn-fill btn-sm" name="button">Detail</button></a>
                                                -->
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
                                      <?php echo $halaman ?>

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
          <h4 class="modal-title">Input Data Post</h4>
        </div>
        <div class="modal-body">
    <?php echo form_open_multipart('/post/data'); ?>

                                    <div class="form-group">
                                        <label for="InputName">Kategori Postingan</label>
                                        <select class="form-control" id="sel1" name="id_kategori">
                                        <div class="input-group">
                                            <?php
                                              foreach($ok_k as $u){
                                              ?>
                                            <option value="<?php echo $u->id_kategori ?>"><?php echo $u->nama_kategori ?></option>
                                            <?php } ?>
                                        </div>
                                        </select>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Judul Indo</p>
                                                <input type="text" id="title_id" class="form-control" name="judul_id" value="" placeholder="Title (ID)" id="InputName" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Isi Postingan Indonesia</p>
                                                    <textarea name="isi_id" class="post" id="content_id" rows="8" cols="40"></textarea><br>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="button" id="translate-btn" class="btn btn-primary btn-fill btn-sm pull-right" name="button"><i class="fa fa-globe"></i> Translate</button>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Judul Inggris</p>
                                                <input type="text" id="title_en" class="form-control" name="judul_en" value="" placeholder="Title (EN)" id="InputName" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Isi Postingan Inggris</p>
                                                    <textarea name="isi_en" class="post" id="content_en" rows="8" cols="40"></textarea><br>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <p>Fotografer</p>
                                        <select class="form-control" id="sel1" name="id_fotografer">
                                        <div class="input-group">
                                            <option></option>
                                              <?php
                                              foreach($ok_poto as $u){
                                              ?>
                                            <option><?php echo $u->nama ?></option>
                                            <?php } ?>
                                            <option>Panitia Acara</option>
                                        </div>
                                        </select>
                                    </div>

                                   <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Editor</p>
                                                <input type="text" class="form-control" name="id_editor" value="<?php echo $this->session->userdata("nama"); ?>" placeholder="Nama Editor" id="InputName" required readonly="">
                                            </div>
                                        </div>
                                    </div>

                                    <p>Upload Gambar disini</p>
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

                                    <p>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Keterangan Gambar</p>
                                                    <textarea name="gambar_keterangan" class="post" id="content_gambar" rows="8" cols="40"></textarea><br>
                                            </div>
                                        </div>
                                    </div>

                                    <input hidden type="text" id="gambar" name="featured" value="0">
                                    <input type="checkbox" name="featured" value="1"> Featured


                                    <div class="form-group">
                                        <p>Penulis</p>
                                        <select class="form-control" id="sel1" name="id_penulis">
                                        <div class="input-group">
                                              <?php
                                              foreach($ok_p as $u){
                                              ?>
                                            <option><?php echo $u->nama ?></option>
                                            <?php } ?>
                                        </div>
                                        </select>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Youtube</p>
                                                <input type="text" id="youtube" class="form-control" name="youtube" value="" placeholder="Link Youtube">
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
