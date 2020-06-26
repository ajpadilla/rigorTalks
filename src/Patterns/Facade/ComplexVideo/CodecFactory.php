<?php

namespace RigorTalks\Patterns\Facade\ComplexVideo;

class CodecFactory
{
    public static function extract(VideoFile $file){

        $type = $file->getCodecType();
        if (strcmp($type, "mp4") === 0) {
            print_r("CodecFactory: extracting mpeg audio...");
            return new MPEG4CompressionCodec();
        }
        else {

            print_r("CodecFactory: extracting ogg audio...");
            return new OggCompressionCodec();
        }
    }
}