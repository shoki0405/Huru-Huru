<?php

require_once("form/form.php");

get_header();
get_template_part("template/right_top");
get_template_part("template/bottom_menu_top");

if (!empty($_POST["child"])) {
    // SESSIONに格納
    $_SESSION["data"] = array_merge($_SESSION["data"], [
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
        "pet"          => $_POST["pet"],
    ]);

    $_SESSION["data"]["building"] = !empty($_POST["building"]) ? $_POST["building"] : "";
    $_SESSION["data"]["pet_syu"] = !empty($_POST["pet_syu"]) ? $_POST["pet_syu"] : "";
}

$img_fol = get_stylesheet_directory_uri() . "/img/";
$img_fol_form = get_stylesheet_directory_uri() . "/img/form/";

// var_dump("<pre>");
// var_dump($_SESSION["data"]);
// var_dump("</pre>");
?>

<div class="reservation">

    <div class="mv">
        <img class="pc" src="<?php echo $img_fol_form; ?>r_b_mv.png" alt="">
        <img class="sp" src="<?php echo $img_fol_form; ?>r_b_mv_sp.png" alt="">
    </div>

    <?php
    if (!empty($_SESSION["error"])) {
        foreach ($_SESSION["error"] as $error_item) {
            echo "<div class='error_message'>";
            echo $error_item;
            echo "</div>";
        }
    }
    ?>

    <div class="text">
        <div class="title">
            ご予約お申込み<span class="kaigyo_765">(ビジター)</span>
        </div>

        <div class="stepnav">
            <!-- ステップナビゲーション -->
            <div class="item">
                <div class="circle">
                    <div></div>
                </div>
                <div class="step">お客様情報入力</div>
            </div>
            <div class="item">
                <div class="circle">

                </div>
                <div class="step">お子様情報入力</div>
            </div>
            <div class="item">
                <div class="circle">
                    <div></div>
                </div>
                <div class="step">送信確認</div>
            </div>
            <div class="item">
                <div class="circle">
                    <div></div>
                </div>
                <div class="step">完了</div>
            </div>
        </div>

        <div class="des">
            <div>
                ご利用には会員登録が必要です。
            </div>
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

    </div>







    <div class="">
        <form action="<?php echo esc_url(home_url('/reserve-visitor-confirm')); ?>" class="form" method="post">
            <div class="inner">

                <div class="hissu">
                    ※=必須項目
                </div>

                <div class="children">
                    <div class="section">
                        <div class="child dot_back">
                            <img src="<?php echo $img_fol; ?>orange.png" alt="">
                            1人目お子様
                        </div>
                        <div class="hissu">
                            ※=必須項目
                        </div>
                        <div class="row">
                            <div class="heading">氏名*</div>
                            <input type="text" name="name_c1" placeholder="例)鈴木　花子" value="<?= !empty($_SESSION["data"]["name_c1"]) ? $_SESSION["data"]["name_c1"] : "" ?>" required>
                        </div>
                        <div class="row">
                            <div class="heading">フリガナ*</div>
                            <input type="text" name="kana_c1" placeholder="例)スズキ　ハナコ" value="<?= !empty($_SESSION["data"]["kana_c1"]) ? $_SESSION["data"]["kana_c1"] : "" ?>" required>
                        </div>
                        <div class="row">
                            <div class="heading">生年月日*</div>
                            <input type="text" name="birth_c1" placeholder="例)1980/4/2" value="<?= !empty($_SESSION["data"]["birth_c1"]) ? $_SESSION["data"]["birth_c1"] : "" ?>" required>
                        </div>
                        <div class="row">
                            <div class="heading">健康状態*</div>
                            <select id="" name="status_c1" required>
                                <option value="良好" <?php if (!empty($_SESSION["data"]["status_c1"])) {
                                                        if ($_SESSION["data"]["status_c1"] == "良好") {
                                                            echo "selected";
                                                        }
                                                    } ?>>良好</option>
                                <option value="普通" <?php if (!empty($_SESSION["data"]["status_c1"])) {
                                                        if ($_SESSION["data"]["status_c1"] == "普通") {
                                                            echo "selected";
                                                        }
                                                    } ?>>普通</option>
                                <option value="微熱" <?php if (!empty($_SESSION["data"]["status_c1"])) {
                                                        if ($_SESSION["data"]["status_c1"] == "微熱") {
                                                            echo "selected";
                                                        }
                                                    } ?>>微熱</option>
                                <option value="鼻水、咳" <?php if (!empty($_SESSION["data"]["status_c1"])) {
                                                            if ($_SESSION["data"]["status_c1"] == "鼻水、咳") {
                                                                echo "selected";
                                                            }
                                                        } ?>>鼻水、咳</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="heading">アレルギー*</div>
                            <div class="col radio">
                                <input type="radio" name="allergy_c1" id="c1_al_ari" value="有り" <?php if (!empty($_SESSION["data"]["allergy_c1"])) {
                                                                                                    if ($_SESSION["data"]["allergy_c1"] == "有り") {
                                                                                                        echo "checked";
                                                                                                    }
                                                                                                } ?> required>
                                <label for="c1_al_ari" class="radio-label">有り</label>
                                <input type="radio" name="allergy_c1" id="c1_al_nasi" value="無し" <?php if (!empty($_SESSION["data"]["allergy_c1"])) {
                                                                                                        if ($_SESSION["data"]["allergy_c1"] == "無し") {
                                                                                                            echo "checked";
                                                                                                        }
                                                                                                    } ?> required>
                                <label for="c1_al_nasi" class="radio-label">無し</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="heading">アレルギーの種類</div>
                            <input type="text" name="allergy_name_c1" value="<?= !empty($_SESSION["data"]["allergy_name_c1"]) ? $_SESSION["data"]["allergy_name_c1"] : "" ?>">
                        </div>
                        <div class="row">
                            <div class="heading">沐浴・シャワー*</div>
                            <div class="col radio">
                                <input type="radio" name="bath_c1" id="bath_none_c1" value="不要" <?php if (!empty($_SESSION["data"]["bath_c1"])) {
                                                                                                    if ($_SESSION["data"]["bath_c1"] == "不要") {
                                                                                                        echo "checked";
                                                                                                    }
                                                                                                } ?> required>
                                <label for="bath_none_c1" class="radio-label">不要</label>
                                <input type="radio" name="bath_c1" id="bath_mokuyoku_c1" value="沐浴" <?php if (!empty($_SESSION["data"]["bath_c1"])) {
                                                                                                        if ($_SESSION["data"]["bath_c1"] == "沐浴") {
                                                                                                            echo "checked";
                                                                                                        }
                                                                                                    } ?> required>
                                <label for="bath_mokuyoku_c1" class="radio-label">沐浴</label>
                                <input type="radio" name="bath_c1" id="bash_shower_c1" value="シャワー" <?php if (!empty($_SESSION["data"]["bath_c1"])) {
                                                                                                        if ($_SESSION["data"]["bath_c1"] == "シャワー") {
                                                                                                            echo "checked";
                                                                                                        }
                                                                                                    } ?> required>
                                <label for="bash_shower_c1" class="radio-label">シャワー</label>
                            </div>
                        </div>
                    </div>


                    <div class="section">
                        <div class="child accordion dot_back">
                            <img src="<?php echo $img_fol; ?>orange.png" alt="">
                            2人目お子様
                            <img class="puls" src="<?php echo $img_fol_form; ?>puls.png" alt="">
                        </div>
                        <div class="content">
                            <div class="row">
                                <div class="heading">氏名</div>
                                <input type="text" name="name_c2" placeholder="例)鈴木　花子" id="name_c2" oninput="Checkchild2()" value="<?= !empty($_SESSION["data"]["name_c2"]) ? $_SESSION["data"]["name_c2"] : "" ?>">
                            </div>
                            <div class="row">
                                <div class="heading">フリガナ</div>
                                <input type="text" name="kana_c2" placeholder="例)スズキ　ハナコ" id="kana_c2" oninput="Checkchild2()" value="<?= !empty($_SESSION["data"]["kana_c2"]) ? $_SESSION["data"]["kana_c2"] : "" ?>">
                            </div>
                            <div class="row">
                                <div class="heading">生年月日</div>
                                <input type="text" name="birth_c2" placeholder="例)1980/4/2" id="birth_c2" oninput="Checkchild2()" value="<?= !empty($_SESSION["data"]["birth_c2"]) ? $_SESSION["data"]["birth_c2"] : "" ?>">
                            </div>
                            <div class="row">
                                <div class="heading">健康状態</div>
                                <select id="" name="status_c2">
                                    <option value="良好" <?php if (!empty($_SESSION["data"]["status_c2"])) {
                                                            if ($_SESSION["data"]["status_c2"] == "良好") {
                                                                echo "selected";
                                                            }
                                                        } ?>>
                                        良好
                                    </option>
                                    <option value="普通" <?php if (!empty($_SESSION["data"]["status_c2"])) {
                                                            if ($_SESSION["data"]["status_c2"] == "普通") {
                                                                echo "selected";
                                                            }
                                                        } ?>>
                                        普通
                                    </option>
                                    <option value="微熱" <?php if (!empty($_SESSION["data"]["status_c2"])) {
                                                            if ($_SESSION["data"]["status_c2"] == "微熱") {
                                                                echo "selected";
                                                            }
                                                        } ?>>
                                        微熱
                                    </option>
                                    <option value="鼻水、咳" <?php if (!empty($_SESSION["data"]["status_c2"])) {
                                                                if ($_SESSION["data"]["status_c2"] == "鼻水、咳") {
                                                                    echo "selected";
                                                                }
                                                            } ?>>
                                        鼻水、咳
                                    </option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="heading">アレルギー*</div>
                                <div class="col radio">
                                    <input type="radio" name="allergy_c2" id="c2_al_ari" value="有り">
                                    <label for="c2_al_ari" class="radio-label">有り</label>
                                    <input type="radio" name="allergy_c2" id="c2_al_nasi" value="無し" checked>
                                    <label for="c2_al_nasi" class="radio-label">無し</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="heading">アレルギーの種類</div>
                                <input type="text" name="allergy_name_c2" placeholder="" value="<?= !empty($_SESSION["data"]["allergy_name_c2"]) ? $_SESSION["data"]["allergy_name_c2"] : "" ?>">
                            </div>
                            <div class="row">
                                <div class="heading">沐浴・シャワー*</div>
                                <div class="col radio">
                                    <input type="radio" name="bath_c2" id="bath_none_c2" value="不要" <?php if (!empty($_SESSION["data"]["bath_c2"])) {
                                                                                                        if ($_SESSION["data"]["bath_c2"] == "不要") {
                                                                                                            echo "checked";
                                                                                                        }
                                                                                                    } ?>>
                                    <label for="bath_none_c2" class="radio-label">不要</label>
                                    <input type="radio" name="bath_c2" id="bath_mokuyoku_c2" value="沐浴" <?php if (!empty($_SESSION["data"]["bath_c2"])) {
                                                                                                            if ($_SESSION["data"]["bath_c2"] == "沐浴") {
                                                                                                                echo "checked";
                                                                                                            }
                                                                                                        } ?>>
                                    <label for="bath_mokuyoku_c2" class="radio-label">沐浴</label>
                                    <input type="radio" name="bath_c2" id="bash_shower_c2" value="シャワー" <?php if (!empty($_SESSION["data"]["bath_c2"])) {
                                                                                                            if ($_SESSION["data"]["bath_c2"] == "シャワー") {
                                                                                                                echo "checked";
                                                                                                            }
                                                                                                        } ?>>
                                    <label for="bash_shower_c2" class="radio-label">シャワー</label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="section">
                        <div class="child accordion dot_back">
                            <img src="<?php echo $img_fol; ?>orange.png" alt="">
                            3人目お子様
                            <img class="puls" src="<?php echo $img_fol_form; ?>puls.png" alt="">
                        </div>
                        <div class="content">
                            <div class="row">
                                <div class="heading">氏名</div>
                                <input type="text" name="name_c3" placeholder="例)鈴木　花子" oninput="Checkchild3()" value="<?= !empty($_SESSION["data"]["name_c3"]) ? $_SESSION["data"]["name_c3"] : "" ?>">
                            </div>
                            <div class="row">
                                <div class="heading">フリガナ</div>
                                <input type="text" name="kana_c3" placeholder="例)スズキ　ハナコ" oninput="Checkchild3()" value="<?= !empty($_SESSION["data"]["kana_c3"]) ? $_SESSION["data"]["kana_c3"] : "" ?>">
                            </div>
                            <div class="row">
                                <div class="heading">生年月日</div>
                                <input type="text" name="birth_c3" placeholder="例)1980/4/2" oninput="Checkchild3()" value="<?= !empty($_SESSION["data"]["birth_c3"]) ? $_SESSION["data"]["birth_c3"] : "" ?>">
                            </div>
                            <div class="row">
                                <div class="heading">健康状態</div>
                                <select id="" name="status_c3">
                                    <option value="良好" <?php if (!empty($_SESSION["data"]["status_c3"])) {
                                                            if ($_SESSION["data"]["status_c3"] == "良好") {
                                                                echo "selected";
                                                            }
                                                        } ?>>
                                        良好
                                    </option>
                                    <option value="普通" <?php if (!empty($_SESSION["data"]["status_c3"])) {
                                                            if ($_SESSION["data"]["status_c3"] == "普通") {
                                                                echo "selected";
                                                            }
                                                        } ?>>
                                        普通
                                    </option>
                                    <option value="微熱" <?php if (!empty($_SESSION["data"]["status_c3"])) {
                                                            if ($_SESSION["data"]["status_c3"] == "微熱") {
                                                                echo "selected";
                                                            }
                                                        } ?>>
                                        微熱
                                    </option>
                                    <option value="鼻水、咳" <?php if (!empty($_SESSION["data"]["status_c3"])) {
                                                                if ($_SESSION["data"]["status_c3"] == "鼻水、咳") {
                                                                    echo "selected";
                                                                }
                                                            } ?>>
                                        鼻水、咳
                                    </option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="heading">アレルギー*</div>
                                <div class="col radio">
                                    <input type="radio" name="allergy_c3" id="c3_al_ari" value="有り">
                                    <label for="c3_al_ari" class="radio-label">有り</label>
                                    <input type="radio" name="allergy_c3" id="c3_al_nasi" value="無し" checked>
                                    <label for="c3_al_nasi" class="radio-label">無し</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="heading">アレルギーの種類</div>
                                <input type="text" name="allergy_name_c3" placeholder="" value="<?= !empty($_SESSION["data"]["allergy_name_c3"]) ? $_SESSION["data"]["allergy_name_c3"] : "" ?>">
                            </div>
                            <div class="row">
                                <div class="heading">沐浴・シャワー*</div>
                                <div class="col radio">
                                    <input type="radio" name="bath_c3" id="bath_none_c3" value="不要" <?php if (!empty($_SESSION["data"]["bath_c3"])) {
                                                                                                        if ($_SESSION["data"]["bath_c3"] == "不要") {
                                                                                                            echo "checked";
                                                                                                        }
                                                                                                    } ?>>
                                    <label for="bath_none_c3" class="radio-label">不要</label>
                                    <input type="radio" name="bath_c3" id="bath_mokuyoku_c3" value="沐浴" <?php if (!empty($_SESSION["data"]["bath_c3"])) {
                                                                                                            if ($_SESSION["data"]["bath_c3"] == "沐浴") {
                                                                                                                echo "checked";
                                                                                                            }
                                                                                                        } ?>>
                                    <label for="bath_mokuyoku_c3" class="radio-label">沐浴</label>
                                    <input type="radio" name="bath_c3" id="bash_shower_c3" value="シャワー" <?php if (!empty($_SESSION["data"]["bath_c3"])) {
                                                                                                            if ($_SESSION["data"]["bath_c3"] == "シャワー") {
                                                                                                                echo "checked";
                                                                                                            }
                                                                                                        } ?>>
                                    <label for="bash_shower_c3" class="radio-label">シャワー</label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <?php get_template_part("form/bikou"); ?>

            </div>

            <?php get_template_part("form/kiyaku"); ?>

            <div class="submit_frame">
                <button type="submit" class="submit" name="confirm" value="confirm">
                    送信確認
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>

            <div class="btn-back1">
                <i class="fas fa-arrow-left"></i>
                お客様情報入力へ戻る
                <a href="<?php echo esc_url(home_url('/reserve-visitor-edit1')); ?>" class="a"></a>
            </div>

        </form>
    </div>
</div>

<?php get_footer("s"); ?>