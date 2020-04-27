<?php
    $num1 = filter_input(INPUT_POST, "operador1");
    $num2 = filter_input(INPUT_POST, "operador2");
    $operador = filter_input(INPUT_POST, "opecao");
    $resultado = "";
    if($num1 && $num2)
    {
        switch ($operador) 
        {
            case 'soma':
                $resultado = $num1 + $num2;
                break;
            case 'subtracao':
                $resultado = $num1 - $num2;
            break;
            case 'multiplicacao':
                $resultado = $num1 * $num2;
                break;
                case 'divisao':
                $resultado = $num1 / $num2;
                break;
            default:
                # code...
                break;
        }
    }
    
?>

<!DOCTYPE html>
<html lang="pt-ao">
    <head>
        <meta charset="utf-8">
        <title>Operadores Aritimetico</title>
        <style>
             body{background-color: white; font-family: 'Segoe UI';}
            .flex_container
            {   
                display: flex; 
                justify-content: center; 
                align-items: center;
            }
            .flex_container > div.center
            {
                margin-top:20px;
                width: 500px; 
                height: 500px;
                background-color: purple;
                border-radius: 30px;
                box-shadow: 2px 2px 4px 4px rgba(0,0,0,0.6);
            }
            .center h1{color: white; font-size: 30px; text-align: center; }
            .row{padding: 50px;}
            .row:after
            {
                content: '';
                display: table;
                clear: both;
            }
            .controle{float: left; width: 33.333%; text-align: center;}
            .btn{width: 100%; float: left;}
            .controle input[type="text"]
            {
                padding: 20px 10px;
                border-radius: 50px;
                background: transparent;
                outline: none;
                border: 3px solid white;
                width: 50%;
                color: white;
                font-size: 30px;
                text-align: center;
            }
            .controle select
            {
                padding: 10px 10px;
                border-radius: 50px;
                outline: none;
                font-size:40px;
                font-weight: bold;
                width: 70%;
                text-align: center;
                background-color: orange;
                color: white;
            }
            .btn{margin-top: 20px; text-align: center;}
            .btn input[type="submit"]
            {
                border-radius: 30px;
                padding: 20px;
                border: none;
                background-color: orange;
                color: white;
                font-size: 20px;
                transition: ease-in-out .4s all;
                font-weight: bold;
            }
            .btn input[type="submit"]:hover{background-color: #FF8C00;}
            option{text-align:center; background-color: purple; color: white;}
            #resultado{border-radius: 30px; border: 3px solid white; width: 100px;margin: 0 auto; text-align: center; padding: 10px; color: white;}
        </style>
    </head>
    <body>

        <div class="flex_container">
        <div class="center">
            <h1>Operações Aritimetica Básica</h1>
                <form method="post">
                    <div class="row">
                        <div class="controle">
                            <input type="text" name="operador1" >
                        </div>
                        <div class="controle">
                            <select name=opecao>
                                <option value="soma"> + </option>
                                <option value="multiplicacao"> x </option>
                                <option value="divisao"> ÷ </option>
                                <option value="subtracao"> - </option>
                            </select>
                        </div>
                        <div class="controle">
                            <input type="text" name="operador2" >
                        </div>
                        <div class="btn">
                            <input type="submit" value="Calcular" name="efectuar">
                        </div>
                    </div>
                </form>
                
            <h2 id="resultado">
                <?=$resultado?>
            </h2>
        </div>
            
        </div>
    </body>
</head>