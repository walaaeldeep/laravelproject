<!DOCTYPE html>
<html>

        <title> shopping </title>
        <meta charset="utf-8" />
        <meta  name="disciiption"contact"">
        <meta name="viewpoort"contactnt="width-device-width,intial-scale=1.0">
        <link href="css/all.min.css" rel="stylesheet">
        <link href="css1/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="ph.css">
    

  
        <body ng-app="">

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <i  id="fe" class="fa fa-user"> </i>
            
        
          <h4>أهلا بعودتك إلينا!
            تسجيل الدخول إلى حسابك
             
            </h4>

          <h6>  ليس لديك حساب ؟   
            <a class="nav-link active" aria-current="page" href="op.html">الاشتراك</a>
             </h6>
                


                  <form ng-app="" name="myForm" ng-init="myText = 'post@myweb.com'">
                    
                  <p  >The name is required.
                  <input name="myName" ng-model="myName" required>
                  <span ng-show="myForm.myName.$touched && myForm.myName.$invalid">الاسم الاولي</span>
                  </p>
                  <p>The name is required
                    <input type="lname" name="lname" ng-model="text">
                    <span ng-show="myForm.myLname.$error.lname">اسم العائله</span>
                    <p>
                  
                  <p>The name is required
                  <input name="email" ng-model="email" required>
                  <span ng-show="myForm.myEmail.$touched && myForm.myEmail.$invalid">البريد الالكتروني</span>
                  </p>
                 
              
                  <p>The name is required
                    <input name="myAddress" ng-model="myAddress" required>
                    
                    <span ng-show="myForm.myAddress.$touched && myForm.myAddress.$invalid">العنوان</span>
                  </p>
                  <p>The name is required
                    <input type="password" name="password" ng-model="password">
            
                    <select   ng-model="card-group">
                      <option >كولشين قمص وبنطلون</option>
                      <option>طقم خروج كجول</option>
                      <option >كولشين تشرات</option>
                    </select>
                    <span ng-bind="card-group"></span>
                    
                    
                  
                     
                  
                    </p>

              

                    <button class="btn btn-primary" type="button">انشاء حساب</button>
                    
        </form>

