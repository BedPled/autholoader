<?php

namespace shapes;

class circle
{
    public $radius;

    /**
     * @param $radius
     */
    public function __construct($radius)
    {
        $this->radius = $radius;
    }


    public function get_diametr() {
        return
            $this->radius * 2;
    }

    public function get_length() {
        return
            $this->get_diametr() * M_PI;
    }

    public function get_area() {
        return
            $this->radius * M_PI * M_PI;
    }
}