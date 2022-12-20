<?php

namespace App\Exports;

use App\Models\Report;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithMapping;
use URL;
class ReportExportAll implements WithHeadings,FromCollection ,WithMapping#,FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct($collection,$export_column)
    {
        $this->collection = $collection;
        $this->export_column = $export_column;
       
    }

    

    public function collection()
    {
       
    return $this->collection;
        
    }
    
    public function map($registration) : array {
        $return_array=[];
        $columns=$this->export_column;
        foreach ($columns as $col){
            if($col=='category_id'){
                $return_array['category_id']=@$registration->category->name;
            }else if($col=='subcategory_id'){
                $return_array['subcategory_id']=@$registration->subcategory->name;
            }else if($col=='publisher_id' || $col=='publisher_name'){
                $return_array[$col]= @$registration->report->publisher->name;
            }elseif($col=="lead_type"){
                $return_array['lead_type']=@$registration->leadtype->name;
            
            }elseif($col=="report_id"){
                $return_array[$col]=@$registration->report->id;
            
            }elseif($col=="report_name"){
                $return_array[$col]=@$registration->report->title;
            
            }elseif($col=="link"){
                $return_array['link']=URL::to('/checkout/'.$registration->report_id.'/'.$registration->link);
            
            }elseif($col==='date'){
                $return_array[$col]=date('d M y H:i A', strtotime($registration->created_at));
            }elseif($col=="created_at"){
                $return_array['created_at']=date('d M y H:i A', strtotime($registration->created_at));
            }elseif($col==='report_url'){
                $return_array[$col]= isset($registration->report->slug) ? URL::to('/').'/reports/'.$registration->report->slug : '';
            }
            
            else{
                $return_array[$col]=$registration->$col;
                
            }
            
            
        }
        // dd($return_array);
        return $return_array;
       
        
 
 
    }

    public function headings() :array
    {
        return $this->export_column;
    }
}
