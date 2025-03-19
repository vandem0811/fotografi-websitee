<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photography Website</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>
<body>
    <header>
        <div class="logo"> TIMOR ART STUDIO </div>
        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#weddings">Weddings</a></li>
                <li><a href="#family">Family</a></li>
                <li><a href="#maternity">Maternity</a></li>
                <li><a href="#newborn">Newborn</a></li>
                <li><a href="#business">Business</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>

    </header>
    
    <section class="gallery">
        <h2>Your special moments captured authentically</h2>
        <div class="gallery-container">
           <img src="images/photo1.jpg" alt="Wedding">
            <img src="images/photo2.jpg" alt="Family">
            <img src="images/photo3.jpg" alt="Maternity">
        </div>
    </section>
    <section id="about">
    <h2>About</h2>
    <p>We are a professional photography studio capturing your best moments.</p>
</section>

<section id="weddings">
    <h2>Weddings</h2>
    <p>Timeless wedding photography to cherish forever.</p>
</section>

<section id="family">
    <h2>Family</h2>
    <p>Beautiful family portraits to celebrate love.</p>
</section>

<section id="maternity">
    <h2>Maternity</h2>
    <p>Preserving the beauty of motherhood.</p>
</section>

<section id="newborn">
    <h2>Newborn</h2>
    <p>Precious moments of your little one captured.</p>
</section>

<section id="business">
    <h2>Business</h2>
    <p>Professional headshots and branding photography.</p>
</section>
    <section class="testimonials">
        <div class="testimonial-slider">
            <div class="testimonial">
                <p>“Highly recommend! We absolutely LOVE our wedding pictures!”</p>
                <h4>Demi & Michael</h4>
            </div>
            <div class="testimonial">
                <p>“Amazing photos, very professional and kind!”</p>
                <h4>Sarah & John</h4>
            </div>
            <div class="testimonial">
                <p>“Captured our family's best moments beautifully!”</p>
                <h4>Emma & Liam</h4>
            </div>

        </div>
        <button id="prev">❮</button>
        <button id="next">❯</button>
    </section>
    </section>
    <div class="contact-section">
    <h2>CONTACT</h2>
    <div class="social-icons">
        <a href="https://www.facebook.com/username" target="_blank">
            <i class="fab fa-facebook"></i>
        </a>
        <a href="https://www.instagram.com/username" target="_blank">
            <i class="fab fa-instagram"></i>
        </a>
    </div>
</div>

    <footer>
        <p> TIMOR ART PHOTOGRAPHY </p>
    </footer>
    
    <script>
        let index = 0;
        const testimonials = document.querySelectorAll(".testimonial");
        const prevBtn = document.getElementById("prev");
        const nextBtn = document.getElementById("next");
        
        function showTestimonial(n) {
            testimonials.forEach((t, i) => {
                t.style.display = i === n ? "block" : "none";
            });
        }
        
        prevBtn.addEventListener("click", () => {
            index = (index - 1 + testimonials.length) % testimonials.length;
            showTestimonial(index);
        });
        
        nextBtn.addEventListener("click", () => {
            index = (index + 1) % testimonials.length;
            showTestimonial(index);
        });
        
        showTestimonial(index);
    </script>

</body>
</html>