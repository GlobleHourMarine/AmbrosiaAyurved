<style>
    .amb-footer-main {
        margin-top: 4px;
        position: relative;
        height: auto;
        background-size: cover !important;
        background-position: center !important;
        background-repeat: no-repeat;
        padding-top: 0px !important;
        padding-bottom: 80px !important;
        background: url(<?php echo base_url('/assets/images/footer_new.webp') ?>) !important;
    }

    .amb-footer-policy-container {
        display: flex !important;
        justify-content: space-between !important;
        margin-top: -10px !important;
        margin-bottom: 0px !important;
        padding: 10px 0px;
        justify-content: space-between;
    }

    .amb-footer-policy-container a {
        color: white !important;
        text-decoration: none;
        font-size: 15px !important;
    }

    .amb-footer-policy-container a:hover {
        font-weight: 600 !important;
        color: #084298;
    }

    .amb-footer-heading {
        color: white !important;
    }

    .amb-footer-address-box {
        color: white !important;

    }

    .amb-footer-line {
        background-color: none;
    }

    .amb-footer-quick-links li a {
        color: white !important;
        font-weight: 400 !important;
    }

    .amb-footer-quick-links li a:hover {
        color: black !important;
        font-weight: 500 !important;
        margin-left: 0px;
    }

    .amb-footer-contact-link {
        color: white !important;
        font-weight: 460 !important;
    }

    .amb-footer-contact-link:hover {
        color: black !important;
        font-weight: 490 !important;
    }

    /* New styles for logo and social icons */
    .amb-footer-logo {
        max-width: 120px;
        /* Reduced logo size */
        height: auto;
        margin-bottom: 15px;
    }

    .social-links-wrapper {
        margin-top: 20px;
        text-align: center;
    }

    .social-links-list {
        display: flex;
        justify-content: center;
        gap: 15px;
        padding: 0;
        list-style: none;
    }

    .amb-footer-social-icon {
        font-size: 18px;
        /* Smaller social icons */
        color: white;
    }

    .amb-footer-social-icon:hover {
        color: yellow;
        /* background-color:black; */
        /* border-radius:88px; */

    }

    .amb-footer-logo-container {
        display: none;
        /* Hide the duplicate logo */
    }

    .amb-footer-logo {
        max-width: 120px;
        height: auto;
        margin-bottom: 0px;
        margin-left: 50px;
        background-color: white;
        padding: 10px 12px;
        border-radius: 8px;
    }

    @media(max-width:576px) {
        .amb-footer-logo {
            max-width: 80px;
            height: auto;
            margin-bottom: 0px;
            margin-left: 0px;
            background-color: white;
            padding: 7px 10px;
            border-radius: 8px;
        }
    }

    .certification-title {
        color: black;
        font-weight: 600;
    }

    .amb-footer-main {
        background-size: cover !important;
        background-position: center !important;
    }

    /* Updated social icons styles */
    .social-links-wrapper {
        margin-top: 20px;
        text-align: center;
    }

    .social-links-list {
        display: flex;
        justify-content: center;
        gap: 15px;
        padding: 0;
        list-style: none;
    }

    .amb-footer-social-item a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        background-color: white;
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .amb-footer-social-icon {
        font-size: 18px;
        transition: all 0.3s ease;
    }

    /* Original colors for each platform */
    .amb-footer-social-item .fa-facebook {
        color: #1877F2;
    }

    .amb-footer-social-item .fa-instagram {
        color: #E4405F;
    }

    .amb-footer-social-item .fa-square-twitter {
        color: #1DA1F2;
    }

    .amb-footer-social-item .fa-envelope {
        color: #EA4335;
    }

    .amb-footer-social-item .fa-linkedin-in {
        color: #0A66C2;
    }

    /* Hover effects */
    .amb-footer-social-item a:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .amb-footer-social-item a:hover .amb-footer-social-icon {
        transform: scale(1.1);
    }

    svg:not(:host).svg-inline--fa,
    svg:not(:root).svg-inline--fa {
        margin: auto !important;
        /* border:2px solid red !important; */
    }
