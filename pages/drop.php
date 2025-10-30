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
            <div class="drop-container">
                <div class="drop-text">
                    <H1>Drop</H1>
                    <p>The drop is a classic type of minigame within Minecraft, so I decided it would be fun to make a small drop of my own.</p>
                    <p>The rules are simple, you jump down from the top of the structure and fall to the bottom, avoiding obstacles on the way down. I built my own little plug-in to facilitate the mechanic of teleporting back to the top of the structure after hitting an obstacle.</p>
                    <p>You can see my drop on the right, the design is extremely basic, as it was my first ever drop and it had to be done within a day or two, hence why it is such a short one as well. I still think it's fun and the rainbow colours add a cheerful vibe as well.</p>
                    <p>- Cheryl</p>
                </div>
                <div class="drop-image">
                    <img src="../media/drop_vid.gif" alt="Drop showcase" />
                </div>
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
