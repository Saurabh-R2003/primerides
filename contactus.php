<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/@splinetool/viewer@1.8.1/build/spline-viewer.js"></script>
    <spline-viewer url="https://prod.spline.design/g0ooA6CaZZ62ba9P/scene.splinecode"></spline-viewer> 
    <link rel="stylesheet" href="css/contactus.css">
    <title>Document</title>
</head>

<body>
    <div>
    <?php include('includes/header.php'); ?>
    </div>
    <div class="spline-bot">
        <script>
            import {
                Application
            } from '@splinetool/runtime';

            const canvas = document.getElementById('canvas3d');
            const app = new Application(canvas);
            app.load('https://prod.spline.design/v56uR8ozYdgy1C-n/scene.splinecode');
        
        </script>
        
    </div>
    <?php include('includes/footer.php'); ?>
</body>

</html>


