<?php
/**
 * Template Name: Thank You Page
 * Description: Minimal thank-you page — icon, heading, subheading on a soft gradient background.
 *
 * @package SMS360
 */
if (!defined('ABSPATH')) {
    exit;
}
get_header("paid");

// Read email/phone from the URL query string (e.g. ?ec_email=...&ec_phone=...)
$ty_email = isset( $_GET['ec_email'] ) ? sanitize_email( wp_unslash( $_GET['ec_email'] ) ) : '';
$ty_phone = isset( $_GET['ec_phone'] ) ? sanitize_text_field( wp_unslash( $_GET['ec_phone'] ) ) : '';

if ( $ty_email && $ty_phone ) {
    $ty_message = sprintf(
        'Our team will reach out to you on %s and get in touch with you shortly on %s.',
        esc_html( $ty_email ),
        esc_html( $ty_phone )
    );
} elseif ( $ty_email ) {
    $ty_message = sprintf(
        'Our team will reach out to you on %s shortly.',
        esc_html( $ty_email )
    );
} elseif ( $ty_phone ) {
    $ty_message = sprintf(
        'Our team will get in touch with you shortly on %s.',
        esc_html( $ty_phone )
    );
} else {
    // Fallback if no query params are present
    $ty_message = 'Thank you for submitting your details. Our team will review your request and get in touch with you shortly.';
}
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
#head,
#nav-main,
#footer,
.site-footer,
footer.footer {
    display: none !important;
}
.sms-thankyou {
    --ty-navy: #0f1f3d;
    --ty-muted: #6b7a90;
    --ty-green: #2eb67d;
    --ty-green-soft: #cfe9e5;
    --ty-green-border: #a8dad3;
    font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
    min-height: 80vh;
    min-height: 80dvh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 48px 24px;
    background: linear-gradient(
        135deg,
        #eef4fb 0%,
        #f7fafd 35%,
        #ffffff 55%,
        #f7fafd 75%,
        #eef4fb 100%
    );
    box-sizing: border-box;
}
.sms-thankyou__inner {
    width: 100%;
    max-width: 1000px;
    text-align: center;
}
.sms-thankyou__icon {
    width: 80px;
    height: 80px;
    margin: 0 auto 28px;
    border-radius: 50%;
    background: var(--ty-green-soft);
    border: 2px solid var(--ty-green-border);
    display: flex;
    align-items: center;
    justify-content: center;
    box-sizing: border-box;
}
.sms-thankyou__icon svg {
    width: 34px;
    height: 34px;
    display: block;
}
.sms-thankyou h1 {
    margin: 0 0 16px;
    font-size: clamp(4rem, 4vw, 4.3rem);
    font-weight: 800;
    line-height: 1.15;
    letter-spacing: -0.02em;
    color: var(--ty-navy);
}
.sms-thankyou p {
    margin: 0 auto;
    max-width: 560px;
    font-size: clamp(1.8rem, 2vw, 2rem);
    line-height: 1.65;
    color: var(--ty-muted);
}
.sms-thankyou__cta {
    margin-top: 28px;
}
.sms-thankyou__btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 8px 20px;
    background: #d97154; /* coral/orange */
    color: #ffffff;
    text-decoration: none;
    font-weight: 800;
    border-radius: 8px;
    box-shadow: 0 8px 22px rgba(217, 113, 84, 0.22);
    transition: transform 0.15s ease, box-shadow 0.15s ease, background 0.15s ease;
}
.sms-thankyou__btn:hover {
    transform: translateY(-1px);
    box-shadow: 0 12px 28px rgba(217, 113, 84, 0.28);
    background: #c46248;
    color: #ffffff;
}
.sms-thankyou__btn:focus-visible {
    outline: 3px solid rgba(14, 117, 188, 0.35);
    outline-offset: 3px;
}
</style>
<main class="sms-thankyou" role="main">
    <div class="sms-thankyou__inner">
        <div class="sms-thankyou__icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path
                    d="M6.5 12.5L10.5 16.5L17.5 8.5"
                    stroke="#2eb67d"
                    stroke-width="2.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
            </svg>
        </div>
        <h1>Thank You for Showing Your Interest</h1>
        <p><?php echo $ty_message; ?></p>
        <div class="sms-thankyou__cta">
            <a class="sms-thankyou__btn" href="<?php echo esc_url(home_url('/')); ?>">
                Visit Website
            </a>
        </div>
    </div>
</main>
<?php //get_footer(); ?>