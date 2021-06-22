<?php require_once("form.php"); ?>
<div class="kiyaku_s row">

    <div class="kiyaku_title">個人情報の取り扱いについて</div>

    <div class="kiyaku_des">
        以下の「個人情報の取り扱いについて」をお読みいただき、
        「同意する」にチェックをお願いします。
    </div>

    <textarea name="" id="" cols="30" rows="10" class="kiyaku_text" readonly><?php echo rule(2); ?></textarea>

    <div class="agree">
        <input type="checkbox" name="kiyaku" id="agree" value="同意する" required>
        <label for="agree">同意する</label>
    </div>
</div>