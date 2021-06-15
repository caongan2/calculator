<?php


namespace App;


class Calculator
{
    public function addition($number1, $number2)
    {
        return $number1 + $number2;
    }

    public function minus($number1, $number2)
    {
        return $number1 - $number2;
    }

    public function multiply($number1, $number2)
    {
        return $number1 * $number2;
    }

    public  function division($number1, $number2)
    {
        return $number1 / $number2;
    }

    public function calculator($operator, $number1, $number2)
    {
        $result = 0;
        switch ($operator) {
            case 'plus':
                $result = $this->addition($number1, $number2);
                break;
            case "minus":
                $result = $this->minus($number1, $number2);
                break;
            case "multiply":
                $result = $this->multiply($number1, $number2);
                break;
            case "division":
                try {
                    if ($number2 != 0) {
                        $result = $this->division($number1, $number2);
                    } else {
                        throw new \Exception("can not chia cho 0!!");
                    }
                } catch (\Exception $exception) {
                    echo $exception->getMessage();
                }
                break;
        }
        return $result;
    }
}