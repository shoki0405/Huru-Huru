<?php

// SESSIONに格納
$_SESSION["data"] = [
    // "name_c1"         => $_POST["name_c1"],
    // "kana_c1"         => $_POST["kana_c1"],
    // "start_minuts"    => $_POST["start_minuts"],
    // "birth_c1"        => $_POST["birth_c1"],
    // "status_c1"       => $_POST["status_c1"],
    "allergy_c1"      => $_POST["allergy_c1"],
    // "name_c2"         => $_POST["name_c2"],
    // "kana_c2"         => $_POST["kana_c2"],
    // "birth_c2"        => $_POST["birth_c2"],
    // "status_c2"       => $_POST["status_c2"],
    // "allergy_c2"      => $_POST["allergy_c2"],
    // "name_c3"         => $_POST["name_c3"],
    // "kana_c3"         => $_POST["kana_c3"],
    // "birth_c3"        => $_POST["birth_c3"],
    // "status_c3"       => $_POST["status_c3"],
    // "allergy_c3"      => $_POST["allergy_c3"],
    // "kiyaku"          => $_POST["kiyaku"],
];

if ($_POST["allergy_c1"] == "有り" && !empty($_POST["allergy_name_c1"])) {
    $_SESSION["data"] = [
        "allergy_name_c1" => $_POST["allergy_name_c1"],
    ];
}
// if ($_POST["allergy_c2"] == "有り" && !empty($_POST["allergy_name_c2"])) {
//     $_SESSION["data"] = [
//         "allergy_name_c2" => $_POST["allergy_name_c2"],
//     ];
// }
// if ($_POST["allergy_c3"] == "有り" && !empty($_POST["allergy_name_c3"])) {
//     $_SESSION["data"] = [
//         "allergy_name_c3" => $_POST["allergy_name_c3"],
//     ];
// }

var_dump("<pre>");
var_dump($_SESSION["data"]);
var_dump("</pre>");


?>




<form action="" method="post">





    <div class="submit_frame">
        <button type="submit" class="submit" name="submit" value="submit">
            送信する
        </button>
    </div>
    <div class="submit_frame">
        <button onclick="history.back()">
            戻る
        </button>
    </div>
</form>