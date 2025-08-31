<?php
// jwt_helper.php

function base64url_encode($data) {
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
}

function base64url_decode($data) {
    $pad = 4 - (strlen($data) % 4);
    if ($pad < 4) {
        $data .= str_repeat('=', $pad);
    }
    return base64_decode(strtr($data, '-_', '+/'));
}

function generate_jwt($payload, $secret, $alg = 'HS256') {
    $header = ['typ' => 'JWT', 'alg' => $alg];

    $header_encoded = base64url_encode(json_encode($header));
    $payload_encoded = base64url_encode(json_encode($payload));

    $signature = hash_hmac('sha256', "$header_encoded.$payload_encoded", $secret, true);
    $signature_encoded = base64url_encode($signature);

    return "$header_encoded.$payload_encoded.$signature_encoded";
}

function validate_jwt($jwt, $secret) {
    $parts = explode('.', $jwt);
    if (count($parts) !== 3) return false;

    list($header_encoded, $payload_encoded, $signature_encoded) = $parts;

    $signature = base64url_decode($signature_encoded);
    $valid_signature = hash_hmac('sha256', "$header_encoded.$payload_encoded", $secret, true);

    if (!hash_equals($valid_signature, $signature)) return false;

    $payload = json_decode(base64url_decode($payload_encoded), true);

    // Validar expiración si existe
    if (isset($payload['exp']) && time() > $payload['exp']) return false;

    return $payload;
}
?>
