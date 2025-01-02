<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
            font-family: Arial, sans-serif;
        }
        .faq-section {
            padding: 50px 15px;
        }
        .faq-header {
            background-color: #007bff;
            color: white;
            padding: 30px;
            text-align: center;
            border-radius: 8px;
            margin-bottom: 50px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .accordion-button:not(.collapsed) {
            background-color: #007bff;
            color: white;
            box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.1);
        }
        .accordion-button {
            color: #343a40;
            font-weight: 500;
        }
        .accordion-item {
            margin-bottom: 15px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            overflow: hidden;
        }
        .accordion-body {
            background-color: #ffffff;
            padding: 20px;
            line-height: 1.6;
        }
        .additional-info {
            background-color: #e9ecef;
            padding: 30px;
            border-radius: 8px;
            margin-top: 50px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container faq-section">
        <div class="faq-header">
            <h1>Frequently Asked Questions</h1>
            <p>Your questions answered, all in one place</p>
        </div>

        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What is your return policy?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Our return policy allows returns within 30 days of purchase. Items must be in original condition with all tags attached. For more details, visit our Return Policy page.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        How can I track my order?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        You can track your order by logging into your account and visiting the "My Orders" section. Alternatively, you can use the tracking link sent to your email.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Do you offer international shipping?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, we offer international shipping to select countries. Shipping fees and delivery times may vary based on your location. Please check our Shipping Information page for more details.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        How can I contact customer support?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        You can contact our customer support team via email at support@example.com or call us at 1-800-123-4567. Our team is available Monday to Friday, 9 AM to 5 PM.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        What payment methods do you accept?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        We accept all major credit cards, PayPal, and bank transfers. For a full list of accepted payment methods, visit our Payment Information page.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Can I change or cancel my order?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Orders can be changed or canceled within 24 hours of placement. After that, we start processing the order, and changes may not be possible. Please contact our support team for assistance.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        Are there any warranties on your products?
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, many of our products come with a warranty. The warranty details are listed on the product page. If you need more information, please contact us.
                    </div>
                </div>
            </div>
        </div>

        <div class="additional-info mt-5">
            <h3>Need More Help?</h3>
            <p>If you didn’t find the answer to your question, feel free to reach out to our support team. We’re here to assist you 24/7.</p>
        </div>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2024 Your Company Name. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
