<?php

namespace learn\src;

use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;

class QrCodeTool
{

    public function create(string $path): void
    {
        $writer = new PngWriter();

        // Create QR code
        $qrCode = QrCode::create('Data')
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(300)
            ->setMargin(10)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));

        // Create generic logo
        // $logo = Logo::create(__DIR__.'/tests/symfony.png')
        //     ->setResizeToWidth(50);

        // Create generic label
        $label = Label::create('Label')
            ->setTextColor(new Color(255, 0, 0));

        $result = $writer->write($qrCode, null, $label);


        // Directly output the QR code
        header('Content-Type: ' . $result->getMimeType());
        // echo $result->getString();

        // Save it to a file
        $result->saveToFile($path . '/tests/qrcode.png');

        // Generate a data URI to include image data inline (i.e. inside an <img> tag)
        // $dataUri = $result->getDataUri();
        // var_dump(base64_decode($dataUri));

    }

}
