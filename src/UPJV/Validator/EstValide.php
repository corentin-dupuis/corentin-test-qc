<?php

/**
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
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
