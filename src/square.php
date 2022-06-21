<?php

namespace shapes;

class square
{
    public $side_length;

    /**
     * @param $side_length
     */
    public function __construct($side_length)
    {
        $this->side_length = $side_length;
    }


    public function get_area(){
        return
            $this->side_length ** 2;
    }

    public function get_perimeter() {
        return
            $this->side_length * 4;
    }

    public function get_diagonal() {
        return
            $this->side_length * sqrt(2);
    }
}