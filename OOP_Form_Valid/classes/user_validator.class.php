<?php


// create a user validator class
// constructor wich takes in POST data from form
// check required fields are present in the data
// create methods to validate individual fields
// -- a username
// -- b email...
// return eror array when check is false

class UserValidator
{

    private $data;
    private $errors = [];
    private static $fields = ['username', 'email'];

    public function __construct($post_data)
    {
        $this->data = $post_data;
    }

    public function validateForm()
    {
        foreach (self::$fields as $field) {
            // check fo errors first
            if (!array_key_exists($field, $this->data)) 
            {
                trigger_error("$field is not present in data!");
                return;
            }
        }
        $this->validateUsername();
        $this->validateEmail();
        return $this->errors;
    }

    private function validateUsername()
    {
        $val = trim($this->data['username']);

        if (empty($val)) {
            $this->addError('username', 'Username can not be empty!');
        } else {
            if (!preg_match('/^[a-zA-Z0-9]{6,12}$/', $val)) {
                $this->addError('username', 'Username must be 6-12 chars & alphanumeric!');
            }
        }
    }

    private function validateEmail()
    {
        $val = trim($this->data['email']);

        if (empty($val)) {
            $this->addError('email', 'Email can not be empty!');
        } else {
            if (!filter_var($val, FILTER_VALIDATE_EMAIL)) {
                $this->addError('email', 'Email must be a valid emailadress!');
            }
        }
    }

    private function addError($key, $val)
    {
        $this->errors[$key] = $val;
    }
}
