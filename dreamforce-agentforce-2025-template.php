<?php

/**
 * Template Name: Single Event Page
 */

if (! defined('ABSPATH')) {
  exit;
}

get_header();
$form_shortcode = get_post_meta($post_id, 'form_shortcode', true) ?: '[dreamforce23]';
?>

<div class="single-event-hero-wrapper">
  <style>
  
  p{
      font-size:18px !important;
  }
    /* Sydney Tour 2025 form CSS */
    
    .confirmbtn {
    background: linear-gradient(180deg, #ec6b5e, #d35447);
    border: none;
    border-radius: 30px !important;
    color: #fff;
    font-weight: 600;
    font-size: 15px;
    padding: 10px;
    width: 60% !important;
    margin-top:11px;
    cursor: pointer;
    transition: background 0.3s ease;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

}

    .formcontainer {
      max-width: 430px !important;
      background: #fff;
      border-radius: 10px;
      padding: 25px 30px;
      /*box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);*/
      text-align: left;
    }

    .formheader {
      font-size: 20px;
      font-weight: 500;
      color: #000;
      line-height: 1.4;
      margin-bottom: 25px;
    }

    .formheader span {
      color: #0084ff;
      font-weight: 700;
    }

    .formheader b {
      font-weight: 700;
    }

    .formcontainer form {
    padding:0px important;
      border: none;
      padding: 0;
      border:1px solid #f1f5ff !important;
    }

    .formcontainer form div {
      margin-bottom: 20px;
      display: flex;
      flex-direction: column;
    }

    .formcontainer form div label {
      font-size: 14px;
      font-weight: 600;
      color: #333;
      margin-bottom: 6px;
    }

    .formcontainer form div input {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 14px;
      box-sizing: border-box;
      margin: 0;
      background-color: white;
      height: 40px;
    }

    .formcontainer form div input:focus {
      outline: none;
      border-color: #0084ff;
      box-shadow: 0 0 0 2px rgba(0, 132, 255, 0.15);
    }


    .confirmbtn:hover {
      background: linear-gradient(180deg, #d35447, #c24638);
    }

    .msg2 {
      font-size: 18px;
      color: #4cc74c;
      line-height: 1.4;
      text-align: center;
      margin-bottom: 20px;
    }

    .formcontainer .formheader {
      display: none;
    }

    /* ═══════════════════════════════════════════
     GLOBAL RESET
  ═══════════════════════════════════════════ */
    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }

    /* ═══════════════════════════════════════════
     SECTION 1 — HERO
  ═══════════════════════════════════════════ */
    .single-event-hero-wrapper {
      
      background-color: #ffffff;
      position: relative;
    }

    .agentforce-hero {
      position: relative;
      background: url("https://360smsapp.com/wp-content/uploads/2026/03/Group-1000014565-1.png") center center / cover no-repeat;
      padding: 90px 0 180px 0;
      color: #ffffff;
      overflow: visible;
    }

    .agentforce-hero-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 15px;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      position: relative;
      z-index: 2;
    }

    .agentforce-hero-left {
      flex: 1;
      min-width: 320px;
      padding-right: 50px;
    }

    .agentforce-logo-row {
      display: flex;
      align-items: center;
      gap: 15px;
      font-size: 24px;
      font-weight: 500;
      margin-bottom: 0px;
    }

    .agentforce-logo {
      display: flex;
      align-items: flex-end;
      gap: 10px;
    }
    
    .agentforce-logo img{
    
    }

    .agentforce-logo-cloud {
      width: 50px;
      height: auto;
      fill: #ffffff;
    }

    .agentforce-logo-text strong {
      font-weight: 700;
      font-size: 28px;
      display: block;
    }

    .agentforce-logo-text span {
      font-weight: 400;
      font-size: 16px;
      display: block;
      font-style: italic;
    }

    .agentforce-hero-left h1 {
      font-size: clamp(40px, 4vw, 50px);
      font-weight: 700;
      line-height: 1.3;
      margin-bottom: 25px;
      color: #ffffff;
      letter-spacing: -0.5px;
      text-transform:none;
      margin-top:30px;
    }

    .agentforce-subtitle {
      font-size: 28px !important;
      font-weight: 400;
      margin-bottom: 40px;
    }

    .agentforce-meta-badge {
      display: inline-flex;
      border: 1px solid rgba(255, 255, 255, 0.4);
      border-radius: 6px;
      background: transparent;
    }

    .agentforce-meta-item {
      padding: 12px 20px;
      display: inline-flex;
      align-items: center;
      gap: 10px;
      font-size: 14px;
      font-weight: 600;
    }

    .agentforce-meta-item:first-child {
      
    }

    .agentforce-meta-item svg {
      width: 14px;
      height: 14px;
      fill: #ffffff;
    }

    .agentforce-hero-right {
      flex: 0 0 430px;
      position: relative;
      z-index: 5;
    }

    /* ── Form Card ── */
    .agentforce-form-card {
      background-color: #ffffff;
      border-radius: 12px;
      padding: 30px 0px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      color: #1a3353;
      max-width: 430px;
      margin: 0 auto;
    }

    .agentforce-form-header {
      text-align: center;
      margin-bottom: 30px;
    }

    .agentforce-form-header h4 {
      font-size: 16px;
      font-weight: 500;
      color: #333;
      margin: 0 0 0px;
    }

    .agentforce-form-header h3 {
      font-size: 20px;
      font-weight: 700;
      color: #00a1df;
      margin: 0;
    }

    /* Style CF7 / GF / WPForms fields inside the card */
    .agentforce-form-card form {
      margin: 0;
      padding: 0;
    }

    .agentforce-form-card label {
      display: block;
      font-size: 15px;
      font-weight: 700;
      color: #032d60;
      margin-bottom: 8px;
      text-align: left;
    }

    .agentforce-form-card input[type="text"],
    .agentforce-form-card input[type="email"],
    .agentforce-form-card input[type="tel"],
    .agentforce-form-card input[type="number"],
    .agentforce-form-card input[type="url"],
    .agentforce-form-card textarea,
    .agentforce-form-card .form-control {
      width: 100%;
      padding: 12px 15px;
      border: 1px solid #d1d5db;
      border-radius: 4px;
      
      margin-left: 0px !important;
      font-size: 14px;
      font-family: inherit;
      color: #374151;
      background-color: #ffffff;
      transition: border-color 0.2s;
      box-shadow: none !important;
    }

    .agentforce-form-card input::placeholder {
      color: #9ca3af;
      font-weight: 400;
    }

    .agentforce-form-card input:focus {
      outline: none;
      border-color: #00a1df;
    }

    /* Submit button — Peach/Orange color */
    .agentforce-form-card input[type="submit"],
    .agentforce-form-card button[type="submit"],
    .agentforce-form-card .wpcf7-submit {
      background: #cd684f !important;
      background-color: #cd684f !important;
      color: #ffffff !important;
      border: none !important;
      padding: 14px 40px !important;
      border-radius: 50px !important;
      font-size: 16px !important;
      font-weight: 600 !important;
      cursor: pointer !important;
      transition: opacity 0.3s !important;
      display: inline-block !important;
      margin-top: 10px !important;
      width: auto !important;
      min-width: 200px;
    }

    .agentforce-form-card input[type="submit"]:hover,
    .agentforce-form-card button[type="submit"]:hover {
      opacity: 0.9;
    }

    /* CF7 validation messages */
    .agentforce-form-card .wpcf7-not-valid-tip {
      font-size: 12px;
      color: #e53e3e;
    }

    .agentforce-form-card .wpcf7-response-output {
      font-size: 13px;
      margin-top: 10px !important;
      border-radius: 4px !important;
      padding: 8px 14px !important;
    }

    /* ── Ratings card ── */
    .agentforce-ratings-wrapper {
      position: absolute;
      bottom: -45px;
      left: 50%;
      transform: translateX(-50%);
      z-index: 8;
      width: 100%;
      display: flex;
      justify-content: center;
    }

    .agentforce-ratings-card {
      background-color: #ffffff;
      border-radius: 20px;
      padding: 30px 70px;
      display: inline-flex;
      align-items: center;
      gap: 40px;
      box-shadow: 0 15px 45px rgba(0, 0, 0, 0.12);
    }

    .agentforce-score {
      font-size: 72px;
      font-weight: 800;
      color: #1f3b64;
      line-height: 1;
    }

    .agentforce-stars-container {
      display: flex;
      flex-direction: column;
      gap: 4px;
    }

    .agentforce-stars {
      display: flex;
      gap: 2px;
      color: #fbbc04;
    }

    .agentforce-stars svg {
      width: 30px;
      height: 30px;
      fill: currentColor;
    }

    .agentforce-ratings-text {
      font-size: 27px;
      color: #1a3353;
      font-weight: 400;
    }

    @media (max-width: 991px) {
    
    .confirmbtn{
    width: 100% !important;
    }
    
    .agentforce-logo img{
    width:200px;
    height:auto;
    }
      .agentforce-hero-right {
        flex: 1 1 100%;
        margin-top: 50px;
      }

      .agentforce-hero {
        padding-bottom: 220px;
      }
    }

    @media (max-width: 767px) {
    
    .agentforce-stars {
      margin:auto;
    }
    
      .agentforce-hero {
        padding-top: 60px;
      }

      .agentforce-meta-badge {
        flex-direction: column;
        border: none;
        gap: 10px;
      }

      .agentforce-meta-item:first-child {
        border-right: none;
      }

      .agentforce-meta-item {
        border: 1px solid rgba(255, 255, 255, 0.4);
        border-radius: 6px;
      }

      .agentforce-ratings-card {
        flex-direction: column;
        gap: 10px;
        padding: 20px;
        text-align: center;
      }
    }

    /* ═══════════════════════════════════════════
     SECTION 2 — CHANNEL + BADGE SLIDERS
  ═══════════════════════════════════════════ */
    .slider-section {
      padding: 64px 24px 32px;
      max-width: 1200px;
      margin: 0 auto;
      text-align: center;
     
    }

    .section-title {
      font-size: clamp(20px, 3.5vw, 35px);
      font-weight: 700;
      color: #111;
      margin-bottom: 6px;
line-height: 1.25;
text-transform:none;
    }

    .section-subtitle {
      font-size: clamp(0.85rem, 1.8vw, 1rem);
      color: #555;
      margin-bottom: 44px;
    }

    .channel-swiper-wrap {
      position: relative;
      padding-bottom: 42px;
    }

    .channel-swiper {
      width: 100%;
      overflow: hidden;
    }

    .channel-swiper .swiper-slide {
      width: auto !important;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .channel-pill {
      /*display: inline-flex;*/
      /*align-items: center;*/
      /*gap: 10px;*/
      /*border: 1.5px solid #c8cfe0;*/
      /*border-radius: 10px;*/
      /*padding: 13px 22px;*/
      /*font-size: clamp(0.78rem, 1.5vw, 0.92rem);*/
      /*font-weight: 500;*/
      /*color: #222;*/
      /*background: #fff;*/
      /*white-space: nowrap;*/
      /*cursor: default;*/
      /*transition: border-color 0.2s, box-shadow 0.2s;*/
      /*user-select: none;*/
     
    }

    .channel-pill:hover {
      border-color: #0070d2;
      box-shadow: 0 2px 12px rgba(0, 112, 210, 0.10);
    }

    .channel-pill img {
      width: 200px;
      height: auto;
      object-fit: contain;
      flex-shrink: 0;
    }

    .channel-swiper-wrap .swiper-pagination {
      bottom: 4px;
    }

    .channel-swiper-wrap .swiper-pagination-bullet {
      width: 9px;
      height: 9px;
      background: #c8cfe0;
      opacity: 1;
      border-radius: 50%;
      transition: background 0.25s, transform 0.25s;
    }

    .channel-swiper-wrap .swiper-pagination-bullet-active {
      background: #1c2847;
      transform: scale(1.2);
    }

    .badge-section-wrap {
      padding: 32px 24px 64px;
      max-width: 1100px;
      margin: 0 auto;
    }

    .badge-swiper-outer {
      position: relative;
      border: 1px solid #d1d5db;
      border-radius: 12px;
      background: #fff;
      padding: 30px 60px;
    }

    @media (max-width: 640px) {
      .badge-swiper-outer {
        padding: 28px 52px;
      }
    }

    .badge-swiper {
      width: 100%;
      overflow: hidden;
    }

    .badge-swiper .swiper-slide {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .badge-item {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 10px;
      transition: transform 0.3s ease;
    }

    .badge-item:hover {
      transform: scale(1.05);
    }

    .badge-card:hover {
      transform: translateY(-3px);
    }

    @media (max-width: 480px) {
      .badge-card {
        width: 120px;
        height: 120px;
      }
    }

    .bc-sf-partner {
      background: #003e78;
    }

    .bc-apac {
      background: #0b2759;
    }

    .bc-top-sf {
      background: #fff;
      border: 2px solid #2a3555;
      border-radius: 50% !important;
    }

    .bc-appex {
      background: #e5ecf5;
    }

    .bc-employer {
      background: #d5e8f7;
    }

    .bc-sf-partner .cloud {
      font-size: 1.6rem;
    }

    .bc-sf-partner .b-brand {
      font-size: 0.55rem;
      letter-spacing: 1px;
      color: rgba(255, 255, 255, 0.7);
      margin-top: 2px;
    }

    .bc-sf-partner .b-main {
      font-size: 0.9rem;
      font-weight: 800;
      color: #fff;
      letter-spacing: 0.5px;
    }

    .bc-sf-partner .b-year {
      font-size: 0.72rem;
      color: rgba(255, 255, 255, 0.85);
      font-weight: 600;
    }

    .bc-apac .cloud {
      font-size: 1.3rem;
    }

    .bc-apac .b-brand {
      font-size: 0.52rem;
      color: #44bbff;
      font-weight: 700;
      letter-spacing: 0.5px;
    }

    .bc-apac .b-region {
      font-size: 0.7rem;
      font-weight: 700;
      color: #fff;
      margin: 2px 0;
    }

    .bc-apac .b-sub {
      font-size: 0.58rem;
      color: rgba(255, 255, 255, 0.8);
      line-height: 1.35;
    }

    .bc-apac .b-winner {
      margin-top: 5px;
      background: #44bbff;
      color: #fff;
      font-size: 0.58rem;
      font-weight: 700;
      border-radius: 4px;
      padding: 2px 8px;
    }

    .bc-top-sf .b-top {
      font-size: 0.6rem;
      letter-spacing: 2px;
      font-weight: 700;
      color: #2a3555;
    }

    .bc-top-sf .b-main {
      font-size: 0.65rem;
      font-weight: 800;
      line-height: 1.3;
      color: #2a3555;
      margin: 3px 0;
    }

    .bc-top-sf .b-brand {
      font-size: 0.55rem;
      color: #666;
    }

    .bc-appex .b-avail {
      font-size: 0.65rem;
      color: #333;
      margin-bottom: 8px;
      line-height: 1.45;
    }

    .bc-appex .b-logo {
      background: #009edb;
      border-radius: 7px;
      padding: 7px 16px;
      color: #fff;
      font-weight: 700;
      font-size: 0.78rem;
    }

    .bc-employer .b-icon {
      font-size: 1.8rem;
      margin-bottom: 4px;
    }

    .bc-employer .b-small {
      font-size: 0.5rem;
      font-weight: 600;
      letter-spacing: 0.5px;
      color: #1a4f8a;
      line-height: 1.5;
    }

    .bc-employer .b-main {
      font-size: 0.8rem;
      font-weight: 800;
      color: #003d7a;
      margin-top: 2px;
    }

    .badge-btn-prev,
    .badge-btn-next {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      z-index: 10;
      width: 42px;
      height: 42px;
      border-radius: 50%;
      background: #cd684f;
      border: none;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 12px rgba(205, 104, 79, 0.25);
      transition: all 0.25s ease;
    }

    .badge-btn-prev:hover,
    .badge-btn-next:hover {
      background: #b5533b;
      transform: translateY(-50%) scale(1.05);
    }

    .badge-btn-prev {
      left: -21px;
    }

    .badge-btn-next {
      right: -21px;
    }

    .badge-btn-prev svg,
    .badge-btn-next svg {
      width: 14px;
      height: 14px;
      fill: #fff;
    }

    .slider-divider {
      height: 1px;
      background: #edf0f7;
      max-width: 1000px;
      margin: 0 auto;
    }

    /* ═══════════════════════════════════════════
     SECTION 3 — AGENT SCROLL (STICKY RIGHT)
  ═══════════════════════════════════════════ */
    #lptr_s5 {
      position: relative;
      padding: 150px 0;
      background:url('https://360smsapp.com/wp-content/uploads/2025/08/scroll-bg.png') no-repeat center center / cover;
      background-size: cover;
    }

    #lptr_s5::before {
      content: "";
      position: absolute;
      background: radial-gradient(circle, rgba(141, 223, 208, 0.4) 0%, rgba(141, 223, 208, 0) 70%);
      width: 600px;
      height: 600px;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 0;
      border-radius: 50%;
      filter: blur(80px);
      pointer-events: none;
    }

    .section-row {
      position: relative;
      z-index: 1;
      display: flex;
      align-items: flex-start;
      /* MUST be flex-start for sticky to work */
      gap: 60px;
      /* NO overflow property here */
    }

    .cards-col {
      flex: 0 0 500px;
      max-width: 500px;
    }

    .sticky-col {
      flex: 1;
      max-width: 100%;
      position: sticky;
      top: 40px;
      align-self: flex-start;
      text-align: center;
    }

    .agent-card {
      max-width:512px;
      height:auto;
      padding: 34px 30px;
      border: none;
      border-radius: 12px;
      background: #fff;
      margin-bottom: 24px;
      transition: all 0.3s ease;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
     
      position: relative;
      text-align: left;
    }

    .agent-card:last-child {
      margin-bottom: 0;
    }

    .agent-card:hover {
      box-shadow: 0 8px 32px rgba(37, 16, 123, 0.13);
      transform: translateY(-3px);
    }

    .agent-card h3 {
      font-size: 1.6rem;
      font-weight: 700;
      color: #1d0e80;
      margin: 0 0 12px;
      line-height: 1.2;
      text-transform: none;
    }

    .agent-card p {
      font-size: 1.5rem !important;
      color: #333;
      margin: 0;
      line-height: 1.6;
      text-align: left;
      max-width: 100%;
      
    }

    .learn-more {
      display: inline-block;
      float: right;
      font-size: 13px;
      font-weight: 600;
      color: #1d0e80;
      text-decoration: underline;
      cursor: pointer;
      margin-top: 2px;
      transition: color 0.18s;
      white-space: nowrap;
    }

    .learn-more:hover {
      color: #cd684f;
    }

    .sticky-col h2 {
      font-size: clamp(20px, 3.5vw, 35px);
      font-weight: 700;
      color: #ffffff;
      text-align: center;
      text-transform: none;
      margin: 0 0 10px;
      line-height: 1.2;
    }

    .sticky-col .sticky-subtext {
      font-size: 1.5rem;
      color: #ffffff;
      text-align: center;
      margin-bottom: 30px;
    }

    .sticky-col img {
      width: 100%;
      max-width: 420px;
      height: auto;
      border-radius: 14px;
      display: block;
      margin: 0 auto;
    }

    .btn-book {
      display: inline-block;
      margin-top: 30px;
      background: #cd684f;
      border: none;
      padding: 14px 40px;
      border-radius: 50px;
      color: #fff !important;
      font-size: 16px;
      font-weight: 700;
      cursor: pointer;
      text-decoration: none;
      transition: all 0.3s ease;
      box-shadow: 0 4px 18px rgba(205, 104, 79, 0.35);
    }

    .btn-book:hover {
      background: #b5533b;
      transform: translateY(-2px);
      box-shadow: 0 6px 24px rgba(205, 104, 79, 0.45);
    }

    /* ── Mobile ── */
    @media (max-width: 768px) {
      .section-row {
        flex-direction: column;
        gap: 32px;
      }

      .cards-col,
      .sticky-col {
        flex: 0 0 100%;
        max-width: 100%;
      }

      .sticky-col {
        position: relative;
        /* remove sticky on mobile */
        top: auto;
      }

      .agent-card p {
        font-size: 0.95rem;
      }

      .sticky-col h2 {
       font-size: clamp(20px, 3.5vw, 35px);
      }

      .btn-book {
        width: 100%;
        text-align: center;
        font-size: 15px;
      }

      #lptr_s5::before {
        width: 260px;
        height: 260px;
        top: 20px;
        left: -40px;
        filter: blur(150px);
      }
      #lptr_s5{
      padding-bottom:30px;
      }
    }

    /* ═══════════════════════════════════════════
     SECTION 4 — DEMO / PRODUCT SCREENSHOT
  ═══════════════════════════════════════════ */
    .demo-section {
      /*background: #e8edf5;*/
      padding: 80px 0 0 0;
      text-align: center;
      overflow: hidden;
    }

    .demo-section .demo-heading {
     
      font-size: clamp(20px, 3.5vw, 35px);
      font-weight: 700;
      color: #111827;
      line-height: 1.35;
      max-width: 800px;
      margin: 0 auto 32px;
      text-transform:none;
    }

    .demo-section .btn-demo {
      display: inline-block;
      background: #cd684f;
      color: #ffffff;
     
      font-size: 1.5rem;
      font-weight: 600;
      padding: 14px 36px;
      border-radius: 50px;
      border: none;
      text-decoration: none;
      cursor: pointer;
      transition: background 0.2s, transform 0.15s, box-shadow 0.2s;
      box-shadow: 0 4px 18px rgba(205, 104, 79, 0.35);
      margin-bottom: 56px;
    }

    .demo-section .btn-demo:hover {
      background: #b5533b;
      transform: translateY(-2px);
      color: #fff;
      box-shadow: 0 6px 24px rgba(205, 104, 79, 0.45);
    }

    .demo-section .demo-img-wrap {
      max-width: 860px;
      margin: 0 auto;
      filter: drop-shadow(0 20px 48px rgba(10, 30, 80, 0.16));
    }

    .demo-section .demo-img-wrap img {
      margin:auto;
      width: 90%;
      height: auto;
      display: block;
      border-radius: 12px 12px 0 0;
    }

    @media (max-width: 768px) {
      .demo-section {
        padding: 60px 0 0;
      }

      .demo-section .demo-heading {
       font-size: clamp(20px, 3.5vw, 35px);
        padding: 0 16px;
text-transform:none;
      }

      .demo-section .btn-demo {
        font-size: 1.5rem !important;
        padding: 12px 28px;
        margin-bottom: 40px;
      }
    }

    @media (max-width: 480px) {
      .demo-section .demo-heading {
       
      }
    }

    /* ═══════════════════════════════════════════
     SECTION 5 — WHAT AWAITS YOU AT OUR BOOTH
  ═══════════════════════════════════════════ */
    .awaits-section {
      background: url("https://360smsapp.com/wp-content/uploads/2025/08/white-guhughhiLP-_-1-Dreamforce-2028.png") no-repeat center center / cover;
      padding: 150px 0 70px;
      text-align: center;
    }

    .awaits-section .awaits-heading {
     
      font-size: clamp(20px, 3.5vw, 35px);
      font-weight: 700;
      color: #ffffff;
      margin-bottom: 40px;
      line-height: 1.2;
      text-transform:none;
    }

    .awaits-col {
      padding: 0 30px;
    }

    /* gap between the two columns */
    .awaits-col-left {
      padding-right: 60px;
      padding-left: 0;
    }

    .awaits-col-right {
      padding-left: 60px;
      padding-right: 0;
    }

    .awaits-item {
      border-bottom: 1px solid rgba(255, 255, 255, 0.3);
      padding: 18px 10px;
    }

    .awaits-item-text {
    
      font-size: clamp(1.1rem, 2vw, 1.7rem);
      font-weight: 400;
      color: #ffffff;
      text-align: left;
      margin: 0;
      line-height: 1.3;
    }

    @media (max-width: 768px) {

      .awaits-col-left,
      .awaits-col-right {
        padding: 0;
      }
      .awaits-item {
      
      padding: 10px 10px;
    }
    
    
    .awaits-section {
     
      padding: 100px 0 5px;
     
    }
      
    }

    @media (max-width: 499px) {
      .awaits-section .awaits-heading {
        margin: 15px 3px !important;
        color:#000;
      }
    }

    /* ═══════════════════════════════════════════
     SECTION 6 — TRUSTED BY CLIENTS LOGO SLIDER
  ═══════════════════════════════════════════ */
    .trusted-section {
      background: #ffffff;
      padding: 56px 0 60px;
      text-align: center;
    }

    .trusted-section .trusted-heading {
     
       font-size: clamp(20px, 3.5vw, 35px);
      font-weight: 700;
      color: #000;
      margin-bottom: 44px;
line-height: 1.25;
text-transform:none;
    }

    .trusted-swiper {
      width: 100%;
      overflow: hidden;
    }

    .trusted-swiper .swiper-slide {
      width: auto !important;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .logo-card {
      /*display: inline-flex;*/
      /*align-items: center;*/
      /*justify-content: center;*/
      /*border: 1.5px solid #d8dde8;*/
      /*border-radius: 10px;*/
      /*padding: 12px 20px;*/
      /*background: #ffffff;*/
      /*width: 200px;*/
      /*height: auto;*/
      /*transition: box-shadow 0.2s, border-color 0.2s;*/
    }

    .logo-card:hover {
      /*box-shadow: 0 4px 16px rgba(1, 29, 154, 0.1);*/
      /*border-color: #a0aec0;*/
    }

    .logo-card img {
      max-height: auto;
      max-width: 170px;
      width: 100%;
      object-fit: contain;
      display: block;
    }

    @media (max-width: 576px) {
      .logo-card {
        width: 160px;
        height: auto;
        padding: 10px 14px;
      }

      .logo-card img {
      width:200px;
        max-height: auto;
      }
    }


    /* ═══════════════════════════════════════════
     SECTION 7 — TESTIMONIALS
  ═══════════════════════════════════════════ */
    .testimonials-section {
      background: #f5f9fc;
      padding: 72px 0 60px;
      text-align: center;
    }

    .testimonials-section .testi-heading {
     
       font-size: clamp(20px, 3.5vw, 35px);
      font-weight: 700;
      color: #111827;
      margin-bottom: 55px;
      line-height: 1.25;
      text-transform:none;
    }

    .df-testimonial-carousel-container {
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
      overflow: hidden;
      position: relative;
      padding-top: 35px;
      margin-bottom: 0;
    }

    .df-testimonial-carousel-track {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }

    .df-testimonial-carousel-card {
      position: relative;
      background: #fff;
      padding: 30px 25px 60px;
      /* 3 visible cards, 10px margin each side = 20px per card, 60px total */
      width: calc((100% - 60px) / 3);
      min-width: calc((100% - 60px) / 3);
      flex: 0 0 calc((100% - 60px) / 3);
      border-radius: 6px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
      margin: 0 10px;
      box-sizing: border-box;
      flex-shrink: 0;
    }

    .df-testimonial-carousel-card::before {
      content: "";
      position: absolute;
      top: -45px;
      left: 10px;
      width: 100px;
      height: 100px;
      background-image: url('https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014602.png');
      background-repeat: no-repeat;
      background-position: center;
      z-index: 10;
      display: block;
    }

    .df-testimonial-carousel-stars {
      position: absolute;
      top: 20px;
      right: 25px;
      color: #f24e1e;
      font-size: 20px;
      letter-spacing: 2px;
    }

    .df-testimonial-carousel-card p {
      font-size: 14px;
      color: #444;
      line-height: 1.6;
      margin-bottom: 25px;
      text-align: left;
      margin-top: 25px;
    }

    .df-testimonial-carousel-footer {
      display: flex;
      align-items: center;
      position: absolute;
      bottom: 20px;
      left: 25px;
      right: 25px;
    }

    .df-testimonial-carousel-footer img {
      width: 45px;
      height: 45px;
      border-radius: 50%;
      margin-left: 12px;
      flex-shrink: 0;
      object-fit: cover;
    }

    .df-testimonial-carousel-footer h4 {
      margin: 0;
      padding: 0;
      text-align: left;
      font-size: 12px;
      font-weight: bold;
      color: #222;
      height: 20px;
    }

    .df-testimonial-carousel-footer span {
      display: block;
      font-size: 9px;
      color: #777;
      text-align: left;
    }

    .df-testimonial-carousel-dots {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .df-testimonial-carousel-dots button {
      width: 12px;
      height: 12px;
      margin: 0 5px;
      border-radius: 50%;
      border: none;
      background: #ccc;
      cursor: pointer;
      transition: background 0.3s;
    }

    .df-testimonial-carousel-dots button.active {
      background: #f24e1e;
    }

    @media (max-width: 768px) {
      .df-testimonial-carousel-container {
        width: 100%;
        padding: 20px 0;
        margin-bottom: 50px;
      }

      .df-testimonial-carousel-card {
        width: calc(100% - 20px);
        min-width: calc(100% - 20px);
        flex: 0 0 calc(100% - 20px);
        margin: 0 10px;
      }

      .testimonials-section {
        padding: 56px 0 20px;
      }
    }

    /* ═══════════════════════════════════════════
   SECTION 8 — DISCOVER WHAT'S NEXT (CTA BANNER)
═══════════════════════════════════════════ */
    .discover-section {
      position: relative;
      background-image: url('https://360smsapp.com/wp-content/uploads/2026/03/sydney-bg2-1.png');
      background-size: cover;
      background-position: center center;
      background-repeat: no-repeat;
      padding: 80px 0 300px;
      text-align: center;
      overflow: hidden;
    }

    .discover-section::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(255, 255, 255, 0.12);
      pointer-events: none;
      z-index: 0;
    }

    .discover-section .discover-inner {
      position: relative;
      z-index: 1;
    }

    .discover-section .discover-heading {
     
       font-size: clamp(20px, 3.5vw, 35px);
      font-weight: 700;
      color: #111827;
      line-height: 1.35;
      margin-bottom: 28px;
      max-width: 800px;
      margin-left: auto;
      margin-right: auto;
      text-transform:none;
    }

    .discover-section .btn-discover {
      display: inline-block;
      background: #cd684f;
      color: #ffffff;
      
      font-size: 2rem;
      font-weight: 600;
      padding: 14px 36px;
      border-radius: 50px;
      border: 2px solid #cd684f;
      text-decoration: none;
      cursor: pointer;
      transition: background 0.2s, transform 0.15s, box-shadow 0.2s;
      box-shadow: 0 4px 18px rgba(205, 104, 79, 0.35);
    }

    .discover-section .btn-discover:hover {
      background: transparent;
      color: #cd684f;
      transform: translateY(-2px);
      box-shadow: 0 6px 24px rgba(205, 104, 79, 0.3);
    }

    @media (max-width: 768px) {
      .discover-section {
        padding: 60px 0 250px !important;
      }

      .discover-section .discover-heading {
        
        padding: 0 16px;
      }
    }

    @media (max-width: 480px) {
      .discover-section .discover-heading {
       
      }

      .discover-section .btn-discover {
        font-size: 1.3rem;
        padding: 12px 24px;
      }
    }

    /* ═══════════════════════════════════════════
     SECTION 9 — MEET THE TEAM
  ═══════════════════════════════════════════ */
    .meet-team-section {
      background: #ffffff;
      padding: 60px 0 70px;
    }

    .meet-team-inner {
      background-image: url('https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014567.png');
      background-size: cover;
      background-position: center center;
      background-repeat: no-repeat;
      border-radius: 20px;
      padding: 56px 40px 60px;
      text-align: center;
    }

    .meet-team-heading {
      
       font-size: clamp(20px, 3.5vw, 35px);
      font-weight: 700;
      color: #ffffff;
      line-height: 1.35;
      margin-bottom: 40px;
      text-transform: none;
    }

    .meet-team-img {
      max-width: 600px;
      height: auto;
      display: block;
      margin: 0 auto;
    }

    @media (max-width: 991px) {
      .meet-team-inner {}
      .meet-team-img {
    max-width: 250px;
    margin: 0 auto;
}
    }

    /* ═══════════════════════════════════════════
       SECTION 10 — BOOK A MEETING
    ═══════════════════════════════════════════ */
    
     .form2 .formcontainer{
        background: #f1f5ff;
        padding:0px;
     }
     
     @media (max-width: 991.98px) {
  .book-meeting-left {
    margin-top: 0 !important;
  }
  .discover-section,.meet-team-section
  {
  padding:30px 0;
  }
  
}
    
    .book-meeting-section {
      padding: 100px 0;
      background: url("https://360smsapp.com/wp-content/uploads/2026/03/Rectangle-127-1.png") center center / cover no-repeat;
      padding: 60px 0 60px;
     
    }

    .book-meeting-left h2 {
      
     font-size: clamp(20px, 3.5vw, 35px);
      font-weight: 800;
      color: #032d60;
      line-height: 1.15;
      margin-bottom: 50px;
      text-transform:none;
    }

    .book-meeting-left .transform-text {
     
      font-size: clamp(20px, 3.5vw, 35px);
      color: #1a2f5e;
      line-height: 1.3;
      font-weight: 500;
      text-transform:none;
      
    }

    .book-meeting-left .transform-text strong {
      color: #032d60;
      font-weight: 800;
    }

    .book-meeting-form-card {
      background: #f1f5ff;
      border-radius: 30px;
      padding: 50px 40px;
      max-width: 450px;
      margin-left: auto;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.04);
    }

    .bm-card-header {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 15px;
      margin-bottom: 35px;
    }

    .catchup-text {
      font-size: clamp(1.6rem, 1.5vw, 2rem);
      color: #333;
      font-weight: 500;
      margin-bottom: 0;
    }

    .bm-logo-img {
      max-width: 180px;
      height: auto;
    }

    /* Form UI/UX Enhancements */
    .book-meeting-form-card form label {
      font-weight: 700;
      color: #032d60;
      margin-bottom: 10px;
      font-size: 15px;
      display: block;
      text-align: left;
    }

    .book-meeting-form-card form input[type="text"],
    .book-meeting-form-card form input[type="email"],
    .book-meeting-form-card form input[type="tel"],
    .book-meeting-form-card form .form-control {
      background: #ffffff !important;
      border: 1px solid #d1d5db !important;
      border-radius: 6px !important;
      padding: 14px 18px !important;
      
      margin-left: 0px !important;
      font-size: 15px !important;
      color: #333 !important;
      width: 100%;
      box-shadow: none !important;
    }

    .book-meeting-form-card form button,
    .book-meeting-form-card form input[type="submit"],
    .book-meeting-form-card form .wpcf7-submit {
      background: #3470b1 !important;
      background-color: #3470b1 !important;
      color: #ffffff !important;
      border: none !important;
      padding: 11px 40px !important;
      border-radius: 50px !important;
      font-weight: 700 !important;
      font-size: 15px !important;
      width: auto !important;
      /*min-width: 240px;*/
      margin-top: 25px !important;
      transition: all 0.3s ease !important;
      box-shadow: 0 8px 15px rgba(52, 112, 177, 0.25) !important;
      cursor: pointer;
      display: block;
    }

    .book-meeting-form-card form button:hover,
    .book-meeting-form-card form input[type="submit"]:hover {
      opacity: 0.9;
      transform: translateY(-2px);
    }

    @media (max-width: 991px) {
    
    .bm-card-header img{
    width:155px
    }
    
    .agentforce-hero-left{
    padding:0px;
    }
    .catchup-text{
    margin-top:14px;
    }
      .book-meeting-section {
        padding: 60px 0;
      }

      .book-meeting-left {
        text-align: center;
        margin-bottom: 50px;
      }

      .book-meeting-left h2 br,
      .book-meeting-left .transform-text br {
        display: none;
      }

      .book-meeting-form-card {
        margin: 0 auto;
        padding: 40px 25px;
      }

      .bm-logo-text strong {
        font-size: 26px;
      }

      .bm-logo-text .nyc-line {
        font-size: 16px;
      }
    }
  </style>

  <!-- ═══════════════════════════════
     SECTION 1 — HERO
