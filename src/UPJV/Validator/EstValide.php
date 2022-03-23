<?php
/**
 * PHP version 8.0.1
 * Création class EstValide
 * 
 * @category MyCategory
 * @package  Applies_To_ValidatorInterface
 * @author   Corentin <adressemail@gmail.com>
 * @license  https://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     http://example.com/my/bar
 */

namespace UPJV\Validator;

/**
 * Class EstValide implémente les méthode build & check
 */
class EstValide implements ValidatorInterface
{ 
    /**
     * Regarde si le mot est une chaine de caractère
     * 
     * @param array $param
     * 
     * @return objet
     */  
    public function build(array $param): object
    {
        return $this;
    }

     /**
      * Test la longueur de la chaine de caractères
      *
      * @param $input
      * 
      * @return function
      */  
    public function check($input): bool
    {
        return true;
    }
}
