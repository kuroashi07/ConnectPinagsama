<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Homepage</title>

    <link rel="stylesheet" href="CSS/styleHome.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>


<?php
include '../php/connection.php';
include '../php/getHome.php';
include '../php/getAbout.php';
include '../php/getContact.php';
include '../php/getFaqs.php';

$resultNewsEvent = mysqli_query($conn, "SELECT * FROM news_tb WHERE type = 'Event' ORDER BY date_posted ASC LIMIT 1");

if ($resultNewsEvent) {
    $rowNewsEvent = mysqli_fetch_assoc($resultNewsEvent);
    $imageEvent = $rowNewsEvent['image'] ?? 'Image';
    $typeEvent = $rowNewsEvent['type'] ?? 'Type';
    $date_postedEvent = $rowNewsEvent['date_posted'] ?? 'Date Posted';
    $nameEvent = $rowNewsEvent['name'] ?? 'Name';
    $starting_dateEvent = $rowNewsEvent['starting_date'] ?? 'Date';
    $ending_dateEvent = $rowNewsEvent['ending_date'] ?? 'Date';
    $starting_timeEvent = $rowNewsEvent['starting_time'] ?? 'Time';
    $ending_timeEvent = $rowNewsEvent['ending_time'] ?? 'Time';
    $placeEvent = $rowNewsEvent['place'] ?? 'Place';
    $bringEvent = $rowNewsEvent['bring'] ?? 'Bring';
    $descriptionEvent = $rowNewsEvent['description'] ?? 'Description';
} else {
    echo "Query failed: " . mysqli_error($conn);
}

$resultNewsAnnouncement = mysqli_query($conn, "SELECT * FROM news_tb WHERE type = 'Announcement' ORDER BY date_posted ASC LIMIT 1");

if ($resultNewsAnnouncement) {
    $rowNewsAnnouncement = mysqli_fetch_assoc($resultNewsAnnouncement);
    $imageAnnouncement = $rowNewsAnnouncement['image'] ?? 'Image';
    $typeAnnouncement = $rowNewsAnnouncement['type'] ?? 'Type';
    $date_postedAnnouncement = $rowNewsAnnouncement['date_posted'] ?? 'Date Posted';
    $nameAnnouncement = $rowNewsAnnouncement['name'] ?? 'Name';
    $starting_dateAnnouncement = $rowNewsAnnouncement['starting_date'] ?? 'Date';
    $ending_dateAnnouncement = $rowNewsAnnouncement['ending_date'] ?? 'Date';
    $starting_timeAnnouncement = $rowNewsAnnouncement['starting_time'] ?? 'Time';
    $ending_timeAnnouncement = $rowNewsAnnouncement['ending_time'] ?? 'Time';
    $placeAnnouncement = $rowNewsAnnouncement['place'] ?? 'Place';
    $bringAnnouncement = $rowNewsAnnouncement['bring'] ?? 'Bring';
    $descriptionAnnouncement = $rowNewsAnnouncement['description'] ?? 'Description';
} else {
    echo "Query failed: " . mysqli_error($conn);
}


$resultFaq = mysqli_query($conn, "SELECT * FROM faq_tb");
if ($resultFaq) {
    $rowFaq = mysqli_fetch_assoc($resultFaq);
    $question = $rowFaq['question'] ?? 'Question';
    $answer = $rowFaq['answer'] ?? 'Answer';
} else {
    echo "Query failed: " . mysqli_error($conn);
}



mysqli_close($conn);
?>

