<?php

namespace Staff;

class Employee extends Staff
{
    protected string $salary;
    protected string $hireDate;

    public function __construct(string $firstName, string $lastName,
    string $age, string $department,
        string $salary, string $hireDate)
    {
        parent::__construct($firstName, $lastName, $age, $department);
        $this->salary = $salary;
        $this->hireDate = $hireDate;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function getHireDate()
    {
        return $this->hireDate;
    }

    public function timeKeeping()
    {
        print("Checked in.\n");
        print("Checked out.\n");
    }
}

