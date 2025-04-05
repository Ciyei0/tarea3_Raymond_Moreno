<?php


class plantilla{

    static $instancia = null;

    public static function aplicar(){
        if(self::$instancia == null){
            self::$instancia = new plantilla();
        }
    }


    //metodos magicos
    public function __construct(){
        ?>
                <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Torneo de Dragon Ball</title>
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
            <style>
                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                }

                body {
                    font-family: 'Poppins', sans-serif;
                    background-color: #f2f2f2;
                    padding: 20px;
                }

                /* Comentario 
                .registro {
                    background: #ffffff;
                    padding: 30px;
                    border-radius: 10px;
                    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
                    width: 400px;
                    margin: 20px auto;
                }*/

                .container {
                    max-width: 900px;
                    margin: auto;
                    text-align: center;
                }

                h1 {
                    font-size: 24px;
                    color: #333;
                    margin-bottom: 20px;
                    font-weight: 600;
                    text-align: center;
                }

                label {
                    font-weight: 400;
                    display: block;
                    text-align: left;
                    margin-bottom: 5px;
                    color: #555;
                }

                input {
                    width: 100%;
                    padding: 10px;
                    margin-bottom: 15px;
                    border: 1px solid #ccc;
                    border-radius: 5px;
                    font-size: 16px;
                }

                .boton {
                    background-color: #4CAF50;
                    color: white;
                    padding: 12px;
                    border: none;
                    border-radius: 5px;
                    font-size: 16px;
                    cursor: pointer;
                    display: inline-block;
                    text-align: center;
                    text-decoration: none;
                }

                .boton:hover {
                    background-color: #45a049;
                }

                .footer {
                    margin-top: 20px;
                    font-size: 14px;
                    color: #777;
                    text-align: center;
                }

                table {
                    width: 100%;
                    border-collapse: collapse;
                    margin-top: 20px;
                }

                th, td {
                    border: 1px solid black;
                    padding: 10px;
                    text-align: center;
                }

                img {
                    border-radius: 5px;
                }

                .d-derecha {
                    text-align: right;
                    margin-bottom: 10px;
                }

            </style>
        </head>
        <body>
        <div class="container">
        <?php
    }


    public function __destruct(){
        ?>
        </div>
        <hr>
        <p class="footer">Desarrollado por Raymond Moreno</p>
    </body>
    </html>
    <?php
    }




}