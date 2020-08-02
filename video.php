<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <style>
        html, body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #2f3640;
            overflow: hidden;
        }
        .container-fluid{
            background-color: #2C3E50;
            border: 3px solid #34495e;
            color: #b2bec3;
            /* border-radius: 25px; */
            padding: 10px;
            width: 95%;
        }
        .sidebar{
            border-right: 3px solid #212121;
            overflow: auto;
            max-height: 500px;
        }
        .row{
            padding: 10px;
        }

        .navbar-nav{
            margin: auto;
        }
        button.card{
            margin: auto;
            width: 100%;
            text-align: left;
        }
    </style>

    <title>BAKA video</title>
  </head>
  <body class="text-center">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Video <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="audio.php">Audio</a>
                </div>
            </div>
        </nav>

        <br>

        <div class="row">
            <div class="col-md-4 sidebar">

                <button class="card bg-dark text-light mb-3" onclick="gantiVideo('video/Sparkle - Your Name.mp4')" id="button">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <i class="fas fa-file-video fa-7x text-secondary"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Sparkle - Your Name</h5>
                            </div>
                        </div>
                    </div>
                </button>
                
                <br>

                <button class="card bg-dark text-light mb-3" onclick="gantiVideo('video/Grand Escape - Weathering With You.mp4')" id="button">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <i class="fas fa-file-video fa-7x text-secondary"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Grand Escape - Weathering With You</h5>
                            </div>
                        </div>
                    </div>
                </button>
                
                <br>

                <button class="card bg-dark text-light mb-3" onclick="gantiVideo('video/Darkside.mp4')">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <i class="fas fa-file-video fa-7x text-secondary"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Alan Walker - Darkside</h5>
                            </div>
                        </div>
                    </div>
                </button>

                <br>

                <button class="card bg-dark text-light mb-3" onclick="gantiVideo('video/On My Way.mp4')">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <i class="fas fa-file-video fa-7x text-secondary"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Alan Walker - On My Way</h5>
                            </div>
                        </div>
                    </div>
                </button>

                <br>

                <button class="card bg-dark text-light mb-3" onclick="gantiVideoYoutube('https:/www.youtube.com/embed/5qap5aO4i9A')">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <i class="fab fa-youtube fa-7x text-secondary"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Lofi hio hop radio - beats to relax/study to</h5>
                            </div>
                        </div>
                    </div>
                </button>

            </div>
            <div class="col-md-8 konten" id="div_video">
                <!-- disini video -->
            </div>
        </div>
        
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/58da37be9c.js" crossorigin="anonymous"></script>

    <script>
        function gantiVideo(url){
            document.getElementById('div_video').innerHTML = '<video controls id="video_ctrl" style="height: 100%; width: 100%;"><source src="'+url+'" type="video/mp4"></video>';

            document.getElementById('video_ctrl').play();
        }
        function gantiVideoYoutube(src){
            document.getElementById('div_video').innerHTML = '<iframe width="100%" height="100%" src="'+src+'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';

            document.getElementById('video_ctrl').play();
        }
    </script>

  </body>
</html>