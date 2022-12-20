<?php

namespace App\Exports;

use URL;
use App\Models\Report;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithMapping;
class Reports implements WithHeadings,FromCollection ,WithMapping#,FromView
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
            if($col=='report_uri'){
                $return_array['report_uri']=URL::to('/').'/reports/'.$registration->slug;
            }else if($col=='sample_url'){
                $return_array['sample_url']=URL::to('/').'/enquiry/sample/'.$registration->id;
            }else if($col=='discount_url'){
                $return_array['discount_url']=URL::to('/').'/enquiry/discount/'.$registration->id;
            }elseif($col=="buying_url"){
                $return_array['buying_url']=URL::to('/').'/enquiry/buying/'.$registration->id;
            
            }elseif($col=="purchase_url"){
                $return_array['purchase_url']=URL::to('/').'/checkout/'.$registration->id;
            } elseif($col == 'report_id') {
                $return_array['report_id'] = $registration->id;
            } elseif($col == 'category') {
                $return_array['cateogry'] = isset($registration->category->name) ? $registration->category->name : ''; 
            } elseif($col == 'publisher') {
                $return_array['publisher'] = isset($registration->publisher->name) ? $registration->publisher->name : ''; 
            } elseif($col == 'publish_date') {
                $return_array['publish_date'] = isset($registration->publish) ? date("Y-m-d", strtotime($registration->publish)) : ''; 
            } elseif($col == 'meta_title') {
                $return_array['meta_title'] = $registration->meta_title; 
            } elseif($col == 'meta_description') {
                $return_array['meta_description'] = $registration->meta_desc; 
            } elseif($col == 's_l_price') {
                $return_array['s_l_price'] = $registration->single_price; 
            } elseif($col == 'm_l_price') {
                $return_array['m_l_price'] = $registration->multi_price; 
            } elseif($col == 'e_l_price') {
                $return_array['e_l_price'] = $registration->enterprise_price; 
            } elseif($col == 'active') {
                $return_array['active'] = (int)$registration->active === 1 ? 'Active' : 'Deactive'; 
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
