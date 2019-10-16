<?php
#Device is localhost or webserver
$device="localhost";

#DB Info
$read="blog_user_read";
$write="blog_user_write";

    switch ($device) {
        case "localhost":
            $ip = "localhost";
            break;
        case "webserver":
            $ip = "123.456.789.0";
            break;
        default:

            break;
    }



?>