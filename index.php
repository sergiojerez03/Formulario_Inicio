<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body style="background: url('img/fondo.png') no-repeat;  background-size: cover;">

<style>



body{
    box-sizing: border-box;
    font-family: Roboto,sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

/*puedes quitar background-color: #fff;
le va a que dar transparente le que muy bonito*/
form{
    background-color: #fff;
    box-shadow: 0 0 20px rgba(0,0,0,0.2);
    padding: 50px 50px;
    border-radius: 25px;
    display: flex;
    flex-direction: column;
    text-align: center;
    width: 380px;
}


form h2{
    font-size: 35px;
    color: #0d0d0d;
    margin: 0;
}

form p{
font-size: 16px;
color: #5e5e5e;
margin-bottom: 35px;
}

.input-envuelto{
    position: relative;
    width: 305px;
    margin-bottom: 35px;
}

input{
    color:#0d0d0d;
    padding: 20px 15px 20px 60px;
    width: 100%;
    border-radius: 25px;
    border: 0;
    box-shadow: 0 0 20px rgba(192, 203, 251, 0.5);
    outline: none;
    font-size: 16px;
}


input::placeholder{
    font-size: 16px;
    color: #bbbbe2;
}

.input-icon{
    position: absolute;
    height: 30px;
    width: 30px;
    left: 20px;
    top: 50%;
    transform: translateY(-55%);
}


.enviar{
    padding: 20px;
    background-color:rgb(153,47,252);
    box-shadow: 0 0 20px rgba(192,203,251,0.5);
    color: #fff;
    text-transform: uppercase;
    font-size: 14px;
    cursor: pointer;
}

.enviar:hover{
    background-color:rgb(121, 62, 148);
}

.exito{
    position: absolute;
    top: 50px;
    color: #00c83c;
    font-size: 18px;
}

.error{
    position: absolute;
    top: 50px;
    color: #e02d00;
    font-size: 18px;
}


@media(max-width:991px){
    body{
        padding: 10px;
    }

    form{
        padding: 20px;
        width: 100%;
    }

    .input-envuelto{
        position: relative;
        width: 88%;
        margin-bottom: 35px;
    }

    input{
        padding: 20px 0 20px 45px;
    }

    .input-icon{
        height: 20px;
        width: 20px;
    }
}



</style>


<form method="post">

    <h2>Hola</h2>
    <p>Inicia tu registro</p>

    <div class="input-envuelto">
        <input type="text" name="name" placeholder="Nombre">
        <img class="input-icon" src="img/iniciar.svg" width="24" height="24">
    </div>
    <div class="input-envuelto">
        <input type="email" name="email" placeholder="Email">
        <img class="input-icon" src="img/correo.svg" width="26" height="26">
    </div>
    <div class="input-envuelto">
        <input type="text" name="Dirección" placeholder="Dirección">
        <img class="input-icon" src="img/dirrecion.svg" width="26" height="26">
    </div>
    <div class="input-envuelto">
        <input type="tel" name="Telefono" placeholder="Telefono">
        <img class="input-icon" src="img/telefono.svg" width="26" height="26">
    </div>
    <div class="input-envuelto">
        <input type="passwords" name="Contraseña" placeholder="Contraseña">
        <img class="input-icon" src="img/contraseña.svg" width="24" height="24">
    </div>
    <input class="enviar" type="submit" name="registrar" value="Enviar">
</form>

<?php

/*  include("registrar.php");   */

?>



</body>
</html>