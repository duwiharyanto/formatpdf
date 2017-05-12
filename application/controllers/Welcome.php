<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
        $this->load->view('welcome_to_the_jungle', '', true);
	}
	public function test(){
		ob_start();
		$this->load->view('format');
		$html=ob_get_contents();
		ob_end_clean();
		//include_once APPPATH . '/third_party/mPDF/mpdf.php';
		/*
		$pdf = new HTML2PDF('P','A4','en');
		$pdf->WriteHTML($html);
		$pdf->Output('Data Siswa.pdf', 'D');
		

		$mpdf = new mPDF('c', 'A4-L', '', '', 5, 5, 10, 10, 10, 10);
		$mpdf->SetProtection(array('print'));
		$mpdf->SetDisplayMode('fullpage');
		$mpdf->WriteHTML($html);
		$mpdf->Output();
		*/
			// require_once('./asset/html2pdf/html2pdf.class.php');
			//$pdf = new HTML2PDF('l','A4','en');
			 require_once('./asset/third_party/mPDF/mpdf.php');
			 $pdf= new mPDF('c', 'A4-L', '', '', 5, 5, 10, 10, 10, 10);

			 $pdf->WriteHTML($html);
			 //$pdf->SetDisplayMode('fullpage');
			 $pdf->Output();

	}
	function preview(){
		$this->load->view('format');
	}
}
