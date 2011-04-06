<?php /*
   _____                __    .__ 
  /     \  __ __  ____ |  | __|__|
 /  \ /  \|  |  \/    \|  |/ /|  |
/    Y    \  |  /   |  \    < |  |
\____|__  /____/|___|  /__|_ \|__|
        \/           \/     \/    

  ________        .__   .__                          
 /  _____/_____   |  |  |  |    ____ _______  ___.__.
/   \  ___\__  \  |  |  |  |  _/ __ \\_  __ \<   |  |
\    \_\  \/ __ \_|  |__|  |__\  ___/ |  | \/ \___  |
 \______  (____  /|____/|____/ \___  >|__|    / ____|
        \/     \/                  \/         \/     
 Developed by: Anthony Swanson
 This products falls under use of the GPL license, if you received
 a copy of this product without the license, please visit this url
 for it: http://www.munkibizness.com/licenses.php
*/
// INDEX.PHP

 
// Include necessary configuration and function files
include("config.php");
include("functions.php");

// Preliminary Configuration
// Check to see if we are using MySQL or Flat File as the backend
// management. 
switch ($mg_backend) {
 case 0:
  include("mysql.php");
  break;
 case 1:
  include("flatfile.php");
  break;
 default:
  gallery_error(5, "Settings", "Settings file not configured properly!");
}
?>
