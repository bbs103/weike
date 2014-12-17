<?php
namespace backend\controllers;

use yii\web\Controller;

class ShortcutController extends Controller {
	public function actionAuth_item() {
		return $this->renderPartial('auth_item');
	}
	public function actionAuth_cache() {
		return $this->renderPartial('auth_cache');
	}
}

?>