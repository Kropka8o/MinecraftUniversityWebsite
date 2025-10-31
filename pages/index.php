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
            <div class="intro">
                <h1>Welcome to Minecraft University!</h1>
                <p>Your one-stop destination for all things Minecraft!</p>
                <p>Below here you will find all you need to know about this Minecraft server, take a look!</p>
            </div>

            <div class="index-parkour">
                <h2><a href="parkour.php">Parkour Course</a></h2>
                <p>In this world you will find an awesome parkour course designed to challenge your skills and improve your gameplay. 
                    Parkours are a popular activity in Minecraft, allowing players to test their agility and precision. Below you will find the information about this parkour.</p>
        </div>
        <div class="index-drop">
            <h2><a href="dropper.php">Dropper Course</a></h2>
            <p>The Dropper Course is an exhilarating Minecraft experience where players navigate through a challenging vertical drop. 
                The objective is to skillfully maneuver through obstacles while falling, aiming to land safely in designated areas below. 
                This course tests players' reflexes, timing, and precision as they descend through an intricate design and avoid hazards. 
                With its thrilling gameplay and creative level design, the Drop Course offers an exciting adventure for Minecraft enthusiasts seeking a unique challenge.</p>
        </div>
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
