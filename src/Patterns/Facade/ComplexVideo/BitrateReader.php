<?php

namespace RigorTalks\Patterns\Facade\ComplexVideo;

class BitrateReader
{
    public static function read(VideoFile $file, Codec $codec) {
        print_r("BitrateReader: reading file...");
        return $file;
    }

    public static function convert(VideoFile $buffer, Codec $codec) {
        print_r("BitrateReader: writing file...");
        return $buffer;
    }
}