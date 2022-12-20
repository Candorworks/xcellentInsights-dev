<?php

namespace App\Imports;

use App\Models\Report;
use App\Models\Publisher;
use App\Models\Category;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\RegistersEventListeners;

class ReportImport implements ToModel, WithHeadingRow
{
    use RegistersEventListeners;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row);
        if(!empty($row['category_id'])){
        
            $data = [
                // return new Report([
                'category_id'       => $row['category_id'],
                'subcategory_id'    => $row['subcategory_id'],
                'publisher_id'      => $row['publisher_id'],
                'title'             => $row['title'],
                'meta_title'        => $row['meta_title'],
                'meta_desc'         => $row['meta_desc'],
                'url_title'         => $row['url_title'],
                // 'thumbnail'         => $row['thumbnail'],
                'format'            => $row['format'],
                'single_price'      => $row['single_price'],
                'multi_price'       => $row['multi_price'],
                'enterprise_price'  => $row['enterprise_price'],
                'pages'             => $row['pages'],
                // 'short_description' => $row['short_description'],
                // 'description'       => $row['description'],
                // 'toc'               => $row['toc'],
                // 'table_figures'     => $row['table_figures'],
                'description'       => str_replace("_x000D_"," ",$row['description']),
                'toc'               => str_replace("_x000D_"," ",$row['toc']),
                'table_figures'     => str_replace("_x000D_"," ",$row['table_figures']),
                'companies'         => str_replace("_x000D_"," ",$row['companies']),
                'publish'           => $this->transformDate($row['publish']),
                'keywords'         => @$row['keywords'],
                
            // ]);
            ];

            $insert = Report::create($data);
            $publishers=Publisher::find($row['publisher_id']);
            $category=Category::find($row['category_id']);
            // dd($publishers->sort_name);
            $insert->unique_id  = $publishers->sort_name.$insert->id;
            $insert->thumbnail  = $category->thumbnail;
            $insert->slug       = Str::slug($insert->url_title).'-'.$insert->id;
            $insert->save();
        }
        
    }

    public function transformDate($value, $format = 'Y-m-d')
    {
        // dd(date($format, strtotime($value)));
        return date($format, strtotime($value));
        try {
            return \Carbon\Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value));
        } catch (\ErrorException $e) {
            return \Carbon\Carbon::createFromFormat($format, $value);
        }
    }

    public static function beforeImport(BeforeImport $event)
    {
        $options = LIBXML_COMPACT | LIBXML_PARSEHUGE;

        \PhpOffice\PhpSpreadsheet\Settings::setLibXmlLoaderOptions($options);
    }
}

