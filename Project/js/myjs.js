	function popupfunction(x)
	{
		document.getElementById('popup'+x).style.display='block';
		document.getElementById('fade'+x).style.display='block';
	}
	function popupclose(x)
	{
		document.getElementById('popup'+x).style.display='none';
		document.getElementById('fade'+x).style.display='none';
	}
	function addToCart(x, pid)
	{
		document.getElementById("MyCart").innerHTML += x + "<br>";
	}
	function displayCart(){
		document.getElementById("MyCart").style.display ='block';
	}