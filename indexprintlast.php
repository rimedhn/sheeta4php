<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        #letter-size {
            width: 5.5in; /* Ancho de una hoja tamaoo carta */
            margin: 0in; /* Centrar en la pagina */
            padding: 20px; /* Agregar espaciado */
            font-family: Arial, sans-serif;
            margin-left: 0.2in;
            margin-right: 0.2in;
            margin-top: 0.5in;
            margin-bottom: 0.5in;
        }

        .label {
            text-align: center;
            font-size: 18px;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        #detailhead .line1{
            text-align: left;
            width: 50%;
        }

        .detail1 {
            text-align: right;
            width: 50%;
        }

        .Fact {
            text-align: left;
            
        }

        .listitem {
            font-size: 16px;
            text-align: left;
        }


#listitemhead {
    font-size: 5px;
    text-align: center;
        }

        .descriptions {
            text-align: left;
        }

        .Price, .Desc, .Isv, .Amount {
            width: 10%;
            text-align: right;
        }

        #letter-size h2 {
            font-size: 22px;
            text-align: center;
            margin-bottom: 10px;
        }

        #letter-size .informasi {
            text-align: left;
            font-size: 16px;
            margin-bottom: 5px;
        }

        #letter-size .bawah {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <?php
    // Capturar los campos de la URL
    // Datos de la empresa
    $empresa = $_GET["empresa"];
    $rtn = $_GET["rtn"];
    $direccion = $_GET["direccion"];
    $telefono = $_GET["telefono"];
    $email = $_GET["email"];

    // Datos de la factura
    $date = $_GET["date"];
    $folio = $_GET["Folio_1"];
    $factura = $_GET["factura"];
    $cai = $_GET["cai"];
    $rango = $_GET["rango"];
    $limite = $_GET["limite"];
    $vendedor = $_GET["vendedor"];
    $cajero = $_GET["cajero"];

    // Otros datos de la factura
    $subtotal = $_GET["subtotal"];
    $descuento = $_GET["descuento"];
    $subtotalexe = $_GET["subtotalexe"];
    $subtotalexo = $_GET["subtotalexo"];
    $subtotalisv15 = $_GET["subtotalisv15"];
    $subtotalisv18 = $_GET["subtotalisv18"];
    $isv15 = $_GET["isv15"];
    $isv18 = $_GET["isv18"];
    $total = $_GET["total"];
    $recibido = $_GET["recibido"];
    $cambio = $_GET["cambio"];
    $montoletras = $_GET["montoletras"];

    
    // Datos del cliente
    $cliente = $_GET["cliente"];
    $rtncliente = $_GET["rtncliente"];
    $direccioncliente = $_GET["direccioncliente"];
    $telefonocliente = $_GET["telefonocliente"];
    $emailcliente = $_GET["emailcliente"];
    
    // Otros datos del cliente
    $ocexe = $_GET["ocexe"];
    $ocexo = $_GET["ocexo"];
    $nosag = $_GET["nosag"];

    
    // Detalle de los productos
    $descriptions= explode (",",$_GET["descriptions"]);
    $quantitys= explode (",",$_GET["quantitys"]);
    $price= explode (",",$_GET["price"]);
    $subtproducto= explode (",",$_GET["subtproducto"]);
    $descproducto= explode (",",$_GET["descproducto"]);
    $isvproducto= explode (",",$_GET["isvproducto"]);
    $amounts= explode (",",$_GET["amounts"]);

    // Create new array
    $products = array();
    for ($i=0; $i < count($descriptions); $i++) { 
        $products[]= array(
            "description"=>$descriptions[$i],
            "quantity"=>$quantitys[$i],
            "price"=>$price[$i],
            "Subt"=>$subtproducto[$i],
            "isv"=>$isvproducto[$i],
            "amount"=>$amounts[$i],
        );
    }

    ?>


        <div class="label">
            <b><?php echo $empresa ?></b><br>
            <b>RTN: <?php echo $rtn ?></b><br>
            <b>Direccion: <?php echo $direccion ?></b><br>
            <b>Telefono: <?php echo $telefono ?></b><br>
            <b>Email: <?php echo $email ?></b><br>
        

    

        <h2>FACTURA</h2>

        <table style="width: 100%">
  <tr>
    <th style="width: 50%">Datos cliente</th>
    <th style="width: 50%">Datos factura</th>
  </tr>
  <tr>
    <td><div style="text-align: left;">
            <b>Cliente: <?php echo $cliente ?></b><br>
            <b>RTN: <?php echo $rtncliente ?></b><br>
            <b>Telefono: <?php echo $telefonocliente ?></b><br>
            <b>Direccion: <?php echo $direccioncliente ?></b><br>
            <b>Vendedor: <?php echo $vendedor ?></b><br>
            
            
           

        </div></td>



    <td><div style="text-align: left;">
            <b>Factura: <?php echo $factura ?></b><br>
            <b>Fecha: <?php echo $date ?></b><br>
            <b>CAI: <?php echo $cai ?></b><br>
            <b>Rango: <?php echo $rango ?></b><br>
            <b>Fecha limite: <?php echo $limite ?></b><br>
            <b>Cajero: <?php echo $cajero ?></b><br>

        </div></td>
  </tr>
