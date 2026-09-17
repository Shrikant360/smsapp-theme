  <!-- ═══ FOOTER - SMS ═══ -->
        <footer class="footer">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="f-logo" id="foot-logo"><a href="<?php echo site_url(); ?>"><img src="<?php echo esc_url( wp_upload_dir()['baseurl'] . '/2026/08/sms-logo.webp' ); ?>" alt="360 SMS App Logo"></a></div>
                        <p class="f-desc">The #1 rated Salesforce SMS app on AppExchange. SMS, WhatsApp, AI Chatbot - natively inside Salesforce. No middleware, no developer.</p>
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV&utm_source=SEO&utm_medium=website&utm_campaign=navigation" target="_blank" class="f-badge mb-2"><span>📦</span> Also on AppExchange · Salesforce</a>
                        

                        <div class="f-socials">
                            <a href="https://www.linkedin.com/company/360smsapp/" target="_blank"><i class="bi bi-linkedin"></i></a>
                            <a href="https://x.com/360smsapp" target="_blank"><i class="bi bi-twitter-x"></i></a>
                            <a href="https://www.youtube.com/@360smsapp8" target="_blank"><i class="bi bi-youtube"></i></a>
                            <a href="https://www.facebook.com/360SMSApp/" target="_blank"><i class="bi bi-facebook"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h4 class="f-h">Products</h4>
                    
                        <?php
                        wp_nav_menu([
                            'theme_location' => 'footer_products',
                            'container'      => false,
                            'menu_class'     => 'footer-menu',
                            'fallback_cb'    => false,
                        ]);
                        ?>
                    
                        <a href="<?php echo site_url(); ?>/features/" class="f-link red">→ All Features</a>
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
                    
                        <h4 class="f-h f-sales-mt">Support & Care</h4>
                    
                        <a href="mailto:care@360smsapp.com" class="f-link f-sales-link">
                            care@360smsapp.com
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="f-h">Contact</h4>
                        <div class="f-contact-item">
                            <div class="f-contact-title"><img src="https://flagcdn.com/w20/us.png" width="18" alt="US"> United States</div>
                            <a href="tel:+13236414417" class="f-contact-num">+1 323 641 4417</a>
                            <div class="f-contact-addr">1968 S. Coast Hwy 1412,<br>Laguna Beach, CA 92651</div>
                        </div>
                        <div class="f-contact-item">
                            <div class="f-contact-title"><img src="https://flagcdn.com/w20/gb.png" width="18" alt="UK"> United Kingdom</div>
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
                    btn.value = 'SEND MESSAGE →';
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
<?php 
    wp_footer(); 
?>
</body>

</html>

<!--SMS Footer End-->