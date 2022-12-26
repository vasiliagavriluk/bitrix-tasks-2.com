<? 
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>


<?if ($arResult["isFormNote"] != "Y")
{
?>
<div class="contact-form">
    <div class="contact-form__head">
        <div class="contact-form__head-title"><?=$arResult["FORM_TITLE"]?></div>
        <div class="contact-form__head-text"><?=$arResult["FORM_DESCRIPTION"]?></div>		
    </div>

	<?= str_replace('<form','<form class="contact-form__form"',  $arResult["FORM_HEADER"]) ?>  
		<div class="contact-form__form-inputs">
			<? foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion)
				{?>	
					<?if ($arQuestion["STRUCTURE"][0]["FIELD_TYPE"] != "textarea") { ?>
						<div class="input contact-form__input">
							<label class="input__label" for="medicine_name">
								<div class="input__label-text">
									<?=$arQuestion["CAPTION"]?><?if ($arQuestion["REQUIRED"] == "Y"):?><?=$arResult["REQUIRED_SIGN"];?><?endif;?>
								</div>										
											
								<? if ($arQuestion["REQUIRED"] == "Y") {
									if($arQuestion["CAPTION"] == "Номер телефона")
									{
										echo (str_replace('<input','<input class="input__input" type="'.$arQuestion["STRUCTURE"][0]["FIELD_TYPE"].'" placeholder="+79999999999" data-inputmask="\'mask\': \'+79999999999\', \'clearIncomplete\': \'true\'" maxlength="12" x-autocompletetype="phone-full" required', $arQuestion["HTML_CODE"] ));

									}
									else
									{
										echo (str_replace('<input','<input class="input__input" type="'.$arQuestion["STRUCTURE"][0]["FIELD_TYPE"].'" required', $arQuestion["HTML_CODE"] ));

									}											
								} 
								else {
									echo (str_replace('<input','<input class="input__input" type="'.$arQuestion["STRUCTURE"][0]["FIELD_TYPE"].'"',  $arQuestion["HTML_CODE"] ));
								}; ?>

								<div class="input__notification"></div>
							</label>
						</div>	
						<? } ?>
			<?}?>
		</div>	

		<? foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion) 
		   {?>	

					<?if ($arQuestion["STRUCTURE"][0]["FIELD_TYPE"] == "textarea")
					{ ?>

						<div class="contact-form__form-message">
							<div class="input">
								<label class="input__label" for="medicine_message">
									<div class="input__label-text"><?= $arQuestion["CAPTION"] ?></div>
									<?= str_replace('<textarea','<textarea class="input__input" ',  $arQuestion["HTML_CODE"] ) ?>
									<div class="input__notification">Поле должно содержать не менее 3-х символов</div>
								</label>
							</div>
						</div>								

					<? } ?>

		 <?} ?>
		
			
        
        <div class="contact-form__bottom">
            <div class="contact-form__bottom-policy">Нажимая &laquo;Отправить&raquo;, Вы&nbsp;подтверждаете, что
                ознакомлены, полностью согласны и&nbsp;принимаете условия &laquo;Согласия на&nbsp;обработку персональных
                данных&raquo;.
            </div>
            <button class="form-button contact-form__bottom-button" data-success="Отправлено"
                    data-error="Ошибка отправки">
					<?= str_replace('<input','<input class="form-button__title" type="submit"',  $arResult["SUBMIT_BUTTON"] )?>
            </button>
        </div>

	<?= $arResult["FORM_FOOTER"]?>
</div>




<?
} //endif (isFormNote)

