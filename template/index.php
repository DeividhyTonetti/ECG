<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title>Dados ECG</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/theme.css" />
    <link rel="stylesheet" href="assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="assets/css/layout2.css" rel="stylesheet" />
       <link href="assets/plugins/flot/examples/examples.css" rel="stylesheet" />
       <link rel="stylesheet" href="assets/plugins/timeline/timeline.css" />
    <!-- END PAGE LEVEL  STYLES -->
     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="padTop53 " >           
       <div id="left" >
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/2.png" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"> Dr. Gregory House</h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
                <li class="panel active">
                    <a href="index.php" >
                        <i class="icon-table"></i> Geral
	   
                       
                    </a>                   
                </li>

                <li class="panel">
                    <a href="#pages_calendar.html" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
                        <i class="icon-table"></i> Calendário
                    </a>
                </li>

                <li><a href="#tables.html"><i class="icon-table"></i> Dados de pacientes </a></li>
                

                
                 
                <li><a href="sair.php"><i class="icon-signin"></i> Sair da conta </a></li>

            </ul>

        </div>
        <!--END MENU SECTION -->



        <!--PAGE CONTENT -->
        <div id="content">
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                       <CENTER> <h1> CARDIOTIME - Cardiologia em tempo real </h1></CENTER>
                    </div>
                </div>
                  <hr />
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
                        <div style="text-align: center;">
                           
                            <a class="quick-btn" href="#">
                                <i class="icon-check icon-2x"></i>
                                <span> Iniciar exame</span>
                                <span class="label label-danger">1</span>
                            </a>

                            <a class="quick-btn" href="#">
                                <i class="icon-envelope icon-2x"></i>
                                <span>Mensagens</span>
                                <span class="label label-success">2</span>
                            </a>
                            <a class="quick-btn" href="#">
                                <i class="icon-signal icon-2x"></i>
                                <span>Antecedentes</span>
                                <span class="label label-warning">3</span>
                            </a>
                            <a class="quick-btn" href="#">
                                <i class="icon-heart icon-2x"></i>
                                <span>Risco</span>
                                <span class="label btn-metis-2">4</span>
                            </a>
                            <a class="quick-btn" href="#">
                                <i class="icon-ambulance icon-2x"></i>
                                <span>Emergência</span>
                                <span class="label btn-metis-4">5</span>
                            </a>
                            <a class="quick-btn" href="#">
                                <i class="icon-microphone icon-2x"></i>
                                <span>Novo Audio</span>
                                <span class="label label-default">6</span>
                            </a>

                            
                            
                        </div>

                    </div>

                </div>
                  <!--END BLOCK SECTION -->
                <hr />
                   <!-- CHART & CHAT  SECTION -->
                 <div class="row">
                    <div class="col-lg-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               <center><h4> ELETROCARDIOGRAMA</h4></center>
                            </div>

                                                
			<div class="demo-container">
			<div id="placeholderRT" class="demo-placeholder"></div>
		</div>

                        </div>

                    </div>

                    
                     <div class="col-lg-4">

                        <div class="chat-panel panel panel-primary">
                            <div class="panel-heading">
                                <i class="icon-comments"></i>
                                Bate-papo
                            <div class="btn-group pull-right">
                                <button type="button" data-toggle="dropdown">
                                    <i class="icon-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu slidedown">
                                    <li>
                                        <a href="#">
                                            <i class="icon-refresh"></i> Atualizar
                                        </a>
                                    </li>
    
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-signout"></i> Ficar offline
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            </div>

                            <div class="panel-body">
                                <ul class="chat">
                                    <li class="left clearfix">
                                        <span class="chat-img pull-left">
                                            <img src="assets/img/1.png" alt="User Avatar" class="img-circle" />
                                        </span>
                                        <div class="chat-body clearfix">
                                            <div class="header">
                                                <strong class="primary-font"> Jack Sparrow </strong>
                                                <small class="pull-right text-muted">
                                                    <i class="icon-time"></i> 12 mins atrás
                                                </small>
                                            </div>
                                             <br />
                                            <p>
                                                Olá doutor, podemos começar o exame?
                                            </p>
                                        </div>
                                    </li>
                                    <li class="right clearfix">
                                        <span class="chat-img pull-right">
                                            <img src="assets/img/2.png" alt="User Avatar" class="img-circle" />
                                        </span>
                                        <div class="chat-body clearfix">
                                            <div class="header">
                                                <small class=" text-muted">
                                                    <i class="icon-time"></i> 13 mins atrás</small>
                                                <strong class="pull-right primary-font">  Dr. Gregory House</strong>
                                            </div>
                                            <br />
                                            <p>
                                                Claro, já esta com os aparelhos colocados nos locais indicados?
                                            </p>
                                        </div>
                                    </li>
                                    <li class="left clearfix">
                                        <span class="chat-img pull-left">
                                            <img src="assets/img/1.png" alt="User Avatar" class="img-circle" />
                                        </span>
                                        <div class="chat-body clearfix">
                                            <div class="header">
                                                <strong class="primary-font"> Jack Sparrow </strong>
                                                <small class="pull-right text-muted">
                                                    <i class="icon-time"></i> 12 mins atrás
                                                </small>
                                            </div>
                                             <br />
                                            <p>
                                                Sim, estão exatamente onde o senhor me orientou a colocar
                                            </p>
                                        </div>
                                    </li>
                                    <li class="right clearfix">
                                        <span class="chat-img pull-right">
                                            <img src="assets/img/2.png" alt="User Avatar" class="img-circle" />
                                        </span>
                                        <div class="chat-body clearfix">
                                            <div class="header">
                                                <small class=" text-muted">
                                                    <i class="icon-time"></i> 13 mins atrás</small>
                                                <strong class="pull-right primary-font"> Dr. Gregory House</strong>
                                            </div>
                                            <br />
                                            <p>
                                                otimo, vamos lá, respire fundo e tente não realizar movimentos bruscos.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="panel-footer">
                                <div class="input-group">
                                    <input id="Text1" type="text" class="form-control input-sm" placeholder="Digite sua mensagem aqui..." />
                                    <span class="input-group-btn">
                                        <button class="btn btn-warning btn-sm" id="Button1">
                                            Enviar
                                        </button>
                                    </span>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
                 <!--END CHAT & CHAT SECTION -->
                 <!-- COMMENT AND NOTIFICATION  SECTION -->
                <div class="row">
                    
                </div>
                <!-- END COMMENT AND NOTIFICATION  SECTION -->
                

                

                 <!--  STACKING CHART  SECTION   -->

                 <!--END STACKING CHART SCETION  -->

                 <!--TABLE, PANEL, ACCORDION AND MODAL  -->
                          <div class="row">
                   

                </div>
                 <!--TABLE, PANEL, ACCORDION AND MODAL  -->

                
            </div>

        </div>
        <!--END PAGE CONTENT -->

         <!-- RIGHT STRIP  SECTION -->
        <div id="right">

            
            <div class="well well-small">
                <ul class="list-unstyled">
                    <li>Paciente &nbsp; : <span>Juliano</span></li>
                    <li>Sexo: &nbsp; : <span> Masculino</span></li>
                    <li>Idade &nbsp; : <span>36 anos</span></li>
                </ul>
            </div>
            <div class="well well-small">
                <button class="btn btn-block"> Ajuda </button>
                <button class="btn btn-primary btn-block"> Pausar teste</button>
                <button class="btn btn-info btn-block">  Retomar teste</button>
                <button class="btn btn-success btn-block"> Novo exame </button>
                <button class="btn btn-danger btn-block"> Finalizar exame </button>
                <button class="btn btn-warning btn-block"> Extrato de contas </button>
                <button class="btn btn-inverse btn-block"> Finalização do exame </button>
            </div>
            <div class="well well-small">
                <span>Ansiedade</span><span class="pull-right"><small>55%</small></span>

                <div class="progress mini">
                    <div class="progress-bar progress-bar-info" style="width: 55%"></div>
                </div>
                <span>Arritmia Cardiaca</span><span class="pull-right"><small>60%</small></span>

                <div class="progress mini">
                    <div class="progress-bar progress-bar-success" style="width: 60%"></div>
                </div>
                <span>Variação</span><span class="pull-right"><small>38%</small></span>

                <div class="progress mini">
                    <div class="progress-bar progress-bar-warning" style="width: 38%"></div>
                </div>
                <span>Geral</span><span class="pull-right"><small>76%</small></span>

                <div class="progress mini">
                    <div class="progress-bar progress-bar-danger" style="width: 76%"></div>
                </div>
            </div>
          
            
         

        </div>
         <!-- END RIGHT STRIP  SECTION -->
    </div>

    <!--END MAIN WRAPPER -->

    <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  UFSC &nbsp;2018 - 2 &nbsp;</p>
    </div>
    <!--END FOOTER -->


    <!-- GLOBAL SCRIPTS -->
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/flot/jquery.flot.js"></script>
    <script src="assets/plugins/flot/jquery.flot.resize.js"></script>
    <script src="assets/plugins/flot/jquery.flot.time.js"></script>
     <script  src="assets/plugins/flot/jquery.flot.stack.js"></script>
    <script src="assets/js/for_index.js"></script>
   
    <!-- END PAGE LEVEL SCRIPTS -->


</body>

    <!-- END BODY -->
</html>
