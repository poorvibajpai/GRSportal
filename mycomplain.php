<?php
include("udash.php");
include('connect.php');

$email=$_SESSION['user'];
//echo $email;
$query="select uid from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
    $id= $row['uid'];
}
?>
<?php
    $query2="select * from tbl_complain where uid='$id'";
    $res2=mysqli_query($con,$query2);
    ?>
<table border="1" style="margin-left:370px;margin-top:45px;text-align:center;box-shadow:5px 10px 5px plum;">
<h1  style="margin-left:370px;color:purple;"><u>My Complain List:</u></h1>
    <tr>
        <th>S.No.</th>
        <th>Complain Type</th>
        <th>Complain Reason</th>
        <th>Date Of Complain</th>
        <th>Status of Complain</th>
    </tr>
    
<?php
    $a=1;
    while($row2=mysqli_fetch_array($res2)){
    
    ?>
    <tr>
        <td><?php echo $a;?></td>
        <?php $com=$row2['ctid'];
    $query3="select complain_type from tbl_complain_type where ctid='$com'";
    $res3=mysqli_query($con,$query3);
    if($row3=mysqli_fetch_array($res3))
    {
        $ct=$row3['complain_type'];      
    }
    ?>
    <td><?php echo $ct;?></td>
          <td><?php echo $row2['complain']?></td>
        <td><?php echo $row2['doc'];?></td>
        <td><?php echo $row2['status'];?></td>
    </tr><?php
    $a++;
    }
?>
</table>