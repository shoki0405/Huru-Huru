<?php
require_once("form/form.php");

$img_fol = get_stylesheet_directory_uri() . "/img/";
$img_fol_entry = get_stylesheet_directory_uri() . "/img/entry/";


$data = [];

if (!empty($_POST["submit"])) {

    // SESSIONに格納
    $data = [
        "fullname"   => $_POST["fullname"],
        "email"     => $_POST["email"],
        "tel"     => $_POST["tel"],
        "zip"   => $_POST["zip"],
        "pref"    => $_POST["pref"],
        "address"    => $_POST["address"],
        "history"    => $_POST["history"],
    ];

    $data["building"] = !empty($_POST["building"]) ? $_POST["building"] : "";
    $data["career"] = !empty($_POST["career"]) ? $_POST["career"] : "";
    $data["bikou"] = !empty($_POST["bikou"]) ? $_POST["bikou"] : "";

    // ファイル有ればアップロード
    if (!empty($_FILES["picture"])) {
        if (!move_uploaded_file($_FILES["picture"]['tmp_name'], TMP . $_FILES["picture"]['name'])) {
            $error_message = "画像を送信できませんでした。再度ご確認の上もう一度お試しください。";
            exit;
        }
    }

    if (send(ENTRY, $data, $_FILES["picture"])) {
        $success_message = "お問い合わせを受け付けました。";
        $_POST = [];
    } else {
        $error_message = "送信に失敗しました。再度ご確認の上もう一度お試しください。";
    }
}

get_header();
get_template_part("template/right_menu_entry");



?>