═══════════════════════════════ -->
  <section class="agentforce-hero" id="df_hero">
    <div class="agentforce-hero-container">

      <div class="agentforce-hero-left">
        <div class="agentforce-logo-row">
          <span style="margin-top: 15px; font-size:30px">Connect. Engage. Convert.​</span>
          <!--<div class="agentforce-logo">-->
          <!--  <img src="https://360smsapp.com/wp-content/uploads/2025/08/Frame-113.png" style="max-width:220px; height:auto;">-->
          <!--</div>-->
        </div>

        <h1>Multichannel AI Agents Native to Salesforce</h1>

        <div class="agentforce-subtitle">Witness the Future of Sales Engagement –<br>See AI Agents Live Demo at Dreamforce '25</div>
        <div class="agentforce-subtitle" style="font-size:20px !important; margin-top:-20px;">Booth No. 345</div>

        <div class="agentforce-meta-badge">
          <div class="agentforce-meta-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-week-fill" viewBox="0 0 16 16">
              <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2M9.5 7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m3 0h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5M2 10.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5"/>
            </svg>
            October 14–16, 2025
          </div>
          <div class="agentforce-meta-item">
            <svg viewBox="0 0 384 512">
              <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
            </svg>
            San Francisco, US
          </div>
        </div>
      </div><!-- /hero-left -->

      <div class="agentforce-hero-right">
        <div class="agentforce-form-card">
          <div class="agentforce-form-header">
            <h3 style="color:black;">Let's Catch up at</h3>
            <h3 style="font-weight:normal;">Dreamforce 25.</h3>
          </div>
          <?php echo do_shortcode($form_shortcode); ?>
        </div>
      </div><!-- /hero-right -->

    </div><!-- /hero-container -->

    <div class="agentforce-ratings-wrapper">
      <div class="agentforce-ratings-card">
        <div class="agentforce-score">4.9/5</div>
        <div class="agentforce-stars-container">
          <div class="agentforce-stars">
            <?php for ($i = 0; $i < 5; $i++) : ?>
              <svg viewBox="0 0 576 512">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            <?php endfor; ?>
          </div>
          <div class="agentforce-ratings-text">rated on AppExchange</div>
        </div>
        <div style="background:#1a3353; color:#fff; border-radius:8px; padding:14px 28px; text-align:center;">
          <div style="font-size:32px; font-weight:800; color:#fff; line-height:1;">1200+</div>
          <div style="font-size:16px; color:#fff; font-weight:500;">Reviews</div>
        </div>
      </div>
    </div>
  </section>
     SECTION 2 — SLIDERS
