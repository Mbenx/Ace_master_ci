<?php
require_once('tcpdf.php');

class MyPDF extends TCPDF {

	private $_CI;
	
	public function Header() {
		$this->_CI =& get_instance();
		
		// $image_file = base_url('/assets/images/logo_garuda_indonesia.png');
        // $this->Image($image_file, 15, 5, 50, '', 'PNG', '', 'T', false, 400, '', false, false, 0, false, false, false);
		// $this->Ln(10);        		
		//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
		
		// $this->SetFont('tahoma', 'B', 14);
		// $this->Cell(180, 15, 'PT. Garuda Indonesia Group', 0, FALSE, 'L', 0, '', 0, FALSE, 'M', 'M');
		// $this->Ln(6);        
        
		// $this->SetFont('tahoma', 'C', 9);
		// $this->Cell(180, 0, 'Jl. Cikini Stones Complex No 201' , 0, FALSE, 'L', 0, '', 0, FALSE, 'M', 'M');
		// $this->Ln(4);
		
		// $this->Cell(180, 0, '(021) 260912', 0, FALSE, 'L', 0, '', 0, FALSE, 'M', 'M');
		// $this->Ln(4);
		
		// $this->SetLineStyle(array('width' => 0.2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0));
		// $this->Cell(0, 0, '', 'T', 0, 'C');
		
		
	}
	
}

?>