<section class="block" id="home-rating">
		<h2 class="block-title">Лучшие специалисты по версии пользователей сайта</h2>
		<div class="content">
			<? foreach($high_list as $i => $item): ?>
			<div class="rating-item">
				<div class="row">
					<div class="col-1">
						<div class="top number txt-grey-dark"><span><?= $item['number'] ?></span></div>
					</div>
					<div class="col-10 col-lg-7 col-xl-7 offset-1 offset-md-1 offset-sm-1 offset-lg-0 offset-xl-0">
						<div class="top Profile-info">
							<a href="<?= linkTo('ProfileController@page', ['slug' => $item['slug']]) ?>" class="std-a Profile-name"><?= $item['name'] ?></a><span class="txt-grey Profile-site"> - <?= $item['site'] ?></span>
						</div>	
						<div class="bottom location txt-grey">
							Общий рейтинг: <strong class="txt-grey-dark"><?= $item['rating'] ?></strong>
						</div>
					</div>
					<div class="col-10 col-lg-4 col-xl-4 offset-2 offset-md-2 offset-sm-2 offset-lg-0 offset-xl-0">
						<div class="top stats txt-grey-dark">
							<i class="mdi mdi-thumb-up font-color-green"></i> <?= $item['count_like'] ?>
							<i class="mdi mdi-thumb-down font-color-red"></i> <?= $item['count_dislike'] ?>
							<i class="mdi mdi-thumbs-up-down font-color-grey"></i> <?= $item['count_neutral'] ?>
						</div>
						<div class="bottom timestamp txt-grey">
							Добавлен <?= $item['timestamp'] ?>
						</div>
					</div>
				</div>
			</div>
			<? endforeach; ?>

			<div style="text-align:left">
				<button data-emulate-a="/page/rating" class="std-a std-btn more-news">Смотреть весь список <i class="mdi mdi-arrow-right mdi-fix"></i></button>
			</div>
		</div>
	</section>