<?php

function start_page($title)
{
        echo ' <!DOCTYPE html> <html
        lang="fr"><head><title>' . PHP_EOL . $title . '</title></head>
        <body>
          <link href= " css/bootstrap.min.css" rel = "stylesheet">
        
        
        ' . PHP_EOL;


    echo flash();

}



function end_page() { echo '</body>'; echo '</html>'; }


