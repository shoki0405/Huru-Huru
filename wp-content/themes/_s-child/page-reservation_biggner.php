<?php

require_once("form/form.php");

if (!empty($_POST["child"])) {
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
        "tel"          => $_POST["tel"],
        "email"        => $_POST["email"],
        "email_cnf"    => $_POST["email_cnf"],
        "zip"          => $_POST["zip"],
        "pref"         => $_POST["pref"],
        "address"      => $_POST["address"],
        "station"      => $_POST["station"],
    ];

    $_SESSION["data"]["building"] = !empty($_POST["building"]) ? $_POST["building"] : "";

    // var_dump("<pre>");
    // var_dump($_SESSION["data"]);
    // var_dump("</pre>");
    view_require("r_b_child");
} elseif (!empty($_POST["confirm"])) {

    // 1人目お子様
    $_SESSION["data"] = array_merge($_SESSION["data"], [
        "name_c1"         => $_POST["name_c1"],
        "kana_c1"         => $_POST["kana_c1"],
        "birth_c1"        => $_POST["birth_c1"],
        "status_c1"       => $_POST["status_c1"],
        "allergy_c1"      => $_POST["allergy_c1"],
    ]);
    $_SESSION["data"]["allergy_name_c1"] = $_POST["allergy_c1"] == "有り" ? $_POST["allergy_name_c1"] : "";

    // 2人目お子様
    if (!empty($_POST["name_c2"])) {


        if (
            empty($_POST["kana_c2"])
            || empty($_POST["birth_c2"])
            || empty($_POST["status_c2"])
            || empty($_POST["allergy_c2"])
        ) {
            $rd = "location: " . esc_url(home_url('/reservation_biggner'));
            header($rd);
            exit;
        }


        $_SESSION["data"] = array_merge($_SESSION["data"], [
            "name_c2"         => $_POST["name_c2"],
            "kana_c2"         => $_POST["kana_c2"],
            "birth_c2"        => $_POST["birth_c2"],
            "status_c2"       => $_POST["status_c2"],
            "allergy_c2"      => $_POST["allergy_c2"],
        ]);
        $_SESSION["data"]["allergy_name_c2"] = $_POST["allergy_c2"] == "有り" ? $_POST["allergy_name_c2"] : "";
    }

    // 3人目お子様
    if (!empty($_POST["name_c3"])) {

        if (
            empty($_POST["kana_c2"])
            || empty($_POST["birth_c2"])
            || empty($_POST["status_c2"])
            || empty($_POST["allergy_c2"])
        ) {
            $rd = "location: " . esc_url(home_url('/reservation_biggner'));
            header($rd);
            exit;
        }


        $_SESSION["data"] = array_merge($_SESSION["data"], [
            "name_c3"         => $_POST["name_c3"],
            "kana_c3"         => $_POST["kana_c3"],
            "birth_c3"        => $_POST["birth_c3"],
            "status_c3"       => $_POST["status_c3"],
            "allergy_c3"      => $_POST["allergy_c3"],
        ]);
        $_SESSION["data"]["allergy_name_c3"] = $_POST["allergy_c3"] == "有り" ? $_POST["allergy_name_c3"] : "";
    }

    $_SESSION["data"]["bikou"] = !empty($_POST["bikou"]) ? $_POST["bikou"] : "";


    // var_dump("<pre>");
    // var_dump($_SESSION["data"]);
    // var_dump("</pre>");


    view_require("r_b_confirm");
} elseif (!empty($_POST["submit"])) {
    // メール送信
    if (send(YOYAKU_B, $_SESSION["data"])) {
        $_SESSION["data"] = [];
    } else {
        echo "送信失敗";
    }

    // メール送信失敗でフォームトップへリダイレクト
    // header("Location: done.php");

    // メール送信完了でメッセージ表示
    view_require("r_b_complate");
} else {
    // $_SESSION["data"] = [];
    view_require("r_b_input");
    // get_template_part("form/r_b_input");
}
