    <!-- FIRST ROW WITH PANELS -->

       <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        Order Details <small></small>
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

                <!-- /.row -->
                <div class="row">

                        
              
                </div>
        
                <!-- /.row -->


                <!-- SECOND ROW WITH TABLES-->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> User Details</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Username</th>
                                                <th>Time Login</th>
                                                <th>Time of Order</th>
                                                <th>Time Logout</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>bilal</td>
                                                <td>23/05/2019 10:51:15</td>
                                                <td>23/05/2019 11:57:58</td>
                                                <td>23/05/2019 11:59:30</td>
                                            </tr>
                                            <tr>
                                                <td>lishalini</td>
                                                <td>23/05/2019 11:45:36</td>
                                                <td>23/05/2019 11:52:53</td>
                                                <td>23/05/2019 12:17:25</td>
                                            </tr>
                                          <tr>
                                                <td><?php echo $_SESSION['firstname'] ?></td>
                                                <td><?php echo date('d/m/Y H:i:s', $_SESSION['time_in']); ?></td>
                                                <td><?php echo date('d/m/Y H:i:s', $_SESSION['time_buy']); ?></td>
                                                <td><?php echo date('d/m/Y H:i:s', $_SESSION['time_out']); ?></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                           </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                    </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="#">More <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

























                </div>
                <!-- /.row -->