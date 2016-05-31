<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Banca en linea</title>
    </head>
    <body>
        <h1>Ingreso usuario</h1>
        <form action="validar.php" method="post">
            Rut: <input type="text" name="txtRut" placeholder="Ingrese su rut.." required="required"> <br>
            Pass: <input type="password" name="txtPass" placeholder="Ingrese su contraseña.." required="required"> <br><br>
            <input type="submit" name="btnIniciar" value="Iniciar Sesion">
        </form>

    </body>
</html>
