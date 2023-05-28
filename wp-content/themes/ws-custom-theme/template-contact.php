<?php
//Template Name: contact
get_header();
?>

<main>
    <section class="contact-info">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Contact Information</h2>
                    <p>Email: contact@example.com</p>
                    <p>Phone: 123-456-7890</p>
                </div>
                <div class="col-md-6">
                    <h2>Location</h2>
                    <div class="google-map">
                        <!-- Embed Google Map here -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form">
        <div class="container">
            <h2>Contact Us</h2>
            <form id="contact-form" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST">
                <input type="hidden" name="action" value="custom_contact_form">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" name="name" id="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" required></textarea>
                </div>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>
</main>


<?php get_footer() ?>