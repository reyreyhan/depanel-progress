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
                        <!-- <a href="banner"><button type="button" class="btn btn-primary pull-right" name="button"><i class="fa fa-archive"></i> Banner</button></a> -->
                        <a href="kartun"><button type="button" class="btn btn-primary pull-right paddingright" name="button"><i class="fa fa-archive"></i> Kartun</button></a>
                        <a href="upload"><button type="button" class="btn btn-primary pull-right paddingright" name="button"><i class="fa fa-archive"></i> Newsflash</button></a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="toppost"></div>
                    <div class="col-sm-1 pull-right">
<!--                       <button type="button" class="btn btn-warning btn-block btn-fill" name="button">Search</button>
                </div>
                    <div class="col-md-2 pull-right">
                      <input type="text" name="keyword" class="form-control" placeholder="Keyword">
                    </div>
                    <div class="col-md-2 pull-right">
                      <input type="date" name="datefilter" class="form-control">
                    </div>
                    <div class="col-md-2 pull-right">
                      <select class="form-control" name="">
                          <option value="option">Post type</option>
                      </select> -->
                    </div>
                    <div class="col-md-12">
                      <h2 class="title">Pilih Banner / Kartun </h2>
                      <div class="row">
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
</html>
