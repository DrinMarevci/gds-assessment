<?php

require_once('../../../wp-load.php');
global $wpdb;

// Rest of your code here...
$name = $_POST['name'];
$phone = $_POST['phone'];
$dropdown = $_POST['dropdown'];

echo $name;
echo $phone;
echo $dropdown;

// Insert data into a custom table
$table_name = $wpdb->prefix . 'contacts';
$data = array(
    'name' => $name,
    'phone' => $phone,
    'dropdown' => $dropdown,
);

$result = $wpdb->insert($table_name, $data);

if ($result === false) {
    echo "Error: " . $wpdb->last_error;
} else {
    echo "Data inserted successfully!";
}

// Redirect after form submission
header('Location: ' . 'http://localhost/gds-assessment');


exit;
?>