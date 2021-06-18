<?php

require_once("form/form.php");

if (!empty($_POST["confirm"])) {

    // SESSIONに格納
    $_SESSION["data"] = [
        "start_date"   => $_POST["start_date"],
        "start_hour"   => $_POST["start_hour"],
        "start_minuts" => $_POST["start_minuts"],
        "end_date"     => $_POST["end_date"],
        "end_hour"     => $_POST["end_hour"],
        "end_minuts"   => $_POST["end_minuts"],
        "extension"    => $_POST["extension"],
        "fullname"     => $_POST["fullname"],
        "kana"         => $_POST["kana"],
        "birth"        => $_POST["birth"],
        "email"        => $_POST["email"],
        "name_c1"       => $_POST["name_c1"],
        "kana_c1"       => $_POST["kana_c1"],
        "birth_c1"      => $_POST["birth_c1"],
        "status_c1"     => $_POST["status_c1"],
    ];

    // 2人目お子様
    if (!empty($_POST["name_c2"])) {
        if (empty($_POST["kana_c2"]) || empty($_POST["birth_c2"]) || empty($_POST["status_c2"])) {
            $rd = "location: " . esc_url(home_url('/reservation_member'));
            header($rd);
            exit;
        }
        $_SESSION["data"] = array_merge($_SESSION["data"], [
            "name_c2"         => $_POST["name_c2"],
            "kana_c2"         => $_POST["kana_c2"],
            "birth_c2"        => $_POST["birth_c2"],
            "status_c2"       => $_POST["status_c2"],
        ]);
    }

    // 3人目お子様
    if (!empty($_POST["name_c3"])) {
        if (empty($_POST["kana_c3"]) || empty($_POST["birth_c3"]) || empty($_POST["status_c3"])) {
            $rd = "location: " . esc_url(home_url('/reservation_member'));
            header($rd);
            exit;
        }
        $_SESSION["data"] = array_merge($_SESSION["data"], [
            "name_c3"         => $_POST["name_c3"],
            "kana_c3"         => $_POST["kana_c3"],
            "birth_c3"        => $_POST["birth_c3"],
            "status_c3"       => $_POST["status_c3"],
        ]);
    }

    $_SESSION["data"]["bikou"] = !empty($_POST["bikou"]) ? $_POST["bikou"] : "";
    view_require("r_m_confirm");
} elseif (!empty($_POST["submit"])) {
    // メール送信
    if (send(YOYAKU_M, $_SESSION["data"])) {
        $_SESSION["data"] = [];
    } else {
        echo "送信失敗";
    }
    view_require("r_m_complate");
} else {
    view_require("r_m_input");
}
?>


<style>
    .footer_guide {
        display: none;
    }
</style>