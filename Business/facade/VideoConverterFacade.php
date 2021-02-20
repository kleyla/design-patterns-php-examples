<?php
require_once("Business/facade/VideoFile.php");
require_once("Business/facade/CodecFactory.php");
require_once("Business/facade/MPEG4CompressionCodec.php");
require_once("Business/facade/OggCompressionCodec.php");
require_once("Business/facade/BitrateReader.php");
require_once("Business/facade/AudioMixer.php");
require_once("Business/facade/File.php");

class VideoConverterFacade
{

    public function converter($filename, $format)
    {
        $file = new VideoFile($filename);
        // extraemos los codecs del video
        $sourceCodec = (new CodecFactory())->extract($file);
        if ($format == "mp4") {
            $destinationCodec = new MPEG4CompressionCodec();
        } else {
            $destinationCodec = new OggCompressionCodec();
        }

        $buffer = (new BitrateReader())->read($filename, $sourceCodec);
        $result = (new BitrateReader())->convert($buffer, $destinationCodec);
        $result = (new AudioMixer())->fix($result);
        return new File($result);
    }
}
