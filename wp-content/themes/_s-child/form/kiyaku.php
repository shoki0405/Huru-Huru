<?php require_once("form.php"); ?>
<div class="kiyaku">
    <div class="inner">
        <div class="kiyaku_des">
            以下の『個人情報の取扱いについて』と『利用規約』をお読みいただき、「同意する」にチェックをお願いします。
        </div>
        <div class="kiyaku_title">
            利用規約
        </div>
        <textarea name="" id="" cols="30" rows="10" class="kiyaku_text" readonly><?php echo rule(1); ?></textarea>
        <div class="kiyaku_title">
            個人情報の取り扱いについて
        </div>
        <textarea name="" id="" cols="30" rows="10" class="kiyaku_text" readonly><?php echo rule(2); ?></textarea>

        <div class="agree">
            <div class="kiyaku_title">
                利用と個人情報の取り扱いについて
            </div>
            <input type="checkbox" name="kiyaku" id="agree" value="同意する" required>
            <label for="agree">同意する</label>
        </div>
    </div>
</div>