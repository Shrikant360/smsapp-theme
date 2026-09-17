        <!-- ═══ FOOTER — SALESFORCE ═══ -->
        <footer class="footer">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="f-logo" id="foot-logo"><img src="https://360smsapp.com/wp-content/uploads/2022/01/logo_b046c853129b1637fa48a6e91c6a7b17_1x.webp" alt="360 SMS App Logo"></div>
                        <p class="f-desc">The #1 rated Salesforce SMS app on AppExchange. SMS, WhatsApp, AI Chatbot — natively inside Salesforce. No middleware, no developer.</p>
                       <a href="#" class="f-badge mb-2"><span>📦</span> Also on AppExchange · Salesforce</a>
                        <a href="#" class="f-badge" style="color: var(--brand-zo) !important; border-color: rgba(196, 21, 42, 0.1);"><span>📦</span> Zoho Marketplace · Zoho CRM</a>
                        
                        <div class="f-socials">
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                            <a href="#"><i class="bi bi-twitter-x"></i></a>
                            <a href="#"><i class="bi bi-youtube"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h4 class="f-h">Products</h4>
                        <?php foreach (['SMS for Salesforce', 'WhatsApp for CRM', 'AI Chatbot for CRM', 'Messaging App for CRM', 'Automated Messaging', 'Bulk SMS', 'Workflow Automation', 'WhatsApp Automation'] as $link): ?>
                            <a href="#" class="f-link"><?= $link ?></a>
                        <?php endforeach; ?>
                        <a href="#" class="f-link red">→ All Features</a>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h4 class="f-h">Resources</h4>
                        <?php foreach (['Blog', 'Case Studies', 'Success Stories', 'Documents', 'Pro Tips', 'Webinars', 'Whitepapers', 'Events'] as $link): ?>
                            <a href="#" class="f-link"><?= $link ?></a>
                        <?php endforeach; ?>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h4 class="f-h">Company</h4>
                        <?php foreach (['About Us', 'Careers', 'Partners', 'Pricing', 'Contact Us'] as $link): ?>
                            <a href="#" class="f-link"><?= $link ?></a>
                        <?php endforeach; ?>
                        <h4 class="f-h f-sales-mt">SALES CLOUD</h4>
                        <a href="mailto:sales@360smsapp.com" class="f-link f-sales-link">sales@360smsapp.com</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="f-h">Contact</h4>
                        <div class="f-contact-item">
                            <div class="f-contact-title"> United States</div>
                            <a href="tel:+13236414417" class="f-contact-num">+1 323 641 4417</a>
                            <div class="f-contact-addr">1968 S. Coast Hwy 1412,<br>Laguna Beach, CA 92651</div>
                        </div>
                        <div class="f-contact-item">
                            <div class="f-contact-title">🇬🇧 United Kingdom</div>
                            <a href="tel:+447403279473" class="f-contact-num">+44 740 327 9473</a>
                            <div class="f-contact-addr">Plaza Suite 8, KD Tower, Cotterells,<br>Hemel Hempstead, Herts, HP1 1FW, UK</div>
                        </div>
                    </div>
                </div>
                <div class="f-btm d-flex justify-content-between align-items-center">
                    <div>© 2026 360 SMS App. All rights reserved.</div>
                    <div class="f-btm-links">
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms of Use</a>
                        <a href="#">Cookie Policy</a>
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
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
</body>

</html>