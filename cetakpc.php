<?php 

require 'function.php';
require 'cek.php';
require('fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('telkom.png',15,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // garis tebal
    $this->Ln(18);
    $this->SetFont('Arial','B',12);
    $this->Cell(50);
    $this->Cell(30,10,'BERITA ACARA KELUAR MASUK BARANG','C');
    $this->SetLineWidth(1);
    $this->Line(61,36,149,36);
    // Line break5

}
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}

}
// Instanciation of inherited class
$sql =  $conn->query("SELECT * FROM bkeluar ORDER BY idkeluar DESC LIMIT 1");
while($data = mysqli_fetch_array($sql))
{
    $iduniq = $data['iduniq'];
    $kebutuhan = $data['kebutuhan'];
    $dari = $data['dari'];
    $kepada = $data['kepada'];
    $hasil = $data['hasil'];
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->Ln(15);
    $pdf->SetFont('Arial','',11);
    $pdf->Cell(15);
    $pdf->Cell(0,9,'Kebutuhan        : '.$kebutuhan.'');
    $pdf->Ln(7);
    $pdf->Cell(15);
    $pdf->Cell(0,9,'Dari                   : '.$dari.'');
    $pdf->Ln(7);
    $pdf->Cell(15);
    $pdf->Cell(0,9,'Kepada             : '.$kepada.'');
    $pdf->Ln(7);
    $pdf->Cell(15);
    $pdf->Cell(0,9,'Hasil                  : '.$hasil.'');
    $pdf->Ln(7);
    

    //tabel
    $pdf->Ln(5);
    $pdf->Cell(10);
    $pdf->cell(15,9,'Perangkat yang dimaksud dengan rincian sebagai berikut :');
    $pdf->Ln(8);
    $pdf->Cell(10);
    $pdf->SetFont('Arial','B',7);
    $pdf->Cell(10,9,'no',1,0,'C');
    $pdf->Cell(40,9,'jenis',1,0,'C');
    $pdf->Cell(40,9,'Connector',1,0,'C');
    $pdf->Cell(40,9,'Jarak',1,0,'C');
    $pdf->Cell(40,9,'Type Kabel',1,0,'C');
    $sql =  $conn->query("SELECT * FROM patchcorek WHERE iduniq = '$iduniq'");
    $i = 1;
    while($data = mysqli_fetch_array($sql))
    {
        $pdf->SetFont('Arial','',7);
        $pdf->Ln(9);
        $pdf->Cell(10);
        $pdf->Cell(10,9,''.$i++.'',1,0,'C');
        $pdf->Cell(40,9,''.$data['jenisk'].'',1,0,'C');
        $pdf->Cell(40,9,''.$data['connectork'].'',1,0,'C');
        $pdf->Cell(40,9,''.$data['jarakk'].'',1,0,'C');
        $pdf->Cell(40,9,''.$data['tkabelk'].'',1,0,'C');
    }
}


    $pdf->Ln(10);
    $pdf->Cell(10);
    $pdf->SetFont('Arial','',11);
    $pdf->cell(15,9,'Demikian Berita Acara ini dibuat dengan sebenarnya, untuk dipergunakan sebagaimana mestinya.');

    $pdf->Ln(15);
    $sql =  $conn->query("SELECT * FROM bkeluar ORDER BY idkeluar DESC LIMIT 1");
    while($data = mysqli_fetch_array($sql))
    {
    $nymenerima = $data['nymenerima'];
    $nikmenerima = $data['nikmenerima'];
    $nymenyerahkan = $data['nymenyerahkan'];
    $nikmenyerahkan = $data['nikmenyerahkan'];
    $tanggal = $data['tanggal'];
    $pdf->SetFont('Arial','B',11);
    $pdf->cell(135);
    $pdf->cell(0,9,'Makassar,  '.$tanggal.'');
    $pdf->Ln(10);
    $pdf->Cell(15);
    $pdf->SetFont('Arial','',11);
    $pdf->cell(15,9,'Yang Menerima,');
    $pdf->cell(105);
    $pdf->cell(0,9,'Yang Menyerahkan,');
    $pdf->Ln(30);
    $pdf->Cell(15);
    $pdf->SetFont('Arial','',11);
    $pdf->cell(15,9,'('.$nymenerima.')');
    $pdf->cell(105);
    $pdf->cell(0,9,'('.$nymenyerahkan.')');
    $pdf->Ln(5);
    $pdf->Cell(15);
    $pdf->SetFont('Arial','B',11);
    $pdf->cell(15,9,'NIK. '.$nikmenerima.'');
    $pdf->cell(105);
    $pdf->cell(0,9,'NIK. '.$nikmenyerahkan.'');
    }

$pdf->SetFont('Times','',12);
$pdf->Output();

?>