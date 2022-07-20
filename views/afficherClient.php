
<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>Produit</title>
        <!-- Bootstrap -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="../vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="../assets/styles.css" rel="stylesheet" media="screen">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="../vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script type="../text/javascript" src="../controlep.js"></script>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Admin Panel</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> bechir hassine<i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="login.html">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            
                            
                      
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li >
                            <a href="../index.html"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="../calendar.html"><i class="icon-chevron-right"></i> Calendar</a>
                        </li>

                         <li class="active">
                            <a href="Client1.php"> Client</a>
                        </li>
                        
                    </ul>
                </div>
                <div class="span9" id="content">
                     <div class="row-fluid">

                    
                    <div class="row-fluid">
                      <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Bordered Table</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <table class="table table-bordered">
                                      <thead>
                                       <?PHP
include "../core/Client_Core.php";
$Client1=new Client_Core();
$listeClient=$Client1->afficherClients();

?>
<table class="table table-bordered">
<tr>
<td>Nom</td>
<td>Prenom</td>
<td>Email</td>
<td>Solde</td>


</tr>

<?PHP
foreach($listeClient as $row){
	?>
	<tr>
	<td><?PHP echo $row['Nom']; ?></td>
    <td><?PHP echo $row['Prenom']; ?>%</td>
	<td><?PHP echo $row['Email']; ?></td>
	<td><?PHP echo $row['Solde']; ?></td>
	
	</tr>
	<?PHP
}
?>

                                      </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                    <div class="row-fluid">
                        
                    </div>

                     <div class="row-fluid">
                        
           
        
        <!--/.fluid-container-->

        <script src="../vendors/jquery-1.9.1.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../vendors/datatables/js/jquery.dataTables.min.js"></script>


        <script src="../assets/scripts.js"></script>
        <script src="../assets/DT_bootstrap.js"></script>
        <script>
        $(function() {
            
        });
        </script>
    </body>

</html>