═══════════════════════════════ -->
  <div class="slider-section mt-5">
    <h2 class="section-title">Where Your Audience Is, Our AI Agents Are</h2>
    <p class="section-subtitle">No-code Automation | Unified Inbox</p>

    <div class="channel-swiper-wrap">
      <div class="swiper channel-swiper" id="channelSwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="channel-pill"><img src="https://360smsapp.com/wp-content/uploads/2026/01/sms.png" alt="" /></div>
          </div>
          <div class="swiper-slide">
            <div class="channel-pill"><img src="https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014616.png" alt="" /></div>
          </div>
          <div class="swiper-slide">
            <div class="channel-pill"><img src="https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014615.png" alt="" /></div>
          </div>
          <div class="swiper-slide">
            <div class="channel-pill"><img src="https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014614.png" alt="" /></div>
          </div>
          <div class="swiper-slide">
            <div class="channel-pill"><img src="https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014613.png" alt="" /></div>
          </div>
          <div class="swiper-slide">
            <div class="channel-pill"><img src="https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014612.png" alt="" /></div>
          </div>
          <div class="swiper-slide">
            <div class="channel-pill"><img src="https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014611.png" alt="" /></div>
          </div>
          <div class="swiper-slide">
            <div class="channel-pill"><img src="https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014610.png" alt="" /></div>
          </div>
          <div class="swiper-slide">
            <div class="channel-pill"><img src="https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014609.png" alt="" /></div>
          </div>
          <div class="swiper-slide">
            <div class="channel-pill"><img src="https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014608.png" alt="" /></div>
          </div>
          <div class="swiper-slide">
            <div class="channel-pill"><img src="https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014607-1.png" alt="" /></div>
          </div>
          <div class="swiper-slide">
            <div class="channel-pill"><img src="https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014606-1.png" alt="" /></div>
          </div>
          <div class="swiper-slide">
            <div class="channel-pill"><img src="https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014605-1.png" alt="" /></div>
          </div>
          <div class="swiper-slide">
            <div class="channel-pill"><img src="https://360smsapp.com/wp-content/uploads/2026/03/text3.png" alt="" /></div>
          </div>
          <div class="swiper-slide">
            <div class="channel-pill"><img src="https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014603-1.png" alt="" /></div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>

  <!--section 2 of 2-->
  <div class="badge-section-wrap mb-5">
    <div class="badge-swiper-outer">
      <button class="badge-btn-prev" id="badgePrev" aria-label="Previous">
        <svg viewBox="0 0 24 24">
          <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
        </svg>
      </button>
      <div class="swiper badge-swiper" id="badgeSwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="badge-item"><img src="https://360smsapp.com/wp-content/uploads/2025/08/unnamed-79-1.png" alt="Salesforce Partner" style="max-height: 120px; width: auto;" /></div>
          </div>
          <div class="swiper-slide">
            <div class="badge-item"><img src="https://360smsapp.com/wp-content/uploads/2025/08/salesforce-available-appexchange-1.png" alt="AppExchange" style="max-height: 120px; width: auto;" /></div>
          </div>
          <div class="swiper-slide">
            <div class="badge-item"><img src="https://360smsapp.com/wp-content/uploads/2025/08/Group-308.png" alt="APAC Partner" style="max-height: 120px; width: auto;" /></div>
          </div>
          <div class="swiper-slide">
            <div class="badge-item"><img src="https://360smsapp.com/wp-content/uploads/2025/08/Group-307.png" alt="Top Salesforce Consultants" style="max-height: 120px; width: auto;" /></div>
          </div>
          <div class="swiper-slide">
            <div class="badge-item"><img src="https://360smsapp.com/wp-content/uploads/2025/08/Group-306.png" alt="Employer Logo" style="max-height: 120px; width: auto;" /></div>
          </div>
          <div class="swiper-slide">
            <div class="badge-item"><img src="https://360smsapp.com/wp-content/uploads/2025/08/Group-305.png" alt="Saleforce Badge" style="max-height: 120px; width: auto;" /></div>
          </div>
          <div class="swiper-slide">
            <div class="badge-item"><img src="https://360smsapp.com/wp-content/uploads/2025/08/Group-304.png" alt="Saleforce Badge" style="max-height: 120px; width: auto;" /></div>
          </div>
        </div>
      </div>
      <button class="badge-btn-next" id="badgeNext" aria-label="Next">
        <svg viewBox="0 0 24 24">
          <path d="M8.59 16.59L10 18l6-6-6-6-1.41 1.41L13.17 12z" />
        </svg>
      </button>
    </div>
  </div>

  <!-- ═══════════════════════════════
     SECTION 3 — AGENT SCROLL
