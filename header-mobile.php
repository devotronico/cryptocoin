<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cryptovalute</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<style type='text/css'>   
*{padding:0;margin:0;}            
html { background-color:darkslategray;
/*background:url(img_sfondo_2.jpg) no-repeat center center fixed;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;*/ 
}          
body{background-color:transparent;overflow-x:hidden;}                      
#risoluzione {
    display: none;
    position: fixed;
    left: 1px;
    bottom: 1px;
    z-index: 5000;
    padding:8px;
    font-weight: bold;
    border-radius: 50%;
}     
/*RESPONSIVE**********************************RESPONSIVE**************************************************RESPONSIVE*/
@media screen and (orientation: portrait) {
/*260*******260**************************************************************************************************260*/
@media(min-width:260px){
#risoluzione{background-color:yellow;} 

#autore{display:none;}
#coin-container{min-height: 100vh; width:100%;text-align:center;padding: 0;background-color:lightseagreen}     
#coin-title{font-size:30px;}
#coin-form{display:table;margin: 8px auto 0;} 
#coin-input{margin: 8px auto;}
#coin-img-box{display:table;height:48px;margin:2px auto;padding:4px;background-color:white;}
#coin-img{width:40px;}
#coin-result{display:table;margin:0 auto;}
#coin-descr{width:130px;text-align: right;float:left;border-right:1px solid black;}
#coin-data{width:150px;text-align: right; float:left;}
.coin-col-a{margin:0;padding-right: 8px;background-color:lightgray;}
.coin-col-b{margin:0;padding-right: 8px;background-color:whitesmoke;}
#coin-clear{clear:both;}
}    
/*576*******576***************************************************************************************************/
@media (min-width: 576px) {
#risoluzione{background-color:green;}  
}
/*768*******768***************************************************************************************************/
@media (min-width: 768px){
#risoluzione{background-color:blue;} 
}
/*992*******992***************************************************************************************************/
@media (min-width: 992px){
#risoluzione{background-color:red;} 
}
/*1200***********1200*********************************************************************************************/
@media (min-width: 1200px){  
#risoluzione{background-color:violet;}
}
}
@media screen and (orientation: landscape) {
#risoluzione{background-color:yellow;}
#coin-container{min-height:100vh;text-align:center;width:100%;background:linear-gradient(to bottom, lightseagreen, darkslategray);}
#coin-title{padding-top:35px;font-weight:bold;color:white;font-size:80px;}
#autore{display:block;padding:0px 0 50px;text-align:center;} 
#autore p{font-size:20px}
/*
.social{list-style-type:none;padding:0;margin:0;} 
.social li{display:inline;margin-right:10px;}
*/
#copyright {margin:10px;padding:10px;}     
#coin-form{display:none;}
#coin-img-box{display:none;}
#coin-result{display:none;}
}
</style>                              
</head>