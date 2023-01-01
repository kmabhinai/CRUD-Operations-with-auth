<?php
session_start();
include("../dbconnection.php");
include("../checklogin.php");
if (isset($_POST['edit'])) {
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8" />
  <title>Admin | PF Table </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <link href="assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="assets/plugins/jquery-datatable/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
  <link href="assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css" />
</head>

<style>
  table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
  }

  th,
  td {
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2
  }
</style>

<body class="">
  <?php include("../header.php"); ?>
  <div class="page-container row">

    <?php include("../leftbar.php"); ?>

    <div class="clearfix"></div>
    <!-- END SIDEBAR MENU -->
  </div>
  </div>
  <div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">
      <ul class="breadcrumb">
        <li>
          <p>YOU ARE HERE</p>
        </li>
        <li><a href="#" class="active">Product Table</a> </li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Product Table</h3>
      </div>
      <div class="row-fluid">
        <div class="span12">
          <div class="grid simple ">
            <div class="grid-title">
              <h4>Table <span class="semi-bold">Styles</span></h4>
              <div class="tools">
                <a href="add_product.php"><button class="btn btn-success">Add New Product</button></a>
                <a href="javascript:;" class="collapse"></a>
                <a href="#grid-config" data-toggle="modal" class="config"></a>
                <a href="javascript:;" class="reload"></a>
                <a href="javascript:;" class="remove"></a>
              </div>
            </div>
            <div class="grid-body " style="overflow-x:auto;">
              <table class="table table-hover table-condensed" style="overflow: scroll" id="example">
                <thead>
                  <tr>
                    <th style="width:auto"></th>
                    <th style="width:auto">Product Id</th>
                    <th style="width:10%">Product Name</th>
                    <th style="width:10%">Price</th>
                    <th style="width:auto">Description</th>
                    <th style="width:auto">Action </th>
                  </tr>
                </thead>
                <tbody>

                  <?php $ret = mysqli_query($con, "select * from vtech_product ");
                  $cnt = 1;
                  while ($row = mysqli_fetch_array($ret)) { ?>


                    <tr>
                      <td class="v-align-middle"></td>
                      <td class="v-align-middle"><?php echo $row['id']; ?></td>
                      <td class="v-align-middle"><?php echo $row['name']; ?></td>
                      <td class="v-align-middle"><?php echo $row['price']; ?></td>
                      <td class="v-align-middle"><?php echo $row['description']; ?></td>
                      </td>

                      <td>
                        <a href="modify_product.php?id=<?php echo $row['id']; ?>"><button class="btn btn-success" value="<?php echo $row['id']; ?>" name="edit"><i class="fa fa-edit" style="font-size: 15px;"></i></button></a>
                        <a href="delete_product.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger"><i class="fa fa-trash" style="font-size: 15px;"></i></button></a>
                      </td>

                    </tr>

                    </tr>
                  <?php $cnt = $cnt + 1;
                  } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="addNewRow"></div>
  </div>





  <!-- BEGIN CHAT -->

  </div>
  <script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
  <script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
  <script src="assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="assets/plugins/breakpoints.js" type="text/javascript"></script>
  <script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
  <script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
  <script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script>
  <script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
  <script src="assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
  <script src="assets/plugins/jquery-datatable/js/jquery.dataTables.min.js" type="text/javascript"></script>
  <script src="assets/plugins/jquery-datatable/extra/js/dataTables.tableTools.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="../assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
  <script type="text/javascript" src="../assets/plugins/datatables-responsive/js/lodash.min.js"></script>
  <script src="assets/js/datatables.js" type="text/javascript"></script>
  <script src="assets/js/core.js" type="text/javascript"></script>
  <script src="assets/js/chat.js" type="text/javascript"></script>
  <script src="assets/js/demo.js" type="text/javascript"></script>
</body>

</html>