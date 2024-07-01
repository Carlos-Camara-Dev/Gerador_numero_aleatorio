<?php
class random
{
    private int $number_max;
    private int $number_min;
    private int $decimal_places;

    public function __construct(int $max, int $min, int $house_s)
    {
        $this->number_max_set($max);
        $this->number_min_set($min);
        $this->number_max_set($house_s);
    }
    public function number_max_get(int $max)
    {
        return $this->$max;
    }
    public function number_min_get(int $min)
    {
        return $this->$min;
    }
    public function decimal_places_get(int $decimal_places)
    {
        $this->$decimal_places = $decimal_places;
    }
    private function number_max_set(int $max)
    {
        $this->$max = $max;
    }
    private function number_min_set(int $min)
    {
        $this->$min = $min;
    }
    private function decimal_places(int $decimal_places)
    {
        $this->$decimal_places = $decimal_places;
    }
    public function decimal_random(int $min, int $max, int $decimal_places)
    {
        $number_random = mt_rand($min, $max);
        for ($i = 0; $i < $decimal_places; $i++) {
            $decimal = mt_rand($min, $max);
            $decimal = $decimal . "," . $number_random;
        }
        return $number_random;
    }
    public function number_random(int $min, int $max)
    {
        return  mt_rand($min, $max);
    }
    // public function number_random_virgula(int $min, int $max, int $house)
    // {
    //     return  random_float($min, $max, $house);
    // }
}