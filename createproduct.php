<html>
<script type="text/javascript">
function verify()
{
	var pname = document.getElementById("pname").value;
	//alert(pname);
	if(pname.length == 0)
	{
		alert("Pname is required");
		return false;
	}
	
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange=function(){
		if(this.status == 200)
		{
			response = this.responseText;
			alert("reponse"+response+"end");
			errmsg = document.getElementById("errmsg");
			if(response === "error")
				errmsg.innerHTML = "Error in connecting to database";
			else
				if(response === "0")
					errmsg.innerHTML = "";
				else
					errmsg.innerHTML = pname+"Already exists!";
		}
	};
	var request = "getproddetails.php?pname="+pname;
	//alert(request);
	xmlhttp.open("GET", request);
	xmlhttp.send();
	return false;
}
</script>
	<body>
		<form action="">
			Productname <input type="text" name="pname" id="pname"/><input type="button" value="verify"	onclick="return verify()"/> <br/>
			<div id="errmsg"></div><br/>
			Price of the product <input type="text" name="price" id="price"/><br/>
			<input type="submit"  value="submit"/>
			
		</form>
	</body>
</html>