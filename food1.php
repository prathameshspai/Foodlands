<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="food2.css">

</head>

<html>
    <head>
        <!-- <link rel="stylesheet" href="style.css"> -->
    </head>
<body style="margin: 0%;">


    <div class="head">
        <img src="foodlands.jpeg" width="100%" height="64%">
        <div class="top-right">
        <button class="button" style=" float: right;  margin-bottom: 10px; margin-top: 10px; margin-right:10px"> <span><a href="index.php?logout='1'" style="background-color: transparent !important; color: #FFF; text-decoration: none;">Sign In</a> </span> </button>
        <button class="button" style=" float: right;  margin-bottom: 10px; margin-top: 10px; margin-right:20px"> <span><a href="contact.php" style=" text-decoration: none; color: white;">Contact us</a> </span> </button>
   
    </div>
        
    </div>
       
<p style=" margin-bottom: 0%; margin-top: 1.5%; color: rgb(187, 122, 1); font-size: 50px; text-align: center;"><b>Breakfast / Snacks</b></p>
    <!-- </div> -->
   <div style=" width: 250px;display:inline-block; margin-left: 1%; margin-top: 0%;">
       <img src="dosa.jpeg" width = 230px height = 230px alt="plain dosa" class="imgstyle">
       <p style="margin-left: 16px; margin-top: 4px; margin-bottom: 0px;"><b>Plain Dosa</b></p>
       <p style="margin-left: 16px; margin-top: 4px; margin-bottom: 0px;">Made with a fermented batter of rice,pan-fried,served with tangy flavoured sambhar and coconut chutney</p>
       <p class= "montextsm" style="margin-right: 0%; margin-left: 7%;"><b>&#8377</b></p> 
       <p class="montextsm" id="dosan"><b>59</b></p>

       <br>
       <p class= "montextsm" style="margin-right: 0%; margin-left: 7%;"><b>&#8377</b></p> 
       <p class="montextsm" id="pricetot1"><b>0</b></p>
     

       <button onclick="decFunc('plaint', price.textContent, 'dosan', 'pricetot1')" class="smallbuttonm">-</button>
       <p id="plaint" class="numtext">0</p>
       <button onclick="incFunc('plaint', price.textContent, 'dosan', 'pricetot1')" class="smallbuttona">+</button>
   </div>    

   <div class="styleofMiddle">
    <img src="idli.jpeg" width = 230px height = 230px alt="Idli" class="imgstyle">
    <p class="textndesc"><b>Idli Sambhar</b></p>
    <p class="textndesc">Soft,fluffy steamed round cake made with a ground,fermented rice and lentil batter.Served with sambhar and coconut chutney.</p>

    <p class="montextsm" style="margin-right: 0%;margin-left: 4%;"><b>&#8377</b></p> 
    <p class="montextsm" id="idlin"><b>39</b></p>

    <br>
    <p class= "montextsm" style="margin-right: 0%; margin-left: 4%;"><b>&#8377</b></p> 
       <p class="montextsm" id="pricetot2"><b>0</b></p>

    <button onclick="decFunc('idlit', price.textContent, 'idlin','pricetot2')" class="smallbuttonm">-</button>
    <p id="idlit" class="numtext">0</p>
    <button onclick="incFunc('idlit', price.textContent, 'idlin','pricetot2')" class="smallbuttona">+</button>
</div>    

<div class="styleofMiddle">
    <img src="poori.jpeg" width = 230px height = 230px alt="Poori bhaji" class="imgstyle">
    <p class="textndesc"><b>Poori bhaji</b></p>
    <p class="textndesc">Pooris are deep-fried rounds of flour and bhaji a spiced potato dish which may be dry or curried. Bhaji consists of deep-fried chopped vegetables.</p>

    <p class="montextsm" style="margin-right: 0%;margin-left: 4%;"><b>&#8377</b></p> 
    <p class="montextsm" id="poorin"><b>49</b></p>
     
    <br>
    <p class= "montextsm" style="margin-right: 0%; margin-left: 4%;"><b>&#8377</b></p> 
       <p class="montextsm" id="pricetot3"><b>0</b></p>


    <button onclick="decFunc('poorit', price.textContent, 'poorin','pricetot3')" class="smallbuttonm">-</button>
    <p id="poorit" class="numtext">0</p>
    <button onclick="incFunc('poorit', price.textContent, 'poorin','pricetot3')" class="smallbuttona">+</button>
