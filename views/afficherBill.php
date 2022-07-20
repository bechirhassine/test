
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
                            <a href="Bill1.php"><i class="icon-chevron-right"></i> Bills</a>
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
include "../core/Bill_Core.php";
$Bill1=new Bill_Core();
$listeBill=$Bill1->afficherBills();

?>

<table class="table table-bordered">
<tr>
<td>Full Name</td>
<td>Name On Card</td>
<td>Adress</td>
<td>Due Date</td>
<td>Create Date</td>
<td>Total</td>
<td>Status</td>


</tr>

<?PHP
foreach($listeBill as $row){
	?>
	<tr>
	
    <td ><?PHP echo $row['FULL_NAME']; ?></td>
    <td ><?PHP echo $row['NAME_ON_CARD']; ?></td>
	<td ><?PHP echo $row['ADRESS']; ?></td>
	<td ><?PHP echo $row['DUE_DATE']; ?></td>
    <td ><?PHP echo $row['CREATE_DATE']; ?></td>
    <td ><?PHP echo $row['TOTAL']; ?></td>
    <td ><?PHP echo $row['STATUS']; ?></td>

    

	</tr>
	<?PHP
}
?>

                                      </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>      </div>  
                        <!-- /block -->

                        <div class="block">

                            <div class="block-content collapse in">

                                 <form method="POST" action="pdfBill.php">
                                     <?php 
                                    if(isset($_GET["operation"]) && $_GET["operation"]=="oksupp"){
                                        echo '<div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <h4>Success</h4> 
                            The operation completed successfully</div>';
                                    }
                                    ?>
                                <div class="span12">
                                      <fieldset>
                                        <legend>PDF</legend>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Full name</label>
                                          <div class="controls">
                                            <input type="text" name="FULL_NAME"> 
                                               
    
                                            </select>
                                        </div>
                                          </div>
                                      </div>
                                          <br />
                                          <div class="form-actions">
                                          <button type="submit" onclick="envoyermodifier();" name="supprimer" value="supprimer"  class="btn btn-primary">pdf</button>
                                        
                                        </div>
                                      </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>
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
