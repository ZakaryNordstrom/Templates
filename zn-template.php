<!doctype html>
<html>
<head>
    <title>Zak's Responsive Template</title>

    <link rel="stylesheet" type="text/css" href="reset.css">

    <link rel="stylesheet/less" type="text/css" href="common.less">
    <link rel="stylesheet/less" type="text/css" href="mobile.less" />
    <link rel="stylesheet/less" type="text/css" href="tablet.less" />
    <link rel="stylesheet/less" type="text/css" href="desktop.less" />

    <link rel="stylesheet" href="font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="hamburgers.css" />
  
    <script src="jquery-3.3.1.js" type="text/javascript"></script>
    <script src="less.js" type="text/javascript"></script>


    
</head>

<body>
    <?php 
        include_once 'mobile_header.php';
        include_once 'tablet_header.php';
        include_once 'desktop_header.php';
    ?>
    
    <main>
    <?php
        include_once 'mobile_main.php'; 
        include_once 'tablet_main.php'; 
        include_once 'desktop_main.php';
    ?>
    </main>
    
    <?php
        include 'footer.php';
    ?>
  

    <script src="navi.js" type="text/javascript"></script>    
</body>
</html>