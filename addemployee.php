<html>
	<head>
		<title>Add A New Employee</title>
		<link rel = "stylesheet" href = "css/addemployee.css" />
		<script language="Javascript" type="text/javascript">
			function onlyAlphabets(e, t) {
           		 	try {
               				if (document.event) {
               			 	    var charCode = document.event.keyCode;
               				 }
               				 else if (e) {
                   					 var charCode = e.which;
                				}
               					 else { return true; }
                			if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                   				 return true;
                			else
                   				 return false;
            				}
            			catch (err) {
                		alert(err.Description);
            			}
        		}
        		function onlyNumbers(e, t) {
           		 	try {
               				if (document.event) {
               				     var charCode = document.event.keyCode;
               				 }
               			 	else if (e) {
                   					 var charCode = e.which;
                				}
               				 	else { return true; }
                			if ((charCode > 47 && charCode < 58))
                   				 return true;
                			else
                   				 return false;
            				}
            			catch (err) {
                		alert(err.Description);
            			}
        		}
        		function onlyAlphanumeric(e, t) {
           		 	try {
               				if (document.event) {
               				     var charCode = document.event.keyCode;
               				 }
               			 	else if (e) {
                   					 var charCode = e.which;
                				}
               				 	else { return true; }
                			if ((charCode > 47 && charCode < 58) || (charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode == 32) || (charCode == 44) || (charCode == 46))
                   				 return true;
                			else
                   				 return false;
            				}
            			catch (err) {
                		alert(err.Description);
            			}
        		}
        		function onlyUserandPass(e, t) {
           		 	try {
               				if (document.event) {
               				     var charCode = document.event.keyCode;
               				 }
               			 	else if (e) {
                   					 var charCode = e.which;
                				}
               				 	else { return true; }
                			if ((charCode > 47 && charCode < 58) || (charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                   				 return true;
                			else
                   				 return false;
            				}
            			catch (err) {
                		alert(err.Description);
            			}
        		}
        		</script>
	</head>
	<body>
		<div id = "employee1">
			<header>
				<img src = "img/logo.png" alt = "Logo" />
   				<h1>NMIT HOSPITALS</h1>
				<h2>A One-Stop Solution To Keep You Healthy</h2>
			</header>
		</div>
		<div id = "employee2">
			<br />
			<form action = "addemployeeprocessing.php" method = "post">
				<h2>Enter Employee Information:</h2>
				<label for = "departmentid">Department ID:</label>
    				<input type = "text" id = "departmentid" name = "departmentid" maxlength = "2" pattern = "[0-9]{1,2}" required autocomplete = "off" onkeypress = "return onlyNumbers(event,this);" placeholder = "(Mandatory)" />
				<label for = "fname">Legal First Name:</label>
    				<input type = "text" id = "fname" name = "firstname" maxlength = "50" pattern = "[A-Za-z]{1,50}" required autocomplete = "off" onkeypress = "return onlyAlphabets(event,this);" placeholder = "(Mandatory)" />
    				<label for = "lname">Legal Last Name:</label>
   				<input type = "text" id = "lname" name = "lastname" maxlength = "50" pattern = "[A-Za-z]{1,50}" required autocomplete = "off" onkeypress = "return onlyAlphabets(event,this);" placeholder = "(Mandatory)" />
   				<br />
				<label>Date of Birth:</label>
				<select id = "dob" name = "day">
					<option value = "01">01</option>
					<option value = "02">02</option>
					<option value = "03">03</option>
					<option value = "04">04</option>
					<option value = "05">05</option>
					<option value = "06">06</option>
					<option value = "07">07</option>
					<option value = "08">08</option>
					<option value = "09">09</option>
					<option value = "10">10</option>
					<option value = "11">11</option>
					<option value = "12">12</option>
					<option value = "13">13</option>
					<option value = "14">14</option>
					<option value = "15">15</option>
					<option value = "16">16</option>
					<option value = "17">17</option>
					<option value = "18">18</option>
					<option value = "19">19</option>
					<option value = "20">20</option>
					<option value = "21">21</option>
					<option value = "22">22</option>
					<option value = "23">23</option>
					<option value = "24">24</option>
					<option value = "25">25</option>
					<option value = "26">26</option>
					<option value = "27">27</option>
					<option value = "28">28</option>
					<option value = "29">29</option>
					<option value = "30">30</option>
					<option value = "31">31</option>
				</select>
				<select id = "dob" name = "month">
					<option value = "01">01</option>
					<option value = "02">02</option>
					<option value = "03">03</option>
					<option value = "04">04</option>
					<option value = "05">05</option>
					<option value = "06">06</option>
					<option value = "07">07</option>
					<option value = "08">08</option>
					<option value = "09">09</option>
					<option value = "10">10</option>
					<option value = "11">11</option>
					<option value = "12">12</option>
				</select>
				<select id = "dob" name = "year">
					<option value = "1897">1897</option>
					<option value = "1898">1898</option>
					<option value = "1899">1899</option>
					<option value = "1900">1900</option>
					<option value = "1901">1901</option>
					<option value = "1902">1902</option>
					<option value = "1903">1903</option>
					<option value = "1904">1904</option>
					<option value = "1905">1905</option>
					<option value = "1906">1906</option>
					<option value = "1907">1907</option>
					<option value = "1908">1908</option>
					<option value = "1909">1909</option>
					<option value = "1910">1910</option>
					<option value = "1911">1911</option>
					<option value = "1912">1912</option>
					<option value = "1913">1913</option>
					<option value = "1914">1914</option>
					<option value = "1915">1915</option>
					<option value = "1916">1916</option>
					<option value = "1917">1917</option>
					<option value = "1918">1918</option>
					<option value = "1919">1919</option>
					<option value = "1920">1920</option>
					<option value = "1921">1921</option>
					<option value = "1922">1922</option>
					<option value = "1923">1923</option>
					<option value = "1924">1924</option>
					<option value = "1925">1925</option>
					<option value = "1926">1926</option>
					<option value = "1927">1927</option>
					<option value = "1928">1928</option>
					<option value = "1929">1929</option>
					<option value = "1930">1930</option>
					<option value = "1931">1931</option>
					<option value = "1932">1932</option>
					<option value = "1933">1933</option>
					<option value = "1934">1934</option>
					<option value = "1935">1935</option>
					<option value = "1936">1936</option>
					<option value = "1937">1937</option>
					<option value = "1938">1938</option>
					<option value = "1939">1939</option>
					<option value = "1940">1940</option>
					<option value = "1941">1941</option>
					<option value = "1942">1942</option>
					<option value = "1943">1943</option>
					<option value = "1944">1944</option>
					<option value = "1945">1945</option>
					<option value = "1946">1946</option>
					<option value = "1947">1947</option>
					<option value = "1948">1948</option>
					<option value = "1949">1949</option>
					<option value = "1950">1950</option>
					<option value = "1951">1951</option>
					<option value = "1952">1952</option>
					<option value = "1953">1953</option>
					<option value = "1954">1954</option>
					<option value = "1955">1955</option>
					<option value = "1956">1956</option>
					<option value = "1957">1957</option>
					<option value = "1958">1958</option>
					<option value = "1959">1959</option>
					<option value = "1960">1960</option>
					<option value = "1961">1961</option>
					<option value = "1962">1962</option>
					<option value = "1963">1963</option>
					<option value = "1964">1964</option>
					<option value = "1965">1965</option>
					<option value = "1966">1966</option>
					<option value = "1967">1967</option>
					<option value = "1968">1968</option>
					<option value = "1969">1969</option>
					<option value = "1970">1970</option>
					<option value = "1971">1971</option>
					<option value = "1972">1972</option>
					<option value = "1973">1973</option>
					<option value = "1974">1974</option>
					<option value = "1975">1975</option>
					<option value = "1976">1976</option>
					<option value = "1977">1977</option>
					<option value = "1978">1978</option>
					<option value = "1979">1979</option>
					<option value = "1980">1980</option>
					<option value = "1981">1981</option>
					<option value = "1982">1982</option>
					<option value = "1983">1983</option>
					<option value = "1984">1984</option>
					<option value = "1985">1985</option>
					<option value = "1986">1986</option>
					<option value = "1987">1987</option>
					<option value = "1988">1988</option>
					<option value = "1989">1989</option>
					<option value = "1990">1990</option>
					<option value = "1991">1991</option>
					<option value = "1992">1992</option>
					<option value = "1993">1993</option>
					<option value = "1994">1994</option>
					<option value = "1995">1995</option>
					<option value = "1996">1996</option>
					<option value = "1997">1997</option>
					<option value = "1998">1998</option>
					<option value = "1999">1999</option>
					<option value = "2000">2000</option>
					<option value = "2001">2001</option>
					<option value = "2002">2002</option>
					<option value = "2003">2003</option>
					<option value = "2004">2004</option>
					<option value = "2005">2005</option>
					<option value = "2006">2006</option>
					<option value = "2007">2007</option>
					<option value = "2008">2008</option>
					<option value = "2009">2009</option>
					<option value = "2010">2010</option>
					<option value = "2011">2011</option>
					<option value = "2012">2012</option>
					<option value = "2013">2013</option>
					<option value = "2014">2014</option>
					<option value = "2015">2015</option>
					<option value = "2016">2016</option>
					<option value = "2017">2017</option>
				</select>
				<br />
				<label for = "email">E-mail Address:</label>
   				<input type = "email" id = "email" name = "email" maxlength = "60" autocomplete = "off" placeholder = "(Mandatory)" />
   				<br />
				<label>Gender:</label>
					<input type = "radio" class = "gender" name = "gender" value = "Male" checked = "checked">Male</input>
					<input type = "radio" class = "gender" name = "gender" value = "Female">Female</input>
					<input type = "radio" class = "gender" name = "gender" value = "Other">Other</input><br />
				<br />
				<label for = "contact">Mobile Number:</label>
   					<input type = "text" id = "contact" name = "contact" maxlength = "10" pattern = "[0-9]{10}" required autocomplete = "off" onkeypress = "return onlyNumbers(event,this);" placeholder = "(Mandatory)" /><br />
				<br />
				<label for = "qualifications">Qualifications:</label>
    				<input type = "text" id = "qualifications" name = "qualifications" maxlength = "150" pattern = "[A-Za-z0-9\s]{,150}" autocomplete = "off" onkeypress = "return onlyAlphanumeric(event,this);" placeholder = "(Mandatory)" />
    				<br />
    				<label for = "username">Enter new Username:</label>
    				<input type = "text" id = "username" name = "username" maxlength = "20" pattern = "[A-Za-z0-9\s]{,20}" required autocomplete = "off" onkeypress = "return onlyUserandPass(event,this);" placeholder = "(Mandatory)" />
    				<br />
    				<label for = "password">Enter new Password:</label>
    				<input type = "text" id = "password" name = "password" maxlength = "20" pattern = "[A-Za-z0-9\s]{,20}" required autocomplete = "off" onkeypress = "return onlyUserandPass(event,this);" placeholder = "(Mandatory)" />
    				<br />
    				<input type = "submit" name = "submit" value= "Add Employee" />
			</form>
		</div>
		<div id = "employee3">
			<footer>
				<ul>
					<li>Contact number: 080-23450917, 080-23450918, 080-23450919, 080-23334565</li>
					<li>&copy; BESS Foundation for Medical Education and Research . All rights reserved.</li>
				</ul>
			</footer>
		</div>
	</body>
</html>