<div class="entry">
    <div class="entry_mv">
        <img class="pc_765" src="<?php echo $img_fol_entry; ?>mv.png" alt="">
        <img class="tb_765" src="<?php echo $img_fol_entry; ?>mv_sp.png" alt="">
        <div class="entry_mv_content">
            <div class="entry_mv_title">子育てを<span class="kaigyo">応援したい。</span></div>
            <div class="entry_mv_text">
                お子様に愛情をもって接することができ、<br>
                <span class="kaigyo">
                    仕事に責任をもって取り組める<br>
                    シッターさん募集
                </span>
            </div>
        </div>
    </div>




    <div class="content1">

        <div class="content1_text">
            <span class="kaigyo">保育経験、資格のある方、</span>HURU-HURUで一緒に働きませんか？<br>
            <span class="kaigyo_pc_765">併設の託児所内にてお子様について学ぶことができます。</span>
            <span class="kaigyo_pc_765">お客様、お子さまによってサービスが変わってきます。</span>
            安心してご利用いただけるよう一緒に良いサービスを考えていきましょう。
        </div>

        <div class="content1_img">
            <img class="pc_765" src="<?php echo $img_fol_entry; ?>img1.svg" alt="">
            <img class="tb_765" src="<?php echo $img_fol_entry; ?>img1.png" alt="">
        </div>

        <div class="content1_text">
            <span class="kaigyo_pc_765">HURU-HURUは、資格の有無だけでなく誠実な人柄、お子様の変化に気づき、</span>
            <span class="kaigyo_pc_765">状況に合わせて対応ができるシッターの育成を目指しています。</span><br>
            <span class="kaigyo_pc_765">そのため、併設の託児所内にて多くのお子様と触れ合い、おむつ交換、遊び等、</span>
            学ぶ場を提供しております。<br>
            <span class="kaigyo_pc_765">また、シッターとしての礼儀やマナーについても研修を行い</span>
            お客様が安心してご利用頂けるよう努めています。
        </div>

        <div class="content1_flex">
            <div class="content1_item">
                <div class="content1_item_img">
                    <img src="<?php echo $img_fol_entry; ?>img2.png" alt="">
                </div>
                <div class="content1_item_title">
                    働きたいときに働ける
                </div>
                <div class="content1_item_text">
                    自分のスケジュールに合わせて、空いている時間に働くことができます。<br>
                    週末、夜間などご希望にあわせて調整します。

                </div>
            </div>
            <div class="content1_item">
                <div class="content1_item_img">
                    <img src="<?php echo $img_fol_entry; ?>img3.png" alt="">
                </div>
                <div class="content1_item_title">
                    充実した相談体制
                </div>
                <div class="content1_item_text">
                    こんなときどうしたらいい？など分からない事分からない事があれば１人で抱え込まずご相談ください。<br>
                    お客様のお子様をお預かりするということは責任のある仕事です。一緒に解決し、お客様に安心していただけるサービスを考えていきましょう。

                </div>
            </div>
        </div>

    </div>


    <div class="content2">

        <div class="content2_title">託児所での<span class="kaigyo">実践研修の実施</span></div>

        <div class="content2_img">
            <img src="<?php echo $img_fol_entry; ?>img4.png" alt="">
        </div>

        <div class="content2_text">
            <span class="kaigyo_pc_765">併設の託児所内にて実際に、いろんな年齢のお子様と触れ合い、</span>
            オムツ交換や食事介助、遊びなど現場を想定して行っています。
        </div>

        <div class="content2_flex">
            <div class="content2_item entry_training">

                <div class="entry_training_back">
                    <img src="<?php echo $img_fol_entry; ?>entry_training.png" alt="">
                </div>
                <div class="entry_training_title">主な研修内容</div>
                <div>
                    <ul>
                        <li>マナー</li>
                        <li>当日の流れ</li>
                        <li>保育の連絡帳の書き方</li>
                        <li>遊び方など</li>
                        <li>おむつ交換、トイレ誘導</li>
                        <li>ミルクの作り方、授乳方法</li>
                        <li>食事介助</li>
                        <li>睡眠チェック</li>
                        <li>病気・怪我と応急手当</li>
                        <li>災害時、緊急時の対応</li>
                    </ul>
                </div>
                <div class="entry_training_img">
                    <img src="<?php echo $img_fol_entry; ?>img5.svg" alt="">
                </div>


            </div>
            <div class="content2_item entry_flow">
                <div class="entry_flow_back">
                    <img src="<?php echo $img_fol_entry; ?>flow.png" alt="">
                </div>
                <div class="entry_flow_title">採用の流れ</div>
                <div class="entry_flow_list">
                    <div class="entry_flow_item">申し込み</div>
                    <div class="entry_flow_arrow">▼</div>
                    <div class="entry_flow_item">履歴書送付</div>
                    <div class="entry_flow_arrow">▼</div>
                    <div class="entry_flow_item">面接</div>
                    <div class="entry_flow_arrow">▼</div>
                    <div class="entry_flow_item">託児所実地試験</div>
                    <div class="entry_flow_arrow">▼</div>
                    <div class="entry_flow_item">登録可否の決定</div>
                    <div class="entry_flow_arrow">▼</div>
                    <div class="entry_flow_item">当社との契約の締結</div>
                    <div class="entry_flow_arrow">▼</div>
                    <div class="entry_flow_item">事前研修</div>
                </div>
            </div>

        </div>
    </div>






    <div class="content3">
        <div class="content3_title">
            「働いてよかった！」<br>
            ベビーシッターの声
        </div>
        <div class="content3_flex">
            <div class="content3_item">
                <div class="content3_img">
                    <img src="<?php echo $img_fol; ?>zaiseki_kari.png" alt="">
                </div>
                <div class="content3_name">30代<br>ああさん</div>
                <div class="content3_catch">キャッチコピー</div>
                <div class="content3_text">
                    コピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピー
                    コピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピー
                    コピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピー
                </div>
            </div>
            <div class="content3_item">
                <div class="content3_img">
                    <img src="<?php echo $img_fol; ?>zaiseki_kari.png" alt="">
                </div>
                <div class="content3_name">30代<br>ああさん</div>
                <div class="content3_catch">キャッチコピー</div>
                <div class="content3_text">
                    コピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピー
                    コピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピー
                    コピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピー
                </div>
            </div>
            <div class="content3_item">
                <div class="content3_img">
                    <img src="<?php echo $img_fol; ?>zaiseki_kari.png" alt="">
                </div>
                <div class="content3_name">30代<br>ああさん</div>
                <div class="content3_catch">キャッチコピー</div>
                <div class="content3_text">
                    コピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピー
                    コピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピー
                    コピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピーコピー
                </div>
            </div>
        </div>
    </div>






    <div class="content4">
        <div class="content4_img1">
            <img src="<?php echo $img_fol; ?>smile.png" alt="">
        </div>

        <div class="content4_title">採用条件</div>

        <div class="content4_text">以下のいずれかを満たす方</div>

        <div class="t1">
            <div class="flex">
                <div class="item1">1.以下の場所での勤務経験のある方(3年以上)</div>
                <div class="item2">
                    <span class="kaigyo">・保育園</span>
                    <span class="kaigyo">・託児所</span>
                    <span class="kaigyo">・幼稚園</span>
                    <span class="kaigyo">・小学校</span>
                    <span class="kaigyo">・病院</span>

                </div>
            </div>
            <div class="flex">
                <div class="item1">2.以下の資格を保有している方</div>
                <div class="item2">
                    <span class="kaigyo">・保育士</span>
                    <span class="kaigyo">・看護師</span>
                    ・保健師<br>
                    <span class="kaigyo">・ベビーシッター</span>
                    <span class="kaigyo">・幼稚園教諭</span>
                </div>
            </div>
        </div>


        <div class="content4_title">
            <div class="content4_img2">
                <img src="<?php echo $img_fol; ?>cut.png" alt="">
            </div>
            募集内容
        </div>


        <div class="t2">
            <div class="flex">
                <div class="item1">時給</div>
                <div class="item2">1,200円～</div>
            </div>
            <div class="flex">
                <div class="item1">勤務時間</div>
                <div class="item2">24時間対応(ご希望に応じて)</div>
            </div>
            <div class="flex">
                <div class="item1">勤務地</div>
                <div class="item2">東京23区内</div>
            </div>
            <div class="flex">
                <div class="item1">交通費</div>
                <div class="item2">交通費支給(上限有)</div>
            </div>
        </div>

    </div>



    <div class="entry_form" id="entryform">

        <div class="entry_form_title">
            <img class="ster1" src="<?php echo $img_fol_entry; ?>ster1.png" alt="">
            <img class="ster2" src="<?php echo $img_fol_entry; ?>ster2.png" alt="">
            登録応募フォーム
        </div>

        <div class="">
            <form action="#entryform" class="form" method="post" enctype="multipart/form-data">
                <div class="inner">

                    <?php if (!empty($success_message)) {
                        echo "<div class='success_message'>";
                        echo $success_message;
                        echo "</div>";
                    } elseif (!empty($error_message)) {
                        echo "<div class='error_message'>";
                        echo $error_message;
                        echo "</div>";
                    } ?>


                    <div class="hissu">
                        ※=必須項目
                    </div>



                    <div class="row">
                        <div class="heading">氏名*</div>
                        <input type="text" name="fullname" placeholder="例)鈴木　花子" value="<?= !empty($_POST["fullname"]) ? $_POST["fullname"] : "" ?>" required>
                    </div>

                    <div class="row">
                        <div class="heading">電話番号*</div>
                        <input type="tel" name="tel" size="10" maxlength="20" placeholder="例)00-0000-0000" value="<?= !empty($_POST["tel"]) ? $_POST["tel"] : "" ?>" required>
                    </div>
                    <div class="row">
                        <div class="heading">メールアドレス*</div>
                        <input type="email" name="email" placeholder="例)example@example.com" value="<?= !empty($_POST["email"]) ? $_POST["email"] : "" ?>" id="email" required>
                    </div>

                    <div class="row">
                        <div class="heading">郵便番号*</div>
                        <input type="text" name="zip" placeholder="例)101-0000" value="<?= !empty($_POST["zip"]) ? $_POST["zip"] : "" ?>" required>
                    </div>

                    <div class="row">
                        <div class="heading">都道府県*</div>
                        <select name="pref" required>
                            <option value="東京都" selected>東京都</option>
                            <option value="北海道">北海道</option>
                            <option value="青森県">青森県</option>
                            <option value="岩手県">岩手県</option>
                            <option value="宮城県">宮城県</option>
                            <option value="秋田県">秋田県</option>
                            <option value="山形県">山形県</option>
                            <option value="福島県">福島県</option>
                            <option value="茨城県">茨城県</option>
                            <option value="栃木県">栃木県</option>
                            <option value="群馬県">群馬県</option>
                            <option value="埼玉県">埼玉県</option>
                            <option value="千葉県">千葉県</option>
                            <option value="神奈川県">神奈川県</option>
                            <option value="新潟県">新潟県</option>
                            <option value="富山県">富山県</option>
                            <option value="石川県">石川県</option>
                            <option value="福井県">福井県</option>
                            <option value="山梨県">山梨県</option>
                            <option value="長野県">長野県</option>
                            <option value="岐阜県">岐阜県</option>
                            <option value="静岡県">静岡県</option>
                            <option value="愛知県">愛知県</option>
                            <option value="三重県">三重県</option>
                            <option value="滋賀県">滋賀県</option>
                            <option value="京都府">京都府</option>
                            <option value="大阪府">大阪府</option>
                            <option value="兵庫県">兵庫県</option>
                            <option value="奈良県">奈良県</option>
                            <option value="和歌山県">和歌山県</option>
                            <option value="鳥取県">鳥取県</option>
                            <option value="島根県">島根県</option>
                            <option value="岡山県">岡山県</option>
                            <option value="広島県">広島県</option>
                            <option value="山口県">山口県</option>
                            <option value="徳島県">徳島県</option>
                            <option value="香川県">香川県</option>
                            <option value="愛媛県">愛媛県</option>
                            <option value="高知県">高知県</option>
                            <option value="福岡県">福岡県</option>
                            <option value="佐賀県">佐賀県</option>
                            <option value="長崎県">長崎県</option>
                            <option value="熊本県">熊本県</option>
                            <option value="大分県">大分県</option>
                            <option value="宮崎県">宮崎県</option>
                            <option value="鹿児島県">鹿児島県</option>
                            <option value="沖縄県">沖縄県</option>
                        </select>
                    </div>

                    <div class="row">
                        <div class="heading">住所*</div>
                        <input type="text" name="address" placeholder="例)中央区銀座7-15-18" value="<?= !empty($_POST["address"]) ? $_POST["address"] : "" ?>" required>
                    </div>

                    <div class="row">
                        <div class="heading">建物名</div>
                        <input type="text" name="building" value="<?= !empty($_POST["building"]) ? $_POST["building"] : "" ?>">
                    </div>

                    <div class="row">
                        <div class="heading">職務経歴*</div>
                        <textarea name="history" id="" cols="30" rows="10" required>
