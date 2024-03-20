<!doctype PHP>
<html>
    <head>
    <link rel="stylesheet" href="style.css">
    <header class="Hmain">
        <div class="logo"><img src="Logo.png" width="50px" height="50px"></div>
        <nav class="nav">
        <a href="index.php">Home</a>
        <a href="moregames.php">More Games From Us</a>
        <a href="Log_in.php">Log In</a>
        <a href="#">FAQ</a>
        <a href="aboutus.php">About Us</a>
        </nav>
    </header>
    <script>
        function toggleAnswer(element) {
        element.nextElementSibling.classList.toggle('show');
        }
    </script>
    </head>

    <body>
<div class="container flex">
    <div class="faq-container flex">
            <h1>Frequently Asked Questions</h1>

            <div class="faq">
            <div class="question" onclick="toggleAnswer(this)">Q: How do I create an account?</div>
            <div class="answer">A: To create an account, click on the 'Log In' and then click on the 'Register' link under the login form and fill out the registration form.</div>
            </div>

            <div class="faq">
            <div class="question" onclick="toggleAnswer(this)">Q: How do I reset my password?</div>
            <div class="answer">A: To reset your password, go to the login page and click on the 'Forgot Password' link. Follow the instructions provided to reset your password.</div>
            </div>

            <div class="faq">
            <div class="question" onclick="toggleAnswer(this)">Q: Can I change my username?</div>
            <div class="answer">A: Unfortunately, the username cannot be changed once it is set during the account creation process.</div>
            </div>

            <div class="faq">
            <div class="question" onclick="toggleAnswer(this)">Q: Can The Elder Scrolls Skyrim be played in Co-op?</div>
            <div class="answer">A: Unfortunately, no. The Elder Scrolls Skyrim is a solo experience.</div>
            </div>

            <div class="faq">
            <div class="question" onclick="toggleAnswer(this)">Q: Is The Elder Scrolls Skyrim available on PS4?</div>
            <div class="answer">A: Yes, The Elder Scrolls Skyrim is available on all next-gen platforms including PS4.</div>
            </div>
    </div>
    </div>
    <footer class="footer">
    <p> 1994-2023 Bethesda Softworks LLC. All rights reserved.</p>
  </footer>
    </body>
</html>