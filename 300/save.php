<?php
// save.php

$data = file_get_contents("php://input");

if ($data) {
    file_put_contents("300j.json", $data);
    echo json_encode(["message" => "Saved successfully!"]);
} else {
    http_response_code(400);
    echo json_encode(["message" => "No data received"]);
}
?>
