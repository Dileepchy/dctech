<?php
/*
Template Name: About Page
*/

get_header();
?>


<main>
    <section class="about-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum tortor a ullamcorper fermentum. Ut ultricies sapien et lectus lobortis aliquet.</p>
                    <p>Nullam pellentesque erat nisl, in sagittis ex placerat sed. Quisque vitae turpis at massa pellentesque tristique.</p>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/about-image.jpg" alt="About Image">
                </div>
            </div>
        </div>
    </section>

    <section class="team-members">
        <div class="container">
            <h2>Our Team</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="team-member">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/team-member-1.jpg" alt="Team Member 1">
                        <h3>John Doe</h3>
                        <p>Position</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/team-member-2.jpg" alt="Team Member 2">
                        <h3>Jane Smith</h3>
                        <p>Position</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/team-member-3.jpg" alt="Team Member 3">
                        <h3>Mike Johnson</h3>
                        <p>Position</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>