/*****************************************************
 * aタグを親要素いっぱいに広げるため、.aの親要素をrelative
 ******************************************************/
$('.a').parent().css('position', 'relative');

/*****************************************************
 * ハンバーガーメニュー表示&非表示
 ******************************************************/
$(function () {
    $('.btn-ham').on('click', function () {
        $(this).toggleClass('active');
        $('#ham').toggleClass('active');
        return false;
    });
});

/*****************************************************
 * お子様情報、表示&非表示
 ******************************************************/
$(function () {
    $('.accordion').click(function () {
        $(this).toggleClass('selected');
        $(this).next().slideToggle();
    });
});

/*****************************************************
 * メール一致チェック
 ******************************************************/
function CheckEmail() {
    var mail = document.getElementById("email"); //メールフォームの値を取得
    var mailConfirm = document.getElementById("email_cnf"); //メール確認用フォームの値を取得(引数input)

    if (mail.value != mailConfirm.value) {
        mailConfirm.setCustomValidity('メールアドレスが一致しません'); // エラーメッセージのセット
    } else {
        mailConfirm.setCustomValidity(''); // エラーメッセージのクリア
    }
}

/*****************************************************
 * お子様情報バリデーション
 ******************************************************/
function Checkchild2() {
    var name = document.getElementById("name_c2");
    var kana = document.getElementById("kana_c2");
    var birth = document.getElementById("birth_c2");
    if (name.value != "" && kana.value == "") {
        kana.setCustomValidity('フリガナを入力してください');
    } else {
        kana.setCustomValidity('');
    }
    if (name.value != "" && birth.value == "") {
        birth.setCustomValidity('生年月日を入力してください');
    } else {
        birth.setCustomValidity('');
    }
}
function Checkchild3() {
    var name = document.getElementById("name_c3");
    var kana = document.getElementById("kana_c3");
    var birth = document.getElementById("birth_c3");
    if (name.value != "" && kana.value == "") {
        kana.setCustomValidity('フリガナを入力してください');
    } else {
        kana.setCustomValidity('');
    }
    if (name.value != "" && birth.value == "") {
        birth.setCustomValidity('生年月日を入力してください');
    } else {
        birth.setCustomValidity('');
    }
}

/*****************************************************
 * header 下スクロールで非表示、上スクロールで表示
 ******************************************************/
$(function () {
    var pos = 0;
    // var header = $('header');
    var header = $('#masthead');

    $(window).on('scroll', function () {
        if ($(this).scrollTop() < pos) {
            //上スクロール時の処理
            header.removeClass('hide');
        } else {
            //下スクロール時の処理
            header.addClass('hide');
        }
        pos = $(this).scrollTop();
    });
});

/*****************************************************
 * トップへスクロールする
 ******************************************************/
jQuery(function () {
    var appear = false;
    var pagetop = $('#page_top');
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {  //100pxスクロールしたら
            if (appear == false) {
                appear = true;
                pagetop.stop().animate({
                    'bottom': '50px' //下から50pxの位置に
                }, 300); //0.3秒かけて現れる
            }
        } else {
            if (appear) {
                appear = false;
                pagetop.stop().animate({
                    'bottom': '-50px' //下から-50pxの位置に
                }, 300); //0.3秒かけて隠れる
            }
        }
    });
    pagetop.click(function () {
        $('body, html').animate({ scrollTop: 0 }, 500); //0.5秒かけてトップへ戻る
        return false;
    });
});
