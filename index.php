<?php
   require_once 'modules/mod_startup.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<! pda -->
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Azizi Biorepository</title>
      <link rel='stylesheet' type='text/css' href='css/repository.css'>
      <script type='text/javascript' src='<?php echo OPTIONS_COMMON_FOLDER_PATH; ?>jquery-1.7.1.min.js'></script>
      <script type='text/javascript' src='<?php echo OPTIONS_COMMON_FOLDER_PATH; ?>jquery.form.js'></script>
      <script type='text/javascript' src='<?php echo OPTIONS_COMMON_FOLDER_PATH; ?>jquery.json.js'></script>
      <script type='text/javascript' src='<?php echo OPTIONS_COMMON_FOLDER_PATH; ?>common_v0.3.js'></script>
      <script type='text/javascript' src='<?php echo OPTIONS_COMMON_FOLDER_PATH; ?>notification.js'></script>
      <script type='text/javascript' src='<?php echo OPTIONS_COMMON_FOLDER_PATH; ?>jsencrypt.min.js'></script>
      <script type='text/javascript' src='js/azizi.js'></script>
   </head>
   <body>
      <div id='repository'>
         <div id='avid_header'>&nbsp;</div>
         <?php $Repository->TrafficController(); ?>
         <div id='avid_footer'>Azizi Biorepository</div>
      </div>
   </body>
</body>
</html>
