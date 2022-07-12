<?php
class Validation
{
    public function validate($params, $validation_rules)
    {
        try {

            $response = '';

            foreach ($validation_rules as $field => $rules) {
                foreach (explode('|', $rules) as $rule) {
                    if ($rule == 'required' && empty($params[$field])) {
                        $response .= "The " . $field . " is required.\n";
                    }
                    if (array_key_exists($field, $params) == true) {
                        if ($rule == 'alphanumeric' && preg_match('/^[a-z0-9 .\-]+$/i', $params[$field]) == false) {
                            $response .= "The value of " . $field . " is not a valid alphanumeric value.\n";
                        }

                        if ($rule == 'phone' && preg_match('/^[0-9 \-\(\)\+]+$/i', $params[$field]) == false) {
                            $response .= "The value of " . $field . " is not a valid phone number.\n";
                        }

                        if ($rule == 'email' && filter_var($params[$field], FILTER_VALIDATE_EMAIL) == false) {
                            $response .= "The value of " . $field . " is not a valid email value.\n";
                        }

                        if ($rule == 'password' && preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $params[$field]) == false) {
                            $response .= "The value of " . $field . " is not a valid.<br>password has to be at least one number,<br>one letter,<br>one spacial character<br>and there have to be 8-12 characters.\n";
                        }
                    }
                }
            }

            return $response;
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }
}