</div>    

<div class="styleofMiddle">
    <img src="cutlet.webp" width = 230px height = 230px alt="plain dosa" class="imgstyle">
    <p class="textndesc"><b>Cutlet</b></p>
    <p class="textndesc">Veg cutlet are crisp, savory, tender patties made with a mix of hearty veggies, savory spices, fresh herbs and crispy breadcrumbs.</p>


    <p class="montextsm" style="margin-right: 0%;margin-left: 4%;"><b>&#8377</b></p> 
    <p class="montextsm" id="cutletn"><b>59</b></p>

  <br>
    <p class= "montextsm" style="margin-right: 0%; margin-left: 4%;"><b>&#8377</b></p> 
       <p class="montextsm" id="pricetot4"><b>0</b></p>

    <button onclick="decFunc('cutlett', price.textContent, 'cutletn','pricetot4')" class="smallbuttonm">-</button>
    <p id="cutlett" class="numtext">0</p>
    <button onclick="incFunc('cutlett', price.textContent, 'cutletn','pricetot4')" class="smallbuttona">+</button>
</div>    

<div class="styleofMiddle">
    <img src="masaladosa.jpeg" width = 230px height = 230px alt="plain dosa" class="imgstyle">
    <p class="textndesc"><b>Masala Dosa</b></p>
    <p class="textndesc">Masala dosa is perfectly light, soft and crispy crepes stuffed with a savory, wonderfully spiced potato and onion filling.</p>
    <p class="montextsm" style="margin-right: 0%;margin-left: 4%;"><b>&#8377</b></p> 
    <p class="montextsm" id="masan"><b>79</b></p>

  <br>
    <p class= "montextsm" style="margin-right: 0%; margin-left: 4%;"><b>&#8377</b></p> 
       <p class="montextsm" id="pricetot5"><b>0</b></p>


    <button onclick="decFunc('masalat', price.textContent, 'masan','pricetot5')" class="smallbuttonm">-</button>
    <p id="masalat" class="numtext">0</p>
    <button onclick="incFunc('masalat', price.textContent, 'masan','pricetot5')" class="smallbuttona">+</button>
</div>    






<div style=" width: 250px;display:inline-block; margin-left: 1%; margin-top: 2%;">
    <img src="gulabj.jpeg" width = 230px height = 230px alt="plain dosa" class="imgstyle">
    <p class="textndesc"><b>Gulab Jamun</b></p>
    <p class="textndesc">Gulab jamun is an Indian dessert of fried dough balls that are soaked in a sweet, sticky sugar syrup.</p>
    <p class="montextsm" style="margin-right: 0%;margin-left: 4%;"><b>&#8377</b></p> 
    <p class="montextsm" id="gulabn"><b>39</b></p>

<br>
    <p class= "montextsm" style="margin-right: 0%; margin-left: 4%;"><b>&#8377</b></p> 
       <p class="montextsm" id="pricetot6"><b>0</b></p>

    <button onclick="decFunc('gulabt', price.textContent, 'gulabn','pricetot6')" class="smallbuttonm">-</button>
    <p id="gulabt" class="numtext">0</p>
    <button onclick="incFunc('gulabt',price.textContent, 'gulabn','pricetot6')" class="smallbuttona">+</button>
</div>    

<div class="styleofMiddle">
 <img src="upma.jpeg" width = 230px height = 230px alt="Idli" class="imgstyle">
 <p class="textndesc"><b>Upma</b></p>
 <p class="textndesc">Roasted rava in water that has been flavored by ghee,cashews,lentils,chana dal</p>
 <p class="montextsm" style="margin-right: 0%;margin-left: 4%;"><b>&#8377</b></p> 
 <p class="montextsm" id="upman"><b>44</b></p>

<br>
    <p class= "montextsm" style="margin-right: 0%; margin-left: 4%;"><b>&#8377</b></p> 
       <p class="montextsm" id="pricetot7"><b>0</b></p>

 <button onclick="decFunc('upmat', price.textContent, 'upman','pricetot7')" class="smallbuttonm">-</button>
 <p id="upmat" class="numtext">0</p>
 <button onclick="incFunc('upmat', price.textContent, 'upman','pricetot7')" class="smallbuttona">+</button>
</div>    

