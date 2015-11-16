<?php

class Validator
{

    private $data;
    private $errors = [];

    public function __construct($data)
    {
        $this->data = $data;
            $this->getField('login');
            $this->getField('password');

    }

    private function getField($field)
    {
        if (!isset($this->data[$field]) || strlen($this->data[$field]) < 1) {
            $this->errors['ERROR_EMPTY_FIELD'] = "Champs vide";
            throw new ErrorException("Champs vides");
            return null;
        }
        return $this->data[$field];
    }

    public function isEmail($field, $errorMsg = false)
    {
        if (!filter_var($this->getField($field), FILTER_VALIDATE_EMAIL)) {
            $this->errors[$field] = $errorMsg;
           // throw new ErrorException("Email incorrect");
            return false;
        }
        return true;
    }

    public function isValid()
    {
        return empty($this->errors);
    }

    public function getErrors()
    {
        return $this->errors;
    }

}