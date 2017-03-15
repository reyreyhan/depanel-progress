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
                        <button  data-toggle="modal" data-target="#wkwk" type="button" class="btn btn-primary pull-right paddingright" name="button"><i class="fa fa-pencil"></i> Write New</button>
                    </div>
                    <div class="clearfix"></div>
                    <div class="toppost"></div>
                    <form action="<?php echo site_url('kartun/hasil_search');?>" method = "post">
                    <div class="col-sm-1 pull-right">
                      <input type="submit" value = "Cari" class="btn btn-warning" name="button" />
                    </div>
                    <div class="col-md-2 pull-right">
                      <input type="text" name="keyword" class="form-control" placeholder="Keyword">
                    </div>
                    </form>
                      <div class="col-md-12">
                      <h2 class="title">Data Kartun</h2>
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
                                          <th>Gambar</th>
                                          <th>Keterangan</th>
                                          <th>Link</th>
                                          <th>Action</th>
                                      </thead>
                                      <tbody>
                                  <?php
                                  foreach($ok as $u){ 
                                  ?>
                                          <tr>
                                              <td><?php echo $u->judul ?></td>
                                              <td>
                                                <a href ="<?php echo $u->url ?>">
                                                <img height="50" width="50" src="<?php echo base_url(). "assets/uploads/kartun/".$u->gambar ?>">
                                                  </a>
                                              </td>
                                              <td><?php echo $u->keterangan ?></td>
                                              <td><?php echo $u->url ?></td>
                                              <td>
                                                
                                                <a data-toggle="modal" 
                                                data-id="<?php echo $u->id ?>" 
                                                data-judul="<?php echo $u->judul ?>"
                                                data-keterangan="<?php echo $u->keterangan ?>"
                                                data-posisi="<?php echo $u->posisi ?>"
                                                data-url="<?php echo $u->url ?>"
                                                class="mancingjs btn btn-primary btn-fill btn-sm" href="#edit">
                                                Edit
                                                </a>

                                                <a href="<?php echo base_url('kartun/hapus/'.$u->id); ?>" onclick="javascript: return confirm('Yakin Hapus <?php echo $u->judul ?>?')"><button type="button" class="btn btn-danger btn-fill btn-sm" name="button">Hapus</button></a>
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
          <h4 class="modal-title">Input Data Kartun</h4>
        </div>
        <div class="modal-body">
    <?php echo form_open_multipart('/kartun/data'); ?>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Judul</p>
                                                <input type="text" id="title_id" class="form-control" name="judul" value="" placeholder="Judul Kartun" id="InputName" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Keterangan</p>
                                                    <textarea id="InputName" class="form-control" name="keterangan" class="post" id="content_id" rows="8" cols="40" placeholder="Keterangan Kartun"></textarea><br>
                                            </div>
                                        </div>
                                    </div>
                                      
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Url</p>
                                                <input type="text" id="title_id" class="form-control" name="url" value="" placeholder="Url Kartun">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Posisi</p>
                                                <input type="text" id="title_id" class="form-control" name="posisi" value="" placeholder="???????">
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

<!-- Modal -->
  <div class="modal fade" id="edit" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Data Newsflash</h4>
        </div>
        <div class="modal-body">
    <?php echo form_open_multipart('/kartun/update'); ?>

         <input hidden type="text" name="id" id="id" value=""/>
         <!-- <input  type="text" name="keterangan" id="keterangan" value=""/> -->
         
         
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Judul</p>
                                                <input type="text" id="judul" class="form-control" name="judul" value="" placeholder="Judul Newsflash" id="InputName" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Keterangan</p>
                                                    <textarea class="form-control post" name="keterangan"  rows="8" cols="40" ></textarea><br>
                                            </div>
                                        </div>
                                    </div>                                 
                                      
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Url</p>
                                                <input type="text" id="url" class="form-control" name="url" value="" placeholder="Url Newsflash">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Posisi</p>
                                                <input type="text" id="posisi" class="form-control" name="posisi" value="" placeholder="???????">
                                            </div>
                                        </div>
                                    </div>

                                    <p>Upload Jika Ingin Ganti</p>
                                    <input  id="file22" type="file" name="userfile">
                                    <input  hidden name="gambar" id="gambar22" type="text" />

                                    <script type="text/javascript">
                                    document.getElementById('file22').onchange = uploadOnChange;

                                    function uploadOnChange() {
                                        var gambar = this.value;
                                        var lastIndex = gambar.lastIndexOf("\\");
                                        if (lastIndex >= 0) {
                                            gambar = gambar.substring(lastIndex + 1);
                                        }
                                        document.getElementById('gambar22').value = gambar;
                                    }
                                    </script>  

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

<script type="text/javascript">
$(document).on("click", ".mancingjs", function () {

     var myNewsflashId = $(this).data('id');
     $(".modal-body #id").val( myNewsflashId );

     var myNewsflashJudul = $(this).data('judul');
     $(".modal-body #judul").val( myNewsflashJudul );

     var myNewsflashurl = $(this).data('url');
     $(".modal-body #url").val( myNewsflashurl );

     var myNewsflashketerangan = $(this).data('keterangan');
     $(".modal-body #keterangan").val( myNewsflashketerangan );

     var myNewsflashposisi = $(this).data('posisi');
     $(".modal-body #posisi").val( myNewsflashposisi );

});
</script>

</html>
