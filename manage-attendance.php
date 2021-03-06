<?php require('inc/toppart.php'); ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper bg-dark">

<?php require('inc/sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg-dark">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
  
              <div class="card">
              <h1 class="text-center bg-dark p-3 mw-100"> <span class="text-danger font-weight-bold h1">X</span> 
                  <span class="text-white font-weight-bold h1">dezo</span><span class="f-l">
                  Technologies</span></h1>
                <div class="card-header bg-primary ">
                  <h3 class="card-title text-white font-weight-bold ml-5 ">Manage Attendance</h3>
                </div>
                <?php
                if(isset($_GET['msg'])) {
                  $msg = $_GET['msg'];
                  if($msg=='dsuccess')
                  {
                    echo "Deleted Successfully.";
                  }
                  else 
                  {
                    echo "Could not deleted.";
                  }
                } 
                ?>
                <div class="card-body bg-secondary">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>S.N.</th>
                      <th>Action</th>
                      <th>developer_id</th>
                      <th>year_id</th>
                      <th>month_id</th>
                      <th>day_id</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query = "SELECT * FROM tbl_attendance";
                    $result = mysqli_query($conn,$query);
                    $i=0;
                    while($data = mysqli_fetch_array($result))
                    {
                      ?>
                    <tr>
                      <td><?php echo ++$i; ?></td>
                      <td>
                        <a href="edit-attendance.php?id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-xs btn-primary float-left">Edit</button></a> 
                        <a href="process/delete-attendance.php?id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-xs btn-danger float-left">Delete</button></a> 
                      </td>
                      <td>
                        <?php 
                          $developer_id = $data['developers_id'];
                          $test_query = "SELECT * FROM tbl_developers WHERE id='$developer_id'";
                          $test_result = mysqli_query($conn,$test_query);
                          $row = mysqli_fetch_assoc($test_result);
                          echo $row['name'];
                        ?>
                      </td>
                      <td><?php echo $data['year_id']; ?></td>
                      <td><?php echo $data['month_id']; ?></td>
                      <td><?php echo $data['day_id']; ?></td>
                    </tr>
                      <?php
                    }
                    ?>
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>S.N.</th>
                      <th>Action</th>
                      <th>developer_id</th>
                      <th>year_id</th>
                      <th>month_id</th>
                      <th>day_id</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <?php require('inc/footer.php'); ?>