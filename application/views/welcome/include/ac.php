    <!-- Memanggil file .js untuk proses autocomplete -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.8.2.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.autocomplete.js');?>"></script>

    <!-- Memanggil file .css untuk style saat data dicari dalam filed -->
    <link href="<?php echo base_url('assets/js/jquery.autocomplete.css');?>" rel="stylesheet" />

    <!-- Memanggil file .css autocomplete_ci/assets/css/default.css -->
    <link href="<?php echo base_url('assets/css/default.css');?>" rel="stylesheet" />

    <script type='text/javascript'>
        var site = "<?php echo base_url();?>";
        $(function(){
            $('.autocomplete').autocomplete({
                // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
                serviceUrl: site+'/news/golek',
                // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
                onSelect: function (suggestion) {
                    $('#judul_post').val(''+suggestion.judul_id); // membuat id 'v_nim' untuk ditampilkan
                }
            });
        });
    </script>