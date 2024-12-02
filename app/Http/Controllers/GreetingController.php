<?php
// ملف app/Http/Controllers/GreetingController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function greet()
    {
        // تمرير بيانات إلى View
        $name = "أحمد";
        return view('greet', ['name' => $name]);
    }
}
