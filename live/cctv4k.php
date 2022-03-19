<?php
    // c4k 切片版
    $seq = intval((time()-1800)/4)+18;
    $content = "#EXTM3U\n#EXT-X-VERSION:3\n#EXT-X-TARGETDURATION:5\n#EXT-X-MEDIA-SEQUENCE:$seq\n";
    for($i=0;$i<3;$i++)
    {
        $content .= "#EXTINF:4.000,\n";
        $content .= "http://livews-tp4k.cctv.cn/live/4K0219.stream/1-".$seq.".ts\n";
        $seq = $seq + 1;
    }
    header("Content-Disposition: attachment; filename=playlist.m3u8");
    echo $content;

?>