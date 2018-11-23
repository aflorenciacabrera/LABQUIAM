
<style>
 .nav,.nav ul 
    {
    	margin:0px;
    	padding :0px;
    	list-style :none outside none;
    	height:30px;
    }
    .nav li
    {
    	float :left;
    	width:150px;
    	position:relative;
    	height:40px;
         background:#D7DBDD;
        display:block;
      box-shadow:0px 0px 0px 0px;
      margin-left:2px;
        
     }
    .nav a
    {
    	text-decoration :none;
    	height:50px;
    	display:block ;
    	text-align :center ;
    	color:white;
    	  padding-top:10px;
    }
  
    .sub
    {
    	left:-9999px;
    	position :absolute ;
    	top:-9999px;
    	z-index :2;
    }
    
    .nav li:hover .sub
    {
    	visibility:visible ;	
    }
    .nav
    {
    	font-family :Calibri;
    	font-size :20px;
    	height:50px;
    	font-weight:bold;
    	margin:10px auto;
    	text-shadow :0 -1px 3px #000;
    	border-radius:4px;
    }
   .nav li a
   {
   	color:White ;
   	display :block;
   	line-height :24px;
   	text-decoration :none;
   	}
   	
    .nav li >a:hover
    {
    	animation:ss 0.3s linear infinite forwards;
    }
    .nav li:hover>a
    {
    	z-index:4;
    }
    .nav li:hover .sub
    {
    left:0;
    top:50px;
    width:150px;
    }
    .nav ul li
    {
    	background :none repeat scroll 0 0 #D7DBDD;
    	box-shadow:5px 5px 5px rgb(0,0,0,0.5);
    	opacity:0.3;
    	width :100%;
    }
    .nav li:hover ul li 
    {
    animation:ss1 0.0s linear 1 forwards;	
    }
    @keyframes ss1
    {
    	0%
    {
     margin-left :300px;top:900px;transform:rotate(90deg);
    }
    100%
    { 	
    margin-left :0px;top:0px;transform:rotate(360deg);
    opacity:1;	
    }
    	}

</style>

