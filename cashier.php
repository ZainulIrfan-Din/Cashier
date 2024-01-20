<!DOCTYPE HTML>
<html>
<body bgcolor="#008080">
<form action="cashierDB.php" method="POST">

<center>
<table>

<tr>
    <th colspan="4" align="center"><font size=6> CASHIER </font></th>
</tr>

<tr> </tr>
<tr> </tr>
<tr> </tr>
<tr> </tr>
<tr> </tr>
<tr> </tr>
<tr> </tr>
<tr> </tr>
<tr> </tr>
<tr> </tr>
<tr> </tr>

<!-- Table Header For Table -->
<tr>
    <th>Item</font></th>
    <th>Quantity</font></th>
    <th>Price (RM)</font></th>
    <th>Sub Total (RM)</font></th>
</tr>

<!--For Sirap -->
<tr>
<td><input type="checkbox" name = "cb[]" id="sirap" value="sirap"/>Sirap</td>    
<td><input type="text"  id="sir_qty" name="sir_qty" onchange="calcsir()" style="text-align:center;" value="0" disabled/></td>
<td><input type="text"  id="sir_price" name="sir_price" value="1.00" style="text-align:center;" disabled/></td>
<td><input type="text"  id="sir_sub" name="sir_sub" style="text-align:center;" disabled/></td>
</tr>

<!-- For Murtabak -->
<tr>
<td><input type="checkbox" name = "cb[]" id="murtabak" value="murtabak"/>Murtabak</td>   
<td><input type="text" id="mur_qty" name="mur_qty" onchange="calcmur()" style="text-align:center;" value="0" disabled/></td>
<td><input type="text" id="mur_price" name="mur_price" value="4.00" style="text-align:center;" disabled/></td>
<td><input type="text" id="mur_sub" name="mur_sub" style="text-align:center;" disabled/></td>
</tr>

<!-- For Nasi Lemak-->
<tr>
<td><input type="checkbox" name = "cb[]" id="nasi_lemak" value="nasi_lemak"/>Nasi Lemak</td>   
<td><input type="text" id="nasi_qty" name="nasi_qty" onchange="calcnasi()" style="text-align:center;" value="0" disabled/></td>
<td><input type="text" id="nasi_price" name="nasi_price" value="2.50" style="text-align:center;" disabled/></td>
<td><input type="text" id="nasi_sub" name="nasi_sub" style="text-align:center;" disabled/></td>
</tr>

<tr>
<th colspan="3"><font size=4>TOTAL (RM)</font></th>
<td><input type="text" id="total" name="total" value="0.00" style="text-align:center;"  disabled/></td>
</tr>

<tr>
<td></td>

    <td colspan="1" align="center"><button type="submit">Submit</button></td>
    <td colspan="1" align="center"><button type="reset">Reset</button></td>
</tr>

<tr>
</tr>

<tr>
</tr>

<tr>
</tr>

<tr>
    <th colspan="4" align="center"> <p id="masa"></p> </th>
</tr>
</table>

<br>

</center>

</form>

<script>

  document.getElementById('sirap').onchange = function() {
    document.getElementById('sir_qty').disabled = !this.checked;
    document.getElementById('total').value = document.getElementById('total').value - document.getElementById('sir_sub').value;
    document.getElementById('sir_qty').value = " ";
    document.getElementById('sir_sub').value = " ";
}

document.getElementById('murtabak').onchange = function() {
    document.getElementById('mur_qty').disabled = !this.checked;
    document.getElementById('total').value = document.getElementById('total').value - document.getElementById('mur_sub').value;
    document.getElementById('mur_qty').value = " ";
    document.getElementById('mur_sub').value = " ";

}

document.getElementById('nasi_lemak').onchange = function() {
    document.getElementById('nasi_qty').disabled = !this.checked;
    document.getElementById('total').value = document.getElementById('total').value - document.getElementById('nasi_sub').value;
    document.getElementById('nasi_qty').value = " ";
    document.getElementById('nasi_sub').value = " ";
}

function calcsir(){

var price = parseInt(document.getElementById('sir_qty').value) * 1;
document.getElementById('sir_sub').value = price.toFixed(2);
total();
}

function calcmur(){

var price = parseInt(document.getElementById('mur_qty').value) * 4.00;
document.getElementById('mur_sub').value = price.toFixed(2);
total();
}

function calcnasi(){

var price = parseInt(document.getElementById('nasi_qty').value) * 2.50;
document.getElementById('nasi_sub').value = price.toFixed(2);
total();

}

function total(){
    var gtotal = 0;
    var price1 = 0;
    var price2 = 0;
    var price3 = 0;

    if (document.getElementById('sir_qty').value != 0) {
    price1 = parseFloat(document.getElementById('sir_qty').value) * 1;;
} else{
    price1 = 0;
}
if (document.getElementById('mur_qty').value != 0) {
    price2 = parseFloat(document.getElementById('mur_qty').value) * 4;;
} else{
    price2 = 0;
}
if (document.getElementById('nasi_qty').value != 0) {
    price3 = parseFloat(document.getElementById('nasi_qty').value) * 2.5;;
} else{
    price3 = 0;
}

  document.getElementById('total').value = price1 + price2 + price3;
}

var d = new Date();
document.getElementById("masa").innerHTML = d;

</script>
</body>
</html>