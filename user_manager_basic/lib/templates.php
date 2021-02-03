<?php
function get_header(){
    $path_header = 'inc/header.php';
    if (file_exists($path_header)){
        require $path_header;
    }else{
        echo "NotFound {$path_header}";
    }
}

function get_footer(){
    $path_footer = 'inc/footer.php';
    if (file_exists($path_footer)){
        require $path_footer;
    }else{
        echo "NotFound {$path_footer}";
    }
}

function get_sidebar(){
    $path_sidebar = 'inc/sidebar.php';
    if (file_exists($path_sidebar)){
        require $path_sidebar;
    }else{
        echo "NotFound {$path_sidebar}";
    }
}
