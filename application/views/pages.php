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
                      <h2 class="title">Page Manager</h2>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="card">
                              <div class="header">
                                <a href="pages/add"><button type="button" class="btn btn-primary btn-fill" name="button">Add pages</button></a>
                                <div style="margin-bottom:-20px;"></div>
                              </div>
                              <div class="content table-responsive table-full-width">
                                <hr>
                                  <table class="table table-hover table-striped">
                                      <thead>
                                          <th>Date</th>
                                          <th width="50%">Title</th>
                                          <th>Section</th>
                                          <th>Metadata</th>
                                          <th>Action</th>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>3 March 2016</td>
                                              <td>Talkshow Dee Lestari Menginspirasi dan Memotivasi Pendengar jadi Penulis</td>
                                              <td>Akademik</td>
                                              <td class="small">
                                                  <i class="pe-7s-graph1"></i> : 30 clicks<br>
                                                  <i class="pe-7s-info"></i> : Published
                                              </td>
                                              <td>
                                                  <button type="button" class="btn btn-primary btn-fill btn-sm" name="button">Edit</button>
                                              </td>
                                          </tr>
                                      </tbody>
                                  </table>
                                  <div class="text-center">
                                      <ul class="pagination">
                                          <li><a href="#">1</a></li>
                                          <li><a href="#">2</a></li>
                                          <li><a href="#">3</a></li>
                                          <li><a href="#">4</a></li>
                                          <li><a href="#">5</a></li>
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
<?php
$this->load->view("skeleton/mainscript")
?>
</html>
