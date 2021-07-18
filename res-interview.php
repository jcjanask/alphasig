<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf', 'txt', 'docx');


    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 5000000) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                $message = "Success!";
            } else {
                echo "The file size is too big.";
            }
        } else {
            echo "There was an error uploading the file.";
        }
    } else {
        echo "You cannot upload files of this type.";
    }

}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset ="utf-8" />
        <meta name ="viewport" content = "with=device-width, initial scale =1.0">
        <title>Alpha Sigma Phi Epsilon Pi </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Barlow&display=swap" 
        rel="stylesheet">
        <link rel="stylesheet" href="res-interview-styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />




    </head>
    <body>
        <section class="top">
        <div class="container">
            <div class="nav">
                <div class="left">

                    <div class ="logo">
                        <a href="index.html"><img src="asig.png" height = "90px" width = "90px"></a>
                    </div>

                    <div class="linkwrapper">
                        <a href="index.html">Home</a>
                    </div>

                    <div class="linkwrapper activenav">
                        <a href="res-interview.php">Interview & Resume Help</a>
                    </div>

                    <div class="linkwrapper">
                        <a href="alumni.html">Alumni</a>
                    </div>
                    
                 </div>
            </div>

            <div class="text">
                <h1>Interview with Alpha Sig Alumni Speaker Coming Soon</h1>
            </div>

            <div class="main">
                <iframe width="600" height="330" src="https://www.youtube.com/embed/LOhxyyXQbRc" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;
                 encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </section>
        </div>

        <!--facebook -->
        <div class="center-of-page">
        <section class="facebook">
            <div class="submit-resume">
                <h1>SUBMIT YOUR RESUME</h1>
                <form action = "" method="POST" enctype="multipart/form-data">
                    <input type ="file" name="file"/><br><br>
                    <button type="submit" name="submit">Submit</button>
                    <?php echo "<p style='color:green'> $message </p>" ?>
                 </form>
                
            </div>

    
            <div class="interview-text">
                <h1>BOOK A MOCK INTERVIEW</h1>
            </div>

            <!-- Calendly inline widget begin -->
            <div class="calendly-inline-widget" data-url="https://calendly.com/josephjanaskie?hide_landing_page_details=1&hide_gdpr_banner=1" style = "width:700px;height:690px;"></div>
            <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>

        </section>
    </div>

    <footer>
    <div class="footer-content">
            <br><br><p>ALPHA SIGMA PHI</p>
            <p>219 E Church Street, Oxford, OH 45056</p>

        <ul class = "socials">
            <li><a href = "https://www.instagram.com/alphasigmiamioh/?hl=en"><i class = "fa fa-instagram"></i></a></li>
            <li><a href = "https://www.linkedin.com/groups/13614065/"><i class = "fa fa-linkedin-square"></i></a></li>
        </ul>
        </div>
        <div class="copyright">
            <p>COPYRIGHT &copy; 2021 JOSEPH JANASKIE</p>
        </div>

    </footer>


    </body>

</html>
