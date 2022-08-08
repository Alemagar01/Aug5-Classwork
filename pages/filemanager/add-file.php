
<?php include("../../inc/header.php"); ?>


  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Navbar -->
      <?php include("../../inc/navbar.php"); ?>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <?php include("../../inc/sidebar.php"); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Advanced Form For Files</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Advanced Form</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="exampleInputText1" class="form-label">Name
                      </label>
                      <input type="text" class="form-control"
                        id="exampleInputText1" aria-describedby="textHelp">
                    </div>
                    <!-- /.form-group -->
                    <div class="mb-3">
                      <label for="exampleInputText1" class="form-label">Email
                      </label>
                      <input type="text" class="form-control"
                        id="exampleInputText1" aria-describedby="textHelp">
                    </div>
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Password
                        </label>
                        <input type="text" class="form-control"
                          id="exampleInputText1" aria-describedby="textHelp">
                      </div>
                      <!-- /.form-group -->
                      <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Phone
                        </label>
                        <input type="text" class="form-control"
                          id="exampleInputText1" aria-describedby="textHelp">
                        <!-- /.form-group -->
                      </div>
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                  <!-- /.row -->
                </div>
                <div class="button">
                  <a href="#" class="btn btn-sm btn-primary"> submit</a>
                </div>
              </div>
            </div>
            <!-- /.container-fluid -->
          </section>
          <!-- /.content -->
        </div>
        
        <?php include("../../inc/footer.php"); ?>