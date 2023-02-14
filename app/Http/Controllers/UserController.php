<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('dashboardSuperadmin', [
            'Users' => User::all()
        ]);
    }

    public function update(Request $request, $id) {
        $user = User::find($id);

        if ($user->role == 'user'){
            $user->role = 'admin';
        }

        else
            $user->role = 'user';
        $user->save() ;

        // return $user->role;
        return redirect('superAdmin') ;

    }
}
