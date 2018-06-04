<?php

require(ROOT . "model/ClientModel.php");

function clients()
{
    render("hospital/clients",
        array('clients' => getAllClients() , ));
}

function createClient(){
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $data=array(
            'client_firstname' => $_POST['client_firstname'],
            'client_lastname' => $_POST['client_lastname']
        );
        newClient($data);
            echo "<script>alert('Cliënt toegevoegd'); window.location = '/hospital/';</script>";
    }
    render("hospital/clients/create");

function createNewClient(){
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $data=array(
            'client_firstname' => $_POST['client_firstname'],
            'client_lastname' => $_POST['client_lastname']
        );
        newClient($data);
            echo "<script>alert('Cliënt toegevoegd'); window.location = '". URL ."client/clients';</script>";
    }
    render("hospital/clients/createNew");
}

function deleteClient($id){
        $client = getClientsById($id);
    render("hospital/clients/delete", ['client' => $client]);
}
function deleteAClient($id){
    deleteThisClient($id);
echo "<script>alert('Cliënt verwijderd'); window.location = '/hospital/';</script>";
}

function removeClient($id){
        $client = getClientsById($id);
    render("hospital/clients/deleteClient", ['client' => $client]);
}
function removeAClient($id){
    deleteThisClient($id);
echo "<script>alert('Cliënt verwijderd'); window.location = '". URL ."client/clients';</script>";
}

function editClient($id){
        $client = getClientsById($id);
    render("hospital/clients/edit", ['client' => $client]);
}

function saveEdit(){
        update($_POST);
    echo "<script>alert('Cliënt is aangepast'); window.location = '/hospital/';</script>";
}
function changeClient($id){
        $client = getClientsById($id);
    render("hospital/clients/editClient", ['client' => $client]);
}

function changeEdit(){
        update($_POST);
    echo "<script>alert('Cliënt is aangepast'); window.location = '". URL ."client/clients';</script>";
}
