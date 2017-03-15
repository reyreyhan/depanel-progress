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
                    <div class="col-md-4">
                        <div class="card">
                            <div class="content">
                                <h4 class="title">Post Statistics</h4>
                                <br>
                                <h5>Hai <?php echo $this->session->userdata("nama"); ?>

                                </h5>

                                <h6>Total post</h6>
                                <p>
                                <?php 
                                //$hsl = $count[0] / 2;
                                echo $count[0];  
                                 
                                ?>

                                    posts
                                </p>

                                <h6>Monthly average</h6>
                                <p>
                                    <?php 
                                    $hasil = $count[0] / 30;
                                    echo $hasil; 
                                    ?> 
                                    posts
                                </p>

                                <h6>Weekly average</h6>
                                <p>
                                    <?php 
                                    $hasil = $count[0] / 7;
                                    echo $hasil; 
                                    ?> 
                                    posts
                                </p>

                                <h6>Last post</h6>
                                <p>
                                <?php foreach($post_ALL as $all) { ?>

                                <?php 
                                $date = $all->tanggal;
                                $jam = $all->tanggal;
                                echo date("d F Y", strtotime($date));
                                echo " Jam ".date("h:ia", strtotime($date));

                                echo "<h6>Last Post Title</h6>
                                <p>";
                                echo $all->judul_id;
                                echo "</p>";
                                ?>
                                
                                <?php } ?>
                                
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Visitor Statistics</h4>
                                <p class="category">Monthly visitore</p>
                            </div>
                            <div class="content">
                                <div id="chartHours" class="ct-chart"></div>
                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Open
                                        <i class="fa fa-circle text-danger"></i> Click
                                        <i class="fa fa-circle text-warning"></i> Click Second Time
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
<?php
$this->load->view("skeleton/mainscript")
?>
<script type="text/javascript">
  $(document).ready(function(){
      demo.initChartist();
  });
</script>
</html>
