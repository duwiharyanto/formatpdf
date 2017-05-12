<?php

include_once APPPATH . '/third_party/mPDF/mpdf.php';
$html .= '<html>';
$html .= '<head>';
$html .= '</head>';
$html .= '<body>';

$html .= '<table border="0" width="100%" cellpadding="0" cellspacing="0" style="font-size: 12px;">';
$html .= '<tr>';
$html .= '<td width="50%" style="padding: 0 10px; vertical-align: top;">';

$html .= '<table border="0" width="100%" cellpadding="0" cellspacing="0">';

$html .= '<tr>';
$html .= '<td align="center" width="5%" style="padding: 2px 5px;">8.</td>';
$html .= '<td align="left" style="padding: 2px 5px;">LAIN - LAIN</td>';
$html .= '<td align="center" style="padding: 2px 5px;"> : </td>';
$html .= '<td rowspan="2"></td>';
$html .= '</tr>';

$html .= '<tr>';
$html .= '<td colspan="3" style="height: 100px;"></td>';
$html .= '</tr>';


$html .= '<tr>';
$html .= '<td colspan="2"></td>';
$html .= '<td align="center" width="5%" style="padding: 2px 5px;">9.</td>';
$html .= '<td align="left" style="padding: 2px 5px;">DIBUAT TANGGAL, 05-01-2017</td>';
$html .= '</tr>';

$html .= '<tr>';
$html .= '<td colspan="2"></td>';
$html .= '<td align="center" colspan="2" style="padding: 2px 5px;">PEJABAT PENILAI</td>';
$html .= '</tr>';

$html .= '<tr>';
$html .= '<td colspan="4" style="height: 80px;"></td>';
$html .= '</tr>';

$html .= '<tr>';
$html .= '<td colspan="2"></td>';
$html .= '<td align="center" colspan="2" style="padding: 2px 5px;">(Catur Iswahyudi, S.Kom, SE, M.Cs)</td>';
$html .= '</tr>';

$html .= '<tr>';
$html .= '<td colspan="2"></td>';
$html .= '<td align="center" colspan="2" style="padding: 2px 5px;">NIK : 122223344322</td>';
$html .= '</tr>';

$html .= '<tr>';
$html .= '<td align="center" width="5%" style="padding: 2px 5px;">10.</td>';
$html .= '<td align="left" style="padding: 2px 5px;">DITERIMA TANGGAL, 05-01-2017</td>';
$html .= '<td colspan="2"></td>';
$html .= '</tr>';

$html .= '<tr>';
$html .= '<td align="center" width="5%" style="padding: 2px 5px;"></td>';
$html .= '<td align="left" style="padding: 2px 5px;">KARYAWAN TETAP YANG DINILAI</td>';
$html .= '<td colspan="2"></td>';
$html .= '</tr>';

$html .= '<tr>';
$html .= '<td colspan="4" style="height: 80px;"></td>';
$html .= '</tr>';

$html .= '<tr>';
$html .= '<td align="center" colspan="2" style="padding: 2px 5px;">(Catur Iswahyudi, S.Kom, SE, M.Cs)</td>';
$html .= '<td colspan="2"></td>';
$html .= '</tr>';

$html .= '<tr>';
$html .= '<td colspan="2"></td>';
$html .= '<td align="center" width="5%" style="padding: 2px 5px;">11.</td>';
$html .= '<td align="left" style="padding: 2px 5px;">DITERIMA TANGGAL, 05-01-2017</td>';
$html .= '</tr>';

$html .= '<tr>';
$html .= '<td colspan="2"></td>';
$html .= '<td align="center" colspan="2" style="padding: 2px 5px;">ATASAN PEJABAT PENILAI</td>';
$html .= '</tr>';

$html .= '<tr>';
$html .= '<td colspan="4" style="height: 80px;"></td>';
$html .= '</tr>';

$html .= '<tr>';
$html .= '<td colspan="2"></td>';
$html .= '<td align="center" colspan="2" style="padding: 2px 5px;">(Catur Iswahyudi, S.Kom, SE, M.Cs)</td>';
$html .= '</tr>';

$html .= '<tr>';
$html .= '<td colspan="2"></td>';
$html .= '<td align="center" colspan="2" style="padding: 2px 5px;">NIK : 122223344322</td>';
$html .= '</tr>';

$html .= '</table>';

$html .= '</td>';
$html .= '<td width="50%" style="padding: 0 10px; vertical-align: top;">';


$html .= '<table border="0" width="100%" cellpadding="0" cellspacing="0">';

$html .= '<tr>';
$html .= '<td align="center" style="padding: 2px 5px;" colspan="2" width="30%"> </td>';
$html .= '<td align="center" style="padding: 2px 5px;" colspan="2">';
    $html .= '<h5 style="font-size: 13px;">RAHASIA</h5>';
    $html .= '<h5 style="font-size: 13px; font-weight: normal;">DAFTAR PENILAIAN PELAKSANAAN PEKERJAAN</h5>';
    $html .= '<h5 style="font-size: 13px; font-weight: normal;">PEGAWAI TETAP</h5>';
    $html .= '<h5 style="font-size: 13px; font-weight: normal;">INSTITUT SAINS & TEKNOLOGI AKPRIND</h5>';
    $html .= '<h5 style="font-size: 13px; font-weight: normal;">YOGYAKARTA</h5>';
