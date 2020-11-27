<?php

namespace App\Services;
use chillerlan\QRCode\{QRCode,QROptions};
class QRCodeService {

    public function generate($data){

        $options = new QROptions([
            'version'      => 1,
            'outputType'   => \chillerlan\QRCode\QRCode::OUTPUT_IMAGE_PNG,
            'eccLevel'     => \chillerlan\QRCode\QRCode::ECC_L,
        ]);

        return  (new QRCode($options))->render($data);
    }

}
