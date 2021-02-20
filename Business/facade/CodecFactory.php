<?php

class CodecFactory
{

    public function extract(VideoFile $file)
    {
        return "Extraer de " . $file->getFileName();
    }
}
