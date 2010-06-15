<h2><?php echo $inmueble['Inmuebl']['titulo']; ?></h2>
<div id="media">IMAGENES</div>
<h1><?php echo $inmueble['Inmuebl']['codigo']; ?></h1>


<div align="center">
        <center>

      <table border="1" cellpadding="2" cellspacing="4" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber10">
        <tr>
          <td width="100%" valign="top" colspan="4" align="center" style="background-color:#33AD22;">
          <p align="left"><font color="#FFFFFF" face="Impact" size="4">Ubicación 
          del Inmueble</font></td>
        </tr>
        <tr>
          <td width="25%" valign="top">
          <p><b><font face="Verdana" size="2"><?php echo $inmueble['Zona']['Ciudad']['Departamento']['Pais']['nombre']; ?></font></b></p>
          </td>
          <td width="25%" valign="top">
          <p><b><font face="Verdana" size="2"><?php echo $inmueble['Zona']['Ciudad']['Departamento']['nombre'];?></font></b></p>
          </td>
          <td width="25%" valign="top">

          <p><b><font face="Verdana" size="2"><?php echo $inmueble['Zona']['Ciudad']['nombre']?></font></b></p>
          </td>
          <td width="25%" valign="top">
          <p><b><font face="Verdana" size="2"><?php echo $inmueble['Zona']['nombre']; ?></font></b></p>

          </td>
        </tr>
      </table>
        </center>
      </div>
      </td>
    </tr>
  </table>

  <table width="100%" border="1" bordercolorlight="#000000" bordercolordark="#000000" style="border-collapse: collapse" bordercolor="#111111" cellpadding="0" cellspacing="0">
    <thead>
    </thead>
    <tbody>
      </tbody>
  </table>

  <div align="center">
    <center>

    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber15">
      <tr>
        <td width="70%" valign="top">

  <div align="center">
    <center>
    <table border="0" cellpadding="4" cellspacing="4" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber30">
      <tr>
        <td width="70%">

<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber29">
  <tr>
    <td width="70%"><div align="center">
    <center>
    <table border="0" cellpadding="2" cellspacing="3" style="border-collapse: collapse" id="AutoNumber3" bordercolorlight="#000000" bordercolordark="#000000" width="100%">
    <tr>
      <td valign="top" style="background-color:#33AD22;" colspan="2">
      <p align="left">
          <font color="#FFFFFF" face="Impact" size="4">Detalles</font></td>

    </tr>
    <tr>
      <td valign="top" colspan="2">
  <font size="4" face="Impact">Código VENDE.NET:</font><font face="Verdana" size="4">&nbsp;</font><b><font size="4" face="Verdana" color="#FF0000"><?php echo $inmueble['Inmuebl']['codigo']; ?></font></b></td>
    </tr>
    <tr>
      <td valign="top" style="background-color:#E8F8DE;"><b><font size="2" face="Verdana">Tipo deinmueble</span></font></b></td>
      <td valign="top" align="left"><font size="2" face="Verdana">
      <b><?php echo $inmueble['Subcategoria']['nombre'].' ('.$inmueble['Subcategoria']['Categoria']['nombre'].')'; ?></b>
      <?php $esNuevo = ($inmueble['Inmuebl']['nuevo']) ? 'Nuevo':'Usado' ; echo $esNuevo; ?></font></td>

    </tr>
    <tr>
      <td valign="top" style="background-color:#E8F8DE;"><b><font size="2" face="Verdana">Dirección</font></b></td>
      <td valign="top" align="left"><font size="2" face="Verdana"><?php echo $inmueble['Inmuebl']['direccion']; ?></font></td>
    </tr>

    <tr>
      <td valign="top" style="background-color:#E8F8DE;"><b><font size="2" face="Verdana">Barrio</font></b></td>
      <td valign="top" align="left"><font size="2" face="Verdana"><?php echo $inmueble['Inmuebl']['barrio']; ?></font></td>
    </tr>
    <tr>
      <td valign="top" style="background-color:#E8F8DE;">
      <p align="left"><b><font size="2" face="Verdana">Alcobas</font></b></td>

      <td valign="top" align="center">
      <p><font size="2" face="Verdana"><?php echo $inmueble['Inmuebl']['habitaciones']?></font></td>
    </tr>
    <!-- Agregar el Dato del Area al modelo de Inmueble
    <tr>
      <td valign="top" bgcolor="#E8F8DE">
      <p align="left"><b><font size="2" face="Verdana">Área</font></b></td>
      <td valign="top" align="center">

      <p><font size="2" face="Verdana">
      110 m2</font></td>
    </tr>
    -->
    <tr>
      <td valign="top" bgcolor="#E8F8DE">
      <p align="left"><b><font size="2" face="Verdana">Estrato</font></b></td>
      <td valign="top" align="center">
      <p><font size="2" face="Verdana"><?php echo $estratos[$inmueble['Inmuebl']['estrato']]; ?></font></td>

    </tr>
    <tr>
      <td valign="top" bgcolor="#33AD22">
      <p align="left"><b>Valor Venta</b></td>
      <td valign="top" align="center">
      <p align="left"><font size="2" face="Verdana"><b> 
      <font face="Verdana" color="#0000FF">
      <?php echo $inmueble['Zona']['Ciudad']['Departamento']['Pais']['Moneda']['simbolo'].$inmueble['Inmuebl']['valor_venta']; ?>
	</font></b></td>

    </tr>
    <!-- Agregar Opcion de Permitir Permutar
    <tr>
      <td valign="top" bgcolor="#E8F8DE"><b><font face="Verdana" size="2">
      Permuta</font></b></td>
      <td valign="top" align="center">
      <font face="Verdana" size="2">
      Si</font></td>
    </tr>
    -->
    <tr>
      <td valign="top" bgcolor="#E8F8DE">
      <p align="left"><b><font size="2" face="Verdana">
      Administración</font></b></td>
      <td valign="top" align="center">
      <p align="left"><font size="2" face="Verdana">
      <b><?php echo $inmueble['Zona']['Ciudad']['Departamento']['Pais']['Moneda']['simbolo'].$inmueble['Inmuebl']['admon_venta']; ?></b></td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#E8F8DE">
      <p align="left"><b><font size="2" face="Verdana">Otros costos</font></b></td>
      <td valign="top" align="center">
      <p align="left"><font size="2" face="Verdana">
      <b><?php echo $inmueble['Zona']['Ciudad']['Departamento']['Pais']['Moneda']['simbolo'].$inmueble['Inmuebl']['otros_venta']; ?></b></font>

      </td>
    </tr>
    </table>
    </center>
  </div>
    </td>
  </tr>

