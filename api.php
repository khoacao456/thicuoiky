<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

echo json_encode([
    "message" => "Xin chào! Code PHP đã chạy thành công trên InfinityFree!",
    "status" => "success",
    "time" => date("Y-m-d H:i:s")
]);
?>