<div class="styleofMiddle">
 <img src="noodles.jpeg" width = 230px height = 230px alt="Poori bhaji" class="imgstyle">
 <p class="textndesc"><b>Noodles</b></p>
 <p class="textndesc">A very thin, long strip of pasta or a similar flour paste, eaten with a sauce or in a soup.</p>
 <p class="montextsm" style="margin-right: 0%;margin-left: 4%;"><b>&#8377</b></p> 
 <p class="montextsm" id="noodln"><b>32</b></p>

<br>
    <p class= "montextsm" style="margin-right: 0%; margin-left: 4%;"><b>&#8377</b></p> 
       <p class="montextsm" id="pricetot8"><b>0</b></p>


 <button onclick="decFunc('noodlet', price.textContent, 'noodln','pricetot8')" class="smallbuttonm">-</button>
 <p id="noodlet" class="numtext">0</p>
 <button onclick="incFunc('noodlet', price.textContent, 'noodln','pricetot8')" class="smallbuttona">+</button>
</div>    

<div class="styleofMiddle">
 <img src="coffeeimg.jpeg" width = 230px height = 230px alt="plain dosa" class="imgstyle">
 <p class="textndesc"><b>Coffee</b></p>
 <p class="textndesc">A beverage made by percolation & infusion from the roasted and ground seeds of a coffee plant. </p>
 <p class="montextsm" style="margin-right: 0%;margin-left: 4%;"><b>&#8377</b></p> 
 <p class="montextsm" id="coffn"><b>65</b></p>

<br>
    <p class= "montextsm" style="margin-right: 0%; margin-left: 4%;"><b>&#8377</b></p> 
       <p class="montextsm" id="pricetot9"><b>0</b></p>


 <button onclick="decFunc('coffeet', price.textContent, 'coffn','pricetot9')" class="smallbuttonm">-</button>
 <p id="coffeet" class="numtext">0</p>
 <button onclick="incFunc('coffeet', price.textContent, 'coffn','pricetot9')" class="smallbuttona">+</button>
</div>    

<div class="styleofMiddle">
 <img src="teaimg.jpeg" width = 230px height = 230px alt="plain dosa" class="imgstyle">
 <p class="textndesc"><b>Tea</b></p>
 <p class="textndesc">Tea is an aromatic beverage prepared by pouring hot or boiling water over leaves of Camellia sinensis.</p>
 <p class="montextsm" style="margin-right: 0%;margin-left: 4%; "><b>&#8377</b></p> 
 <p class="montextsm" id="tean"><b>65</b></p>

<br>
    <p class= "montextsm" style="margin-right: 0%; margin-left: 4%;"><b>&#8377</b></p> 
       <p class="montextsm" id="pricetot10"><b>0</b></p>

 <button onclick="decFunc('teat', price.textContent, 'tean','pricetot10')" class="smallbuttonm">-</button>
 <p id="teat" class="numtext">0</p>
 <button onclick="incFunc('teat', price.textContent, 'tean','pricetot10')" class="smallbuttona">+</button>
</div>    




<p style="margin-left:0%; margin-bottom: 0%; margin-top: 2.5%; color: rgb(187, 122, 1); font-size: 50px; text-align: center;"><b>Lunch / Dinner</b></p>