</table>
<!--
<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber28">
  <tr>
    <td width="100%" bgcolor="#FF9900">
    <p align="left">
    <font face="Impact">Contacto </font></td>
  </tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber27">
  <tr>

    <td><font face="Verdana" size="2" color="#993300"><b>Enrique Rodr&#237;guez<br>
    </b></font><font color="#CC3300" face="Arial" size="2">
        Cr. 120 No. 58 - 20<br>
    </font><font face="Arial" size="2"><b><font color="#993300">Teléfonos:</font> </b>
        <font color="#CC3300">01 900 <br>
    </font>

        <font color="#993300"><b>Beeper:</b> </font><font color="#CC3300">
    55551955 Cod. 00<br>
    </font></font><b><font face="Arial" size="2" color="#993300">E-mail: </font></b>
        <font face="Arial" size="2" color="#CC3300">enrique.rodriguez@cocota.com<br>
    </font><b><font face="Arial" size="2" color="#CC3300">
    Bogot&#225; D.C.
        /
        Colombia </font>

    </b>
    </td>
    <td>
    <p align="center"><a href="contacto.asp?iditem=000002&negocio=Vende.net">
    <img border="0" src="Imagenes/web/arriend5.gif"></a></td>
  </tr>
</table> -->
  <div align="center">
    <center>

  <table border="0" cellpadding="3" cellspacing="4" style="border-collapse: collapse" id="AutoNumber9" bordercolorlight="#000000" bordercolordark="#000000" width="80%">
    <tr>
      <td valign="top" bgcolor="#33AD22" colspan="4">
      <font face="Impact" size="4" color="#FFFFFF">
      <a name="Otros Detalles del Inmueble">Otros Detalles del Inmueble</a></font></td>
    </tr>
    <tr>
      <td valign="top"><b><font size="1" face="Verdana">Telefono</font>

      </b></td>
      <td valign="top" align="center"><font size="1" face="Verdana">
      <?php echo ($inmueble['Inmuebl']['telefono']) ? 'Tiene' : 'No Tiene'; ?></font></td>
      <td valign="top">
      <b><font size="1" face="Verdana">Baños</font></b></td>
      <td valign="top" align="center"><font size="1" face="Verdana">
      <?php echo $inmueble['Inmuebl']['banos']; ?></font></td>

    </tr>
    <tr>
      <td valign="top">
      <b><font size="1" face="Verdana">Parqueaderos</font></b></td>
      <td valign="top" align="center"><font size="1" face="Verdana">
      <?php echo $inmueble['Inmuebl']['parqueaderos']; ?></font></td>
      <td valign="top"><b><font size="1" face="Verdana">
      Amoblado</font></b></td>

      <td valign="top" align="center"><font size="1" face="Verdana">
      <?php echo ($inmueble['Inmuebl']['amoblado']) ? 'Si' : 'No'; ?></font></td>
    </tr>
    <tr>
      <td valign="top"><b><font size="1" face="Verdana">
      Estudio</font></b></td>
      <td valign="top" align="center"><font size="1" face="Verdana">
      <?php echo ($inmueble['Inmuebl']['estudio']) ? 'Si' : 'No'; ?></font></td>

      <td valign="top"><b><font size="1" face="Verdana">
      Closets--</font></b></td>
      <td valign="top" align="center"><font size="1" face="Verdana">
      0--</font></td>
    </tr>
    <!--
    <tr>
      <td valign="top"><b><font face="Verdana" size="1">Sauna</font></b></td>

      <td valign="top" align="center"><font size="1" face="Verdana">
      No</font></td>
      <td valign="top"><b><font face="Verdana" size="1">
      Jacuzzi</font></b></td>
      <td valign="top" align="center"><font size="1" face="Verdana">
      No</font></td>
    </tri>
    

    <tr>
      <td valign="top"><b><font face="Verdana" size="1">
      Terraza / Balcón </font></b></td>
      <td valign="top" align="center"><font face="Verdana" size="1">
      No</font></td>
      <td valign="top"><b><font face="Verdana" size="1">Vista 
      panorámica</font></b></td>
      <td valign="top" align="center"><font face="Verdana" size="1">

      No</font></td>
    </tr>
    -->
    <tr>
      <td valign="top"><b><font face="Verdana" size="1">
      Chimenea cuarto principal</font></b></td>
      <td valign="top" align="center"><font face="Verdana" size="1">
      No</font></td>

      <td valign="top"><b><font face="Verdana" size="1">
      Chimenea Sala / comedor</font></b></td>
      <td valign="top" align="center"><font face="Verdana" size="1">
      No</font></td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#33AD22" colspan="4">
      <font face="Impact" size="4" color="#FFFFFF"><a name="Detalles Internos">

      Detalles Internos</a></font></td>
    </tr>
    <tr>
      <td valign="top"><b><font size="1" face="Verdana">Cocina integral</font></b></td>
      <td valign="top" align="center"><font size="1" face="Verdana">
      <?php echo ($inmueble['Inmuebl']['cintegral']) ? 'Si' : 'No'; ?></font></td>
      <td valign="top"><b><font size="1" face="Verdana">Cuarto 
      servicio </font></b></td>
      <td valign="top" align="center"><font size="1" face="Verdana">

      <?php echo ($inmueble['Inmuebl']['cempleada']) ? 'Si' : 'No'; ?></font></td>
    </tr>
    <tr>
      <td valign="top"><b><font face="Verdana" size="1">Zona Ropas</font></b></td>

      <td valign="top" align="center"><font size="1" face="Verdana">
      <?php echo ($inmueble['Inmuebl']['zropas']) ? 'Si' : 'No'; ?></font></td>
      <td valign="top"><b><font face="Verdana" size="1">Patio</font></b></td>
      <td valign="top" align="center"><font size="1" face="Verdana">
      Si--</font></td>
    </tr>
    <tr>

      <td valign="top"><b><font face="Verdana" size="1">Deposito</font></b></td>
      <td valign="top" align="center"><font size="1" face="Verdana">
      <?php echo ($inmueble['Inmuebl']['deposito']) ? 'Si' : 'No'; ?></font></td>
      <td valign="top"><b><font face="Verdana" size="1">Aire acondicionado</font></b></td>
      <td valign="top" align="center"><font size="1" face="Verdana">
      <?php echo ($inmueble['Inmuebl']['aacondicionado']) ? 'Si' : 'No'; ?></font></td>
    </tr>

    <tr>
      <td valign="top"><b><font face="Verdana" size="1">Gas</font></b></td>
      <td valign="top" align="center"><font size="1" face="Verdana">
      <?php echo ($inmueble['Inmuebl']['gas']) ? 'Si' : 'No'; ?></font></td>
      <td valign="top"><b><font face="Verdana" size="1">Calentador</font></b></td>
      <td valign="top" align="center"><font size="1" face="Verdana">
      <?php echo $calentador[$inmueble['Inmuebl']['calentador_id']]; ?></font></td>

    </tr>
    <tr>
      <td valign="top"><b><font face="Verdana" size="1">Calefacción</font></b></td>
      <td valign="top" align="center"><font size="1" face="Verdana">
      <?php echo ($inmueble['Inmuebl']['calefaccion']) ? 'Si' : 'No'; ?></font></td>
      <td valign="top"><b><font face="Verdana" size="1">Tipo de 
      Garaje---</font></b></td>
      <td valign="top" align="center"><font size="1" face="Verdana">

      Independiente---</font></td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#33AD22" colspan="4">
      <font face="Impact" size="4" color="#FFFFFF">Otras características</font></td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#33AD22" colspan="4">
      <a name="Detalles del conjunto">
      <font face="Impact" size="4">Detalles del conjunto</font></a></td>
    </tr>

    <tr>
      <td valign="top"><b><font size="1" face="Verdana">Conjunto 
      cerrado</font></b></td>
      <td valign="top" align="center"><font size="1" face="Verdana">
      <?php echo ($inmueble['Inmuebl']['conjunto']) ? 'Si' : 'No'; ?></font></td>
      <td valign="top"><b><font face="Verdana" size="1">Nombre 
      del conjunto</font></b></td>
      <td valign="top" align="center"><font size="1" face="Verdana">
      <?php echo $inmueble['Inmuebl']['nombre_conjunto']; ?></font></td>

    </tr>
    <tr>
      <td valign="top"><b><font face="Verdana" size="1">Salón 
      Comunal</font></b></td>
      <td valign="top" align="center"><font size="1" face="Verdana">
      Si--</font></td>
      <td valign="top"><b><font face="Verdana" size="1">
      Parqueadero Visitantes</font></b></td>
      <td valign="top" align="center"><font size="1" face="Verdana">
      <?php echo ($inmueble['Inmuebl']['pvisitantes']) ? 'Si' : 'No'; ?></font></td>
      </tr>
    <tr>
      <td valign="top"><b><font face="Verdana" size="1">Zona de 
      Niños</font></b></td>
      <td valign="top" align="center"><font size="1" face="Verdana">
      No--</font></td>
      <td valign="top"><b><font face="Verdana" size="1">Garaje 
      cubierto</font></b></td>

      <td valign="top" align="center"><font size="1" face="Verdana">
      No--</font></td>
      </tr>
    <tr>
      <td valign="top"><b><font face="Verdana" size="1">Piscina</font></b></td>
      <td valign="top" align="center"><font size="1" face="Verdana">
      <?php echo ($inmueble['Inmuebl']['piscina']) ? 'Si' : 'No'; ?></font></td>

      <td valign="top"><b><font size="1" face="Verdana">Gimnasio</font></b></td>
      <td valign="top" align="center"><font size="1" face="Verdana">
      <?php echo ($inmueble['Inmuebl']['gimnasio']) ? 'Si' : 'No'; ?></font></td>
      </tr>
    <tr>
      <td valign="top"><b><font size="1" face="Verdana">Portería</font></b></td>
      <td valign="top" align="center"><font size="1" face="Verdana">&nbsp;&nbsp;&nbsp; 
      <?php echo ($inmueble['Inmuebl']['porteria']) ? 'Si' : 'No'; ?></font></td>
      <td valign="top"><b><font size="1" face="Verdana">
      Vigilancia</font></b></td>

      <td valign="top"><font size="1" face="Verdana">
      <?php echo ($inmueble['Inmuebl']['vigilancia']) ? 'Si' : 'No'; ?></font></td>
      </tr>
  </table>
    </center>
</div>
</td>
</tr>
</table>
        </td>
      </tr>
    </table>
    </center>
  </div>

        </td>
      </tr>
      <tr>
        <td width="100%" valign="top">&nbsp;</td>
      </tr>
      </table>
    </center>
  </div>

