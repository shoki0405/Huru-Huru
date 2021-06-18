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