<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Recipe;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function activeRecipe()
    {
        $data['recipe'] = Recipe::where('is_publish', 1)
            ->get();
        return view('admin.activerecipe', $data);
    }

    public function delete($id)
    {
        $recipe = Recipe::find($id);

        Recipe::where('id', $id)
            ->update([
                'is_publish' => 0,
            ]);
        
        return redirect(route('admin.activerecipe'));
    }
    
    public function deletedRecipe()
    {
        $data['recipe'] = Recipe::where('is_publish', 0)
        ->get();
        return view('admin.deletedrecipe', $data);
    }

    public function restore($id)
    {
        $recipe = Recipe::find($id);

        Recipe::where('id', $id)
            ->update([
                'is_publish' => 1,
            ]);
        
        return redirect(route('admin.deletedrecipe'));
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function account()
    {
        $user = User::all();
        return view('admin.account', compact('user'));
    }

    public function deleteuser($id)
    {
        User::destroy($id);
        
        return redirect(route('admin.account'));
    }
}
