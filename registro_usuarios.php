<?php include("header.php");?>
<main class="container mw-100">
    <div class="row">
        <div class="col-12 col-md-6"></div>
        <div class="col-12 col-md-6">
            <form action="registrar_usuarios.php" method="post" class="mw-100 my-3 mx-4">
                <div class="mb-3 position-relative">
                    <label for="Nombre" class="form-label">*Nombre: </label>
                    <input type="text" name="nombre_usua" class="form-control" id="Nombre" placeholder="Nombre" required>
                </div>
                <div class="mb-3 position-relative">
                    <label for="Apellidos" class="form-label">*Apellidos: </label>
                    <input type="text" name="apellidos_usua" class="form-control " id="Apellidos" placeholder="Apellidos" required>
                </div>
                <div class="mb-3 position-relative">
                    <label for="dni" class="form-label">*DNI: </label>
                    <input type="text" maxlength="8" name="dni_usua" id="dni" placeholder="DNI" class="form-control" required>
                </div>
                <div class="mb-3 position relative">
                    <label for="Fechadenacimiento" class="form-label">*Fecha de Nacimiento: </label> 
                    <input type="date" name="fechaNacimiento_usua" id="Fechadenacimiento" class="form-control " required>
                </div>
                <div class="mb-3 position-relaive">
                    <label for="Sexo" class="form-label">Sexo: </label>
                    <select name="sexo_usua" id="Sexo" class="form-select">
                        <option value=" " selected disabled>Eliga su sexo</option>
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                    </select>
                </div>
                <div class="mb-3 position-relative">
                    <label for="telefono" class="form-label">*Telefono: </label>
                    <input type="text" maxlength="9" name="telefono_usua" id="telefono" placeholder="Telefono" class="form-control " required>
                </div>
                <div class="mb-3 position-relative">
                    <label for="email" class="form-label">*Correo Electronico: </label>
                    <input type="email" name="nick_usua" id="email" placeholder="correo@ejemplo.com" class="form-control " required>
                </div>
                <div class="mb-3 position-relative">
                    <label for="contraseña" class="form-label">*Contraseña: </label>
                    <input type="password" name="confirmar_password" class="form-control " id="contraseña" requeried>
                </div>
                <input type="hidden" name="perfil_usua" value="<?php echo $perfil_usua=3 ?>">
                <div class="mb-3 position-relative">
                    <label for="confirmarcontra" class="form-label">*Confirmar Contraseña: </label>
                    <input type="password" name="password_usua" id="confirmarcontra" class='form-control' requeried>
                </div>
<?php include("registro_usuarios1.php") ?>