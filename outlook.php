
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="mystyle.css">
        <!-- JavaScript for date-picker.php (calendar) -->
        <script type="text/javascript">
            function SelectDate()
            {
                D = document.getElementById('Date').value;
                if(D){
                    D = D.split('/');
                }else{
                    Dat = new Date();
                    D = new Array(Dat.getDay(), Dat.getMonth(), Dat.getFullYear());
                }
                win = window.open("date-picker.php","win","status=no,scrollbars=no,toolbar=no,menubar=no,height=250,width=250");
                if (parseInt(navigator.appVersion) == 2 && navigator.appName == "Netscape")
                    win = window.open("date-picker.html","win","status=yes,height=325,width=250");
                //win'MakeDate',D[2], D[1],D[0], 'SetDate');
                win.MakeDate(D[2], D[1], D[0]);
            }
            
            function SetDate(Day, Month, Year)
            {
                document.getElementById('Date').value = Day + '/' + Month + '/' + Year;
            }


</script>
</head>
<body bgcolor="#00CCFF">
<form action="db.php" name="frm" method="post" enctype="multipart/form-data">
<center>
<table>
<tr>
<td >Event name:</td>
<td ><input type="text" name="txt1"  /></td>
</tr>

<tr>
<td>Date:</td>
<td > <input type="text" name="txt2" id="Date" style="width: 100px; padding: 2px"><input type="button" onClick="SelectDate('Date1')" value="Select"></td>
</tr>


<tr>
<td>Vanue</td>
<td><input type="text" name="txt3"  /></td>
</tr>


<tr>
<td>Discription</td>
<td><input type="text" name="txt4" rows="5" cols="9" /></td>
</tr>
<tr>


<tr>
<td>Upload photo</td>
<td><input type="file" name="file" id="file"></td>
</tr>
<tr>
<td><input type="submit" name="sub">
</table>
</center>
</form>
</body>
</html>