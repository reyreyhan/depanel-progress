<?php
$this->load->view("skeleton/head");
?>
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

                    <form action="<?php echo site_url('page/hasil_search');?>" method = "post">
                    <div class="col-sm-1 pull-right">
                    <input type="submit" value = "Cari" class="btn btn-warning" name="button" />
                    </div>

                    <div class="col-md-2 pull-right">
                      <input type="text" name="keyword" class="form-control" placeholder="Keyword">
                    </div>
                    </form>

                    <div class="clearfix"></div>
                    <div class="toppost"></div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                              <h4 class="pull-left title">Data Page</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                              <hr>
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Judul Indonesia</th>
                                        <th>Url Indonesia</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                      <?php
                                      foreach($ok as $u){ 
                                      ?>
                                        <tr>
                                            <td><?php echo $u->judul_id ?></td>
                                            <td><?php echo $u->url_id ?></td>
                                    
                                            <td>
                                                <a href="<?php echo base_url('page/edit/'.$u->url_id); ?>"><button type="button" class="btn btn-primary btn-fill btn-sm" name="button">Edit</button></a>
                                                <a href="<?php echo base_url('page/hapus/'.$u->id); ?>" onclick="javascript: return confirm('Yakin Hapus <?php echo $u->judul_id ?>?')"><button type="button" class="btn btn-danger btn-fill btn-sm" name="button">Hapus</button></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                                <div class="text-center">
                                    <ul class="pagination">
                                    <?php echo $halaman ?>
<!--                                         <li><a href="#">1</a></li>
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
          <h4 class="modal-title">Input Data Page</h4>
        </div>
        <div class="modal-body">
    <?php echo form_open_multipart('/page/write'); ?>
                                        <p>Kategori Page</p>
                                        <select class="form-control" id="sel1" name="kategori">
                                        
                                        <div class="input-group">
                                            <option value="Tentang Pens">Tentang Pens</option>
                                            <option value="Informasi">Informasi</option>
                                            <option value="Layanan">Layanan</option>
                                        </div>
                                        </select>
                                        <br>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Judul Indonesia</p>
                                                <input type="text" id="title_id" class="form-control" name="judul_id" value="" placeholder="Judul (Indonesia)" id="InputName" required>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Isi Indonesia</p>
                                    <textarea name="isi_id" id="content_id" rows="8" cols="40"></textarea><br>
                                    
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Judul Inggris</p>
                                                <input type="text" id="title_en" class="form-control" name="judul_en" value="" placeholder="Judul (English)" id="InputName" required>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Isi Inggris</p>
                                    <textarea name="isi_en" id="content_en" rows="8" cols="40"></textarea>
                                    <br>

                                    <p>Upload Gambar disini</p>
                                    <input id="file" type="file" name="userfile">
                                    <input hidden name="gambar_url" id="gambar" type="text" />

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
                                    <p>Keterangan Gambar</p>
                                    <textarea name="gambar_keterangan" id="content_en" rows="8" cols="40"></textarea>
                                    <br>
                                   


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
