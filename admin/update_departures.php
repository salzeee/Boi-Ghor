<?php
    include('common/html_header.php');
    include('common/menu_profile.php');
    include('common/db_connect.php');
    $flight=$_GET['id'];
    $sql="SELECT * FROM departures WHERE is_delete='0' AND FlightCode=$flight";
    $result=mysqli_query($connect,$sql);
    $row=mysqli_fetch_assoc($result);
?>
                <br/>
                <?php
                include('common/sidebar_menu.php');
                include('common/top_navigation.php');
                ?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Insert Departures</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_content">
                                <form class="col-lg-6" name="form1" action="update_departure.php?id=<?php echo($flight) ?>" method="POST" enctype="multipart/form-data">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>
                                                <input class="form-control" type="number" name="id" 
                                                value="<?php echo($row['FlightCode']) ?>" disabled>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="form-control" type="text" name="air" value="<?php echo($row['Airlines']) ?>" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="form-control" type="time" name="time" value="<?php echo($row['Departure']) ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="form-control" type="text" name="src" value="<?php echo($row['Destination']) ?>"required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <select name="status" class="form-control" >
                                                    <option value="Scheduled">Scheduled</option>
                                                    <option value="En Route">EN Route</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="btn btn-basic submit" type="submit" name="submit1" value="Submit">
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->


        <!-- footer content -->
<?php
    include('common/footer.php');
?>