<?php
switch ($action)
{
    case 'reponse':
        {
            //var_dump($_REQUEST['liste']);
            $liste=$_REQUEST['liste'];
           
            include 'views/reponse.php';
            break;
        }
    default:
        {include 'views/choix.php';}


}