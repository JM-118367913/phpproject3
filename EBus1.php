<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>
<!DOCTYPE html>
<html lang="en" xmins="http.//www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title>Shop Online</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
    
    <style>

  
 body {margin:0;}
  
 .navbar { 
     overflow: hidden; 
     background-color: #333; 
     position: fixed; 
     top: 0; 
     width: 55%; 
 }   

 .navbar a { 
     float: left;
     display: block; 
     color: #f2f2f2; 
     text-align: center;
     padding: 14px 16px; 
     text-decoration: none; 
     font-size: 17px; }  

 .navbar a:hover { 
     background: #ddd; 
     color: black; }  

 .main { padding: 16px; 
        margin-top: 30px;
        height: 1500px; } 


</style>
    
    </head>
        <body background= "BackgroundHome.jpg" 
          style= background-size:cover;>
         <div class="navbar">
           <a href="index.html">Return To Homepage</a>
            <a href="CV.html">Return To CV</a>
            <a href="tiltedpage_scroll_demo.html">Interests</a>
            <a href="ConsultingServices.html">Consulting Services</a>
            <a href="EBus1.php">Shop Calculator</a>
        </div>
        <br> <br>  <br>
            <div class="form">
            <form name="intCalc" method="post" action="Ebus2.php">
        <h1 style="text-align: center">Shop Calculator</h1>    
        <hr/>
        <center>
            <table cellspacing="10">
                <tr>
                    <td><b>Services</b></td> 
                </tr>
                <tr>
                    <td>Blockchain</td>
                    <td><input type="radio" id="CocaCola" name="rdoGroup" value="1000" /></td>
                </tr>
                <tr>
                    <td>Autonomous Things</td>
                    <td><input type="radio" id="Sprite" name="rdoGroup" value="2000" /></td>
                </tr>
                <tr>
                    <td>Immersive Experience</td>
                    <td><input type="radio" id="Fanta" name="rdoGroup" value="3000" /></td>
                </tr>
            </table>
        </center>
        <br/>
            <center>
                 <table cellspacing="10">
            <tr>
                    <td><b></b></td>
                    <td><b>Amount</b></td>
            </tr>
                <tr>
                    <td>Sub Total</td>
                    <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
                </tr>
                <tr>
                    <td>Discount @ 10%</td>
                    <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
                </tr>
                <tr>
                    <td>+ VAT @ 20%</td>
                    <td><input type="text" id="txtVAT" name="txtVAT" readonly /></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly/></td>
                </tr>
            </table>
        </center>
        
        <br />
            <center>
            <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount"/>
            <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear"/>
            <input type="submit" name="btnProceed" id="btnProceed" onclick="" value="Proceed"/>
        </center>
            </form>
        </div>
        
            <script type="text/javascript">
                function calcSub(){
                    //Assigning variables to the values
                    var subAmount = parseFloat(document.getElementById('txtSubTot').value);
                    var CocaCola = parseFloat(document.getElementById('CocaCola').value);
                    var Sprite = parseFloat(document.getElementById('Sprite').value);
                    var Fanta = parseFloat(document.getElementById('Fanta').value);
                    
                    // if radio buttons are clicked, values are assigned
                    if (document.getElementById('CocaCola').checked) {
                        document.intCalc.txtSubTot.value = CocaCola;
                        subAmount = CocaCola;
                        calculation(subAmount);
                        
                    }
                   else if (document.getElementById('Sprite').checked) {
                        document.intCalc.txtSubTot.value = Sprite;
                        subAmount = Sprite;
                        calculation(subAmount);
                        
                    }
                    else if (document.getElementById('Fanta').checked) {
                        document.intCalc.txtSubTot.value = Fanta;
                        subAmount = Fanta;
                        calculation(subAmount);
                    }
                } 
                
                //function for calculationg the values//
                function calculation(parmsTotal) {
                    var subTotal = parseFloat(parmsTotal);
                    var discCalc = parseFloat(subTotal * .30);
                    var vatCalc= parseFloat(subTotal * .40);    
                    var total = parseFloat(subTotal - discCalc + vatCalc);
                    
                    //Inserting thrm intp thr correct fields//
                    document.intCalc.txtDisc.value = discCalc;
                    document.intCalc.txtVAT.value = vatCalc;
                    document.intCalc.txtTotal.value = total;
                }
                
                function AmountClear() {
                    document.getElementById("txtSubTot").value="";
                    document.getElementById("txtDisc").value="";
                    document.getElementById("txtVAT").value="";
                    document.getElementById("txtTotal").value="";
                }
                    
            </script>
    </body>
    </html> 
    