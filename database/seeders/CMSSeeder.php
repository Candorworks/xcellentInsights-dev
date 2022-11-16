<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CMSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cms')->truncate();

        $cms = array(
            array('page' => 'home', 'title' => 'Xcellent Insights',  'meta_title' => 'Xcellent Insights A Leading Provider Of Market Research Services Globally' , 'meta_desc' => 'Xcellent Insights a leading provider of market research and consulting on various industries, to help clients make strategic decisions which drives their business growth.'),
            array('page' => 'about', 'title' => 'About Us',  'meta_title' => 'About Us - Xcellent Insights' , 'meta_desc' => 'Xcellent Insights is a one-stop solution for syndicate and customized research, market intelligence, and business Intelligence consulting services'),
            array('page' => 'contact', 'title' => 'Contact Us',  'meta_title' => 'Contact Us -Xcellent Insights' , 'meta_desc' => 'Contact Xcellent Insights, if you have any query, concerns, or issues, we are here to help you. Phone: +1 408 627 7717 or Email: contact@xcellentinsights.com'),
            array('page' => 'reporthub', 'title' => 'Report Hub',  'meta_title' => 'Report Hub - Browse Reports Meeting Your Business Requirement' , 'meta_desc' => 'Browse the Xcellent Insights reports repository and find your market research report meeting your business requirements.'),
            array('page' => 'industry.vertical', 'title' => 'Industry Verticals',  'meta_title' => 'Industry Verticals - Browse Market Research Reports On Various Industries Here' , 'meta_desc' => 'Browse market research reports on various industries here'),
            array('page' => 'careers', 'title' => 'Careers',  'meta_title' => 'Career At Xcellent Insights' , 'meta_desc' => 'Join Xcellent Insights, to start your career with us. To apply, please send your C.V./Resume at hr@xcellentinsights.com or fill out the below form.'),
            array('page' => 'web.team', 'title' => 'Our Professionals',  'meta_title' => 'Our Professionals' , 'meta_desc' => 'Xcellent Insights represents an intellectually empowered and rationally driven team of focused individuals, striving to work progressively.'),
            array('page' => 'Automobile & Transportation', 'title' => 'Automobile and Transportation Market Research Reports',  'meta_title' => 'Automobile And Transportation Market Research Reports' , 'meta_desc' => 'Browse market research reports on automobile and transportation industry here at Xcellent Insights'),
            array('page' => 'Chemicals & Materials', 'title' => 'Chemical And Material Market Research Reports',  'meta_title' => 'Chemical And Material Market Research Reports' , 'meta_desc' => 'Browse market research reports on chemical and material industry here at Xcellent Insights'),
            array('page' => 'Consumer Goods', 'title' => 'Consumer Goods Market Research Reports',  'meta_title' => 'Consumer Goods Market Research Reports' , 'meta_desc' => 'Browse market research reports on consumer goods industry here at Xcellent Insights'),
            array('page' => 'Energy & Power', 'title' => 'Energy and Power Market Research Reports',  'meta_title' => 'Energy and Power Market Research Reports' , 'meta_desc' => 'Browse market research reports on energy and power industry here at Xcellent Insights'),
            array('page' => 'Electronics & Semiconductor', 'title' => 'Electronics and Semiconductor Market Research Reports',  'meta_title' => 'Electronics and Semiconductor Market Research Reports' , 'meta_desc' => 'Browse market research reports on electronics and semiconductor industry here at Xcellent Insights'),
            array('page' => 'Food & Beverages', 'title' => 'Food And Beverages Market Research Reports',  'meta_title' => 'Food And Beverages Market Research Reports' , 'meta_desc' => 'Browse market research reports on food and beverages industry here at Xcellent Insights'),
            array('page' => 'Machinery & Equipment', 'title' => 'Machinery And Equipment Market Research Reports',  'meta_title' => 'Machinery And Equipment Market Research Reports' , 'meta_desc' => 'Browse market research reports on machinery and equipment industry here at Xcellent Insights'),
            array('page' => 'Pharma & Healthcare', 'title' => 'Pharma And Healthcare Market Research Reports',  'meta_title' => 'Pharma And Healthcare Market Research Reports' , 'meta_desc' => 'Browse market research reports on pharma and healthcare industry here at Xcellent Insights'),
            array('page' => 'Service & Software', 'title' => 'Service and Software Market Research Reports',  'meta_title' => 'Service and Software Market Research Reports' , 'meta_desc' => 'Browse market research reports on Service and Software industry here at Xcellent Insights'),
            array('page' => 'Packaging', 'title' => 'Packaging Market Research Reports',  'meta_title' => 'Packaging Market Research Reports' , 'meta_desc' => 'Browse market research reports on packaging industry here at Xcellent Insights'),
            array('page' => 'Other', 'title' => 'Other Market Research Reports',  'meta_title' => 'Other Market Research Reports' , 'meta_desc' => 'Browse market research reports on other industry here at Xcellent Insights'),
            array('page' => 'partner', 'title' => 'Partner with Us',  'meta_title' => 'Partner with Us' , 'meta_desc' => 'Partner With Us'),
            array('page' => 'blog', 'title' => 'Blog',  'meta_title' => 'Blog - XcellentInsights' , 'meta_desc' => 'Blog - XcellentInsights'),
            array('page' => 'news', 'title' => 'News',  'meta_title' => 'News - XcellentInsights' , 'meta_desc' => 'News - XcellentInsights'),
        );
        
        DB::table('cms')->insert($cms);
    }
}