</table>


            <table style="width: 100%">
            <tr>
                <td class="detalleproducts"; colspan="6">Detalle</td>                
            </tr>

            <div>
            <tr>
                <td>
                    <h2 style="font-size: 4mm; Text-align: Center; line-height: 0.1">Cant</h2>
                </td>
                <td>
                    <h2 style="font-size: 4mm; Text-align: Center; line-height: 0.1">Descripcion</h2>
                </td>
                <td>
                    <h2 style="font-size: 4mm; Text-align: Center; line-height: 0.1">Precio</h2>
                </td>
                <td>
                    <h2 style="font-size: 4mm; Text-align: Center; line-height: 0.1">Subt.</h2>
                </td>
                <td>
                    <h2 style="font-size: 4mm; Text-align: Center; line-height: 0.1">Isv</h2>
                </td>
                <td>
                    <h2 style="font-size: 4mm; Text-align: Center; line-height: 0.1">Monto</h2>
                </td>
            </tr>
            </div>

            <tr class="listitem">
        <?php
            foreach($products as $product) {
                echo'                
                <tr class="listitem">
                <td class="qty">'.$product["quantity"].'</td>
                <td class="descriptions">'.$product["description"].'</td>
                <td class="Price">'.$product["price"].'</td>
                <td class="Desc">'.$product["Subt"].'</td>
                <td class="Isv">'.$product["isv"].'</td>
                <td class="Amount">'.$product["amount"].'</td>
                </tr>
                ';
            }
            ?>
            </tr>

            <tr>
                <td colspan="2" style="border-top: 1px solid black; text-align: left; vertical-align:text-top">
                Orden de compra exenta:  <?php echo $ocexe ?>
                <br>
                No. Registro exonerado: <?php echo $ocexo ?>
                <br>
                No. Registro SAG: <?php echo $nosag ?>
                <br>
                <div alig= "center" >------------------------------------------------------------------------</div>
                Observaciones:
                <br>
                <div alig= "center" >------------------------------------------------------------------------</div>
                Son: <?php echo $montoletras ?>
                <br>
                Gracias por su compra!!
                <br>
                Original: Cliente

                </td>
                
                <td colspan="2" style="white-space: nowrap; border-top: 1px solid black; text-align: right;">
                Subtotal:
                <br>
                Descuento:
                <br>
                Subtotal exento:
                <br>
                Subtotal exonerado:
                <br>
                Subtotal 15%:
                <br>
                Subtotal 18%:
                <br>
                Isv 15%:
                <br>
                Isv 18%:
                <br>
                Total venta:
                </td>
                <td colspan="2" style="white-space: nowrap;border-top: 1px solid black; text-align: right;">
                L<?php echo $subtotal ?>
                <br>
                L<?php echo $descuento ?>
                <br>
                L<?php echo $subtotalexe ?>
                <br>
                L<?php echo $subtotalexo ?>
                <br>
                L<?php echo $subtotalisv15 ?>
                <br>
                L<?php echo $subtotalisv18 ?>
                <br>
                L<?php echo $isv15 ?>
                <br>
                L<?php echo $isv18 ?>
                <br>
                L<?php echo $total ?>
            </td>
            </tr>            
            <tr>
                
                           
            
        </tr>

            </tr>            
        
        </table>

        
    </div>
    <script>
window.onload = function() {
    window.print();
};
</script>
</body>
</html>

