<?php
function cek_pesan($teks) {

    $kata_kotor = array("kontol", "memek", "jembut", "tai", "asu", "jancok", "Itil");

    $hasil = 0;

    $jml_kata = count($kata_kotor);

    for ($i = 0; $i < $jml_kata; $i++) {

        if (stristr($teks, $kata_kotor[$i])) {
            $hasil = 1;
        }
    }

    return $hasil;
}
?>
