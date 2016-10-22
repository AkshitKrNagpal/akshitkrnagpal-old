<?php
function redirectToHTTPS()
{
  if($_SERVER["HTTP_X_FORWARDED_PROTO"]==="http")
  {
     $_SERVER["HTTP_X_FORWARDED_PROTO"]="https";
     $redirect= "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
     header("Location: $redirect");
  }
}
redirectToHTTPS();
?>
<html>
    <head>
        <title>Akshit Kr Nagpal</title>
        <link href="style.css" rel="stylesheet">
        <link href="font/stylesheet.css" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="favicon.png"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84508219-2', 'auto');
  ga('send', 'pageview');

</script>
    </head>
    <body>
        <div class="container">
            <div id="profile-image" class="row">
                <img src="profile-image.png" alt="Akshit Kr Nagpal">
            </div>
            <div id="full-name" class="row">
                <h1>Akshit <span class="grey">Kr Nagpal</span></h1>
            </div>
            <div id="title" class="row">
                <h3>Programmer <span class="grey">&#9679;</span> Coder <span class="grey">&#9679;</span> Developer </h3>
            </div>
            <div id="scholastic" class="row">
                <h4>Research Scholar at <a href="https://ducic.ac.in/" class="grey">Cluster Innovation Centre</a></h4>
            </div>
            <div id="email" class="row">
                <h4><a href="mailto:contact@akshitkrnagpal.com" class="grey"> contact@akshitkrnagpal.com</a></h4>
            </div>
            <div id="social-links" class="row">
                <ul>
                    <li>
                        <a href="https://www.facebook.com/nagpalkrakshit" target="_blank">
                            <div class="img-container">
                                <img src="social-icons/facebook.png" />
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/AkshitKrNagpal/" target="_blank">
                            <div class="img-container">
                                <img src="social-icons/github.png" />
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/akshit-kr-nagpal-40187110a" target="_blank">
                            <div class="img-container">
                                <img src="social-icons/linkedin.png" />
                            </div>
                        </a>
                    </li>   
                </ul>
            </div>
            <div id="resume-link" class="row">
                <span class="btn"><a class="grey no-decor" href="resume.pdf">See Resume</a></span>
            </div>
        </div>
    </body>
</html>	