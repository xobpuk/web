<!DOCTYPE html>
<html lang="">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <title>Р—Р°РґР°РЅРёРµ 4</title>
</head>
<body>
    <?php
    if (!empty($messages)) {
        print('<div id="messages">');
        foreach ($messages as $message) {
            print($message);
        }
        print('</div>');
    }
    ?>
    <div class="form-container">
        <form method="POST" action="">
            <div class="input-group block">
                <input type="text" class="form-control" name="name"
                    placeholder="Р’Р°С€Рµ РёРјСЏ" 
                    <?php if ($errors['name']) {print 'class="error"';} ?> value="<?php print $values['name']; ?>"/>
            </div>
            <div class="input-group block">
                <input type="text" class="form-control" name="email"
                    placeholder="example@mail.ru" 
                    <?php if ($errors['email']) {print 'class="error"';} ?> value="<?php print $values['email']; ?>"/>
            </div>
            <div class="block" id="birth-block">
                <span class="block-title">Р”Р°С‚Р° СЂРѕР¶РґРµРЅРёСЏ</span>
                <input type="birth" class="form-control" placeholder="example@mail.ru"
                    name="birth" 
                    <?php if ($errors['birth']) { print 'class="error"';} ?> value="<?php print $values['birth']; ?>"/>
            </div>
            <div class="block" id="gender-block">
                <span class="block-title">РџРѕР»</span>
                <div class="radios">
                    <div class="male-radio">
                        <input class="form-check-input" type="radio" name="gender" value="m" <?php if ($values['gender'] == 'm') {print 'checked';}; ?>/>
                        <label class="form-check-label" for="male">РњСѓР¶СЃРєРѕР№</label>
                    </div>
                    <div class="female-radio">
                        <input class="form-check-input" type="radio" name="gender" value="f" <?php if ($values['gender'] == 'f') {print 'checked';}; ?>/>
                        <label class="form-check-label" for="female">Р–РµРЅСЃРєРёР№</label>
                    </div>
                </div>
            </div>
            <div class="block" id="limbs-block">
                <span class="block-title">РљРѕРЅРµС‡РЅРѕСЃС‚Рё</span>
                <div class="radios">
                    <div class="limbs-radio">
                        <input class="form-check-input" type="radio" name="limbs" value="1" <?php if ($values['limbs'] == '1') {print 'checked';}; ?>/>
                        <label class="form-check-label" for="male">1</label>
                    </div>
                    <div class="limbs-radio">
                        <input class="form-check-input" type="radio" name="limbs" value="2" <?php if ($values['limbs'] == '2') {print 'checked';}; ?>/>
                        <label class="form-check-label" for="female">2</label>
                    </div>
                    <div class="limbs-radio">
                        <input class="form-check-input" type="radio" name="limbs" value="3" <?php if ($values['limbs'] == '3') {print 'checked';}; ?>/>
                        <label class="form-check-label" for="female">3</label>
                    </div>
                    <div class="limbs-radio">
                        <input class="form-check-input" type="radio" name="limbs" value="4" <?php if ($values['limbs'] == '4') {print 'checked';}; ?>/>
                        <label class="form-check-label" for="female">4</label>
                    </div>
                </div>
            </div>
            <div class="block">
                <span class="block-title">РЎРїРѕСЃРѕР±РЅРѕСЃС‚Рё</span>
                <select class="form-select form-select-lg mb-2" name="abilities[]" multiple <?php if ($errors['abilities']) {print 'class="error"';} ?>>
                    <option value="endless life" 
                    <?php $arr = explode(',', $values['abilities']);
                                        if ($arr != '') {
                                            foreach ($arr as $value) {
                                                if ($value == "endless life") {
                                                    print 'selected';
                                                }
                                            }
                                        }
                                        ?>>Р‘РµСЃСЃРјРµСЂС‚РёРµ</option>
                    <option value="through walls" <?php $arr = explode(',', $values['abilities']);
                                        if ($arr != '') {
                                            foreach ($arr as $value) {
                                                if ($value == "through walls") {
                                                    print 'selected';
                                                }
                                            }
                                        }
                                        ?>>РџСЂРѕС…РѕР¶РґРµРЅРёРµ СЃРєРІРѕР·СЊ СЃС‚РµРЅС‹</option>
                    <option value="levitation" <?php $arr = explode(',', $values['abilities']);
                                        if ($arr != '') {
                                            foreach ($arr as $value) {
                                                if ($value == "levitation") {
                                                    print 'selected';
                                                }
                                            }
                                        }
                                        ?>>Р›РµРІРёС‚Р°С†РёСЏ</option>
                </select>
            </div>
            <div class="input-group">
                <textarea class="form-control" placeholder="Р Р°СЃСЃРєР°Р¶РёС‚Рµ Рѕ СЃРµР±Рµ..." name="bio" <?php if ($errors['bio']) {print 'class="error"';} ?>>
                <?php print $values['bio']; ?>
            </textarea>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="y" id="policy" name="policy" checked/>
                <label class="form-check-label" for="policy">РЎРѕРіР»Р°СЃРµРЅ СЃ РїРѕР»РёС‚РёРєРѕР№ РѕР±СЂР°Р±РѕС‚РєРё РґР°РЅРЅС‹С…</label>
            </div>
            <button class="btn btn-primary" type="submit" id="send-btn">РћС‚РїСЂР°РІРёС‚СЊ</button>
        </form>
    </div>
</body>
</html>
