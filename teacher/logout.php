<?php
include 'connect.php';
session_start();
if (isset($_SESSION['t_name'])) {
	session_destroy();

?>
<script><b>loging out ...</b></script>
<script>
	setTimeout("location.href='index.php'",2000);
</script>
<?php
} else{
	session_destroy();
?>
<b>loging out ...</b>
<script>
	setTimeout("location.href='http://localhost/resultmgmt/index.php'",2000);
</script>
<?php
}
?>