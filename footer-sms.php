    <?php //include get_stylesheet_directory() . '/partials/faq.php'; ?> 
        <?php include get_stylesheet_directory() . '/partials/first-footer.php'; ?>  
        <!-- ═══ CONTACT FORM ═══ -->
        <?php
if ( ! is_page_template( 'user-guide.php' ) ) {?>
        <div id="contact_form"></div>
        <section class="sec-17-18 py-new-5 mb-5">
            <div class="container">
                <div class="sec-17-18-wrap position-relative">

                    <!-- Blue background card -->
                    <div class="sec-17-bg-card">
                        <div class="sec-17-content">
                            <div class="text-uppercase fw-bold text-muted small ls-1 mb-3">CONTACT US</div>
                            <h2 class="fw-800 ls-n1 mb-4">Get in touch- hear back<br>in an hour or less</h2>
                            <p class="text-muted fs-14 mb-5 lh-16">Whether you need a 360 SMS demo, a pricing quote, or help with setup in Salesforce, our team is available 24x7 across the US, UK, AU, and IN.</p>
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
                                    <span class="fw-500 text-muted fs-16">Trusted by 60K+ users on Salesforce</span>
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
<?php } ?>
  <!-- ═══ FOOTER - SMS ═══ -->
        <footer class="footer">
    <div class="container">
        <div class="row g-5">
            <div class="col-12 col-md-6 col-lg-3 f-footer-brand-col">
                <div class="f-logo" id="foot-logo">
                    <a href="https://qa.360smsapp.in">
                        <img src="https://qa.360smsapp.in/wp-content/uploads/2026/08/sms-logo.webp" alt="360 SMS App Logo">
                    </a>
                </div>
                <p class="f-desc">The #1 rated Salesforce SMS app on AppExchange. SMS, WhatsApp, AI Chatbot - natively inside Salesforce. No middleware, no developer.</p>
                <div class="f-socials">
                    <a href="https://www.linkedin.com/company/360smsapp/" target="_blank"><i class="bi bi-linkedin"></i></a>
                    <a href="https://x.com/360smsapp" target="_blank"><i class="bi bi-twitter-x"></i></a>
                    <a href="https://www.youtube.com/@360smsapp8" target="_blank"><i class="bi bi-youtube"></i></a>
                    <a href="https://www.facebook.com/360SMSApp/" target="_blank"><i class="bi bi-facebook"></i></a>
                </div>
            </div>
            <div class="col-6 col-md-6 col-lg-2">
                <h4 class="f-h">Products</h4>
                <ul id="menu-footer-product" class="footer-menu">
                    <li id="menu-item-67771" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67771"><a href="https://qa.360smsapp.in/salesforce-sms/">SMS for Salesforce</a></li>
                    <li id="menu-item-67770" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67770"><a href="https://qa.360smsapp.in/salesforce-computer-telephony-integration/">CTI Telephony</a></li>
                    <li id="menu-item-67774" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67774"><a href="https://qa.360smsapp.in/salesforce-instagram/">Salesforce Instagram</a></li>
                    <li id="menu-item-67777" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67777"><a href="https://qa.360smsapp.in/drip-campaigns/">Drip Campaigns</a></li>
                    <li id="menu-item-67779" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67779"><a href="https://qa.360smsapp.in/salesforce-texting/">Salesforce Texting</a></li>
                </ul>
                <a href="https://qa.360smsapp.in/features/" class="f-link red">All Features</a>
            </div>
            <div class="col-6 col-md-6 col-lg-2">
                <h4 class="f-h">Resources</h4>
                <ul id="menu-footer-resources" class="footer-menu">
                    <li id="menu-item-67780" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67780"><a href="https://qa.360smsapp.in/blog/">Blog</a></li>
                    <li id="menu-item-67781" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67781"><a href="https://qa.360smsapp.in/case-study/">Case Study</a></li>
                    <li id="menu-item-67782" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67782"><a href="https://qa.360smsapp.in/success-stories/">Success Stories</a></li>
                    <li id="menu-item-67783" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67783"><a href="https://qa.360smsapp.in/manuals/">Product Manuals</a></li>
                    <li id="menu-item-67784" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67784"><a href="https://qa.360smsapp.in/texting-for-pros/">Pro Tips</a></li>
                    <li id="menu-item-67785" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67785"><a href="https://qa.360smsapp.in/events/">Events</a></li>
                </ul>
            </div>
            <div class="col-6 col-md-6 col-lg-2 f-footer-company-col">
                <h4 class="f-h">Company</h4>
                <ul id="menu-footer-company" class="footer-menu">
                    <li id="menu-item-67786" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67786"><a href="https://qa.360smsapp.in/about-us/">About Us</a></li>
                    <li id="menu-item-67787" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-67787"><a href="https://360degreecloud.com/careers/">Careers</a></li>
                    <li id="menu-item-67790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67790"><a href="https://qa.360smsapp.in/partner-with-us/">Partner</a></li>
                    <li id="menu-item-67791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67791"><a href="https://qa.360smsapp.in/contact-us/">Contact Us</a></li>
                </ul>
                <h4 class="f-h f-sales-mt">Support &amp; Care</h4>
                <a href="mailto:care@360smsapp.com" class="f-link f-sales-link">
                    <i class="bi bi-envelope f-mail-icon"></i> care@360smsapp.com
                </a>
            </div>
            <div class="col-6 col-md-6 col-lg-3 f-footer-contact-col">
                <h4 class="f-h">Contact</h4>
                <div class="f-contact-grid">
                    <div class="f-contact-item">
                        <div class="f-contact-title"><img src="https://flagcdn.com/w20/us.png" width="18" alt="US"> United States</div>
                        <a href="tel:+13236414417" class="f-contact-num">+1 323 641 4417</a>
                        <div class="f-contact-addr">1968 S. Coast Hwy 1412,<br>Laguna Beach, CA 92651</div>
                    </div>
                    <div class="f-contact-item">
                        <div class="f-contact-title"><img src="https://flagcdn.com/w20/gb.png" width="18" alt="UK"> United Kingdom</div>
                        <a href="tel:+447403279473" class="f-contact-num">+44 740 327 9473</a>
                        <div class="f-contact-addr">Plaza Suite 8, KD Tower, Cotterells, Hemel Hempstead, Herts, HP1 1FW, UK</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="f-btm d-flex flex-column flex-md-row justify-content-between align-items-center gap-3 text-center text-md-start">
            <div>
                © 2026 360 SMS App. All rights reserved.
            </div>
            <div class="f-btm-links d-flex flex-wrap justify-content-center gap-3">
                <a href="https://qa.360smsapp.in/privacy-policy/" class="text-decoration-none">Privacy Policy</a>
                <a href="https://qa.360smsapp.in/terms-of-service/" class="text-decoration-none">Terms of Use</a>
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
            const item = el.parentElement;
            const ans = el.nextElementSibling;
            const isOpen = item.classList.contains('open');
        
            document.querySelectorAll('.faq-item').forEach(faq => {
                faq.classList.remove('open');
        
                const answer = faq.querySelector('.faq-a');
                if (answer) {
                    answer.style.display = 'none';
                }
        
                const icon = faq.querySelector('.faq-q i');
                if (icon) {
                    icon.classList.remove('bi-x');
                    icon.classList.add('bi-plus');
                }
            });
        
            if (!isOpen) {
                item.classList.add('open');
                ans.style.display = 'block';
        
                const icon = el.querySelector('i');
                icon.classList.remove('bi-plus');
                icon.classList.add('bi-x');
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

        /* Form Styling Fixer */
        (function() {
            const forms = document.querySelectorAll('.contact-card form');
            forms.forEach((form, index) => {
                // Style submit button
                const btn = form.querySelector('input[type="submit"]');
                if (btn) {
                    btn.value = 'SUBMIT';
                    btn.classList.add('btn-submit-contact');
                    if (!btn.id) btn.id = 'webtoLeadForm' + (index + 1);
                }

                // Add labels for better grouping if needed
                const selects = form.querySelectorAll('select');
                selects.forEach(s => {
                    if (s.parentElement.innerHTML.indexOf('select country') === -1) {
                        const lbl = document.createElement('p');
                        lbl.innerHTML = 'Please select country below';
                        lbl.className = 'small text-muted mb-2 fw-bold w-100';
                        s.parentNode.insertBefore(lbl, s);
                    }
                });
            });
        })();
    </script>
    <?php include get_stylesheet_directory() . '/old-footer-code.php'; ?>
    <style>
        /* ═══ FOOTER MOBILE LAYOUT (≤767.98px) ═══ */
@media (max-width: 767.98px) {

    /* Logo + social icons — centered */
    .footer .f-footer-brand-col {
        text-align: center;
        margin-bottom: 40px;
    }
    .footer .f-footer-brand-col #foot-logo {
        display: flex;
        justify-content: center;
    }
    .footer .f-footer-brand-col .f-socials {
        display: flex;
        justify-content: center;
    }

    /* Company — full width, links on one centered bullet-separated line */
    .footer .f-footer-company-col {
        flex: 0 0 100%;
        max-width: 100%;
        margin-top: 10px;
        text-align: center;
    }
    .footer .f-footer-company-col .footer-menu {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        list-style: none;
        padding: 0;
        margin: 0 0 16px;
    }
    .footer .f-footer-company-col .footer-menu li:not(:last-child)::after {
        content: "•";
        margin: 0 10px;
        color: #9aa5b1;
    }
    .footer .f-footer-company-col .f-sales-link {
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }
    .footer .f-mail-icon {
        font-size: 15px;
    }

    /* Contact — full width, two-column card grid */
    .footer .f-footer-contact-col {
        flex: 0 0 100%;
        max-width: 100%;
        margin-top: 14px;
        text-align: center;
    }
    .footer .f-contact-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
        text-align: left;
    }
    .footer .f-contact-grid .f-contact-item {
        background: rgba(255, 255, 255, 0.6);
        border-radius: 10px;
        padding: 14px;
    }

    /* Copyright */
    .footer .f-btm {
        border-top: 1px solid rgba(0, 0, 0, 0.08);
        padding-top: 16px;
        margin-top: 24px;
    }
}
    </style>
<?php 
    wp_footer(); 
?>
</body>

</html>

<!--SMS Footer End-->