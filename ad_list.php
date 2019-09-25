<?php require('db.php'); ?>
<? foreach(getAllAdvertisementWithContacts() as $ad) : ?>
	<div class="description-wrapper">
		<button class="btn btn-primary description__delete" data-ad-id="<? echo $ad['id'] ?>">&times;</button>
		<h2 class="description__title"><? echo   $ad['title'] ?></h2>
		<p class="description__text"><? echo smallText($ad['text'])?></p>
		<img class="description__img" src="<? echo $ad['img']?>" alt="<? echo $ad['img']?>"><br>
		<div class="contacts">
			<span class="contacts__name"><? echo $ad['author']?></span>
			<span class="contacts__email"><? echo $ad['emails'] ?></span>
			<span class="contacts__phone">тел. <? echo $ad['phone_numbers'] ?></span>
		</div>
	</div>
<? endforeach; ?>
