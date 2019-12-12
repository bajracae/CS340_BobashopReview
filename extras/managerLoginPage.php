


<!DOCTYPE html>
<html>
<head>
  <title>Manager Login Page</title>
  <!-- <link rel="stylesheet" href="managerLogin.css"> -->
  <!-- <script type="text/javascript"></script>
 -->
 <style type="text/css">
   *{
  margin: 0;
  padding:0;
}
body{
  background-color:none;
  padding-top: 25vh;
}
.form-container{
  width: 300px;
  height: auto;
  padding: 30px 40px;
  background-color: #fff;
  border-radius: 15px;
  box-shadow: 0 0 10px #000;
  margin: auto;
}
ul.list{
  list-style-type: none;
  text-align: center;

}
ul.list li{
  width: 300px;
  margin-bottom: 15px

}
ul.list li input{
  width: 300px;
  text-align: center;
  padding: 16px 0px;
  border: none;
  background-color: #d3d3d3;
}
ul.list li input[type="button"]{
  background-color: #4690fb;
  color: #bbb;
}

ul.list li:nth-child(5){
  color: red;
}

#button:hover{
    box-shadow: inset 0 -4px 0 0 rgba(0,0,0,0.6), 0 0 8px 0 rgba(0,0,0,0.5);
}

#button:focus{
    position: relative;
    top: 2px;
    box-shadow: inset 0 3px 5px 0 rgba(0,0,0, 0.2);
    outline: 0;

 </style>

</head>
  <body>
 
    <div class="form-container" >
      <ul class="list" action ="Drink.php" method="Post">
        <li>Manager Login</li>
        <li><input type="text" name="Manager Name" placeholder="Manager Name"></li>
        <li><input type="password" name="Password" placeholder="..."></li>
        <li><input type="button" id ="button" name="Submit" value="Submit"></li>
        <li><a href="managerSignUpPage.php" target="_blank">Don't have a account?</a></li>


    </div>

  </body>

</head>
  
</html>
 <!--  https://www.youtube.com/watch?v=qFzalHnpYgM -->
