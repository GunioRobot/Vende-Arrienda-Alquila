<h2><?php echo $inmueble['Inmuebl']['titulo']; ?></h2>



<div class="envoltura-caja" style="width:950px;">
    <div class="envoltura-caja-header">
        <h1 class="caja-titulo">
            Detalles del Inmueble
        </h1>
        <h2 class="caja-subtitulo">
            <?php echo $inmueble['Inmuebl']['codigo']; ?>
        </h2>
    </div>
    <div class="envoltura-caja" style="float:right; width: 420px; margin:20px 25px 0 0; height: 430px;">IMAGENES</div>
<div class="tabla-envoltura" style="width:450px; margin: 0 10px 10px 25px;">
        <table class="tabla" style="width:450px; ">
        <tr class="body-tabla">
            <td  class="header-tabla" colspan="4">
          <p>Ubicación 
          del Inmueble</td>
        </tr>
        <tr class="body-tabla" style="text-align:center;">
          <td>
          <p><?php echo $inmueble['Zona']['Ciudad']['Departamento']['Pais']['nombre']; ?></p>
          </td>
          <td>
          <p><?php echo $inmueble['Zona']['Ciudad']['Departamento']['nombre'];?></p>
          </td>
          <td>

          <p><?php echo $inmueble['Zona']['Ciudad']['nombre']?></p>
          </td>
          <td>
          <?php echo $inmueble['Zona']['nombre']; ?>

          </td>
        </tr>
      </table>
  
      </div>
      
<div class="tabla-envoltura" style="width:450px; margin: 0 10px 10px 25px;">
    <table class="tabla" style="width:450px;">
    <tr class="header-tabla">
      <td colspan="2">
      <p>
          Detalles
      </td>
    </tr>
    <tr class="body-tabla">
     <td colspan="2">
      Código VENDE.NET:<?php echo $inmueble['Inmuebl']['codigo']; ?>
     </td>
    </tr>
    <tr class="body-tabla">
      <td> Tipo de inmueble</td>
      <td><?php echo $inmueble['Subcategoria']['nombre'].' ('.$inmueble['Subcategoria']['Categoria']['nombre'].')'; ?>
      <?php $esNuevo = ($inmueble['Inmuebl']['nuevo']) ? 'Nuevo':'Usado' ; echo $esNuevo; ?></td>
    </tr>
    <tr class="body-tabla">
      <td> Dirección</td>
      <td> <?php echo $inmueble['Inmuebl']['direccion']; ?></td>
    </tr>

    <tr class="body-tabla">
      <td> Barrio</td>
      <td><?php echo $inmueble['Inmuebl']['barrio']; ?></td>
    </tr>
    <tr class="body-tabla">
      <td>
      <p>Alcobas</td>

      <td>
      <?php echo $inmueble['Inmuebl']['habitaciones']?></td>
    </tr>
    <!-- Agregar el Dato del Area al modelo de Inmueble
    <tr class="body-tabla">
      <td valign="top" bgcolor="#E8F8DE">
      <p align="left"><b><font size="2" face="Verdana">Área</td>
      <td valign="top" align="center">

      <p><font size="2" face="Verdana">
      110 m2</td>
    </tr>
    -->
    <tr class="body-tabla">
      <td>
      Estrato</td>
      <td><?php echo $estratos[$inmueble['Inmuebl']['estrato']]; ?></td>

    </tr>
    <tr class="body-tabla">
      <td>
      Valor Venta</td>
      <td>
      <?php echo $inmueble['Zona']['Ciudad']['Departamento']['Pais']['Moneda']['simbolo'].$inmueble['Inmuebl']['valor_venta']; ?>
	</td>

    </tr>
    <!-- Agregar Opcion de Permitir Permutar
    <tr class="body-tabla">
      <td valign="top" bgcolor="#E8F8DE"><b><font face="Verdana" size="2">
      Permuta</td>
      <td valign="top" align="center">
      <font face="Verdana" size="2">
      Si</td>
    </tr>
    -->
    <tr class="body-tabla">
      <td>
      Administración</td>
      <td><?php echo $inmueble['Zona']['Ciudad']['Departamento']['Pais']['Moneda']['simbolo'].$inmueble['Inmuebl']['admon_venta']; ?>
    </tr>
    <tr class="body-tabla">
      <td>
      Otros costos</td>
      <td>
      <?php echo $inmueble['Zona']['Ciudad']['Departamento']['Pais']['Moneda']['simbolo'].$inmueble['Inmuebl']['otros_venta']; ?>
      </td>
    </tr>
    </table>
    
  </div>

    

    
<!--
<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber28">
  <tr class="body-tabla">
    <td width="100%" bgcolor="#FF9900">
    <p align="left">
    <font face="Impact">Contacto </td>
  </tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber27">
  <tr class="body-tabla">

    <td><font face="Verdana" size="2" color="#993300"><b>Enrique Rodr&#237;guez<br>
    </b><font color="#CC3300" face="Arial" size="2">
        Cr. 120 No. 58 - 20<br>
    <font face="Arial" size="2"><b><font color="#993300">Teléfonos: </b>
        <font color="#CC3300">01 900 <br>
    

        <font color="#993300"><b>Beeper:</b> <font color="#CC3300">
    55551955 Cod. 00<br>
    <b><font face="Arial" size="2" color="#993300">E-mail: 
        <font face="Arial" size="2" color="#CC3300">enrique.rodriguez@cocota.com<br>
    <b><font face="Arial" size="2" color="#CC3300">
    Bogot&#225; D.C.
        /
        Colombia 

    </b>
    </td>
    <td>
    <p align="center"><a href="contacto.asp?iditem=000002&negocio=Vende.net">
    <img border="0" src="Imagenes/web/arriend5.gif"></a></td>
  </tr>
