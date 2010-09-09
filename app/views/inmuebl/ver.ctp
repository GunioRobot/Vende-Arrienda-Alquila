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
    <div class="seleccion-caja">
      <table cellspacing="0" cellpadding="0">
        <tr>
            <th  colspan="4">
          <p>Ubicación del Inmueble</p>
            </th>
        </tr>
        <tr>
          <th>
          <p><?php echo $inmueble['Zona']['Ciudad']['Departamento']['Pais']['nombre']; ?></p>
          </th>
          <th>
          <p><?php echo $inmueble['Zona']['Ciudad']['Departamento']['nombre'];?></p>
          </th>
          <th>
          <p><?php echo $inmueble['Zona']['Ciudad']['nombre']?></p>
          </th>
          <th>
          <?php echo $inmueble['Zona']['nombre']; ?>
          </th>
        </tr>
      </table>
    <div class =" ver-imagenes">
        imagen
    </div>


    <div class="tabla-detalles">

    <table cellspacing="0" cellpadding="0" style="width:450px;">
    <tr>
      <th colspan="2">
      <p>
          Detalles </p>
      </th>
    </tr>
    <tr>
     <th colspan="2">
      Código VENDE.NET:<?php echo $inmueble['Inmuebl']['codigo']; ?>
     </th>
    </tr>
    <tr>
      <th> Tipo de inmueble</th>
      <td><?php echo $inmueble['Subcategoria']['nombre'].' ('.$inmueble['Subcategoria']['Categoria']['nombre'].')'; ?>
      <?php $esNuevo = ($inmueble['Inmuebl']['nuevo']) ? 'Nuevo':'Usado' ; echo $esNuevo; ?></td>
    </tr>
    <tr>
      <th> Dirección</th>
      <td> <?php echo $inmueble['Inmuebl']['direccion']; ?></td>
    </tr>

    <tr>
      <th> Barrio</th>
      <td><?php echo $inmueble['Inmuebl']['barrio']; ?></td>
    </tr>
    <tr>
      <th>
      Alcobas
      </th>
      <td><?php echo $inmueble['Inmuebl']['habitaciones']?></td>
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
    <tr>
      <th>
      Estrato</th>
      <td><?php echo $estratos[$inmueble['Inmuebl']['estrato']]; ?></td>

    </tr>
    <tr>
      <th>
      Valor Venta</th>
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
    <tr>
      <th>
      Administración</th>
      <td><?php echo $inmueble['Zona']['Ciudad']['Departamento']['Pais']['Moneda']['simbolo'].$inmueble['Inmuebl']['admon_venta']; ?>
    </tr>
    <tr>
      <th>
      Otros costos</th>
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


      <table cellpadding="0" cellspacing="0">
    <tr>
      <th colspan="4">
      <a name="Otros Detalles del Inmueble">Otros Detalles del Inmueble</a>
      </th>
    </tr>
    <tr>
      <th>Telefono</th>
      <td> <?php echo ($inmueble['Inmuebl']['telefono']) ? 'Tiene' : 'No Tiene'; ?></td>
      <th>
      Baños</th>
      <td <?php echo $inmueble['Inmuebl']['banos']; ?></td>

    </tr>
    <tr>
      <th>Parqueaderos</th>
      <td><?php echo $inmueble['Inmuebl']['parqueaderos']; ?></td>
      <th>Amoblado</th>

      <td><?php echo ($inmueble['Inmuebl']['amoblado']) ? 'Si' : 'No'; ?></td>
    </tr>
    <tr>
      <th> Estudio</th>
      <td><?php echo ($inmueble['Inmuebl']['estudio']) ? 'Si' : 'No'; ?></td>

      <th>Closets--</th>
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
    <tr>
      <th>Chimenea cuarto principal</th>
      <td>No</td>

      <th>
      Chimenea Sala / comedor</th>
      <td>
      No</td>
    </tr>
    <tr>
      <th>
      Detalles Internos</th>
    </tr>
    <tr>
      <td>
      <?php echo ($inmueble['Inmuebl']['cintegral']) ? 'Si' : 'No'; ?></td>
      <th>Cuarto
      servicio </th>
      <td>
      <?php echo ($inmueble['Inmuebl']['cempleada']) ? 'Si' : 'No'; ?></td>
    </tr>
    <tr>
      <th>Zona Ropas</th>
      <td>
      <?php echo ($inmueble['Inmuebl']['zropas']) ? 'Si' : 'No'; ?></td>
      <th>Patio</th>
      <td>Si--</td>
    </tr>
    <tr>
      <th>Deposito</th>
      <td><?php echo ($inmueble['Inmuebl']['deposito']) ? 'Si' : 'No'; ?></td>
      <th>Aire acondicionado</th>
      <td><?php echo ($inmueble['Inmuebl']['aacondicionado']) ? 'Si' : 'No'; ?></td>
    </tr>

    <tr>
      <th>Gas</th>
      <td><?php echo ($inmueble['Inmuebl']['gas']) ? 'Si' : 'No'; ?></td>
      <th>Calentador</th>
      <td><?php echo $calentador[$inmueble['Inmuebl']['calentador_id']]; ?></td>

    </tr>
    <tr>
      <th>Calefacción</th>
      <td><?php echo ($inmueble['Inmuebl']['calefaccion']) ? 'Si' : 'No'; ?></td>
      <th>Tipo de Garaje---</th>
      <td>Independiente---</td>
    </tr>
    <tr>
      <th colspan="4">
      Otras características</th>
    </tr>
    <tr>
      <th colspan="4">
      <a name="Detalles del conjunto">
      Detalles del conjunto</a></th>
    </tr>

    <tr>
      <th>Conjunto cerrado</th>
      <td><?php echo ($inmueble['Inmuebl']['conjunto']) ? 'Si' : 'No'; ?></td>
      <th >Nombre
      del conjunto</th>
      <td><?php echo $inmueble['Inmuebl']['nombre_conjunto']; ?></td>

    </tr>
    <tr>
      <th>Salón
      Comunal</th>
      <td>Si--</td>
      <th>
      Parqueadero Visitantes</th>
      <td>
      <?php echo ($inmueble['Inmuebl']['pvisitantes']) ? 'Si' : 'No'; ?></td>
      </tr>
    <tr>
      <th>Zona de
      Niños</th>
      <td>
      No--</td>
      <th>Garaje cubierto</th>

      <td>
      No--</td>
      </tr>
    <tr>
      <th>Piscina</th>
      <td>
      <?php echo ($inmueble['Inmuebl']['piscina']) ? 'Si' : 'No'; ?></td>

      <th>Gimnasio</th>
      <td>
      <?php echo ($inmueble['Inmuebl']['gimnasio']) ? 'Si' : 'No'; ?></td>
      </tr>
    <tr>
      <th>Portería</th>
      <td>
      <?php echo ($inmueble['Inmuebl']['porteria']) ? 'Si' : 'No'; ?></td>
      <th>
      Vigilancia</th>

      <td>
      <?php echo ($inmueble['Inmuebl']['vigilancia']) ? 'Si' : 'No'; ?></td>
      </tr>
  </table>
    </div>



    </div>