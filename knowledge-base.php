<?php
/*
Template Name:Knowledge Base
*/
get_header("sms");

/*
    Nav pill bar config
    ---------------------------------------------------------
    "All Guides" is the current page - it stays highlighted
    (active/white) and links back to this archive.

    Every other pill is a plain external link. Set 'url' to
    wherever that resource actually lives (another site, a
    docs portal, etc). They open in a new tab.

    Add / remove / reorder items in this array as needed -
    the template just loops over it, no taxonomy involved.
*/
$kb_nav_pills = array(
    array(
        'label'  => 'Guides',
        'icon'   => 'bi-grid',
        'url'    => get_post_type_archive_link( 'knowledge_base' ),
        'active' => true,
    ),
    array(
        'label' => 'Manuals',
        'icon'  => 'bi-rocket-takeoff',
        'url'   => '/manuals/',
    ),
    array(
        'label' => 'Pro Tips',
        'icon'  => 'bi-tag',
        'url'   => '/texting-for-pros/',
    ),
    array(
        'label' => 'Release Notes',
        'icon'  => 'bi-tag',
        'url'   => '/release-notes/',
    ),
);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
<div id="ms360">
<!-- Hero -->
<header class="hero text-center text-white">
    <div class="container">
        <h1 class="hero-title">
            Welcome to the 360 SMSAPP Knowledge Base
        </h1>
        <p class="hero-sub">Find step-by-step guides and manuals for every feature- from installation to eSignature.</p>
    </div>
</header>

<!-- Category filter pills -->
<div class="kb-cat-bar-wrap">
    <div class="container px-3 px-lg-4">
        <div class="kb-cat-bar">
            <?php foreach ( $kb_nav_pills as $pill ) : ?>
                <a
                    href="<?php echo esc_url( $pill['url'] ); ?>"
                    class="kb-cat-pill<?php echo ! empty( $pill['active'] ) ? ' active' : ''; ?>"
                    <?php echo empty( $pill['active'] ) ? 'target="_blank" rel="noopener"' : ''; ?>
                >
                    <i class="bi <?php echo esc_attr( $pill['icon'] ); ?>"></i>
                    <?php echo esc_html( $pill['label'] ); ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>

    <!-- Main 3-col layout -->
    <div class="container px-3 px-lg-4 py-4">
        <div class="row g-4">

            <!-- Main content -->
            <main class="col-12 col-lg-12 col-xl-12">
                <article class="article" id="postContent" style="padding-top: 30px;

    padding-bottom: 30px; color: black;">
                    <?php //the_content(); ?>

                    Everything you need to get up and running with 360 SMSAPP is right here. Whether you're setting
                    it up for the first time, building your first Word template, or figuring out how to connect
                    DocuSign, these guides walk you through every feature step by step, without assuming you already
                    know how it works.
                </article>
                    <div class="row g-4 kb-grid">
                        <?php if (have_rows('knowledge_base')): ?>
                    
                            <?php while (have_rows('knowledge_base')): the_row();
                    
                                $title       = get_sub_field('title');
                                $description = get_sub_field('description');
                                $link        = get_sub_field('link');
                    
                            ?>
                            <div class="col-lg-4 col-md-6 d-flex">
                                <article class="kb-card w-100">
                                    <span class="kb-badge">User Guide</span>
                    
                                    <?php if ($title): ?>
                                        <h3 class="kb-title"><?php echo esc_html($title); ?></h3>
                                    <?php endif; ?>
                    
                                    <?php if ($description): ?>
                                        <p class="kb-desc"><?php echo esc_html(wp_trim_words($description, 24, '…')); ?></p>
                                    <?php endif; ?>
                    
                                    <?php if ($link): ?>
                                        <a href="<?php echo esc_url($link); ?>" class="kb-link">
                                            Read More
                                            <svg class="kb-arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                                <path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2.5"
                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </a>
                                    <?php endif; ?>
                                </article>
                            </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
            </main>
            <?php /*

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

            <div class="col-lg-4 col-md-6 kb-card-col">
                <div class="kb-card">
                    <div class="kb-body">
                        <div class="kb-card-header-meta">
                            <span class="kb-badge"><i class="bi bi-file-earmark-text"></i> Guide</span>
                            
                        </div>
                        <h3 class="kb-title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <p class="kb-excerpt">
                            <?php echo wp_trim_words(get_the_excerpt(), 22); ?>
                        </p>
                        <div class="kb-footer">
                            <a href="<?php the_permalink(); ?>" class="kb-link">
                                Read Article
                                <i class="bi bi-arrow-right kb-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <?php

endwhile;

wp_reset_postdata();
 
endif; */

