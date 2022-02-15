<?php
namespace App;

class Math{
    private float $firstNumber;
    private float $secondNumber;

    public function __construct(float $firstNumber, float $secondNumber)
    {
        $this->firstNumber = $firstNumber;
        $this->secondNumber = $secondNumber;
    }

    public function sum()
    {
        return $this->firstNumber + $this->secondNumber;
    }

    public function subtraction()
    {
        return $this->firstNumber - $this->secondNumber;

    }

    public function multiplication()
    {
        return $this->firstNumber * $this->secondNumber;

    }

    public function division()
    {
        return $this->firstNumber / $this->secondNumber;

    }
}