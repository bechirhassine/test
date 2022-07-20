<?PHP 
include "../core/Client_Core.php"; ?>
<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>Client</title>
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
        <script type="text/javascript" src="controlep.js"></script>
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
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> Bechir Hassine<i class="caret"></i>

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
                            <li class="active">
                                <a href="#">Dashboard</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Settings <b class="caret"></b>

                                </a>
                                <ul class="dropdown-menu" id="menu1">
                                    <li>
                                        <a href="#">Tools <i class="icon-arrow-right"></i>

                                        </a>
                                        <ul class="dropdown-menu sub-menu">
                                            <li>
                                                <a href="#">Reports</a>
                                            </li>
                                            <li>
                                                <a href="#">Logs</a>
                                            </li>
                                            <li>
                                                <a href="#">Errors</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">SEO Settings</a>
                                    </li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Content <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Blog</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">News</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Custom Pages</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Calendar</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="#">FAQ</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Users <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">User List</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Search</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Permissions</a>
                                    </li>
                                </ul>
                            </li>
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
                            <a href="index.html"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="calendar.html"><i class="icon-chevron-right"></i> Calendar</a>
                        </li>
                        <li>
                            <a href="stats.html"><i class="icon-chevron-right"></i> Statistics (Charts)</a>
                        </li>
                        <li>
                            <a href="form.html"><i class="icon-chevron-right"></i> Forms</a>
                        </li>
                        <li>
                            <a href="tables.html"><i class="icon-chevron-right"></i> Tables</a>
                        </li>
                        <li>
                            <a href="buttons.html"><i class="icon-chevron-right"></i> Buttons & Icons</a>
                        </li>
                        <li>
                            <a href="editors.html"><i class="icon-chevron-right"></i> WYSIWYG Editors</a>
                        </li>
                        
                        <li>
                            <a href="interface.html"><i class="icon-chevron-right"></i> UI & Interface</a>
                        </li>


                         <li class="active">
                            <a href="Client1.php"><span class="badge badge-success pull-right">731</span> Product</a>
                        </li>

                         <li>
                            <a href="promotion1.php"><span class="badge badge-warning pull-right">235</span> Promotion</a>
                        </li>

                        <li >
                            <a href="evenement.html"><span class="badge badge-success pull-right">731</span> Events</a>
                        </li>
                        <li>
                            <a href="livraison.html"><span class="badge badge-success pull-right">812</span> Delivery</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info pull-right">27</span> Clients</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info pull-right">1,234</span> Users</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info pull-right">2,221</span> Messages</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info pull-right">11</span> Reports</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-important pull-right">83</span> Errors</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-warning pull-right">4,231</span> Logs</a>
                        </li>
                    </ul>
                </div>
                <div class="span9" id="content">
                     <div class="row-fluid">
                         <!-- block --> 
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">
                                    <form method="POST" action="afficherClient.php"></div>
                                <div class="muted pull-left">Afficher Client</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form class="form-horizontal">
                                      <fieldset>
                                        <div class="control-group">
                                   <button class="btn btn-warning btn-large" style="margin-left:auto;margin-right:auto;display:block;" >Afficher Les Client</button>    
                                        </div>
                                      </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">

                                <div class="muted pull-left">
                                     Client</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <?php 
                                    if(isset($_GET["operation"]) && $_GET["operation"]=="ok"){
                                        echo '<div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <h4>Success</h4>
                            The operation completed successfully</div>';
                                    }
                                    ?>
                                   <form method="POST" action="addClient.php" enctype="multipart/form-data">
                                  
                                      <fieldset>
                                        <legend>Ajouter Client</legend>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Nom</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead"  data-provide="typeahead" data-items="4"  name="Nom" required>
                                          </div>
                                          </div>
                                          <br />
                                          <div class="control-group">
                                          <label class="control-label" for="typeahead">Prenom</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead"  data-provide="typeahead" data-items="4"  name="Prenom" required>
                                          </div>
                                          </div>
                                          <br />
                                          <div class="control-group">
                                          <label class="control-label" for="typeahead">Email</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead"  data-provide="typeahead" data-items="4"  name="Email" required>
                                          </div>
                                          </div>
                                          <br />
                                          
                                        
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Solde</label>
                                          <div class="controls">
                                            <input type="number" class="span6" id="price"  data-provide="typeahead" data-items="4" name="Solde" step=0.5 required>
                                            
                                          </div>
                                        </div>                                      
                                       
                                        
                                        <div class="form-actions">
                                          <button  type="submit" name="ajouter" value="ajouter" onclick="envoyer();" class="btn btn-primary">Ajouter</button>
                                          <button type="reset" class="btn">Annuler</button>
                                        </div>
                                      </fieldset>
                                </form>

                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                <div class="span9" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">
                                     Modifier Client</div>
                               
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <?php 
                                    if(isset($_GET["operation"]) && $_GET["operation"]=="update"){
                                        echo '<div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <h4>Success</h4>
                            The operation completed successfully</div>';
                                    }
                                    ?>
                                    <form method="post" action="modifierClient.php">
  
                                      <fieldset>
                                        <legend>Modifier Client</legend>
                                        <div class="control-group">
                                          <label class="control-label" for="select01">Nom </label>
                                          <div class="controls">
                                        <select id="select01" class="chzn-select"name="Nom" >
                                              <?PHP

