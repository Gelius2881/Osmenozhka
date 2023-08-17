<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use \Bitrix\Main\Page\Asset;
Asset::getInstance()->addCss("https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css");
Asset::getInstance()->addJs("https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js");
$this->setFrameMode(true);


if ('Y' == $arParams['USER']){
	$user = 'required';
}
if ('Y' == $arParams['PHONE']){
	$phone = 'required';
}
if ('Y' == $arParams['EMAIL']){
	$email = 'required';
}
if ('Y' == $arParams['COMMENTS']){
	$comments = 'required';
}


?>
<div class="form">
	<form method="POST" id="osm_form">
		<div class="mb-3">
			<label for="inputUser" class="form-label"><?=GetMessage('OSM_USER') ?></label>
			<input type="text" class="form-control" name="inputUser" id="inputUser" <?=$user?>>
		</div>
		<div class="mb-3">
			<label for="inputPhone" class="form-label"><?=GetMessage('OSM_PHONE') ?></label>
			<input type="tel" class="form-control" name="inputPhone" id="inputPhone" <?=$phone?>>
		</div>
		<div class="mb-3">
			<label for="inputEmail" class="form-label"><?=GetMessage('OSM_EMAIL') ?></label>
			<input type="email" class="form-control" name="inputEmail" id="inputEmail" <?=$email?>>
		</div>
		<div class="form-floating">
  			<textarea class="form-control" placeholder="Оставьте комментарий" name="floatingTextarea" id="floatingTextarea" <?=$comments?>></textarea>
  			<label	label for="floatingTextarea"><?=GetMessage('OSM_COMMENTS') ?></label>
		</div>
		<br>
		<button type="submit" class="btn btn-primary"><?=GetMessage('OSM_SUBMIT') ?></button>
	</form>
</div>