?>
        </div>
    </div>
</div>
<style>
.kb-grid .kb-card {
    display: flex;
    flex-direction: column;
    padding: 28px 26px 26px;
    background: #fff;
    border: 1px solid #eceef2;
    border-radius: 16px;
    box-shadow: 0 1px 2px rgba(16, 24, 40, .04);
    transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
}

.kb-grid .kb-card:hover {
    transform: translateY(-4px);
    border-color: #b9cee2;
    box-shadow: 0 12px 28px rgba(16, 24, 40, .10);
}

.kb-grid .kb-badge {
    align-self: flex-start;
    margin-bottom: 18px;
    padding: 5px 12px;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .06em;
    text-transform: uppercase;
    color: #fff;
    background: #ef8b23;
    border-radius: 999px;
}

.kb-grid .kb-title {
    margin: 0 0 12px;
    font-size: 21px;
    font-weight: 700;
    line-height: 1.35;
    color: #14181f;
    min-height: 57px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.kb-grid .kb-desc {
    margin: 0 0 24px;
    font-size: 15px;
    line-height: 1.6;
    color: #5b6472;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.kb-grid .kb-link {
    margin-top: auto;
    align-self: flex-start;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 11px 22px;
    font-size: 14px;
    font-weight: 700;
    color: #fff;
    background: #19568C;
    border-radius: 8px;
    text-decoration: none;
    transition: background .2s ease, gap .2s ease;
}

.kb-grid .kb-link:hover,
.kb-grid .kb-link:focus {
    color: #fff;
    background: #114069;
    gap: 12px;
}

.kb-grid .kb-link:focus-visible {
    outline: 2px solid #19568C;
    outline-offset: 2px;
}

@media (max-width: 991.98px) {
    .kb-grid .kb-title { min-height: 0; }
}
    .kb-card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 16px;
        overflow: hidden;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        height: 100%;
        display: flex;
        flex-direction: column;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
        position: relative;
    }

    .kb-card:hover {
        transform: translateY(-6px);
        border-color: #cbd5e1;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.08), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    .kb-body {
        padding: 28px 28px 30px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .kb-card-header-meta {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .kb-badge {
        background: #eff6ff;
        color: #1e40af !important;
        font-size: 11px;
        font-weight: 700;
        padding: 6px 12px;
        border-radius: 9999px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    .kb-read-time {
        color: #64748b !important;
        font-size: 12.5px;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: 5px;
    }

    .kb-title {
        font-size: 20px !important;
        line-height: 1.45;
        margin-bottom: 12px;
        font-weight: 700 !important;
    }

    .kb-title a {
        color: #0f172a !important;
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .kb-title a:hover {
        color: #1f46e5 !important;
    }

    .kb-excerpt {
        color: #475569 !important;
        font-size: 14.5px;
        line-height: 1.6;
        margin-bottom: 24px;
        flex-grow: 1;
    }

    .kb-footer {
        margin-top: auto;
        padding-top: 20px;
        border-top: 1px solid #f1f5f9;
        width: 100%;
    }

    .kb-link {
        background: #356DB2 ;
        color: #ffffff !important;
        font-size: 14px;
        font-weight: 600;
        padding: 8px 24px;
        border-radius: 10px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        transition: all 0.2s ease;
        width: 100%;
        box-shadow: 0 2px 4px rgba(31, 70, 229, 0.1);
    }

    .kb-link:hover {
        background: #1a3ad0;
        box-shadow: 0 4px 12px rgba(31, 70, 229, 0.25);
        color: #ffffff !important;
        text-decoration: none;
    }

    .kb-link:hover .kb-arrow {
        transform: translateX(4px);
    }

    .kb-arrow {
        transition: transform 0.2s ease;
        font-size: 16px;
        display: inline-block;
    }

    @media(max-width:991px) {
        .kb-title {
            font-size: 18px !important;
        }
    }

    /* Category filter pills */

    .kb-cat-bar-wrap {
        background: #19568C;
        padding-bottom: 22px;
        border-bottom: 1px solid rgba(255,255,255,0.08);
    }

    @media (max-width: 767px) {

        .hero {
            padding: 48px 16px 28px !important;
        }

        .kb-cat-bar-wrap {
            padding-bottom: 18px;
        }

    }

    .kb-cat-bar-wrap .kb-cat-bar {
        display: flex !important;
        flex-wrap: wrap !important;
        overflow-x: visible !important;
        gap: 10px;
        padding-bottom: 4px;
    }

    @media (max-width: 767px) {

        .kb-cat-bar-wrap .kb-cat-bar {
            justify-content: center !important;
        }

        .kb-cat-bar-wrap .kb-cat-pill {
            font-size: 12.5px !important;
            padding: 8px 14px !important;
        }

        .kb-cat-bar-wrap .kb-cat-pill i {
            font-size: 13px !important;
        }

    }

    .kb-cat-pill {
        flex: 0 0 auto;
        display: inline-flex;
        align-items: center;
        gap: 7px;
        background: rgba(255,255,255,0.08);
        border: 1px solid rgba(255,255,255,0.25);
        color: #ffffff !important;
        font-size: 13.5px;
        font-weight: 600;
        padding: 9px 18px;
        border-radius: 9999px;
        cursor: pointer;
        white-space: nowrap;
        text-decoration: none !important;
        transition: all 0.2s ease;
    }

    .kb-cat-pill i {
        font-size: 15px;
    }

    .kb-cat-pill:hover {
        background: rgba(255,255,255,0.16);
        border-color: rgba(255,255,255,0.4);
    }

    .kb-cat-pill.active {
        background: #ffffff;
        color: #19568C !important;
        border-color: #ffffff;
    }

    .kb-empty-state {
        text-align: center;
        color: #64748b;
        font-size: 15px;
        padding: 40px 0;
    }

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

    * {
        -webkit-font-smoothing: antialiased;
    }

    html {
        scroll-behavior: smooth;
        scroll-padding-top: 90px;
    }

    body {

        font-family: "Inter", system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;

        color: var(--ink);

        background: #fbfbfd;

        font-size: 15px;

        line-height: 1.6;

    }

    a {
        color: var(--brand);
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    .navbar {
        box-shadow: var(--shadow-sm);
    }

    .hero {

        background:#19568C ;

        padding: 72px 16px 40px;


    }

    .hero-title {

        font-size: clamp(28px, 4vw, 40px);

        font-weight: 700;
        letter-spacing: -0.02em;
        margin-bottom: 10px;

    }

    .text-accent {
        color: #ffd166;
    }

    .hero-sub {
        max-width: 620px;
        margin: 0 auto 26px;
        opacity: 0.9;
        font-size: 15px;
    }

    /* Sidebar */

    .sidebar {
        top: 80px;
        max-height: calc(100vh - 90px);
        overflow-y: auto;
        padding-right: 8px;
    }

    .sidebar-inner .nav-section {

        font-size: 13px !important;
        font-weight: 700 !important;

        color: var(--brand) !important;

        padding: 14px 10px 8px !important;

        display: flex !important;
        align-items: center !important;
        gap: 8px !important;

        width: 100% !important;

        cursor: pointer;
        user-select: none;

    }

    .sidebar-inner .nav-section.active .sec-label {
        color: var(--brand-dark) !important;
    }

    .sidebar-inner .nav-section .sec-label-link {

        color: inherit !important;
        flex: 1 1 auto !important;

        display: inline-block !important;
        min-width: 0;

    }

    .sidebar-inner .nav-section .sec-label-link:hover {
        text-decoration: none;
    }

    .sidebar-inner .nav-section .sec-label {

        text-transform: uppercase !important;
        letter-spacing: 0.08em !important;

    }

    .sidebar-inner .nav-section .sec-caret {

        color: #94a3b8;
        font-size: 12px;
        transition: transform 0.2s;

        flex: 0 0 auto !important;

    }

    .sidebar-inner .nav-section.collapsed .sec-caret {
        transform: rotate(-90deg);
    }

    .sidebar-inner ul.nav-group {

        display: block !important;

        list-style: none !important;

        margin: 0 !important;

        padding: 0 !important;

        width: 100% !important;

    }

    .sidebar-inner ul.nav-group.collapsed {
        display: none !important;
    }

    .sidebar-inner ul.nav-group>li {

        display: block !important;

        width: 100% !important;

        margin: 0 !important;

        padding: 0 !important;

        list-style: none !important;

    }

    .sidebar-inner li.nav-link {

        color: #475569 !important;

        padding: 6px 10px 6px 24px !important;

        border-radius: 6px;
        font-size: 13.5px !important;

        display: block !important;
        width: 100% !important;

        position: relative;
        box-sizing: border-box;

    }

    .sidebar-inner li.nav-link::before {

        content: "";
        position: absolute;
        left: 10px;
        top: 50%;

        width: 5px;
        height: 5px;
        border-radius: 50%;

        background: #cbd5e1;
        transform: translateY(-50%);

    }

    .sidebar-inner li.nav-link.active {
        color: var(--brand) !important;
        font-weight: 600;
    }

    .sidebar-inner li.nav-link.active::before {
        background: var(--brand);
    }

    /* Article */

    .article-title {

        font-size: clamp(24px, 3vw, 32px);

        font-weight: 700;
        letter-spacing: -0.02em;
        margin-bottom: 12px;

    }

    .article h2 {

        font-size: 22px;
        font-weight: 700;

        margin-top: 36px;
        margin-bottom: 12px;
        scroll-margin-top: 90px;

    }

    .article h3 {

        font-size: 17px;
        font-weight: 700;

        margin-top: 24px;
        margin-bottom: 8px;
        scroll-margin-top: 90px;

    }

    .article p {
        color: #334155;
    }

    .lead-p {
        font-size: 15.5px;
        color: #334155;
        margin-bottom: 20px;
    }

    .sidebar::-webkit-scrollbar {
        width: 0px;
    }

    .sidebar::-webkit-scrollbar-thumb {
        background: #cbd5e1;
        border-radius: 3px;
    }

    @media (min-width: 992px) {

        .sidebar.sticky-top {
            position: sticky;
        }

    }

    .kb-card, .kb-card * {
        font-family: "Plus Jakarta Sans", sans-serif !important;
        box-sizing: border-box;
    }

    .footer_phone a,
    .footer_email a {

        color: #fff;

    }


</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>

    function slugify(text, i) {

        return text.trim().toLowerCase().replace(/[^\w\s-]/g, '').replace(/\s+/g, '-') + '-' + i;

    }

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

            let subItems;

            if (links.length > 1) {

                subItems = Array.from(links).map((a, j) => {

                    const id = a.id || slugify(a.textContent, `${i}-${j}`);

                    a.id = id;

                    return { label: a.textContent.trim(), id };

                }).filter((it) => it.label.length > 0);

            } else if (lines.length > 1) {

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

                .map((it) => `<li class="nav-link" data-target="${it.id}">${it.label}</li>`)

                .join('');

            const hasItems = s.items.length > 0;

            const caret = hasItems

                ? `<i class="bi bi-chevron-down sec-caret"></i>`

                : '';

            const sectionHref = s.id ? `#${s.id}` : '#';

            return `<div class="nav-section" data-group="${i}" data-target="${s.id || ''}">
<a href="${sectionHref}" class="sec-label-link"><span class="sec-label">${s.section}</span></a>

                    ${caret}
</div>${hasItems ? `<ul class="nav-group" data-group="${i}">${items}</ul>` : ''}`;

        }).join('');

        el.querySelectorAll('.nav-section').forEach((h) => {

            h.addEventListener('click', (e) => {

                if (e.target.closest('.sec-label-link')) return;

                const g = h.parentElement.querySelector(`ul.nav-group[data-group="${h.dataset.group}"]`);

                h.classList.toggle('collapsed');

                if (g) g.classList.toggle('collapsed');

            });

        });

        if (el.id === 'sidebarNavMobile') {

            el.querySelectorAll('a').forEach((a) => {

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