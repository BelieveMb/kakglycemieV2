<?php
// Vérifie que la requête vient de GitHub (optionnel)
$secret = 'ton_secret_super_complexe'; // Choisis-le toi-même
$headers = getallheaders();
$signature = $headers['X-Hub-Signature-256'] ?? '';

$payload = file_get_contents('php://input');
$hash = hash_hmac('sha256', $payload, $secret);

if (!hash_equals($hash, substr($signature, 7))) {
    http_response_code(403);
    die('Accès refusé');
}

// Exécute les commandes de mise à jour
exec('cd /home/u58768789/domains/tondomaine.com && git pull origin main 2>&1', $output, $status);

// Log
file_put_contents('deploy.log', date('Y-m-d H:i:s') . ' - Status: ' . $status . "\n" . implode("\n", $output) . "\n\n", FILE_APPEND);

echo "Déploiement terminé";