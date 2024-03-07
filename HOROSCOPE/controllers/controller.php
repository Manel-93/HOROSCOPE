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
        case 'connexion': 
            {
                $login=$_REQUEST['login'];//otoi
                $mdp=$_REQUEST['password'];//147
                 //1234
                if($connexion[$login]==$mdp)
                {
                    include 'views/choix.php';
                }else  {include 'views/connexion.php';}
                break; 
            }
        case 'modifier':
            {
                include 'views/admin.php';
                break;
            }
    default:
        {include 'views/connexion.php';}


}