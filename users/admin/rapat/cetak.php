<?php

include '../../../connection.php';
include '../../../fpdf.php';

$id = $_GET["id"];

$query = "SELECT * FROM presensi WHERE id_rapat = $id";
$result = mysqli_query($db, $query);


while ($presensi = mysqli_fetch_assoc($result)) {
    //masukan data tabel presensi
    $hasilpresensi[] = $presensi;
};

//ambil baris pertama saja lalu ambil data id event dan id rapatnya
$id_event = $hasilpresensi[0]["id_event"];
$id_rapat = $hasilpresensi[0]["id_rapat"];

//cari event data
$queryCariEvent = "SELECT * FROM events WHERE id = $id_event";
$result = mysqli_query($db, $queryCariEvent);
$hasilEvent = mysqli_fetch_assoc($result);
$namaEvent = $hasilEvent["nama"];

$stringEventNama = "Event Rapat      : $namaEvent";

//cari rapat data
$queryCariRapat = "SELECT * FROM rapat WHERE id = $id_rapat";
$result = mysqli_query($db, $queryCariRapat);
$hasilRapat = mysqli_fetch_assoc($result);

$tanggalRapat = $hasilRapat["tanggal"];
$keteranganRapat = $hasilRapat["keterangan"];

$stringTanggalRapat = "Hari/Tanggal    : $tanggalRapat";
$stringKeteranganRapat = "Keterangan       : $keteranganRapat";




$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Times', 'B', 16);
$pdf->Cell(0,5, 'UNIVERSITAS ESA UNGGUL', '0', '1', 'C', false);
$pdf->Cell(0,10, 'ORGANISASI LDK IKMI', '0', '1', 'C', false);
$pdf->SetFont('Times', 'i', 8);
$pdf->Cell(0,5, 'Alamat : Jl. Arjuna Utara No.9, Duri Kepa, Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11510', '0', '1', 'C', false);
$pdf->SetFont('Times', '', 8);
$pdf->Cell(0,5, 'PANITIA ORGANISASI IKMI', '0', '1', 'C', false);
$pdf->Ln(3);
$pdf->Cell(190, 0.6, '', '0', '1', 'C', true);
$pdf->Ln(5);

$pdf->SetFont('Times', 'B', 9);
$pdf->Cell(0,5, 'ABSENSI RAPAT ORGANISASI LDK IKMI', '0', '1', 'C', false);
$pdf->Ln(3);

$pdf->SetFont('Times', 'B', 9);

$pdf->Cell(0,5, $stringTanggalRapat, '0', '1', 'L', false);
$pdf->Cell(0,5, $stringEventNama, '0', '1', 'L', false);
$pdf->Cell(0,5, $stringKeteranganRapat, '0', '1', 'L', false);
$pdf->Ln(3);

$pdf->SetFont('Times', 'B', 9);
$pdf->Cell(15, 6, 'No.', '1', '0', 'C', false);
$pdf->Cell(70, 6, 'Nama', '1', '0', 'C', false);
$pdf->Cell(60, 6, 'Jabatan', '1', '0', 'C', false);
$pdf->Cell(45, 6, 'Kehadiran', '1', '0', 'C', false);


$indeks = 1;

foreach ($hasilpresensi as $satupresensi) {
    

    // simpan informasi (ini tanpa menggunakan penggunaan join DB)
    $id_user = $satupresensi["id_user"];

    //cari user
    $queryCariUser = "SELECT * FROM users WHERE id = $id_user";
    $result = mysqli_query($db, $queryCariUser);
    $hasilUser = mysqli_fetch_assoc($result);

    $pdf->Ln(6);
    $pdf->SetFont('Times', '', 7);
    $pdf->Cell(15, 6, $indeks, '1', '0', 'C', false);
    $pdf->Cell(70, 6, $hasilUser["nama"], '1', '0', 'C', false);
    $pdf->Cell(60, 6, $hasilUser["jabatan"], '1', '0', 'C', false);

    if ($satupresensi["kehadiran"] == "Hadir") {
        $pdf->Cell(45, 6, "Hadir", '1', '0', 'C', false);
    }
    else {
        $pdf->Cell(45, 6, "Tidak hadir", '1', '0', 'C', false);
    }
    

    $indeks++;

};




$pdf->Output();

?>