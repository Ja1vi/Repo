<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Estudio Juridico Lorem Ipsum y Asoc.</title>
	<link href="style(PC).css" rel="stylesheet"/>
  <link rel="stylesheet" href="css/lightbox.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body id="degrade"> 
    <header>
      <div id="logo_small"></div>
      <nav id="botonera_fija">
        <ul>
          <li class="horizontal"><a class="arriba" href="#home">Inicio</a></li>
          <li class="horizontal"><a class="arriba" href="#we">El Estudio</a></li>
          <li class="horizontal"><a class="arriba" href="#services">Servicios</a></li>
          <li class="horizontal"><a class="arriba" href="#contact">Contáctenos</a></li>
        </ul>      
      </nav>
    </header>
    <section id="home">
        <div id="banner_txt">
          <div id="logo">
          </div>
          <p id="bienvenida">Diligencia, Profesionalismo y Experiencia.</p>
        </div>
        <div id="scroll">          
        </div>
    </section>
    <section id="we">
      <div id="contenedor2">
        <div id="estudio">
          <p class="titulo_estudio">EL ESTUDIO</p>
        </div>
        <article class="CV1">
          <h1 class="name_cv">Dr Fernando Lorem</h1>
          <ul class="curriculum">
            <li>- <em>Atvero</em> eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.</li> 
            <li>- <em>Voluptatum</em> deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</li>
            <li>- <em>Similique</em> sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</li>
          </ul>
         </article>
         <article class="CV2">
          <h1 class="name_cv">Dra Alejandra Ipsum</h1>
          <ul class="curriculum">
          <li>- <em>Temporibus</em> autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe.</li>
          <li>- <em>Eveniet</em> ut et voluptates repudiandae sint et molestiae non recusandae.</li> 
          <li>- <em>Itaque</em> earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias  consequatur aut perferendis.</li>
         </ul>        
         </article>
         <article class="CV3">
          <h1 class="name_cv">Dr Laura Lorem Ipsum</h1>
          <ul class="curriculum">
            <li>- <em>Lorem ipsum</em> dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
            <li>- <em>Ut enim ad minim</em> veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li>- <em>Duis aute</em> irure dolor in reprehenderit in voluptate.</li>
          </ul>
         </article>
      </div>
    </section>
    <section id="services">
      <div id="container3">
        <nav>
          <ul>
            <li class="servicios"><a id="laboral" href="index.php?id=DL#contact">DERECHO LABORAL</a></li>
            <li class="servicios"><a id="AT" href="index.php?id=ACTR#contact">ACCIDENTES DE TRÁNSITO</a></li>
            <li class="servicios"><a id="AP" href="index.php?id=ASPR#contact">ASESORAMIENTO PREVENTIVO</a></li>
          </ul>
        </nav>          
      </div>
    </section>
    <section id="contact">
      <?php 
      if (isset($_GET['id'])) {
      
      switch ($_GET['id']) {
        case 'DL':
          $nombre='Fernando Lorem';
          $frase='Abogado Laboralista. Empleados y Empresas.';
          $email='fernandolorem@hmail.com';
          $movil='+54 599 8778445';
          $foto='Imágenes/fernando.png';
          break;
        case 'ACTR':
        $nombre='Alejandra Ipsum';
          $frase='Accidentes de Tránsito. Asesoramiento jurídico a Particulares y Aseguradoras';
          $email='alejandra.li@hmail.com';
          $movil='+54 678 3128769';
          $foto='Imágenes/alejandra.jpg';
          break;
        case 'ASPR':
         $nombre='Laura Lorem Ipsum';
          $frase='Asesoramiento Preventivo. Ahorre tiempo, reduzca costos y evite futuros litigios.';
          $email='lauralorem.ipsum@hmail.com';
          $movil='+54 887 4685923';
          $foto='Imágenes/laura.jpg';
          break;    
      }
      ?>
      <div id="tarjeta_ct">
        <div id="foto_ct">
        <img src="<?php echo $foto; ?>"></div>
       <article id="datos_ct">
         <h2><?php echo $nombre;?></h2>
         <p><?php echo $frase;?></p>
         <a href="#contact"><?php echo $email;?></a>
         <p><?php echo $movil;?></p>
       </article>
      </div>
     <?php } else{
     ?>
     <div id="tarjeta_ct">
       <article id="contact_blank">
         <h2>Seleccione uno de nuestros <a href="#services">servicios</a> para recibir atención personalizada.</h2>
         <p>Email: <a href="#direct">consultas-LI@hmail.com</a></p>
         <p>Dirección:  Blvd. San Juan esq. Hipólito Yrigoyen Piso 25</p>
         <p>Tel/Fax:  +54 788 9474359</p>
       </article>
       <div id="maps">
         <a href="Imágenes/ggmaps.png" data-lightbox="image" data-title="Encuéntrenos aquí"><img src="Imágenes/gm-icon.png"/></a>
       </div>
     </div> 
     <?php } ?>
    </section>
    <section id="direct">
      <div id="email">
        <form action="correo.php" method="POST">
        <input type="text" placeholder="Nombre y Apellido" name="nombre" size="20%" required=""></br>
        <input type="email" placeholder="email" name="email" size="25%"required=""></br>
        <input type="text" placeholder="Asunto" name="asunto" size="40%" required=""></br>
        <textarea placeholder="Su mensaje..." name="message" rows="12" cols="45"></textarea>
        </br>
        <input type="submit" name="enviar">
        <input name="Restablecer" type="reset"> 
      </form>
      <?php 
      if(isset($_GET['REE'])) {
        echo "<h4 id='mail_sent'>Mensaje enviado exitosamente!</h4>";
      }

      ?>
    </div>
    </section>
    <footer></footer>
    <script src="js/lightbox-plus-jquery.min.js"></script>
</body>
</html>
