<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TwoController extends Controller {
    public function portofolio() {
        $name = 'Salsabila Anandita Putri';
        return view('portofolio', compact('name'));
    }
}
