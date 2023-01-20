<?php

namespace App\Exceptions;


class SweetTemplateException extends \Exception
{



    public function getSweetMessage()
    {
        return '[ >>> SweetTemplate Message: '. htmlentities($this->message). ' <<< ]';
    }

    public function getSwCode()
    {
        return'[ >>> SweetTemplate Code '.htmlentities($this->code). ' <<< ]';
    }


}