<div class="row" style="margin-top: 12px">

    
<div class="column" style=" display:inline-block; margin-left: 2%; margin-right: 5%;">

    <img src="northind-01.jpeg" width = 300px height = 250px alt="Poori bhaji" style="margin-left: 10px; margin-bottom: 0px; border-radius: 4%; position: absolute;">
    <p style=" margin-left: 325px; margin-top: 20px; margin-bottom: 0px; font-size: 30px"><b>North Indian Thali</b></p>
    <p style="margin-left: 325px; margin-top: 4px; margin-bottom: 0px; font-size: 19px;">A north Indian lunch menu with simple dal, chapati or roti, phulka, rice, a vegetable gravy, sabji and buttermilk or curd.</p>
    <p class="montextsm" style="margin-right: 0%;margin-left: 325px; font-size: 30px"><b>&#8377</b></p> 
    <p class="montextsm" id="northi" style="font-size: 30px"><b>120</b></p>

    <p class= "montextsm" style="margin-right: 0%; margin-left: 0%;font-size: 30px;">&#8377</p> 
       <p class="montextsm" id="pricetot11" style="font-size: 30px;margin-right:0px">0</p>

    <button onclick="decFunc('northtext', price.textContent,'northi', 'pricetot11')" style="display:inline-block; width: 6ch; height: 5ch;align-self: center; background-color: tomato; border-radius: 1ch;color: white;margin-left: 0px; margin-top: 0px;">-</button>
    <p id="northtext" style="font-size: 30px; display:inline-block; margin-left: 0px;align-self: center; margin-bottom: 0px; margin-right: 0px;">0</p>
    <button onclick="incFunc('northtext', price.textContent,'northi', 'pricetot11')" style="display:inline-block; width: 6ch; height: 5ch; background-color: tomato; border-radius: 1ch;color: white; margin-left: 0px; margin-top: 0px; margin-bottom: 0px;">+</button>
   </div>  

   <div class="column" style=" margin-left: 2%; margin-right: 5%;">
    <img src="south-ind.jpeg" width = 300px height = 250px alt="Poori bhaji" style="margin-left: 10px; margin-bottom: 0px;  border-radius: 4%; position: absolute;">
    <p style="display: inline-block; margin-left: 325px; margin-top: 15px; margin-bottom: 0px; font-size: 30px"><b>South Indian Thali</b></p>
    <p style="margin-left: 325px; margin-top: 4px; margin-bottom: 0px; font-size: 19px;">A South Indian lunch menu with simple dal, chapati or roti, phulka, rice, a vegetable gravy, sabji and buttermilk or curd.</p>
    <p class="montextsm" style="margin-right: 0%;margin-left: 325px; font-size: 30px"><b>&#8377</b></p> 
    <p class="montextsm" id="southi" style="font-size: 30px"><b>111</b></p>

    <p class= "montextsm" style="margin-right: 0%; margin-left: 0%;font-size: 30px;">&#8377</p> 
       <p class="montextsm" id="pricetot12" style="font-size: 30px; margin-right:0px">0</p>

    <button onclick="decFunc('southtext', price.textContent,'southi', 'pricetot12')" style="display:inline-block; width: 6ch; height: 5ch;align-self: center; background-color: tomato; border-radius: 1ch;color: white;margin-left: 6px; margin-top: 0px;">-</button>
    <p id="southtext" style="font-size: 30px; display:inline-block; margin-left: 0px;align-self: center; margin-bottom: 0px; margin-right: 0px;">0</p>
    <button onclick="incFunc('southtext', price.textContent,'southi', 'pricetot12')" style="display:inline-block; width: 6ch; height: 5ch; background-color: tomato; border-radius: 1ch;color: white; margin-left: 0px; margin-top: 0px; margin-bottom: 40px;">+</button>
   </div>  


</div>
<br>
<br>
<div style="background-color: gold">
<div style="margin-bottom: 0px;background-image: url('unfood.jpg'); background-size: 100% 125%;font-size:0px; padding-top:50px !important;">
<button onclick="incPrice()" style="display: inline-block;height: 4ch;align-self: center; background-color: rgb(187, 122, 1);border-radius: 1ch;color: white;margin-left: 45px; margin-top: 20px; margin-bottom: 35px;font-size: 30px;padding:0px !important;">Get total</button>
<p style="display: inline-block; font-size: 40px; color:white; margin-left:15px;padding:0px !important;" >&#8377</p>   
<p style="display: inline-block; font-size: 40px; color:white;padding:0px !important;" id="price" name="price">0</p>
<p style="display: inline-block; font-size: 40px; color:white;padding:0px !important; " >.00</p>

<button onclick="thecart()" style="float: right;display: inline-block;height: 4ch;align-self: center; background-color: rgb(187, 122, 1);border-radius: 1ch;color: white;margin-left: 40px; margin-top: 34px; margin-bottom: 35px;font-size: 30px; margin-right: 45px;padding-bottom: 0px">Place Order</button>
<div style="padding-bottom:20px;">   
<p name="pt" id="pt" style=" color:rgb(187, 122, 1); font-size:40px;text-indent:43px;word-spacing: 40px; margin-bottom:0px;"><b></b></p>
   <p name="p" id="p" style="color:white;margin-left:47px;font-size: 30px; word-spacing: 72px; margin-bottom:0px;padding-bottom: 0px"></p>
   </div>
