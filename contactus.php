<?php include('header.php'); ?>

<!-- Tagline Section -->
<section class="py-5 text-center banner text-white">
    <div class="container">
        <div class="banner-content">

            <h1 class="display-4">Contact Us</h1>
            <p class="lead">Home > Contact</p>
        </div>
    </div>
</section>

<style>
    .img_placrholder .placeholder {
        height: 100%;
        margin: 0;
    }

    .location1:hover {
        padding: 20px;
        border-left: 3px solid red;
    }

    .location1 {
        padding: 20px;
        box-shadow: 0px 0px 2px #ddd;
        margin: 20px 0;
    }

    .img_placrholder {
        height: 100%;
    }

    .banner{
        background: url('slide4.jpg');
        height: 450px;
        background-size: cover;
        background-repeat: no-repeat;
        background-position:  center;
    }
    .banner-content{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 450px;
    }
</style>
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="form pt-5">


                    <form id="contactForm ">
                        <span>Tagline</span>
                        <h2 class="mb-4">Contact Us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Message:</label>
                            <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                    <p id="responseMessage" class="mt-3"></p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="img_placrholder pt-5">

                    <div class="placeholder">Image Placeholder</div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <span>Tagline</span>
                <h2 class="mb-4">Contact Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>
            <div class="col-lg-6">
                <div class="location1">
                    <h3>Chennai</h3>
                    <p>
                        Glintwise India (OPC) Pvt.Ltd.
                        No.10,11,1st Floor,
                        Dr.Radhakrishnan Nagar,P.H.Road,
                        Arumbakkam,Tamilnadu-600106.
                    </p>
                    <a href="https://www.google.com/maps/place/Glintwise+India/@13.0757752,80.2113969,17z/data=!3m1!4b1!4m6!3m5!1s0x3a5267003c657569:0xa84b56820d738629!8m2!3d13.07577!4d80.2139718!16s%2Fg%2F11ybp2_8zb?authuser=0&entry=ttu&g_ep=EgoyMDI1MDMxMi4wIKXMDSoJLDEwMjExNDUzSAFQAw%3D%3D" class="mt-2">
                        View Map
                    </a>
                </div>
                <div class="location1">
                    <h3>Chennai</h3>
                    <p>
                        Glintwise India (OPC) Pvt.Ltd.
                        No.10,11,1st Floor,
                        Dr.Radhakrishnan Nagar,P.H.Road,
                        Arumbakkam,Tamilnadu-600106.
                    </p>
                    <a href="https://www.google.com/maps/place/Glintwise+India/@13.0757752,80.2113969,17z/data=!3m1!4b1!4m6!3m5!1s0x3a5267003c657569:0xa84b56820d738629!8m2!3d13.07577!4d80.2139718!16s%2Fg%2F11ybp2_8zb?authuser=0&entry=ttu&g_ep=EgoyMDI1MDMxMi4wIKXMDSoJLDEwMjExNDUzSAFQAw%3D%3D" class="mt-2">
                        View Map
                    </a>
                </div>
                <div class="location1">
                    <h3>Chennai</h3>
                    <p>
                        Glintwise India (OPC) Pvt.Ltd.
                        No.10,11,1st Floor,
                        Dr.Radhakrishnan Nagar,P.H.Road,
                        Arumbakkam,Tamilnadu-600106.
                    </p>
                    <a href="https://www.google.com/maps/place/Glintwise+India/@13.0757752,80.2113969,17z/data=!3m1!4b1!4m6!3m5!1s0x3a5267003c657569:0xa84b56820d738629!8m2!3d13.07577!4d80.2139718!16s%2Fg%2F11ybp2_8zb?authuser=0&entry=ttu&g_ep=EgoyMDI1MDMxMi4wIKXMDSoJLDEwMjExNDUzSAFQAw%3D%3D" class="mt-2">
                        View Map
                    </a>
                </div>


            </div>
            <div class="col-lg-6">
                <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.36923168024!2d80.2139718!3d13.075769999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5267003c657569%3A0xa84b56820d738629!2sGlintwise%20India!5e0!3m2!1sen!2sin!4v1742972054676!5m2!1sen!2sin" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
            </div>
        </div>
    </div>
</section>





<?php include('footer.php'); ?>