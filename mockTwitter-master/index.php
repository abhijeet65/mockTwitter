<?php

    include("functions.php");

    include("views/header.php");

    $p = (isset($_GET['page']) ? $_GET['page'] : '');

    if ($p == 'timeline') {
        
        include("views/timeline.php");
        
    } else if ($p == 'yourtweets') {
        
        include("views/yourtweets.php");
        
    } else if ($p == 'search') {
        
        include("views/search.php");
        
    } else if ($p == 'publicprofiles') {
        
        include("views/publicprofiles.php");
        
    } else {

        include("views/home.php");
        
    }
        
    include("views/footer.php");


?>