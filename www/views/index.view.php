<div class="row-fluid img-polaroid img-rounded">
	<div class="span8">
		<!-- Carousel -->
		<div id="myCarousel" class="carousel slide" data-interval="7000" data-pause="hover">
			<div class="carousel-inner">
				<?php for ($i=1; $i <= 5; $i++) : ?>

				<div class="item <?php echo ($i==1) ? 'active': '' ?>">
<!-- 					<img data-src="holder.js/800x550/industrial" /> -->
					<img src="pic/slide-<?=$i;?>" />

					<div class="container">
						<div class="carousel-caption">
							<h4>Альбом №<?=$i;?></h4>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						</div>
					</div>
				</div>

				<?php endfor; ?>
			</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div><!-- /.carousel -->
	</div>
	<div class="span4 row-fluid gal-albums-tn">

		<ul class="thumbnails">
			<?php for ($i=0; $i < 6; $i++) : ?>
			<li class="">
				<a href="#" class="thumbnail">
					<img data-src="holder.js/160x160" alt="">
				</a>
			</li>
			<?php endfor; ?>
		</ul>

	</div>
</div>
<hr>

<!-- 3 columns -->
<div class="row-fluid">
	<!-- Левая колонка -->
	<div class="span3 left-col">
		<h3>Следующая игра</h3>
		<div class="alert alert-info">
			<h4>12 апреля / 17:00</h4>
			<span>П-Посад &mdash; Мытищи</span>
		</div>


<!-- 		<img class="img-rounded img-polaroid" data-src="holder.js/300x300"> -->
		<h3>Результаты игр</h3>

		<h5>П-Посад &mdash; Электросталь</h5>
		<p class="text-score"><span class="text-error">87</span> : 66</p>
		<h5>П-Посад &mdash; Ногинск</h5>
		<p class="text-score"><span class="text-error">90</span> : 54</p>
		<h5>П-Посад &mdash; Красногорск</h5>
		<p class="text-score">93 : <span class="text-error">102</span></p>

		<h3>Лучшие</h3>
		<h5>1-я команда</h5>
		<ul class="media-list">
			<?php for ($i=1; $i <= 3; $i++) : ?>
			<li class="media">
				<a class="pull-left" href="#">
					<img class="media-object" data-src="holder.js/64x64/industrial">
				</a>
				<div class="media-body">
					<h4 class="media-heading">Игрок №<?= $i ?></h4>
					<p>Очки: 33, Подборы: 12, Передачи: 7</p>
				</div>
			</li>
			<?php endfor; ?>
		</ul>
		<h5>2-я команда</h5>
		<ul class="media-list">
			<?php for ($i=1; $i <= 3; $i++) : ?>
			<li class="media">
				<a class="pull-left" href="#">
					<img class="media-object" data-src="holder.js/64x64/industrial">
				</a>
				<div class="media-body">
					<h4 class="media-heading">Игрок №<?= $i ?></h4>
					<p>Очки: 33, Подборы: 12, Передачи: 7</p>
				</div>
			</li>
			<?php endfor; ?>
		</ul>
	</div>

	<!-- Центральная колонка -->
	<div class="span6">
		<h3>Группа Вконтакте</h3>
		<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
		<p><a class="btn" href="#">Подробнее &raquo;</a></p>
		<hr>
		<!-- Таблица соревнований
		<h3>Таблицы соревнований</h3>
		<h5>Мужская команда 1</h5> -->
		<div class="alert alert-info">
			<table class="table table-condensed table-striped">
				<caption>Мужская команда 1</caption>
				<thead>
					<tr>
						<th>#</th>
						<th>Команда</th>
						<th>О</th>
						<th>И</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>П-Посад</td>
						<td>54</td>
						<td>10</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Электросталь</td>
						<td>54</td>
						<td>10</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Ногинск</td>
						<td>54</td>
						<td>10</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="alert alert-info">
			<table class="table table-condensed table-striped">
				<caption>Мужская команда 2</caption>
				<thead>
					<tr>
						<th>#</th>
						<th>Команда</th>
						<th>О</th>
						<th>И</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>П-Посад</td>
						<td>54</td>
						<td>10</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Мытищи</td>
						<td>54</td>
						<td>10</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Фрязино</td>
						<td>54</td>
						<td>10</td>
					</tr>
				</tbody>
			</table>
		</div>


	</div>

	<!-- Правая колонка -->
	<div class="span3">
		<h3>Новости</h3>
		<ul class="unstyled">
			<?php for ($i=1; $i <= 3; $i++) : ?>
			<li>
				<a href="#">Заголовок новости №<?= $i ?></a>
				<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
			</li>
			<?php endfor; ?>
		</ul>
		<p class="text-right"><a href="#">все новости &raquo;</a></p>

		<h3>Статьи</h3>
		<ul class="unstyled">
			<?php for ($i=1; $i <= 3; $i++) : ?>
			<li>
				<a href="#">Заголовок статьи №<?= $i ?></a>
				<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
			</li>
			<?php endfor; ?>
		</ul>
		<p class="text-right"><a href="#">все статьи &raquo;</a></p>

		<h3>Интересное в сети</h3>

	</div>
</div><!-- /. 3 columns -->
<hr>
<!-- Спонсоры -->
<div class="row-fluid">
	<!-- <h3>Помогают команде</h3> -->
	<ul class="thumbnails">
		<?php for ($i=0; $i < 6; $i++) : ?>
		<li class="span2">
			<a href="#" class="">
				<img class="img-rounded" data-src="holder.js/140x140/social" alt="">
			</a>
		</li>
		<?php endfor; ?>
	</ul>
</div>