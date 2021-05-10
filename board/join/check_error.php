<?php

if (!empty($_POST)) {
  $_POST['name'] = preg_replace('/\A[\p{C}\p{Z}]++|[\p{C}\p{Z}]++\z/u', '', $_POST['name']);
	if ($_POST['name'] === '') {
		$error['name'] = 'blank';
		// $smarty->assign('blank', $error['name']);
	}
	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$error['email'] = 'email';
		// $smarty->assign('email', $error['email']);
	}
	if (!preg_match('/\A[a-z\d]{4,20}+\z/', $_POST['password'])) {
		$error['password'] = 'password';
		// $smarty->assign('password', $error['password']);
	}

	$fileName = $_FILES['image']['name'];
	// 画像以外をアップできないように拡張子の限定
	if (!empty($fileName)) {
		$ext = substr($fileName, -3);
		if ($ext != 'jpg' && $ext != 'gif' && $ext != 'png') {
			$error['image'] = 'type';
			// $smarty->assign('type', $error['image']);
		}
	}

	//アカウントの重複チェック
	if (empty($error)) {
		$member = $db->prepare('SELECT COUNT(*) AS cnt FROM members WHERE email=?');
		$member->execute(array($_POST['email']));
		$record = $member->fetch();
		if ($record['cnt'] > 0) {
			$error['email'] = 'duplicate';
			// $smarty->assign('duplicate', $error['email']);
		}
	}

  // エラーがなければセッションjoinにデータを入れ確認画面に遷移
	if (empty($error)) {
		// ****CSRF対策としてこの行を追加****
		$token = bin2hex(random_bytes(32));
		$_SESSION['join']['token'] = $token;
		$smarty->assgin('token', $_SESSION['join']['token']);
		//    ****ここまで****

		$image = date('YmdHis') . $_FILES['image']['name'];
		move_uploaded_file($_FILES['image']['tmp_name'], '../member_picture/' . $image);
		$_SESSION['join'] = $_POST;
		$_SESSION['join']['image'] = $image;
		header('Location: check.php');
		exit();
  }
}

?>