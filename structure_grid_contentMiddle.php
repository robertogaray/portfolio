<div class="main_content">








<?php
$page = $_GET['page'];

if (!$_GET) 
{
    //this will automatically lead the user to the home page 
    header("Location: index.php?page=home");

} 

elseif ( $page == 'home' ) 
{
   include 'pages/home.php';
} 
elseif ( $page == 'englishphonetics' )
{
   include 'pages/englishphonetics.php';
} 
elseif ( $page == 'englishgrammar' )
{
   include 'pages/englishgrammar.php';
}

?>







<!--end main content-------------------------------------------------------->
</div>