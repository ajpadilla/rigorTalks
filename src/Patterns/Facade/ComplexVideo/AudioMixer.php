<?php

namespace RigorTalks\Patterns\Facade\ComplexVideo;

class AudioMixer
{
    public function fix(VideoFile $result){
        print_r("AudioMixer: fixing audio...");
        return new File("tmp");
    }
}