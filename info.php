<?php
// Simple username verification endpoint
// - Accepts POST param 'username'
// - Responds with plain text 'Verified' only if username equals 'abc' (after trimming)
// - Otherwise responds with 'Error'

header('Content-Type: text/plain; charset=utf-8');

$username = $_POST['username'] ?? '';
$username = trim($username);

if ($username === 'abc') {
    echo 'Verified';
    exit;
}

echo 'Error';
