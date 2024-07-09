<?php
header('Content-Type: audio/mpegurl');

// Función para verificar la disponibilidad del URL
function verificarDisponibilidad($url) {
    $headers = @get_headers($url);
    if ($headers && strpos($headers[0], '200') !== false) {
        return true; // El stream está disponible (código de respuesta 200)
    } else {
        return false; // El stream no está disponible
    }
}

// URL principal y URL alternativo
$url_principal = 'http://www.radiosargentina.com.ar/php/tvm3uYT.php?id=YTAR0105';
$url_alternativo = 'https://test-streams.mux.dev/x36xhzz/x36xhzz.m3u8';

// Verificar disponibilidad del URL principal
if (verificarDisponibilidad($url_principal)) {
    echo "$url_principal\n";
} else {
    echo "$url_alternativo\n";
}
?>