</table> -->

  <div class="tabla-envoltura" style="width:900px; margin-left:25px;">
      <table class="tabla" style="width:900px;">
    <tr class="header-tabla">
      <td colspan="4">
      <a name="Otros Detalles del Inmueble">Otros Detalles del Inmueble</a>
      </td>
    </tr>
    <tr class="body-tabla">
      <td>Telefono</td>
      <td> <?php echo ($inmueble['Inmuebl']['telefono']) ? 'Tiene' : 'No Tiene'; ?></td>
      <td>
      Baños</td>
      <td <?php echo $inmueble['Inmuebl']['banos']; ?></td>

    </tr>
    <tr class="body-tabla">
      <td>Parqueaderos</td>
      <td><?php echo $inmueble['Inmuebl']['parqueaderos']; ?></td>
      <td>Amoblado</td>

      <td><?php echo ($inmueble['Inmuebl']['amoblado']) ? 'Si' : 'No'; ?></td>
    </tr>
    <tr class="body-tabla">
      <td> Estudio</td>
      <td><?php echo ($inmueble['Inmuebl']['estudio']) ? 'Si' : 'No'; ?></td>

      <td>Closets--</td>
      <td>0--</td>
    </tr>
    <!--
    <tr class="body-tabla">
      <td >Sauna</td>

      <td valign="top" align="center"><font size="1" face="Verdana">
      No</td>
      <td >
      Jacuzzi</td>
      <td valign="top" align="center"><font size="1" face="Verdana">
      No</td>
    </tri>
    

    <tr class="body-tabla">
      <td >
      Terraza / Balcón </td>
      <td valign="top" align="center"><font face="Verdana" size="1">
      No</td>
      <td >Vista 
      panorámica</td>
      <td valign="top" align="center"><font face="Verdana" size="1">

      No</td>
    </tr>
    -->
    <tr class="body-tabla">
      <td>Chimenea cuarto principal</td>
      <td>No</td>

      <td>
      Chimenea Sala / comedor</td>
      <td>
      No</td>
    </tr>
    <tr class="body-tabla">
      <td>
      Detalles Internos</td>
    </tr>
    <tr class="body-tabla">
      <td>
      <?php echo ($inmueble['Inmuebl']['cintegral']) ? 'Si' : 'No'; ?></td>
      <td>Cuarto 
      servicio </td>
      <td>
      <?php echo ($inmueble['Inmuebl']['cempleada']) ? 'Si' : 'No'; ?></td>
    </tr>
    <tr class="body-tabla">
      <td>Zona Ropas</td>

      <td>
      <?php echo ($inmueble['Inmuebl']['zropas']) ? 'Si' : 'No'; ?></td>
      <td>Patio</td>
      <td>Si--</td>
    </tr>
    <tr class="body-tabla">
      <td>Deposito</td>
      <td><?php echo ($inmueble['Inmuebl']['deposito']) ? 'Si' : 'No'; ?></td>
      <td>Aire acondicionado</td>
      <td><?php echo ($inmueble['Inmuebl']['aacondicionado']) ? 'Si' : 'No'; ?></td>
    </tr>

    <tr class="body-tabla">
      <td>Gas</td>
      <td><?php echo ($inmueble['Inmuebl']['gas']) ? 'Si' : 'No'; ?></td>
      <td>Calentador</td>
      <td><?php echo $calentador[$inmueble['Inmuebl']['calentador_id']]; ?></td>

    </tr>
    <tr class="body-tabla">
      <td>Calefacción</td>
      <td><?php echo ($inmueble['Inmuebl']['calefaccion']) ? 'Si' : 'No'; ?></td>
      <td>Tipo de Garaje---</td>
      <td>Independiente---</td>
    </tr>
    <tr class="body-tabla">
      <td colspan="4">
      Otras características</td>
    </tr>
    <tr class="body-tabla">
      <td colspan="4">
      <a name="Detalles del conjunto">
      Detalles del conjunto</a></td>
    </tr>

    <tr class="body-tabla">
      <td>Conjunto cerrado</td>
      <td><?php echo ($inmueble['Inmuebl']['conjunto']) ? 'Si' : 'No'; ?></td>
      <td >Nombre 
      del conjunto</td>
      <td><?php echo $inmueble['Inmuebl']['nombre_conjunto']; ?></td>

    </tr>
    <tr class="body-tabla">
      <td >Salón 
      Comunal</td>
      <td>Si--</td>
      <td>
      Parqueadero Visitantes</td>
      <td>
      <?php echo ($inmueble['Inmuebl']['pvisitantes']) ? 'Si' : 'No'; ?></td>
      </tr>
    <tr class="body-tabla">
      <td>Zona de 
      Niños</td>
      <td>
      No--</td>
      <td >Garaje cubierto</td>

      <td>
      No--</td>
      </tr>
    <tr class="body-tabla">
      <td >Piscina</td>
      <td>
      <?php echo ($inmueble['Inmuebl']['piscina']) ? 'Si' : 'No'; ?></td>

      <td>Gimnasio</td>
      <td>
      <?php echo ($inmueble['Inmuebl']['gimnasio']) ? 'Si' : 'No'; ?></td>
      </tr>
    <tr class="body-tabla">
      <td>Portería</td>
      <td>
      <?php echo ($inmueble['Inmuebl']['porteria']) ? 'Si' : 'No'; ?></td>
      <td>
      Vigilancia</td>

      <td>
      <?php echo ($inmueble['Inmuebl']['vigilancia']) ? 'Si' : 'No'; ?></td>
      </tr>
  </table>
    
</div>


    </div>