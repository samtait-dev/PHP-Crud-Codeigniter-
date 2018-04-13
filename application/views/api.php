<title>FreshService Tickets</title>

<!-- Include bootstrap external JS/CSS -->
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<!-- End Include -->


<!-- Only want this to be visible on our Network -->

<!--if ($_SERVER['REMOTE_ADDR'] == 'our ip') {
  content
} else {
  
  "You do not have access to visit this page";
}
-->
<?php   
$d = new DateTime('first day of this month');
?>


<h1>Freshservice data to populate Power Bi graphs</h1>
<h3>List of all tickets (Page 1) ( <?php echo $d->format('jS, F Y');  ?> )</h3>


<?php 

function getProperColor($number)
{
    if ($object->status_name == 'Open')
        return '#00FF00';
    else if ($var >= 6 && $var <= 10)
        return '#FF8000';
    else if ($var >= 11)
        return '#FF0000';
}

 ?>

<?php 
$api_key = "GSXUF5MXNeIm3W72SmPb";
$password = "x";

//freshservice URL (further queries available at )
$url = "https://softcl.freshservice.com/helpdesk/tickets/filter/all_tickets?format=json&page=1";
//$url = "https://softcl.freshservice.com/helpdesk/tickets/filter/Pending?format=json";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_USERPWD, "$api_key:$password");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec($ch);
$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
$response = substr($server_output, $header_size);

// Uncomment below to echo all data in Json format.
 //var_dump(json_decode($response));

  $test = json_decode($response);
  

    echo "<table class = 'table'>";
    echo "<thead class = 'thead-dark'>";

    echo "<tr>";
      echo "<th scope='col'>Ticket Created</th>";
      echo "<th scope='col'>Ticket Id</th>";
      echo "<th scope='col'>Status</th>";
      echo "<th scope='col'>Type</th>";
      echo "<th scope='col'>Company</th>";
      echo "<th scope='col'>Category Item</th>";
      echo "<th scope='col'>Urgency</th>";
      echo "<th scope='col'>Agent</th>";
      echo "<th scope='col'>Due By</th>";
      echo "<th scope='col'>Requester</th>";
      echo "</tr>";
    echo "</thead>";


$str = 'nice couple';
$words = explode(' ', $str);
$result = $words[0][0]. $words[1][0];
echo $result;


foreach ($test as $key => $object) {
    echo "<tr>";
      //echo $object->subject;

      $str = $object->responder_name;
      $words = explode(' ', $str);
      $result = $words[0][0]. $words[1][0];


      echo $object->display_id;
      echo "<td> $object->created_at</td>";
      echo "<td> $object->display_id </td>";
      //echo "<td> $object->subject </td>";
      echo "<td> $object->status_name</td>";
      //echo "<td> $object->requester_name</td>";
      echo "<td> $object->ticket_type</td>";
      echo "<td> $object->department_name</td>";
      echo "<td> $object->item_category</td>";
      echo "<td> $object->urgency_name</td>";
      echo "<td> $result</td>";
      echo "<td> $object->due_by</td>";

      echo "<td>$object->requester_name</td>";
   echo "</tr>";

}

curl_close($ch);

?>

