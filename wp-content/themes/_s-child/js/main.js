/*****************************************************
 * aタグを親要素いっぱいに広げるため、.aの親要素をrelative
 ******************************************************/
$('.a').parent().css('position', 'relative');

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
    // var header = $('.site-header');
    // var header = $('#masthead');

    $(window).on('scroll', function () {
        var header = $('.site-header');
        if ($(this).scrollTop() < pos) {
            //上スクロール時の処理
            header.removeClass('hide');
        } else {
            //下スクロール時の処理
            if (!$('.back_circle').hasClass('expand')) {
                header.addClass('hide');
            }
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
        console.log(pagetop.html);
        $('body, html').animate({ scrollTop: 0 }, 500); //0.5秒かけてトップへ戻る
        return false;
    });
    var pagetop_sp = $('#page_top_sp');
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {  //100pxスクロールしたら
            if (appear == false) {
                appear = true;
                pagetop_sp.stop().animate({
                    'bottom': '50px' //下から50pxの位置に
                }, 300); //0.3秒かけて現れる
            }
        } else {
            if (appear) {
                appear = false;
                pagetop_sp.stop().animate({
                    'bottom': '-50px' //下から-50pxの位置に
                }, 300); //0.3秒かけて隠れる
            }
        }
    });
    pagetop_sp.click(function () {
        console.log(pagetop_sp.html);
        $('body, html').animate({ scrollTop: 0 }, 500); //0.5秒かけてトップへ戻る
        return false;
    });
});

/*****************************************************
 * ハンバーガーメニュー　アニメーション
 ******************************************************/

if ('ontouchstart' in window) { var click = 'touchstart'; }
else { var click = 'click'; }

$('div.burger').on(click, function () {
    if (!$(this).hasClass('open')) { openMenu(); }
    else { closeMenu(); }
});

// $('div.menu ul li a').on(click, function (e) {
//     e.preventDefault();
//     closeMenu();
// });

function openMenu() {
    $('div.back_circle').addClass('expand');
    $('div.burger').addClass('open');
    $('div.x, div.y, div.z').addClass('collapse');
    $('.menu li').addClass('animate');
    setTimeout(function () {
        $('div.y').hide();
        $('div.x').addClass('rotate30');
        $('div.z').addClass('rotate150');
    }, 70);
    setTimeout(function () {
        $('div.x').addClass('rotate45');
        $('div.z').addClass('rotate135');
    }, 120);
}
function closeMenu() {
    $('div.burger').removeClass('open');
    $('div.x').removeClass('rotate45').addClass('rotate30');
    $('div.z').removeClass('rotate135').addClass('rotate150');
    $('div.back_circle').removeClass('expand');
    $('.menu li').removeClass('animate');
    setTimeout(function () {
        $('div.x').removeClass('rotate30');
        $('div.z').removeClass('rotate150');
    }, 50);
    setTimeout(function () {
        $('div.y').show();
        $('div.x, div.y, div.z').removeClass('collapse');
    }, 70);
}

/*****************************************************
 * topページ以外フッターの電話非表示
 ******************************************************/
var path = location.pathname;
console.log(path);
if (path !== "/PlanetPage/sitter/") {
    $("#footer_top_tel").css("display", "none");
}
// if (path !== "/") {
//     $("#footer_top_tel").css("display", "none");
// }