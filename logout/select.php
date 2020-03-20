<?php
<?php
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'travelo');
if(!$conn){
	echo "Connection Failed...";
}
$sql="SELECT fname FROM user WHERE id='1'";

?>
<html>
    <head></head>
    <body>
        <table>
            <tr>
                <td>
                </td>
            </tr>
        </table>
    </body>
</html>