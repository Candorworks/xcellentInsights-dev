<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Report;
use App\Models\Publisher;
use App\Models\Lead;

class CommonController extends Controller
{
    public function dashboard()
    {
        $category = Category::count();
        $report = Report::count();
        $publisher = Publisher::count();
        $leads = Lead::count();
        // dd($category);
        return view('dashboard', compact('category', 'report', 'publisher', 'leads'));
    }
}
