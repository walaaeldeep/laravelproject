<!DOCTYPE html>
<head>

        <title> shopping </title>
        <meta charset="utf-8" >  
        <link href="css/all.min.css" rel="stylesheet">
        <link href="css1/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="co.css">
       
      </head>
            <body ng-app=""> 
                <div class="row">
                    <div class="col-2">
                   
                  
                  
                  <div class="col-1"></div>
                  <div class="col-6">
                  
                   
                  </div>
                  </div>
                  
                  
                  <div class="col-1"></div>
                  <div class="col-2">
                  <a class="menuIcon pt d-inline-block" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                  </a>
                  </div>
                  </div>
                  </div>
                  
                  </div>
                  </header>
                  </div>
                  
                  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                  <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                  <div>
                    Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
                  </div>
                  
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </div>
                  </div>
                  </div>
        
      
                  
            <fieldset>
                <div class="form">
    
                    <div class="login-form">
                      <a href="#" class="form-cancel">
        
                     
                       
                        <i class="fas fa-times">
                       
                        
                        
                    </i>
                        
                      
                        
           
                <!--Hide Div Based on showval-->
               
                <div ng-hide="formcancel">
                  
                    <fieldset ng-app="" ng-init="price-0;qty-0">
         
                        producet:  
                            
                        <select ng-model="price"   >
                            <option value="470" >طقم بلوزه + بنطلون</option>
                            <option value="650">بلوزه +بنطلون جينس</option>
                            <option value="540"  >كردانل +بنطلون فماش</option>
                            <option value="450"  >بلوزه +بنطلون</option>
                            <option value="500" >بلوزه+جيب</option>
                            <option value="600" >بلوزه +بنطلون قماش</option>
                            <option value="340">بنطلون جنسي+جكيت</option>
                            <option value="300"  >فستان </option>
                            <option value="4000"  >جكيت+بنطلون</option>
                            <option value="3000" >ملابس جيم</option>
                            <option value="7000" >ميكروويف</option>
                            <option value="3000">تكييف</option>
                            <option value="  7000"  >غساله اوتوماتيك</option>
                            <option value="7000" >ثلاجة</option>
                            <option value="3000" >مكنسة برميلية</option>
                            <option value="699" >فرن فريش</option>
                            <option value="5000">القلايات </option>
                            <option value="3000" >الخلاط</option>
                            <option value="3000" >  Unionaire مروحه </option>
                            <option value="3000">السخانات الكهــربائيـة </option>
                            <option value=" 7000">غساله اطباق بيكو</option>
                            <option value="  8000">شاشات</option>
                            <option value="  23000">تلفيونات</option>
                            
                            

                        </select>
                       
                        <select ng-model="size" >
                            <option  value="X- s" >  SCreen </option>
                            <option value="S"> بتطلونات</option>
                            <option value="M xl"> تشراتات</option>
                            <option value="Large m x-s"> بتطلونات</option>
                            <option value="XL"> بلوزات</option>
                            <option value="xl s m">جيكت</option>
                        </select>
                       
                        Size:<input ng-model="size"/>
                        Quantity:<input ng-model="qty"/>
                        color:<input type="color" ng-model="co">
                        <br>
                     
                        <h1>price:{{price}}</h1>
                        <h1>Total:{{price * qty}}</h1>
                     
                    
                    
                        <button  class="wl">اطلب اوردر</button>
                        
           
                     
                       
                   
                          </fieldset>
                        </div>
                    </div>

                    
                </div>
                </div>
                   
               
         
           
      
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="angular-1.8.2/angular.min.js"></script>
      <script src="js/jquery-3.6.0.min.js"></script>
      <script src="co.js"></script>