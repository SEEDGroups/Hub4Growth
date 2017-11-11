<?php
    const SITE_MAP= "http://localhost/hub4growth2/backend";

	const ASSETS = SITE_MAP."/assets";
	const CSS_URL = ASSETS."/css/";
	const JS_URL = ASSETS."/js/";
	const FONTAWE_URL = ASSETS."/font-awesome/";
	const FONT_URL = ASSETS."/fonts/";
	const INC_URL = SITE_MAP."/inc/";
	const DTABLE_URL = ASSETS."/datatables/";
	const DTABLE_CSS_URL = DTABLE_URL."/css/";
	const DTABLE_JS_URL = DTABLE_URL."/js/";
	const DTABLE_IMAGES_URL = DTABLE_URL."/images/";
	const MEMBER_IMAGE_URL = SITE_MAP."/inc/uploads/CIDS/";
  const bannerImage = SITE_MAP."/inc/uploads/CIDS/";
  const memberImage = bannerImage;
  const homeImage = memberImage;

 define("PICS_URL", $_SERVER['DOCUMENT_ROOT']."/hub4growth2/backend/inc/uploads/CIDS/");

	/* database ko connection ko lagi */
	const DB_NAME = 'ioecids';
	const DB_HOST = 'localhost';
	const DB_PASSWORD = '';
	const DB_USER = 'root';

	$allowed_image_ext = array("jpg", "jpeg", "png", "bitmap");
?>
`
