@extends("index")

@section("content")
   <div class="breadcrums-container py-5" style="background-image: linear-gradient(45deg, rgb(0 0 0 / 65%), rgb(0 0 0 / 65%)),url(http://localhost/xcellentinsights/public/web/images/breadcrums/contact-us.jpg);">
    <div class="container pt-5">
        <div class="text-center mt-3">
            <h3 class="breadcrumbs-title text-white">Blog Details</h3>
        </div>
    </div>
   </div> 
      <div class="blog-container mt-5">
         <div class="container">
            <div class="row justify-content-around">

               {{-- ALL THE INDIVIDUAL BLOG CONTENT STARTS HERE --}}
               <div class="col-lg-7 blog-content-container p-4">
                  
                  <div class="blog-bg px-3 py-4 m-0" style="background-image: linear-gradient(45deg, rgb(60 59 64 / 34%), rgb(8 83 156 / 51%)),url(https://www.xcellentinsights.com/web/images/blog/1.jpg); ">
                     
                        <p class="blog-badge mb-3">Food &amp; Beverages</p>
                        <h3 class="mb-3 text-light"> Gluten Free Biscuits Companies Helping Patients with Celiac and Gluten Sensitivity To Enjoy Their Favorite Biscuit Flavors with Gluten Alternatives</h3>
                        <div class="text-light pt-2">
                              <i class="fa fa-user fa-2xs" aria-hidden="true"></i>
                              <span class="pe-2"><small>Deekshita Kothari</small></span>
                              <i class="fa-regular fa-calendar fa-2xs"></i>
                              <span class="pe-2"><small>2 weeks ago</small></span>
                              <i class="fa-regular fa-clock fa-2xs"></i>
                              <span><small>5 min read</small></span>
                        </div>
                     
                  </div>


                  <div class="blog-content mt-5">
                     <h6>Gluten: An Important Constituent in Baking :</h6>
                     <p>Gluten is a family of proteins found in grains such as wheat, barley, rye and spelt. It is a tough, elastic, and rubbery substance that is capable of stretching and rising and is a crucial factor for bakers and cooks as it provides proper texture and desired shape. Gluten acts as a binder that holds the food together and adds a stretchy quality. However, this protein is not suitable for all consumers and its consumption can result in various health-related issues. Some people react differently to gluten where the body suspects it to be a toxin, causing its immune cells to overreact and attack it. Gluten is also believed to contribute to lifestyle-associated health conditions such as obesity, cardiovascular disorders, and diabetes and over recent years, there has been a rapid increase in gluten allergies and intolerances. Around 1% of the global population is affected by celiac disease or gluten-sensitive enteropathy, an immune reaction to eating gluten while 7% of the population has gluten sensitivity. The side effects of gluten consumption can range from mild fatigue, diarrhea, and bloating to severe malnutrition, sudden weight loss, or intestinal damage.</p>
                     <h6>Gluten-Free Alternatives :</h6>
                     <p>A gluten-free diet is a primary solution for treating and controlling celiac disease, wheat allergy, gluten sensitivity, gluten ataxia, and other medical conditions related to gluten. This helps consumers to potentially avoiding inflammation in their gastrointestinal systems. Various types of gluten-free products such as pastries, biscuits, cookies bread, and cakes are currently available in the market. Gluten free products are made from ingredients such as rice flour, tapioca dextrin, sorghum, quinoa, arrowroot, amaranth, and millets among others that not make the product easy to digest but also give energy to go through busy days. One of the most commonly consumed gluten free products is biscuits and cookies that are sweet, flat, and baked bits produced from gluten-free grains. These products taste similar to normal biscuits, serve as a good vehicle to distribute nutrients to patients suffering from celiac or gluten allergy, and is a convenient and popular food appreciated by all age groups. In addition, gluten free biscuits and cookies are easy to make as compared to other gluten-free products.</p>
                     <h6>Gluten Free Biscuits Gaining Traction Among Health Conscious Public :</h6>
                     <p>Gluten free biscuits and cookies are easy to digest, help to promote weight loss, improve energy levels, lower frequent headaches, boost mood, improve skin health and strengthen the bones. Moreover, these help with bloating, reduce lactose tolerance and promote safe rise in weight. There has been a significant increase in the demand for healthy and nutritional food products due to changing lifestyle patterns and rising health concerns among the younger population. Many manufacturers are heavily investing in research and development activities to develop novel techniques and formulations as making these gluten-free biscuits is a challenge. Manufacturers are not only required to find and source alternative compounds to bind the ingredients together but also make sure that these have similar texture, appearance flavor, taste, nutrient content, and shelf-life as regular biscuits.</p>
                     <h6>Gluten Free Biscuits Manufacturers Trying to Overcome the Challenges :</h6>
                     <p>The global <a href="https://www.xcellentinsights.com/reports/gluten-free-biscuits-market-189865">gluten free biscuits market</a> is rapidly booming  due to factors such as increasing prevalence of celiac disease and gluten sensitivity across the globe, changing lifestyle preferences, rapidly expanding FMCG sector, and growing demand for healthy and nutritious gluten-free biscuits. Many manufacturers are focused on developing gluten-free food and food products such as gluten free bread, cakes, pastries, biscuits, and cookies among others. For instance, in November 2020, Northumbrian Fine Foods (NFF) announced the addition of gluten-free enrobed biscuits in orange and vanilla flavors to its product line, Prewett. Another biscuit producer and supplier, Arnott, added three gluten-free biscuit flavors; mint slice, TeeVee snacks original, and shortbread cream which are made from gluten-free flour blend made of tapioca, sorghum, soy, maize, and rice.
                     However, low awareness about gluten allergies, celiac disease, and gluten-free products, high cost of gluten free food, and lots of formulation challenges faced by manufacturers are expected to restrict overall market growth to a certain limit going ahead.
                  </p>
                  </div>
               </div>
               {{-- ALL THE INDIVIDUAL BLOG CONTENT ENDS HERE --}}
               <div class="col-lg-4">
                  <div class="search-box-blog px-5 py-3 mt-4">
                     <form class="search-bar">
                        <input type="search" placeholder="Search...">
                        <span>
                           <button type="submit">
                              <i class="fa-solid fa-magnifying-glass"></i>
                           </button>
                        </span>
                     </form>
                  </div>
                  <div class="recent-post-container px-5 py-3 mt-4">
                     <div class="recent-post-title">
                        <h5>Recent Post</h5>
                     </div>
                     <div class="recent-posts mt-5">

                        {{-- ALL THE RECENT BLOG POST STARTS --}}
                        <div class="recent-single-post ">

                           <div class="row">
                              <div class="col-lg-5">
                                 <div class="recent-post-img-box">
                                    <img class="img-fluid" src="{{asset("web/images/blog/1.jpg")}}" alt="">
                                 </div>
                              </div>
                              <div class="col-lg-7">
                                 <div class="recent-single-post-title">
                                    <a href=""><p class="mb-0">Gluten Free Biscuits Companies </p></a>
                                 </div>
                                 <div class="recent-single-post-calender">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <span class="pe-2"><small>2 weeks ago</small></span>
                                 </div>
                              </div>
                           </div>
                           <div class="row mt-5">
                              <div class="col-lg-5">
                                 <div class="recent-post-img-box">
                                    <img class="img-fluid" src="{{asset("web/images/blog/2.jpg")}}" alt="">
                                 </div>
                              </div>
                              <div class="col-lg-7">
                                 <div class="recent-single-post-title">
                                    <a href=""><p class="mb-0">Gluten Free Biscuits Companies </p></a>
                                 </div>
                                 <div class="recent-single-post-calender">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <span class="pe-2"><small>2 weeks ago</small></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        {{-- ALL THE RECENT BLOG POST ENDS --}}
                     </div>
                  </div>
                  <div class="categories-blog-page px-5 py-3 mt-4">
                     <div class="category-sidebar-title">
                        <h5>Categories</h5>
                     </div>
                     <ul class="mt-5 p-0">
                        <li><a href="#">Automobile &amp; Transportation</a></li>
                        <li><a href="#">Chemicals &amp; Materials</a></li>
                        <li><a href="#">Consumer Goods</a></li>
                        <li><a href="#">Energy &amp; Power</a></li>
                        <li><a href="#">Electronics &amp; Semiconductor</a></li>
                        <li><a href="#">Food &amp; Beverages</a></li>
                        <li><a href="#">Machinery &amp; Equipment</a></li>
                        <li><a href="#">Pharma &amp; Healthcare</a></li>
                        <li><a href="#">Service &amp; Software</a></li>
                        <li><a href="#">Other</a></li>
                        <li><a href="#">Packaging</a></li>
                        <li><a href="#">IT and Communication</a></li>
                        <li><a href="#">Technology</a></li>
                        <li><a href="#">Medical Devices &amp; Consumables</a></li>
                        <li><a href="#">Agriculture</a></li>
                        <li><a href="#">Medical Care</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
   </div>
@endsection