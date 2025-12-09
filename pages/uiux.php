<?php

$galleries =
    array(
        array(
            "galleryName" => "SmartSort",
            "description" => "SmartSort is a scheduling app, designed with schools in mind. This can take any number of students, school blocks, and potential classes and find the best timetable to meet everybodies needs. It can help administrators choose what courses are worth running and ensure student choice is the top priority when designing a timetable.",
            "logo" => array("filename" => "smartsort-logo.png", "hasLogo" => true, "long" => true),
            "style" => "laptopMobileTablet",
            "links" => array(
                array("name" => "GitHub", "icon" => "Git-Icon-1788C.png", "link" => "https://github.com/a-bunting/class-organiser"),
                array("name" => "Live Site", "icon" => "liveicon.png", "link" => "https://www.smartsort.org/")
            ),
            "tech" => [
                array("long" => false, "name" => "Angular", "filename" => "Angular_trimmed.svg"),
                array("long" => false, "name" => "CSS", "filename" => "CSS3_logo_and_wordmark.svg"),
                array("long" => false, "name" => "HTML5", "filename" => "HTML_Logo2.svg"),
                array("long" => true, "name" => "NodeJS", "filename" => "nodejs.png"),
                array("long" => true, "name" => "MySQL", "filename" => "mysql.png")
            ],
            "items" => [
                array("device" => "laptop", "images" => ["smartsort-big.jpg", "smartsort-replace.jpg", "smartsortLaptop3.jpg", "smartsortLaptop4.jpg"]),
                array("device" => "mobile", "images" => ["smartsort-mobile.jpg", "smartsortMobile2.jpg"]),
                array("device" => "tablet", "images" => ["smartsort-big.jpg",])
            ]
        ),
        array(
            "galleryName" => "WordleLeagues",
            "description" => "WordleLeagues was built during the wordle craze to facilitate competitive play. Players can use the site to keep track of their scores and see how they rank against their peers. Users can create their own leagues or join those made by others. This was designed primarily with mobile in mind, but a tablet and larger screen version is available.",
            "logo" => array("filename" => "wordlelogo.png", "hasLogo" => true, "long" => false),
            "style" => "laptopMobileTablet",
            "links" => array(
                array("name" => "GitHub", "icon" => "Git-Icon-1788C.png", "link" => "https://github.com/a-bunting/wordle-leagues"),
                array("name" => "Live Site", "icon" => "liveicon.png", "link" => "https://wordleleague.sweeto.co.uk/")
            ),
            "tech" => [
                array("long" => false, "name" => "Angular", "filename" => "Angular_trimmed.svg"),
                array("long" => false, "name" => "CSS", "filename" => "CSS3_logo_and_wordmark.svg"),
                array("long" => false, "name" => "HTML5", "filename" => "HTML_Logo2.svg"),
                array("long" => true, "name" => "MongoDB", "filename" => "mongodb.svg"),
                array("long" => true, "name" => "NodeJS", "filename" => "nodejs.png")
            ],
            "items" => [
                array("device" => "laptop", "images" => ["wordleLaptop1.jpg", "wordleLaptop2.jpg", "wordleLaptop3.jpg"]),
                array("device" => "tablet", "images" => ["wordleTablet1.jpg", "wordleTablet2.jpg"]),
                array("device" => "mobile", "images" => ["wordleMobile1.jpg", "wordleMobile2.jpg", "wordleMobile3.jpg"])
            ]
        ),
        array(
            "galleryName" => "ReportZone",
            "description" => "ReportZone is a website designed to allow teachers to generate quick yet personal reports for their students. This has taken the time for report writing down from several days to under an hour for many of the teachers who have used it. Given the range of skills and technical ability for those who use it, a help section with instructional videos accompanies the website to guide all users through the report writing process.",
            "logo" => array("filename" => "ReportZone.png", "hasLogo" => true, "long" => false),
            "style" => "laptop",
            "links" => array(
                array("name" => "GitHub", "icon" => "Git-Icon-1788C.png", "link" => "https://github.com/a-bunting/reports"),
                array("name" => "Live Site", "icon" => "liveicon.png", "link" => "https://reportszone.sweeto.co.uk/")
            ),
            "tech" => [
                array("long" => false, "name" => "Angular", "filename" => "Angular_trimmed.svg"),
                array("long" => false, "name" => "CSS", "filename" => "CSS3_logo_and_wordmark.svg"),
                array("long" => false, "name" => "HTML5", "filename" => "HTML_Logo2.svg"),
                array("long" => true, "name" => "Firebase", "filename" => "firebaselogo.png"),
            ],
            "items" => [
                array("device" => "laptop", "images" => ["rz1.jpg", "rz2.jpg", "rz3.jpg", "rz4.jpg"])
            ]
        ),
        array(
            "galleryName" => "StellarNova",
            "description" => "StellarNova is a (slowly) in progress space trader game based on the early naughties hit, 'Blacknova Traders'. Players navigate the galaxy in their ship; trading, earning money and building an empire. This game utilises a complex UI using Three.JS to present the space ship and websockets to update the user interface based upon other players actions.",
            "logo" => array("filename" => "stellarnovalogo.png", "hasLogo" => true, "long" => true),
            "style" => "laptop",
            "links" => array(
                array("name" => "GitHub", "icon" => "Git-Icon-1788C.png", "link" => "https://github.com/a-bunting/StellarNova"),
                array("name" => "Live Site", "icon" => "liveicon.png", "link" => "https://www.stellarnova.online/")
            ),
            "tech" => [
                array("long" => false, "name" => "Angular", "filename" => "Angular_trimmed.svg"),
                array("long" => false, "name" => "CSS", "filename" => "CSS3_logo_and_wordmark.svg"),
                array("long" => false, "name" => "HTML5", "filename" => "HTML_Logo2.svg"),
                array("long" => true, "name" => "NodeJS", "filename" => "nodejs.png"),
                array("long" => true, "name" => "MySQL", "filename" => "mysql.png")
            ],
            "items" => [
                array("device" => "laptop", "images" => ["stellarnova1.jpg", "stellarnova2.jpg", "stellarnova3.jpg"])
            ]
        ),
        array(
            "galleryName" => "Apollo 1",
            "description" => "Apollo is a full featured learning tool, with syllabus structures, activities, objectives, peer feedback abilities and much more. It was a learning tool I used successfully in the classroom for many years, giving me the freedom to work with students in need, whilst giving the brighter students greater opportunity to stretch their learning. This is now in the process of deprecation in favour of a new version coming soon with much greater accessibility in terms of mobile first design, something essential for modern edtech.",
            "logo" => array("filename" => "apollologo.png", "hasLogo" => true, "long" => false),
            "style" => "laptop",
            "links" => array(
                array("name" => "Live Site", "icon" => "liveicon.png", "link" => "https://apollo.sweeto.co.uk/")
            ),
            "tech" => [
                array("long" => false, "name" => "PHP", "filename" => "php.png"),
                array("long" => false, "name" => "CSS", "filename" => "CSS3_logo_and_wordmark.svg"),
                array("long" => false, "name" => "HTML5", "filename" => "HTML_Logo2.svg"),
                array("long" => true, "name" => "jQuery", "filename" => "jQuery-Logo.png"),
                array("long" => true, "name" => "MySQL", "filename" => "mysql.png")
            ],
            "items" => [
                array("device" => "laptop", "images" => ["apolloLaptop1.jpg", "apolloLaptop2.jpg", "apolloLaptop3.jpg"]),
            ]
        ),
        array(
            "galleryName" => "!This>#Phys",
            "description" => "!This>#Phys was a response to a lack of decent free physical simulations for Physics students during the pandemic. It has a range of simulations (some full featured and some in development) to test real physical situations and get data similar to that in the real world. This site is designed so it can be embedded into other sites, making it perfect to be included in online physics textbooks and for use on tablet screens. It also hosts my mazes generator which is a published Angular repositary.",
            "logo" => array("filename" => "physicsLogo.png", "hasLogo" => true, "long" => false),
            "style" => "laptopTablet",
            "links" => array(
                array("name" => "GitHub", "icon" => "Git-Icon-1788C.png", "link" => "https://github.com/a-bunting/physics-project"),
                array("name" => "Live Site", "icon" => "liveicon.png", "link" => "https://physics.sweeto.co.uk/")
            ),
            "tech" => [
                array("long" => false, "name" => "Angular", "filename" => "Angular_trimmed.svg"),
                array("long" => false, "name" => "CSS", "filename" => "CSS3_logo_and_wordmark.svg"),
                array("long" => false, "name" => "HTML5", "filename" => "HTML_Logo2.svg"),
            ],
            "items" => [
                array("device" => "laptop", "images" => ["physicsLaptop1.jpg", "physicsLaptop2.jpg", "physicsLaptop3.jpg"]),
                array("device" => "tablet", "images" => ["physicsTablet1.jpg", "physicsTablet2.jpg"]),
            ]
        ),
        array(
            "galleryName" => "Quizzical",
            "description" => "Quizzical is a company part owned and founded by myself. We build academic games tournaments primarily in the international schools circuit. The website was built to be able to put questions together, and quickly build tournaments with questions which have been unseen in other tournaments. The website can build three day tournaments in about 10-20 seconds and includes a host of front end tools to help redesign the tournament by hand if needed. We also have a mobile friendly in game scorer.",
            "logo" => array("filename" => "quizzicalLogo.png", "hasLogo" => true, "long" => false),
            "style" => "laptop",
            "links" => array(),
            "tech" => [
                array("long" => false, "name" => "Angular", "filename" => "Angular_trimmed.svg"),
                array("long" => false, "name" => "CSS", "filename" => "CSS3_logo_and_wordmark.svg"),
                array("long" => false, "name" => "HTML5", "filename" => "HTML_Logo2.svg"),
                array("long" => true, "name" => "NodeJS", "filename" => "nodejs.png"),
                array("long" => true, "name" => "MySQL", "filename" => "mysql.png")
            ],
            "items" => [
                array("device" => "laptop", "images" => ["quizzicalLaptop1.jpg", "quizzicalLaptop2.jpg", "quizzicalLaptop3.jpg", "quizzicalLaptop4.jpg"]),
            ]
        ),
        array(
            "galleryName" => "Portfolio Website",
            "description" => "With the danger of getting slightly meta, this site (the one you are on) was developed with the intention of securing a softwrae developer position. It sports a funky retro theme, dark mode, and a host of information about why I should be hired. Written in PHP with SaSS (SCSS syntax) and jQuery.",
            "logo" => array("filename" => "dtwoapp.png", "hasLogo" => true, "long" => false),
            "style" => "laptopMobileTablet",
            "links" => array(
                array("name" => "Live Site", "icon" => "liveicon.png", "link" => "https://www.alexbunting.co.uk/"),
                array("name" => "GitHub", "icon" => "Git-Icon-1788C.png", "link" => "https://github.com/a-bunting/dtwo")
            ),
            "tech" => [
                array("long" => false, "name" => "PHP", "filename" => "php.png"),
                array("long" => false, "name" => "CSS", "filename" => "CSS3_logo_and_wordmark.svg"),
                array("long" => false, "name" => "HTML5", "filename" => "HTML_Logo2.svg"),
                array("long" => true, "name" => "jQuery", "filename" => "jQuery-Logo.png"),
                array("long" => false, "name" => "Javascript", "filename" => "javascript.png"),
            ],
            "items" => [
                array("device" => "laptop", "images" => ["dtwoLaptop1.jpg", "dtwoLaptop2.jpg", "dtwoLaptop3.jpg"]),
                array("device" => "tablet", "images" => ["dtwoTablet1.jpg", "dtwoTablet2.jpg", "dtwoTablet3.jpg"]),
                array("device" => "mobile", "images" => ["dtwoMobile1.jpg", "dtwoMobile2.jpg"]),
            ]
        ),
        array(
            "galleryName" => "The Arc",
            "description" => "A fun site emphasising the need for Forge of Empires players to get an Arc! GSAP was used to generate a parallax effect on this page and make the movie style scrolling effects.",
            "logo" => array("filename" => "arc.png", "hasLogo" => true, "long" => false),
            "style" => "laptop",
            "links" => array(
                array("name" => "Live Site", "icon" => "liveicon.png", "link" => "https://arc.sweeto.co.uk/"),
                array("name" => "GitHub", "icon" => "Git-Icon-1788C.png", "link" => "https://github.com/a-bunting/arc")
            ),
            "tech" => [
                array("long" => false, "name" => "CSS", "filename" => "CSS3_logo_and_wordmark.svg"),
                array("long" => false, "name" => "HTML5", "filename" => "HTML_Logo2.svg"),
                array("long" => false, "name" => "Javascript", "filename" => "javascript.png"),
            ],
            "items" => [
                array("device" => "laptop", "images" => ["arcLaptop1.jpg", "arcLaptop2.jpg", "arcLaptop3.jpg", "arcLaptop4.jpg", "arcLaptop5.jpg"]),
            ]
        )
    );

