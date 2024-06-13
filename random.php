<?php
class random
{
    private int $number_max;
    private int $number_min;
    private int $decimal_places;
    public function __construct(int $max, int $min, int $decimal_places)
    {
        $this->number_max_set($max);
        $this->number_min_set($min);
        $this->decimal_places_set($decimal_places);
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
        return $this->$decimal_places;
    }
    private function number_max_set(int $max)
    {
        $this->$max = $max;
    }
    private function number_min_set(int $min)
    {
        $this->$min = $min;
    }
    private function decimal_places_set(int $decimal_places)
    {
        $this->$decimal_places = $decimal_places;
    }
    public function random_public(int $min, int $max, int $decimal_places)
    {
        $$decinumber_randommal = mt_rand($min, $Max);
        for ($i = 0; $i < $decimal_places; $i++) {
            $decimal = mt_rand($min, $max);
            $decimal = $decimal . "," . $number_random;
        }
        return $number_random;
    }
}