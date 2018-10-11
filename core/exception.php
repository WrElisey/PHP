<?php
class AppException extends Exception
{
    protected $textException;

    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        $this->textException=$message;
        parent::__construct($message, $code, $previous);
    }
}