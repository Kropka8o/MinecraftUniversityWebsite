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
            <form class="contact-form" action="../submit_contact.php" method="post">
                <h1>Contact Us</h1>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                <div class="form-group">

                <div class="form-group">
                    <button type="submit">Submit</button>
                </div>
            </form>
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