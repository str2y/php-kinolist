<?php

class Validation
{
    public $vals = [];

    public static function validate($rules, $data)
    {
        $val = new self;

        foreach ($rules as $field => $fieldRules) {

            foreach ($fieldRules as $rules) {

                $fieldValue = $data[$field];

                if ($rules == 'confirmed') {

                    $val->$rules($field, $fieldValue, $data["{$field}_confirmation"]);

                } elseif (strpos($rules, ':') == true) {

                    $temp = explode(':', $rules);
                    $rules = $temp[0];
                    $rulesArg = $temp[1];
                    $val->$rules($rulesArg, $field, $fieldValue);

                } else {

                    $val->$rules($field, $fieldValue);

                }
            }
        }
        return $val;
    }

    private function unique($table, $field, $value){
        if(strlen($value)==0){
            return ;
        }

        $db = new Database(config('database'));
        $result = $db->query("
        select * from $table where $field = :value
        ",
        null,
        ['value'=>$value])
        ->fetch();

        if($result){
            $this->vals[] = "This $field is already in use.";
        }
    }

    private function required($field, $value)
    {
        if (strlen($value) == 0) {
            $this->vals[] = "The $field is required.";
        }
    }

    private function email($field, $value)
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->vals[] = "This $field is invalid.";
        }
    }

    private function min($min, $field, $value)
    {
        if (strlen($value) < $min) {
            $this->vals[] = "The $field needs at least $min characters.";
        }
    }

    private function max($max, $field, $value)
    {
        if (strlen($value) > $max) {
            $this->vals[] = "The $field needs at most $max characters.";
        }
    }

    private function strong($field, $value)
    {
        if (strpbrk($value, '!@#$%¨&*()_+-=?/|;.,[]´~`^') == false) {
            $this->vals[] = "This $field needs at least one special character";
        }
    }

    public function didntPass($customName = null)
    {
        $key = 'vals';
        if($customName){
            $key .= '_'. $customName;
        }
        flash()->push($key, $this->vals);
        return sizeof($this->vals) > 0;
    }
}