</div>


    <script>
        pr=0;
        function incFunc(foodid,price,indprice, pricetottt) {
            foodqty= document.getElementById(foodid).textContent;
            k=Number(foodqty)+1;
            document.getElementById(foodid).innerHTML=k; 
            indivprice = document.getElementById(indprice).textContent;

            l=k*Number(indivprice);
            pricetot=document.getElementById(pricetottt).textContent;
            document.getElementById(pricetottt).innerHTML=l; 
            
        }

        function decFunc(fidinc, price, indprice, pricetott) {
            stri= document.getElementById(fidinc).textContent;
            if(Number(stri)>0){
            k=Number(stri)-1;
            document.getElementById(fidinc).innerHTML=k;

            indivprice = document.getElementById(indprice).textContent;
            pricetot = document.getElementById(pricetott).textContent;
            
            l=Number(pricetot)-indivprice;
            document.getElementById(pricetott).innerHTML=l;

            }
        }

        function incPrice(){
            pr=0;
            p1=Number(document.getElementById("pricetot1").textContent);
            p2=Number(document.getElementById("pricetot2").textContent);
            p3=Number(document.getElementById("pricetot3").textContent);
            p4=Number(document.getElementById("pricetot4").textContent);
            p5=Number(document.getElementById("pricetot5").textContent);
            p6=Number(document.getElementById("pricetot6").textContent);
            p7=Number(document.getElementById("pricetot7").textContent);
            p8=Number(document.getElementById("pricetot8").textContent);
            p9=Number(document.getElementById("pricetot9").textContent);
            p10=Number(document.getElementById("pricetot10").textContent);
            p11=Number(document.getElementById("pricetot11").textContent);
            p12=Number(document.getElementById("pricetot12").textContent);

            price_arr=[p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,p12];

            pr=pr+p1+p2+p3+p4+p5+p6+p7+p8+p9+p10+p11+p12;

            display = document.getElementById("price").textContent;
            document.getElementById("price").innerHTML=pr;
            cart();
        }

    </script>



