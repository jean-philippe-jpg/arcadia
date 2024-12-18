<?php
class AbusPrivilegeExcessif
{
    public static function main()
    {
        // Simulating a privileged operation
        self::runPrivilegedOperation();
    }
    
    private static function runPrivilegedOperation()
    {
        // Check si l'utilisateur a des privilèges élevés
        if (self::userHasElevatedPrivileges())
        {
            // Opération de privilège
            echo "Opération de privilège";
        }
        else
        {
            echo "Privilèges insuffisants.";
        }
    }
    
    private static function userHasElevatedPrivileges()
    {
        // Il faut alors définir les autorisations ou vérifier le rôle de l'utilisateur
        // Dans cet exemple, l'utilisateur a des privilèges élevés, il faut donc confirmer le niveau de privilège en fonction du rôle

        if(in_array('ROLE_ADMIN', $_SESSION['roles']))
        {

            echo "Vous avez des privilèges élevés";
            return true;
        }
        else
        {
            return false;
        }
        
    }
}

// Appel de la méthode main pour démarrer le programme


?>