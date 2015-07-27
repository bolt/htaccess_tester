<?php


echo "<h1>Bolt Apache <tt>.htaccess</tt> tester.</h1>";

#htaccess tester, version 1.0

if (!is_readable(__DIR__.'/.htaccess') ) {

    echo "<p>The file .htaccess exists and is readable to the webserver. These are its contents: </p>\n<textarea style='width: 700px; height: 200px;'>";
    echo file_get_contents(__DIR__.'/.htaccess');
    echo "</textarea>";

} else {

    echo "<p><strong>Error:</strong> The file .htaccess does not exist or it is not readable to the webserver. <br><br>Retieve a new version of the file here, and place it in your webroot. Make sure it is readable to the webserver.</p>";
    die();

}



echo "<h1>PHPinfo</h1>";

echo "<p>Below you'll find the specifics of your PHP installation, for debugging purposes.</p>";

phpinfo();