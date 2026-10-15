<?php

// Tested media formats: mp4
// Tested audio formats: aac
// Tested image formats: jpg, jpeg, png, svg

return [
    // Feel free to edit this
    'media_path' => __DIR__ . '/Media',

    // I do not recommend editing this
    'allowed_video' => ['mp4', 'webm'],
    'allowed_images' => ['jpg', 'jpeg', 'png', 'svg'],

    // Enter the desired theme here
    // Leave empty for default
    'theme' => 'sunset',

    // List of available themes
    // These are just the ones I made but you can make your own
    'themes' => [
        'sunset' => '/themes/sunset.css',
        'pomegranate' => '/themes/pomegranate.css',
        'royal' => '/themes/royal.css',
        'noise' => '/themes/noise.css',
    ]
];?>
