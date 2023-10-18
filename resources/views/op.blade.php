<!DOCTYPE html>
<html>

        <title> shopping </title>
        <meta charset="utf-8" />
        <meta  name="disciiption"contact"">
        <meta name="viewpoort"contactnt="width-device-width,intial-scale=1.0">
        <link href="css/all.min.css" rel="stylesheet">
        <link href="css1/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="ph.css">
    

  
        <body ng-app="Myapp">

          <i  id="fe" class="fa fa-user"> </i>
            
        
          <h4>أهلا بعودتك إلينا!
            تسجيل الدخول إلى حسابك
             
            </h4>

          <h6>  ليس لديك حساب ؟   
            <a class="nav-link active" aria-current="page" href="#">الاشتراك</a>
             </h6>
                


                  <form name="myForm">
                 
                  
                  <p>The name is required
                  <input name="email" ng-model="email" required>
                  <span ng-show="myForm.myEmail.$touched && myForm.myEmail.$invalid">البريد الالكتروني</span>
                  </p>
                 
              
                
                  <p>The name is required
                   
                     <input type="password" ng-model="password">
                     <span ng-show="myForm.myPassword.$touched && myForm.myPassword.$invalid">كلمه السر</span>
                  
                    </p>

              
                    <button class="btn btn-primary" type="button">تسجيل الدخول</button>
            
                 
                   
                  
                  </form>
         

           
          
                
     

             
              
             
              <script src="js/bootstrap.bundle.min.js"></script>
              <script src="angular-1.8.2/angular.min.js"></script>
              <script src="jj.js"></script>