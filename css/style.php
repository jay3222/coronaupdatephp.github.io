<style type="text/css">
	
*{
	margin:0px;
	padding:0px;
	box-sizing: border-box;
	font-family: 'Roboto', sans-serif;
}
html{
	scroll-behavior:smooth;
}

  #loading {
	position: fixed;
	width: 100%;
	height: 100vh;
	background:white

	url('images/1.gif')
	 no-repeat center center ;	
	z-index: 99999;}

	.header_top{
		background:black linear-gradient(to right, rgba(156, 39, 176, 0.2), rgba(156, 39, 176, 0.7),rgba(156, 39, 176, 1));
		width:100%;
		height: 100vh;
	background-size: cover;
	background-repeat: no-repeat;
	background-position:center;
	background-attachment:fixed;

		
	}
	.animation {
  animation-duration: 3s;
  
  animation-iteration-count: infinite;
}

.navbar_style{
	
}

.navbar_style a{
	color:white;
}

.owl-carousel{
	transform:rotate(0deg);
}


.owl-dots  {
	display:none;
}

.owl-nav{
	display: none;
}
.owl-carousel img{
	width:100%;
	height:auto;
}

.coronaupdate img{
	width:120px;height:70px;border-radius:10%;
}


	#myBtn{
			 			display:none;
			 			position:fixed;
			 			bottom:50px;
			 			right:20px;
			 			z-index:99;
			 			border:none;
			 			color:white;
			 			background-color:red;
			 			padding:10px;
			 			
			 		}
			 		#myBtn:hover{background-color:white;color:red;border: 1px solid red}
</style>