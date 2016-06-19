<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); ?>
<?php require_once($root."/bap/asu_bap/includes/connection.php"); ?>
<?php require_once($root."/bap/asu_bap/includes/functions/sessions.php"); ?>
<?php require_once($root."/bap/asu_bap/includes/functions/functions.php"); ?>
<?php require_once($root."/bap/asu_bap/includes/functions/validations.php"); ?>
<?php require_once($root."/bap/asu_bap/php/databaseservice.php"); ?>

<?php
 confirm_logged_in();
  include($root."/bap/html/headers/admin-header.html");
?>

 <script src="../../js/jquery-1.12.3.min.js"></script>
 <script src="../../js/search.js"></script>
<script src="../../js/bootstrap.min.js"></script>  