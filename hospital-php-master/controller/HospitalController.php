<?php

require(ROOT . "model/ClientModel.php");
require(ROOT . "model/PatientModel.php");
require(ROOT . "model/SpeciesModel.php");

function index()
{
    $PatientsInfo = joinAllPatients();

    render("hospital/index", array(
        'directory' => "hospital",	
        'patients' => $PatientsInfo)
    );
}
