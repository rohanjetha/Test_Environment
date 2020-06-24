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
//if ($toggleslideshow == 1) {
  //  require_once(dirname(__FILE__) . '/includes/slideshow.php');
//}
?>	

<!DOCTYPE html>
<?php require_once(dirname(__FILE__) . '/includes/marketingspots.php'); ?>
<html>

    <head>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <style type="text/css">
			
		
		
            .main-container {
                width: 80%;
                margin: 0 auto;
            }

            .hub-wrapper {
                border-style: outset;
                background-color: #F5F5F5;
                border-radius: 25px;
                position: relative;
                max-width: 100%;
                margin: 0 auto;
                min-height: 75vh;
                text-align: center;
                overflow: hidden;
            }

            .hub-wrapper a.hub-link {
                display: inline-block;
            }

            .hub1,
            .hub2,
            .hub3,
            .hub4 {
                width: 33%;
                position: absolute;
                z-index: 3;
                border-radius: 25px;
				
            }

            .hub1 {
				text-align: center;
                display: inline-block;
                z-index: 3;
                left: 10px;
                top: 10px;
            }

            .hub4 {
                left: auto;
                right: 10px;
                top: 10px;
            }

            .hub-wrapper::after {
                content: ' ';
                position: absolute;
                width: 5px;
                height: 100% !important;
                background: #ded0b8;
                left: 50%;
                right: auto;
                top: auto;
                bottom: auto;
                z-index: 0;
                transform: rotate3d(2, -5, -1, 187deg);
				visibility: visible !important;
            }

            .hub-wrapper::before {
                content: ' ';
                position: absolute;
                width: 5px;
                height: 100%;
                background: #ded0b8;
                z-index: 0;
                right: auto;
                left: auto;
                transform: rotate3d(2, 5, 1, -150deg);
            }

            .hub2 {
                left: 10px;
                bottom: 10px;
                z-index: 2;
            }

            .hub3 {
                bottom: 10px;
                right: 10px;
                z-index: 2;
            }

            .hub1 .hub-link,
            .hub2 .hub-link,
            .hub3 .hub-link,
            .hub4 .hub-link {
                position: relative;
                width: 100%;
            }

            .tooltiptext {
                visibility: hidden;
                width: 200px;
                background-color: #fff;
                color: #ccc;
                text-align: center;
                padding: 5px 0;
                border-radius: 6px;
                position: absolute;
                z-index: 10;
            }

            .hub1 a.hub-link:hover+.tooltiptext,
            .hub2 a.hub-link:hover+.tooltiptext,
            .hub3 a.hub-link:hover+.tooltiptext,
            .hub4 a.hub-link:hover+.tooltiptext {
                visibility: visible;
            }

            .tooltiptext::after {
                content: "";
                position: absolute;
                top: 100%;
                left: 50%;
                margin-left: -5px;
                border-width: 5px;
                border-style: solid;
                border-color: #555 transparent transparent transparent;
            }

            .tooltiptext a {
                display: block;
                width: 100%;
                text-decoration: none;
            }


            .tooltiptextright {
                top: 20%;
                left: 0%;
            }

            .tooltiptextleft {
                top: 20%;
                bottom: auto;
                right: 0%;
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
                width: 100%;
                z-index: 5;
                transform: translate(-50%, -50%);
            }

            .center-hub a {
                display: inline-block;
            }

            .center-hub img {
                padding: 10px;
                background-color: #ded0b8;
            }

            .hub-wrapper img {
                padding: 2%;
                border-radius: 15%;
                max-width: 300px;
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

            .clearfix {
                display: inline-block;
            }

            * html .clearfix {
                height: 1%;
            }

            .clearfix {
                display: block;
            }

            .back {
                transform: rotateY(180deg);
            }

            .flip-card { 	
                background-color: transparent;
                width: 100%;
                height: 300px;
                perspective: 1000px;
            }

            .flip-card-inner {
                position: relative;
                width: 100%;
                height: 100%;
                text-align: center;
                transition: transform 0.6s;
                transform-style: preserve-3d;
                border-radius: 25px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            }

            .flip-card:hover .flip-card-inner {
                transform: rotateY(180deg);
            }

            .flip-card-front,
            .flip-card-back {
                position: absolute;
                width: 100%;
                height: 100%;
                border-radius: 25px;
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
            }

            .flip-card-front {
                background-color: #f5f6f1;
                color: black;
            }

            .flip-card-back {
                background-color: #f5f6f1;
                transform: rotateY(180deg);
            }

            .flip-card-back h3 {
                text-transform: uppercase;
                border-bottom: 2px solid #ccc;
                margin-bottom: 2px;
                margin-top: 10px;
                display: inline-block;
            }

            .flip-card-back ul {
                padding: 0px;
            }

            .flip-card-back ul li {
                list-style: none;
                background: #add0b3;
                margin-bottom: 5px;
            }

            .flip-card-back a {
                width: 100%;
                display: block;
                font-size: 19px;
                text-decoration: none;
                color: #924842;
            }

            .flip-card-back ul li:hover {
                list-style: none;
                background: #758a71;
                margin-bottom: 5px;
            }

            .flip-card-back a:hover {
                color: #fff;
            }

            .flip-card-back h3 {
                font-size: 24px;
                margin-bottom: 5px;
            }

            .flip-card-back div {
                width: 80%;
				height:100%;
                margin: 0 auto;
            }

            @media only screen and (max-width: 991px) {

                .hub1,
                .hub2,
                .hub3,
                .hub4 {
                    width: 100%;
                    position: relative;
					
                }

                .hub-wrapper::after,
                .hub-wrapper::before {
                    visibility: hidden;
                }

                .hub1 {
                    left: 0;
                    top: 0;
                }

                .hub2 {
                    left: 0;
                    bottom: 0;
                    z-index: 3;
                }

                .hub3 {
                    bottom: 0;
                    right: 0;
                }

                .hub4 {
                    left: auto;
                    right: 0;
                    top: 0;
                }

                .center-hub {
                    z-index: 2;
                    display: block;
                    align-items: center;
                    justify-content: center;
                    text-align: center;
                    margin: auto;
                    position: relative;
                    /* top: 50%; */
                    /* left: 50%; */
                    width: 100%;
                    background: #ded0b8;
                    z-index: 5;
                    transform: translate(-50%, 0);
                }
				
				.course-image {
					height:100%;
					width: 100%;
				
				}
				
            }
        </style>
    </head>

<body>
    <div class="main-container clearfix">
        <div class="hub-wrapper clearfix">
            <div class="hub1">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img class='course-image' src="theme/eguru/images/CR.jpg">
                        </div>
                        <div class="flip-card-back">
                            <h3>Current Concerns</h3>
                            <div>
                                <ul>
                                    <li  style="padding : 2%"><a href="course/view.php?id=18">My Hip Fracture</a></li>
                                    <li  style="padding : 2"><a href="course/view.php?id=19">My Muscle and Skeleton Health</a></li>
                                    <li  style="padding : 2%"><a href="course/view.php?id=20">My Falls</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hub2">

                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img
                                src="theme/eguru/images/mhr.jpg">
                        </div>
                        <div class="flip-card-back">
                            <h3>My Health Record</h3>
                            <div>
                                <ul>
                                    <li><a href="course/view.php?id=3">1</a></li>
                                    <li><a href="course/view.php?id=30">2</a></li>
                                    <li><a href="course/view.php?id=29">3</a></li>
                                    <li><a href="course/view.php?id=28">4</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <a href="course/index.php?categoryid=13" class="hub-link">
                    <img
                        src="https://cdn.icon-icons.com/icons2/1211/PNG/512/1491579602-yumminkysocialmedia36_83067.png">
                </a>
                <div class="tooltiptext tooltiptextright">
                    <h3>Heading</h3>
                    <div>
                            <ul>
                                <li><a href="#">Link 1</a></li>
                                <li><a href="#">Link 1</a></li>
                                <li><a href="#">Link 1</a></li>
                                <li><a href="#">Link 1</a></li>
                            </ul>
                        </div>
                </div> -->
            </div>
            <div class="center-hub">
                <a href="course/index.php?categoryid=13">
                    <img src="theme/eguru/images/hub.jpeg">
                    <span class="tooltiptext">Tooltip text</span>
                </a>
            </div>
            <div class="clearfix"></div>
            <div class="hub3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="theme/eguru/images/coh.png">
                        </div>
                        <div class="flip-card-back">
                            <h3>Community Health</h3>
                            <div>
								<ul>	
									<li><a href="course/view.php?id=3">Mind</a></li>
                                    <li><a href="course/view.php?id=30">Sleep</a></li>
                                    <li><a href="course/view.php?id=29">Exercise</a></li>
                                    <li><a href="course/view.php?id=28">Nutrition</a></li>
							    </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hub4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="theme/eguru/images/ew.jpg">
                        </div>
                        <div class="flip-card-back">
                            <h3>Essential Wellness</h3>
                            <div>
                                <ul>
									<li><a href="course/view.php?id=27">Recommended Health Check</a></li>
                                    <li><a href="course/view.php?id=26">Winter Wellness</a></li>
                                    <li><a href="course/view.php?id=25">Mental Health Support</a></li>
                                    <li><a href="course/view.php?id=24">Hygiene</a></li>
									<li><a href="course/view.php?id=23">Health Care News</a></li>
									<li><a href="course/view.php?id=22">Corona Virus</a></li>
									<li><a href="course/view.php?id=21">Community Supports</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script type="text/javascript">
        var card = document.querySelector('.card');
        card.addEventListener('mouseover', function () {
            card.classList.toggle('is-flipped');
        });
        var backCard = document.querySelector('.back');
        card.addEventListener('mouseover', function () {
            card.classList.toggle('is-flipped');
        });
    </script>
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
        <?php
		echo $OUTPUT->blocks('side-pre', 'col-md-3'); 
		?>

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