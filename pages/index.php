<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minecraft University</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <?php include '../header.php'; ?>
    <main>
        <div class="wrapper">
        </div>
    </main>
    <?php include '../footer.php'; ?>
</body>
</html>

<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script>
    $(function(){
        $('a').each(function(){
            if ($(this).prop('href') == window.location.href) {
                $(this).addClass('active');
            }
        });
    });
</script>
