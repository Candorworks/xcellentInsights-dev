<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use DB;

class BlogController extends Controller
{
    public function blog($categoryName = null)
    {
        $results = Blog::where('active', '1')->get();
        return view('web.cms.blog', compact('results', 'categoryName'));
    }

    public function blog_details(Request $request, $blog_slug)
    {
        $categories = Category::where('active', '1')->get();
        $results = Blog::orderBy('id', 'desc')->where('active', '1')->where('type', 'Blog')->limit(5)->get();
        $blog = Blog::where("slug", $blog_slug)->first();
        return view('web.cms.singleBlog', compact('blog', 'results', 'categories'));
    }

    public function blogSearch(Request $request, $categoryName = null)
    {
        try {
            $results = Blog::Where('title', 'like', '%' . $request->get('searchtitle') . '%')->where('active', '1')->where('type', 'Blog')->get();
            return view('web.cms.blog', compact('results', 'categoryName'));
        } catch (\Exception $e) {
            logger($e->getMessage());
            logger($e->getTraceAsString());
            return redirect()->back()->withFail('Error Oops somethings wents wrong.');
        }
    }

    public function blogCategory($category_slug)
    {
        try {
            $category = Category::select('id', 'name')->where('slug', $category_slug)->first();
            $categoryId = $category->id;
            $categoryName = $category->name;
            $results = Blog::where('category_id', $categoryId)->where('active', '1')->where('type', 'blog')->get();
            return view('web.cms.blog', compact('results', 'categoryName'));
        } catch (\Exception $e) {
            // dd($e);
            logger($e->getMessage());
            logger($e->getTraceAsString());
            return redirect()->back()->withFail('Error Oops somethings wents wrong.');
        }
    }
}
