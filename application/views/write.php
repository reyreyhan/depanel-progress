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

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <div class="pull-left">
                                    <h4 class="title">New Post</h4>
                                    <p class="category">
                                        Writer : Fajrul Falah
                                    </p>
                                </div>
                                <button type="button" class="btn btn-danger btn-fill pull-right" name="button">Cancel</button>
                                <div class="clearfix"></div>
                                <hr>
                            </div>
                            <div class="content">
                                <form action="post" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" id="title_id" class="form-control" name="title_id" value="" placeholder="Title (Indonesia)">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                              <label for="">Category</label>
                                                <select class="form-control selectpicker" name="">
                                                    <option value="option">Category</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                              <label for="">Publish date</label>
                                                <input type="date" name="date" class="form-control" min="<?php echo date("Y-m-d"); ?>" value="<?php echo date("Y-m-d"); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-2 pull-right">
                                            <div class="form-group">
                                              <div style="height:20px;"></div>
                                                <label class="checkbox">
                                                    <input type="checkbox" id="featured" value="" data-toggle="checkbox">
                                                </label>
                                                <label for="featured" class="paddinglabel">Featured Post</label>
                                            </div>
                                        </div>
                                    </div>
                                    <textarea name="content_id" id="content_id" rows="8" cols="40"></textarea><br>
                                    <button type="button" id="translate-btn" class="btn btn-primary btn-fill btn-sm pull-right" name="button"><i class="fa fa-globe"></i> Translate</button>
                                    <button type="button" class="btn btn-primary btn-fill pull-right btn-sm paddingright" name="button"><i class="fa fa-picture-o"></i> Upload image</button>
                                    <br><br><br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" id="title_en" class="form-control" name="title_en" value="" placeholder="Title (English)">
                                            </div>
                                        </div>
                                    </div>
                                    <textarea name="content_en" id="content_en" rows="8" cols="40"></textarea>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-success pull-right btn-fill" name="button">Post</button>
                                            <button type="submit" class="btn btn-primary pull-right btn-fill paddingright" name="button">Save as Draft</button>
                                        </div>
                                    </div>
                                </form>
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
