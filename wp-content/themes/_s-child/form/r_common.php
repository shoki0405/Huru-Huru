<div class="row">
    <div class="heading">ご希望日時*</div>
    <div class="col">
        <div class="hyoki">※24時間表記で記載をお願い致します。</div>
        <input type="date" class="rsv_date" name="start_date" value="<?= !empty($_SESSION["data"]["start_date"]) ? $_SESSION["data"]["start_date"] : "" ?>" required>
    </div>
    <div class="col">
        <input type="text" class="rsv_time" name="start_hour" placeholder="9" value="<?= !empty($_SESSION["data"]["start_hour"]) ? $_SESSION["data"]["start_hour"] : "" ?>" required>
        <span>時</span>
        <input type="text" class="rsv_time" name="start_minuts" placeholder="00" value="<?= !empty($_SESSION["data"]["start_minuts"]) ? $_SESSION["data"]["start_minuts"] : "" ?>" required>
        <span>分から</span>
    </div>
</div>





<div class="row">
    <div class="heading"></div>
    <input type="date" class="rsv_date" name="end_date" value="<?= !empty($_SESSION["data"]["end_date"]) ? $_SESSION["data"]["end_date"] : "" ?>" required>
    <div class="col">
        <input type="text" class="rsv_time" name="end_hour" placeholder="21" value="<?= !empty($_SESSION["data"]["end_hour"]) ? $_SESSION["data"]["end_hour"] : "" ?>" required>
        <span>時</span>
        <input type="text" class="rsv_time" name="end_minuts" placeholder="00" value="<?= !empty($_SESSION["data"]["end_minuts"]) ? $_SESSION["data"]["end_minuts"] : "" ?>" required>
        <span>分まで</span>
    </div>
</div>





<div class="row">
    <div class="heading">延長の可能性*</div>
    <div class="col radio">
        <input type="radio" name="extension" id="entyo_ari" value="有り" checked required>
        <label for="entyo_ari" class="radio-label">有り</label>
        <input type="radio" name="extension" id="entyo_nasi" value="無し" required>
        <label for="entyo_nasi" class="radio-label">無し</label>
    </div>
</div>





<div class="row">
    <div class="heading">保護者氏名*</div>
    <input type="text" name="fullname" placeholder="例)鈴木　花子" value="<?= !empty($_SESSION["data"]["fullname"]) ? $_SESSION["data"]["fullname"] : "" ?>" required>
</div>





<div class="row">
    <div class="heading">フリガナ*</div>
    <input type="text" name="kana" placeholder="例)スズキ　ハナコ" value="<?= !empty($_SESSION["data"]["kana"]) ? $_SESSION["data"]["kana"] : "" ?>" required>
</div>





<div class="row">
    <div class="heading">生年月日*</div>
    <input type="text" name="birth" placeholder="例)1980/4/2" value="<?= !empty($_SESSION["data"]["birth"]) ? $_SESSION["data"]["birth"] : "" ?>" required>
</div>