<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * frontpage.php
 *
 * @package   theme_eguru
 * @copyright 2015 LMSACE Dev Team,lmsace.com
 * @author    LMSACE Dev Team
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();
// Get the HTML for the settings bits.
global $OUTPUT, $PAGE;
$html = theme_eguru_get_html_for_settings($OUTPUT, $PAGE);

if (right_to_left()) {
    $regionbsid = 'region-bs-main-and-post';
} else {
    $regionbsid = 'region-bs-main-and-pre';
}

$courserenderer = $PAGE->get_renderer('core', 'course');

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<?php
    require_once(dirname(__FILE__) . '/includes/header.php');
    echo $headerlayout;
    ?>
<!--E.O.Custom theme header-->
<link rel="stylesheet" href="<?php echo theme_eguru_theme_url(); ?>/style/slick.css" />

<?php
$toggleslideshow = theme_eguru_get_setting('toggleslideshow');
if ($toggleslideshow == 1) {
    require_once(dirname(__FILE__) . '/includes/slideshow.php');
}

?>	<!DOCTYPE html>


<?php require_once(dirname(__FILE__) . '/includes/marketingspots.php'); ?>
<html>
    <head>
        <style>
            .main-container {
				
                width:80%;
				margin: 0 auto;
            }
            .hub-wrapper {
				 background-image: url("theme/eguru/images/cloud3.jpg");
				border-style: outset;
				background-color:#2b4e84;
				border-radius: 25px;
                position: relative;
                max-width:600px;
                margin: 0 auto;
                min-height: 600px;
                text-align: center;
            }
            .center-hub::after {
                content: ' ';
                position: absolute;
                width: 5px;
                height: 100%;
                background: #b3ffff;
                top: -100%;
                z-index: -1;
                left: 50%;
            }
            .hub1, .hub2, .hub3{
				
                position: absolute;
            }
            .hub1 {
                text-align: center;
                display: inline-block;
                z-index: 3;
                left: 0;
                right:0;
                top:0;
            }
            .hub2::after {
                content: ' ';
                position: absolute;
                width: 5px;
                height: 350px;
                background: #b3ffff;
                bottom: 40%;
                left: 150%;
                z-index: -1;
                transform: rotate3d(2, 1, 1, 160deg);
            }
            .hub3::after {
                content: ' ';
                position: absolute;
                width: 5px;
                height: 300px;
                background: #b3ffff;
                bottom: 40%;
                z-index: -1;
                right: 140%;
                transform: rotate3d(2, 6, 1, -150deg);
            }
            .hub2 {
                bottom: 0;
                z-index: 2;
            }
            .hub3 {
                bottom: 0;
                right: 0;
                z-index: 2;
            }
            .center-hub {
                z-index: 2;
                display: block;
                align-items: center;
                justify-content: center;
                text-align: center;
                margin: auto;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
            .hub-wrapper img {
				padding:2% ;
				border-radius:15%;
                max-width:170px;
                height: auto;
            }
            .clearfix:after {
                visibility: hidden;
                display: block;
                font-size: 0;
                content: " ";
                clear: both;
                height: 0;
            }
            .clearfix { display: inline-block; }
            /* start commented backslash hack \*/
            * html .clearfix { height: 1%; }
            .clearfix { display: block; }
            /* close commented backslash hack */
        </style>
    </head>
    <body>
        <div class="main-container">
            <div class="hub-wrapper">
                <div class="hub1"><a href="course/index.php?categoryid=13"><img src="theme/eguru/images/CR.jpg"></a></div>
                <div class="hub2"><a href="course/index.php?categoryid=14"><img src="theme/eguru/images/EW.jpg"></a></div>
                <div class="hub3"><a href="course/index.php?categoryid=15"><img src="theme/eguru/images/MHR.jpg"></a></div>
                <div class="center-hub"><a href="/"><img style="border-radius: 50%" src="theme/eguru/images/hub.jpeg"></a></div>
                <div class="clearfix"></div>
            </div>
        </div>
    </body>
</html>
<?php echo $courserenderer->promoted_courses(); ?>

<div id="page" class="container">
    <header id="page-header" class="clearfix">
        <?php echo $html->heading; ?>
        <div id="page-navbar" class="clearfix">
            <nav class="breadcrumb-nav"><?php echo $OUTPUT->navbar(); ?></nav>
            <div class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></div>
        </div>
        <div id="course-header">
            <?php echo $OUTPUT->course_header(); ?>
        </div>
    </header>
    <div id="page-content" class="row">
    <?php
    if (!empty($PAGE->blocks->region_has_content('side-pre', $OUTPUT))) {
        $sidepreclass = 'col-md-9';
    } else {
        $sidepreclass = 'col-md-12';
    }
    ?>
        <div id="<?php echo $regionbsid ?>" class="<?php echo $sidepreclass; ?>">
            <?php
                echo $OUTPUT->course_content_header();
                echo $OUTPUT->main_content();
                echo $OUTPUT->course_content_footer();
            ?>
        </div>
        <?php echo $OUTPUT->blocks('side-pre', 'col-md-3'); ?>

    </div>
    <?php echo (!empty($flatnavbar)) ? $flatnavbar : ""; ?>
</div>

 <script src="<?php echo theme_eguru_theme_url(); ?>/javascript/slick.js"></script>
<script>
$( function() {

    if ($('body').hasClass('dir-rtl') ) {
        var rtl = true;
    } else {
        var rtl = false;
    }
    $(".promoted_courses").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        rtl:rtl,
        arrows:true ,
        swipe:t,
        prevArrow:'#Promoted-Courses .pagenav .slick-prev',
        nextArrow: '#Promoted-Courses .pagenav .slick-next',
    });


});
</script>

<?php
    require_once(dirname(__FILE__) . '/includes/footer.php');
    echo $footerlayout;
?>
<!--E.O.Custom theme footer-->

</body>
</html>