$projectIndex = $_GET['project'];

?>


<div class="page">


    <div class="frontend__nav">

        <!-- <div class="frontend__projectsTitle deleteOnClick" data-ident="projectButton">
            Click the buttons below to see my projects
        </div> -->

        <div class="frontend__links">
            <?php

            foreach ($galleries as $key => $gallery) {

                if ($gallery["logo"]["hasLogo"]) {
                    $tall = $gallery["logo"]["long"] ? "long" : "short";
            ?>
                    <img class="loadNewProject frontend__links--logo--<?= $tall ?>" src="./images/<?= $gallery["logo"]["filename"] ?>" data-projectId="<?= $key ?>" alt="<?= $gallery["galleryName"] ?> logo">
            <?php
                } else {
                    echo $gallery["galleryName"];
                }
            }
            ?>

        </div>
    </div>

    <?php
    $gallery = $galleries[$projectIndex];
    ?>
    <div class="frontend__header">
        <div class="frontend__header--text">
            <?php
            if ($gallery["logo"]["hasLogo"]) {
                $tall = $gallery["logo"]["long"] ? "long" : "short";
            ?>
                <img class="frontend__header--logo--<?= $tall ?>" src="./images/<?= $gallery["logo"]["filename"] ?>" alt="<?= $gallery["galleryName"] ?> logo">
            <?php
            } else {
                echo $gallery["galleryName"];
            }
            ?>
        </div>

        <div class="frontend__header--tech">
            <?php
            foreach ($gallery["tech"] as $tech) {
                $tall = $tech["long"] ? "tall" : "short";
            ?>
                <img class="frontend__header--tech--<?= $tall ?>" src="./images/logo/<?= $tech["filename"] ?>" alt="<?= $tech["name"] ?>">
            <?php
            }
            ?>
        </div>
    </div>

    <div class="frontend__gallery frontend__<?= $gallery['style'] ?>">
        <?php
        foreach ($gallery['items'] as $item) {
        ?>
            <div class="<?= $item['device'] ?>">
                <img class="galleryImageSource enlargeImage" src="./images/<?= $item['images'][0] ?>" data-currentImage="0" data-images="<?= implode(' ', $item['images']) ?>" alt="Smartsort big">
            </div>
        <?php
        }
        ?>
    </div>

    <div class="frontend__desc frontend__desc--<?= $gallery['style'] ?>">
        <p><?= $gallery['description'] ?></p>

        <?php
        if (count($gallery["links"]) > 0) {
        ?>
            <div class="frontend__desc--links">
                <?php
                foreach ($gallery["links"] as $link) {
                ?>
                    <a href="<?= $link["link"] ?>" target="_blank" title="<?= $link["name"] ?>"><img src="./images/logo/<?= $link["icon"] ?>" alt="<?= $link["name"] ?>"></a>
                <?php
                }
                ?>
            </div>
        <?php
        }
        ?>
    </div>

</div>


<script>
    runNewPageScan();
</script>