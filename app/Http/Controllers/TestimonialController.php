<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    //
        //
        public function index () {
            $testimonials = [
                [
                "url" => "https://bergstolz.de/images/no85/rider-loic/rider-loic-bruni-02.jpg",
                "name" => "Loic Bruni",
                "work" => "MTB Athlete",
                "caption" => "That is amazing",
                "delay" => "0"
                ],
                [
                "url" => "https://upload.wikimedia.org/wikipedia/commons/6/65/Irjen_Ferdy_Sambo_di_Mapolda_Jawa_Tengah.jpg",
                "name" => "Ferdi Sambo",
                "work" => "Traitor",
                "caption" => "It's Awesome",
                "delay" => "100"
                ],
                [
                "url" => "https://img.okezone.com/okz/500/library/images/2022/10/08/hgxdt5jm4jgxx9avolde_12531.jpg",
                "name" => "Ir. Joko Widodo",
                "work" => "President Indonesia",
                "caption" => "Yo ndak tau kok tanya saya",
                "delay" => "200"
                ],
                [
                "url" => "https://ep1.pinkbike.org/p5pb21246186/p5pb21246186.jpg",
                "name" => "Loris Vergier",
                "work" => "MTB Athlete",
                "caption" => "Best bike repair in the galaxy",
                "delay" => "300"
                ]
            ];

            return view('testimonial', [
            "title" => "Testimonial",
            "active" => 'testimonial'
            ], compact('testimonials'));
        }
}
