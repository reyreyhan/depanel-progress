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
                    <form action="<?php echo site_url('jurusan/hasil_search');?>" method = "post">
                    <div class="col-sm-1 pull-right">
                      <input type="submit" value = "Cari" class="btn btn-warning" name="button" />
                    </div>
                    <div class="col-md-2 pull-right">
                      <input type="text" name="keyword" class="form-control" placeholder="Keyword">
                    </div>
                    </form>
                    <div class="col-md-12">
                      <h2 class="title">Data Jurusan</h2>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="card">
                              <div class="header">
                                <div style="margin-bottom:-20px;"></div>
                              </div>
                              <div class="content table-responsive table-full-width">
                                 <table class="table table-hover table-striped">
                                      <thead>
                                          <th style="width: 20%">Nama</th>
                                          <th style="width: 40%">Keterangan</th>
                                          <th style="width: 20%">Nama Departemen</th>
                                          <th style="width: 20%">Action</th>
                                      </thead>
                                      <tbody>
                                  <?php
                                  foreach($ok as $u){ 
                                  ?>
                                          <tr>
                                              <td>
                                              <a href="<?php echo $u->url ?>">
                                              <?php echo $u->nama ?>
                                              </a>
                                              </td>
                                              <td><?php echo $u->deskripsi ?></td>
                                              <td><?php echo $u->nama_dp ?></td>
                                              <td>

                                                <a data-toggle="modal" 
                                                data-id="<?php echo $u->id ?>" 
                                                data-nama="<?php echo $u->nama ?>"
                                                data-deskripsi="<?php echo $u->deskripsi ?>"
                                                data-url="<?php echo $u->url ?>"
                                                data-id_departemen="<?php echo $u->id_departemen ?>"
                                                class="mancingjs btn btn-primary btn-fill btn-sm" href="#edit">
                                                Edit
                                                </a>

                                                <a href="<?php echo base_url('jurusan/hapus/'.$u->id); ?>" onclick="javascript: return confirm('Yakin Hapus <?php echo $u->nama ?>?')"><button type="button" class="btn btn-danger btn-fill btn-sm" name="button">Hapus</button></a>
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
          <h4 class="modal-title">Input Data Jurusan</h4>
        </div>
        <div class="modal-body">
    <?php echo form_open_multipart('/jurusan/data'); ?>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Nama Jurusan</p>
                                                <input type="text" id="title_id" class="form-control" name="nama" value="" placeholder="Nama Jurusan" id="InputName" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Url</p>
                                                <input type="text" id="title_id" class="form-control" name="url" value="" placeholder="Url Jurusan" id="InputName" required>
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

                                    <div class="form-group">
                                        <label for="InputName">Departemen</label>
                                        <select class="form-control" id="sel1" name="id_departemen">
                                        <div class="input-group">
                                        <?php foreach($join as $u) { ?>
                                            <!-- <option value="28">Teknik Elektronika</option> -->
                                            <option value="<?php echo $u->id ?>"><?php echo $u->nama_dp ?></option>
                                        <?php } ?>
                                        </div>
                                        </select>
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

<!-- Modal -->
  <div class="modal fade" id="edit" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Data Jurusan</h4>
        </div>
        <div class="modal-body">
    <?php echo form_open_multipart('/jurusan/update'); ?>

         <input hidden type="text" name="id" id="id" value=""/>
         <input hidden type="text" name="id_departemen" id="id_departemen" value=""/>
         <!-- <input  type="text" name="keterangan" id="keterangan" value=""/> -->
         
         
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Nama Jurusan</p>
                                                <input type="text" id="nama" class="form-control" name="nama" value="" placeholder="Nama Jurusan" id="InputName" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Deskripsi Jurusan</p>
                                                    <textarea class="form-control post" name="deskripsi"  rows="8" cols="40" ></textarea><br>
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

     var myNewsflashNama = $(this).data('nama');
     $(".modal-body #nama").val( myNewsflashNama );

     var myNewsflashurl = $(this).data('url');
     $(".modal-body #url").val( myNewsflashurl );

     var myNewsflashdeskripsi = $(this).data('deskripsi');
     $(".modal-body #deskripsi").val( myNewsflashdeskripsi );

     var myNewsflashid_departemen = $(this).data('id_departemen');
     $(".modal-body #id_departemen").val( myNewsflashid_departemen );

});
</script>


</html>
