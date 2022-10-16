<?php
namespace CloudStorage;
include './autoloader.php';

use CloudStorage\FileSystem\Images\jpeg;
use CloudStorage\FileSystem\Scanner;
use \CloudStorage\Mail\Mailer;



class Main{
    function __construct(){
        $mailer = new Mailer;
        $mailer->sendMail();
        $scanner = new Scanner;
        $scanner->scan();
        $jpeg = new jpeg;
        $jpeg->getDimension();
    }
}
new Main;