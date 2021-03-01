<?php require('inc/toppart.php'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper bg-dark">

<?php require('inc/sidebar.php'); ?>

  <div class="content-wrapper bg-dark">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
              <div class="card">
              <h1 class="text-center bg-dark p-3 mw-100"> <span class="text-danger font-weight-bold h1">X</span> 
                  <span class="text-white font-weight-bold h1">dezo</span><span>&nbsp&nbsp&nbsp&nbsp&nbsp
                  Technologies</span></h1>
                <div class="card-header bg-primary ">
                  <h3 class="card-title text-white font-weight-bold ml-5 ">Manage Year</h3>
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
                <!-- /.card-header -->
                <div class="card-body bg-secondary">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>S.N</th>
                      <th>Action</th>
                      <th>Name</th>
                      <th>Year</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query = "SELECT * FROM tbl_years";
                    $result = mysqli_query($conn,$query);
                    $i=0;
                    while($data = mysqli_fetch_array($result))
                    {
                      ?>
                    <tr>
                      <td><?php echo ++$i; ?></td>
                      <td>
                        <a href="view-years.php?id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-xs btn-info float-left">View</button></a> 
                        <a href="edit-years.php?id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-xs btn-primary float-left">Edit</button></a> 
                        <a href="process/delete-years.php?id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-xs btn-danger float-left">Delete</button></a> 
                      </td>
                      <td><?php echo $data['name']; ?></td>
                      <td><?php echo $data['year']; ?></td>
                    </tr>
                      <?php
                    }
                    ?>
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>S.N</th>
                      <th>Action</th>
                      <th>Name</th>
                      <th>Year</th>
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