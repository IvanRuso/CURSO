<?php include 'head.html'; ?>
<form action="resultado.php" method="post">
    <input type="text"      id="nombre"     name="nombre"       placeholder="Nombre: "      required>
    <input type="number"    id="edad"       name="edad"         placeholder="Edad: "        required>
    <input type="email"     id="correo"     name="correo"       placeholder="Correo: "      required>
    <input type="password"  id="contraseña" name="contraseña"   placeholder="Password: "    required>
    <input type="submit"    value="Enviar">
</form> 