<?php 
include_once "db_picktech.php";
$con = mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME,$DB_PORT);
?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Productos</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="tablaProductos" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Precio</th>
                  <th>Existencia</th>
                  <th>Imagen(es)</th>
                </tr>
                </thead>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
