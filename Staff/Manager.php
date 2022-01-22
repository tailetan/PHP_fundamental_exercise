<?php

namespace Staff;

class Manager extends Staff implements IManage
{


    public function __construct(string $firstName, string $lastName,
    string $age, string $department,
         $listEmployee=array('d','ds'))
    {
        parent::__construct($firstName, $lastName, $age, $department);
        $this->listEmployee = $listEmployee;
    }

    public function timeKeeping()
    {
        print("Checked in.\n");
        print("Checked out.\n");

    }

    public function getListEmployee()
    {
        return $this->listEmployee;
    }

}

