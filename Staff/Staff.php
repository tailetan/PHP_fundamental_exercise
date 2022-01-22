<?php 

namespace Staff;

abstract class Staff
{
    protected string $firstName;
    protected string $lastName;
    protected string $age;
    protected string $department;


    public function __construct(string $firstName, string $lastName,
        string $age, string $department)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->department = $department;
    
    }
    public function getInfo()
    {
        return [
            'first name' => $this->firstName,
            'last name' => $this->lastName,
            'age' => $this->age,
            'department' => $this->department,
            
        ];
    }

    public abstract function timeKeeping(); // chấm công
}