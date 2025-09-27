<?php 
class Car {
    public $Tanki = 0;

    public function IsiBensin($liter) {
        $this->Tanki += $liter;
        return $this;
    }
    public function Mengendarai ($jarak){
        $this->Tanki -= $jarak / 80;
        if ($this->Tanki == 0) {
            $this->Tanki = "Hoki 100 Tahun sekali ke pake, pas sampe langsung habis";
        }
        elseif ($this->Tanki < 0) {
            $this->Tanki = "Mogok Bre, ngutang tadi di POM";
        }
        elseif ($this->Tanki > 0) {
            $this->Tanki = $this->Tanki . " Liter";
        }
        return $this;
    }
    }

class Motor {
    public $Tanki = 0 ;
    public function IsiBensin($liter) {
        $this->Tanki += $liter;
        return $this;
    }
    public function Mengendarai ($jarak){
        $this->Tanki -= $jarak / 50;
        if ($this->Tanki == 0) {
            $this->Tanki = "Hoki 100 Tahun sekali ke pake, pas sampe langsung habis";
        }
        elseif ($this->Tanki < 0) {
            $this->Tanki = "Mogok Bre, ngutang tadi di POM";
        }
        elseif ($this->Tanki > 0) {
            $this->Tanki = $this->Tanki . " Liter";
        }
        return $this;
    }
}

$car1 = new Car();
$sisa = $car1->IsiBensin(15)->Mengendarai(400)->Tanki;
echo "Sisa Bensin Mobil: " . $sisa . "\n";

$motor = new Motor();
$sisa = $motor->IsiBensin(2)->Mengendarai(120)->Tanki;
echo "Sisa Bensin Motor: " . $sisa . "\n"

?>