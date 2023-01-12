<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateFormRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /*Construtor para acessar a category sem ficar repetindo codigo*/
    private $category;
    public function __construct(Category $category)
    {
        $this->category = $category;
    }


    public function index(Request $request){

        // $categories = $category->where('string', 'LIKE', "%{$request->string}%" )->get();
        
        $categories = $this->category->getResults($request->name);

        return response()->json($categories, 200);
    }


    public function store(StoreUpdateFormRequest $request){
        
       $category = $this->category->create($request->all());

       return response()->json($category, 201);

    }

    public function show($id){
        if(!$category = $this->category->find($id))
            return response()->json(['error' => 'Not Found'], 404);

        return response()->json($category);
    }


    public function update(StoreUpdateFormRequest $request, $id)
    {
        // $category =  $this->category->find($id);

        if(!$category = $this->category->find($id))
            return response()->json(['error' => 'Not Found'], 404);
        
        $category->update($request->all());

        return response()->json($category, 200);
    }


    public function delete($id){
        if(!$category = $this->category->find($id))
            return response()->json(['error' => 'Not Found'], 404);

        $category->delete();

        return response()->json(['success'=> true], 200);
    }

}
