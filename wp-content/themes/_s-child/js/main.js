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
 * メールアドレス一致確認
 ******************************************************/
function CheckEmail(input) {
    //IE対応の為変更
    //var mail = email_2.value; //メールフォームの値を取得
    var mail = document.getElementById("email").value; //メールフォームの値を取得
    var mailConfirm = input.value; //メール確認用フォームの値を取得(引数input)

    // 一致確認
    if (mail != mailConfirm) {
        input.setCustomValidity('メールアドレスが一致しません'); // エラーメッセージのセット
    } else {
        input.setCustomValidity(''); // エラーメッセージのクリア
    }
}
