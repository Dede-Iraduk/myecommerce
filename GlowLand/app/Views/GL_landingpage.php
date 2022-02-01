<!DOCTYPE html>
<html lang = "en">

<head>
  <meta charset = "UTF-8">
  <title> GLOWLAND</title>
  <link rel="stylesheet" href="stylelandingpage.css">
  <style>
      *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      background:darkslategray !important;
      
  }
 
  .navigationbar{
      display: flex;
      align-items: center;
      padding: 20px;
     

  }
  nav{
      flex: 1;
      text-align: right;
  }
  nav ul{
      display: inline-block;
     
      
      list-style-type: none;
 }
 nav ul li{
  display: inline-block;
  margin-right:20px;

 }
 a{
     text-decoration: none;;
     color: fuchsia;
 }
 nav ul li a:hover::after{
       width: 0%;
        height: 2px;
        background: #f44336;
        display: block;
        margin: auto;
        width: 100%;
        transition: 0.5s;
}
     p{
        color: white; 
        font-style: italic;
        font-size: large;   }

  .navcontainer{
      max-width: 1300px;
      margin: auto;
      padding-left: 25px;
      padding-right: 25px;
     
    }   
  
  .nav ul li a:hover::after{
    width: 100%;
    transition: 0.5s;
}
 .landrow{
     display: flex;
     align-items: center;
     flex-wrap: wrap;
     justify-content: space-around;
 }
.col-1{
    flex-basis: 50%;
    min-width: 300px;
}
.col-1 img{

    max-width: 100%;
    padding: 50px 0;
    background: transparent;
}
.col-1 h1{
    font-size: 70px;
    line-height: 60px;
    margin: 25px 0;

}

.btn button{
    display: inline-block;
    background-color: chocolate !important;
    /* color: chocolate !important; */
    padding :8px 30px;
    margin: 30px 0;
    border-radius: 30px;
    transform: translate(100%,30%);
}

.pics{
    margin: 140px 5px;
    background: wheat;
 
}
.row{
    margin-top: 5%;
    display: flex;
    justify-content: space-between;
}
.col-4{
flex-basis: 31%;
min-width: 250px;
margin-bottom: 30px;
flex-basis: 31%;
background: darkseagreen;
font-size: x-large;
border-radius: 10px;
margin-bottom: 5%;
padding: 20px 12px;
box-sizing: border-box;
}
  </style>
  
</head>
<body>
    <section class="header">
    <div class="navcontainer">
    <div class="navigationbar">
        <div class="logo">
        <img src = "<?php echo base_url() ?>/assets/myecommercelogo.png" alt = "Logo" height = "150%" width = "30%">
        </div>
        
    </div>
    <div class="landrow">
        <div class="col-1">
          <h1>We Promise You<br>To Glow!</h1>
          <p>step into this life with glowness, act confidently!</p>
        
         <div class="btn">
   
    <li><a class="active" href="/signin">HERE WE GO</a></li>
  </div>
        </div>
        <div class="col-1">
            <img src = "images/landpage1.jpg">
            <img src = "<?php echo base_url() ?>/assets/images/landpage1.jpg" alt = "Logo" height = "150%" width = "80%">
            </div>
    </div>
    </div>
</section>
    
    
</body>
</html>