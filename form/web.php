<?php
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\FullName;

$home=new Home();

if (isset($_GET['page']))
{
    if ($_GET['page']=='home')
    {
        $home->index();
    }

    elseif ($_GET['page']=='form')
    {
        $home->form();
    }
}

elseif (isset($_POST['full_name_btn']))
{
    $fullName=new FullName($_POST);
    $fullName->makeFullName();
}