</style>
<div class="amb-footer-wrapper">
    <div class="container-fluid amb-certified-section" style="background-color:rgb(255, 254, 254) !important;">
        <div class="container">
            <h4 class="certification-title">Our Certifications & Accreditations</h4>

            <!-- Owl Carousel for Certifications -->
            <div class="owl-carousel owl-theme certification-carousel">
                <!-- UKAF Certification -->
                <div class="certification-item">
                    <img src="<?php echo base_url('/assets/images/UKAF.webp') ?>" alt="UKAF Certification" class="certification-badge">
                    <div class="certification-caption">UKAF Certified</div>
                </div>

                <!-- QCC Certification -->
                <div class="certification-item">
                    <img src="<?php echo base_url('/assets/images/QCC.webp') ?>" alt="QCC Certification" class="certification-badge">
                    <div class="certification-caption">QCC Certified</div>
                </div>

                <!-- MLCL Certification -->
                <div class="certification-item">
                    <img src="<?php echo base_url('/assets/images/MLCL.webp') ?>" alt="MLCL Certification" class="certification-badge">
                    <div class="certification-caption">MLCL Certified</div>
                </div>

                <!-- EAS Certification -->
                <div class="certification-item">
                    <img src="<?php echo base_url('/assets/images/EAS.webp') ?>" alt="EAS Certification" class="certification-badge">
                    <div class="certification-caption">EAS Certified</div>
                </div>

                <!-- IAF Certification -->
                <div class="certification-item">
                    <img src="<?php echo base_url('/assets/images/IAF.webp') ?>" alt="IAF Certification" class="certification-badge">
                    <div class="certification-caption">IAF Endorsed</div>
                </div>

                <!-- ITC Labs Certification -->
                <div class="certification-item">
                    <img src="<?php echo base_url('/assets/images/ITC.webp') ?>" alt="ITC Labs Certification" class="certification-badge">
                    <div class="certification-caption">ITC Labs Tested</div>
                </div>

                <!-- QAICB Certification -->
                <div class="certification-item">
                    <img src="<?php echo base_url('/assets/images/QAICB.webp') ?>" alt="QAICB Certification" class="certification-badge">
                    <div class="certification-caption">QAICB Certified</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Rest of your footer remains the same -->
    <div class="container-fluid amb-footer-main">
        <div class="container">
            <div class="d-flex amb-footer-content">
                <div class="amb-footer-section mt-5">
                    <a href="/"><img src="<?php echo base_url('/assets/images/new_logo11.webp'); ?>" alt="Ambrosia Logo" class="amb-footer-logo"></a>
                    <div class="amb-footer-address-box px-2 py-3">
                        Ground Floor, Plot no. 1230, ARK Tower, <br>JLPL Industrial Area, , Sector 82 Mohali, <br>S.A.S Nagar, Punjab - 140308
                    </div>
                </div>

                <div class="amb-footer-section mt-5" style="width:44%;">
                    <div class="amb-footer-quick-links-container">
                        <div class="amb-footer-quick-links-col">
                            <ul class="amb-footer-quick-links">
                                <li><a href="<?php echo base_url('/'); ?>"> Home</a></li>
                                <li><a href="<?php echo base_url('about_us'); ?>"> About us</a></li>
                                <li><a href="<?php echo base_url('our_products'); ?>"> Our Products</a></li>
                                <li><a href="<?php echo base_url('a5-herbal-supplement'); ?>"> Product Description</a></li>
                                <li><a href="<?php echo base_url('order'); ?>"> Order History</a></li>
                                <li><a href="<?php echo base_url('contact_us'); ?>">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="amb-footer-quick-links-col">
                            <ul class="amb-footer-quick-links">
                                <li><a href="https://ambrosiaayurved.in/blog/"> Blogs</a></li>
                                <li><a href="<?php echo base_url('privacy_policy'); ?>">Privacy Policy</a></li>
                                <li><a href="<?php echo base_url('terms_conditions'); ?>">Terms and Conditions</a></li>
                                <li><a href="<?php echo base_url('shipping_policy'); ?>">Shipping and Delivery Policy</a></li>
                                <li><a href="<?php echo base_url('cancellation_policy'); ?>">Cancellation, Return and Refund Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="amb-footer-section mt-5">
                    <p style="color:white;">Customer Care No: 80000-57233</p>
                    <p style="color:white;">Email:<a href="mailto:care@ambrosiaayurved.in" class="amb-footer-contact-link"> care@ambrosiaayurved.in</a></p>

                    <!-- Social links moved here -->
                    <div class="social-links-wrapper">
                        <ul class="social-links-list">
                            <li class="amb-footer-social-item"><a href="https://www.facebook.com/people/Ambrosia-Ayurved/61575172705272/?sk=photos"><i class="fa-brands fa-facebook amb-footer-social-icon"></i></a></li>
                            <li class="amb-footer-social-item"><a href="https://www.instagram.com/ambrosia.ayurved/"><i class="fa-brands fa-instagram amb-footer-social-icon"></i></a></li>
                            <li class="amb-footer-social-item  "><a href="https://x.com/AmbrosiaAyurved"><i class="fa-brands fa-square-twitter amb-footer-social-icon "></i></a></li>
                            <li class="amb-footer-social-item"><a href="mailto:care@ambrosiaayurve.in"><i class="fa-solid fa-envelope amb-footer-social-icon"></i></a></li>
                            <li class="amb-footer-social-item"><a href="https://www.linkedin.com/company/ambrosia-ayurved"><i class="fa-brands fa-linkedin-in  amb-footer-social-icon"></i></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<!-- <script src="< base_url('assets/js/header.js') ?>"></script> -->

