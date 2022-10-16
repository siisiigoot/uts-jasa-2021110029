<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index () {

        $carousels = [
            [
            "url" => "https://bicyclefix.ae/wp-content/uploads/2020/03/home-banner.jpg",
            "caption" => "BEST BICYCLE REPAIR & MAINTENANCE SOLUTION - AT YOUR DOOR STEPS"
            ],
            [
            "url" => "https://keyassets.timeincuk.net/inspirewp/live/wp-content/uploads/sites/11/2016/07/Bruni-custom-bike.png",
            "caption" => "THE PRICE IS CHEAPER THAN OTHER WORKSHOPS AND CAN BE PAYLATER"
            ],
            [
            "url" => "https://hips.hearstapps.com/hmg-prod/images/joel-working-0065-1579013157.jpg?crop=1.00xw:0.849xh;0,0.0168xh&resize=2048:*",
            "caption" => "COMPLETE TOOLS AND RELIABLE MECHANICS"
            ]
        ];

        $clients = [
            [
            "url" => "https://upload.wikimedia.org/wikipedia/commons/5/53/Specialized_red_S_black_logotype.png"
            ],
            [
            "url" => "https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/Polygon_Bikes_logo.svg/640px-Polygon_Bikes_logo.svg.png"
            ],
            [
            "url" => "https://seeklogo.com/images/R/rockshox-logo-B2B97F080D-seeklogo.com.png"
            ],
            [
            "url" => "https://www.seekpng.com/png/full/6-67532_fox-logo-png-mountain-bike-fox-suspension-logo.png"
            ],
            [
            "url" => "https://logos-download.com/wp-content/uploads/2016/10/Wonderful_Indonesia_logo-700x291.png"
            ],
            [
            "url" => "https://learn.likmi.ac.id/pluginfile.php/1/theme_moove/logo/1661484802/logo%20panjang%20formal-01-fix100.png"
            ],
            [
            "url" => "https://www.static-src.com/wcsstore/Indraprastha/images/catalog/mlogo/ROI-60042.png"
            ],
            [
            "url" => "https://cosmicsports.com/wp-content/uploads/pim/brand_header_logo_image/header_logo_color_tl_tld.png"
            ]
        ];
        return view('index', [
        "title" => "Home",
        "active" => 'home'
        ], compact('carousels','clients'));
    }
}
