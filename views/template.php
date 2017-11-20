<!-- Esse template = design (estilo) da maioria das paginas -->
<!DOCTYPE html> <!-- para usufruir do html5 -->
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; 
    qualquer outro conteúdo deve vir *após* essas tags -->
   

       
      <link href="<?php echo BASE_URL; ?>assets/css/style.css" rel="stylesheet">
      <link href="<?php echo BASE_URL; ?>assets/css/topo2.css" rel="stylesheet">
      <link href="<?php echo BASE_URL; ?>assets/css/container.css" rel="stylesheet">
            <script src="<?php echo BASE_URL; ?>assets/js/slide.js"></script>
      <link href="<?php echo BASE_URL; ?>assets/css/contato.css" rel="stylesheet">
      <link href="<?php echo BASE_URL; ?>assets/css/quemsomos.css" rel="stylesheet">
      <link href="<?php echo BASE_URL; ?>assets/css/computador.css" rel="stylesheet">

    
   </head>
  
       <div class="topo">
        <div class="topoint">
            <div class="topodireita">
                
           <a href="https://webmail.hostinger.com.br/auth">WEBMAIL</a>
            <a>| </a>
            <a href="login">Login </a>   
          
             </div>
        <div class="topoesquerda">
             <ul>
                    <li><a href="home" >Home</a></li>
                    <li><a href="quemsomos">Quem Somos</a></li>
                    <li><a href="contato">Contato</a></li>
             </ul>
             
                <a href="https://www.youtube.com/marcelhoyama"><img src="<?php BASE_URL ?>assets/images/youtubecolor.png" border="0" width="26" height="26" /></a>   
            <a href="https://m.facebook.com/marcelinfo/"><img src="<?php BASE_URL ?>assets/images/facebookcolor.png" border="0" width="26" height="26" /></a>  
            
        </div>
             
    </div>
</div>
       <div class="bannercontato">
          <div class="topocontato">
                <div class="topocontatoesquerda">
                    <div class="logocontato">
                           <img src="<?php BASE_URL?>assets/images/logo_banner.png" border="0"width="230"/>
                       </div>
                  </div>
     
                        <div class="menu">
                            <div class="menuint">


                                <ul>
                                   <li><a href="home">Home</a></li>
                                  
                                                                <li>
                                                                    <a href="computador">Assistência</a>
                                                                        <img src="assets/images/dropdown.png" border="0" width="8" />
                                                                        <div class="submenu">
                                                                            <a href="computador"><div class="submenuitem">Computadores
                                                                                                        <div class="submenu2">
                                                                                                        
                                                                                                        <a href="formatacao"><div class="submenuitem2">Formatação</div></a>
                                                                                                        <a href="limpezasistema"><div class="submenuitem2">Limpeza Sistema</div></a>
                                                                                                        <a href="#"><div class="submenuitem2">Manuten. Preventiva</div></a>
                                                                                                        <a href="#"><div class="submenuitem2">Manuten. Corretiva</div></a>
                                                                                                        <a href="#"><div class="submenuitem2">Instalação Programas</div></a>
                                                                                                        <a href="#"><div class="submenuitem2">Remoção de Vírus</div></a>
                                                                                                        <a href="#"><div class="submenuitem2">Backup (Salvar dados)</div></a>
                                                                                                        <a href="#"><div class="submenuitem2">Recuperação de Dados</div></a>
                                                                                                        <a href="#"><div class="submenuitem2">Montagem</div></a>
                                                                                                        <a href="#"><div class="submenuitem2">Troca de Peças</div></a>
                                                                                                        </div></a>
                                                                                                 </div>  

                                                                         <!--   <a href="#"><div class="submenuitem">Software
                                                                                    <div class="submenu2">
                                                                                        <a href="#"><div class="submenuitem2">Instalação</div></a>
                                                                                       
                                                                                    </div></a>
                                                                                    </div> -->
                                                                                
                                                                    <a href="#"><div class="submenuitem">Celular
                                                                                        <div class="submenu2">
                                                                                             <a href="#"><div class="submenuitem2">Programas</div></a>
                                                                                             <a href="#"><div class="submenuitem2">Manutenção</div></a>
                                                                                             <a href="#"><div class="submenuitem2">Troca de Peças</div></a>
                                                                                        </div></a>

                                                                                </div>
                                                                        </div>
                                                                </li>
                                                                <li>
                                                                        <a href="#">Periféricos</a>
                                                                        <img src="assets/images/dropdown.png" border="0" width="8" />
                                                                        <div class="submenu">
                                                                            <a href="#"><div class="submenuitem">Roteador
                                                                                    <div class="submenu2">
                                                                                <a href="#"><div class="submenuitem">Instalação</div></a>
                                                                                <a href="#"><div class="submenuitem">Configuração</div></a>
                                                                                
                                                                        </div>
                                                                                </div>
                                                                                <a href="#"><div class="submenuitem">Impressora
                                                                                    <div class="submenu2">
                                                                                <a href="#"><div class="submenuitem">Instalação</div></a>
                                                                                <a href="#"><div class="submenuitem">Configuração</div></a>
                                                                                
                                                                        </div>
                                                                                </div>
                                                                </li>
                                                                <li><a href="#">Geral</a></li>
                                                                <li>
                                                                        <a href="#">Notícias</a>
                                                                        <img src="assets/images/down-arrow.png" border="0" width="8" />
                                                                        <div class="submenu">
                                                                                <a href="#"><div class="submenuitem">Submenu 1</div></a>
                                                                                <a href="#"><div class="submenuitem">Submenu 2</div></a>
                                                                                <a href="#"><div class="submenuitem">Submenu 3</div></a>
                                                                                <a href="#"><div class="submenuitem">Submenu 4</div></a>
                                                                        </div>
                                                                </li>
                                                                <li><a href="#">Redes</a></li>
                                                                <li><a href="#">Videos</a></li>
                                 </ul>

                            </div>
                        </div>
         </div>
       </div>   
  <body>
      
      <div class="container">
        <div class="containerint">
<!--  aqui onde vai o corpo das paginas do sistema -->
<?php  $this->loadViewInTemplate($viewName, $viewData); ?>




        </div>
      </div>
</body>

<footer>
    <div class="rodape">
    SIDCELL Informática - Desenvolvido por Marcel Hoyama
    </div>
</footer>
</html>