  <?php include get_stylesheet_directory() . '/partials/first-footer.php'; ?>  
  <!-- ═══ SECTION 17 + 18: GET IN TOUCH WITH OVERLAPPING FORM ═══ -->
        <section class="sec-17-18 py-5 mb-5" id="contact_form">
            <div class="container">
                <div class="sec-17-18-wrap position-relative">

                    <!-- Blue background card -->
                    <div class="sec-17-bg-card">
                        <div class="sec-17-content">
                            <div class="text-uppercase fw-bold text-muted small ls-1 mb-3">CONTACT US</div>
                            <h2 class="fw-800 ls-n1 mb-4">We're here to help -<br>whenever you need us.</h2>
                            <p class="text-muted fs-14 mb-5 lh-16">Have questions about 360 SMS for Zoho CRM? Need help with a demo or setup? Our team typically responds within an hours.</p>
                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="sec-17-check"><i class="bi bi-check2"></i></div>
                                    <span class="fw-500 text-muted fs-16">24x7 global support</span>
                                </div>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="sec-17-check"><i class="bi bi-check2"></i></div>
                                    <span class="fw-500 text-muted fs-16">Average first response within an hour</span>
                                </div>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="sec-17-check"><i class="bi bi-check2"></i></div>
                                    <span class="fw-500 text-muted fs-16">Supporting thousands of teams across Zoho CRM</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating form card -->
                    <div class="sec-17-form-float">
                        <div class="contact-card">
                            <h3 class="fw-bold fs-21 mb-1">Send us a message</h3>
                            <p class="text-muted small mb-4">We'll connect you with the right specialist.</p>
                            <?= do_shortcode('[contact_pageshortcode]') ?>
                        </div>
                    </div>

                </div>
            </div>
        </section>

  <!-- ═══ FOOTER  - ZOHO ═══ -->
        <footer class="footer">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="f-logo" id="foot-logo"><a href="<?php echo site_url(); ?>"><img src="<?php echo site_url(); ?>/wp-content/uploads/2026/08/sms-logo.webp" alt="360 SMS App Logo"></a></div>
                        <p class="f-desc">The #1 rated Zoho CRM SMS extension. SMS, WhatsApp, and more - natively inside Zoho CRM. No middleware, no developer.</p>
                        <a href="https://marketplace.zoho.com/app/crm/360-sms-for-zoho-crm" class="f-badge"><span>📦</span> Zoho Marketplace · Zoho CRM</a>

                        <div class="f-socials">
                            <a href="https://www.linkedin.com/company/360smsapp/" target="_blank"><i class="bi bi-linkedin"></i></a>
                            <a href="https://x.com/360smsapp" target="_blank"><i class="bi bi-twitter-x"></i></a>
                            <a href="https://www.youtube.com/@360smsapp8" target="_blank"><i class="bi bi-youtube"></i></a>
                            <a href="https://www.facebook.com/360SMSApp/" target="_blank"><i class="bi bi-facebook"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h4 class="f-h">Products</h4>
                            <a href="<?php echo site_url(); ?>/sms-messaging-app-zoho-crm" class="f-link">SMS for Zoho CRM</a>
                            <a href="<?php echo site_url(); ?>/whatsapp-integration-zoho-crm" class="f-link">WhatsApp for Zoho CRM</a>
                            <a href="<?php echo site_url(); ?>/ai-led-zoho-messaging-app" class="f-link">Messaging App for Zoho</a>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h4 class="f-h">Resources</h4>
                        <?php
                            wp_nav_menu([
                                'theme_location' => 'footer_resources',
                                'container'      => false,
                                'menu_class'     => 'footer-menu',
                                'fallback_cb'    => false,
                            ]);
                        ?>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h4 class="f-h">Company</h4>
                    
                        <?php
                            wp_nav_menu([
                                'theme_location' => 'footer_company',
                                'container'      => false,
                                'menu_class'     => 'footer-menu',
                                'fallback_cb'    => false,
                            ]);
                        ?>
                        <h4 class="f-h f-sales-mt">SALES</h4>
                        <a href="mailto:sales@360smsapp.com" class="f-link f-sales-link">sales@360smsapp.com</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="f-h">Contact</h4>
                        <div class="f-contact-item">
                            <div class="f-contact-title"><img src="https://flagcdn.com/w20/us.png" width="18" alt="US"> United States</div>
                            <a href="tel:+13236414417" class="f-contact-num">+1 323 641 4417</a>
                            <div class="f-contact-addr">1968 S. Coast Hwy 1412,<br>Laguna Beach, CA 92651</div>
                        </div>
                        <div class="f-contact-item">
                            <div class="f-contact-title"><img src="https://flagcdn.com/w20/gb.png" width="18" alt="GB"> United Kingdom</div>
                            <a href="tel:+447403279473" class="f-contact-num">+44 740 327 9473</a>
                            <div class="f-contact-addr">Plaza Suite 8, KD Tower, Cotterells,<br>Hemel Hempstead, Herts, HP1 1FW, UK</div>
                        </div>
                    </div>
                </div>
                <div class="f-btm d-flex flex-column flex-md-row justify-content-between align-items-center gap-3 text-center text-md-start">

                    <div>
                        © <?php echo date('Y'); ?> 360 SMS App. All rights reserved.
                    </div>
                
                    <div class="f-btm-links d-flex flex-wrap justify-content-center gap-3">
                        <a href="<?php echo site_url(); ?>/privacy-policy/" class="text-decoration-none">Privacy Policy</a>
                        <a href="<?php echo site_url(); ?>/terms-of-service/" class="text-decoration-none">Terms of Use</a>
                        <!--<a href="<?php //echo site_url(); ?>/#/" class="text-decoration-none">Cookie Policy</a>-->
                    </div>
                
                </div>
            </div>
        </footer>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let activeGS = 1;

        function showGS(n) {
            activeGS = n;
            const color = 'var(--brand)';
            for (let i = 1; i <= 4; i++) {
                const tab = document.getElementById('gst-' + i),
                    panel = document.getElementById('gsp-' + i),
                    num = document.getElementById('gsn' + i);
                if (tab) {
                    tab.style.opacity = i === n ? '1' : '.6';
                    tab.style.borderLeft = i === n ? '4px solid ' + color : '4px solid transparent';
                    tab.classList.toggle('active-tab', i === n);
                }
                if (panel) panel.style.display = i === n ? 'block' : 'none';
            }
        }

        function toggleM(menu, el) {
            const mega = el.nextElementSibling,
                isOpen = mega.classList.contains('show');
            document.querySelectorAll('.mega').forEach(m => m.classList.remove('show'));
            document.querySelectorAll('.nl').forEach(n => n.classList.remove('open'));
            if (!isOpen) {
                mega.classList.add('show');
                el.classList.add('open');
            }
        }

        function toggleFaq(el) {
            const item = el.parentElement,
                ans = el.nextElementSibling,
                isOpen = item.classList.contains('open');
            document.querySelectorAll('.faq-item').forEach(i => {
                i.classList.remove('open');
                i.querySelector('.faq-a').style.display = 'none';
            });
            if (!isOpen) {
                item.classList.add('open');
                ans.style.display = 'block';
            }
        }

        function toggleMobNav() {
            const root = document.getElementById('three60-hp-root');
            root.classList.toggle('mob-nav-open');
            document.body.style.overflow = root.classList.contains('mob-nav-open') ? 'hidden' : '';
        }

        document.addEventListener('click', function(e) {
            if (!e.target.closest('.ni') && !e.target.closest('.mob-toggle')) {
                document.querySelectorAll('.mega').forEach(m => m.classList.remove('show'));
                document.querySelectorAll('.nl').forEach(n => n.classList.remove('open'));
                const root = document.getElementById('three60-hp-root');
                if (root.classList.contains('mob-nav-open')) {
                    root.classList.remove('mob-nav-open');
                    document.body.style.overflow = '';
                }
            }
        });

        /* Section 16 Form Fixer */
        (function() {
            const form = document.querySelector('.contact-card form');
            if (form) {
                // Style submit button
                const btn = form.querySelector('input[type="submit"]');
                if (btn) {
                    btn.value = 'Submit';
                    btn.classList.add('btn-submit-contact');
                    btn.id = 'webtoLeadFormOne';
                }

                // Add labels for better grouping
                const selects = form.querySelectorAll('select');
                selects.forEach(s => {
                    if (s.parentElement.innerHTML.indexOf('select country') === -1) {
                        const lbl = document.createElement('p');
                        lbl.innerHTML = 'Please select country below';
                        lbl.className = 'small text-muted mb-2 fw-bold w-100';
                        s.parentNode.insertBefore(lbl, s);
                    }
                });
            }
        })();
    </script>
    <style>
    .footer ul li a{
        color:#444 !important;
    }
    #three60-hp-root .contact-card .btn-submit-contact{
        padding: 0 !important;
    }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php include get_stylesheet_directory() . '/old-footer-code.php'; ?>
    <?php wp_footer(); ?>
</body>

</html>
<!--Footer ZOHO End-->