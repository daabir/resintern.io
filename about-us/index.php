<?php include '../dbconnect.php'; ?>

<!DOCTYPE html>
<html lang="en-US">

<head>
      <title>About Us | <?php echo $domain; ?></title>
      <meta name="title" content="About Us | <?php echo $domain; ?>">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="language" content="English">
      <meta name="description" content="Hi there! I have created this website to help people build their professional resumes for absolutely no charges.">
      <meta name="keywords" content="<?php echo $keyword ?>">
      <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
      <meta name="robots" content="index, follow">
      <meta name="url" content="https://<?php echo $domain.'/about-us'; ?>/">
      <meta name="author" content="Mubashir">
      <link rel="canonical" href="https://<?php echo $domain.'/about-us'; ?>/" />
      <meta name="generator" content="HTML 5 and PHP 7.1" />

      <!-- Meta OG Property -->
      <meta property="og:locale" content="en_US" />
      <meta property="og:type" content="article" />
      <meta property="og:title" content="About Us | <?php echo $domain; ?>" />
      <meta property="og:description" content="Hi there! I have created this website to help people build their professional resumes for absolutely no charges." />
      <meta property="og:url" content="https://<?php echo $domain.'/about-us'; ?>/" />
      <meta property="og:site_name" content="<?php echo $domain; ?>" />

      <!-- Twitter Card -->
      <meta name="twitter:card" content="summary" />
      <meta name="twitter:description" content="Hi there! I have created this website to help people build their professional resumes for absolutely no charges." />
      <meta name="twitter:title" content="About Us | <?php echo $domain; ?>" />

      <!-- Base URL Set -->
      <base href="<?php echo $url ?>">

      <!--- Include CSS files --->
      <?php include"../sitestyle.php"; ?>

      <!-- Inline CSS --->
      <style type="text/css">
          #about{
            background: rgba(0,0,0,0.9);
            color: white;
            border-radius: 3px;
 
          }
          body{
               background: #ECEFF2;

          }
      </style>
</head>

<body>

<?php  include '../navbar.php'; ?>

<div class="intro-about">
<div class="container-fluid ">
      <p class="h3 tbold">ABOUT US</p>
      
      <p class="h4">Hi there! I have created this website to help people build their professional resumes for absolutely no charges.</p>
      
      <p class="h4">Build PowerFul Professional Resume In Just 5 Minutes.</p>
      
      <ul>
            <li>No Sign Up Required.</li>
            <li>No Payment Required.[zero cost]</li>
            <li>Easy To Use.</li>
            <li>Professional Resume Templates.</li>
            <li>Instruction To Build Powerful Resume.</li>
      </ul>

      <br><br>
      <p class="text-center">
        <a href="<?php echo $url.'resume/introduction' ?>" class="btn btn-danger btn-lg">Create Resume Now</a>
      </p>

      <br>

      <p class="h3">About Me:</p>
      <p class="h4">I am "Mubashir". I am a final year student in Computer Science Engineering.</p>
      <p class="h4">This is the second website which I have developed.</p>
      <br>
      <p class="h4 tbold">Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp; Mubashir Parwaz Dar</p>
      <p class="h4 tbold">Contact &nbsp;- &nbsp; <?php echo $gmail; ?></p>

</div>
</div>


<?php include '../footer.php'; ?>
</body>
</html>