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
                    <div class="col-md-12">
                        <a href="categories"><button type="button" class="btn btn-primary pull-right" name="button"><i class="fa fa-archive"></i> Categories</button></a>
                        <a href="comments"><button type="button" class="btn btn-primary pull-right paddingright" name="button"><i class="fa fa-comments-o"></i> Comments</button></a>
                        <a href="post/write"><button type="button" class="btn btn-primary pull-right paddingright" name="button"><i class="fa fa-pencil"></i> Write New</button></a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="toppost"></div>
                    <div class="col-sm-1 pull-right">
                      <button type="button" class="btn btn-warning btn-block btn-fill" name="button">Search</button>
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
                      </select>
                    </div>
                    <div class="clearfix"></div>
                    <div class="toppost"></div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                              <h4 class="pull-left title">Posts list</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                              <hr>
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Date</th>
                                        <th width="50%">Title</th>
                                        <th>Writer/Editor</th>
                                        <th>Metadata</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>3 March 2016</td>
                                            <td>Talkshow Dee Lestari Menginspirasi dan Memotivasi Pendengar jadi Penulis</td>
                                            <td>Rifat / Sasya</td>
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
                           <!--      <div class="text-center">
                                    <ul class="pagination">
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                    </ul>
                                </div> -->
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
