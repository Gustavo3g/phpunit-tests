<?php


namespace CodeExperts\Aritimetico;


class Soma
{
    public $num1;
    public $num2;

    /**
     * @return mixed
     */
    public function getNum1()
    {
        return $this->num1;
    }

    /**
     * @return mixed
     */
    public function getNum2()
    {
        return $this->num2;
    }

    /**
     * @param mixed $num1
     */
    public function setNum1($num1): void
    {
        $this->num1 = $num1;
    }

    /**
     * @param mixed $num2
     */
    public function setNum2($num2): void
    {
        $this->num2 = $num2;
    }

    public function somar(){
        return $this->num1 + $this->num2;
    }

}