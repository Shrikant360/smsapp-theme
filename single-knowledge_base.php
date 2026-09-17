<?php
get_header("sms");
?>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    <!-- Top navbar -->
    <nav class="navbar navbar-expand-lg bg-white border-bottom sticky-top py-2">
      <div class="container-fluid px-3 px-lg-4">
        <button class="btn btn-outline-primary d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarOffcanvas">
          <i class="bi bi-list"></i> Table of Contents
        </button>
      </div>
    </nav>

    <!-- Hero -->
    <header class="hero text-center text-white">
      <div class="container">
        <h1 class="hero-title"><?php the_title(); ?></h1>
        <!--<p class="hero-sub">Guides, manuals, and FAQs for 360 SmartDocs — Salesforce document automation made simple.</p>-->
      </div>
    </header>

    <!-- Breadcrumb -->
    <!--<div class="container px-3 px-lg-4 mt-4">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb small mb-0">
          <li class="breadcrumb-item"><a href="#">Knowledge Hub</a></li>
          <li class="breadcrumb-item"><a href="#"><?php the_title(); ?></a></li>
        </ol>
      </nav>
    </div>-->

    <!-- Main 3-col layout -->
    <div class="container px-3 px-lg-4 py-4">
      <div class="row g-4">
        <!-- Sidebar (desktop) -->
        <aside class="col-lg-3 d-none d-lg-block">
          <div class="sidebar sticky-top" style="margin-top:15px;">
            <div class="sidebar-inner" id="sidebarNav"></div>
          </div>
        </aside>

        <!-- Sidebar (mobile offcanvas) -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarOffcanvas">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title">Table of Contents</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
          </div>
          <div class="offcanvas-body">
            <div class="sidebar-inner" id="sidebarNavMobile"></div>
          </div>
        </div>

        <!-- Main content -->
        <main class="col-12 col-lg-7 col-xl-7">
          <article class="article" id="postContent">
            <?php the_content(); ?>
          </article>
        </main>
      <!-- TOC -->
        <aside class="col-12 col-xl-2 d-none d-xl-block">
          <div class="sidebar sticky-top">
            <div class="support-card mt-4">
              <div class="fw-semibold mb-1" style="margin-bottom:20px !important;">Explore Other Articles</div>
              <?php
                $args = array(
                    'post_type'      => 'knowledge_base',
                    'post_status'    => 'publish',
                    'posts_per_page' => -1,
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                );
                
                $guide_query = new WP_Query($args);
                
                if ($guide_query->have_posts()) :
                    while ($guide_query->have_posts()) :
                        $guide_query->the_post();
                        ?>
                
                        <article class="guide-item">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php endif; ?>
                
                                <h4><?php the_title(); ?></h4>
                
                                <p><?php //echo wp_trim_words(get_the_excerpt(), 10); ?></p>
                
                                <span><?php //echo get_the_date(); ?></span>
                            </a>
                        </article>
                
                        <?php
                    endwhile;
                
                    wp_reset_postdata();
                else :
                    echo '<p>No guides found.</p>';
                endif;
                ?>
            </div>
          </div>
        </aside>
      </div>

      <!-- Mobile TOC below -->
      <div class="d-xl-none mt-4">
        <div class="toc">
          <div class="toc-title">Explore Other Articles</div>
          <nav id="tocNavMobile" class="toc-nav"></nav>
        </div>
      </div>
    </div>

    <style>
    :root {
      --brand: #1f46e5;
      --brand-dark: #1a3ad0;
      --ink: #0f172a;
      --muted: #64748b;
      --line: #e5e7eb;
      --accent: #ffd166;
      --radius: 10px;
      --shadow-sm: 0 1px 2px rgba(15, 23, 42, 0.06);
      --shadow-md: 0 6px 20px rgba(15, 23, 42, 0.08);
    }

    * { -webkit-font-smoothing: antialiased; }
    html { scroll-behavior: smooth; scroll-padding-top: 90px; }
    body {
      font-family: "Inter", system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
      color: var(--ink);
      background: #fbfbfd;
      font-size: 15px;
      line-height: 1.6;
    }
    a { color: var(--brand); text-decoration: none; }
    a:hover { text-decoration: underline; }

    .navbar { box-shadow: var(--shadow-sm); }

    .hero {
      background: #0057B8;
      padding: 72px 16px 88px;
    }
    .hero-title {
      font-size: clamp(28px, 4vw, 40px);
      font-weight: 700; letter-spacing: -0.02em; margin-bottom: 10px;
    }
    .text-accent { color: #ffd166; }
    .hero-sub { max-width: 620px; margin: 0 auto 26px; opacity: 0.9; font-size: 15px; }

    /* Sidebar */
    .sidebar { top: 80px; max-height: calc(100vh - 90px); overflow-y: auto; padding-right: 8px; }

    .sidebar-inner .nav-block {
      padding-bottom: 14px !important;
      margin-bottom: 14px !important;
      border-bottom: 1px solid var(--line) !important;
    }
    .sidebar-inner .nav-block:last-child {
      border-bottom: none !important;
      margin-bottom: 0 !important;
      padding-bottom: 0 !important;
    }

    .sidebar-inner .nav-section {
      font-size: 13px !important; font-weight: 700 !important;
      color: var(--brand) !important;
      display: flex !important; align-items: center !important; gap: 8px !important;
      width: 100% !important;
      cursor: pointer; user-select: none;
    }
    .sidebar-inner .nav-section.active .sec-label { color: var(--brand-dark) !important; }
    .sidebar-inner .nav-section .sec-label-link {
      color: inherit !important; flex: 1 1 auto !important;
      display: inline-block !important; min-width: 0;
      font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: #1f46e5;
        display: flex;
        align-items: center;
        gap: 8px;
        cursor: pointer;
        user-select: none;
    }
    .sidebar-inner .nav-section .sec-label-link:hover { text-decoration: none; }
    .sidebar-inner .nav-section .sec-label {
      text-transform: uppercase !important; letter-spacing: 0.08em !important;
    }
    .sidebar-inner .nav-section .sec-caret {
      color: #94a3b8; font-size: 12px; transition: transform 0.2s;
      flex: 0 0 auto !important;
    }
    .sidebar-inner .nav-section.collapsed .sec-caret { transform: rotate(-90deg); }

    /* H3 sub-items: real <ul><li> list so a global `a{display:inline}`
       rule from the theme can never collapse them onto one row. */
    .sidebar-inner ul.nav-group {
      display: block !important;
      list-style: none !important;
      margin: 0 !important;
      padding: 0 !important;
      width: 100% !important;
    }
    .sidebar-inner ul.nav-group.collapsed { display: none !important; }
    .sidebar-inner ul.nav-group > li {
        color: #475569;
        padding: 6px 10px 6px 24px;
        border-radius: 6px;
        font-size: 13.5px !important;
        display: block;
        position: relative;
    }
    .sidebar-inner ul.nav-group > li:last-child { margin-bottom: 0 !important; }

    .sidebar-inner li.nav-link {
      color: #475569 !important;
      font-weight: 400 !important;
      font-size: 14.5px !important;
      line-height: 1.4 !important;
      padding: 0 10px 0 24px !important;
      position: relative; box-sizing: border-box; 
    }
    .sidebar-inner li.nav-link a{
        color: #475569 !important;
    }
    .sidebar-inner li.nav-link::before {
      content: ""; position: absolute; left: 10px; top: 8px;
      width: 5px; height: 5px; border-radius: 50%;
      background: #cbd5e1 !important;
    }

    /* Article */
    .article-title {
      font-size: clamp(24px, 3vw, 32px);
      font-weight: 700; letter-spacing: -0.02em; margin-bottom: 12px;
    }
    .article h2 {
      font-size: 22px; font-weight: 700;
      margin-top: 15px; margin-bottom: 12px; scroll-margin-top: 90px;
    }
    .article h3 {
      font-size: 17px; font-weight: 700;
      margin-top: 24px; margin-bottom: 8px; scroll-margin-top: 90px;
    }
    .article p { color: #334155; }
    .lead-p { font-size: 15.5px; color: #334155; margin-bottom: 20px; }

    .sidebar::-webkit-scrollbar { width: 0px; }
    .sidebar::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 3px; }

    @media (min-width: 992px) {
      .sidebar.sticky-top { position: sticky; }
    }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // Build slug ids for headings that don't have one
    function slugify(text, i) {
      return text.trim().toLowerCase().replace(/[^\w\s-]/g, '').replace(/\s+/g, '-') + '-' + i;
    }

    // Scan the actual post content for H2/H3 and build a nav tree.
    // H2 -> collapsible section. H3 -> sub-item nested under the last H2.
    // Normalize a heading's content into separate lines. Converts any <br>
    // tags to newline markers, strips remaining HTML, then splits on ANY
    // newline character — this catches both <br>-separated content and
    // content where line breaks are just literal \n characters sitting
    // inside a single text node (no <br> tag at all).
    function getHeadingLines(heading) {
      const html = heading.innerHTML.replace(/<br\s*\/?>/gi, '\n');
      const temp = document.createElement('div');
      temp.innerHTML = html;
      const text = temp.textContent || '';
      return text
        .split(/\r?\n/)
        .map((t) => t.replace(/[ \t]+/g, ' ').trim())
        .filter((t) => t.length > 0);
    }

    function buildNavFromContent() {
      const article = document.getElementById('postContent');
      if (!article) return [];

      const headings = article.querySelectorAll('h2, h3');
      const nav = [];
      let current = null;

      headings.forEach((heading, i) => {
        if (!heading.id) heading.id = slugify(heading.textContent, i);

        const links = heading.querySelectorAll('a');
        const lines = getHeadingLines(heading);

        // Some content is authored as ONE heading containing several inline
        // <a> tags, or several lines separated by <br>, instead of separate
        // heading blocks. Detect either case and split into multiple rows.
        let subItems;
        if (links.length > 1) {
          subItems = Array.from(links).map((a, j) => {
            const id = a.id || slugify(a.textContent, `${i}-${j}`);
            a.id = id;
            return { label: a.textContent.trim(), id };
          }).filter((it) => it.label.length > 0);
        } else if (lines.length > 1) {
          // All lines physically share the same on-page location (the
          // heading itself), so they all point at the same anchor id.
          subItems = lines.map((label) => ({ label, id: heading.id }));
        } else {
          subItems = [{ label: heading.textContent.trim(), id: heading.id }];
        }

        if (heading.tagName === 'H2') {
          const sectionTitle = lines.length ? lines[0] : heading.textContent.trim();
          current = { section: sectionTitle, id: heading.id, items: [] };
          nav.push(current);
        } else if (heading.tagName === 'H3') {
          if (!current) {
            current = { section: '', id: null, items: [] };
            nav.push(current);
          }
          current.items.push(...subItems);
        }
      });

      return nav;
    }

    function renderSidebar(el, nav) {
      if (!el) return;

              el.innerHTML = nav.map((s, i) => {
                const items = s.items
          .map((it) => `
              <li class="nav-link" data-target="${it.id}">
                  <a href="#${it.id}" class="sub-link">${it.label}</a>
              </li>
          `)
          .join('');
        const hasItems = s.items.length > 0;
        const caret = hasItems
          ? `<i class="bi bi-chevron-down sec-caret"></i>`
          : '';
        const sectionHref = s.id ? `#${s.id}` : '#';

        return `<div class="nav-block">
                  <div class="nav-section" data-group="${i}" data-target="${s.id || ''}">
                    <a href="${sectionHref}" class="sec-label-link"><span class="sec-label">${s.section}</span></a>
                    ${caret}
                  </div>${hasItems ? `<ul class="nav-group" data-group="${i}">${items}</ul>` : ''}
                </div>`;
      }).join('');

      // Toggle collapse when clicking the row, but let the label link navigate normally
      el.querySelectorAll('.nav-section').forEach((h) => {
        h.addEventListener('click', (e) => {
          if (e.target.closest('.sec-label-link')) return;
          const g = h.parentElement.querySelector(`ul.nav-group[data-group="${h.dataset.group}"]`);
          h.classList.toggle('collapsed');
          if (g) g.classList.toggle('collapsed');
        });
      });

      // Close the mobile offcanvas after tapping a link
      if (el.id === 'sidebarNavMobile') {
        el.querySelectorAll('a, .sub-link').forEach((a) => {
          a.addEventListener('click', () => {
            const offcanvasEl = document.getElementById('sidebarOffcanvas');
            if (offcanvasEl) {
              const oc = bootstrap.Offcanvas.getInstance(offcanvasEl) || new bootstrap.Offcanvas(offcanvasEl);
              oc.hide();
            }
          });
        });
      }
    }

    function initScrollSpy(nav) {
      const targets = [];
      nav.forEach((s) => {
        if (s.id) targets.push(s.id);
        s.items.forEach((it) => targets.push(it.id));
      });
      if (!targets.length) return;

      const onScroll = () => {
        const y = window.scrollY + 120;
        let current = targets[0];
        targets.forEach((id) => {
          const el = document.getElementById(id);
          if (el && el.offsetTop <= y) current = id;
        });
        document.querySelectorAll('.sidebar-inner li.nav-link, .sidebar-inner .nav-section').forEach((a) => {
          a.classList.toggle('active', a.dataset.target === current);
        });
      };
      window.addEventListener('scroll', onScroll, { passive: true });
      onScroll();
    }

    document.addEventListener('DOMContentLoaded', () => {
      const nav = buildNavFromContent();
      renderSidebar(document.getElementById('sidebarNav'), nav);
      renderSidebar(document.getElementById('sidebarNavMobile'), nav);
      initScrollSpy(nav);
    });
    </script>

<?php
get_footer("sms");