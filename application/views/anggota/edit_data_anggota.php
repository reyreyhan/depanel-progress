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

    <?php echo form_open_multipart('/anggota/update'); ?>
    <br>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="header">
                                <div class="pull-left">
                                        <h4 class="title">Anggota Editor</h4>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="content">
                                <form action="post" method="post">
                                    <?php foreach($anggota as $u) { ?>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Nama </p>
                                                <input type="text" id="title_id" class="form-control" name="nama" value="<?php echo $u->nama ?>" placeholder="Masukkan Nama">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="InputName">Job</label>
                                        <select class="form-control" id="sel1" name="jabatan">
                                        <div class="input-group">
                                              ?>
                                            <option value="<?php echo $u->jabatan ?>" selected hidden><?php echo $u->jabatan ?></option>
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
                                                <input type="text" id="title_id" class="form-control" name="email" value="<?php echo $u->email ?>" placeholder="Masukkan Email">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Password</p>
                                                <input type="text" id="title_id" class="form-control" name="password" value="<?php echo $u->password ?>" placeholder="Masukkan Password">
                                            </div>
                                        </div>
                                    </div>

                                    <input  hidden type="text" name="id_pengguna" value="<?php echo $u->id_pengguna ?>">


                                    <div class="row">
                                        <div class="col-md-12">
                                        <br>
                                            <button type="submit" class="btn btn-success pull-right btn-fill" name="upload" value="upload">Post</button>
                                        </div>
                                    </div>
                                    <?php } ?>
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
</html>
