<?php

class Pilihan
{
    public function volumeKubus($SISI)
    {
        echo 'Volume Kubus : ' . $SISI * $SISI * $SISI;
    }

    public function luasPermukaanKubus($SISI)
    {
        echo 'Luas Permukaan Kubus : ' . (6 * ($SISI * $SISI));
    }

    public function kelilingKubus($SISI)
    {
        echo 'Keliling Kubus: ' . 12 * $SISI;
    }

    public function noChoice()
    {
        echo 'Anda tidak memilih.';
    }

    public function tendensiSentralUntuk($tendensiSentral, $SISI)
    {
        switch ($tendensiSentral) {
            case 'volumeKubus':
                $this->volumeKubus($SISI);
            case 'luasPermukaanKubus':
                $this->luasPermukaanKubus($SISI);
            case 'kelilingKubus':
                $this->kelilingKubus($SISI);
            default:
            $this->noChoice($SISI);
        }
    }
}

$SISI = 15;
$tendensiSentral = new Pilihan;
$tendensiSentral->tendensiSentralUntuk('volumeKubus', $SISI);
$tendensiSentral->tendensiSentralUntuk('luasPermukaanKubus', $SISI);
$tendensiSentral->tendensiSentralUntuk('kelilingKubus', $SISI);