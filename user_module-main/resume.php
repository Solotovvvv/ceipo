<?php
// Include your PHP logic here
include 'includes/config.php'; // Include your database configuration file
$pdo = Database::connection(); // Establish a PDO connection

try {
    // SQL query to fetch all data from the "user_resume" table
    $sql = "SELECT * FROM user_resume";

    // Prepare and execute the query
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Fetch all rows as an associative array
    $resumeData = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the database connection
$pdo = null;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <title>RESUME</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" /> 
    <link rel="stylesheet" type="text/css" href="resume.css" media="all" />
</head>
<body>
<div id="doc2" class="yui-t7">
    <div id="inner">
        <div id="hd">
            <div class="yui-gc">
                <div class="yui-u first">
                    <h1>KENJIE P. ARCEO</h1>
                    <h2>Front-End Developer</h2>
                </div>
                <div class="yui-u">
                    <div class="contact-info">
                        <h3>linkedin.com/arceokenjie</h3>
                        <h3>arceokenjie@gmail.com</h3>
                        <h3>+639567283342</h3>
                        <h3>Maypajo, Caloocan City</h3>
                    </div><!--// .contact-info -->
                </div>
            </div><!--// .yui-gc -->
        </div><!--// hd -->
        <div id="bd">
            <div id="yui-main">
                <div class="yui-b">
                    <div class="yui-gf">
                        <div class="yui-u first">
                            <h2>Summary</h2>
                        </div>
                        <div class="yui-u">
                            <p class="enlarge">
                                Progressively evolve cross-platform ideas before impactful infomediaries. Energistically visualize tactical initiatives before cross-media catalysts for change. 
                            </p>
                        </div>
                    </div><!--// .yui-gf -->
                    
                    <div class="yui-gf">
                        <div class="yui-u first">
                            <h2>Education</h2>
                        </div>
                        <div class="yui-u">
                            <!-- Add your education data here -->
                        </div>
                    </div>
                    
                    <div class="yui-gf">
                        <div class="yui-u first">
                            <h2>Experience</h2>
                        </div>
                        <div class="yui-u">
                            <?php
                            // Iterate through the resume data and display experience information
                            foreach ($resumeData as $row) {
                                $expCompany = $row['exp_company'];
                                $expPosition = $row['exp_position'];
                                $expExperience = $row['work_exp'];

                                $companyArray = explode(', ', $expCompany);
                                $positionArray = explode(', ', $expPosition);
                                $experienceArray = explode(', ', $expExperience);

                                for ($i = 0; $i < count($companyArray); $i++) {
                                    echo '<div class="job">';
                                    echo '<h2>' . $companyArray[$i] . '</h2>';
                                    echo '<h3>' . $positionArray[$i] . '</h3>';
                                    echo '<h4>' . $experienceArray[$i] . '</h4>';
                                    echo '<p>ASJCBASJCASJHCAGHCASS</p>';
                                    echo '</div>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                    
                    <div class="yui-gf">
                        <div class="yui-u first">
                            <h2>Skills</h2>
                        </div>
                        <div class="yui-u">
                            <!-- Add your skills data here -->
                        </div>
                    </div>
                    
                    <div class="yui-gf">
                        <div class="yui-u first">
                            <h2>Certificates</h2>
                        </div>
                        <div class="yui-u">
                            <!-- Add your certificates data here -->
                        </div>
                    </div>
                </div><!--// .yui-b -->
            </div><!--// yui-main -->
        </div><!--// bd -->
    </div><!-- // inner -->
</div><!--// doc -->
</body>
</html>