═══════════════════════════════ -->

  <!-- ═══════════════════════════════
     SECTION 3 — AGENT SCROLL
═══════════════════════════════ -->
  <section id="lptr_s5">
    <div class="container" style="max-width:1300px; position:relative; z-index:1;">
      <div class="section-row">

        <div class="cards-col">
          <div class="agent-card">
            <h3>Voice Agent</h3>
            <p>Call new leads, pitch products, and book demos with AI. <a href="https://360smsapp.com/conversational-ai-voice-agent/" target="_blank" class="learn-more">Learn more</a></p>
          </div>
          <div class="agent-card">
            <h3>Texting Agent</h3>
            <p>Communicate one-on-one or automate texts with AI. <a href="https://360smsapp.com/360-llm-ai-chat-assistant/" target="_blank" class="learn-more">Learn more</a></p>
          </div>
          <div class="agent-card">
            <h3>Call Coaching</h3>
            <p>Monitor calls, intervene discreetly, and coach in real time. <a href="https://360smsapp.com/aiva-ai-agent-call-coaching-transcription/" target="_blank" class="learn-more">Learn more</a></p>
          </div>
          <div class="agent-card">
            <h3>Live Call Language Translation</h3>
            <p>Translate live call conversations into the preferred language. <a href="https://360smsapp.com/ai-connect-live-call-translating-agent/" target="_blank" class="learn-more">Learn more</a></p>
          </div>
          <div class="agent-card">
            <h3>Drip Campaign Agent</h3>
            <p>Run intelligent drips with auto-generated follow-up sequences. <a href="https://360smsapp.com/mira-ai-agent-recruitment-tool/" target="_blank" class="learn-more">Learn more</a></p>
          </div>
          <div class="agent-card">
            <h3>Vibe Coding Agent</h3>
            <p>Write validation rules and create fields, flows, or triggers with AI Agents. <a href="https://360smsapp.com/automated-metadata-generator-archbuddy-ai/" target="_blank" class="learn-more">Learn more</a></p>
          </div>
        </div><!-- /cards-col -->

        <div class="sticky-col" id="stickyPanel">
          <h2>AI Agents at Work:</h2>
          <p class="sticky-subtext">Engage Smart. Close Fast.</p>
          <img src="https://360smsapp.com/wp-content/uploads/2025/08/bjbj-1.png" alt="Agentforce Compatibility Across Channels" />
          <br />
          <a href="#df_hero" class="btn-book">Book a 1:1 Meeting</a>
        </div>

      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════
     SECTION 4 — DEMO / PRODUCT SCREENSHOT
