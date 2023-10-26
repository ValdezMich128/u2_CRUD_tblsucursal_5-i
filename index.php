<?php include("./config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar Dasar CRUD dengan PHP dan MySQL">
    <title>sadboyz</title>

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- material icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="bg-light">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom" style="position: sticky !important;
    top: 0 !important; z-index : 99999 !important;">
        <div class="container-fluid container">
            <a class="navbar-brand" href="#">SadBoyz</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link active text-sm-start text-center" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary ms-md-4 text-white" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container mt-5">
       
        <div class="card mb-5">
            
            <!-- tambah data -->
            <div class="card-body">
                <h3 class="card-title">SadBoyz Tienda de Ropa</h3>
                <p class="card-text">Hecho por: America Michel Valdez Martinez, Grupo:5-i, Tabla Producto</p>

                <!-- tampilkan pesan sukses ditambah -->
                <?php if (isset($_GET['status'])) : ?>
                    <?php
                    if ($_GET['status'] == 'sukses')
                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>¡Éxito!</strong>¡Datos agregados exitosamente!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    else
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> ¡Los datos agregados fallaron!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    ?>
                <?php endif; ?>


                <form class="row g-3" action="tambah.php" method="POST">
                 
                <div class="col-12">
                        <label for="id_sucursal" class="form-label">Id Sucursal</label>
                        <input type="number" name="id_sucursal" class="form-control" placeholder="Nombre de la Sucursal" required>
                    </div>
                    <div class="col-12">
                        <label for="nom_sucursal" class="form-label">Nombre Sucursal</label>
                        <input type="text" name="nom_sucursal" class="form-control" placeholder="Nombre de la Sucursal" required>
                    </div>
                    <div class="col-md-4">
                        <label for="calle" class="form-label">Calle</label>
                        <input type="text" name="calle" class="form-control" placeholder="calle" required>
                    </div>

                    <div class="col-md-4">
                        <label for="ciudad" class="form-label">Ciudad</label>
                        <select class="form-select" name="ciudad" aria-label="Default select example">
                            <option value="Juarez">Juarez</option>
                            <option value="Chihuahua">Chihuahua</option>
                            <option value="Guadalajara">Guadalajara</option>
                            <option value="Cancun">Cancun</option>
                            <option value="Puerto Vallarta">Puerto Vallarta</option>
                            <option value="Ciudad de Mexico">Ciudad de Mexico</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="num_exterior" class="form-label">Numero Exterior</label>
                        <input type="number" name="num_exterior" class="form-control" placeholder="Numero Exterior" required>
                    </div>
                 

                    <div class="col-md-6">
                        <label for="telefono" class="form-label">Telefono</label>
                        <input type="text" name="telefono" class="form-control" placeholder="Telefono" required>
                    </div>

                    <div class="col-md-6">
                        <label for="empleado" class="form-label">Empleado</label>
                        <input type="number" step=1 name="empleado" class=" form-control" placeholder="Empleado" required>
                    </div>
                    
                    <div class="col-md-6">
                        <label for="gmail" class="form-label">Gmail</label>
                        <input type="text" name="gmail" class="form-control" placeholder="gmail" required>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" value="daftar" name="tambah"><i class="fa fa-plus"></i><span class="ms-2">Agregar a Base de datos</span></button>
                    </div>
                </form>
            </div>
        </div>


        <!-- judul tabel -->
        <h5 class="mb-3">Cantidad de Registros</h5>

        <div class="row my-3">
            <div class="col-md-2 mb-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Cantidad Registros</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
            <div class="col-md-3 ms-auto">
                <div class="input-group mb-3 ms-auto">
                    <input type="text" class="form-control" placeholder="Buscar por ID..." aria-label="cari" aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>


        <!-- tampilkan pesan sukses dihapus -->
        <?php if (isset($_GET['hapus'])) : ?>
            <?php
            if ($_GET['hapus'] == 'sukses')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>¡Éxito!</strong> ¡Datos eliminados exitosamente!

                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> ¡Los datos eliminados fallaron!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            ?>
        <?php endif; ?>

        <!-- tampilkan pesan sukses di edit -->
        <?php if (isset($_GET['update'])) : ?>
            <?php
            if ($_GET['update'] == 'sukses')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>¡Éxito!</strong> ¡Datos actualizados exitosamente!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> ¡Los datos no se pudieron actualizar!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            ?>
        <?php endif; ?>

        <!-- tabel -->
        <div class="table-responsive mb-5 card">
            <?php
            echo "<div class='card-body'>";

            echo "<table class='table table-hover align-middle bg-white'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope='col' class='text-center'>No</th>";
            echo "<th scope='col'>IdSucursal</th>";
            echo "<th scope='col'>NomSucursal</th>";
            echo "<th scope='col'>Calle</th>";
            echo "<th scope='col'>Ciudad</th>";
            echo "<th scope='col'>NumExterior</th>";
            echo "<th scope='col'>Telefono</th>";
            echo "<th scope='col'>Empleado</th>";
            echo "<th scope='col'>Gmail</th>";
            echo "<th scope='col' class='text-center'>Acciones</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";



            $batas = 10;
            $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
            $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

            $previous = $halaman - 1;
            $next = $halaman + 1;

            $data = mysqli_query($db, "SELECT * FROM sucursal");
            $jumlah_data = mysqli_num_rows($data);
            $total_halaman = ceil($jumlah_data / $batas);

            $data_mhs = mysqli_query($db, "SELECT * FROM sucursal LIMIT $halaman_awal, $batas");
            $no = $halaman_awal + 1;

       




            while ($mahasiswa = mysqli_fetch_array($data_mhs)) {
                echo "<tr>";
                echo "<td style='display:none'>" . $mahasiswa['id'] . "</td>";
                echo "<td class='text-center'>" . $no++ . "</td>";
                echo "<td>" . $mahasiswa['id_sucursal'] . "</td>";
                echo "<td>" . $mahasiswa['nom_sucursal'] . "</td>";
                echo "<td>" . $mahasiswa['calle'] . "</td>";
                echo "<td>" . $mahasiswa['ciudad'] . "</td>";
                echo "<td>" . $mahasiswa['num_exterior'] . "</td>";
                echo "<td>" . $mahasiswa['telefono'] . "</td>";
                echo "<td>" . $mahasiswa['empleado'] . "</td>";
                echo "<td>" . $mahasiswa['gmail'] . "</td>";

                echo "<td class='text-center'>";

                echo "<button type='button' class='btn btn-primary editButton pad m-1'><span class='material-icons align-middle'>edit</span></button>";

                // tombol hapus
                echo "
                            <!-- Button trigger modal -->
                            <button type='button' class='btn btn-danger deleteButton pad m-1'><span class='material-icons align-middle'>delete</span></button>";
                echo "</td>";

                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
            if ($jumlah_data == 0) {
                echo "<p class='text-center'>Tidak ada data yang tersedia pada tabel ini</p>";
            } else {
                echo "<p>Total de registros: $jumlah_data</p>";
            }

            echo "</div>";
            ?>
        </div>

        <!-- pagination -->
        <nav class="mt-5 mb-5">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" <?php echo ($halaman > 1) ? "href='?halaman=$previous'" : "" ?>><i class="fa fa-chevron-left"></i></a>
                </li>
                <?php
                for ($x = 1; $x <= $total_halaman; $x++) {
                ?>
                    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                <?php
                }
                ?>
                <li class="page-item">
                    <a class="page-link" <?php echo ($halaman < $total_halaman) ? "href='?halaman=$next'" : "" ?>><i class="fa fa-chevron-right"></i></a>
                </li>
            </ul>
        </nav>

        <!-- Modal Edit-->
        <div class='modal fade' style="top:58px !important;" id='editModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog' style="margin-bottom:100px !important;">
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Editar</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>

                    <?php
                    $sql = "SELECT * FROM sucursal";
                    $query = mysqli_query($db, $sql);
                    $mahasiswa = mysqli_fetch_array($query);
                    ?>

                    <form action='edit.php' method='POST'>
                        <div class='modal-body text-start'>
                            <input type='hidden' name='edit_id' id='edit_id'>

                            <div class="col-12 mb-3">
                                <label for="edit_id_sucursal" class="form-label">ID de sucursal</label>
                                <input type="text" name="edit_id_sucursal" id="edit_id_sucursal" class="form-control" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="edit_nom_sucursal" class="form-label">Nombre de sucursal</label>
                                <input type="text" name="edit_nom_sucursal" id="edit_nom_sucursal" class="form-control" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="edit_calle" class="form-label">Calle</label>
                                <input type="text" name="edit_calle" id="edit_calle" class="form-control"  required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_ciudad" class="form-label">Ciudad</label>
                                <select class="form-select" name="edit_ciudad" id="edit_ciudad" aria-label="Default select example">
                                    <option value="Juarez">Juarez</option>
                                    <option value="Chihuahua">Chihuahua</option>
                                    <option value="Guadalajara">Guadalajara</option>
                                    <option value="Cancun">Cancun</option>
                                    <option value="Puerto Vallarta">Puerto Vallarta</option>
                                    <option value="Ciudad de Mexico">Ciudad de Mexico</option>
                                </select>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_num_exterior" class="form-label">Numero exterior</label>
                                <input type="text" name="edit_num_exterior" class="form-control" id="edit_num_exterior" required>
                            </div>

                            
                            <div class="col-12 mb-3">
                                <label for="edit_telf" class="form-label">Telefono</label>
                                <input type="text" name="edit_telf" class="form-control" id="edit_telf" required>
                            </div>

                            
                            <div class="col-12 mb-3">
                                <label for="edit_empleado" class="form-label">Numero de empleados</label>
                                <input type="text" name="edit_empleado" class="form-control" id="edit_empleado" required>
                            </div>

                            
                            <div class="col-12 mb-3">
                                <label for="edit_gmail" class="form-label">Gmail</label>
                                <input type="text" name="edit_gmail" class="form-control" id="edit_gmail" required>
                            </div>


                        </div>

                        <div class='modal-footer'>
                            <button type='submit' name='edit_data' class='btn btn-primary'>Editar</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>


        <!-- Modal Delete-->
        <div class='modal fade' style="top:58px !important;" id='deleteModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Confirmacion</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>


                    <form action='hapus.php' method='POST'>

                        <div class='modal-body text-start'>
                            <input type='hidden' name='delete_id' id='delete_id'>
                            <p>Seguro que desea eliminar este registro?</p>
                        </div>

                        <div class='modal-footer'>
                            <button type='submit' name='deletedata' class='btn btn-primary'>Eliminar</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>


        <!-- tutup container -->
    </div>


    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Javascript bule with popper bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- edit function -->
    <script>
        $(document).ready(function() {
            $('.editButton').on('click', function() {
                $('#editModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#edit_id').val(data[0]);
                // gak dipake, karena cuma increment number
                // $('#no').val(data[1]);
                $('#edit_id_sucursal').val(data[2]);
                $('#edit_nom_sucursal').val(data[3]);
                $('#edit_calle').val(data[4]);
                $('#edit_ciudad').val(data[5]);
                $('#edit_num_exterior').val(data[6]);
                $('#edit_telf').val(data[7]);
                $('#edit_empleado').val(data[8]);
                $('#edit_gmail').val(data[9]);
            });
        });
    </script>

    <!-- delete function -->
    <script>
        $(document).ready(function() {
            $('.deleteButton').on('click', function() {
                $('#deleteModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#delete_id').val(data[0]);
            });
        });
    </script>

    <script>
        function clicking() {
            window.location.href = './index.php';
        }
    </script>
</body>

</html>