$html .= '</td>';
$html .= '</tr>';

/* NOMOR 1 */
$html .= '<tr>';
$html .= '<td rowspan="5" align="center" width="5%" style="padding: 2px 5px; vertical-align: top;">1.</td>';
$html .= '<td colspan="3" align="left" style="padding: 2px 5px;">YANG DINILAI</td>';
$html .= '</tr>';

$html .= '<tr>';
$html .= '<td align="left" style="padding: 2px 5px;" width="30%">a. Nama</td>';
$html .= '<td align="center" width="5%"> : </td>';
$html .= '<td style="padding: 2px 5px;">Duwi Haryanto, S.Kom</td>';
$html .= '</tr>';

$html .= '<tr>';
$html .= '<td align="left" style="padding: 2px 5px;">c. Pangkat/Golongan ruang</td>';
$html .= '<td align="center" width="5%"> : </td>';
$html .= '<td style="padding: 2px 5px;"></td>';
$html .= '</tr>';

$html .= '<tr>';
$html .= '<td align="left" style="padding: 2px 5px;">d. Jabatan/Pekerjaan</td>';
$html .= '<td align="center" width="5%"> : </td>';
$html .= '<td style="padding: 2px 5px;">Staff Kontrak</td>';
$html .= '</tr>';

$html .= '<tr>';
$html .= '<td align="left" style="padding: 2px 5px;">e. Unit Organisasi</td>';
$html .= '<td align="center" width="5%"> : </td>';
$html .= '<td style="padding: 2px 5px;">BP3SI</td>';
$html .= '</tr>';


/* NOMOR 2 */
$html .= '<tr>';
$html .= '<td rowspan="5" align="center" width="5%" style="padding: 2px 5px; vertical-align: top;">2.</td>';
$html .= '<td colspan="3" align="left" style="padding: 2px 5px;">PEJABAT PENILAI</td>';
$html .= '</tr>';

$html .= '<tr>';
$html .= '<td align="left" style="padding: 2px 5px;" width="30%">a. Nama</td>';
$html .= '<td align="center" width="5%"> : </td>';
$html .= '<td style="padding: 2px 5px;">Duwi Haryanto, S.Kom</td>';
$html .= '</tr>';

$html .= '<tr>';
$html .= '<td align="left" style="padding: 2px 5px;">c. Pangkat/Golongan ruang</td>';
$html .= '<td align="center" width="5%"> : </td>';
$html .= '<td style="padding: 2px 5px;"></td>';
$html .= '</tr>';

$html .= '<tr>';
$html .= '<td align="left" style="padding: 2px 5px;">d. Jabatan/Pekerjaan</td>';
$html .= '<td align="center" width="5%"> : </td>';
$html .= '<td style="padding: 2px 5px;">Staff Kontrak</td>';
$html .= '</tr>';

$html .= '<tr>';
$html .= '<td align="left" style="padding: 2px 5px;">e. Unit Organisasi</td>';
$html .= '<td align="center" width="5%"> : </td>';
$html .= '<td style="padding: 2px 5px;">BP3SI</td>';
$html .= '</tr>';



/* NOMOR 3 */
$html .= '<tr>';
$html .= '<td rowspan="5" align="center" width="5%" style="padding: 2px 5px; vertical-align: top;">3.</td>';
$html .= '<td colspan="3" align="left" style="padding: 2px 5px;">PEJABAT PENILAI</td>';
$html .= '</tr>';

$html .= '<tr>';
$html .= '<td align="left" style="padding: 2px 5px;" width="30%">a. Nama</td>';
$html .= '<td align="center" width="5%"> : </td>';
$html .= '<td style="padding: 2px 5px;">Duwi Haryanto, S.Kom</td>';
$html .= '</tr>';

$html .= '<tr>';
$html .= '<td align="left" style="padding: 2px 5px;">c. Pangkat/Golongan ruang</td>';
$html .= '<td align="center" width="5%"> : </td>';
$html .= '<td style="padding: 2px 5px;"></td>';
$html .= '</tr>';

$html .= '<tr>';
$html .= '<td align="left" style="padding: 2px 5px;">d. Jabatan/Pekerjaan</td>';
$html .= '<td align="center" width="5%"> : </td>';
$html .= '<td style="padding: 2px 5px;">Staff Kontrak</td>';
$html .= '</tr>';

$html .= '<tr>';
$html .= '<td align="left" style="padding: 2px 5px;">e. Unit Organisasi</td>';
$html .= '<td align="center" width="5%"> : </td>';
$html .= '<td style="padding: 2px 5px;">BP3SI</td>';
$html .= '</tr>';


$html .= '</table>';


$html .= '</td>';
$html .= '</tr>';
$html .= '</table>';

$html .= '</body>';
$html .= '</html>';

$mpdf = new mPDF('c', 'A4-L', '', '', 5, 5, 10, 10, 10, 10);
$mpdf->SetProtection(array('print'));
$mpdf->SetDisplayMode('fullpage');
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
?>