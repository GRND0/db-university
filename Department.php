<?php
class Department
{
    public $id;
    public $name;
    public $adress;
    public $phone;
    public $email;
    public $website;
    public $head_of_department;


    function __construct($_id, $_name)
    {
        $this->id = $_id;
        $this->name = $_name;
    }

    public function stampaInformazioni($_adress, $_phone, $_email, $_website, $_head_of_department)
    {
        $this->adress = $_adress;
        $this->phone = $_phone;
        $this->email = $_email;
        $this->website = $_website;
        $this->head_of_dep = $_head_of_department;
    }

    public function stampaContatti()
    {
        return [
            "indirizzo" => $this->adress,
            "telefono" => $this->phone,
            "email" => $this->email,
            "website" => $this->website
        ];
    }
}
