<?php
 
use App\Employee;
use App\Personne;
// ce require a été généré par composer issue du fichier composer .json
/**
 *  psr-4       "App\\": "src/"
        
 */
require(__DIR__.'/vendor/setasign/fpdf/fpdf.php');
require "./vendor/autoload.php";

 //$p=new App\Personne("Yoel","Melki",34);
 
$p=new Personne("Yoel","Melki",34);

// $p->afficher();

// $e = new Employee();
 $pdf = new FPDF();
 $pdf->AddPage();
 $pdf->SetFont('Arial','B',16);
 $pdf->Cell(40,10, "test");
 $pdf->Output();

/**
 * composer.json issue de composer
 * => politique psr 4
 * => require de l'ensemble des librairies dépendantes de notre appli
 * composer install 
 * installer le dossier vendor avec les libraries et l'autochargement
 * => plus besoin de require plus besoin de gérer les libraries
 */
?>

