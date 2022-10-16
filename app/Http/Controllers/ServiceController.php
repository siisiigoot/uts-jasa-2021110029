<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function index () {
        $dataFilters = [
            [
            "filter" => "*",
            "caption" => "ALL"
            ],
            [
            "filter" => ".filter-fullsus",
            "caption" => "FULL SUSPENSION BIKE"
            ],
            [
            "filter" => ".filter-hardtrail",
            "caption" => "HARD TRAIL BIKE"
            ],
            [
            "filter" => ".filter-suspension",
            "caption" => "SUSPENSION SERVICE"
            ]
        ];

        $items = [
            [
            "class" => "filter-suspension",
            "img" => "http://content.bikeroar.com/system/content/000/086/816/original/coil_vs_air_mtb_forks_comparison.jpg?1387240240",
            "title" => "FORK",
            "group" => "FULL SUSPENSION BIKE"
            ],
            [
            "class" => "filter-suspension",
            "img" => "https://images.immediate.co.uk/production/volatile/sites/21/2021/04/Fox-Float-X-and-DHX-mountain-bike-rear-shocks-864a6ab.jpg?webp=true&quality=45&resize=1240%2C826",
            "title" => "REAR SHOCK",
            "group" => "FULL SUSPENSION BIKE"
            ],
            [
                "class" => "filter-suspension",
                "img" => "https://www.sefiles.net/images/library/large/fox-racing-shox-transfer-factory-dropper-seatpost-392697-1.png",
                "title" => "DROPPER SEATPOST",
                "group" => "SUSPENSION SERVICE"
            ],
            [
            "class" => "filter-hardtrail",
            "img" => "https://ilovebicycling.com/wp-content/uploads/2018/09/bike_tuneup_diagram_web.jpg",
            "title" => "BASIC TUNE UP",
            "group" => "HARD TRAIL BIKE"
            ],
            [
            "class" => "filter-fullsus",
            "img" => "https://i.pinimg.com/564x/35/48/9a/35489a8d7594f7624782f57c64949cc9.jpg",
            "title" => "BASIC TUNE UP",
            "group" => "FULL SUSPENSION BIKE"
            ],
            [
            "class" => "filter-fullsus",
            "img" => "https://lh5.googleusercontent.com/-CChwEtfvmF8XStz1Ok-taPj0myRQwvDBYbjYO7yX1O07GKrtCTGGSkczhvWwwJ-hncClFX-pFDB9onVri0IxU2Xp-j5jTh9Wk2p7tw8RWjOYVL7hQdPOVKnO-hNrNkZKg=w740",
            "title" => "ESSENTIAL TUNE UP",
            "group" => "FULL SUSPENSION BIKE"
            ]
        ];
    return view('service', [
        "title" => "Services",
        "active" => 'service'
        ], compact('dataFilters','items'));
    }
}
