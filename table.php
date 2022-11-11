<?php include 'inc/header.php'; ?>
  <?php include 'inc/sidemenu.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" >
      <div class="container-fluid"  >
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol> -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12" id="container" style="display: none;">
          <p id="result" style="color: red;">  *</p>

            <div class="card">

              <div class="card-header d-grid gap-2 d-md-flex justify-content-md-end">

                <button type="button" class="btn btn-primary add" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Add
                </button>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->



          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>


      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Enter your details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action=""method="POST" id="form">
            <input type="hidden" id="hid" name="hid">
            

            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name">

            <div class="row pt-3">
              <div class="col-6">
                <select name="countryCode" id="code"  class="form-select col-6">
                  <option data-countryCode="GB" value=" + 44" Selected>code</option>
                  <option data-countryCode="US" value=" + 1">USA (+1)</option>
                  <option data-countryCode="CA" value=" + 1">Canada (+1)</option>
                  <option data-countryCode="IN" value=" + 91">India (+91)</option>
                    <option data-countryCode="YE" value=" + 969">Yemen (North)(+969)</option>
                    <option data-countryCode="YE" value=" + 967">Yemen (South)(+967)</option>
                    <option data-countryCode="ZM" value=" + 260">Zambia (+260)</option>
                    <option data-countryCode="ZW" value=" + 263">Zimbabwe (+263)</option>
                  </optgroup>
                </select>
                <input type="text" class="form-control" id="phone" name="phone" placeholder=" Enter Your Phone Number">
              </div>
              <div class="col-6">
                <input type="text" class="form-control " id="email" name="email" placeholder="Enter Your Email ID">
              </div>
            </div>

            <div class="row pt-3">
              <div class="col-6">
                <input type="text" class="form-control " id="passport" name="passport" placeholder="Your Passport ID">
              </div>
              <div class="col-6">
                <input type="date" class="form-control" id="exp_date" name="exp_date" placeholder="Expiry Date">
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="insertBtn">INSERT</button>
          <button type="button" class="btn btn-primary" style="display:none;"  data-bs-dismiss="modal" id="update" >UPDATE</button>
        </div>
      </div>
    </div>
  </div>

  <?php include 'inc/footer.php'; ?>