<?php

namespace App\Exports;

// use App\Models\Report;
use Maatwebsite\Excel\Concerns\WithHeadings;
// use Maatwebsite\Excel\Concerns\FromCollection;
// use Illuminate\Contracts\View\View;
// use Maatwebsite\Excel\Concerns\FromView;

class ReportExport implements WithHeadings#,FromCollection #,FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return Report::all();
    // }

    // public function view(): View
    // {
    //     return view('exports.invoices', [
    //         'invoices' => Invoice::all()
    //     ]);
    // }

    public function headings() :array
    {
        return [
            'category_id',
            'subcategory_id',
            'publisher_id',
            'title',
            'meta_title',
            'meta_desc',
            'url_title',
            // 'thumbnail',
            'format',
            'single_price',
            'multi_price',
            'enterprise_price',
            'pages',
            // 'short_description',
            'description',
            'toc',
            'table_figures',
            'companies',
            'publish',
            'keywords'
        ];
    }
}
