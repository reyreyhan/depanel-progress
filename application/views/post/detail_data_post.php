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
                                        <h4 class="title">Postingan Editor</h4>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="content">
                                <form action="post" method="post">
                                    <?php foreach($post as $u){ ?>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Judul Indo</p>
                                                <input readonly value="<?php echo $u->judul_id;?>" type="text" id="title_id" class="form-control" name="judul_id" value="" placeholder="Isi Judul Indo" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Isi Postingan Indonesia</p>
                                                    <textarea  readonly name="isi_id" class="post" id="content_id" rows="8" cols="40"><?php echo $u->isi_id;?></textarea><br>
                                            </div>
                                        </div>
                                    </div>
                                      
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Url Indo</p>
                                                <input readonly value="<?php echo $u->url_id;?>" type="text" id="title_id" class="form-control" name="url_id" value="" placeholder="Isi Url Indon">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Judul Inggris</p>
                                                <input readonly value="<?php echo $u->judul_en;?>" type="text" id="title_id" class="form-control" name="judul_en" value="" placeholder="Isi Judul Inggris">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Isi Postingan Inggris</p>
                                                    <textarea readonly name="isi_en" class="post" id="content_id" rows="8" cols="40"><?php echo $u->isi_en;?></textarea><br>
                                            </div>
                                        </div>
                                    </div>
                                      
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Url Inggris</p>
                                                <input readonly value="<?php echo $u->url_en;?>" type="text" id="title_id" class="form-control" name="url_en" value="" placeholder="Isi Url Inggris">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Keterangan Gambar</p>
                                                    <textarea readonly name="gambar_keterangan" class="post" id="content_id" rows="8" cols="40"><?php echo $u->gambar_keterangan;?></textarea><br>
                                            </div>
                                        </div>
                                    </div>
                                   

<!--                                     <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Keterangan Gambar</p>
                                                <input readonly value="<?php //echo $u->gambar_keterangan;?>" type="text" id="title_id" class="form-control" name="gambar_keterangan" value="" placeholder="Isi Keterangan Gambar">
                                            </div>
                                        </div>
                                    </div>
 -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>(ID) Fotografer</p>
                                                <input readonly value="<?php echo $u->id_fotografer;?>" type="text" id="title_id" class="form-control" name="id_fotografer" value="" placeholder="(ID) Fotografer">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Featured</p>
                                                <input readonly value="<?php echo $u->featured;?>" type="text" id="title_id" class="form-control" name="featured" value="" placeholder="Featured">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>(ID) Penulis</p>
                                                <input readonly value="<?php echo $u->id_penulis;?>" type="text" id="title_id" class="form-control" name="id_penulis" value="" placeholder="Featured">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>(ID) Editor</p>
                                                <input readonly value="<?php echo $u->id_editor;?>" type="text" id="title_id" class="form-control" name="id_editor" value="" placeholder="Featured">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Youtube</p>
                                                <input readonly value="<?php echo $u->youtube;?> " type="text" id="title_id" class="form-control" name="youtube" value="" placeholder="Isi Url Indon">
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                    if($u->gambar==NULL) {

                                    } else {
                                    echo '<div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Gambar</p>
                            <img height="200" width="200" src="';?>
                            <?php echo base_url(). "assets/uploads/post/".$u->gambar ?> <?php echo'"></div>
                                        </div>
                                    </div>';
                                    }
                                    ?>
                                
    <input hidden value="<?php echo $u->id;?>" name="id">

                                    <div class="row">
                                        <div class="col-md-12">
                                        <br>
                                            <button type="submit" class="btn btn-success pull-right btn-fill" name="upload" value="upload">Back</button>
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
