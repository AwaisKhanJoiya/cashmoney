<?php include ('includes/header.php');?>

<body class="support">
    <?php include('includes/navbar.php') ?>
    <section class="main-section">
        <div class="container support-container">
            <ul class="support-menu">
                <li class="menu-item active" id="contact">Contact Us</li>
                <li class="menu-item" id="faq">FAQs</li>
            </ul>
            <div class="contact-section" id="contact-section">
                <div class="contact-details">
                    <div class="first-row contact-row">
                        <div class="live-chat first-item">
                            <i class="far fa-comment-alt"></i>
                            <button class="contact-btn chat-btn">Live Chat</button>
                        </div>
                        <div class="second-item contact-info">
                            <i class="fas fa-phone-alt"></i>
                            <div class="w-number">
                                <h2 class="w-number-heading">Phone / Whatsapp</h2>
                                <h3 class="contact-number">+63 929 343 1142</h3>
                            </div>
                        </div>
                    </div>
                    <div class="second-row contact-row">
                        <div class="skype-chat first-item">
                            <i class="fab fa-skype"></i>
                            <button class="contact-btn chat-btn">Skype</button>
                        </div>
                        <div class="second-item contact-info">
                            <i class="fas fa-envelope"></i>
                            <h3 class="contact-number">support@cashmoneyfx.com</h3>
                        </div>
                    </div>
                    <div class="date">
                        <i class="fas fa-calendar-alt"></i>
                        <div class="w-number">
                            <h2 class="w-number-heading">Business Hours</h2>
                            <h3 class="contact-number" id="date">Monday-Saturday 9:00 A.M. - 6:00 P.M. GMT+8</h3>
                        </div>
                    </div>

                </div>
                <div class="contact-form">
                    <h2 class="contact-us">Contact Us</h2>
                    <form action="">
                        <input type="email" placeholder="Email Address*" class="email">
                        <input type="text" placeholder="Name*" class="name">
                        <input type="text" placeholder="Subject*" class="subject">
                        <textarea class="message" placeholder="Message*"></textarea>
                        <input type="submit" class="contact-btn submit" value="Send">
                    </form>
                </div>
            </div>
            <div class="faqs-section" id="faq-section">
                <h2 class="contact-us">Frequently Asked Questions</h2>
                <div class="faq-container">
                    <div class="faq-question">
                        <p class="question">1. Will I be paying more in commissions for joining CASHMONEYFX?</p>
                        <p class="answer">
                            No, you will be paying less in commissions and will be earning cash rebates for your trades.
                        </p>
                    </div>
                    <div class="faq-question">
                        <p class="question">2. How much cash rebates will I earn?</p>
                        <p class="answer">
                            This will depend on your trading volume. The more you trade, the more you will earn.
                        </p>
                    </div>
                    <div class="faq-question">
                        <p class="question">3. Will you be able to access my broker account?</p>
                        <p class="answer">
                            No.
                        </p>
                    </div>
                    <div class="faq-question">
                        <p class="question">4. What if my broker is not on your list of supported brokers?</p>
                        <p class="answer">
                            Please notify us and we will contact your broker.
                        </p>
                    </div>
                    <div class="faq-question">
                        <p class="question">5. When will I receive my cash rebates?</p>
                        <p class="answer">
                            You will receive your cash rebates before the 12th of the month following
                            the month the cash rebates was earned. Other brokers you will be able
                            to receive cash rebates each week.
                            <br>
                            If there is a delay in payment, please contact us to look into it for you.

                        </p>
                    </div>
                    <div class="faq-question">
                        <p class="question">6. If I lose money in my trading account, will I still receive cash rebates?
                        </p>
                        <p class="answer">
                            Yes, you will still receive your cash rebates for the completed trades.
                        </p>
                    </div>
                    <div class="faq-question">
                        <p class="question">7. I have an existing account with another IB, how can I have it switched?
                        </p>
                        <p class="answer">
                            Please contact us and we will contact the broker on you behalf to have it switched,
                            or in some cases you will simply have to open a new account
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <script src="main_script.js"></script>
</body>

</html>