<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script type="text/javascript" src = "jquery/jquery.js"></script>
              <script type="text/javascript" >
               /* $(document).ready(function(){
                  setInterval(function(){
                    //alert("mah");
                    $('#show').load('#');
                  },15000);
                });*/
                setTimeout(function(){
                   window.location.reload(1);
                }, 5000);
              </script>   
</head>
<body>
  <h3 class="text-primary">Area Details</h3>
<div class=" col-lg-12 content-wrapper">
   
      <div class="row" id="show">
                     
                    <table class="table table-hover">
                       <thead>
                          <tr class="text-primary">
                             <th>#</th>
                             <th>Area_id</th>
                             <th>Area_name</th>
                             <th>number_of_bins</th> 
                             <th>number_of_trucks</th>
                          </tr>
                       </thead>

<?php
include('config.php');
//$sql = "select * from area " ;
//$sql1 = "Select a_id, a_name,count(bins_id) from Area,(Select count(bins_id) from bins group by (a_id));"
$sql = "Select A.a_id,A.a_name,IFNULL(C.abc,0) as abc ,IFNULL(T.atc,0) as atc FROM area as A LEFT JOIN (SELECT a_id,COUNT(bins_id) as abc from bins group by (a_id)) as C ON A.a_id = C.a_id LEFT JOIN (SELECT a_id, COUNT(t_id) as atc from trucks GROUP BY(a_id)) AS T ON A.a_id = T.a_id";


//$sql1 = "Select count(bins_id) from bins group by (a_id);"
//$sql2 = "Select count(bins_id) from bins group by (t_id);"

if (mysqli_query($db, $sql)) {
echo "";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($db);
}
$count=1;
$result = mysqli_query($db , $sql);
//$result1 = mysqli_query($db , $sql1);
//$result2 = mysqli_query($db, $sql2);
if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) { ?>
                        <tbody>
                           <tr>
                              <th scope="row">
                              <?php echo $count; ?>
                              </th>
                              <td>
                              <?php echo $row['a_id']; ?>
                              </td>
                              <td>
                              <?php echo $row['a_name']; ?>
                              </td>
                              <td>
                              <?php echo $row['abc']; ?>
                              </td>
                              <td>
                              <?php echo $row['atc']; ?>
                              </td>

                           </tr>
                        </tbody>
<?php
$count++;
}
} else {
echo "0 results";
}
?>
 </table>                 
</div>
</div>
</body>
</html>