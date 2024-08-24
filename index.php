    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flood Hotspots Monitoring System</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            font-family: "Times New Roman", Times, serif;
           
        }

        main {
            flex-grow: 1;
        }  

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }

        .hero-img img {
            max-width: 100%;
        }

        .content {
            text-align: justify;
            font-family: "Times New Roman", Times, serif;
            
        }

        @media (max-width: 767px) {
            .hero-img {
                text-align: center;
            }
        }
    </style>
<?php 
include 'header.php';
?>
<main id="main" style="">
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8" data-aos="fade-up">
                <div class="content">
                    <h5 style="font-weight: bold;"><center>Welcome to Flood Hotspots Monitoring System</center></h5>
                    <p>
                        This System is designed to address the severe damage to property, infrastructure, and the environment caused by flooding in Rwanda. To mitigate these impacts, this system enhances the Rwanda Water Resources Board’s (RWB) ability to monitor and respond to flood events effectively. It provides a robust, user-friendly platform for accurately reporting flood hotspots and erosion risks, enabling efficient data collection, analysis, and management.
                    </p>
                </div>
            </div>


            <div class="col-lg-4">
                 <h5 style="font-weight: bold;"><center>System User's Guide</center></h5>
                
            </div>


        </div>
    </div>
</section>
</main>

<?php 
include('Admin/footer.php');
?>

</body>
</html>
