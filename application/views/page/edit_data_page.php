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

    <?php echo form_open_multipart('page/update'); ?>
    <br>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="header">
                                <div class="pull-left">
                                <h4 class="title">Page Editor</h4>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="content">
                                <form action="post" method="post">
                                    <?php foreach($page as $u){ ?>
                                    <div class="content">
                                <form action="post" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Judul Indonesia</p>
                                                <input value="<?php echo $u->judul_id;?>" type="text" id="title_id" class="form-control" name="judul_id" value="" placeholder="Title (Indonesia)">
                                            </div>
                                        </div>
                                    </div>
                                    <p>Isi Indonesia</p>
                                    <textarea name="isi_id" id="content_id" rows="8" cols="40"><?php echo $u->isi_id;?></textarea><br>
                                    <button type="button" id="translate-btn" class="btn btn-primary btn-fill btn-sm pull-right" name="button"><i class="fa fa-globe"></i> Translate</button>
                                    <button type="button" class="btn btn-primary btn-fill pull-right btn-sm paddingright" name="button"><i class="fa fa-picture-o"></i> Upload image</button>
                                    <br><br><br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Judul Inggris</p>
                                                <input value="<?php echo $u->judul_en;?>" type="text" id="title_en" class="form-control" name="judul_en" value="" placeholder="Title (English)">
                                            </div>
                                        </div>
                                    </div>
                                    <p>Isi Inggris</p>
                                    <textarea name="isi_en" id="content_en" rows="8" cols="40"><?php echo $u->isi_en;?></textarea>
                                    <br>

                                    <input hidden value="<?php echo $u->gambar_url;?>" name="gambar_url" id="gambar" type="text" />
                                    <input hidden value="<?php echo $u->id;?>" name="id" type="text" />

                                    <br>
                                    <p>Keterangan Gambar</p>
                                    <textarea name="gambar_keterangan" id="content_en" rows="8" cols="40"><?php echo $u->gambar_keterangan;?></textarea>
                                    <br>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-success pull-right btn-fill" name="upload" value="upload">Post</button>
                                            <button type="submit" class="btn btn-primary pull-right btn-fill paddingright" name="button">Save as Draft</button>
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
