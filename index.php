<?php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
 include 'include/components.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php renderHead("PDF Converter", "Upload a PDF and convert it to image or text formats instantly."); ?>
<body class="text-dark">

<?php 

renderNavbar();
renderBody();
renderFooter(); 
?>


<script src="assets/js/main.min.js"></script>


</body>
</html>
