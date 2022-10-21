<?php

class Pegawai
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;

    }
}
class Manager extends Pegawai
{
    public $tunjangan;
    public function __construct($name, $tunjangan)
    {
        parent::__construct($name);
        $this->tunjangan = $tunjangan;
    }
    public function getTunjangan()
    {
        return $this->tunjangan;
    }
}
class Kurir extends Pegawai
{
    public $gaji;
    public function __construct($name, $gaji)
    {
        parent::__construct($name);
        $this->gaji = $gaji;
    }
    public function getGaji()
    {
        return $this->gaji;
    }
}
class SoalNo1
{
    public static
    function Proses($peg)
    {
        if ($peg instanceof Manager)
        {
            $man = $peg;
            echo "<br>Nama Manager: ".$man->name, "\n";
            echo "<br>Tunjangan: RP. ".strval($man->tunjangan), "\n";
        }
        else if ($peg instanceof Kurir)
        {
            $kur = $peg;
            echo "<br>Nama Kurir: ".$kur->name, "\n";
            echo "<br>Gaji= RP. ".strval($kur->gaji), "\n";
        }
    }
    public static
    function main($args)
    {
        echo "21091397067 Ariel Fikri Ramadhani", "\n";
        echo "<br>", "<br>";
        $peg1 = new Manager("Ariel", 20000000);
        SoalNo1::Proses($peg1);
        echo "<br>", "<br>";
        $peg2 = new Kurir("Fikri", 15000000);
        SoalNo1::Proses($peg2);
    }
}
SoalNo1::main(array());
?>
