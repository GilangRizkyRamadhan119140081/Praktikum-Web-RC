  <?php
    header('Content-Type: application/json');

    //Tahap Token Keamanan
    if (empty($_SESSION['security_token'])) {
        $_SESSION['security_token'] = bin2hex(random_bytes(32));
    }
    
    $headers = apache_request_headers();
    if (isset($headers['security_token'])) {
        if ($headers['security_token'] !== $_SESSION['security_token']) {
            exit(json_encode(['error' => 'Wrong security token.']));
        }
    } else {
        exit(json_encode(['error' => 'No security token.']));
    }
  ?>