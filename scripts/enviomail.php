<?php 
$vnombre=$_POST['nombre'];
$vtel=$_POST['telefono'];
$vemail=$_POST['correo'];
$vcoment=$_POST['comentario'];
if(($vnombre!="")&&($vtel!="")&&($vemail!="")&&($vcoment!="")){

    $asunto="";
    $asunto="Mensaje desde el sitio web de Diarplo";
    $headers="";
    $headers="Content-type: text/html; charset=UTF-8\r\n"; //para el envío en formato HTML 
    $headers.="MIME-Version: 1.0\r\n"; 
    $headers.="From:".$vnombre."<".$vemail.">\r\n";
    $cuerpo="<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'>
                 <html>
                    <body>
                        <table style='color: #063f84; font-family: verdana'>
                            <tr>
                                <td>Nombre:
                                </td>
                                <td>".$vnombre."
                                </td>
                            </tr>
                            <tr>
                                <td>Correo:
                                </td>
                                <td>".$vemail."
                                </td>
                            </tr>
                            <tr>
                                <td>Telefono:
                                </td>
                                <td>".$vtel."
                                </td>
                            </tr>
                            <tr>
                                <td valign='top'>Comentario:
                                </td>
                                <td>".$vcoment."
                                </td>
                            </tr>
                        </table>
                    </body>
                </html>";

    mail("contacto@diarplo.com.mx",$asunto,$cuerpo,$headers);
    header("location: https://diarplo.com.mx/agradecimiento.html");
	
	}
	     else{
            header("location: https://diarplo.com.mx/errorenvio.html");
         }
?>