═══════════════════════════════════════════ -->
  <section class="demo-section" id="df_footer">
    <div class="container" style="max-width: 960px;">

      <h2 class="demo-heading">
        Ready to see Multichannel AI Agents at Work?
      </h2>

      <div>
        <a href="#df_hero" class="btn-demo">Book Your 15-Min Personalized Demo</a>
      </div>

      <div class="demo-img-wrap">
        <img
          src="<?php echo esc_url(get_post_meta($post_id, 'demo_screenshot', true) ?: 'https://360smsapp.com/wp-content/uploads/2025/08/image-22.png'); ?>"
          alt="<?php echo esc_attr($title); ?> — Live Demo"
          loading="lazy" />
      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════
     SECTION 5 — KEY DIFFERENTIATORS
     (awaits-section class keeps original bg image + padding)
═══════════════════════════════════════════ -->
  <section class="awaits-section mt-5">
    <div class="container" style="max-width:1100px;">

      <h3 class="awaits-heading">Key Differentiators</h3>

      <style>
        .kd-accordion-container { display:grid; grid-template-columns:1fr 1fr; gap:0 40px; width:80%; max-width:1000px; margin:0 auto 40px; }
        .kd-accordion-item { border-bottom:1px solid rgba(255,255,255,0.3); padding:10px 0; }
        .kd-accordion-header { padding:10px; display:flex; justify-content:space-between; align-items:center; cursor:pointer; font-weight:bold; color:#fff; text-align:left; font-size:clamp(1rem,2vw,2.5rem); }
        .kd-arrow { border:solid white; border-width:0 2px 2px 0; display:inline-block; padding:5px; transform:rotate(-45deg); transition:transform 0.3s ease; flex-shrink:0; }
        .kd-accordion-header.active .kd-arrow { transform:rotate(45deg); }
        .kd-accordion-content { max-height:0; overflow:hidden; transition:max-height 0.4s ease, padding 0.4s ease; }
        .kd-accordion-content p { font-size:clamp(0.9rem,1.5vw,1rem); color:#e0e0e0; text-align:left; padding:0 10px; margin:0; }
        .kd-accordion-content.open { max-height:200px; padding:5px 0; }
        .kd-free-trial-btn { color:#04199F; background-color:white; border-radius:80px; padding:10px 50px; margin:10px auto 0; display:inline-block; border:2px solid transparent; cursor:pointer; font-size:1.1rem; font-weight:600; text-decoration:none; transition:all 0.3s ease; }
        .kd-free-trial-btn:hover { background-color:transparent; color:#fff; border-color:#fff; transform:scale(1.05); }
        @media (max-width:768px) { .kd-accordion-container { grid-template-columns:1fr; width:95%; } }
      </style>

      <div class="kd-accordion-container">
        <div>
          <div class="kd-accordion-item">
            <div class="kd-accordion-header">Serverless <i class="kd-arrow"></i></div>
            <div class="kd-accordion-content"><p>No data storage, just faster, scalable performance.</p></div>
          </div>
          <div class="kd-accordion-item">
            <div class="kd-accordion-header">Native Mobile App <i class="kd-arrow"></i></div>
            <div class="kd-accordion-content"><p>Access full features seamlessly on the go.</p></div>
          </div>
          <div class="kd-accordion-item">
            <div class="kd-accordion-header">Free Implementation <i class="kd-arrow"></i></div>
            <div class="kd-accordion-content"><p>Get started at zero setup cost.</p></div>
          </div>
          <div class="kd-accordion-item">
            <div class="kd-accordion-header">24×7 Free Support <i class="kd-arrow"></i></div>
            <div class="kd-accordion-content"><p>Expert help anytime, anywhere.</p></div>
          </div>
        </div>
        <div>
          <div class="kd-accordion-item">
            <div class="kd-accordion-header">Free Customization <i class="kd-arrow"></i></div>
            <div class="kd-accordion-content"><p>Tailor the solution to fit your needs at no cost.</p></div>
          </div>
          <div class="kd-accordion-item">
            <div class="kd-accordion-header">Go Live in Hours <i class="kd-arrow"></i></div>
            <div class="kd-accordion-content"><p>Deploy and start using the same day.</p></div>
          </div>
          <div class="kd-accordion-item">
            <div class="kd-accordion-header">1 Number for Calls &amp; Texts <i class="kd-arrow"></i></div>
            <div class="kd-accordion-content"><p>Call and text from the same number.</p></div>
          </div>
          <div class="kd-accordion-item">
            <div class="kd-accordion-header">Multichannel Drip Campaigns <i class="kd-arrow"></i></div>
            <div class="kd-accordion-content"><p>Automate outreach across text, voice, and more.</p></div>
          </div>
        </div>
      </div>

      <a href="#df_hero" class="kd-free-trial-btn">Get 7-Day Free Trial</a>

    </div>
  </section>

  <script>
    document.querySelectorAll('.kd-accordion-header').forEach(function(h){
      h.addEventListener('click', function(){ h.classList.toggle('active'); h.nextElementSibling.classList.toggle('open'); });
    });
  </script>

  <!-- ═══════════════════════════════════════════
     SECTION 6 — TRUSTED BY CLIENTS LOGO SLIDER
═══════════════════════════════════════════ -->
  <section class="trusted-section mt-5">
    <div class="container" style="max-width:1200px;">

      <h2 class="trusted-heading">Trusted By The Best Worldwide</h2>

      <div class="swiper trusted-swiper" id="trustedSwiper">
        <div class="swiper-wrapper">
          <?php
          $logos = [
            'https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014567-1.png',
            'https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014568.png',
            'https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014569.png',
            'https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014570.png',
            'https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014571.png',
            'https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014572.png',
            'https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014575.png',
            'https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014576.png',
            'https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014577.png',
            'https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014578.png',
            'https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014579.png',
            'https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014580.png',
            'https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014581.png',
            'https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014582.png',
            'https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014583.png',
            'https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014584.png',
            'https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014585.png',
            'https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014586.png',
            'https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014587.png',
          ];
          $all_logos = array_merge($logos, $logos);
          foreach ($all_logos as $logo_url) : ?>
            <div class="swiper-slide">
              <div class="logo-card">
                <img src="<?php echo esc_url($logo_url); ?>" alt="Client logo" loading="lazy" />
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════
     SECTION 7 — TESTIMONIALS
═══════════════════════════════════════════ -->
  <section class="testimonials-section">
    <div class="container" style="max-width:1200px;">

      <h2 class="testi-heading">Transformative experiences, shared by customers</h2>

      <div class="df-testimonial-carousel-container">
        <div class="df-testimonial-carousel-track">

          <div class="df-testimonial-carousel-card">
            <div class="df-testimonial-carousel-stars">★★★★★</div>
            <p>For cost savings, we have estimated that we have saved over $100,000 in operational costs by using the 360 SMS platform.</p>
            <div class="df-testimonial-carousel-footer">
              <div><h4>Devon Thorne</h4><span>Director of Operations | Health Sync Global</span></div>
              <img src="https://360smsapp.com/wp-content/uploads/2025/08/unnamed-56.png" alt="Devon Thorne" loading="lazy">
            </div>
          </div>

          <div class="df-testimonial-carousel-card">
            <div class="df-testimonial-carousel-stars">★★★★★</div>
            <p>It's so innovative that we've already seen a number of productive features and enhancements over a short period.</p>
            <div class="df-testimonial-carousel-footer">
              <div><h4>Eduardo Dela Rosa</h4><span>RM Integration Analyst | ResMed Ltd</span></div>
              <img src="https://360smsapp.com/wp-content/uploads/2025/08/unnamed-57.png" alt="Eduardo Dela Rosa" loading="lazy">
            </div>
          </div>

          <div class="df-testimonial-carousel-card">
            <div class="df-testimonial-carousel-stars">★★★★★</div>
            <p>We started with another SMS solution, but after realizing the custom coding it required, our search narrowed from 16 vendors to 1—360 SMS.</p>
            <div class="df-testimonial-carousel-footer">
              <div><h4>Lindsay Fairchild</h4><span>Salesforce Administrator | Bisk Education</span></div>
              <img src="https://360smsapp.com/wp-content/uploads/2025/08/unnamed-58.png" alt="Lindsay Fairchild" loading="lazy">
            </div>
          </div>

        </div>
      </div>

      <div class="df-testimonial-carousel-dots"></div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════
     SECTION 8 — DISCOVER WHAT'S NEXT (CTA BANNER)
═══════════════════════════════════════════ -->
  <section class="discover-section">
    <div class="container" style="max-width:900px;">
      <div class="discover-inner">

        <h2 class="discover-heading">
          See How Multichannel AI Agents Make you Future-Ready
        </h2>

        <a href="#df_footer" class="btn-discover">
          Book a Meeting at Dreamforce '25
        </a>

      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════
     SECTION 9 — MEET THE TEAM
═══════════════════════════════════════════ -->
  <section class="meet-team-section">
    <div class="container" style="max-width:1160px; padding:0 24px;">
      <div class="meet-team-inner">

        <h2 class="meet-team-heading">
          Meet our Multichannel AI Agent Experts at<br class="d-none d-md-block">
          Dreamforce 2025
        </h2>

        <img
          class="meet-team-img"
          src="https://360smsapp.com/wp-content/uploads/2025/08/Group-1000014554.png"
          alt="Meet our Multichannel AI Agent Experts at Dreamforce 2025"
          loading="lazy" />

      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════
     SECTION 10 — BOOK A MEETING
═══════════════════════════════════════════ -->
  <section class="book-meeting-section">
    <div class="container" style="max-width:1160px;">
      <div class="row align-items-center g-4 g-lg-5">

        <div class="col-12 col-lg-6 book-meeting-left" style="margin-top:90px">
          <h2>Transform Sales with<br>Multichannel AI Agents</h2>
          <h4 class="transform-text">
            Let's talk at<br>
            <strong>Dreamforce '25!</strong>
          </h4>
          <p style="font-size:18px !important; color:#1a2f5e; margin-top:10px;">Meet us at booth no. 345</p>
        </div>

        <div class="col-12 col-lg-6">
          <div class="book-meeting-form-card">
            <div class="bm-card-header">
             <h4 class="formheader">
			
			Let’s Catch up at <span>Dreamforce 25.</span>
		</h4>
            </div>
            <div class="bm-form-body form2">
              <?php echo do_shortcode('[dreamforce23_form2]'); ?>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- Swiper + Bootstrap JS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>

  <script>
    /* ── Swipers ── */
    new Swiper('#channelSwiper', {
      slidesPerView: 'auto',
      spaceBetween: 14,
      slidesPerGroup: 1,
      loop: true,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true
      },
      speed: 500,
      pagination: {
        el: '#channelSwiper .swiper-pagination',
        clickable: true,
        dynamicBullets: true
      },
    });

    const badgeSwiper = new Swiper('#badgeSwiper', {
      slidesPerView: 2,
      spaceBetween: 20,
      slidesPerGroup: 1,
      loop: true,
      speed: 600,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
        pauseOnMouseEnter: true
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
          spaceBetween: 16
        },
        480: {
          slidesPerView: 2,
          spaceBetween: 18
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 22
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 24
        },
        1200: {
          slidesPerView: 5,
          spaceBetween: 26
        },
      },
    });

    document.getElementById('badgePrev').addEventListener('click', () => badgeSwiper.slidePrev());
    document.getElementById('badgeNext').addEventListener('click', () => badgeSwiper.slideNext());

    /* ── Section 6: Trusted Logos — continuous auto-scroll ── */
    new Swiper('#trustedSwiper', {
      slidesPerView: 'auto',
      spaceBetween: 20,
      loop: true,
      speed: 3000,
      autoplay: {
        delay: 0,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      },
      freeMode: true,
      grabCursor: true,
      breakpoints: {
        0: {
          spaceBetween: 14
        },
        576: {
          spaceBetween: 18
        },
        992: {
          spaceBetween: 24
        },
      },
    });

    /* ── Section 7: Testimonials ── */
    (function initTestimonialCarousel() {
      function init() {
        const track = document.querySelector('.df-testimonial-carousel-track');
        const dotsContainer = document.querySelector('.df-testimonial-carousel-dots');
        if (!track || !dotsContainer) return;

        // Remove any previously injected clones (for re-init on resize)
        Array.from(track.querySelectorAll('[data-clone]')).forEach(el => el.remove());
        dotsContainer.innerHTML = '';

        const cards = Array.from(track.children);
        const isMobile = window.innerWidth <= 768;
        const visibleCards = isMobile ? 1 : 3;
        let currentIndex = 0;

        // Clone first/last cards for infinite loop
        for (let i = 0; i < visibleCards; i++) {
          const cloneEnd = cards[i].cloneNode(true);
          cloneEnd.setAttribute('data-clone', '1');
          track.appendChild(cloneEnd);

          const cloneStart = cards[cards.length - 1 - i].cloneNode(true);
          cloneStart.setAttribute('data-clone', '1');
          track.insertBefore(cloneStart, track.firstChild);
        }

        const cardEl = track.children[visibleCards];
        const cardWidth = cardEl.getBoundingClientRect().width + 20;
        const indexOffset = visibleCards;

        track.style.transition = 'none';
        track.style.transform = `translateX(-${indexOffset * cardWidth}px)`;

        // Build dots
        cards.forEach((_, i) => {
          const dot = document.createElement('button');
          if (i === 0) dot.classList.add('active');
          dot.addEventListener('click', () => {
            currentIndex = i;
            update();
            resetAuto();
          });
          dotsContainer.appendChild(dot);
        });

        const dots = Array.from(dotsContainer.children);

        function update() {
          track.style.transition = 'transform 0.5s ease-in-out';
          track.style.transform = `translateX(-${(currentIndex + indexOffset) * cardWidth}px)`;
          dots.forEach(d => d.classList.remove('active'));
          if (dots[currentIndex]) dots[currentIndex].classList.add('active');
        }

        track.addEventListener('transitionend', () => {
          if (currentIndex >= cards.length) {
            track.style.transition = 'none';
            currentIndex = 0;
            track.style.transform = `translateX(-${indexOffset * cardWidth}px)`;
          }
          if (currentIndex < 0) {
            track.style.transition = 'none';
            currentIndex = cards.length - 1;
            track.style.transform = `translateX(-${(currentIndex + indexOffset) * cardWidth}px)`;
          }
        });

        let auto = setInterval(() => {
          currentIndex++;
          update();
        }, 3000);

        function resetAuto() {
          clearInterval(auto);
          auto = setInterval(() => {
            currentIndex++;
            update();
          }, 3000);
        }

        update();
      }

      if (document.readyState === 'complete') {
        setTimeout(init, 50);
      } else {
        window.addEventListener('load', () => setTimeout(init, 50));
      }
    })();

    /* ══════════════════════════════════════════════
       STICKY FIX FOR WORDPRESS THEMES
    ══════════════════════════════════════════════ */
    (function fixSticky() {
      const el = document.getElementById('stickyPanel');
      if (!el) return;
      let node = el.parentElement;
      while (node && node !== document.body) {
        const s = window.getComputedStyle(node);
        if (['hidden', 'auto', 'scroll'].includes(s.overflow) || ['hidden', 'auto', 'scroll'].includes(s.overflowY)) {
          node.style.overflow = 'visible';
          node.style.overflowY = 'visible';
        }
        node = node.parentElement;
      }
    })();
  </script>

  <?php get_footer(); ?>