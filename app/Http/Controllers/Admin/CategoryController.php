<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Report;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\EditcategoryRequest;
use Illuminate\Support\Facades\Storage;
use Session;
use Str;

class CategoryController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:category-list|category-create|category-edit|category-delete', ['only' => ['index','store']]);
         $this->middleware('permission:category-create', ['only' => ['create','store']]);
         $this->middleware('permission:category-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:category-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $list = Category::with(['SubCategory'=>function($q){
            $q->select('*');
        }])->where('parent_id',0)->get();
        return view('admin.category.list', compact('list') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list = Category::where('parent_id',0)->get();
        return view('admin.category.add', compact('list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    public function store(CategoryRequest $request)
    {
        // dd($request->all());
        $file = $request->thumbnail;
        $thumbnail = time(). "." . $file->getClientOriginalExtension();
        $path = Storage::disk('public_web')->put('category/'. $thumbnail, file_get_contents($file ));
        // $path = Storage::disk('s3')->url($path);
        // dd($path);
        
        $category = Category::create($request->all());
        $category->thumbnail = 'category/'. $thumbnail;
        $category->slug = Str::slug($category->name);
        $category->save();
        return redirect()->route('category.index')->withSuccess('Category added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $list = Category::where('parent_id',0)->get();
        $category = Category::find($id);
        return view('admin.category.edit', compact('list', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditcategoryRequest $request, $id)
    {
        $category = Category::find($id);
        $category->parent_id = $request->parent_id;
        $category->name = $request->name;
        $category->active = $request->active;
        $category->information = $request->get('information');
        $category->slug = Str::slug($category->name);
        $category->vertical = $request->vertical;
        // $file = $request->thumbnail;
        // $thumbnail = time(). "." . $file->getClientOriginalExtension();
        if($request->thumbnail){
            if($category->thumbnail != null){
                Storage::disk('public_web')->delete($category->thumbnail);
            }
            $file = $request->thumbnail;
            $thumbnail = time(). "." . $file->getClientOriginalExtension();
            $path = Storage::disk('public_web')->put('category/'. $thumbnail, file_get_contents($file ));
            $category->thumbnail = 'category/'. $thumbnail;

            // update all report thumbnail
            Report::where('category_id',$id)->update(['thumbnail'=>'category/'. $thumbnail]);
        }
        $category->save();
        
        return redirect()->route('category.index')->withSuccess('Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index')->withSuccess('Category deleted successfully.');
    }
}
