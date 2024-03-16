<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('layouts/head.php'); ?>
</head>

<body>
    <div class="layer"></div>
    <!-- ! Body -->
    <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
    <div class="page-flex">
        <!-- ! Sidebar -->
        <?php include('layouts/sidebar.php'); ?>
        <div class="main-wrapper">
            <!-- ! Main nav -->
            <?php include('layouts/navbar.php'); ?>
            <!-- ! Main -->
            <main class="main users chart-page" id="skip-target">
                <?php include('home.php'); ?>
            </main>
            <!-- ! Footer -->
            <?php include('layouts/footer.php'); ?>
        </div>
    </div>
    <!-- Javascript -->
    <?php include('layouts/javascript.php'); ?>
</body>

</html>