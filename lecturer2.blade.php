<!DOCTYPE html>
<html>
	<title>Lecturer's Portal</title>
	<body>
		<style>
			
			 
			 
			 body {font-family: 'Nunito', sans-serif;}
			 a:link, a:visited {
 text-decoration:none;
  color:black;
  float: left;
  width: 30%;
  border-style:solid;
  border-radius:5px;
  border-color:green;
  padding:70px;
  margin:50px;
  text-align:center;
  background-color:white;
}
a:hover, a:active{
	background-color:green;
	color:white
}
p{width:30%;
float:left;
padding:70px;
margin:20px;
  text-align:center;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other on smaller screens (600px wide or less) */
@media screen and (max-width: 600px) {
  a, p{
    width: 100%;
  }
}
			 h3{
				
  
				text-align:center;
				padding:20px;
			 }
				
					
		</style>

     <h3>Lecturer's Portal</h3>
    <div>
		
  <a href="news.asp">Students</a>
 <a href="contact.asp">Make Announcements</a>
 
    </div>
	<div>
		<p><strong>Students' Information</strong></p>
		<p><strong>New Announcements</strong></p>
	</div>
   </body>
</html>