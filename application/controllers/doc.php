<?php if (!defined('BASEPATH')) {exit('No Directory');}

class Doc extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('fpdf');
// $this->pdf->fontpath = 'font';
    }

    public function index()
    {
// Generate PDF by saying hello to the world
        $this->fpdf->FPDF('L', 'mm', 'A3'); //ขนาดกระดาษ A3 แนนนอน
        $this->fpdf->AddPage();
        $this->fpdf->SetFont('Arial', 'B', 16);
        $this->fpdf->Cell(40, 10, 'Hello World!');
        $this->fpdf->Output();
    }
}


