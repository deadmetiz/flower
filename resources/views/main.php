<!DOCTYPE html>
<html lang="en">
<head>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets\css\general.css">
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="stylesheet" href="assets\css\queries.css">
    <title>Document</title>
</head>
<body>
<main>
    <header class="header">
        <img class="logo" src="assets\images\omnifood-logo.png" alt="Omnifood logo">
        <nav class="main-nav">
            <ul class="main-nav-list">
                <li><a class="main-nav-link" href="#">How it works</a></li>
                <li><a class="main-nav-link" href="#">Meals</a></li>
                <li><a class="main-nav-link" href="#">Testimonials</a></li>
                <li><a class="main-nav-link" href="#">Pricing</a></li>
                <li><a class="main-nav-link nav-cta" href="#">Try for free</a></li>
            </ul>
        </nav>
        <button class="btn-mobile-nav">
            <ion-icon class="icon-mobile-nav" name="menu-outline"></ion-icon>
            <ion-icon class="icon-mobile-nav" name="close-outline"></ion-icon>
        </button>
    </header>
    <section class="section-intro">

        <div class="intro">
            <div class="intro-text-box">
                <h1 class="heading-primary">
                    A healthy meal delivered to your door, every single day
                </h1>
                <p class="intro-description">
                    The smart 365-days-per-year food subscription that will make you eat healthy again. Tailored to your
                    personal tastes and nutritional needs. We have delivered 250,000+ meals last year!
                </p>
                <a href="#" class="btn btn--full margin-right-sm">Start eating well</a>
                <a href="#" class="btn btn--outline">Learn more &darr;</a>
                <div class="delivered-meals">
                    <div class="delivered-images">
                        <img src="assets\images\customers\customer-1.jpg" alt="customer photo">
                        <img src="assets\images\customers\customer-2.jpg" alt="customer photo">
                        <img src="assets\images\customers\customer-3.jpg" alt="customer photo">
                        <img src="assets\images\customers\customer-4.jpg" alt="customer photo">
                        <img src="assets\images\customers\customer-5.jpg" alt="customer photo">
                        <img src="assets\images\customers\customer-6.jpg" alt="customer photo">
                    </div>
                    <p class="delivered-text"><span>250,000+</span> meals last year!</p>
                </div>
            </div>
            <div class="intro-img-box">
                <img class="intro-img" src="assets/images/hero.png" alt="woman enjoying food, meal in storage container,
                        and food bowls on a table">
            </div>
        </div>

    </section>
    <section class="section-featured">
        <div class="container">
            <h2 class="heading-featured-in">As featured</h2>
            <div class="logos">
                <img src="assets\images\logos\techcrunch.png" alt="Techcrich logo">
                <img src="assets\images\logos\business-insider.png" alt="Busniess insider logo">
                <img src="assets\images\logos\the-new-york-times.png" alt="The new york times logo">
                <img src="assets\images\logos\usa-today.png" alt="USA today logo">
            </div>

        </div>
    </section>
    <section class="section-how">
        <div class="container">
            <span class="subheading">How it works</span>
            <h2 class="headin-secondary">Your daily dose of health in 3 simple steps</h2>
        </div>
        <div class="container grid grid--2-cols grid--center-v">
            <div class="step-text-box">
                <p class="step-number">01</p>
                <h3 class="heading-tertiary">Tell us what you like (and what not)</h3>
                <p class="step-description">
                    Never again waste time thinking about what to eat! Omnifood AI will create a 100% personalized
                    weekly meal plan just for you. It makes sure you get all the nutrients and vitamins you need,
                    no matter what diet you follow!
                </p>
            </div>
            <div class="step-img-box">
                <img class="step-img" src="assets\images\app\app-screen-1.png" alt="Iphone app preferences">
            </div>
            <div class="step-img-box">
                <img class="step-img" src="assets\images\app\app-screen-2.png" alt="Iphone app preferences">
            </div>
            <div class="step-text-box">
                <p class="step-number">02</p>
                <h3 class="heading-tertiary">Approve your weekly meal plan</h3>
                <p class="step-description">
                    Once per week, approve the meal plan generated for you by Omnifood AI. You can change ingredients,
                    swap entire meals, or even add your own recipes.
                </p>
            </div>
            <div class="step-text-box">
                <p class="step-number">03</p>
                <h3 class="heading-tertiary">Receive meals at convenient time</h3>
                <p class="step-description">
                    Best chefs in town will cook your selected meal every day, and we will deliver it to your door
                    whenever works best for you. You can change delivery schedule and address daily!
                </p>
            </div>
            <div class="step-img-box">
                <img class="step-img" src="assets\images\app\app-screen-3.png" alt="Iphone app preferences">
            </div>
        </div>
    </section>
    <section class="section-meals">
        <div class="container center-text">
            <span class="subheading">Meals</span>
            <h2 class="heading-secondary">Omnifood AI chooses from 5,000+ recipes</h2>
        </div>
        <div class="container grid grid--3-cols margin-bottom-md">
            <div class="meal">
                <img class="meal-img" src="assets\images\meals\meal-1.jpg" alt="Japanese Gyozas">
                <div class="meal-content">
                    <div class="meal-tags">
                        <span class="tag tag--vegetarian">Vegetarian</span>
                    </div>
                    <p class="meal-title">Japanese Gyozas</p>
                    <ul class="meal-attributes">
                        <li class="meal-attribute">
                            <ion-icon class="meal-icon"  name="flame-outline"></ion-icon>
                            <span><strong>650</strong> calories</span>
                        </li>
                        <li class="meal-attribute">
                            <ion-icon class="meal-icon" name="restaurant-outline"></ion-icon>
                            <span>NutriScore &reg; <strong>74</strong></span>
                        </li>
                        <li class="meal-attribute">
                            <ion-icon class="meal-icon" name="star-outline"></ion-icon>
                            <span><strong>4.9</strong> rating (537)</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="meal">
                <img class="meal-img" src="assets\images\meals\meal-2.jpg" alt="Avocado Salad">
                <div class="meal-content">
                    <div class="meal-tags">
                        <span class="tag tag--vegan">Vegan</span>
                        <span class="tag tag--paleo">Paleo</span>
                    </div>
                    <p class="meal-title">Avocado Salad</p>
                    <ul class="meal-attributes">
                        <li class="meal-attribute">
                            <ion-icon class="meal-icon"  name="flame-outline"></ion-icon>
                            <span><strong>400</strong> calories</span>
                        </li>
                        <li class="meal-attribute">
                            <ion-icon class="meal-icon" name="restaurant-outline"></ion-icon>
                            <span>NutriScore &reg; <strong>92</strong></span>
                        </li>
                        <li class="meal-attribute">
                            <ion-icon class="meal-icon" name="star-outline"></ion-icon>
                            <span><strong>4.8</strong> rating (441)</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="diet">
                <h3 class="heading-tertiary"> Works with any diet:</h3>
                <ul class="list">
                    <li class="list-item">
                        <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                        <span>Vegetarian</span>
                    </li>
                    <li class="list-item">
                        <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                        <span>Vegan</span>
                    </li>
                    <li class="list-item">
                        <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                        <span>Pascatarian</span>
                    </li>
                    <li class="list-item">
                        <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                        <span>Gluten-free</span>
                    </li>
                    <li class="list-item">
                        <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                        <span>Lactose-free</span>
                    </li>
                    <li class="list-item">
                        <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                        <span>Keto</span>
                    </li>
                    <li class="list-item">
                        <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                        <span>Paleo</span>
                    </li>
                    <li class="list-item">
                        <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                        <span>Low FODMAP</span>
                    </li>
                    <li class="list-item">
                        <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                        <span>Kid-friendly</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container all-recipes">
            <a href="#" class="link">See all recipes &rarr;</a>
        </div>
    </section>
    <section class="section-testimonials grid grid--2-cols">
        <div class="testimonials-container">
            <span class="subheading">Testimonials</span>
            <h2 class="heading-secondary">Once you try it, you can't go back</h2>

            <div class="testimonials">
                <figure class="testimonial">
                    <img class="testimonial-img" src="/assets/images/customers/dave.jpg" alt="Customer photo">
                    <blockquote class="testimonial-text">
                        Inexpensive, healthy and great-tasting meals, without even having to order manually! It feels truly magical.
                    </blockquote>
                    <p class="testimonial-name">&mdash; Dave Bryson</p>
                </figure>
                <figure class="testimonial">
                    <img class="testimonial-img" src="/assets/images/customers/ben.jpg" alt="Customer photo">
                    <blockquote class="testimonial-text">
                        The AI algorithm is crazy good, it chooses the right meals for me every time. It's amazing not to worry about food anymore!
                    </blockquote>
                    <p class="testimonial-name">&mdash; Ben Hadley</p>
                </figure>
                <figure class="testimonial">
                    <img class="testimonial-img" src="/assets/images/customers/steve.jpg" alt="Customer photo">
                    <blockquote class="testimonial-text">
                        Omnifood is a life saver! I just started a company, so there's no time for cooking. I couldn't live without my daily meals now!
                    </blockquote>
                    <p class="testimonial-name">&mdash; Steve Miller</p>
                </figure>
                <figure class="testimonial">
                    <img class="testimonial-img" src="/assets/images/customers/hannah.jpg" alt="Customer photo">
                    <blockquote class="testimonial-text">
                        I got Omnifood for the whole family, and it frees up so much time! Plus, everything is organic and vegan and without plastic.
                    </blockquote>
                    <p class="testimonial-name">&mdash; Hannah Smith</p>
                </figure>
            </div>
        </div>
        <div class="gallery">
            <figure class="gallery-item">
                <img src="/assets/images/gallery/gallery-1.jpg" alt="Photo stuff">
            </figure>
            <figure class="gallery-item">
                <img src="/assets/images/gallery/gallery-2.jpg" alt="Photo stuff">
            </figure>
            <figure class="gallery-item">
                <img src="/assets/images/gallery/gallery-3.jpg" alt="Photo stuff">
            </figure>
            <figure class="gallery-item">
                <img src="/assets/images/gallery/gallery-4.jpg" alt="Photo stuff">
            </figure>
            <figure class="gallery-item">
                <img src="/assets/images/gallery/gallery-5.jpg" alt="Photo stuff">
            </figure>
            <figure class="gallery-item">
                <img src="/assets/images/gallery/gallery-6.jpg" alt="Photo stuff">
            </figure>
            <figure class="gallery-item">
                <img src="/assets/images/gallery/gallery-7.jpg" alt="Photo stuff">
            </figure>
            <figure class="gallery-item">
                <img src="/assets/images/gallery/gallery-8.jpg" alt="Photo stuff">
            </figure>
            <figure class="gallery-item">
                <img src="/assets/images/gallery/gallery-9.jpg" alt="Photo stuff">
            </figure>
            <figure class="gallery-item">
                <img src="/assets/images/gallery/gallery-10.jpg" alt="Photo stuff">
            </figure>
            <figure class="gallery-item">
                <img src="/assets/images/gallery/gallery-11.jpg" alt="Photo stuff">
            </figure>
            <figure class="gallery-item">
                <img src="/assets/images/gallery/gallery-12.jpg" alt="Photo stuff">
            </figure>
        </div>
    </section>
    <section class="section-pricing">
        <div clas="container">
            <span class="subheading-7">Pricing</span>
            <h2 class="heading-secondary-7">Eating well without breaking the bank</h2>
        </div>
        <div class="container grid grid--2-cols">
            <div class="pricing-plan pricing-plan--starter ">
                <div class="plan-header">
                    <p class="plan-name">Starter</p>
                    <p class="plan-price"><span>$</span>399</p>
                    <p class="plan-text">per month. That's just $13 per meal!</p>
                </div>
                <ul class="list">
                    <li class="list-item">
                        <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                        <span>1 meal per day</span>
                    </li>
                    <li class="list-item">
                        <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                        <span>Order from 11am to 9pm</span>
                    </li>
                    <li class="list-item">
                        <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                        <span>Delivery is free</span>
                    </li>
                    <li class="list-item">
                        <ion-icon class="list-icon" name="close-outline"></ion-icon>
                        <span>Get access to latest recipes</span>
                    </li>
                </ul>
                <div class="plan-sign-up">
                    <a href="#" class="btn btn--full margin-right-sm">Start eating well</a>
                </div>
            </div>
            <div class="pricing-plan pricing-plan--complete">
                <div class="plan-header">
                    <p class="plan-name">Complete</p>
                    <p class="plan-price"><span>$</span>699</p>
                    <p class="plan-text">per month. That's just $11 per meal!</p>
                </div>
                <ul class="list">
                    <li class="list-item">
                        <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                        <span><strong>2 meals</strong> per day</span>
                    </li>
                    <li class="list-item">
                        <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                        <span>Order <strong>24/7</strong></span>
                    </li>
                    <li class="list-item">
                        <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                        <span>Delivery is free</span>
                    </li>
                    <li class="list-item">
                        <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                        <span>Get access to latest recipes</span>
                    </li>
                </ul>
                <div class="plan-sign-up">
                    <a href="#" class="btn btn--full margin-right-sm">Start eating well</a>
                </div>
            </div>
        </div>
        <div class="container grid margin-bottom-lg">
            <p class="plan-details">
                Prices include.........
            </p>
        </div>
        <div class="container grid grid--4-cols">
            <div class="feature">
                <ion-icon class="feature-icon" name="infinite-outline"></ion-icon>
                <p class="feature-title">Never cook again!</p>
                <p class="feature-text">
                    Our...
                </p>
            </div>
            <div class="feature">
                <ion-icon class="feature-icon" name="infinite-outline"></ion-icon>
                <p class="feature-title">Local and organic</p>
                <p class="feature-text">
                    Our...
                </p>
            </div>
            <div class="feature">
                <ion-icon class="feature-icon" name="infinite-outline"></ion-icon>
                <p class="feature-title">No waste</p>
                <p class="feature-text">
                    Our...
                </p>
            </div>
            <div class="feature">
                <ion-icon class="feature-icon" name="infinite-outline"></ion-icon>
                <p class="feature-title">Pause anytime</p>
                <p class="feature-text">
                    Our...
                </p>
            </div>


        </div>
    </section>
    <section class="section-cta">
        <div class="container">
            <div class="cta">
                <div class="cta-text-box">
                    <h2 class="heading-secondary">Get your first meal for free!</h2>
                    <p class="cta-text">
                        Healthy, tasty and hassle-free meals are waiting for you. Start eating well today. You can cancel or pause anytime. And the first meal is on us!
                    </p>
                    <form class="cta-form" action="#">
                        <div>
                            <label for="full-name">Full name</label>
                            <input id="full-name" type="text" placeholder="John Smith">
                        </div>
                        <div>
                            <label for="email">Email address</label>
                            <input id="email" type="email" placeholder="me@example.com">
                        </div>
                        <div>
                            <label for="select-where">Where did you hear from us?</label>
                            <select id="select-where">
                                <option>Please choose one option:</option>
                                <option>Friends and family</option>
                                <option>YouTube video</option>
                                <option>Podcast</option>
                                <option>Facebook ad</option>
                                <option>Others</option>
                            </select>
                        </div>
                        <button class="btn btn--form">Sing up now</button>
                    </form>
                </div>
                <div class="cta-img-box">

                </div>
            </div>
        </div>
    </section>
