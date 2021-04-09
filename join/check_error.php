<?php

if (!empty($_POST)) {
  $_POST['name'] = preg_replace('/\A[\p{C}\p{Z}]++|[\p{C}\p{Z}]++\z/u', '', $_POST['name']);
	if ($_POST['name'] === '') {
		$error['name'] = 'blank';
	}
	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$error['email'] = 'email';
	}
	if (!preg_match('/\A[a-z\d]{4,20}+\z/', $_POST['password'])) {
		$error['password'] = 'password';
	}

	$fileName = $_FILES['image']['name'];
	// 画像以外をアップできないように拡張子の限定
	if (!empty($fileName)) {
		$ext = substr($fileName, -3);
		if ($ext != 'jpg' && $ext != 'gif' && $ext != 'png') {
			$error['image'] = 'type';
		}
	}

	//アカウントの重複チェック
	if (empty($error)) {
		$member = $db->prepare('SELECT COUNT(*) AS cnt FROM members WHERE email=?');
		$member->execute(array($_POST['email']));
		$record = $member->fetch();
		if ($record['cnt'] > 0) {
			$error['email'] = 'duplicate';
		}
	}

  // エラーがなければセッションjoinにデータを入れ確認画面に遷移
	if (empty($error)) {
		$image = date('YmdHis') . $_FILES['image']['name'];
		move_uploaded_file($_FILES['image']['tmp_name'], '../member_picture/' . $image);
		$_SESSION['join'] = $_POST;
		$_SESSION['join']['image'] = $image;
		header('Location: check.php');
		exit();
  }
}

?>