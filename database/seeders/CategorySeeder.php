<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'parent_id' => 0,
            'name' => 'Automobile & Transportation',
            'thumbnail' =>'category/1650879736.webp',
            'icon' => 'fas fa-car-side',
            'slug' => 'automobile-transportation',
            'information' => 'The automobile and transportation industry has been drastically changing over the recent years to cater to changing consumer demands and high focus on improving safety and durability. There has been a rapid increase in the demand for electric vehicles owing to rising awareness about carbon emission and pollution. Leading key players in the industry are designing, developing, manufacturing and upgrading existing automotive models and are focused on launching modern automobiles with latest facilities and features. Factors such as changing consumer patterns, high adoption of Artificial Intelligence (AI) and robotics in automobile and transportation sector, rapid urbanization and growing demand for light and heavy commercial vehicles are expected to drive market growth going ahead.',
            'active' => '1',
            'vertical' => '1', 
        ]);

        DB::table('categories')->insert([
            'parent_id' => 0,
            'name' => 'Chemicals & Materials',
            'thumbnail' =>'category/1650879804.webp',
            'icon' => 'fa-solid fa-flask-vial',
            'slug' => 'chemicals-materials',
            'information' => 'The chemicals and materials industry manufactures a wide range of products and goods such as perfumes, detergents, soaps, consumed and used by people worldwide on a daily basis. The industry is rapidly booming over the recent years owing to rising building and construction activities, changing consumer patterns, and increasing demand for adhesives and sealants, plastic and nanomaterials, and materials and chemicals across various industrial verticals. Rising awareness about carbon emissions and increasing number of eco-conscious consumer has encouraged manufacturers to develop environment-friendly biodegradable products.',
            'active' => '1',
            'vertical' => '1',
        ]);

        DB::table('categories')->insert([
            'parent_id' => 0,
            'name' => 'Consumer Goods',
            'thumbnail' =>'category/1650879823.webp',
            'icon' => 'fas fa-luggage-cart',
            'slug' => 'consumer-goods',
            'information' => 'The consumer goods industry has drastically evolved over the recent years to cater to changing consumer behavior and rapid technological advancements. Consumer goods are products such as processed food and beverages, cosmetics, toiletries, electronic goods and household cleaning products that are manufactured for individual and household use, sold through retail outlets. The consumer goods companies are focused on launching innovative products to meet an every-growing assortment of human needs. Factors such as changing lifestyle patterns, rapidly expanding global population, and constant demand for consumer goods are expected to support the expansion of consumer goods sector.',
            'active' => '1',
            'vertical' => '1',
        ]);

        DB::table('categories')->insert([
            'parent_id' => 0,
            'name' => 'Energy & Power',
            'thumbnail' =>'category/1650879846.webp',
            'icon' => 'fa-solid fa-charging-station',
            'slug' => 'energy-power',
            'information' => 'The energy and power industry is one of fastest growing sectors that focuses on handling processes involved in trade and provision of electricity and other energy resources. Rapid urbanization and industrialization across the globe has resulted in high demand for uninterrupted energy. Sudden rise in pollution levels and increasing environmental concerns has encouraged Government and private sectors to invest in the development of sustainable alternatives for non-renewable sources. Other factors such as high consumption of electricity across industrial, commercial and residential sectors, increasing need for reducing carbon emissions, and increasing awareness about the depleting non-renewable resources are expected to drive market revenue growth going ahead.',
            'active' => '1',
            'vertical' => '1',
        ]);

        DB::table('categories')->insert([
            'parent_id' => 0,
            'name' => 'Electronics & Semiconductor',
            'thumbnail' =>'category/1650879864.webp',
            'icon' => 'fa-solid fa-microchip',
            'slug' => 'electronics-semiconductor',
            'information' => 'Electronic circuit integrations and semiconductors are major aspects of the modern electronic devices. Over the recent years, there have been rapid advancements in semiconductors and electronics to cater to changing consumer patterns and growing demand for electronic devices such as tablets, smartphones, gaming devices, home appliances with latest display and features. The industry is rapidly expanding and has high demand across various sectors such as networking and communication, consumer electronics, automotive and data processing among others.',
            'active' => '1',
            'vertical' => '1',
        ]);

        DB::table('categories')->insert([
            'parent_id' => 0,
            'name' => 'Food & Beverages',
            'thumbnail' =>'category/1650879889.webp',
            'icon' => 'fa-solid fa-utensils',
            'slug' => 'food-beverages',
            'information' => 'The food and beverage industry is one of the mostly rapidly expanding industries in the world. It is diverse and equipped with specialized machinery that includes transforming raw agricultural material into consumer food products and ranges from preparing to packaging, transporting and serving food and beverages across restaurants, cafes, fast-food joints, cafeterias, delis, catering businesses, food manufacturing operations and food transportation services. The industry is driven by food innovations such as plant-based ingredients, preservative free food, gluten free and vegan diets to cater to changing consumer preferences as consumers are becoming health conscious day by day.',
            'active' => '1',
            'vertical' => '1',
        ]);

        DB::table('categories')->insert([
            'parent_id' => 0,
            'name' => 'Machinery & Equipment',
            'thumbnail' =>'category/1650879908.webp',
            'icon' => 'fa-solid fa-screwdriver-wrench',
            'slug' => 'machinery-equipment',
            'information' => 'The machinery and equipment industry is one of the fastest growing industries in the world. This sector is focused on supplying capital goods and essential products and highly sophisticated technology for other manufacturing and services sectors such as medical, food and beverages, agricultural, industrial, power & energy, oil & gas and mining & construction among others to enhance their productivity and quality. The market is significantly driven by application of IT in machinery, technological advancements and innovation in machinery and equipment to cater to rising demand. Leading players in the industry are focused on developing highly effective machinery and equipment for various sectors.',
            'active' => '1',
            'vertical' => '1',
        ]);

        DB::table('categories')->insert([
            'parent_id' => 0,
            'name' => 'Pharma & Healthcare',
            'thumbnail' =>'category/1646668183.webp',
            'icon' => 'fa-solid fa-hospital',
            'slug' => 'pharma-healthcare',
            'information' => 'The pharma and healthcare is one of the largest industries across the globe and is constantly evolving periodically to cater to ongoing and upcoming challenges such as high prevalence of infectious and chronic diseases, rising number of trauma and emergency cases and recent COVID-19 pandemic. It consists of various subsectors such as healthcare services and facilities, hospital supplies, pharmaceuticals and medical equipment. Revenue growth of the global market can be significantly driven by factors such as rapid advancements in research and development activities, high focus on developing novel treatment alternatives, devices and procedures, and increasing investments for improving overall healthcare infrastructure.',
            'active' => '1',
            'vertical' => '1',
        ]);

        DB::table('categories')->insert([
            'parent_id' => 0,
            'name' => 'Service & Software',
            'thumbnail' =>'category/1650880050.webp',
            'icon' => 'fa-solid fa-laptop-code',
            'slug' => 'service-software',
            'information' => 'The software and services industry includes all industries engaged in developing and maintaining software products and services that are widely used for various business models. The increasing corporate businesses across the globe, rising automation of businesses across various sectors including retail, healthcare, manufacturing, aerospace & defense, and automotive has resulted in rising demand for software and services. The growth of the industry is significantly driven by as rapid adoption of advanced technologies such as blockchain, Artificial Intelligence (AI), Machine Learning (ML) and hybrid architecture by medium to large enterprises, and rising concerns about data breaching and data security. Moreover, the industry is expected to offer huge job opportunities for people across the globe in the coming years.',
            'active' => '1',
            'vertical' => '1',
        ]);

        DB::table('categories')->insert([
            'parent_id' => 0,
            'name' => 'Other',
            'thumbnail' =>'category/1650880072.webp',
            'icon' => 'fa-solid fa-ellipsis',
            'slug' => 'other',
            'information' => 'You will find numerous reports of various domains under this sector. ',
            'active' => '1',
            'vertical' => '1',
        ]);

        DB::table('categories')->insert([
            'parent_id' => 0,
            'name' => 'Packaging',
            'thumbnail' =>'category/1650880102.webp',
            'icon' => 'fa-solid fa-boxes-packing',
            'slug' => 'packaging',
            'information' => 'The packaging industry has rapidly evolved over the recent past and is expected to grow considerably in the coming years. Packaging is one the most essential component to protect products from potential damage during shipment. Different types of packaging is currently being used across various sectors including food and beverages, cosmetics, healthcare, consumer goods, pharmaceutical, chemicals, e-commerce and agriculture among others. Growing penetration of internet and e-commerce platforms and rising demand for daily use products and convenience have encouraged market players to invest in R&D activities and develop innovative and sturdy packaging. Moreover, many manufacturers are focused on developing eco-friendly and sustainable packaging due to rising demand for green packaging to reduce ecological footprint.',
            'active' => '1',
            'vertical' => '1',
        ]);

        DB::table('categories')->insert([
            'parent_id' => 0,
            'name' => 'IT and Communication',
            'thumbnail' =>'category/1650880126.webp',
            'icon' => 'fa-solid fa-tower-cell',
            'slug' => 'it-and-communication',
            'information' => 'Information Technology and Communication is a broader term for Information Technology (IT) referring to all communication technologies such as internet, cell phones, computers, middleware, software, social networking, and other services that play a crucial role in all aspects of modern society and is widely used in all sectors. Over the recent years, the ICT sector has significantly evolved owing to changing consumer patterns, rapid technological developments, and increasing demand for ICT products and services across various sectors including pharma & healthcare, agriculture, finance and banking, automotive.',
            'active' => '1',
            'vertical' => '1',
        ]);

        DB::table('categories')->insert([
            'parent_id' => 0,
            'name' => 'Technology',
            'thumbnail' =>'category/1650880149.webp',
            'icon' => 'fas fa-robot',
            'slug' => 'technology',
            'information' => 'Technology has been playing a pivotal role in the growth of major business and sectors. The technology industry provides a wide range of products and services for businesses and consumers and comprises of companies that design, manufacture and distribute electronic devices, computers, computer services and software, hardware, e-commerce, cloud services, computer related equipment, consumer electronics and electronic components and products. One of the key factors boosting revenue of the technology industry is the high penetration of internet services, smartphones, tablets, among others and rising research based activities in sectors such as IT, biotechnology, environmental technology and advanced materials.',
            'active' => '1',
            'vertical' => '1',
        ]);

        DB::table('categories')->insert([
            'parent_id' => 0,
            'name' => 'Medical Devices & Consumables',
            'thumbnail' =>'category/1650880173.webp',
            'icon' => 'fa-solid fa-syringe fa-solid fa-stethoscope',
            'slug' => 'medical-devices-consumables',
            'information' => 'Medical devices and consumables play a vital role in the medical care system and have widespread functions and roles in prevention, diagnosis, and treatment of disease, along with patient rehabilitation. Some of the commonly used day-to-day medical devices and consumables in medical care and surgical centers include medical gloves, needles, syringes, staples, adhesives and sealants, scanners, anaesthesia machines and other patient monitoring devices. Manufacturers and leading companies in the industry are focused on developing advanced medical devices and consumables to cater to challenges such as rising number of surgeries, road accidents, and fractures and high demand for advanced medical devices and consumables for managing large patient pool.',
            'active' => '1',
            'vertical' => '1',
        ]);

        DB::table('categories')->insert([
            'parent_id' => 0,
            'name' => 'Agriculture',
            'thumbnail' =>'category/1650880205.webp',
            'icon' => 'fa-solid fa-tractor',
            'slug' => 'agriculture',
            'information' => 'Agriculture plays in key role in human existence and is considered to be the backbone of economic system of many developed and developing countries.  The agriculture industry has rapidly evolved over the recent years due to rapidly expanding global population and changing climatic conditions and consumer lifestyle patterns. In addition, rapid technological developments, increasing awareness about advanced farming methodologies among local farmers, and growing adoption of precision farming and drones for seeding are boosting the agriculture sector growth. Moreover, manufacturers and farmers are focused on adopting various strategies to cater to rising consumer demand and challenges such as growing demand for organic and sustainable food and increasing food wastage.',
            'active' => '1',
            'vertical' => '1',
        ]);

        DB::table('categories')->insert([
            'parent_id' => 0,
            'name' => 'Medical Care',
            'thumbnail' =>'category/1650880227.webp',
            'icon' => 'fa-solid fa-hospital-user',
            'slug' => 'medical-care',
            'information' => 'Medical care is rapidly evolving over the recent years and is expected to significantly expand during the forecast period owing to rising prevalence of various diseases, increasing trauma and emergency cases, and improving overall healthcare infrastructure. The rising healthcare spending worldwide has resulted in rapid adoption of advanced medical devices and equipment in medium to large scale clinics, hospitals and ambulatory services. Healthcare providers are constantly thriving to offer best medical care services.',
            'active' => '1',
            'vertical' => '1',
        ]);
    }
}
