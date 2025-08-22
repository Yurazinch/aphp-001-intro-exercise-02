<?php

class Tv 
{

    public $brand, $model, $screen_diagonal, $screen_resolution, $backlight_type, $garanty, $frame_rate, $width, $height, $price;

    public function __construct($brand, $model, $screen_diagonal, $screen_resolution, $backlight_type, $garanty, $frame_rate, $width, $height, $price) {
        $this->brand = $brand;
        $this->model = $model;
        $this->screen_diagonal = $screen_diagonal;
        $this->screen_resolution = $screen_resolution;
        $this->backlight_type = $backlight_type;
        $this->garanty = $garanty;
        $this->frame_rate = $frame_rate;
        $this->width = $width;
        $this->height = $height;
        $this->price = $price;
        $this->is_qhd = null;
    }

    static $SCREEN_RESOLUTION = '2560x1440';

    private function setQhd() {
        if($this->screen_resolution > $SCREEN_RESOLUTION) {
            $this->is_qhd = true;
        } else {
            $this->is_qhd = false;
        }
    }
}