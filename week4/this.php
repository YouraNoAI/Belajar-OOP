<?php 
class Car {
    public $Tanki = 0;

    public function IsiBensin($liter) {
        $this->Tanki += $liter;
    }

    public function Mengendarai ($jarak){
        $this->Tanki -= $jarak / 80;
        if ($this->Tanki < 0) {
            $this->Tanki = "Mogok Bre";
        }
        if ($this->Tanki > 0) {
            $this->Tanki = $this->Tanki;
        }
    }
}

$car = new Car();
$car->IsiBensin(10);
$car->Mengendarai(1000);
echo "Sisa Bensin : " . $car->Tanki . "";

?>