<?php
include 'home(header).php';

?>
<!doctype html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="home.css" rel="stylesheet" type="text/css">
<title> Hospital Service </title>
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}

</style>
</head>

<body>

<header>


</header>

<center><h1>Doctors</h1></center>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Location.." title="Type in a name">
<table id="myTable">
  <tr class="header">
    <th style="width:60%;">Name</th>
    <th style="width:40%;">view</th>
  </tr>
  <tr>
<td><h3>&nbspName: Dr.Ashwini Khadtare</h3>
<h3>&nbspMobileno: 9152615629</h3>
<h3>&nbspExperience: 7 years</h3>
 <h3>&nbspAddress:Jadhavar Nursing Home,solapur</h3>
<td><img src="images/d1.jpg" width="450" height="200"  style=float: left></td>

</tr>

<tr>
<td><h3>&nbspName: Dr Renuka Kulkarni</h3>
 <h3>&nbspMobileno: 9152581705</h3>
<h3>&nbspExperience: 30 years</h3>
 <h3>&nbspAddress:165 D,Railway lines,solapur</h3>
<td><img src="images/d2.jpg " width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName: Dr digvijay</h3>
 <h3>&nbspMobileno: 9152581705</h3>
<h3>&nbspExperience: 7 years</h3>
 <h3>&nbspAddress:Obstetrician, gynecologist, Infertility expert, Laparoscopic surgeon .</h3>
<td><img src="images/d3.jpg " width="450" height="200" style=float:left></td>
</tr>


<tr>
<td><h3>&nbspName: Dr Hiralal Agrawal</h3>
 <h3>&nbspMobileno: 9152581705</h3>
<h3>&nbspExperience: 34 years</h3>
 <h3>&nbspAddress: Shree Ram Homeopathic Clinic & Research Centre sadar bazar,solapur </h3>
<td><img src="images/d4.jpg " width="450" height="200" style=float:left></td>
</tr>

 <tr>
<td><h3>&nbspName: Dr Sourabh Nargid</h3>
 <h3>&nbspMobileno: 9152581705</h3>
<h3>&nbspExperience: 10 years</h3>
 <h3>&nbspAddress: Pooja Apartment, Landmark: Opposite Government polytechnic college, Near Gurram Nursing Home, Solapur </h3>
<td><img src="images/d5.jpg " width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName: Dr vinay Gundha</h3>
 <h3>&nbspMobileno: 9152581705</h3>
<h3>&nbspExperience: 10 years</h3>
 <h3>&nbspAddress: 6185/E-1, Siddheshwar Peth
Landmark: Near Zilla Parishad Office
Solapur City, Solapur </h3>
<td><img src="images/d6.jpg " width="450" height="200" style=float:left></td>
</tr>
 
 <tr>
<td><h3>&nbspName: Dr Nirmalkumar Taparia</h3>
 <h3>&nbspMobileno: 9152581705</h3>
<h3>&nbspExperience: 15 years</h3>
 <h3>&nbspAddress: Shinde Chowk, Mahalaxmi Complex, First Floor, Landmark: Indra Kanya Prashala, Solapur </h3>
<td><img src="images/d7.jpg " width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName: Dr Ashok Doshi</h3>
 <h3>&nbspMobileno: 9152581705</h3>
<h3>&nbspExperience: 40 years</h3>
 <h3>&nbspAddress: 15 B, North Kasba, PanjaraPol Chowk, M.G. Road, Landmark: Shivaji Chowk Near ST Stand, Solapur</h3>
<td><img src="images/d8.jpg " width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName: Dr Asha Kinkar</h3>
 <h3>&nbspMobileno: 9152581705</h3>
<h3>&nbspExperience: 41 years</h3>
 <h3>&nbspAddress: Sakhar Peth., Landmark: Near Chaudeshwari Mandir., Solapur</h3>
<td><img src="images/d9.jpg " width="450" height="200" style=float:left></td>
</tr>

<tr>
<td><h3>&nbspName: Dr Pradeep Karyakarte</h3>
 <h3>&nbspMobileno: 9152581705</h3>
<h3>&nbspExperience: 39 years</h3>
 <h3>&nbspAddress: Ashok Nagar, Bijapur Road, Landmark: Danish cake shop, Solapur</h3>
<td><img src="images/d10.jpg " width="450" height="200" style=float:left></td>
</tr>

</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>


</body>
</html>