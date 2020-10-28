
@extends('admin.admin_index') 

@section('allproducts') 

<div class="main-panel">
 <div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Products Table <a class="btn btn-lg btn-success" style="float:right;color:white" href="{{route('add_products')}}">+ Add Product</a></h4>
                    <br><br>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        Images
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Delete
                                    </th>
                                    <th>
                                        Price
                                    </th>
                                    <th>
                                        Description
                                    </th>
                                    <th>
                                        Category
                                    </th>
                                    
                                    <th>
                                        Update
                                    </th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                 <tr>
                                    <td>
                                        <img src="../uploads/products/15/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/15" class="btn btn-warning">Canon PowerShot SX730</a>
                                    </td>
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/delete/15"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        31500
                                    </td>
                                    <td>
                                        &lt;p&gt;Model - Canon PowerShot SX730 HS&lt;br /&gt;Resolution (MP) - 20.3 Mega pixels&lt;br /&gt;Display (Inch) - 3&quot; TFT Color LCD Display&lt;br /&gt;Optical Zoom (X) - 40x&lt;br /&gt;Battery - NB-13L Battery&lt;/p&gt;
                                    </td>
                                    <td>
                                        Camera
                                    </td>
                                    
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/15" class="btn btn-warning">Edit</a> </td>
                                     
                                </tr>
                                                            <tr>
                                    <td>
                                        <img src="../uploads/products/18/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/18" class="btn btn-warning">ADATA 20100 mAh</a>
                                    </td>
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/delete/18"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        2500
                                    </td>
                                    <td>
                                        &lt;ul&gt;
                                        &lt;li&gt;Battery type: Rechargeable Lithium-ion battery&lt;/li&gt;
                                        &lt;li&gt;Special features: Dual USB ports&lt;/li&gt;
                                        &lt;li&gt;Other features: 20100 mAh. LED Flashlight&lt;/li&gt;
                                        &lt;li&gt;Input: DC 5V/2A&lt;/li&gt;
                                        &lt;li&gt;Output: DC 5V/2.1A max&lt;/li&gt;
                                        &lt;/ul&gt;
                                    </td>
                                    <td>
                                        Powerbank
                                    </td>
                                    
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/18" class="btn btn-warning">Edit</a> </td>
                                     
                                </tr>
                                                            <tr>
                                    <td>
                                        <img src="../uploads/products/1/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/1" class="btn btn-warning">Apple MacBook Pro (2018)</a>
                                    </td>
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/delete/1"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        214200
                                    </td>
                                    <td>
                                        &lt;div class=&quot;ng-scope&quot;&gt;
                                        &lt;p&gt;Processor - Six Core Intel Core i7&lt;br /&gt;Processor Clock Speed - 2.2-4.1GHz&lt;br /&gt;Display Size - 15.4&quot;&lt;br /&gt;RAM - 16GB&lt;br /&gt;RAM Type - DDR4 2400MHz (Onboard)&lt;br /&gt;Storage - 256GB SSD&lt;/p&gt;
                                        &lt;/div&gt;
                                    </td>
                                    <td>
                                        Computer
                                    </td>
                                    
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/1" class="btn btn-warning">Edit</a> </td>
                                     
                                </tr>
                                                            <tr>
                                    <td>
                                        <img src="../uploads/products/3/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/3" class="btn btn-warning">HP Probook X360 440 G1</a>
                                    </td>
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/delete/3"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        94920
                                    </td>
                                    <td>
                                        &lt;div class=&quot;ng-scope&quot;&gt;
                                        &lt;p&gt;Generation - 8th Gen&lt;br /&gt;Processor - Intel Core i7 8550U&lt;br /&gt;Processor Clock Speed - 1.80-4.0GHz&lt;br /&gt;Display Size - 14&quot;&lt;br /&gt;RAM - 8GB&lt;br /&gt;RAM Type - DDR4&lt;br /&gt;Storage - 512GB SSD&lt;br /&gt;Operating System - Free Dos&lt;/p&gt;
                                        &lt;/div&gt;
                                    </td>
                                    <td>
                                        Computer
                                    </td>
                                    
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/3" class="btn btn-warning">Edit</a> </td>
                                     
                                </tr>
                                                            <tr>
                                    <td>
                                        <img src="../uploads/products/5/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/5" class="btn btn-warning">Google Pixel 3 (64 GB)</a>
                                    </td>
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/delete/5"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        71900
                                    </td>
                                    <td>
                                        &lt;div class=&quot;ng-scope&quot;&gt;
                                        &lt;ul class=&quot;i8Z77e&quot;&gt;
                                        &lt;li class=&quot;TrT0Xe&quot;&gt;Processor: Qualcomm Snapdragon 845 2.5 GHz quad-core.&lt;/li&gt;
                                        &lt;li class=&quot;TrT0Xe&quot;&gt;Display: 5.5 inch, 2160x1080-pixel&lt;/li&gt;
                                        &lt;li class=&quot;TrT0Xe&quot;&gt;Operating system: Android 9 Pie.&lt;/li&gt;
                                        &lt;li class=&quot;TrT0Xe&quot;&gt;RAM: 4GB LPDDR4.&lt;/li&gt;
                                        &lt;li class=&quot;TrT0Xe&quot;&gt;Storage: 64GB internal.&lt;/li&gt;
                                        &lt;li class=&quot;TrT0Xe&quot;&gt;Cameras: 12.2-megapixel rear f/1.8 dual-pixel&lt;/li&gt;
                                        &lt;/ul&gt;
                                        &lt;/div&gt;
                                    </td>
                                    <td>
                                        Smart Phone
                                    </td>
                                    
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/5" class="btn btn-warning">Edit</a> </td>
                                     
                                </tr>
                                                            <tr>
                                    <td>
                                        <img src="../uploads/products/11/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/11" class="btn btn-warning">Canon EOS 6D Mark II</a>
                                    </td>
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/delete/11"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        105530
                                    </td>
                                    <td>
                                        &lt;p&gt;Model - Canon 6D Mark II&lt;br /&gt;Mega Pixels - 26.2 Megapixels&lt;br /&gt;Lens Mount - Canon EF Lens&lt;br /&gt;Processor - DIGIC 7&lt;br /&gt;Sensor Type - CMOS Senso&lt;/p&gt;
                                    </td>
                                    <td>
                                        Camera
                                    </td>
                                    
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/11" class="btn btn-warning">Edit</a> </td>
                                     
                                </tr>
                                                            <tr>
                                    <td>
                                        <img src="../uploads/products/19/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/19" class="btn btn-warning">Joyroom ZHI 10000 mAh</a>
                                    </td>
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/delete/19"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        3300
                                    </td>
                                    <td>
                                        &lt;ul&gt;
                                        &lt;li&gt;Input：5V 2A&lt;/li&gt;
                                        &lt;li&gt;Output：5V 2.1A&lt;/li&gt;
                                        &lt;li&gt;Power: 10000 mAh&lt;/li&gt;
                                        &lt;li&gt;Digital Display&lt;/li&gt;
                                        &lt;li&gt;LED Lighting&lt;/li&gt;
                                        &lt;/ul&gt;
                                    </td>
                                    <td>
                                        Powerbank
                                    </td>
                                    
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/19" class="btn btn-warning">Edit</a> </td>
                                     
                                </tr>
                                                            <tr>
                                    <td>
                                        <img src="../uploads/products/20/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/20" class="btn btn-warning">Astrum 10000mAh</a>
                                    </td>
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/delete/20"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        1500
                                    </td>
                                    <td>
                                        &lt;ul&gt;
                                        &lt;li&gt;Battery: 10000mAh capacity li-polymer&lt;/li&gt;
                                        &lt;li&gt;Connectors: 2 x USB Port&lt;/li&gt;
                                        &lt;li&gt;Ouput: 1 - 5V 1A / 2 - 5V 2.1A&lt;/li&gt;
                                        &lt;li&gt;Input: 5V 2A&lt;/li&gt;
                                        &lt;/ul&gt;
                                    </td>
                                    <td>
                                        Powerbank
                                    </td>
                                    
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/20" class="btn btn-warning">Edit</a> </td>
                                     
                                </tr>
                                                            <tr>
                                    <td>
                                        <img src="../uploads/products/21/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/21" class="btn btn-warning">Mi 10000 mAh v2</a>
                                    </td>
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/delete/21"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        1300
                                    </td>
                                    <td>
                                        &lt;ul&gt;
                                        &lt;li&gt;&lt;span class=&quot;a-list-item&quot;&gt;10000mAH lithium-polymer battery&lt;/span&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;span class=&quot;a-list-item&quot;&gt;Dual USB Output, Two- way Quick Charge&lt;/span&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;span class=&quot;a-list-item&quot;&gt;Material: Aluminium Alloy + CNC Edge&lt;/span&gt;&lt;/li&gt;
                                        &lt;li class=&quot;&quot; data-spm-anchor-id=&quot;a2a0e.pdp.product_detail.i0.4bd16c33R4IjnQ&quot;&gt;Temperature Resistance&lt;/li&gt;
                                        &lt;li class=&quot;&quot; data-spm-anchor-id=&quot;a2a0e.pdp.product_detail.i1.4bd16c33R4IjnQ&quot;&gt;Protection from Short Circuit&lt;/li&gt;
                                        &lt;li class=&quot;&quot; data-spm-anchor-id=&quot;a2a0e.pdp.product_detail.i2.4bd16c33R4IjnQ&quot;&gt;Reset Mechanism&lt;/li&gt;
                                        &lt;/ul&gt;
                                    </td>
                                    <td>
                                        Powerbank
                                    </td>
                                    
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/21" class="btn btn-warning">Edit</a> </td>
                                     
                                </tr>
                                                            <tr>
                                    <td>
                                        <img src="../uploads/products/22/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/22" class="btn btn-warning">Apple Watch Series 4</a>
                                    </td>
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/delete/22"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        44300
                                    </td>
                                    <td>
                                        &lt;p&gt;Model - Apple Watch Series 4&lt;br /&gt;Watch Dimension - 40 x 34 x 10.7mm&lt;br /&gt;Display Size - 1.57&quot;&lt;br /&gt;Connectivity - WiFi, Bluetooth, GPS&lt;/p&gt;
                                    </td>
                                    <td>
                                        Smartwatch
                                    </td>
                                    
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/22" class="btn btn-warning">Edit</a> </td>
                                     
                                </tr>
                                                            <tr>
                                    <td>
                                        <img src="../uploads/products/23/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/23" class="btn btn-warning">Mi Amazfit Bip</a>
                                    </td>
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/delete/23"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        6100
                                    </td>
                                    <td>
                                        &lt;div class=&quot;short-description&quot;&gt;
                                        &lt;div class=&quot;std&quot;&gt;Model - Mi Amazfit Bip&lt;br /&gt;Display Size - 1.28&quot;&lt;br /&gt;Connectivity - WiFi, Bluetooth, GPS&lt;/div&gt;&lt;/div&gt;
                                    </td>
                                    <td>
                                        Smartwatch
                                    </td>
                                    
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/23" class="btn btn-warning">Edit</a> </td>
                                     
                                </tr>
                                                            <tr>
                                    <td>
                                        <img src="../uploads/products/24/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/24" class="btn btn-warning">Garmin fenix 5 Sapphire</a>
                                    </td>
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/delete/24"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        45000
                                    </td>
                                    <td>
                                        &lt;ul&gt;
                                        &lt;li&gt;Display: 1.2&amp;rdquo; (240 x 240)&lt;/li&gt;
                                        &lt;li&gt;Display type: Sunlight-visible, transflective memory-in-pixel (MIP)&lt;/li&gt;
                                        &lt;li&gt;Memory: 64MB&lt;/li&gt;
                                        &lt;li&gt;Lens Material: chemically strengthened glass or sapphire crystal&lt;/li&gt;
                                        &lt;li&gt;Bezel Material: Stainless steel&lt;/li&gt;
                                        &lt;li&gt;Strap material: silicone&lt;/li&gt;
                                        &lt;/ul&gt;
                                    </td>
                                    <td>
                                        Smartwatch
                                    </td>
                                    
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/24" class="btn btn-warning">Edit</a> </td>
                                     
                                </tr>
                                                            <tr>
                                    <td>
                                        <img src="../uploads/products/25/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/25" class="btn btn-warning">Beats PILL Plus</a>
                                    </td>
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/delete/25"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        21000
                                    </td>
                                    <td>
                                        SKU: RAMBPSHSP

                                        Brand: Beats

                                        Active 2-way crossove
                                    </td>
                                    <td>
                                        Speaker
                                    </td>
                                    
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/25" class="btn btn-warning">Edit</a> </td>
                                     
                                </tr>
                                                            <tr>
                                    <td>
                                        <img src="../uploads/products/26/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/26" class="btn btn-warning">JBL Omni 50+</a>
                                    </td>
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/delete/26"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        46730
                                    </td>
                                    <td>
                                        &lt;p&gt;&amp;lt;h2&amp;gt;Model - JBL by Harman/Kardon Omni 50+&amp;lt;br /&amp;gt;Type - Wireless HD Indoor/Outdoor Speaker with Rechargeable Battery&amp;lt;/h2&amp;gt;&lt;/p&gt;
                                    </td>
                                    <td>
                                        Speaker
                                    </td>
                                    
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/26" class="btn btn-warning">Edit</a> </td>
                                     
                                </tr>
                                                            <tr>
                                    <td>
                                        <img src="../uploads/products/27/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/27" class="btn btn-warning">Edifier S350DB 2.1</a>
                                    </td>
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/delete/27"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        31500
                                    </td>
                                    <td>
                                        &lt;p&gt;Model - Edifier S350DB&lt;br /&gt;Type - Modern Powered Bluetooth Bookshelf Speaker&lt;br /&gt;Channel - 2.1&lt;br /&gt;RMS/Channel (Watt) - 15Watt x 2 (Treble) + 25Watt x 2 (midrange and bass)&lt;br /&gt;RMS/Subwoofer (Watt) - 70Watt&lt;/p&gt;
                                    </td>
                                    <td>
                                        Speaker
                                    </td>
                                    
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/27" class="btn btn-warning">Edit</a> </td>
                                     
                                </tr>
                                                            <tr>
                                    <td>
                                        <img src="../uploads/products/28/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/28" class="btn btn-warning">JBL Xtreme 2 Portable</a>
                                    </td>
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/delete/28"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        25400
                                    </td>
                                    <td>
                                        &lt;p&gt;Model - JBL Xtreme 2&lt;br /&gt;Type - Portable Bluetooth Speaker&lt;br /&gt;Lithium-ion Polymer 36Wh (Equivalent to 3.7V 10000mAh)&lt;br /&gt;Wirelessly connect&lt;br /&gt;2 smartphones or tablets&lt;br /&gt;charges device via an USB port&lt;/p&gt;
                                    </td>
                                    <td>
                                        Speaker
                                    </td>
                                    
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/28" class="btn btn-warning">Edit</a> </td>
                                     
                                </tr>
                                                            <tr>
                                    <td>
                                        <img src="../uploads/products/30/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/30" class="btn btn-warning">APPLE Magic Mouse 2</a>
                                    </td>
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/delete/30"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        11050
                                    </td>
                                    <td>
                                        &lt;p&gt;Model - APPLE Magic Mouse 2&lt;br /&gt;Type - Magic Mouse&lt;br /&gt;Connectivity - Wireless&lt;br /&gt;Rechargable&lt;/p&gt;
                                    </td>
                                    <td>
                                        Accessory
                                    </td>
                                    
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/30" class="btn btn-warning">Edit</a> </td>
                                     
                                </tr>
                                                            <tr>
                                    <td>
                                        <img src="../uploads/products/31/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/31" class="btn btn-warning">Rapoo 3600 Silent</a>
                                    </td>
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/delete/31"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        1050
                                    </td>
                                    <td>
                                        &lt;ul&gt;
                                        &lt;li&gt;Connection: 2.4GHz Wireless&lt;/li&gt;
                                        &lt;li&gt;Tracking method: Optical&lt;/li&gt;
                                        &lt;li&gt;Keys amount: 3&amp;nbsp;&lt;/li&gt;
                                        &lt;li&gt;Keys travel: 0.8mm&lt;/li&gt;
                                        &lt;li&gt;Acceleration: 20G&lt;/li&gt;
                                        &lt;li&gt;Resolution: 1000DPI&lt;/li&gt;
                                        &lt;li&gt;Voltage: 1.5V&lt;/li&gt;
                                        &lt;/ul&gt;
                                    </td>
                                    <td>
                                        Accessory
                                    </td>
                                    
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/31" class="btn btn-warning">Edit</a> </td>
                                     
                                </tr>
                                                            <tr>
                                    <td>
                                        <img src="../uploads/products/34/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/34" class="btn btn-warning">Corsair STRAFE Mechanical</a>
                                    </td>
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/delete/34"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        11000
                                    </td>
                                    <td>
                                        &lt;p&gt;Model - Corsair STRAFE Mechanical&lt;br /&gt;Type - RED LED Backlight Gaming Keyboard&lt;br /&gt;Interface - USB&lt;/p&gt;
                                    </td>
                                    <td>
                                        Accessory
                                    </td>
                                    
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/34" class="btn btn-warning">Edit</a> </td>
                                     
                                </tr>
                                                            <tr>
                                    <td>
                                        <img src="../uploads/products/35/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/35" class="btn btn-warning">APPLE MAGIC KEYBOARD</a>
                                    </td>
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/delete/35"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        9700
                                    </td>
                                    <td>
                                        APPLE MAGIC KEYBOARD (MLA22ZA/A, MLA22LL/A)
                                    </td>
                                    <td>
                                        Accessory
                                    </td>
                                    
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/35" class="btn btn-warning">Edit</a> </td>
                                     
                                </tr>
                                                            <tr>
                                    <td>
                                        <img src="../uploads/products/36/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/36" class="btn btn-warning">MSI GT75VR 7RE TITAN</a>
                                    </td>
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/delete/36"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        254630
                                    </td>
                                    <td>
                                        &lt;p&gt;Generation - 7th Gen&lt;br /&gt;Processor - Intel Core i7 7820HK&lt;br /&gt;Processor Clock Speed - 2.90-3.90GHz&lt;br /&gt;Display Size - 17.3&quot;&lt;br /&gt;RAM - 32GB&lt;br /&gt;RAM Type - DDR4 2400MHz&lt;br /&gt;Storage - 1TB HDD + 256GB NVMe SSD&lt;/p&gt;
                                    </td>
                                    <td>
                                        Computer
                                    </td>
                                    
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/36" class="btn btn-warning">Edit</a> </td>
                                     
                                </tr>
                                                            <tr>
                                    <td>
                                        <img src="../uploads/products/37/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/37" class="btn btn-warning">Asus ROG G752VS(KBL)</a>
                                    </td>
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/delete/37"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        231420
                                    </td>
                                    <td>
                                        &lt;p&gt;Generation - 7th Gen&lt;br /&gt;Processor - Intel Core i7 7700HQ&lt;br /&gt;Processor Clock Speed - 2.80GHz&lt;br /&gt;Display Size - 17.3&quot;&lt;br /&gt;RAM - 32GB&lt;br /&gt;RAM Type - DDR4&lt;br /&gt;HDD - 2TBHDD+512GB SSD&lt;br /&gt;Operating System - Endless&lt;/p&gt;
                                    </td>
                                    <td>
                                        Computer
                                    </td>
                                    
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/37" class="btn btn-warning">Edit</a> </td>
                                     
                                </tr>
                                                            <tr>
                                    <td>
                                        <img src="../uploads/products/38/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/38" class="btn btn-warning">Microsoft Surface Pro</a>
                                    </td>
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/delete/38"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        202650
                                    </td>
                                    <td>
                                        &lt;p&gt;Generation - 8th Gen&lt;br /&gt;Processor - Intel Core i7 8650U&lt;br /&gt;Processor Clock Speed - 1.90-4.20GHz&lt;br /&gt;Display Size - 12.3&quot;&lt;br /&gt;RAM - 16GB&lt;br /&gt;Storage - 512GB SSD&lt;br /&gt;Operating System - Windows 10 Home&lt;/p&gt;
                                    </td>
                                    <td>
                                        Tab
                                    </td>
                                    
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/38" class="btn btn-warning">Edit</a> </td>
                                     
                                </tr>
                                                            <tr>
                                    <td>
                                        <img src="../uploads/products/39/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/39" class="btn btn-warning">HP Spectre 13-V113TU</a>
                                    </td>
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/delete/39"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        126300
                                    </td>
                                    <td>
                                        &lt;p&gt;Model - HP Spectre 13-V113TU&lt;br /&gt;Processor - Intel Core i5 7200U&lt;br /&gt;Generation - 7th Gen&lt;br /&gt;Processor Clock Speed - 2.50-3.10GHz&lt;br /&gt;Display Size - 13.3&quot;&lt;br /&gt;RAM - 8GB&lt;br /&gt;RAM Type - LPDDR3 1866 On-Board&lt;/p&gt;
                                    </td>
                                    <td>
                                        Computer
                                    </td>
                                    
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/39" class="btn btn-warning">Edit</a> </td>
                                     
                                </tr>
                                                            <tr>
                                    <td>
                                        <img src="../uploads/products/40/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/40" class="btn btn-warning">Asus GL503VM Core i7</a>
                                    </td>
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/delete/40"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        157920
                                    </td>
                                    <td>
                                        &lt;p&gt;Generation - 7th Gen&lt;br /&gt;Processor - Intel Core i7 7700HQ&lt;br /&gt;Processor Clock Speed - 2.80GHz&lt;br /&gt;Display Size - 15.6&quot;&lt;br /&gt;RAM - 16GB&lt;br /&gt;RAM Type - DDR4&lt;/p&gt;
                                    </td>
                                    <td>
                                        Computer
                                    </td>
                                    
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/40" class="btn btn-warning">Edit</a> </td>
                                     
                                </tr>
                                                            <tr>
                                    <td>
                                        <img src="../uploads/products/42/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/42" class="btn btn-warning">Skullcandy Over-Ear</a>
                                    </td>
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/delete/42"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        14000
                                    </td>
                                    <td>
                                        &lt;ul&gt;
                                        &lt;li&gt;Type: Over-Ear&lt;/li&gt;
                                        &lt;li&gt;Connection Type: Bluetooth&amp;reg; or Wired&lt;/li&gt;
                                        &lt;li&gt;Battery Life: Up to 40 Hours&lt;/li&gt;
                                        &lt;li&gt;Rapid Charge: 10 Min = 3 Hours of Play&lt;/li&gt;
                                        &lt;li&gt;Noise Isolation: Passive&lt;/li&gt;
                                        &lt;li&gt;Driver Size: 40mm&lt;/li&gt;
                                        &lt;/ul&gt;
                                    </td>
                                    <td>
                                        Headphone
                                    </td>
                                    
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/42" class="btn btn-warning">Edit</a> </td>
                                     
                                </tr>
                                                            <tr>
                                    <td>
                                        <img src="../uploads/products/44/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/44" class="btn btn-warning">DualShock 4 Wireless</a>
                                    </td>
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/delete/44"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        3699
                                    </td>
                                    <td>
                                        SKU HRDDASCPLU

                                            Weight 0.2100

                                            Brand Sony
                                    </td>
                                    <td>
                                        Gaming
                                    </td>
                                    
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/44" class="btn btn-warning">Edit</a> </td>
                                     
                                </tr>
                                                            <tr>
                                    <td>
                                        <img src="../uploads/products/45/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/45" class="btn btn-warning">Huawei MediaPad T3</a>
                                    </td>
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/delete/45"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        19900
                                    </td>
                                    <td>
                                        &lt;p&gt;Model - Huawei MediaPad T3 10&lt;br /&gt;Processor Type - Qualcomm MSM8917 Quad Core A53&lt;br /&gt;RAM - 2GB&lt;br /&gt;Processor Speed - 1.4GHz&lt;br /&gt;Internal Memory - 16GB ROM&lt;br /&gt;Display Type - IPS display&lt;br /&gt;Display Size - 9.6&quot;&lt;br /&gt;Screen Resolution - 1280 x 800&lt;/p&gt;
                                    </td>
                                    <td>
                                        Tab
                                    </td>
                                    
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/45" class="btn btn-warning">Edit</a> </td>
                                     
                                </tr>
                                                            <tr>
                                    <td>
                                        <img src="../uploads/products/41/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/41" class="btn btn-warning">asus zenfone 5z</a>
                                    </td>
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/delete/41"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        49000
                                    </td>
                                    <td>
                                        &lt;p&gt;Dimensions 153 x 75.7 x 7.9 mm&lt;/p&gt;
                                        &lt;p&gt;Weight 155 g (5.47 oz)&lt;/p&gt;
                                        &lt;p&gt;Hybrid Dual SIM&lt;/p&gt;
                                        &lt;p&gt;DISPLAY Type IPS LCD&lt;/p&gt;
                                        &lt;p&gt;Resolution 1080 x 2246 pixels,&lt;/p&gt;
                                        &lt;p&gt;18.7:9 ratio (~402 ppi density) OS Android 8.0 (Oreo)&lt;/p&gt;
                                        &lt;p&gt;Chipset Qualcomm SDM845 Snapdragon 845&lt;/p&gt;
                                        &lt;p&gt;GPU Adreno 630&lt;/p&gt;
                                    </td>
                                    <td>
                                        Smart Phone
                                    </td>
                                    
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/41" class="btn btn-warning">Edit</a> </td>
                                     
                                </tr>
                                                            <tr>
                                    <td>
                                        <img src="../uploads/products/2/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/2" class="btn btn-warning">Belt</a>
                                    </td>
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/delete/2"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        1000
                                    </td>
                                    <td>
                                        Belt Description
                                    </td>
                                    <td>
                                        Accessory
                                    </td>
                                    
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/2" class="btn btn-warning">Edit</a> </td>
                                     
                                </tr>
                                                            <tr>
                                    <td>
                                        <img src="../uploads/products/4/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/4" class="btn btn-warning">test Belt</a>
                                    </td>
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/delete/4"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        1000
                                    </td>
                                    <td>
                                        Belt Description
                                    </td>
                                    <td>
                                        Accessory
                                    </td>
                                    
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/4" class="btn btn-warning">Edit</a> </td>
                                     
                                </tr>
                                                            <tr>
                                    <td>
                                        <img src="../uploads/products/6/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/6" class="btn btn-warning">test Belt</a>
                                    </td>
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/delete/6"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        1000
                                    </td>
                                    <td>
                                        Belt Description
                                    </td>
                                    <td>
                                        Accessory
                                    </td>
                                    
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/6" class="btn btn-warning">Edit</a> </td>
                                     
                                </tr>
                                                            <tr>
                                    <td>
                                        <img src="../uploads/products/7/1.jpg" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                       <a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/7" class="btn btn-warning">test Belt</a>
                                    </td>
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/delete/7"class="btn btn-danger">Delete</a></td>
                                    <td>
                                        1000
                                    </td>
                                    <td>
                                        Belt Description
                                    </td>
                                    <td>
                                        Accessory
                                    </td>
                                    
                                    <td><a href="https://laravel-ecommerce-eshop.herokuapp.com/admin_panel/products/edit/7" class="btn btn-warning">Edit</a> </td>
                                     
                                </tr>
                                                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection