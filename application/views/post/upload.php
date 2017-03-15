<?php
$this->load->view("skeleton/head");
?>
<link rel="stylesheet" href="<?php echo base_url('assets/css/pikaday.css'); ?>" media="screen" title="no title" charset="utf-8">
<body>

    <div class="wrapper">

        <?php
        $this->load->view("skeleton/sidebar")
        ?>

        <?php
        $this->load->view("skeleton/topmenu")
        ?>

    <?php echo form_open_multipart('/post/data'); ?>
    <br>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="header">
                                <div class="pull-left">
                                        <h4 class="title">Postingan Berita PENS</h4>
                                </div>
                                <div class="clearfix"></div>
                            <hr>
                            </div>
                            <div class="content">
                                <form action="post" method="post">

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

                                    <div class="row">
                                        <div class="col-md-12">
                                        <br>
                                            <button type="submit" class="btn btn-success pull-right btn-fill" name="upload" value="upload">Post</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php echo form_close();?>


        <?php
        $this->load->view("skeleton/footer")
        ?>

    </div>
</body>
<?php
$this->load->view("skeleton/mainscript")
?>
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
        $.post('http://ent.pens.ac.id/translate/',{'content_id':content,'title_id':title},function(data){
          console.log(data);
            // data = $.parseJSON(data);
            // tinyMCE.get('content_en').setContent(data.content_en);
            // $('#title_en').val(data['content_en']);
            // btn.attr('disabled',false);
            // btn.html('Translate');
        })
    })
})
</script>
</html>
