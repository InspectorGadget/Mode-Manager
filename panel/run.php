<?php
include "../dbh.php";

# --------------------------------------------------------------------------------------------

$sel = $_POST['select'];

if ($sel === "ma") {
	header ("Location: index.php?error=1");
} elseif ($sel === "ac") {
	header ("Location: index.php?error=2");
} elseif ($sel === "maintenance") {
	onMaintenance($conn);
} elseif ($sel === "activate") {
	onActivate($conn);
}

function onMaintenance($conn) {

	$sql = "UPDATE `panel` SET `id`='1',`status`='2' WHERE 1";
	$res = $conn->query($sql);
	header ("Location: index.php?status=2");

}

function onActivate($conn) {

	$sql = "UPDATE `panel` SET `id`='1',`status`='1' WHERE 1";
	$res = $conn->query($sql);
	header ("Location: index.php?status=1");

}

?>