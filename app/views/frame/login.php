<!-- Page Metadata -->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- External Link -->
<link rel="stylesheet" type="text/css" href="<?=$data['constant']->baseUrl?>/css/general.css" />
<link rel="stylesheet" type="text/css" href="<?=$data['constant']->baseUrl?>/css/login.css" />

<div class = "login-wrapper">
    <form action = "login/auth" class = "login-form" method = "POST">
        <img src = "<?=$data['constant']->baseUrl?>/images/main-logo-vert.svg" />
        <input name = "auth" type = "password" placeholder = "Authentication Code" />
        <input type = "submit" value = "Login" />
    </form>
</div>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
     })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
     
     ga('create', 'UA-37998913-8', 'auto');
     ga('send', 'pageview');
     
</script>