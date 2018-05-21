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
/*260*******260**************************************************************************************************260*/
@media(min-width:260px){
#risoluzione{background-color:yellow;} 
/*
.container-fluid{padding:0;background-color:red;}
#coin{min-height: 100vh;padding-top: 100px; background-color:darkslategray;}
*/
#coin-container{min-height: 100vh; width:100%;text-align:center;padding: 50px 0;background-color:lightseagreen}    
#coin-title{font-size:30px;}
#coin-form{display:table;margin: 40px auto 0;} 
#coin-input{margin: 30px auto;}
#coin-img-box{display:table;height:70px;margin:30px auto;padding:10px;background-color:white;}
#coin-img{width:50px;}
#coin-result{display:table;margin:0 auto;}
#coin-descr{width:130px;text-align: right;float:left;border-right:1px solid black;}
#coin-data{width:150px;text-align: right; float:left;}
.coin-col-a{margin:0;padding-right: 8px;background-color:lightgray;}
.coin-col-b{margin:0;padding-right: 8px;background-color:whitesmoke;}
#coin-clear{clear:both;}
    #autore{margin-top: 30px;}
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
    
/*#coin{min-height: 100vh;padding-top: 100px; background-color:darkslategray;}*/
#coin-container{min-height: 100vh; width:60%;margin:auto;text-align:center;padding: 50px 0;background-color:lightseagreen}    
#coin-title{font-size:30px;}
#coin-form{display:table;margin: 40px auto 0;} 
#coin-input{margin: 30px auto;}
#coin-img-box{display:table;height:70px;margin:30px auto;padding:10px;background-color:white;}
#coin-img{width:50px;}
#coin-result{display:table; margin: 0 auto;}
#coin-descr{width:180px;text-align: right;float:left;border-right:1px solid black;}
#coin-data{width:180px;text-align: right; float:left;}
.coin-col-a{margin:0;padding-right: 8px;background-color:lightgray;}
.coin-col-b{margin:0;padding-right: 8px;background-color:whitesmoke;}
#coin-clear{clear:both;}
   #autore{margin-top: 30px;}
}
</style>                              
</head>