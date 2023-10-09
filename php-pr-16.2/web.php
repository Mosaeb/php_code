<?php
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\Information;

$home= new Home();

if (isset($_GET['page']))
{
    if ($_GET['page']=='about')
    {
        $home->about();
    }
    elseif ($_GET['page']=='home')
    {
        $home->index();
    }
    elseif ($_GET['page']=='form')
    {
        $home->form();
    }
    elseif ($_GET['page']=='detail')
    {
        $home->deatail($_GET['id']);
    }

}
elseif (isset($_POST['print_information']))
{
    $printInformation=new Information($_POST);
    $printInformation->makePrintInformation();


}

