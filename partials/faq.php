<?php
$page_id = get_queried_object_id();

if ( have_rows('dynamic_faq_list', $page_id) ) :
?>

<style>
@import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap');

.faq-section *{
    font-family: 'Plus Jakarta Sans', "Poppins", sans-serif;
}

.faq-section {
    padding: 80px 0;
    background-color: #fafbfd;
}

.faq-section h2 {
    font-weight: 800;
    color: #111827;
    letter-spacing: -0.5px;
}

.faq-subtitle {
    color: #6b7280;
    font-size: 16px;
    max-width: 580px;
    margin: auto;
}

.faq-accordion {
    background: #fff;
    border: 1px solid #e5e7eb;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
    overflow: hidden;
}

.faq-accordion .accordion-item {
    background-color: #fff;
    border: none;
    border-bottom: 1px solid #e5e7eb;
    margin-bottom: 0;
    border-radius: 0 !important;
}

.faq-accordion .accordion-item:last-child {
    border-bottom: none;
}

.faq-accordion .accordion-button {
    background: #fff;
    color: #111827;
    font-size: 16px;
    font-weight: 700;
    padding: 24px 30px;
    box-shadow: none !important;
    border: none;
    border-radius: 0 !important;
    transition: all 0.2s ease;
}

.faq-accordion .accordion-button:hover {
    color: #0A86C6;
}

.faq-accordion .accordion-button:focus {
    box-shadow: none !important;
    background: #fff;
}

.faq-accordion .accordion-button::after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23718096' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round'%3E%3Cline x1='12' y1='5' x2='12' y2='19'/%3E%3Cline x1='5' y1='12' x2='19' y2='12'/%3E%3C/svg%3E");
    background-size: 16px;
    width: 16px;
    height: 16px;
    transform: none !important;
}

.faq-accordion .accordion-button:not(.collapsed)::after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23718096' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round'%3E%3Cline x1='5' y1='12' x2='19' y2='12'/%3E%3C/svg%3E");
}

.faq-accordion .accordion-button:not(.collapsed) {
    background-color: #fff;
    color: #111827;
    padding-bottom: 12px;
}

.faq-accordion .accordion-body {
    font-size: 15px;
    color: #4b5563;
    line-height: 1.8;
    padding: 0 30px 24px;
    background-color: #fff;
}

@media(max-width:767px){

    .faq-section {
        padding: 50px 0;
    }

    .faq-section h2 {
        font-size: 30px !important;
    }

    .faq-accordion .accordion-button {
        padding: 18px 20px;
        font-size: 15px;
    }

    .faq-accordion .accordion-body {
        padding: 0 20px 20px;
    }
}
</style>

<section class="faq-section pt-0" itemscope itemtype="https://schema.org/FAQPage">

    <div class="container col-lg-12">

        <div class="text-center mb-5">
            <h2 style="font-size:40px;">
                FAQs
            </h2>

            <?php if ( get_field('dynamic_faq_subtitle', $page_id) ) : ?>
                <p class="faq-subtitle">
                    <?php echo esc_html( get_field('dynamic_faq_subtitle', $page_id) ); ?>
                </p>
            <?php endif; ?>
        </div>

        <div class="accordion faq-accordion" id="faqAccordion">

            <?php
            $i = 0;

            while ( have_rows('dynamic_faq_list', $page_id) ) :
                the_row();

                $question    = get_sub_field('question');
                $answer      = get_sub_field('answer');
                $collapse_id = 'faqItem' . $i;
                $heading_id  = 'heading' . $i;
            ?>

            <div class="accordion-item"
                 itemscope
                 itemprop="mainEntity"
                 itemtype="https://schema.org/Question">

                <h3 class="accordion-header" id="<?php echo esc_attr($heading_id); ?>">

                    <button class="accordion-button <?php echo ($i !== 0) ? 'collapsed' : ''; ?>"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#<?php echo esc_attr($collapse_id); ?>"
                            aria-expanded="<?php echo ($i === 0) ? 'true' : 'false'; ?>"
                            aria-controls="<?php echo esc_attr($collapse_id); ?>"
                            itemprop="name">

                        <?php echo esc_html($question); ?>

                    </button>

                </h3>

                <div id="<?php echo esc_attr($collapse_id); ?>"
                     class="accordion-collapse collapse <?php echo ($i === 0) ? 'show' : ''; ?>"
                     aria-labelledby="<?php echo esc_attr($heading_id); ?>"
                     data-bs-parent="#faqAccordion"
                     itemscope
                     itemprop="acceptedAnswer"
                     itemtype="https://schema.org/Answer">

                    <div class="accordion-body" itemprop="text">
                        <?php echo wp_kses_post($answer); ?>
                    </div>

                </div>

            </div>

            <?php
            $i++;
            endwhile;
            ?>

        </div>

    </div>

</section>

<?php endif; ?>