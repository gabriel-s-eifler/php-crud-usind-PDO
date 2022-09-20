<?php

if (!isset($_POST['submit'])) {
  '<br> summit não setado <br/>';
} else {
  header('location: index.php?status=success');
  exit;
}
