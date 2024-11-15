<!DOCTYPE html>
<html lang="en">
<head>
  <?php require 'layouts/head.php'; ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <?php require 'layouts/preloader.php'; ?>
  <?php require 'layouts/navbar.php'; ?>
  <?php require 'layouts/sidebar.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Registro</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Registrarse</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example <small>jQuery Validation</small></h3>
              </div>
              <?php
              if (isset($_GET['error'])) {
                if ($_GET['mensaje'] == "exito") {
              ?>
                  <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                      <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">Registro Exitoso</span>
                        <span class="info-box-number">200</span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
              <?php

                } else {
              ?>
                  <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                      <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">Error, intentelo despues</span>
                        <span class="info-box-number">400</span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
              <?php
                }
              }
              ?>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="../Controlers/user_controller.php?action=crear" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" name="Nombre" class="form-control" placeholder="Ingrese nombre completo"/>
                    <!--<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">-->
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" id="Email" name="Email" class="form-control" id="exampleInputEmail1" placeholder="Ingrese su email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Clave</label>
                    <input type="password" name="Clave" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su Clave" required="required">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Clave2</label>
                    <input type="password" name="Clave2" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su Clave2" required="required">
                  </div>
                  <div class="form-group">
                    <label>Pregunta Seguridad</label>
                    <select class="form-control" name="PreguntaS" id="preguntaSeguridad"  required="required">
                      <option value="">Selecciona</option>
                      <option>Nombre de tu primera mascota</option>
                      <option>Fecha de nacimiento de alguno de tus padres</option>
                      <option>Comida favorita</option>
                      <option>Color favorito</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Respuesta</label>
                    <input type="text" name="Respuesta" placeholder="Respuesta" class="form-control" required="required"/>

                  </div>
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">Acepto las condiciones <a href="#">del servicio</a>.</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php require 'layouts/footer.php'; ?>
  <?php require 'layouts/sidebar-dark.php'; ?>
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<?php require 'layouts/scrip.php'; ?>
<!-- jquery-validation -->
<script src="../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../plugins/jquery-validation/additional-methods.min.js"></script>
<!-- Page specific script -->
<script>
    $(function () {
        $.validator.setDefaults({
            submitHandler: function () {
                alert( "Form successful submitted!" );
                submit();
            }
        });
        $('#quickForm').validate({
            rules: {
                Email: {
                    required: true,
                    email: true,
                },
                password: {
                    required: true,
                    minlength: 5
                },
                Nombre: {
                    required: true,
                    minlength: 5
                },
                terms: {
                    required: true
                },
            },
            messages: {
                Email: {
                    required: "Por favor ingrese un correo",
                    email: "Por favor ingrese un correo valido"
                },
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                Nombre: {
                    required: "Por favor ingresar el nombre completo",
                    minlength: "Su nombre no puede tener menos de 5 caracteres"
                },
                terms: "Please accept our terms"
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });
</script>
</body>
</html>
