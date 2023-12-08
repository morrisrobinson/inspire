<?php

namespace Morrisrobinson\Inspire;

use Illuminate\Support\Facades\Http;

class Inspire {
    public function justDoIt() {
        $response = Http::get('https://api.chucknorris.io/jokes/random?category=dev,history,travel,career,science,sport,music');

        return $response['value'];
    }
}
