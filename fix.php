<?php
$fix = array(
    "«", 
    "»",
    "\"", 
    "'",  
    "(", 
    ")", 
    "{",
    "}",
    "=",
    "*",
    "[",
    "]",
    "/",
);
$fix2 = array(
    "&#34;", 
    "&#34;",
    "&#34;",
    "&#39;", 
    null,
    null,
    null,
    null,
    null,
    null,
    null,
    null,
    null
); 
return str_replace($fix, $fix2, $input);