<?= !empty($_POST["history"]) ? $_POST["history"] : "●●●年〜●●●年　＋＋＋＋
●●●年〜●●●年　＋＋＋＋
●●●年〜●●●年　＋＋＋＋" ?>
                        </textarea>
                    </div>

                    <div class="row">
                        <div class="heading">保有資格</div>
                        <textarea name="career" id="" cols="30" rows="10">
<?= !empty($_POST["career"]) ? $_POST["career"] : "" ?></textarea>
                    </div>

                    <div class="row">
                        <div class="heading">
                            備考
                        </div>
                        <textarea name="bikou" id="" cols="30" rows="10" class="bikou_text">
<?= !empty($_POST["bikou"]) ? $_POST["bikou"] : "" ?></textarea>
                    </div>

                    <div class="row filerow">
                        <div class="heading">本人写真添付*</div>
                        <div class="col">
                            <div class="btn_frame">
                                <label for="file" class="file_btn">選択
                                    <input type="file" id="file" name="picture" accept="image/jpeg, image/png" onchange="$('#fake_text_box').html($(this).val())">
                                </label>
                            </div>
                            <div id="fake_text_box">ファイルを選択してください。</div>
                        </div>
                    </div>

                    <?php get_template_part("form/kiyaku_s"); ?>

                </div>

                <div class="submit_frame">
                    <button type="submit" class="submit" name="submit" value="submit">
                        送信する
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>
<?php
get_footer("s");
?>