<?php
namespace Bbit\Api\Candidate;

require __DIR__ . './../../vendor/autoload.php';

class Candidate
{
    public static function view()
    {
        $servername = getenv('BBIT_DB_HOST');
        $username = getenv('BBIT_DB_USER');
        $password = getenv('BBIT_DB_PASSWORD');
        $db_name = getenv('BBIT_DB_NAME');

        // Create connection
        $conn = new \mysqli($servername, $username, $password, $db_name);
        
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
    }
}
