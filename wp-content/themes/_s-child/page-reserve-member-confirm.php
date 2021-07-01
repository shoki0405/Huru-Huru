<?php
require_once("form/form.php");

$_SESSION["error"] = [];

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
    "name_c1"      => $_POST["name_c1"],
    "kana_c1"      => $_POST["kana_c1"],
    "birth_c1"     => $_POST["birth_c1"],
    "status_c1"    => $_POST["status_c1"],
    "bath_c1"      => $_POST["bath_c1"],
];

$_SESSION["data"]["name_c2"] = !empty($_POST["name_c2"]) ? $_POST["name_c2"] : "";
$_SESSION["data"]["kana_c2"] = !empty($_POST["kana_c2"]) ? $_POST["kana_c2"] : "";
$_SESSION["data"]["birth_c2"] = !empty($_POST["birth_c2"]) ? $_POST["birth_c2"] : "";
$_SESSION["data"]["status_c2"] = !empty($_POST["status_c2"]) ? $_POST["status_c2"] : "";
$_SESSION["data"]["bath_c2"] = !empty($_POST["bath_c2"]) ? $_POST["bath_c2"] : "";

$_SESSION["data"]["name_c3"] = !empty($_POST["name_c3"]) ? $_POST["name_c3"] : "";
$_SESSION["data"]["kana_c3"] = !empty($_POST["kana_c3"]) ? $_POST["kana_c3"] : "";
$_SESSION["data"]["birth_c3"] = !empty($_POST["birth_c3"]) ? $_POST["birth_c3"] : "";
$_SESSION["data"]["status_c3"] = !empty($_POST["status_c3"]) ? $_POST["status_c3"] : "";
$_SESSION["data"]["bath_c3"] = !empty($_POST["bath_c3"]) ? $_POST["bath_c3"] : "";

$_SESSION["data"]["bikou"] = !empty($_POST["bikou"]) ? $_POST["bikou"] : "";

// 2人目お子様
if (!empty($_POST["name_c2"])) {
    if (empty($_POST["kana_c2"])) {
        $_SESSION["error"] =  array_merge($_SESSION["error"], [
            "フリガナを正しく入力してください(2人目お子様)",
        ]);
    }
    if (empty($_POST["birth_c2"])) {
        $_SESSION["error"] =  array_merge($_SESSION["error"], [
            "生年月日を正しく入力してください(2人目お子様)",
        ]);
    }
    if (empty($_POST["status_c2"])) {
        $_SESSION["error"] =  array_merge($_SESSION["error"], [
            "健康状態を選択してください(2人目お子様)",
        ]);;
    }
    if (empty($_POST["bath_c2"])) {
        $_SESSION["error"] =  array_merge($_SESSION["error"], [
            "沐浴・シャワーを選択してください(2人目お子様)",
        ]);
    }
}
// 3人目お子様
if (!empty($_POST["name_c3"])) {
    if (empty($_POST["kana_c3"])) {
        $_SESSION["error"] =  array_merge($_SESSION["error"], [
            "フリガナを正しく入力してください(3人目お子様)",
        ]);
    }
    if (empty($_POST["birth_c3"])) {
        $_SESSION["error"] =  array_merge($_SESSION["error"], [
            "生年月日を正しく入力してください(3人目お子様)",
        ]);
    }
    if (empty($_POST["status_c3"])) {
        $_SESSION["error"] =  array_merge($_SESSION["error"], [
            "健康状態を選択してください(3人目お子様)",
        ]);;
    }
    if (empty($_POST["bath_c3"])) {
        $_SESSION["error"] =  array_merge($_SESSION["error"], [
            "沐浴・シャワーを選択してください(3人目お子様)",
        ]);
    }
}

if ($_SESSION["error"] != []) {
    wp_safe_redirect(home_url('/reserve-member-edit'));
    exit;
}

get_header();
get_template_part("template/right_top");
get_template_part("template/bottom_menu_top");

$img_fol = get_stylesheet_directory_uri() . "/img/";
$img_fol_form = get_stylesheet_directory_uri() . "/img/form/";
?>

