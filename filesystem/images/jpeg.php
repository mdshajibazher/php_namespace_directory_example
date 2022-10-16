<?php
namespace CloudStorage\FileSystem\Images;

class jpeg implements \CloudStorage\FileSystem\Files\Contracts\ImageContracts{
    function getDimension()
    {
        echo "Dimension is  250x500";
    }
}