<!DOCTYPE html>
<html>
<head>
	<title>Facebook</title>
	<style>
		body{
			background-color: #D8D8D8;
			font-family: arial;
		}
		.fb{
			width: 100%;
			height: 100px;
			color: white;
			font-family: arial;
			font-size: 20px;
			background-color: #3F5C9A; 
		}
		.Login{
			margin-bottom: 10px;
			font-size: 12px;
			color: white;
			float: right;
			margin-right: 130px;
		}
		.button{
			background-color: darkblue;
			color: white;
			border: black;
			font-size: 11px;
			padding: 3px;
		}
		.Keep{
			width: 10px;
		}
		input[type=text]{
			width: 180px;
			border: 1px solid;
			outline: none;
			padding: 4px;
			box-sizing: border-box;
		}
		input[type=name]{
			padding: 10px;
			font-size: 15px;
			border-radius: 3px;
			border: black;
			margin-bottom: 5px;
		}
		input[type=password]{
			padding: 10px;
			font-size: 15px;
			border-radius: 3px;
			border: black;
			margin-bottom: 5px;
		}
		img{
			width: 5%;
			margin-top: 10px;
			float: left;
			margin-left: 100px;
			background-color: #CEECF5
		}
		.Forgot{
			color: #CED8F6;
		}
		.info{
			margin-top: -300px;
			float: right;
			margin-right: 100px;
			font-size: 30px;
		}
		.text{
			margin-left: 730px;
			font-size: 33px;
		}
		.text1{
			margin-left: 730px;
			font-size: 20px;
		}
		.gender{
			margin-top: 10px;
			font-size: 15px;
			color: grey;
		}
		.G{
			font-size: 18px;
			color: black;
		}
		#formbox{
			width:5%;
			float:left;
			margin-right: 73px;
		}
		#signin{
			background-color: #088A08;
			color: white;
			width: 40%;
			size: 30px
			border: black;
			font-size: 20px;
			padding: 10px;
			border-radius: 10px;
		}
		#connect{
			margin-top: -100px;
			letter-spacing: 0px;
			font-size: 30px;
			font-family: calibri;
		}
		#icon{
			margin-top: 5px;
			font-size: 15px;
		}
		.why{
			font-size: 15px;
			margin-top: -20px;
			margin-left: 200px;
		}
		.bday{
			font-size: 25px;
			color: grey;
		}
	</style>
</head>
<body>
<div class="Login">

	<table>
		<tr>
			<td><br>Email or Phone<br><input type="text" name="Email">&emsp;
            <br><input type="checkbox" name="">Keep me log in</td>
			<td><br>Password<br><input type="text" name="Password"><br>Forgot account?&emsp;</div></td>
			<td><br>&emsp;<button class="button" name="Login"><b>Log In</b></button>&emsp; &emsp;</td>
		</tr>	
	</table>
<?php

if(isset($_POST['Login']) && ($_POST['Email']) && ($_POST['Password'])){
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];
	$sqlSelect="SELECT * FROM tblFacebook WHERE MobileNumber_Email='$Email' AND New_Password='$Password'";
    $query=mysqli_query($connect,$sqlSelect);
    $rows=mysqli_fetch_assoc($query);

    if($rows['MobileNumber_Email']==$Email && $rows['New_Password']==$Password){
    	echo '<script>alert("Log In")</script>';
    }
    else{
        echo '<script>alert("Incorrect")</script>';
    }    
}
?>
</div>
<div class="fb"><br><h1> &emsp;&emsp; &nbsp; &emsp; &emsp;<b>facebook</b></h1></div>
<div class="text"><h3>Sign Up</h3></div><div class="text1"><h4>It's quick and easy</h4></div>
<table>
<div id="connect"><h3>&emsp; &nbsp; &emsp; &emsp;Connect with friends and the<br>&emsp; &nbsp; &emsp; &emsp;world around you on Facebook.</h3></div>
<br><div id="icon"><img src="icon.jpg"><br><br><b>&emsp;See photos and Updates</b> from friends and News Feed<br><br><br>
    <div id="icon"><img src="https://cdn4.iconfinder.com/data/icons/health-bold-line-2/48/75-512.png"><br><br><b>&emsp;Share what's new</b> in your life on Timeline<br><br><br> <br><div id="icon"><img src="https://images-na.ssl-images-amazon.com/images/I/31KSwkqxXoL.png"><br><br><b>&emsp;Find more</b> of what you're looking for with Facebook search</div></div></div>
</table>
<div class="info">
	<table>
		<tr>
			<td><div class="input"><input type="name" name="firstname" placeholder="First name" size="25">&nbsp;</div></td>
			<td><div class="input"><input type="name" name="lastname" placeholder="Last name" size="25"></div></td>
		</tr>
		<table>
		<tr>
			<td><div class="input"><input type="name" name="mobile" placeholder="Mobile number or email" size="58"></div></td>
		</tr>
		</table>
		<table>
			<tr>
				<td><div class="input"><input type="password" name="pass" placeholder="New password" size="58"></div></td>
			</tr>
		</table>
		
	</table>
        <div class="formbox">
          <div class="bday">Birthday</div>
        </div>
        <div class="formbox">
          <span data-type="selectors">
            <span>
              <select title="Month"><option value="0" selected="1">Month</option><option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option></select>
              <select title="Day"><option value="0" selected="1">Day</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
              <select title="Year"><option value="0" selected="1">Year</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option></select>
            </span>
            <div class="why">Why do I need to provide my birthday?</div></div>
</td>
<tr>
	<td><div class="gender"><b>&nbsp;Gender<br></b><div></td>
	<td>&emsp; &emsp;&emsp; &emsp;<div class="G"><input type="radio" name="gender"> Female&nbsp;&nbsp;<input type="radio" name="gender">&nbsp;&nbsp;Male&nbsp;&nbsp;<input type="radio" name="gender">&nbsp;&nbsp;Custom&nbsp;&nbsp;</div></td>
</tr>
<br>
<tr>
	<div>&emsp;By clicking Sign Up, you agree to our Terms, Data Policy and <br>&emsp;Cookies Policy. You may receive SMS Notifications from us and <br>&emsp;can opt out any time.</div>
</tr>
<br>
<tr>
	<button id="signin"><b>Sign Up</b></button>
</tr>

</body>
</html>