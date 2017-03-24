
<?php
    /*
    Template Name: Add vacancies (testimg.php)
    */
    ?>

 <?php 
    get_header();?>
    <body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>




<form enctype="multipart/form-data" action="" method="POST">
	<?php wp_nonce_field( 'my_file_upload', 'fileup_nonce' ); ?>
	<input name="my_file_upload" type="file" />
	<input type="submit" value="Загрузить файл" />
</form>



<?php

if( wp_verify_nonce( $_POST['fileup_nonce'], 'my_file_upload' ) ){
	if ( ! function_exists( 'wp_handle_upload' ) ) 
		require_once( ABSPATH . 'wp-admin/includes/file.php' );

	$file = &$_FILES['my_file_upload'];
	$overrides = array( 'test_form' => false );

	$movefile = wp_handle_upload( $file, $overrides );

	if ( $movefile ) {
		echo "Файл был успешно загружен.\n";
		print_r( $movefile );
	} else {
		echo "Возможны атаки при загрузке файла!\n";
	}
}
?>










          <div class="edit-link"><?php edit_post_link(); ?></div>
        
