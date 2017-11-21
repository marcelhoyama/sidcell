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


    
   </head>
  
      
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
                                                                    <a href="#">Cadastrar</a>
                                                                        <img src="assets/images/dropdown.png" border="0" width="8" />
                                                                        <div class="submenu">
                                                                            <a href="computador"><div class="submenuitem">Cliente
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
                                                                                
                                                                    <a href="#"><div class="submenuitem">Ordem Serviço
                                                                                        <div class="submenu2">
                                                                                             <a href="#"><div class="submenuitem2">Programas</div></a>
                                                                                             <a href="#"><div class="submenuitem2">Manutenção</div></a>
                                                                                             <a href="#"><div class="submenuitem2">Troca de Peças</div></a>
                                                                                        </div></a>

                                                                                </div>
                                                                        </div>
                                                                </li>
                                                                <li>
                                                                        <a href="#">Pesquisar</a>
                                                                        <img src="assets/images/dropdown.png" border="0" width="8" />
                                                                        <div class="submenu">
                                                                            <a href="#"><div class="submenuitem">Cliente
                                                                                    <div class="submenu2">
                                                                                <a href="#"><div class="submenuitem">Ordem Serviço</div></a>
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
        
<!--  aqui onde vai o corpo das paginas do sistema -->
<?php  $this->loadViewInTemplate($viewName, $viewData); ?>




        
      </div>
</body>

<footer>
    <div class="rodape">
    SIDCELL Informática - Desenvolvido por Marcel Hoyama
    </div>
</footer>
</html>