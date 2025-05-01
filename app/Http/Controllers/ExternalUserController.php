<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ExternalUserController extends Controller
{
    

    public function index(Request $request)
    {
        $query = User::where('source', 'api'); // or ->where('role', 'external')

        if ($request->has('search')) {
            $search = $request->query('search');
            $query->where('name', 'like', "%{$search}%");
        }
    
        $users = $query->get();
    
        return view('external-users.index', [
            'users' => $users,
            'error' => null,
        ]);
    }

}
