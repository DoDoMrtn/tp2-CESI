<?php

namespace App\Exceptions;

use Exception;

class ProduitDejaExistanteException extends Exception
{
    private $messageDetails;

    public function __construct($message, $messageDetails = null)
    {
        parent::__construct($message);
        $this->messageDetails = $messageDetails;
    }

    public function getMessageDetails()
    {
        return $this->messageDetails;
    }
}