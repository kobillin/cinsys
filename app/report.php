<?php 
if(empty($_SESSION['username']))
  header('Location: login.php'); 
?>
<?php 
function fetch_data()
{
    $output ='';
    $conn = mysqli_connect('remotemysql.com', 'HHh5S5qdnc', 'hoUUU48fLk', 'HHh5S5qdnc')
    // $conn = mysqli_connect("localhost", "root", "","cinsys");
    $sql = "SELECT * FROM registrations_invent ORDER BY id";
    $result =mysqli_query($conn, $sql)or die( mysqli_error($conn));
    while ($row = mysqli_fetch_array($result)) 
    {
        $output.= '<tr>  
                           
                          <td>'.$row["description"].'</td>    
                          <td>'.$row["brand"].'</td>
                          <td>'.$row["model"].'</td>  
                          <td>'.$row["serial_no"].'</td>   
                          <td>'.$row["location"].'</td>
                          <td>'.$row["department"].'</td>
                          <td>'.$row["assigned_to"].'</td>
                          <td>'.$row["status"].'</td>
                     </tr>  
                          ';
    }
    return $output;
}
if(isset($_POST["Print"]))  
 {  
      require_once('TCPDF/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("List of appointments");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 11);  
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '
        <img src="TCPDF/images/logo.png"></img>
      <h4 align="center" color="black">Inventory Report</h4><br /> 
      <table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
           <th width="12%">Description</th>
           <th width="7%">Brand</th>  
           <th width="15%">Model</th>
           <th width="15%">Serial</th>
           <th width="10%">Location</th>      
           <th width="15%">Department</th> 
           <th width="10%">User</th> 
           <th width="11%">Condition</th>   
                                  
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('Inventory report.pdf', 'I');  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>              
      </head>  
      <body>  
      <!-- Header nav -->	
	<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#212529;" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="../index.php">Home</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="login.php"><?php echo $_SESSION['fullname']; ?> <?php if($_SESSION['role'] == 'admin'){ echo "(Admin)"; } ?></a>
            </li>
            <li class="nav-item">
              <a href="../auth/logout.php" class="nav-link">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	<!-- end header nav -->
      <?php include '../include/header.php';?>
           <div class="container">
           <!-- <img align="center" style="align:center" src="TCPDF/images/logo.png"></img>   -->
                <h4 style=" margin-bottom:-50px;"align="center"> Inventory report</h4><br />  
                <div class="table-responsive">  
                    <div style="margin-top:;" class="col-md-12" align="right">
                     <form method="post">  
                          <input type="submit" name="Print" class="btn btn-primary" value="Print" />  
                     </form>  
                     </div>
                     <br/>
                     <br/>
                     <table class="table table-bordered">  
                          <tr>  
                            <th width="12%">Description</th>
                            <th width="7%">Brand</th>  
                            <th width="15%">Model</th>
                            <th width="15%">Serial</th>
                            <th width="10%">Location</th>      
                            <th width="15%">Department</th> 
                            <th width="10%">User</th> 
                            <th width="11%">Condition</th>  
                          </tr>  
                     <?php  
                     echo fetch_data();  
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
</html>