<?php

use App\Core\View\Tempate;
use App\Helpers\Pdf;

// somewhere early in your project's loading, require the Composer autoloader
// see: http://getcomposer.org/doc/00-intro.md
require '../vendor/autoload.php';

$data = array(
    'name'    => 'Natanael Acosta',
    'course'  => 'Laravel '
);



$html = Tempate::render('pdf/certificate', $data);
Pdf::render('certificate', $html);

