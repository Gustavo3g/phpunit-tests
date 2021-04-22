<?php

namespace CodeExperts\Aritimetico;

class Subtracao {

    private $num1;
    private $num2;

    /**
     * @return mixed
     */
    public function getNum2()
    {
        return $this->num2;
    }

    /**
     * @return mixed
     */
    public function getNum1()
    {
        return $this->num1;
    }

    /**
     * @param mixed $num2
     */
    public function setNum2($num2): void
    {
        $this->num2 = $num2;
    }

    /**
     * @param mixed $num1
     */
    public function setNum1($num1): void
    {
        $this->num1 = $num1;
    }


    public function subtrair()
    {
        return $this->num1 - $this->num2;
    }
}