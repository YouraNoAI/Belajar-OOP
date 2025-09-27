<?php 
class Car {
    public $Tanki = 0;

    public function IsiBensin($liter) {
        $this->Tanki += $liter;
    }

    public function Mengendarai ($jarak){
        $this->Tanki -= $jarak / 10;
    }
}

$car = new Car();
$car->IsiBensin(100);
$car->Mengendarai(100);
echo "Isi tanki: " . $car->Tanki . " liter";

?>