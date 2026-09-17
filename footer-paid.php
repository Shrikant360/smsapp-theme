
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

        /* Form Styling Fixer */
        (function() {
            const forms = document.querySelectorAll('.contact-card form');
            forms.forEach((form, index) => {
                // Style submit button
                const btn = form.querySelector('input[type="submit"]');
                if (btn) {
                    btn.value = 'Submit';
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