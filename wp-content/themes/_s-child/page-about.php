<?php
get_header();

get_template_part("template/right_menu");
get_template_part("template/bottom_menu");
$img_fol = get_stylesheet_directory_uri() . "/img/";
$img_fol_overview = get_stylesheet_directory_uri() . "/img/overview/";
?>

<div class="overview">
    <div class="mv_page">
        <img class="pc" src="<?php echo $img_fol_overview; ?>mv.png" alt="">
        <img class="sp" src="<?php echo $img_fol_overview; ?>mv_sp.png" alt="">
    </div>

    <div class="content1">
        <div class="title">HURU-HURUとは</div>
        <div class="des">
            「自分の時間が持てない」「仕事との両立が大変」など、パパママ自身の悩みって多いですよね…。<br>
            育児疲れがイライラの原因になって、子どもとの関係が悪くなってしまうことも。<br><br>
            ベビーシッターや託児所をリフレッシュのために使うなんて…と抵抗感があるかもしれませんが、大丈夫。<br>
            ママがリフレッシュすれば、余裕も生まれ元気になって子どもと向き合うことができます。<br>
            HURU-HURUはそんなママ、パパが安心して預けられる愛情のこもったサービスを目指しています。
        </div>
        <div class="img">
            <img src="<?php echo $img_fol_overview; ?>overview_img1.svg" alt="">
        </div>
    </div>

    <div class="content2 dot_back">
        <div class="inner">
            <div class="title">会社概要</div>
            <div class="img">
                <img src="<?php echo $img_fol_overview; ?>overview_content2_img.png" alt="">
            </div>
            <div class="head">
                <img src="<?php echo $img_fol_overview; ?>overview_content2_1.svg" alt="">
                商号
            </div>
            <div class="data">
                株式会社 mommy daddy
            </div>
            <div class="head">
                <img src="<?php echo $img_fol_overview; ?>overview_content2_2.svg" alt="">
                代表者
            </div>
            <div class="data">
                代表取締役　長坂 有浩
            </div>
            <div class="head">
                <img src="<?php echo $img_fol_overview; ?>overview_content2_3.svg" alt="">
                本社
            </div>
            <div class="data">
                東京都中央区銀座7-15-18 銀ビル4F<br>
                Tel: 03-4400-2290
            </div>
            <div class="head img_half">
                <img src="<?php echo $img_fol_overview; ?>overview_content2_4.svg" alt="">
                設立
            </div>
            <div class="data">
                2020年11月
            </div>
            <div class="head">
                <img src="<?php echo $img_fol_overview; ?>overview_content2_5.svg" alt="">
                事業内容
            </div>
            <div class="data">
                ● ベビーシッター<br>
                ● キッズシッター業務の請負<br>
                ● 託児付きイベントの企画・運営
            </div>
            <!-- <div class="head">
                <img src="<?php echo $img_fol_overview; ?>overview_content2_6.svg" alt="">
                従業員数
            </div>
            <div class="data">
                平成21年4月現在(非正社員を含む)
            </div> -->
            <div class="head img_half">
                <img src="<?php echo $img_fol_overview; ?>overview_content2_7.svg" alt="">
                提携医院
            </div>
            <div class="data">
                ++++医院<br>
                ++++医院<br>
                ++++医院
            </div>
            <div class="head">
                <img src="<?php echo $img_fol_overview; ?>overview_content2_8.svg" alt="">
                有資格者/研修受講状況
            </div>
            <div class="data">
                保育スタッフ00名<br>
                _______________________<br><br>
                内訳：保育士00名<br>
                看護師0名<br>
                ACSA認定ベビーシッター0名<br>
                ※2021年3月現在
            </div>
        </div>
    </div>
</div>



<?php
get_footer();
?>