$Client1=new Client_Core();
$ListeClient=$Client1->afficherClient();

?>

<?PHP
foreach($listeClient as $row){
    ?>

<?PHP echo "<option value='".$row['Nom']."' class='active-result'>".$row['Nom']."</option>"; ?>

    <?PHP
}
?>
                                            </select>
                                            <p class="help-block">Start typing to activate auto complete!</p>
                                          </div>
                                          <br />
                                          <div class="control-group">
                                          <label class="control-label" for="typeahead">Solde</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="Solde" data-provide="typeahead" >
                                          </div>

                                        </div>
                                         
                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Email</label>
                                          <div class="controls">
                                            <textarea class="input-xlarge textarea" name="Email"  placeholder="Enter text ..." style="width: 810px; height: 200px" ></textarea>
                                          </div>
                                        </div>

                                        <div class="form-actions">
                                          <button type="submit" onclick="envoyermodifier();" class="btn btn-primary" name="modifier" value="modifier">Modifier</button>
                                          <button type="reset" class="btn">Annuler</button>
                                        </div>
                                      </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                <div class="span9" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">

                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Supprimer Client</div>
                            </div>
                            <div class="block-content collapse in">

                                 <form method="POST" action="supprimerClient.php">
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
                                        <legend>Supprimer Client</legend>
                                        <div class="control-group">
                                          <label class="control-label" for="select01">Reference du Client</label>
                                          <div class="controls">
                                            <select id="select01" class="chzn-select"name="Nom">
                                               
 <?PHP

$Client1=new Client_Core();
$listeClient=$Client1->afficherClient();

?>

<?PHP
foreach($listeClient as $row){
    ?>

<?PHP echo "<option value='".$row['Nom']."' class='active-result'>".$row['Nom']."</option>"; ?>

    <?PHP
}
?>
                                            </select>
                                        </div>
                                          </div>
                                      </div>
                                          <br />
                                                                             <div class="form-actions">
                                          <button type="submit" onclick="envoyermodifier();" name="supprimer" value="supprimer"  class="btn btn-primary">Supprimer</button>
                                          <button type="reset" class="btn">Annuler</button>
                                        </div>
                                      </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

        <!--/.fluid-container-->
        <link href="../vendors/datepicker.css" rel="stylesheet" media="screen">
        <link href="../vendors/uniform.default.css" rel="stylesheet" media="screen">
        <link href="../vendors/chosen.min.css" rel="stylesheet" media="screen">

        <link href="../vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">

        <script src="../vendors/jquery-1.9.1.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../vendors/jquery.uniform.min.js"></script>
        <script src="../vendors/chosen.jquery.min.js"></script>
        <script src="../vendors/bootstrap-datepicker.js"></script>

        <script src="../vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
        <script src="../vendors/wysiwyg/bootstrap-wysihtml5.js"></script>

        <script src="../vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

    <script type="text/javascript" src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="../assets/form-validation.js"></script>
        
    <script src="../assets/scripts.js"></script>
        <script>

    jQuery(document).ready(function() {   
       FormValidation.init();
    });
    

        $(function() {
            $(".datepicker").datepicker();
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();
            $('.textarea').wysihtml5();

            $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#rootwizard').find('.bar').css({width:$percent+'%'});
                // If it's the last tab then hide the last button and show the finish instead
                if($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            }});
            $('#rootwizard .finish').click(function() {
                alert('Finished!, Starting over!');
                $('#rootwizard').find("a[href*='tab1']").trigger('click');
            });
        });
        </script>
    </body>

</html>