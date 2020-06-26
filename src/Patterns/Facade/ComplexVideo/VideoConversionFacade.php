<?php

namespace RigorTalks\Patterns\Facade\ComplexVideo;

class VideoConversionFacade
{
    public function convertVideo(string $fileName, string $format)
    {
        print_r("VideoConversionFacade: conversion started.");

        $file = new VideoFile($fileName);
        $sourceCodec = CodecFactory::extract($file);
        $destinationCodec = null;

        if ($format == "mp4") {
            $destinationCodec = new OggCompressionCodec();
        } else {
            $destinationCodec = new MPEG4CompressionCodec();
        }
        $buffer = BitrateReader::read($file, $sourceCodec);
        $intermediateResult = BitrateReader::convert($buffer, $destinationCodec);
        $result = (new AudioMixer())->fix($intermediateResult);
        print_r("VideoConversionFacade: conversion completed.");
        return $result;
    }
}