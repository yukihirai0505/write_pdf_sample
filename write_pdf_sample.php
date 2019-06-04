<?php

require_once( __DIR__ . '/vendor/autoload.php' );

use setasign\Fpdi\Tcpdf\Fpdi;

$pdf = new FPDI();
$pdf->setSourceFile( 'sample.pdf' );
$pdf->SetFont( 'kozminproregular', '', 16 );
// $pdf->SetFont( 'kozminproregular', 'B', 16 );

$pdf->AddPage();
$pdf->useTemplate( $pdf->importPage( 1 ), 0, 0 );
$pdf->Text( 30, 30, 'こんにちは世界' );
$pdf->Text( 30, 40, 'Hello World!!!' );
$pdf->Text( 30, 50, 'ひらい　ゆうきですうううううう' );

$pdf->AddPage();
$pdf->useTemplate( $pdf->importPage( 2 ), 0, 0 );
$pdf->Output( __DIR__ . '/output.pdf', 'F' );

exec('open ./output.pdf');
