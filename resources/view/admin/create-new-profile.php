<?php vjoin('admin-layouts/header'); ?>
<div class="container">
	<div class="page" id="meta">
		<div class="jumbotron">
		  <h1 class="display-4">Добавление нового профиля</h1>

			<hr class="my-4">
			<div class="row">
				<div class="col-12">
					<form action="<?= linkTo('ProfileController@admin_create_profile') ?>" method="post">
						<input type="hidden" name="admin-create-new-profile">
					  <div class="form-group">
					    <label for="exampleInputEmail121">URL сайта</label>
					    <input type="text" class="form-control" id="exampleInputEmail121" name="site" placeholder="URL сайта">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail121">Имя профиля</label>
					    <input type="text" class="form-control" id="exampleInputEmail121" name="name" placeholder="Имя профиля">
					  </div>
					  <div class="form-group">
					    <label for="qwewdczdcsd">Описание</label>
					    <textarea class="form-control" id="qwewdczdcsd" rows="3" name="description" placeholder="Описание сайта"></textarea>
					  </div>
					  <div class="form-group">
					    <label for="qwewdczdcsd1">Выберите категорию</label>
					    <select name="catid" id="qwewdczdcsd1" class="form-control">
					    	<option value="0">--- Выберите категорию ---</option>
					    	<?php foreach ($cats as $cat): ?>
					    		<option value="<?= $cat['id'] ?>"><?= $cat['title'] ?></option>
					    	<?php endforeach ?>
					    </select>
					  </div>
					  <button type="submit" class="btn btn-primary">Сохранить</button>
					  <div class="saved-loader" style="display: none;">
					  	<h5>Сохранение...</h5>
					  	<div class="progress" style="width: 200px">
						  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
						</div>
					  </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		$('button[type="submit"]').on('click', function(){
			$(this).hide();
			$(this).parent().find('.saved-loader').show();
		});
	});
</script>

<?php vjoin('admin-layouts/footer'); ?>
