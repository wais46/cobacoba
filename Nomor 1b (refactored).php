<?php

interface PilihanInterface
{
    public function tendensiSentral($SISI);
}

class VolumeKubus implements PilihanInterface
{
    public function tendensiSentral($SISI)
    {
        echo 'Volume Kubus : ' . $SISI * $SISI * $SISI;
    }
}

class LuasPermukaanKubus implements PilihanInterface
{
    public function tendensiSentral($SISI)
    {
        echo 'Luas Permukaan Kubus : ' . (6 * ($SISI * $SISI));
    }
}

class KelilingKubus implements PilihanInterface
{
    public function tendensiSentral($SISI)
    {
        echo 'Keliling Kubus: ' . 12 * $SISI;
    }
}

class NoTendensiSentral implements PilihanInterface
{
    public function tendensiSentral($SISI)
    {
        echo 'Anda tidak memilih.';
    }
}

class Pilihan
{
    public static function tendensiSentralUntuk($tendensiSentral)
    {
        switch ($tendensiSentral) {
            case 'luasPermukaanKubus':
                return new LuasPermukaanKubus;
            case 'volumeKubus':
                return new VolumeKubus;
            case "kelilingKubus":
                return new KelilingKubus;
            default:
                return new NoTendensiSentral;
        }
    }
}

$SISI = 15;
Pilihan::tendensiSentralUntuk('luasPermukaanKubus')->tendensiSentral($SISI);
echo '<br>';
Pilihan::tendensiSentralUntuk('volumeKubus')->tendensiSentral($SISI);
echo '<br>';
Pilihan::tendensiSentralUntuk('kelilingKubus')->tendensiSentral($SISI);