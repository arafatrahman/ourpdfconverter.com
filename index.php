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

<!-- Include JS logic (can be separated if needed) -->
<script src="assets/js/main.js"></script>


</body>
</html>
