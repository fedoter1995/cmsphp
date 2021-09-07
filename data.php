<?php
$best_moments = [
            [
                "name" => "First video",
                "url"  => "https://www.youtube.com/embed/xp12eIWU9K0",
                
            ],
            [
                "name" => "Second video",
                "url" => "https://www.youtube.com/embed/I4rUSs2dZYg",

            ],
            [

                "name" => "Third video",
                "url" => "https://www.youtube.com/embed/XFVQm-q6gWE",
        
            ],
];

$my_clinic = [
    [
        "title" => "Modern equipment",
        "img"  => "img/medical-equipment.png",
        
    ],
    [
        "title" => "Polite staff",
        "img" => "img/staff.png",

    ],
    [

        "title" => "Top Specialists",
        "img" => "img/medical-teams.png",

    ],
];

$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];


$navMenu = [
    [
        "name" => "About me",
        "url"  => $url . "#about-me",
        
    ],
    [
        "name" => "My clinic",
        "url" => $url . "#my-clinic",
        

    ],
    [

        "name" => "Best moments",
        "url" => $url . "#best-moments",

    ],
    [

        "name" => "Price",
        "url" => $url . "\indexpage\price#price",

    ],
    [

        "name" => "Rewiews",
        "url" => $url . "#rewiews",

    ],
    [

        "name" => "Contacts",
        "url" => $url . "\indexpage\contacts#contacts",

    ],
];

$sing_in_btn = [
        
        "url" => $url . "/templates/loginform.php",
    
];