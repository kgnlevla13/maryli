<?php

$json = [];
$type = route(2);
if (!$type){
    exit;
}

if (file_exists(admin_controller('api/' . $type))){
    // Output buffer başlat - API dosyasının echo yapıp yapmadığını kontrol etmek için
    ob_start();
    
    require admin_controller('api/' . $type);
    
    // API dosyasının çıktısını yakala
    $output = ob_get_clean();
    
    // Eğer API dosyası zaten echo yaptıysa (about.php gibi)
    if (!empty($output)) {
        echo $output;
    }
    // Eğer API dosyası sadece $json set ettiyse (login.php gibi)
    elseif (count($json) > 0) {
        echo json_encode($json);
    }
}