<body>
    <div class="container">
        <div class="top-container"><?php echo $office_hours; ?> </div>
        <div class="banner-container" style="background-image: url(<?php echo '../uploads/' . $banner_background; ?>);">
            <div class="transparent">
                <?php include 'navbar.php'; ?>
                <div class="banner-body">

                    <div class="banner-body-contents">
                        <div class="banner-body-left">
                            <img src="<?php echo '../uploads/' . $banner_image; ?>" alt="" class="image">
                        </div>
                        <div class="banner-body-right">
                            <div class="first-line">
                                <hr class="line-left"> &nbsp Discover The District
                                <hr class="line-right">
                            </div>


                            <p1>
                                Barangay Pinagsama
                            </p1>
                            <p2>
                                <?php echo $banner_description; ?>
                            </p2>
                        </div>
                    </div>

                </div>
            </div>
        </div>



        <div class="body-container">

            <div class="parallax">
                <div class="transparent">
                    <div class="container-pictures">

                        <div class="container-pictures-row">
                            <div class="container-about-images">
                                <img src="<?php echo '../uploads/' . $image1; ?>" alt="" class="image">
                            </div>
                            <div class="container-about-images">
                                <img src="<?php echo '../uploads/' . $image2; ?>" alt="" class="image">
                            </div>
                            <div class="container-about-images">
                                <img src="<?php echo '../uploads/' . $image3; ?>" alt="" class="image">
                            </div>
                            <div class="container-about-images">
                                <img src="<?php echo '../uploads/' . $image4; ?>" alt="" class="image">
                            </div>
                            <div class="container-about-images">
                                <img src="<?php echo '../uploads/' . $image5; ?>" alt="" class="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-about">

                <div class="container-about-contents">

                    <div class="container-column">


                        <div class="body-title">About Us</div>
                        <div class="body-description"> <?php echo $about_description; ?> </div>
                        <div class="container-row">
                            <div class="container-box-contents">
                                <div class="container-box-title">Mission</div>
                                <div class="container-box-desc">
                                    <?php echo $mission_desc; ?>
                                </div>
                            </div>
                            <div class="container-box-contents">
                                <div class="container-box-title">Vision</div>
                                <div class="container-box-desc">
                                    <?php echo $vision_desc; ?>
                                </div>
                            </div>
                            <div class="container-box-contents">
                                <div class="container-box-title">Goal</div>
                                <div class="container-box-desc">
                                    <?php echo $goals_desc; ?>
                                </div>
                            </div>
                        </div>

                        <div class="parallax">
                            <div class="transparent2">
                                <a href="About.php">
                                    <div class="container-button">
                                        Learn more
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="container-services">

                <div class="container-services-contents">
                    <div class="container-column">
                        <div class="body-title">Services</div>
                        <div class="body-description"> <?php echo $services_description; ?></div>
                        <div class="container-row2">

                            <div class="container-box-contents2">

                                <div class="container-services-images">
                                    <img src="Images/clearance.jpg" alt="" class="image">
                                </div>
                                <div class="container-description-box">
                                    <div class="content-title">Barangay Clearance</div>
                                    <div class="container-row3">
                                        <a href="clearance.php">
                                            <div class="container-button2">Apply</div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="container-box-contents2">

                                <div class="container-services-images">
                                    <img src="Images/indigency.jpg" alt="" class="image">
                                </div>

                                <div class="container-description-box">
                                    <div class="content-title">Barangay Indigency</div>
                                    <div class="container-row3">
                                        <a href="indigency.php">
                                            <div class="container-button2">Apply</div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="container-box-contents2">

                                <div class="container-services-images">
                                    <img src="Images/residency.jpg" alt="" class="image">
                                </div>

                                <div class="container-description-box">
                                    <div class="content-title">Barangay Residency</div>
                                    <div class="container-row3">
                                        <a href="residency.php">
                                            <div class="container-button2">Apply</div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="parallax">
                            <div class="transparent2">
                                <a href="Services.php">
                                    <div class="container-button">
                                        Learn more
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>


            <div class="container-news">
                <div class="container-news-contents">
                    <div class="container-column">
                        <div class="body-title">News</div>
                        <div class="body-description"> <?php echo $news_description; ?></div>
                        <div class="container-row2">
                            <div class="container-box-contents3">
                                <div class="container-news-contents2">

                                    <div class="content-title">
                                        <?php echo $typeEvent; ?>
                                    </div>
                                    <div class="content-description">
                                        <?php echo $date_postedEvent; ?>
                                    </div>

                                    <div class="container-news-row">
                                        <div class="container-news-img">
                                            <img src="<?php echo '../uploads/' . $imageEvent; ?>" class="image">
                                        </div>

                                        <div class="container-news-column">
                                            <div class="container-news-row2">

                                                <div class="container-news-info1">
                                                    <div class="content-title">
                                                        <?php echo $nameEvent; ?>
                                                    </div>
                                                    <div class="content-description">
                                                        <span class="material-symbols-outlined">
                                                            calendar_month
                                                        </span>
                                                        <div>
                                                            <?php echo $starting_dateEvent; ?> -
                                                            <?php echo $ending_dateEvent; ?>
                                                        </div>
                                                    </div>
                                                    <div class="content-description">

                                                        <span class="material-symbols-outlined">
                                                            schedule
                                                        </span>
                                                        <div>
                                                            <?php echo $starting_timeEvent; ?> -
                                                            <?php echo $ending_timeEvent; ?>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="container-news-info2">

                                                    <div class="content-description">
                                                        <span class="material-symbols-outlined">
                                                            distance
                                                        </span>
                                                        <div>
                                                            <?php echo $placeEvent; ?>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="content-description">
                                                <?php echo $bringEvent; ?>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="content-description">
                                    <?php echo $descriptionEvent; ?>
                                </div>

                            </div>


                            <div class="container-box-contents3">
                                <div class="container-news-contents2">

                                    <div class="content-title">
                                        <?php echo $typeAnnouncement; ?>
                                    </div>
                                    <div class="content-description">
                                        <?php echo $date_postedAnnouncement; ?>
                                    </div>

                                    <div class="container-news-row">
                                        <div class="container-news-img">
                                            <img src="<?php echo '../uploads/' . $imageAnnouncement; ?>" class="image">
                                        </div>

                                        <div class="container-news-column">
                                            <div class="container-news-row2">

                                                <div class="container-news-info1">
                                                    <div class="content-title">
                                                        <?php echo $nameAnnouncement; ?>
                                                    </div>
                                                    <div class="content-description">
                                                        <span class="material-symbols-outlined">
                                                            calendar_month
                                                        </span>
                                                        <div>
                                                            <?php echo $starting_dateAnnouncement; ?> -
                                                            <?php echo $ending_dateAnnouncement; ?>
                                                        </div>
                                                    </div>
                                                    <div class="content-description">
                                                        <span class="material-symbols-outlined">
                                                            schedule
                                                        </span>
                                                        <div>
                                                            <?php echo $starting_timeAnnouncement; ?> -
                                                            <?php echo $ending_timeAnnouncement; ?>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="container-news-info2">

                                                    <div class="content-description">
                                                        <span class="material-symbols-outlined">
                                                            distance
                                                        </span>
                                                        <div>
                                                            <?php echo $placeAnnouncement; ?>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="content-description">
                                                <?php echo $bringAnnouncement; ?>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="content-description">
                                    <?php echo $descriptionAnnouncement; ?>
                                </div>

                            </div>

                        </div>

                        <div class="parallax">
                            <div class="transparent2">
                                <a href="News.php">
                                    <div class="container-button">
                                        Learn more
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="container-contact">
                <div class="container-contact-contents">
                    <div class="container-column">

                        <div class="body-title">Contact Us</div>
                        <div class="body-description"> <?php echo $contact_description; ?></div>
                        <div class="container-row2">
                            <div class="container-column2">
                                <div>
                                    <div class="content-title">BARANGAY LOCATION</div>
                                    <div class="content-description"><?php echo $location; ?></div>
                                </div>
                                <div>
                                    <div class="content-title">TELEPHONE NUMBERS</div>
                                    <div class="content-description"><?php echo $telephone; ?></div>
                                </div>
                                <div>
                                    <div class="content-title">EMERGENCY HOTLINE</div>
                                    <div class="content-description"><?php echo $hotline; ?></div>
                                </div>
                            </div>

                            <div class="container-column2">
                                <div>
                                    <div class="content-title">OFFICE HOURS</div>
                                    <div class="content-description"><?php echo $office_hours; ?></div>
                                </div>
                                <div>
                                    <div class="content-title">EMAIL ADDRESS</div>
                                    <div class="content-description"><?php echo $email; ?></div>
                                </div>
                            </div>


                        </div>

                        <div class="parallax">
                            <div class="transparent2">
                                <a href="Contact.php">
                                    <div class="container-button">
                                        Learn more
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container-faqs">
                <div class="container-faqs-contents">
                    <div class="container-column">
                        <div class="body-title">Frequently Asked Questions</div>
                        <div class="body-description"> <?php echo $faqs_description; ?></div>
                        <div class="container-row2">

                            <?php
                            $counter = 0;

                            foreach ($rows as $index => $row) {
                                if ($counter < 2) {
                            ?>
                                    <div class="container-box-contents3">
                                        <div class="content-title"> <?php echo $row['question']; ?> </div>
                                        <div class="content-description"> <?php echo $row['answer']; ?> </div>
                                    </div>
                            <?php
                                    $counter++;
                                } else {
                                    break;
                                }
                            }
                            ?>

                        </div>

                        <div class="parallax">
                            <div class="transparent2">
                                <a href="FAQ.php">
                                    <div class="container-button">
                                        Learn more
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <?php include 'footer.php'; ?>

</body>

</html>