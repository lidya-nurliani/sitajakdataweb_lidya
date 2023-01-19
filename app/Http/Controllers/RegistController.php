<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistController extends Controller
{
    public function index(Request $request)
    {
        $dafken = new User;
        $dafken->name = $request->name;
        $dafken->level = $request->level;
        $dafken->email = $request->email;
        $dafken->password = bcrypt($request->password);
        $dafken->save();

        return redirect('login');
    }
}