<!-- <?php
// echo $_SESSION['username'];
?> -->
<!-- <?php// echo $_SESSION['username'];?> -->
<script>
    function cart(){
        
       ssp= "Food &emsp;&emsp;&emsp;&emsp;&emsp; Price &emsp;&emsp;&emsp; &nbsp;&emsp;&emsp;Qty &emsp;&emsp;&emsp;&emsp;&emsp; Total";
        document.getElementById("pt").innerHTML=ssp;

            p1=Number(document.getElementById("pricetot1").textContent);
            p2=Number(document.getElementById("pricetot2").textContent);
            p3=Number(document.getElementById("pricetot3").textContent);
            p4=Number(document.getElementById("pricetot4").textContent);
            p5=Number(document.getElementById("pricetot5").textContent);
            p6=Number(document.getElementById("pricetot6").textContent);
            p7=Number(document.getElementById("pricetot7").textContent);
            p8=Number(document.getElementById("pricetot8").textContent);
            p9=Number(document.getElementById("pricetot9").textContent);
            p10=Number(document.getElementById("pricetot10").textContent);
            p11=Number(document.getElementById("pricetot11").textContent);
            p12=Number(document.getElementById("pricetot12").textContent);


        price_arr=[p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,p12];
        title_arr=[
            "PlainDosa....",
            "IdliSambhar.", 
            "PooriBhaji...", 
            "Cutlet...........", 
            "MasalaDosa.", 
            "GulabJamun ", 
            "Upma...........", 
            "Noodles.......", 
            "Coffee.........", 
            "Tea..............",
            "NorthThali",
            "SouthThali"];

            
        qty_arr=[
            Number(document.getElementById("plaint").textContent),
            Number(document.getElementById("idlit").textContent),
            Number(document.getElementById("poorit").textContent),
            Number(document.getElementById("cutlett").textContent),
            Number(document.getElementById("masalat").textContent),

            Number(document.getElementById("gulabt").textContent),
            Number(document.getElementById("upmat").textContent),
            Number(document.getElementById("noodlet").textContent),
            Number(document.getElementById("coffeet").textContent),
            Number(document.getElementById("teat").textContent),
            Number(document.getElementById("northtext").textContent),
            Number(document.getElementById("southtext").textContent)
        ];
        
        o=document.getElementById("p").textContent;
        r="";
        
        

        for(let i=0;i<12;i++){
            if(qty_arr[i]!=0){ // Insert data given below to db
                r+=(title_arr[i]+ " &nbsp;&emsp;&emsp;&emsp;&emsp;₹"+ price_arr[i]/qty_arr[i]+"&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;"+ qty_arr[i] +" &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; ₹" +price_arr[i]+ "<br />");
                document.getElementById("p").innerHTML=r;

               
            }

        }

       
        
  
        // query="food1.php/?foodname="+title_arr[]+"&Qty"+qty_arr[];
        // location.href=query
        
    }

    function thecart(){
        
      
             p1=Number(document.getElementById("pricetot1").textContent);
             p2=Number(document.getElementById("pricetot2").textContent);
             p3=Number(document.getElementById("pricetot3").textContent);
             p4=Number(document.getElementById("pricetot4").textContent);
             p5=Number(document.getElementById("pricetot5").textContent);
             p6=Number(document.getElementById("pricetot6").textContent);
             p7=Number(document.getElementById("pricetot7").textContent);
             p8=Number(document.getElementById("pricetot8").textContent);
             p9=Number(document.getElementById("pricetot9").textContent);
             p10=Number(document.getElementById("pricetot10").textContent);
             p11=Number(document.getElementById("pricetot11").textContent);
             p12=Number(document.getElementById("pricetot12").textContent);
 
 
         price_arr=[p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,p12];
         title_arr=[
             "PlainDosa....",
             "IdliSambhar.", 
             "PooriBhaji...", 
             "Cutlet...........", 
             "MasalaDosa.", 
             "GulabJamun ", 
             "Upma...........", 
             "Noodles.......", 
             "Coffee.........", 
             "Tea..............",
             "NorthThali",
             "SouthThali"];
 
             
         qty_arr=[
             Number(document.getElementById("plaint").textContent),
             Number(document.getElementById("idlit").textContent),
             Number(document.getElementById("poorit").textContent),
             Number(document.getElementById("cutlett").textContent),
             Number(document.getElementById("masalat").textContent),
 
             Number(document.getElementById("gulabt").textContent),
             Number(document.getElementById("upmat").textContent),
             Number(document.getElementById("noodlet").textContent),
             Number(document.getElementById("coffeet").textContent),
             Number(document.getElementById("teat").textContent),
             Number(document.getElementById("northtext").textContent),
             Number(document.getElementById("southtext").textContent)
         ];
         
         o=document.getElementById("p").textContent;
         r="";
         
         
 
         for(let i=0;i<12;i++){
             if(qty_arr[i]!=0){ // Insert data given below to db
                 r+=(title_arr[i]+ " &nbsp;&emsp;&emsp;&emsp;&emsp;₹"+ price_arr[i]/qty_arr[i]+"&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;"+ qty_arr[i] +" &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; ₹" +price_arr[i]+ "<br />");
                
 
                
             }
 
         }
 
        
         alert("Dear <?php echo $_SESSION['username'] ?>, Your order has been placed successfully! Please pay ₹"+document.getElementById("price").textContent+".00 at the counter.")
   
         // query="food1.php/?foodname="+title_arr[]+"&Qty"+qty_arr[];
         // location.href=query

         incPrice();
         
     }
 
     


    </script>
    </script>
    

    <div style="margin-top: 0px;background-color:rgb(197, 122, 10);padding:3%;text-align: center;" id="foo">
        <table style="width:100%; color:white;">
            <tr>
                <th style="font-size: 2rem;padding-bottom: 1rem;">Location</th>
                <th style="font-size: 2rem;padding-bottom: 1rem;">About Us</th>
           
                <th style="padding-bottom: 1rem;"><a style="text-decoration: none;color:black;font-size: 2rem;" href="/foodlands/contact.php"><span style="color:white;">Contact Us</span></a></th>
            </tr>
            <tr>
                <td style="text-align: center;font-size: 1.5rem;">Mangalore</td>
                <td style="text-align: center;font-size: 1.5rem;">Prathamesh S Pai</td>
                <td style="text-align: center;font-size: 1.5rem;">Call Us</td>
            </tr>
            <tr>
                <td style="text-align: center;font-size: 1.5rem;">Bangalore</td>
                <td style="text-align: center;font-size: 1.5rem;">Preeth Jain</td>
                <td style="text-align: center;font-size: 1.5rem;">Whatsapp</td>
            </tr>
            <tr>
                <td style="text-align: center;font-size: 1.5rem;">Udupi</td>
                <td></td>
                <td style="text-align: center;font-size: 1.5rem;">Gmail</td>
            </tr>

            
        </table>
    </div>
</div>

</body>

</html>