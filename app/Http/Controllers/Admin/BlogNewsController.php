<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BlogNewsController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:blog-list', ['only' => ['index','store']]);
        $this->middleware('permission:blog-create', ['only' => ['create','store']]);
        $this->middleware('permission:blog-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:blog-delete', ['only' => ['destroy']]);
    }

    public function create() {

        $types = [
            Blog::TYPE_BLOG => Blog::TYPE_BLOG,
            Blog::TYPE_NEWS => Blog::TYPE_NEWS
        ];

        $categories = Category::all()->toArray();

        return view('admin.blogs.admin-blogs', compact('types', 'categories'));
    }

    public function store(Request $request) {
        
        $types = [
            Blog::TYPE_BLOG => Blog::TYPE_BLOG,
            Blog::TYPE_NEWS => Blog::TYPE_NEWS
        ];

        $this->validate($request, [
            'title' => 'required',
            'blog_description' => 'required',
            'tags' => 'required|array|min:1',
            'category' => [
                'required',
                Rule::in(Category::all()->pluck('id')->toArray())
            ],
            'blog_image' => 'file|image',
            'type' => [
                'required',
                Rule::in($types)
            ],
            // 'author' => 'required',
        ]);

        DB::beginTransaction();
        try {
            $blog = new Blog;
            $blog->title = $request->get('title');
            $slug = Str::slug($request->get('title'));
            if((new Blog)->where('slug', $slug)->count() > 0) {
                return redirect()->route('admin.blogs-news.create')->withFail('Duplicate Blog/News.');
            }
            $blog->slug = $slug;
            $blog->subtitle = $request->get('sub_title');
            $blog->description = $request->get('blog_description');
            $blog->tag = json_encode($request->get('tags'));
            $blog->category_id = $request->get('category');
            $blog->type = $request->get('type');
            $blog->author = $request->get('author');
            if($request->hasFile('blog_image')) {
                $file = $request->file('blog_image');
                $blogImageName = time(). "." . $file->getClientOriginalExtension();
                $path = 'images/blog/'. $blogImageName;
                Storage::disk('public_web')->put($path, file_get_contents($file));
                $blog->image = $path;
            } else {
                $blog->image = '';
            }
            $blog->active = $request->active ? "0" : "1";
            $blog->save();
            DB::commit();
            return redirect()->route('admin.blogs-news.index')->withSuccess('Blog added successfully.');
        } catch (\Throwable $e) {
            // dd($e);
            report($e);
            DB::rollBack();
            return redirect()->route('admin.blogs-news.create')->withFail('Error while adding blog.');
        }

    }

    public function edit(Blog $blogs_news) {
        $types = [
            Blog::TYPE_BLOG => Blog::TYPE_BLOG,
            Blog::TYPE_NEWS => Blog::TYPE_NEWS
        ];

        $categories = Category::all()->toArray();

        $blog = $blogs_news;
        return view('admin.blogs.admin-blogs', compact('types', 'categories', 'blog'));
    }

    public function update(Request $request, Blog $blogs_news) {
        $types = [
            Blog::TYPE_BLOG => Blog::TYPE_BLOG,
            Blog::TYPE_NEWS => Blog::TYPE_NEWS
        ];

        $this->validate($request, [
            'title' => 'required',
            'blog_description' => 'required',
            'tags' => 'required|array|min:1',
            'category' => [
                'required',
                Rule::in(Category::all()->pluck('id')->toArray())
            ],
            'blog_image' => 'file|image',
            'type' => [
                'required',
                Rule::in($types)
            ],
            // 'author' => 'required',
        ]);

        DB::beginTransaction();
        try {
            $blogs_news->title = $request->get('title');
            $slug = Str::slug($request->get('title'));
            if((new Blog)->where('slug', $slug)->where('id', '!=', $blogs_news->id)->count() > 0) {
                return redirect()->back()->withFail('Duplicate Blog/News.');
            }
            $blogs_news->slug = $slug;
            $blogs_news->subtitle = $request->get('sub_title');
            $blogs_news->description = $request->get('blog_description');
            $blogs_news->tag = json_encode($request->get('tags'));
            $blogs_news->category_id = $request->get('category');
            $blogs_news->type = $request->get('type');
            $blogs_news->author = $request->get('author');
            if($request->hasFile('blog_image')) {
                $oldImage = '';
                if(!empty($blogs_news->image)){
                    $oldImage = $blogs_news->image;
                }
                $file = $request->file('blog_image');
                $blogImageName = time(). "." . $file->getClientOriginalExtension();
                $path = 'images/blog/'. $blogImageName;
                Storage::disk('public_web')->put($path, file_get_contents($file));
                $blogs_news->image = $path;
                if(!empty($oldImage)) {
                    Storage::disk('public_web')->delete($oldImage);
                }
            }
            $blogs_news->active = $request->active ? "0" : "1";
            $blogs_news->save();
            DB::commit();
            return redirect()->route('admin.blogs-news.index')->withSuccess('Blog updated successfully.');
        } catch (\Throwable $e) {
            report($e);
            DB::rollBack();
            return redirect()->back()->withFail('Error while adding blog.');
        }

    }


    public function index(){
        $blogs=Blog::where('type','Blog')->get();
        $news=Blog::where('type','News')->get();
        return view('admin.blogs.blog-news-list', compact('blogs','news'));
    }
}