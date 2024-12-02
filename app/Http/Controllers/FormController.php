<?php
// ملف app/Http/Controllers/FormController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
   // ملف app/Http/Controllers/FormController.php

public function submit(Request $request)
{
    $name = $request->input('name');
    // إعادة التوجيه مع البيانات
    return redirect()->route('greet')->with('name', $name);
}

}