<div class="reservation confirm">

    <div class="mv">
        <img class="pc" src="<?php echo $img_fol_form; ?>r_m_mv.png" alt="">
        <img class="sp" src="<?php echo $img_fol_form; ?>r_m_mv_sp.png" alt="">
    </div>

    <div class="text">
        <div class="title">
            ご予約お申込み<span class="kaigyo_765">(会員様)</span>
        </div>

        <div class="des">
            お申し込みいただいた方には自動返信メールを送信させていただいております。<br>
            当日分(前日17時以降)の予約に関しましては電話にてお問い合わせをいただけますよう宜しくお願い致します。
        </div>

        <div class="tel">
            <img src="<?php echo $img_fol; ?>phone.png" alt="">
            03-4400-2292
        </div>

        <div class="line">
            <img src="<?php echo $img_fol_form; ?>line.png" alt="">
            ご予約後、詳細のやり取りはLINEにて行います。その他をご希望の場合はお申し出ください。
        </div>

        <div class="caution">
            住所・ご連絡先に変更がございましたら備考欄に記載をお願い致します。
        </div>
    </div>

    <div class="">
        <form action="<?php echo esc_url(home_url('/reserve-member-complete')); ?>" class="form" method="post">
            <div class="inner">

                <div class="hissu">
                    ※=必須項目
                </div>

                <div class="row">
                    <div class="heading">ご希望日時*</div>
                    <div class="confirm_data">
                        <?= !empty($_SESSION["data"]["start_date"]) ? $_SESSION["data"]["start_date"] : ""; ?>
                        <?= !empty($_SESSION["data"]["start_hour"]) ? $_SESSION["data"]["start_hour"] : ""; ?>時
                        <?= !empty($_SESSION["data"]["start_minuts"]) ? $_SESSION["data"]["start_minuts"] : ""; ?>分から
                    </div>
                </div>
                <div class="row">
                    <div class="heading"></div>
                    <div class="confirm_data">
                        <?= !empty($_SESSION["data"]["end_date"]) ? $_SESSION["data"]["end_date"] : ""; ?>
                        <?= !empty($_SESSION["data"]["end_hour"]) ? $_SESSION["data"]["end_hour"] : ""; ?>時
                        <?= !empty($_SESSION["data"]["end_minuts"]) ? $_SESSION["data"]["end_minuts"] : ""; ?>分まで
                    </div>
                </div>

                <div class="row">
                    <div class="heading">延長の可能性*</div>
                    <div class="confirm_data">
                        <?= !empty($_SESSION["data"]["extension"]) ? $_SESSION["data"]["extension"] : ""; ?>
                    </div>
                </div>

                <div class="row">
                    <div class="heading">保護者氏名*</div>
                    <div class="confirm_data">
                        <?= !empty($_SESSION["data"]["fullname"]) ? $_SESSION["data"]["fullname"] : ""; ?>
                    </div>
                </div>

                <div class="row">
                    <div class="heading">フリガナ*</div>
                    <div class="confirm_data">
                        <?= !empty($_SESSION["data"]["kana"]) ? $_SESSION["data"]["kana"] : ""; ?>
                    </div>
                </div>

                <div class="row">
                    <div class="heading">生年月日*</div>
                    <div class="confirm_data">
                        <?= !empty($_SESSION["data"]["birth"]) ? $_SESSION["data"]["birth"] : ""; ?>
                    </div>
                </div>

                <div class="row">
                    <div class="heading">メールアドレス*</div>
                    <div class="confirm_data">
                        <?= !empty($_SESSION["data"]["email"]) ? $_SESSION["data"]["email"] : ""; ?>
                    </div>
                </div>

                <div class="child dot_back">
                    <img src="<?php echo $img_fol; ?>orange.png" alt="">
                    1人目お子様
                </div>
                <div class="row">
                    <div class="heading">氏名*</div>
                    <div class="confirm_data">
                        <?= !empty($_SESSION["data"]["name_c1"]) ? $_SESSION["data"]["name_c1"] : ""; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="heading">フリガナ*</div>
                    <div class="confirm_data">
                        <?= !empty($_SESSION["data"]["kana_c1"]) ? $_SESSION["data"]["kana_c1"] : ""; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="heading">生年月日*</div>
                    <div class="confirm_data">
                        <?= !empty($_SESSION["data"]["birth_c1"]) ? $_SESSION["data"]["birth_c1"] : ""; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="heading">健康状態*</div>
                    <div class="confirm_data">
                        <?= !empty($_SESSION["data"]["status_c1"]) ? $_SESSION["data"]["status_c1"] : ""; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="heading">沐浴・シャワー*</div>
                    <div class="confirm_data">
                        <?= !empty($_SESSION["data"]["bath_c1"]) ? $_SESSION["data"]["bath_c1"] : ""; ?>
                    </div>
                </div>



                <?php if (!empty($_SESSION["data"]["name_c2"])) : ?>
                    <div class="child dot_back">
                        <img src="<?php echo $img_fol; ?>orange.png" alt="">
                        2人目お子様
                    </div>
                    <div class="row">
                        <div class="heading">氏名*</div>
                        <div class="confirm_data">
                            <?= !empty($_SESSION["data"]["name_c2"]) ? $_SESSION["data"]["name_c2"] : ""; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="heading">フリガナ*</div>
                        <div class="confirm_data">
                            <?= !empty($_SESSION["data"]["kana_c2"]) ? $_SESSION["data"]["kana_c2"] : ""; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="heading">生年月日*</div>
                        <div class="confirm_data">
                            <?= !empty($_SESSION["data"]["birth_c2"]) ? $_SESSION["data"]["birth_c2"] : ""; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="heading">健康状態*</div>
                        <div class="confirm_data">
                            <?= !empty($_SESSION["data"]["status_c2"]) ? $_SESSION["data"]["status_c2"] : ""; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="heading">沐浴・シャワー*</div>
                        <div class="confirm_data">
                            <?= !empty($_SESSION["data"]["bath_c2"]) ? $_SESSION["data"]["bath_c2"] : ""; ?>
                        </div>
                    </div>
                <?php endif; ?>



                <?php if (!empty($_SESSION["data"]["name_c3"])) : ?>
                    <div class="child dot_back">
                        <img src="<?php echo $img_fol; ?>orange.png" alt="">
                        3人目お子様
                    </div>
                    <div class="row">
                        <div class="heading">氏名*</div>
                        <div class="confirm_data">
                            <?= !empty($_SESSION["data"]["name_c3"]) ? $_SESSION["data"]["name_c3"] : ""; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="heading">フリガナ*</div>
                        <div class="confirm_data">
                            <?= !empty($_SESSION["data"]["kana_c3"]) ? $_SESSION["data"]["kana_c3"] : ""; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="heading">生年月日*</div>
                        <div class="confirm_data">
                            <?= !empty($_SESSION["data"]["birth_c3"]) ? $_SESSION["data"]["birth_c3"] : ""; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="heading">健康状態*</div>
                        <div class="confirm_data">
                            <?= !empty($_SESSION["data"]["status_c3"]) ? $_SESSION["data"]["status_c3"] : ""; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="heading">沐浴・シャワー*</div>
                        <div class="confirm_data">
                            <?= !empty($_SESSION["data"]["bath_c3"]) ? $_SESSION["data"]["bath_c3"] : ""; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="row">
                    <div class="heading">備考</div>
                    <div class="confirm_data">
                        <?= !empty($_SESSION["data"]["bikou"]) ? $_SESSION["data"]["bikou"] : ""; ?>
                    </div>
                </div>

                <div class="submit_frame">
                    <button type="submit" class="submit" name="submit" value="submit">
                        送信する
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
                <div class="btn-back2">
                    <i class="fas fa-arrow-left"></i>
                    戻る
                    <a href="<?php echo esc_url(home_url('/reserve-member-edit')); ?>" class="a"></a>
                </div>
            </div>
        </form>
    </div>
</div>

<?php get_footer("s"); ?>