</main>
<footer class="footer">
    <div class="container grid grid--footer">
        <div class="logo-col">
            <a href="#" class="footer-logo">
                <img class="logo" src="assets/images/omnifood-logo.png" alt="Omnifood logo">
            </a>
            <ul class="social-links">
                <li><a href="#"><ion-icon class="social-icon" name="logo-instagram"></ion-icon></a></li>
                <li><a href="#"><ion-icon class="social-icon" name="logo-instagram"></ion-icon></a></li>
                <li><a href="#"><ion-icon class="social-icon" name="logo-twitter"></ion-icon></a></li>
            </ul>
            <p class="copyright">
                Copyrigts &copy; 2021 by Omnyfood, Inc. All rights reserved.
            </p>
        </div>
        <div class="address-col">
            <p class="footer-heading">Contact us</p>
            <address class="contacts">
                <p class="address"> 623 Harrison St., 2nd Floor, San Francisco, CA 94107</p>
                <p>
                    <a href="tel:415-201-6370">415-201-6370</a>
                    <br>
                    <a href="mailto:hello@omnifood.com">hello@omnifood.com</a>
                </p>
            </address>
        </div>
        <div class="nav-col">
            <p class="footer-heading">Account</p>
            <ul class="footer-nav">
                <li><a href="#">Create account</a></li>
                <li><a href="#">Sing in</a></li>
                <li><a href="#">IOS app</a></li>
                <li><a href="#">Android app</a></li>
            </ul>
        </div>
        <div class="nav-col">
            <p class="footer-heading">Company</p>
            <ul class="footer-nav">
                <li><a href="#">About Omnifood</a></li>
                <li><a href="#">For Business</a></li>
                <li><a href="#">Cooking partners</a></li>
                <li><a href="#">Careers</a></li>
            </ul>
        </div>

        <div class="nav-col">
            <p class="footer-heading">Resources</p>
            <ul class="footer-nav">
                <li><a href="#">Recipe directory</a></li>
                <li><a href="#">Help center</a></li>
                <li><a href="#">Privacy and terms</a></li>
            </ul>
        </div>

    </div>
</footer>

</body>
</html>
