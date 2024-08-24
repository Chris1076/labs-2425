<?php
$time_start = microtime(true);
define('CUSTOMERS_FILE_PATH', 'registration.csv');

function get_hundred_customers_data()
{
    $opened_file_handler = fopen(CUSTOMERS_FILE_PATH, 'r');

    $data = [];
    $headers = [];
    $row_count = 0;
    while (!feof($opened_file_handler)) {

        $row = fgetcsv($opened_file_handler, 1024);
        // if (!empty($row)) {
        //     if ($row_count == 0) {
        //         array_push($headers, $row);    
        //     } else {
                array_push($data, $row);
            // }
        // }

        $row_count++;

    }

    return [
        'headers' => $headers,
        'data' => $data
    ];
}

$customers = get_hundred_customers_data();

?>
<html>
<head>
    <meta charset="utf-8">
    <title>IPT10 Laboratory Activity #2</title>
    <link rel="icon" href="https://phpsandbox.io/assets/img/brand/phpsandbox.png">
    <link rel="stylesheet" href="https://assets.ubuntu.com/v1/vanilla-framework-version-4.15.0.min.css" />   
</head>
<body>

<h1>
    Registrants
</h1>
<h4>
<?php foreach(range('A', 'Z') as $letter): ?>
    <a href="filtered.php?letter=<?php echo $letter; ?>"><?php echo $letter; ?></a>
<?php endforeach; ?>
</h4>
<small>
The dataset is retrieved from registration.csv</a>
</small>
<table aria-label="Customers Dataset">
    <thead>
        <tr>
            <th>Name</th>
            <th>Birthday</th>
            <th>Age</th>
            <th>Contact Number</th>
            <th>Sex</th>
            <th>Program</th>
            <th>Address</th>
            <th>Email Address</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($customers['data'] as $record):
    ?>
        <tr>
            <td><?php echo "<strong>$record[0]</strong>"; ?></td>
            <td><?php echo $record[1]; ?></td>
            <td><?php echo $record[2]; ?></td>
            <td><?php echo $record[3]; ?></td>
            <td><?php echo $record[4]; ?></td>
            <td><?php echo $record[5]; ?></td>
            <td><?php echo $record[6]; ?></td>
            <td><?php echo $record[7]; ?></td>
        </tr>
    <?php
    endforeach;
    ?>
    </tbody>
</table>
<p><?php $time_end = microtime(true); $duration = $time_end - $time_start; echo $duration; ?></p>

</body>
</html>