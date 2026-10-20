<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
    <h1>Contact Information</h1>
    <br>
    <form>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        <br><br>
        <button type="submit" onclick="submitFunction()">Submit</button>
    </form>

    <script>
        function submitFunction() {
        alert("Message sent successfully!");
        }
    </script>

</body>
</html><?php /**PATH C:\Users\ctnaj\Projects\IntegratedFramework_Assignment1\resources\views/contact.blade.php ENDPATH**/ ?>