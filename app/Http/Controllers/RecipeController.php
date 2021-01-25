<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Recipe;
use Auth;
use File;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('web');
    }

    public function index()
    {
        $recipes = Recipe::where('is_publish', 1)
        ->paginate(15);

        return view('index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createResep');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'recipe_name' => 'required|string',
            'description' => 'required|string',
            'ingredients' => 'required|string',
            'tools' => 'required|string',
            'how_to_make' => 'required|string'
        ]);

        // $recipe = Recipe::create([
        //     'recipe_name' => ucwords($request->recipe_name),
        //     'description' => $request->description,
        //     'ingredients' => $request->ingredients,
        //     'tools' => $request->tools,
        //     'how_to_make' => $request->how_to_make,
        //     'user_id' => Auth::user()->id
        // ]);

        $recipe = new Recipe;
        $recipe->recipe_name = ucwords($request->recipe_name);
        $recipe->description = $request->description;
        $recipe->ingredients = $request->ingredients;
        $recipe->tools = $request->tools;
        $recipe->how_to_make = $request->how_to_make;
        $recipe->user_id = Auth::user()->id;
        $recipe->save();

        $path = public_path().'/filesdat/'.$recipe->id ;
        if (!file_exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
        }
        $file = $request->file('image');
        $file->move($path,$file->getClientOriginalName());
        $update = array(
            "image" => '/'.$recipe->id.'/'.$file->getClientOriginalName()
        );
        Recipe::where('id',$recipe->id)->update($update);

        return redirect(route('home'))->with('status', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipe = Recipe::where('id', $id)->first();
        return view('detail', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($recipe)
    {
        $recipe = Recipe::where('id', $recipe)->first();
        return view('editResep', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(!empty($request->image)){
            $path = public_path().'/filesdat/'.$id ;
            if (!file_exists($path)) {
                File::makeDirectory($path, $mode = 0777, true, true);
            }
            $file = $request->file('image');
            $file->move($path,$file->getClientOriginalName());
            $update = [
                'recipe_name' => $request->recipe_name,
                'description' => $request->description,
                'tools' => $request->tools,
                'ingredients' => $request->ingredients,
                'how_to_make' => $request->how_to_make,
                "image" => '/'.$id.'/'.$file->getClientOriginalName()
            ];
        }else{
            $update = [
                'recipe_name' => $request->recipe_name,
                'description' => $request->description,
                'tools' => $request->tools,
                'ingredients' => $request->ingredients,
                'how_to_make' => $request->how_to_make
            ];
        }
        Recipe::where('id', $id)
        ->update($update);
        return redirect(route('dashboard'))->with('status', 'Data berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Recipe::destroy($id);
        return redirect(route('dashboard'))->with('status', 'Data berhasil dihapus');
    }

    public function search(Request $request)
    {
		$search = $request->search;
 
		$recipes = DB::table('recipes')
            ->where('recipe_name','like',"%".$search."%")
            ->paginate(15);
 
        // dd($recipes);
		return view('index',['recipes' => $recipes]);
    }
}
