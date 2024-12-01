<?php include("includes/head.php") ?>
<?php include("db.php"); ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- AQUI VA EL SIDEBAR -->
        <?php include("includes/sidebar.php") ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Aqui va el topbar -->
              <?php include("includes/topbar.php") ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">EliminarProducto</h1>

                </div>
                <!-- /.container-fluid -->
                     <!--  Tabla -->
                         <!-- DataTales Example -->
                         <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Inventario</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id_producto</th>
                                            <th>producto</th>
                                            <th>descripción</th>
                                            <th>cantidad</th>
                                            <th>precio_unitario</th>
                                            <th>categoría</th>
                                            <th>proveedor</th>
                                            <th>fecha_ingreso</th>
                                            <th>estado</th>
                                            <th>operación</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>id_producto</th>
                                            <th>producto</th>
                                                <th>descripción</th>
                                            <th>cantidad</th>
                                            <th>precio_unitario</th>
                                            <th>categoría</th>
                                            <th>proveedor</th>
                                            <th>fecha_ingreso</th>
                                            <th>estado</th>
                                            <th>operación</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php include("controlInventario/selectTableInventarioDelete.php") ?>                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                                <!-- end Tabla -->

            </div>
            <!-- End of Main Content -->

            <?php include("includes/footer.php") ?>
