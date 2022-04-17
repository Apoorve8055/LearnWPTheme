<?php

//Incuding Stylesheet and script files

function load_scripts(){
    wp_enqueue_script("bootstrap-js"
    ,"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    ,array()
    ,"5.1.3"
    ,true);

    wp_enqueue_style("bootstrap-css"
    ,"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    ,array()
    ,"5.1.3"
    ,"all");

    wp_enqueue_style("template"
    ,get_template_directory_uri()."/assets/css/template.css"
    ,array()
    ,"1.0"
    ,"all");
};

add_action("wp_enqueue_scripts", "load_scripts");