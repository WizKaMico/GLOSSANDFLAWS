<?php
	function generateRow(){
		$contents = '';
		$id = $_GET['id'];
		include_once('../../../connection/connection.php');
		$sql = "SELECT *,tbl_product.name as PNAME FROM `tbl_order` LEFT JOIN tbl_order_item ON tbl_order.id = tbl_order_item.order_id LEFT JOIN tbl_product ON tbl_order_item.product_id = tbl_product.id WHERE tbl_order.id = '$id'";

		//use for MySQLi OOP
		$query = $conn->query($sql);
		while($row = $query->fetch_assoc()){
			$contents .= "
			<tr>
				<td>".$row['PNAME']."</td>
				<td>".$row['quantity']."</td>
				<td>".$row['price']."</td>
				<td>₱ ".$row['item_price']."</td>
			</tr>
			";
		}
		////////////////

		//use for MySQLi Procedural
		// $query = mysqli_query($conn, $sql);
		// while($row = mysqli_fetch_assoc($query)){
		// 	$contents .= "
		// 	<tr>
		// 		<td>".$row['id']."</td>
		// 		<td>".$row['firstname']."</td>
		// 		<td>".$row['lastname']."</td>
		// 		<td>".$row['address']."</td>
		// 	</tr>
		// 	";
		// }
		////////////////
		
		return $contents;
	}

	require_once('tcpdf/tcpdf.php');  
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);  
    $pdf->SetTitle("Generated PDF using TCPDF");  
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $pdf->SetDefaultMonospacedFont('helvetica');  
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
    $pdf->setPrintHeader(false);  
    $pdf->setPrintFooter(false);  
    $pdf->SetAutoPageBreak(TRUE, 10);  
    $pdf->SetFont('helvetica', '', 11);  
    $pdf->AddPage();  
    $content = '';  
    $content .= '
      	<h2 align="center"><img src="logo.png"></h2>
      	<h4>GLOSS AND FLOSS | ECOMMERCE</h4>
      	<table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
                <th width="25%">PRODUCT</th>
				<th width="25%">QUANTITY</th>
				<th width="25%">PRICE</th>
				<th width="25%">AMOUNT</th> 
           </tr>  
      ';  
    $content .= generateRow();  
    $content .= '</table>';  
    $pdf->writeHTML($content);  
    ob_clean();
    $pdf->Output('reciept.pdf', 'I');
	

?>