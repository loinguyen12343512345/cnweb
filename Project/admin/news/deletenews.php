<?php
require_once("../../datab/dbhelper.php");

if (!empty($_POST)) {
	if (isset($_POST['action'])) {
		$action = $_POST['action'];

		switch ($action) {
			case 'delete':
				if (isset($_POST['id'])) {
					$id = $_POST['id'];

					$sql = 'delete from new where id = '.$id;
					// print($sql);
					// exit();
					execute($sql);
				}
				break;
		}
	}
}