<!-- Core Libraries (load in this order) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js"></script>
<!-- Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- Google Translate (if needed early, keep in <head> with async) -->
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" async></script>
<!-- Page-Specific JS -->
<?php if (!empty($custom_js)) {
    foreach ($custom_js as $js) {
        echo '<script src="' . base_url($js) . '"></script>' . "\n";
    }
} ?>

<!-- ......... Add to cart code............ -->
<script>
    function updateGlobalCartCount() {
        let cart = Cookies.get("cart");
        cart = cart ? JSON.parse(cart) : {};
        let total = 0;
        for (let key in cart) {
            total += cart[key].quantity || 0;
        }
        const badge = document.getElementById("cartCount");
        if (badge) {
            badge.textContent = total;
            badge.style.display = total > 0 ? "inline-block" : "none";
        }
    }

    function showToast(message, type) {
        const toast = document.createElement("div");
        toast.className = `alert alert-${type} position-fixed top-0 end-0 m-3`;
        toast.style.zIndex = "9999";
        toast.textContent = message;
        document.body.appendChild(toast);
        setTimeout(() => toast.remove(), 3000);
    }

    document.addEventListener("DOMContentLoaded", function() {
        updateGlobalCartCount();

        const quantityInput = document.querySelector(".quantity-input");
        const addToCartBtn = document.querySelector(".add-to-cart-btn");
        const buyNowBtn = document.querySelector(".buy-now-btn");

        const productId = addToCartBtn?.dataset.id;
        const productName = addToCartBtn?.dataset.name;
        const basePrice = parseFloat(addToCartBtn?.dataset.baseprice);
        const productImage = addToCartBtn?.dataset.image;

        // Quantity controls
        document.querySelector(".decrement")?.addEventListener("click", () => {
            let val = parseInt(quantityInput?.value || 1);
            if (val > 1) quantityInput.value = val - 1;
        });

        document.querySelector(".increment")?.addEventListener("click", () => {
            quantityInput.value = parseInt(quantityInput?.value || 1) + 1;
        });

        // Pack selection
        const packOptions = document.querySelectorAll(".pack-option");
        packOptions.forEach(option => {
            option.addEventListener("click", function() {
                packOptions.forEach(o => o.classList.remove("selected"));
                this.classList.add("selected");
            });
        });

        function getSelectedPack() {
            const selected = document.querySelector(".pack-option.selected");
            if (selected) {
                return {
                    packId: selected.getAttribute("data-id"),
                    packPrice: parseFloat(selected.getAttribute("data-price")),
                    packQty: selected.getAttribute("data-qty")
                };
            }
            return {
                packId: null,
                packPrice: basePrice,
                packQty: 1
            };
        }

        function addToCart(productId, productName, unitPrice, quantity, packId = null, packQty = 1) {
            const cartKey = packId ? `pack_${productId}_${packId}` : `product_${productId}`;
            let cart = Cookies.get("cart");
            cart = cart ? JSON.parse(cart) : {};

            if (cart[cartKey]) {
                cart[cartKey].quantity += quantity;
            } else {
                cart[cartKey] = {
                    product_id: productId,
                    name: productName,
                    price: unitPrice,
                    quantity: quantity,
                    pack_id: packId,
                    pack_qty: packQty,
                    image: productImage || ''
                };
            }

            Cookies.set("cart", JSON.stringify(cart), {
                expires: 1
            });
            updateGlobalCartCount();
            console.log("✅ Cart Updated:", cart);
        }

        function setBuyNowItem(productId, productName, unitPrice, quantity, packId = null, packQty = 1) {
            const buyNowItem = {
                product_id: productId,
                name: productName,
                price: unitPrice,
                quantity: quantity,
                pack_id: packId,
                pack_qty: packQty,
                image: productImage || ''
            };
            Cookies.set("buy_now", JSON.stringify(buyNowItem), {
                expires: 1
            });
            console.log("⚡ Buy Now Item Set:", buyNowItem);
        }

        // Add to Cart
        addToCartBtn?.addEventListener("click", () => {
            const quantity = parseInt(quantityInput?.value || 1);
            const {
                packId,
                packPrice,
                packQty
            } = getSelectedPack();
            addToCart(productId, productName, packPrice, quantity, packId, packQty);
            alert("🛒 Product added to cart!");
        });

        // Buy Now
        buyNowBtn?.addEventListener("click", () => {
            const quantity = parseInt(quantityInput?.value || 1);
            const {
                packId,
                packPrice,
                packQty
            } = getSelectedPack();
            setBuyNowItem(productId, productName, packPrice, quantity, packId, packQty);
            window.location.href = "<?= base_url('order-summery') ?>";
        });

        // Show Email Modal for Alternate Flow
        document.querySelector(".buy-product-btn")?.addEventListener("click", function() {
            const productId = this.dataset.id;
            const productName = this.dataset.name;
            const price = parseFloat(this.dataset.baseprice);
            const image = this.dataset.image;
            const qtyInput = document.querySelector(".quantity-input");
            const quantity = parseInt(qtyInput?.value || 1);

            const orderData = {
                product_id: productId,
                name: productName,
                price: price,
                quantity: quantity,
                image: image,
                timestamp: new Date().getTime()
            };

            Cookies.set("alternate_order", JSON.stringify(orderData), {
                expires: 1
            });

            const modal = new bootstrap.Modal(document.getElementById('emailVerificationModal'));
            modal.show();
        });

        // Email verification logic
        //  document.getElementById("verifyEmailBtn").addEventListener("click", function() {
        //      const email = document.getElementById("userEmail").value;
        //      console.log(email);
        //      if (!validateEmail(email)) {
        //          document.getElementById("userEmail").classList.add('is-invalid');
        //          return;
        //      }

        //      document.getElementById("userEmail").classList.remove('is-invalid');

        //      // Show loading state
        //      this.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...';

        //         $.ajax({
        //         url: '<//?= base_url("Alternative_flow/verify_ambrosia_user") ?>', // Adjust if needed
        //         type: 'POST',
        //         data: email,
        //         success: function(response) {
        //             alert('Email sent successfully!');
        //         },
        //         error: function(xhr) {
        //             alert('Error sending email.');
        //         }
        //     });
        // });

        // Send email to server for OTP generation
        //      fetch("< //?= base_url('Alternative_flow/verify_ambrosia_user') ?>", {
        //          method: "POST",
        //          headers: {
        //              "Content-Type": "application/json",
        //              "X-Requested-With": "XMLHttpRequest"
        //          },
        //          body: JSON.stringify({ email: email })
        //      })
        //      .then(response => response.json())
        //      .then(data => {
        //          if (data.success) {
        //              // Show OTP section
        //              document.getElementById("emailSection").style.display = 'none';
        //              document.getElementById("otpSection").style.display = 'block';
        //              document.getElementById("verifyEmailBtn").style.display = 'none';
        //              document.getElementById("verifyOTPBtn").style.display = 'block';

        //              // Store email in session storage
        //              sessionStorage.setItem('order_email', email);
        //          } else {
        //              alert("Failed to send OTP. Please try again.");
        //              this.innerHTML = 'Send OTP';
        //          }
        //      })
        //      .catch(error => {
        //          console.error("Error:", error);
        //          this.innerHTML = 'Send OTP';
        //      });

        // Live AJAX email verification
        $('#verifyEmailBtn').on('click', function() {
            var email = $('#userEmail').val().trim();
            var data = {
                email: email
            };

            $.ajax({
                url: '<?= base_url("Alternative_flow/verify_ambrosia_user") ?>',
                type: 'POST',
                data: data,
                success: function(response) {
                    $('#emailSection').hide();
                    $('#otpSection').show();
                    $('#verifyEmailBtn').hide();
                    $('#verifyOTPBtn').show();
                    sessionStorage.setItem('order_email', email);
                    $('#userOTP').focus();
                },
                error: function(xhr) {
                    alert('Something went wrong. Please try again.');
                }
            });
        });

        // OTP verification logic
        document.getElementById("verifyOTPBtn").addEventListener("click", function() {
            const otp = document.getElementById("userOTP").value;
            const email = sessionStorage.getItem("order_email");

            if (!otp || otp.length !== 6) {
                document.getElementById("userOTP").classList.add("is-invalid");
                return;
            }

            const verifyBtn = this;
            verifyBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Verifying...';
            verifyBtn.disabled = true;

            fetch("<?= base_url('Alternative_flow/verify_ambrosia_user_otp') ?>", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-Requested-With": "XMLHttpRequest",
                    },
                    body: JSON.stringify({
                        email: email,
                        otp: otp,
                    }),
                })
                .then((response) => {
                    if (!response.ok) throw new Error("Network error");
                    return response.json();
                })
                .then((data) => {
                    if (data.success) {
                        const otpModal = bootstrap.Modal.getInstance(document.getElementById("emailVerificationModal"));
                        otpModal.hide();

                        const nextModal = new bootstrap.Modal(document.getElementById("nextStepModal"));
                        nextModal.show();
                    } else {
                        alert(data.message || "Invalid OTP. Please try again.");
                    }
                })
                .catch((error) => {
                    console.error("Error:", error);
                    alert("Verification failed. Please try again.");
                })
                .finally(() => {
                    verifyBtn.innerHTML = "Verify & Continue";
                    verifyBtn.disabled = false;
                });
        });

        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }
    });
</script>

</html>