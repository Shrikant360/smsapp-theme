<!DOCTYPE html>
<?php get_header('sms'); ?>
<style>
/* ── Reset & base ── */
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

html, body {
  overflow-x: hidden;
  font-family: Arial, sans-serif;
  color: #000;
  background: #fff;
}
.sms-privacy-archive-hero {
			background: linear-gradient(90deg, #EEF4FF 0%, #F7F7F5 65%) !important;
			padding: clamp(40px, 6vw, 70px) 0;
			
		}

		.sms-privacy-archive-wrap h1.sms-privacy-archive-hero-title {
			color: #000000;
			margin: 0;
			padding: 0;
			border: 0;
			/*text-transform: uppercase;*/
			letter-spacing: 0.08em;
			font-size: clamp(28px, 3vw, 45px);
			font-weight: 700;
			line-height: 1.25;
			margin:0 !important;
		}


/* ── Page title ── */
#page-title {
  background: #00bcd4;
  padding: 28px 20px;
  text-align: center;
}
#page-title h1 { color: #fff; font-size: 26px; letter-spacing: 1px; }

/* ── Layout shell ── */
.container_tab {
  display: flex;
  align-items: flex-start;
  gap: 0;
  max-width: 1200px;
  margin: 0 auto;
}

/* ═══════════════════════════════
   SIDEBAR
═══════════════════════════════ */
.sidebar {
  flex: 0 0 280px;
  width: 280px;
  min-width: 280px;
  background: #f4f4f4;
  border-right: 1px solid #ddd;
  /* FIX: proper sticky-scroll setup */
  position: sticky;
  top: 0;
  height: 100vh;
  overflow-y: auto;
  -webkit-overflow-scrolling: touch;
  overscroll-behavior: contain;
  padding-top: 10px;
  padding-bottom: 40px;
}

/* FIX: scroll hint — placed as a sticky bottom bar inside sidebar */
.sidebar-scroll-hint {
  display: none; /* shown only on mobile via media query */
  position: sticky;
  bottom: 0;
  left: 0;
  right: 0;
  background: linear-gradient(transparent, #f4f4f4 60%);
  padding: 10px 12px 6px;
  font-size: 11px;
  color: #777;
  text-align: right;
  pointer-events: none;
  z-index: 2;
}

/* ── Section header (non-clickable label) ── */
.sidebar-section-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 12px 10px 16px;
  font-size: 13px;
  font-weight: 700;
  color: #333;
  background: #e8e8e8;
  border-left: 3px solid #00bcd4;
  margin: 6px 0 2px;
  letter-spacing: 0.3px;
  cursor: default;
  user-select: none;
}

/* ── All sidebar buttons ── */
.sidebar button.tablink {
  display: flex;
  align-items: center;
  justify-content: space-between;
  width: 100%;
  background: none;
  border: none;
  border-left: 3px solid transparent;
  padding: 8px 12px 8px 20px;
  text-align: left;
  cursor: pointer;
  font-size: 13px;
  color: #333;
  line-height: 1.4;
  transition: background 0.2s, color 0.2s, border-color 0.2s;
  outline: none;
}
.sidebar button.tablink:hover {
  background: #e2f7fa;
  color: #00838f;
  text-decoration: none;
}
.sidebar button.tablink.active {
  background: #00bcd4;
  color: #fff;
  font-weight: 700;
  border-left-color: #007c8a;
}

/* FIX: nested list buttons get slightly more indent */
.sidebar ul {
  list-style: none;
  padding: 0;
  margin: 0 0 4px 0;
}
.sidebar ul li {
  padding: 0;
}
.sidebar ul li button.tablink {
  padding-left: 30px;
  font-size: 12.5px;
}

/* ── Arrow icon ── */
.arrow { display: none; }

/* ═══════════════════════════════
   CONTENT AREA
═══════════════════════════════ */
.content {
  flex: 1 1 0;
  min-width: 0;            /* FIX: prevent overflow in flex child */
  padding: 30px 36px 60px;
  overflow: visible;
}

/* ── Tab panels ── */
.tab-content { display: none; }
.tab-content.active { display: block; }

/* ── Typography ── */
.content h2, #three60-hp-root h2 {
  font-size: 20px !important;
  font-weight: 700;
  color: #00838f;
  border-bottom: 2px solid #00bcd4;
  padding-bottom: 10px;
  margin-bottom: 20px;
  line-height: 1.3;
}
.content h3 {
  font-size: 16px !important;
  font-weight: 700;
  margin: 20px 0 8px;
  line-height: 1.4;
}
.content h4 {
  font-size: 14px !important;
  font-weight: 700;
  margin: 14px 0 6px;
}
.content p {
  font-size: 14px;
  line-height: 1.7;
  margin-bottom: 12px;
  color: #222;
}
.content ul, .content ol {
  padding-left: 22px;
  margin-bottom: 12px;
}
.content ul li, .content ol li {
  font-size: 14px;
  line-height: 1.7;
  margin-bottom: 4px;
}
.content table {
  width: 100%;
  border-collapse: collapse;
  margin: 16px 0;
  font-size: 13px;
}
.content table td, .content table th {
  border: 1px solid #ccc;
  padding: 8px 12px;
  vertical-align: top;
}
.content table tr:first-child td {
  background: #e8f7f9;
  font-weight: 700;
}
.content a { color: #00838f; }
.content a:hover { color: #005f69; }

/* FIX: last-block spacing only inside content */
.content .tab-content:last-of-type > *:last-child {
  padding-bottom: 80px;
}

/* ═══════════════════════════════
   MOBILE  ≤ 768px
═══════════════════════════════ */
@media (max-width: 768px) {
  .container_tab {
    flex-direction: column;
  }

  /* FIX: sidebar becomes fixed-height scrollable strip on mobile */
  .sidebar {
    position: relative;   /* not sticky on mobile */
    flex: none;
    width: 100%;
    min-width: unset;
    height: auto;
    max-height: 220px;
    overflow-y: auto;
    border-right: none;
    border-bottom: 2px solid #00bcd4;
    padding-bottom: 0;
  }

  /* FIX: scroll hint works correctly inside the sidebar */
  .sidebar-scroll-hint {
    display: block;
  }

  .content {
    width: 100%;
    padding: 20px 16px 60px;
  }

  /* tighten nested indent a little on mobile */
  .sidebar ul li button.tablink {
    padding-left: 24px;
  }
}

/* ── Narrow phone extras (360–600 px) ── */
@media screen and (min-width: 360px) and (max-width: 600px) {
  body div.mm-dropdown ul li,
  body div.mm-dropdown div.textfirst {
    padding: 0 3px !important;
    width: 67px !important;
    height: 26px !important;
  }
}
@media screen and (min-width: 320px) {
  body .inp-num {
    width: 93px !important;
    height: 27px !important;
  }
}

/* ── Smart Doc section titles ── */
.smart-doc-terms p > strong:first-child,
.smart-doc-terms > div > p > strong {
  display: block;
  font-size: 15px;
  color: #00838f;
  margin: 18px 0 4px;
}

/* ── WhatSync section fix ── */
.sla-text { font-size: 14px; line-height: 1.7; }
.sla-text h3 { font-size: 16px; margin: 18px 0 8px; }
.sla-text h4 { font-size: 14px; margin: 14px 0 6px; }
.sla-text p  { margin-bottom: 10px; }
.sla-text ul { margin: 0 0 10px 18px; }
</style>
</head>
<body>

<section class="sms-privacy-archive-hero text-center w-100">
			<div class="container">
				<h1 class="sms-privacy-archive-hero-title" style="
    margin: auto;">Terms of service</h1>
			</div>
		</section>

<div class="container_tab">
  <div class="sidebar">
    <button class="tablink active" onclick="openTab(event, 'tab20')"><b>TERMS & CONDITIONS</b> <span class="arrow">►</span></button>
    <!-- Always Visible Nested List -->
    <ul style="list-style: none; padding-left: 20px; margin-top: 5px;">

      <li> <button class="tablink" id="tab-btn-21" onclick="openTab(event, 'tab21')">ACCEPTABLE USE OF POLICY<span class="arrow">►</span></button>
      </li>
      <li> <button class="tablink" id="tab-btn-2" onclick="openTab(event, 'tab2')">INTELLECTUAL PROPERTY RIGHTS <span class="arrow">►</span></button>
      </li>
      <li> <button class="tablink" id="tab-btn-7" onclick="openTab(event, 'tab7')">SECURITY OVERVIEW <span class="arrow">►</span></button>
      </li>
      <li> <button class="tablink" id="tab-btn-22" onclick="openTab(event, 'tab22')">DATA PROTECTION ADDENDUM <span class="arrow">►</span></button>
      </li>

    </ul>

    <button class="tablink"><b>TYPES OF SERVICES </b><span class="arrow" style="
    transform: rotate(90deg);">►</span></button>

    <ul>
      <li>
        <button class="tablink" onclick="openTab(event, 'tab1')"> AI AGENT <span class="arrow">►</span></button>
      </li>
      <li> <button class="tablink" onclick="openTab(event, 'tab4')"> RINGLESS VOICEMAL<span class="arrow">►</span></button></li>
      <li> <button class="tablink" onclick="openTab(event, 'tab5')"> CTI<span class="arrow">►</span></button></li>
      <li>
        <button class="tablink" onclick="openTab(event, 'tab6')"> LOCAL TIMEZONE FINDER <span class="arrow">►</span></button>
      </li>
      <li> <button class="tablink" onclick="openTab(event, 'tab8')"> EMAIL SYNC <span class="arrow">►</span></button></li>
      <li>

        <button class="tablink" onclick="openTab(event, 'tab9')"> EMAIL UNSUBSCRIBE/OPT-OUT<span class="arrow">►</span></button>
      </li>


      <li>
        <button class="tablink" onclick="openTab(event, 'tab10')"> WHATSSYNC <span class="arrow">►</span></button>
      </li>


      <li> <button class="tablink" onclick="openTab(event, 'tab12')"> HIGHLIGHTER <span class="arrow">►</span></button></li>


      <li> <button class="tablink" onclick="openTab(event, 'tab13')"> SMS SERVICE <span class="arrow">►</span></button></li>
      <li>
        <button class="tablink" onclick="openTab(event, 'tab14')"> LINE<span class="arrow">►</span></button>
      </li>
      <li>
        <button class="tablink" onclick="openTab(event, 'tab15')">InstantDocs <span class="arrow">►</span></button>
      </li>
      <li>
        <button class="tablink" onclick="openTab(event, 'tabca15')"> CALL ANCHOR <span class="arrow">►</span></button>
      </li>
      <li> <button class="tablink" onclick="openTab(event, 'tab16')"> WHATSAPP BUSINESS <span class="arrow">►</span></button></li>
      <li> <button class="tablink" onclick="openTab(event, 'tab17')"> MASS EMAIL<span class="arrow">►</span></button></li>
      <li> <button class="tablink" onclick="openTab(event, 'tab18')"> MERGE DUPLICATES <span class="arrow">►</span></button></li>
      <li><button class="tablink" onclick="openTab(event, 'tab19')"> VTM & VTP <span class="arrow">►</span></button></li>
      <li><button class="tablink" onclick="openTab(event, 'tab23')"> TEXTOLIC <span class="arrow">►</span></button></li>
    </ul>


    <!-- <button class="tablink" onclick="openTab(event, 'tab11')">360 NPO SERVICE <span class="arrow">►</span></button> -->

  </div>

  <div class="content">
    <div id="tab1" class="tab-content">
      <h2>AI AGENT SERVICE LEVEL AGREEMENT</h2>

      <p>This Service Level Agreement (SLA) is made between 360 Degree Cloud ("Provider," "We," or "Us") and ("Customer”, Client or "You") for the provision of AI Agent Service, as outlined below. By using our AI Agent service, the Customer agrees to the terms and conditions outlined in this Agreement.</p>
      <p>1. Definition</p>
      <p>“AI Agent” refers to the artificial intelligence-based system provided by 360 Degree Cloud designed to assist with customer interactions, data processing, automated responses, virtual assistance, and other AI-driven services. “Natural Language Processing (NLP) technology” is a field of artificial intelligence that enables computers to understand, interpret, and generate human language, encompassing tasks like sentiment analysis, machine translation, and text summarization. “Output” The output refers to the results or responses that the AI Agent provides based on the processed input. “Input” The input refers to the data or information that the AI Agent receives or processes.</p>
      <p>2. Scope of Services</p>
      <p>2.1 360 Degree Cloud AI Agent shall enable automated interactions with end users through voice and chat-based interfaces. 2.2 The AI Agent will leverage NLP technology to interpret and respond to customer inquiries in a conversational manner, improving the user experience. 2.3 The Customer may configure the AI Agent’s behaviors, responses, and personality to align with business needs, subject to the available features.</p>
      <p>3. Customer Responsibility</p>
      <p>3.1 Customers are responsible for any text, images, or other content you upload or submit to the AI (“Input”) as well as the text, images, or other content generated by the AI Agent based on your Input (“Output”). Customer will ensure that their use of the AI Agent, including Input and Output, complies with applicable law.
      <p><b>3.2 AI Features</b><br>
        The Services may include or integrate third-party artificial intelligence (<b>“AI”</b>) features or models (including but not limited to OpenAI’s ChatGPT or similar generative AI technologies) to provide text generation, predictive, analytical, or other automated functionalities (<b>“AI Features”</b>). The disclaimer made in clause <b>5.6</b> shall be applicable in all AI features.</p>

      <p><b>3.2.1 Nature of AI Outputs</b><br>
        The Client acknowledges and agrees that the AI Features generate responses based on algorithmic and probabilistic patterns derived from training data and user inputs. Such AI-generated content (<b>“AI Output”</b>) is produced automatically and may contain factual inaccuracies, omissions, or inappropriate information. The AI Output is not guaranteed to be accurate, complete, or free of error.</p>

      <p><b>3.2.2 Client Responsibility</b><br>
        The Client shall be solely responsible for: reviewing and independently verifying all AI Outputs before relying upon or using them; ensuring that the AI Output is appropriate and compliant with applicable laws and regulations; and refraining from using AI Outputs as the sole basis for critical, financial, legal, medical, or other professional decisions.</p>

      <p><b>3.2.3 Disclaimer of Liability</b><br>
        The Company makes no representations or warranties, express or implied, regarding the accuracy, reliability, or suitability of any AI Output. The AI Features are provided <b>“as is”</b> and <b>“as available”</b>. To the fullest extent permitted by applicable law, the Company shall not be liable for any claim, loss, damage, or liability arising out of or in connection with: (a) any Client Input or prompt submitted to the AI Features; (b) any use or reliance upon AI Outputs by the Client or its users; or (c) any error, omission, or result generated by the AI Features.</p>

      <p><b>3.2.4 Third-Party Technology</b><br>
        Where the AI features are provided by third-party providers (such as OpenAI), such features shall also be governed by the respective provider’s terms of use and privacy policy, and the Client agrees to comply with the same. The Company disclaims responsibility for the operation, performance, or outputs of any third-party AI technology.</p>

      <p> <strong>3.3</strong> The Customer shall ensure that any content used within the AI Agent’s interactions is lawful, does not infringe on third-party intellectual property rights, and is not defamatory, offensive, or in violation of any laws. </p>
      <p><strong>3.4 </strong>The Customer is solely responsible for obtaining all necessary consents from individuals whose data is processed by the AI Agent, including explicit consent for recording conversations and the processing of personal data.</p>
      <p><strong>3.5 AI Usage & Pricing Terms- </strong>Client acknowledges and agrees that pricing for AI-powered services is variable, consumption-based, and dependent upon evolving third-party provider pricing structures, token usage, model selection, infrastructure utilization, support scope, operational requirements, and related service delivery costs.<br /><br />
        Accordingly, Client authorizes 360 Degree Cloud to invoice for such services based on the applicable usage, commercial structure, and prevailing pricing methodology in effect at the relevant billing period. All invoices issued by 360 Degree Cloud shall be deemed accurate, valid, and accepted unless disputed by Client in writing within seven (7) days of the applicable invoice date with reasonable documentary justification.<br /><br />
        Continued use of the services following any invoice, pricing update, renewal, or billing cycle shall constitute Client’s acknowledgment and acceptance of the applicable pricing and charges. Client shall not withhold, delay, deny, or dispute payment solely on the basis that pricing was variable, revised, usage-dependent, or not fixed in advance, provided such pricing was commercially reasonable in relation to the services consumed and delivered.</p>
    </div>
    <div id="tab2" class="tab-content">
      <h2>INTELLECTUAL PROPERTY RIGHTS</h2>

      <p>1. Property Rights</p>
      <p style="color: #000000;">Not with standing anything herein to the contrary, Customer acknowledge that 360 Degree Cloud owns the Software and Licensed Property and may own or otherwise control certain generic or proprietary information, inventions, software, strategies, processes, know-how, trade secrets, improvements, other intellectual property and other assets that are owned or controlled by 360 Degree Cloud as of the Effective Date or that are acquired or developed by 360 Degree Cloud after the Effective Date and independently of 360 Degree Cloud’s performance of Services under this Agreement or any Appendix and without access to, or use of, any Customer’s Confidential Information (collectively “360 Degree Cloud Property''). Customer and 360 Degree Cloud agree that any 360 Degree Cloud Property or improvements, modifications or enhancements specific thereto that are developed by 360 Degree Cloud are the sole and exclusive property of 360 Degree Cloud. To the extent that any Services IP provided by 360 Degree Cloud or any of its Affiliates or representatives to Customer or its Affiliates hereunder consists of 360 Degree Cloud Property, 360 Degree Cloud grants to Customer and its Affiliates a non-exclusive, non-transferable, non-sublicensable licence to use the Licensed Property solely for Customer’s and its Affiliates’ internal business purposes for the duration of the subscription Term, terminating automatically on the expiry or termination of the Agreement. For the avoidance of doubt, the Parties agree that Customers Confidential Information and any data or information generated, conceived or derived from Customer’s Confidential Information shall not be 360 Degree Cloud Property.
      </p>

      <p style="color: #000000;">All original works of authorship which are generated by 360 Degree Cloud (solely or jointly with others) within the scope of any Appendix and which are protectable by copyright shall be deemed “works made for hire,” as that term is defined in the United States Copyright Act, 17 U.S.C. § 101 except to the extent that they consist of 360 Degree Cloud Property or any rights therein that have been reserved by third parties, in each case, as permitted by and in accordance with, this Section.</p>

      <p>2. Trade Secrets.</p>
      <p style="color: #000000;">Customers agree that the Software and all associated trade secrets, including but not limited to the Licensed Property, its configurations, architecture, communications and
        performance benchmarks, are the exclusive property of 360 Degree Cloud. Customer agrees not to disclose, disseminate, transmit via any medium whatsoever, or make available the Software, Licensed Property or any associated trade secrets to any third party without 360 Degree Cloud prior written consent.</p>
      <p>3. Provision of Licensed Property</p>
      <p style="color: #000000;">Subject to the observance by Customer of the terms and conditions of this Agreement, 360 Degree Cloud hereby grants to Customer and its Affiliates a perpetual, non-exclusive, non-transferable license to use the Licensed Property solely for Customer and its Affiliates’ b usiness purposes.</p>
      <p style="color: #000000;">The availability of the Licensed Property is ninety-nine percent (99%) per calendar year (“Availability”), excluding scheduled updating and scheduled maintenance work (“Scheduled Maintenance”). In addition to all other Customer’s termination rights set forth herein, if the downtime, other than Scheduled Maintenance exceeds the guaranteed Availability level, then 360 Degree Cloud agrees to credit towards the next invoice’s fees a prorated amount equal to the fees attributable to such downtime (an “Availability Credit”). 360 Degree Cloud will endeavor to provide Customers with a calendar of all Scheduled Maintenance. Should a calendar not be available, 360 Degree Cloud shall inform the Customer of the Scheduled Maintenance times at least 7 days prior to the start of Scheduled Maintenance via email or any other electronic method of communication. Scheduled Maintenance will be carried out by 360 Degree Cloud during non-business hours of the Customer. 360 Degree Cloud’s right to take suitable measures at any time to defend against specific risks to the security and integrity of the systems, even without notice, remains unaffected. When calculating Availability, restrictions of Availability due to such security measures and/or Scheduled Maintenance are to be deducted.</p>
      <p style="color: #000000;">360 Degree Cloud shall provide support services to Customer when the Licensed Property does not fulfill the agreed functions. The Customer shall report function failures, disruptions or impairments of the Licensed Property to 360 Degree Cloud as precisely as possible, whether verbally or in writing via e-mail. 360 Degree Cloud carries out support services during the customer business hours.</p>


    </div>
    <div id="tab3" class="tab-content">
      <h2>360 DEGREE TEXTOLIC SERVICE LEVEL AGREEMENT</h2>

      <p align="justify"><span style="color: #000d25;"><span style="font-size: medium;"><span lang="en-US">This Service Level Agreement (SLA) is made between 360 Degree Cloud ("Provider," "We," or "Us") and (“Customer”, "Client" or "You") for the provision of Textolic Services, as outlined below.</span></span></span></p>
      <p align="justify"><span style="color: #000d25;"><span style="font-size: medium;"><span lang="en-US">By using our Textolic services, the Customer agrees to the terms and conditions outlined in this Agreement. </span></span></span></p>

      <ol style="padding: 0px;">
        <li>
          <p align="justify"><span style="color: #000d25;"><span style="font-size: medium;"><b>Definition </b></span></span></p>
        </li>
      </ol>
      <p align="justify"><span style="color: #000000;">“<span style="font-size: medium;"><span lang="en-US"><i><b>Textolic service”</b></i></span></span></span><span style="color: #000000;"><span style="font-size: medium;"><span lang="en-US"> is a comprehensive communication solution that enhances customer engagement within Salesforce. This application directly integrates SMS, WhatsApp, and other messaging platforms into Salesforce, enabling businesses to manage communications efficiently.</span></span></span></p>
      <p align="justify">“<span style="font-size: medium;"><span lang="en-US"><i><b>Salesforce Platform”</b></i></span></span><span style="font-size: medium;"><span lang="en-US"> refers to the third-party platform on which the Company’s application runs. 360 Degree Cloud does not own, control, or operate the Salesforce Platform.</span></span></p>

      <ol style="padding: 0px;" start="2">
        <li>
          <p align="justify"><span style="color: #000000;"><span style="font-size: medium;"><b>Account Registration and Usage</b></span></span></p>
        </li>
      </ol>
      <p align="justify"><span style="color: #000000;"><span style="font-size: medium;"><span lang="en-US">2.1 Customers are responsible for maintaining the confidentiality of their account credentials.</span></span></span></p>
      <p align="justify"><span style="color: #000000;"><span style="font-size: medium;"><span lang="en-US">2.2 Customer agree to use the service in compliance with applicable laws and regulations.</span></span></span></p>

      <ol style="padding: 0px;" start="3">
        <li>
          <p align="justify"><span style="color: #000000;"><span style="font-size: medium;"><b>Message Limits and Delivery</b></span></span></p>
        </li>
      </ol>
      <p align="justify"><span style="color: #000000;"><span style="font-size: medium;"><b>3.1 </b></span></span><span style="color: #000000;"><span style="font-size: medium;">The service may have limits on the number of messages that can be sent or received, depending on the plan selected.</span></span></p>
      <p align="justify"><span style="color: #000000;"><span style="font-size: medium;"><span lang="en-US">3.2 Textolic makes no guarantees regarding the delivery of messages, as factors beyond our control (e.g., network issues, carrier limitations) can affect message delivery.</span></span></span></p>

      <ol style="padding: 0px;" start="4">
        <li>
          <p align="justify"><span style="color: #000000;"><span style="font-size: medium;"><b>Prohibited Use</b></span></span></p>
        </li>
      </ol>
      <p align="justify"><span style="color: #000000;"><span style="font-size: medium;"><span lang="en-US">The user shall be prohibited from sending unsolicited marketing messages, violating any applicable laws or third-party rights and interfering with or disrupting the services or networks connected to the service.</span></span></span></p>

    </div>
    <div id="tab4" class="tab-content">
      <h2>RINGLESS VOICEMAL SERVICE LEVEL AGREEMENT</h2>

      <p>This Service Level Agreement (SLA) is made between 360 Degree Cloud ("Provider," "We," or</p>
      <p>"Us") and ("Customer&rdquo;, Client or "You") for the provision of RVM Service, as outlined below.</p>
      <p>By using our RVM service, the Customer agrees to the terms and conditions outlined in this Agreement.</p>
      <p>1. Definitions</p>
      <p>&ldquo;RVM Services&rdquo; refers to the Recorded Voice Messaging service provided by 360 Degree Cloud, which allows for the delivery of pre-recorded voice messages to a list of recipients through automated systems, including but not limited to messaging campaigns, appointment reminders, notifications, and other customer communications.</p>
      <p>&ldquo;Salesforce Platform&rdquo; refers to the third-party platform on which the Company&rsquo;s application runs. 360 Degree Cloud does not own, control, or operate the Salesforce Platform.</p>
      <p>2. Scope of Services</p>
      <p>360 Degree Cloud shall provide the Customer with access to the Recorded Voice Messaging (RVM) services.</p>
      <p>2.1 The RVM Services are designed to integrate with Salesforce CRM and other customer relationship management systems as required by the Customer. This integration allows for enhanced targeting, reporting, and management of campaigns within the Customer&rsquo;s existing workflow.</p>
      <p>2.2 The ability to deliver pre-recorded voice messages to multiple recipients via automated systems. These messages may include appointment reminders, notifications, alerts, surveys, and other customer communications.</p>
      <p>2.3 The ability to create, configure, and execute customizable voice messaging campaigns for specific purposes, including but not limited to marketing campaigns, reminders, or information dissemination.</p>
      <p>2.4 The ability to personalize voice messages by incorporating recipient-specific data such as name, location, or other custom attributes. 3. Customer Responsibilities</p>
      <p>3.1 The Customer agrees to comply with all applicable laws and regulations, including but not limited to the Telephone Consumer Protection Act (TCPA), the National Do Not Call Registry (NDNC), and any other local, state, and national regulations governing the use of</p>
      <p>automated voice messaging systems.</p>
      <p>3.2 The Customer is responsible for obtaining and maintaining proper consent from recipients prior to initiating any recorded or automated calls, as required by applicable regulations.</p>
      <p>4. Prohibitions</p>
      <p>4.1 The Customer agrees not to use the RVM Services for any unlawful, fraudulent, or malicious activity, including violating telecommunications laws, data protection laws, or the rights of third parties.</p>
      <p>4.2 The customer shall not use the Services in a manner that could damage, disrupt, or interfere with the functionality or security of the Services, or the infrastructure or network used to provide the Services.</p>
      <p>4.3 The customer agrees not to use the Services to deliver unsolicited or unauthorized communications (e.g., spam, robocalls, or telemarketing calls in violation of applicable laws).</p>



    </div>
    <div id="tab5" class="tab-content">
      <h2>CTI SERVICE LEVEL AGREEMENT</h2>

      <p>This Service Level Agreement (SLA) is made between 360 Degree Cloud ("Provider," "We," or "Us") and (&ldquo;Customer&rdquo;, "Client" or "You") for the provision of CTI Services, as outlined below.</p>
      <p>By using our CTI services, the Customer agrees to the terms and conditions outlined in this Agreement.</p>
      <p>1. Definition</p>
      <p>Computer Telephony Integration (CTI): CTI is a technology that integrates telecommunication services with computer systems and software applications. It enables users to integrate their telephone systems with Salesforce, allowing them to manage calls and customer interactions directly from their Salesforce environment.</p>
      <p>&ldquo;Salesforce Platform&rdquo; refers to the third-party platform on which the Company&rsquo;s application runs. 360 Degree Cloud does not own, control, or operate the Salesforce Platform.</p>
      <p>2. Service provided</p>
      <p>The 360 Degree Cloud offers a CTI solution integrating telephony systems with customer relationship management (CRM) software. The Services include the Integration of telephone systems with CRM platforms, Automated call management features (e.g., call logging, screen pop-ups), Real-time reporting and analytics, Customizable call routing and features, and Ongoing maintenance and support.</p>
      <p>SMS App CTI Credit Usage Terms</p>
      <p>No Expiration &amp; Service Conditions: Purchased credits do not expire and may be used at your convenience. No refunds will be issued for unused credits. In the event of nonpayment, partial payment, or delayed payment, 360 Degree Cloud reserves the right to disconnect services and recover the outstanding amount without prior notice. Interest of 1% per month, compounded half-yearly, will be charged on delayed payments.</p>
      <p>Dispute Resolution: You must notify 360 Degree Cloud in writing within 15 days of the billing date for any fee/rate dispute. After this period, the invoice will be deemed accepted. You must act in good faith and cooperate diligently with 360 Degree Cloud to resolve the issue. We will not charge late fees or suspend services for unpaid disputed fees unless you fail to cooperate, or the dispute is deemed unreasonable or not in good faith. It is the customer's responsibility to verify invoices before payment. Once invoice term of 15 days is expired, it cannot be disputed or adjusted against future payments.</p>
      <p>Itemized Billing Reports: Requests for detailed usage reports beyond 60 days from the initial share date will not be entertained to preserve data integrity.</p>
      <p>Usage Clarification: Refer to the usage summary shared via email for clarification.</p>
      <p>Fees: You agree to pay the fees outlined in the appendix. If you use services not listed in the appendix, you will be charged at the applicable rates communicated via email from time to time.</p>
      <p>Taxes &amp; Surcharges: You agree to pay all applicable taxes, communication surcharges (e.g., pass-through carrier fees), 10DLC charges, fines, and penalties incurred due to your use of our services. These will be listed as separate line items on your invoice for transparency.</p>
      <p>
        A number replacement fee, as set out in the Acceptable Use Policy and the Customer’s Order Form, may apply where a telecom resource is suspended by an access provider or regulator and a replacement must be provisioned.</p>
      <p>Credit Deduction Policy:</p>
      <p>1 call credit per call up to 60 seconds.</p>
      <p>Special rates will be apply for service usage outside the specified country or service usage outside scope of non-provided rates.</p>
      <p>Security &amp; Liability Disclaimer</p>
      <p>Client&rsquo;s Responsibility for Security: You are solely responsible for securing your systems. The application is listed on Salesforce, and your data remains within your Salesforce environment. 360 Degree Cloud does not access or store your data.</p>
      <p>No Liability for System Breaches: We are not responsible for any security breaches or associated costs/fraudulent activities in your systems.</p>
      <p>No Security Training Provided: 360 Degree Cloud does not provide technical training for preventing breaches. It is your sole responsibility to implement and maintain your system&rsquo;s security.</p>
      <p>Client Accountability: Per our contract, the Client is solely responsible for all use of the Services under their account, including securing their environment. This is a reasonable and enforceable clause.</p>
      <p>By continuing to use our services, you agree to these Terms of Service, including your obligations regarding usage, payments, disputes, system security, and service conditions.</p>


    </div>
    <div id="tab6" class="tab-content">
      <h2>LOCAL TIMEZONE FINDER SERVICE LEVEL AGREEMENT</h2>

      <p>This Service Level Agreement ("SLA") is made between 360 Degree Cloud ("Provider," "We," or "Us") and ("Customer," "Client," or "You") for the provision of Local Timezone Finder service as outlined below.</p>
      <p>By using our Local Timezone Finder service, the Customer agrees to the terms and conditions outlined in this Agreement.</p>
      <p>1. Definitions</p>
      <p>"Local Time Zone Finder Service" is a tool or software solution integrated in Salesforce, designed to assist businesses and organizations in optimizing their scheduling, communication, and outreach by identifying and aligning with the local time zones of their customers, clients, or team members.</p>
      <p>"Salesforce Platform" refers to the third-party platform on which the Company&rsquo;s application runs. 360 Degree Cloud does not own, control, or operate the Salesforce Platform.</p>
      <p>2. Scope of Services</p>
      <p>2.1 360 Degree Cloud agrees to provide the Local Timezone Finder Service, enabling businesses to optimize their scheduling, outreach, and communication efforts by leveraging time zone-based scheduling. This service aims to reduce meeting cancellations, enhance user engagement, and ensure that interactions occur during optimal times for all parties involved. The Service will automatically detect and adjust for the recipient's local time zone, improving the overall efficiency and success of communications.</p>
      <p>2.2 The service is designed to help businesses build a positive brand image by respecting and accommodating customers' non-working hours. By adhering to the time zone of each customer or client, businesses can create a more considerate and respectful customer experience. This will lead to improved customer relationships, greater customer satisfaction, and enhanced brand reputation.</p>
      <p>2.3 The service provides alignment of outreach activities, such as marketing campaigns, sales calls, and customer communications, with the recipient&rsquo;s local time, the Local Timezone Finder Service maximizes the effectiveness of these efforts. The Service helps businesses increase Return on Investment (ROI) and drive higher conversion rates by ensuring that all communications occur at times that are most likely to result in engagement. This time-sensitive approach increases the likelihood of success in business outreach efforts.</p>
      <p>3. Customer Responsibilities</p>
      <p>3.1 Customer agrees to provide accurate, complete, and up-to-date time zone information for the contacts you wish to schedule communications with.</p>
      <p>3.2 Customer shall not use the Service for unlawful purposes and shall use the Service in accordance with applicable local laws, regulations, and industry standards.</p>

    </div>
    <div id="tab7" class="tab-content">
      <h2>SECURITY OVERVIEW</h2>
      <p>This Security Overview (&ldquo;Security Overview&rdquo;) is incorporated into and made a part of the agreement between 360 degree and Customer covering Customer&rsquo;s use of the Services (as defined below), including any terms applicable to the processing of personal data set forth therein (collectively, &ldquo;Agreement&rdquo;). Any capitalized term used but not defined has the meaning provided in the Agreement.</p>
      <p>1. Definitions</p>
      <p>&ldquo;Customer Data&rdquo; means any data (a) provided by Customer, or any user of the Services, including via any products and services provided by Customer, to 360 Degree in connection with Customer&rsquo;s use of the Services or (b) generated for Customer&rsquo;s use as part of the Services.</p>
      <p>&ldquo;Segment Services&rdquo; means any services or application programming interfaces branded as &ldquo;Segment&rdquo;, &ldquo;360 Degree Segment&rdquo;, or &ldquo;360 Degree Engage&rdquo;.</p>
      <p>&ldquo;SendGrid Services&rdquo; means any services or application programming interfaces branded as &ldquo;SendGrid&rdquo; or &ldquo;360 Degree SendGrid&rdquo;.</p>
      <p>&ldquo;Services&rdquo; means, collectively, the 360 degree Services (as defined below), SendGrid Services, and Segment Services.</p>
      <p>&ldquo;360 DEGREE Services&rdquo; means any services or application programming interfaces branded as &ldquo;360 DEGREE&rdquo;.</p>
      <p>2. Purpose</p>
      <p>This Security Overview describes 360 DEGREE&rsquo;s security program, including 360 Degree&rsquo;s security certifications and self-attestations and technical and organizational security controls to protect in accordance with industry best practices. As such, 360 Degree reserves the right to update this Security Overview from time to time; provided, This Security Overview does not apply to any (a) Services that are identified as alpha, beta, not generally available, limited release, developer preview, or any similar Services offered by 360 DEGREE or (b) any services provided by telecommunications providers.</p>
      <p>3. People Security and Onboarding</p>
      <p>360 DEGREE (a) maintains comprehensive policies, procedures, and controls that are regularly updated to align with industry best practices and (b) makes such policies and procedures readily accessible to all 360 degree employees. All 360 degree employees are subject to the following minimum security measures:</p>
      <p>(i) Performance of a background check that is administered by a recognized third-party background check provider on all new 360 degree employees prior to hiring in accordance with applicable local laws, including education and employment verification and reference checks, and where permitted by local law and applicable to the job role, criminal, credit, and right-to-work verification;</p>
      <p>(ii) Execution of a confidentiality agreement;</p>
      <p>(iii) Annual completion of mandatory security and privacy training, with extended deadlines available for 360 degree employees on leaves of absence;</p>
      <p>(iv) Maintenance and continuous monitoring of an anonymous hotline for 360 degree employees to report any unethical behavior where anonymous reporting is legally permitted;</p>
      <p>(v) Raising awareness of emerging security threats through various mediums, including simulated security-related incidents (e.g. phishing campaigns); and</p>
      <p>(vi) Controlled and limited access of Customer Data strictly to authorized 360 degree employees only in accordance with Section 10.1 (Provisioning Access) and 360 degree&rsquo;s internal standard operating procedures governing such Customer Data&rsquo;s processing and protection.</p>
      <p>4. Physical Security</p>
      <p>360 degree maintains strong physical security controls at its offices, which are guided by a physical security policy that is regularly reviewed. 360 degree&rsquo;s physical security policy establishes baseline physical security controls necessary for preventing unauthorized access to 360 degree&rsquo;s offices and for the safeguarding of 360 degree&rsquo;s physical assets. 360 degree&rsquo;s physical security policy covers areas such as access controls, employee and contractor badge requirements, securing IT equipment, and after hours monitoring.</p>
      <p>5. Third Party Vendor Management</p>
      <p>360 DEGREE may use third party vendors to provide the Services. 360 degree has implemented a comprehensive vendor management program that applies the appropriate technical and organizational security controls that is proportional to the type of service the third-party vendor is providing and any associated security-related risks. Prospective third-party vendors are thoroughly vetted through a process that ensures they comply with, and will continue to comply with, 360 DEGREE&rsquo;s rigorous confidentiality, security, and privacy requirements for the duration of their relationship with 360 DEGREE. For the avoidance of doubt, telecommunication providers are not considered third-party vendors or sub-processors of 360 DEGREE. 360 Degree shall not be held liable for any security breaches or incidents occurring as a result of actions or failures on the part of third parties. Furthermore, 360 Degree&rsquo;s liability is limited to the services provided as a native-built application. The customer acknowledges that 360 Degree is solely responsible for the performance of its native application and disclaims responsibility for any security risks arising from third-party services or any external factors beyond the control of 360 Degree.</p>
      <p>6. Security Certifications and Attestations</p>
      <p>360 DEGREE holds the following security-related certifications and attestations: Like SOC 2 Type II, ISO 27001, CMMI Level 5, HIPPA etc etc.</p>
      <p>7. Access Controls</p>
      <p>7.1 Provisioning Access. 360 degree follows the principles of least privilege through a team-based access control mechanism when provisioning system access to minimize the risk of unauthorized access or any breach. 360 degree employees&rsquo; access to Customer Data must be approved before it is granted and is restricted based on if their job role or job responsibilities specifically require it. Access rights to the production environment of the Services that are not time-based are reviewed at least
        quarterly. An employee&rsquo;s or contractor&rsquo;s access to Customer Data is promptly removed upon termination of employment. In order to access the production environment of the Services, an authorized user must have a unique username and password and multi-factor authentication enabled. Before an authorized user is granted access to the production environment of the Services, access must be approved by management. Additionally, the authorized user is required to complete internal training for such access, including training on the proper use of the relevant systems that interface with or permit access to the production environment of the Services. 360 degree logs high risk actions and changes in the production environment of the Services. 360 degree leverages automation to identify any deviation from internal technical standards that could indicate anomalous and/or unauthorized activity to raise an alert within minutes of a configuration change.</p>
      <p>7.2 Password Controls. At a minimum, 360 degree's password management policy for 360 degree employees follows the guidance and requires the use of longer character lengths, special characters, and multi-factor authentication. Additionally, when a customer logs into its account, 360 degree hashes the credentials of the user before it is stored. A customer must also require its users to add another layer of security to their account by using two-factor authentication (2FA).</p>
      <p>8. Vulnerability Management</p>
      <p> 360 DEGREE maintains controls and policies to mitigate the risk of security vulnerabilities in a measurable time frame that balances risk and the business and operational requirements. 360 DEGREE uses third-party tooling to conduct vulnerability scans regularly to assess vulnerabilities in 360 DEGREE&rsquo;s hosting environment and corporate systems. Critical software patches are evaluated, tested, and applied proactively. Operating system patches are applied through the regeneration of a base virtual-machine image and deployed to all nodes in the 360 DEGREE cluster over a predefined schedule. For high-risk patches, 360 DEGREE will deploy directly to existing nodes through internally developed orchestration tools.</p>
      <p>9. Penetration Testing</p>
      <p> 360 DEGREE performs penetration tests and engages independent, recognized third parties to conduct application-level penetration tests. Security threats and vulnerabilities that are detected are prioritized, triaged, and remediated promptly. Additionally, 360 DEGREE maintains a Bug Bounty Program through Bug Crowd, which allows independent security researchers to report security threats and vulnerabilities on an ongoing basis.</p>
      <p>10. Security Incident Management</p>
      <p>10.1 Prevention Measures. 360 degree maintains security incident management policies and procedures in accordance with NIST SP 800-61. 360 DEGREE&rsquo;s Security Incident Response Team (T-SIRT) assesses relevant security threats and vulnerabilities and establishes appropriate remediation and mitigation actions. 360 DEGREE retains security logs for one hundred and eighty (180) days. Access to these security logs is limited to T-SIRT. 360 DEGREE utilizes third-party tools to detect, mitigate, and prevent Distributed Denial of Service (DDoS) attacks.</p>
      <p>10.2 Incident Response. 360 DEGREE will promptly investigate a Security Incident upon discovery (as defined in the Agreement). To the extent permitted by applicable law or regulation, 360 DEGREE will notify Customer of a Security Incident in
        accordance with the Agreement. Security Incident notifications will be provided to Customer via email to the email address designated by Customer in its account. 360 DEGREE has a defined set of policies, procedures, standards, and tooling that guide its subsequent responses, with adherence to applicable law or regulation. This includes customer notifications where mandated, coordination with law enforcement, and declarations to applicable privacy and other regulatory bodies where appropriate.</p>
      <p>11. Resilience and Service Continuity</p>
      <p>11.1 Resilience. 360 Degree utilizes multiple geographically diverse regions within its infrastructure providers and has configured multiple fault-independent availability zones within each of those regions to ensure that a failure in any single data center does not affect the availability of the Services. This allows 360 Degree to detect and route around issues experienced by hosts or even whole data centers in real time and employ orchestration tooling that is able to regenerate hosts, building them from the latest backup.</p>
      <p>11.2 Service Continuity. 360 DEGREE leverages specialized tools available within the hosting infrastructure of the Services to monitor server performance, data, and traffic load capacity within each availability zone and colocation data center. If suboptimal server performance or overloaded capacity is detected on a server within an availability zone or colocation data center, these specialized tools increase the capacity or shift traffic to relieve any suboptimal server performance or capacity overload. 360 DEGREE is also immediately notified in the event of any suboptimal server performance or overloaded capacity.</p>
    </div>
    <div id="tab8" class="tab-content">
      <h2>EMAIL SYNC SERVICE LEVEL AGREEMENT</h2>

      <p>This Service Level Agreement (SLA) is made between 360 Degree Cloud ("Provider," "We," or "Us") and ("Customer&rdquo;, Client or "You") for the provision of Email Sync Services, as outlined below.</p>
      <p>By using our Email Sync services, the Customer agrees to the terms and conditions outlined in this Agreement.</p>
      <p>1. Definition</p>
      <p>&ldquo;Email Sync&rdquo; is a service provided by 360 Degree that integrates with platforms like Salesforce, allowing for automatic synchronization of emails, tasks, and calendars, creating a comprehensive view of customer interactions.</p>
      <p>&ldquo;Salesforce Platform&rdquo; refers to the third-party platform on which the Company&rsquo;s application runs. 360 Degree Cloud does not own, control, or operate the Salesforce Platform.</p>
      <p>2. Account Registration and Security</p>
      <p>To use the Email Sync Service, the Customer may need to register for an account with 360 Degree. Customers are responsible for maintaining the confidentiality of their account credentials (such as email login details) and agree to notify us immediately if they suspect any unauthorized use of their account.</p>
      <p>3. Customer&rsquo;s Responsibilities</p>
      <p>3.1 Customer agrees to use the services in a manner provided by the applicable law and as per the terms of the service.</p>
      <p>3.2 Customer agrees not to use the Service for illegal, fraudulent, or harmful purposes, including spamming or sending unsolicited emails.</p>
      <p>4. Third Party</p>
      <p>The Email Sync Service may interact with third-party email providers (e.g., Gmail, Outlook). By using the Service, you acknowledge and agree to the third-party terms of service for these providers. 360 Degree is not responsible for the functionality, availability, or security of third-party services. Customer must comply with all third-party terms of service related to your email account(s).</p>
      <p>5. Maintenance</p>
      <p>While 360 degree strives to provide uninterrupted access to the Email Sync Service, we cannot guarantee that the Service will always be available without interruption or errors. The Service may be temporarily unavailable due to maintenance, technical issues, or other operational reasons. 360 degree will notify you in advance whenever possible.</p>
      <p>360 Degree is not responsible for any disruptions in service, loss of data, or any other issues caused by technical problems or outages beyond our control.</p>
    </div>
    <div id="tab9" class="tab-content">
      <h2>EMAIL UNSUBSCRIBE/OPT-OUT SERVICE LEVEL AGREEMENT</h2>

      <p>This Service Level Agreement (SLA) is made between 360 Degree Cloud ("Provider," "We," or "Us") and ("Customer&rdquo;, Client or "You") for the provision of Email Unsubscribe/ Opt Out service, as outlined below.</p>
      <p>By using our Email Unsubscribe/ Opt Out service, the Customer agrees to the terms and conditions outlined in this Agreement.</p>
      <p>1. Definition</p>
      <p>"Email Unsubscribe/Opt-Out Service" refers to the integrated solution within Salesforce that enables efficient management, tracking, and processing of unsubscribe or opt-out requests from recipients of email communications, ensuring compliance with relevant laws and regulations such as CAN-SPAM Act, GDPR, and other email marketing standards.</p>
      <p>"Salesforce Platform" refers to the third-party platform on which the Company&rsquo;s application runs. 360 Degree Cloud does not own, control, or operate the Salesforce Platform.</p>
      <p>"Opt-Out" refers to the action taken by a recipient to unsubscribe or stop receiving further communications from an organization, often through clicking a link or button in an email campaign.</p>
      <p>"Unsubscribe Page" refers to a page provided by 360 Degree Cloud to customize the recipient's unsubscribe experience, allowing users to opt-out of receiving further communications, with branding and customization options available for the customer.</p>
      <p>"Analytics Dashboard" is a feature of the Service that provides detailed metrics and insights into the unsubscribe process, including the reasons for unsubscribing, trends, and other analytics to help improve future campaigns.</p>
      <p>"Service Downtime" refers to a period when the Service is unavailable due to technical issues, maintenance, or other reasons.</p>
      <p>2. Scope of Service</p>
      <p>2.1 The Service provides an easy, single-click option for recipients to opt-out from email communications.</p>
      <p>2.2 Customers can personalize the unsubscribe page with your brand's logo, colors, and design elements, ensuring a seamless user experience.</p>
      <p>2.3 The Service allows the customer to capture reasons why recipients opt out of your email campaigns. This data can be used to improve content or identify areas of low value.</p>
      <p>2.4 The Service includes an analytical dashboard where the Customer can monitor unsubscribe rates, track reasons for unsubscribes, and gain insights to refine future email campaigns.</p>
      <p>3. Customer Responsibilities</p>
      <p>3.1 Customer shall be responsible for ensuring that all information provided in connection with the Service (including email lists and preferences) is accurate, current, and complete.</p>
      <p>3.2 Customers agree to use the Service in compliance with all applicable laws, including data protection and privacy laws, and ensure that their email campaigns respect the rights of recipients to opt-out and manage their email preferences.</p>
      <p>3.3 Customer will use the Service only to process legitimate opt-out requests and will not use the Service for any illegal or unethical purposes, including sending unsolicited marketing communications.</p>
      <p>4. Customization and Branding</p>
      <p>4.1 You can customize the unsubscribe page to reflect your organization&rsquo;s branding, ensuring that the design aligns with your company's aesthetics and enhances the user experience.</p>
      <p>4.2 You agree that any custom branding will comply with our guidelines and will not violate any third-party intellectual property rights.</p>
      <p>5. Service Liability</p>
      <p>5.1 360 Degree Cloud agrees to make reasonable efforts to ensure that opt-out requests are processed accurately.</p>
      <p>5.2 We strive to maintain the Service&rsquo;s availability, but we cannot guarantee uninterrupted access. In the event of downtime or issues with the Service, we will work promptly to resolve the matter.</p>



    </div>
    <div id="tab10" class="tab-content">
      <h2>WHATSSYNC SERVICE LEVEL AGREEMENT</h2>

      <style>
        .sla-text {
          color: #000;
          font-family: Arial, serif;
          font-size: small;
          line-height: 1.5;
        }

        .sla-text h3,
        .sla-text h4 {
          margin: 14px 0 8px;
        }

        .sla-text p {
          margin: 0 0 10px;
        }

        .sla-text ul {
          margin: 0 0 10px 18px;
        }
      </style>

      <div class="sla-text" lang="en-GB">
        <p>This Service Level Agreement (SLA) is made between 360 Degree Cloud ("Provider," "We," or "Us") and ("Customer”, Client or "You") for the provision of WhatsApp Personal Sync Services, as outlined below.</p>

        <p>By using our WhatsApp Personal Sync services, the Customer agrees to the terms and conditions outlined in this Agreement.</p>

        <p>The Terms of Use (“Terms”) set out herein shall apply to the WhatsApp services (“Services”) being procured by the Customer under an order form/ purchase order (“Order Form”) executed between the Customer and 360 Degree. It is understood and acknowledged that the Services are a solution owned and controlled by Meta Platforms Ireland, formerly known as Facebook Ireland Limited (“Meta Platforms”). It is further understood that the Customer has subscribed to the Services, the pricing, payment terms and duration of such service subscription as detailed in the Customer’s Order Form.</p>

        <h3>1. Definition</h3>

        <p><strong>“Customer”</strong> shall mean the entity or person availing the services under the agreement.</p>

        <p><strong>“WhatsApp Personal Sync Service”</strong> WhatsApp Personal Sync is a technology solution that enables users to synchronize and integrate conversations, media files, and data from their standard individual WhatsApp accounts with external systems like CRM platforms (particularly Salesforce) or across multiple devices.</p>

        <p>Unlike WhatsApp Business API solutions, WhatsApp Personal Sync works with regular personal WhatsApp accounts and allows Customers to:</p>

        <p>● Transfer selected WhatsApp messages and attachments to business systems</p>
        <p>● Connect client conversations happening in personal WhatsApp to formal CRM records</p>
        <p>● Create searchable archives of important customer interactions</p>
        <p>● Share relevant client communications with team members</p>
        <p>● Maintain privacy by selectively choosing which conversations to sync</p>
        <p>● Access WhatsApp conversation history across multiple devices</p>
        <p>● Enable real-time updates between WhatsApp and connected systems</p>
        <p>Do not send or trigger any test messages after connecting the WhatsApp number via WhatSync. This includes:
          Internal validation messages such as “Test”, “Hi”, or “Hello”
          Messages triggered from workflows, automations, or system actions</p>
        <p>WhatsApp may identify such behaviour as system-generated or abnormal, which can lead to number restriction or permanent blocking.</p>

        <p><strong>Allowed:</strong> Only genuine, customer-initiated, or legitimate business conversations.</p>

        <p><strong>“Downtime”</strong> is the period when an application is unavailable or experiences disruptions, potentially due to maintenance, technical issues, or outages, impacting user access and potentially causing financial and reputational damage.</p>

        <p><strong>“Uptime”</strong> is the percentage of time a system, application, or service is operational and available to users.</p>

        <p><strong>“Third Party”</strong> refers to the service provider or platform that offers services or infrastructure related to the provisions of WhatsApp messaging i.e., META and other communication services.</p>

        <h3>2. Scope of Service</h3>

        <p>This SLA covers the following services provided to the Customer:</p>

        <p>2.1 Configuration of WhatsApp accounts within the Salesforce environment.</p>

        <p>2.2 The 360 Degree will charge a one-time setup fee for the integration services. The exact amount of the setup fee will be determined based on the complexity and specific requirements of the Client, as agreed upon by both parties in writing before the commencement of the services.</p>

        <p>2.3 Any services requested by the Client beyond the initial setup and integration will be considered additional services. These services will be charged separately, with fees and payment terms to be mutually agreed upon in writing by both parties on a case-by-case basis.</p>

        <p>2.4 The 360 degree’s responsibilities do not include support or maintenance of the WhatsApp and Meta services post-integration unless separately agreed upon. The Client will be responsible for any charges levied by WhatsApp and Meta for their services.</p>

        <h3>3. Service Availability</h3>

        <p>3.1 Service Uptime Guarantee: We commit to providing 99% uptime for the WhatsApp Business services, subject to the third-party services. It shall also exclude planned maintenance.</p>

        <p>3.2 Scheduled Maintenance: Any scheduled maintenance that might affect the availability of services will be communicated to the Client at least 48 hours in advance.</p>

        <p>3.3 Downtime: In case of service downtime is caused by system failure or network issues due to Meta, 360 Degree shall have no liability for recovery.</p>

        <p>3.4 Timely Payment: The Customer shall make timely payments for the Services as per the Order Form, failing which, 360 degree reserves the right to suspend the usage of the Services.</p>

        <p>3.5 Revised Price: Subject to any fluctuations or changes in the pricing structure of Meta Platforms, 360 reserves the right to modify the agreed-upon pricing. In the event of such adjustments, 360 shall provide prior written notice to the customer. Such changes will be effective as per the terms outlined in the notice.</p>

        <h3>4. Customer Responsibilities</h3>

        <p>4.1 Customer shall always be responsible for the creation of the content and creatives of the WhatsApp messages it proposes to send as part of the Services. The customer will always be liable for the consequences arising from the Content.</p>

        <p>4.2 Customer shall ensure that the Content is not infringing, libellous, defamatory, obscene, pornographic, abusive, harmful, threatening, harassing, stalking, embarrassing tortuous, offensive, hateful, or racially, ethnically or otherwise objectionable, misleading or violating any law or rules laid down by statute or any right of any individual or third party.</p>

        <p>4.3 Customer shall obtain prior permission from its end recipients and keep a record of their valid opt-in proofs before starting the process of sending the WhatsApp messages. 360 Degree shall be entitled to reimbursement of all costs and expenses incurred by it to defend any claims or address any complaints made by a recipient, or by Meta Platforms, or any other party or entity, for sending unsolicited WhatsApp messages.</p>

        <p>4.4 The Customer will not (a) resell the WhatsApp solution or allow third parties to integrate with, access or use the WhatsApp solution, unless otherwise permitted by 360 degree in writing or (b) use any of the Meta Platforms or WhatsApp names and trademarks in any way (unless permitted under another agreement between the User and Meta Platforms) or (c) transfer any of its rights or obligations under these Terms to anyone else without User and Meta Platforms’ consent.</p>

        <p>4.5 WhatSync is Strictly: - No Promotional or Marketing Messages</p>

        <p>WhatSync must not be used for: Promotions, Campaigns, Offers, Discounts, Marketing or bulk outreach. Sending promotional or marketing content through WhatSync is a major policy violation and may result in immediate WhatsApp number suspension.</p>

        <p>Examples of NOT allowed messages: “Check out our latest offer”, “Limited-time discount available”, “Special promotion just for you”</p>

        <p><strong>Allowed:</strong> Transactional, support-based, or customer-initiated communication only.</p>

        <p>4.6 The Customer Avoid Messaging Unknown or Unverified Contacts</p>

        <p>Avoid initiating conversations with unknown or unverified contacts.</p>

        <p>If messaging an unknown contact is unavoidable: Ensure there is a valid business context, keep the message purely informational or support-related, do not include any promotional or sales-driven content.</p>

        <p>Sending unsolicited messages is one of the primary reasons customers block WhatsApp numbers, which can directly impact the connected account.</p>

        <p>4.7 No Automation or Bulk Messaging: - WhatSync should not be connected to automated workflows that trigger messages without manual control.</p>

        <p>Bulk messaging or repetitive patterns may be detected as spam by WhatsApp.</p>

        <p>Recommendation: Use WhatSync strictly for one-to-one, human-driven conversations. High message frequency, repetitive copy-paste replies across multiple chats, or identical responses sent to multiple users in a short time span can be marked as spam, recommended to avoid.</p>

        <h3>5. WhatsSync Compliance</h3>

        <p>5.1 Our Service is not affiliated with, authorized by, endorsed by, or in any way officially connected with WhatsApp Inc. or any of its subsidiaries or affiliates.</p>

        <p>5.2 The use of our Service must comply with WhatsApp's Terms of Service.</p>

        <p>5.3 We may modify our Service at any time to maintain compliance with WhatsApp's policies or technical requirements.</p>

        <p>5.4 If an end customer blocks the WhatsApp number or reports the conversation, WhatsApp may: restrict the number, temporarily suspend access, permanently ban the number.</p>

        <p>These actions are enforced by WhatsApp and are outside our control. Once blocked, recovery may not be possible.</p>

        <p>We do not guarantee the availability, continuity, or recoverability of Whatsync or any connected WhatsApp number.</p>

        <p>In the event of any restriction, suspension, or ban imposed by WhatsApp or Meta, we are unable to intervene or raise appeals on the customer’s behalf.</p>

        <p>Any actions taken by WhatsApp or Meta are outside our control and responsibility.</p>

        <p><strong>Compliance Responsibility</strong></p>

        <p>Adherence to these guidelines is the sole responsibility of the end user using the WhatSync feature.</p>

        <p>Any violation may result in: WhatSync functionality being disabled, WhatsApp number blocking or suspension, service disruption without recovery options.</p>

        <h4 class="western" align="left"><strong>Unavoidable Legal Stuff</strong></h4>

        <p align="left">
          THE SERVICE AND ANY OTHER SERVICE AND CONTENT INCLUDED ON OR OTHERWISE MADE AVAILABLE TO YOU THROUGH THE SERVICE ARE PROVIDED TO YOU ON AN AS IS OR AS AVAILABLE BASIS WITHOUT ANY REPRESENTATIONS OR WARRANTIES OF ANY KIND. WE DISCLAIM ANY AND ALL WARRANTIES AND REPRESENTATIONS (EXPRESS OR IMPLIED, ORAL OR WRITTEN) WITH RESPECT TO THE SERVICE AND CONTENT INCLUDED ON OR OTHERWISE MADE AVAILABLE TO YOU THROUGH THE SERVICE WHETHER ALLEGED TO ARISE BY OPERATION OF LAW, BY REASON OF CUSTOM OR USAGE IN THE TRADE, BY COURSE OF DEALING OR OTHERWISE. IN NO EVENT WILL 360 Degree Cloud/SMS APP BE LIABLE TO YOU OR ANY THIRD PARTY FOR ANY SPECIAL, INDIRECT, INCIDENTAL, EXEMPLARY OR CONSEQUENTIAL DAMAGES OF ANY KIND ARISING OUT OF OR IN CONNECTION WITH THE SERVICE OR ANY OTHER SERVICE AND/OR CONTENT INCLUDED ON OR OTHERWISE MADE AVAILABLE TO YOU THROUGH THE SERVICE, REGARDLESS OF THE FORM OF ACTION, WHETHER IN CONTRACT, TORT, STRICT LIABILITY OR OTHERWISE, EVEN IF WE HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES OR ARE AWARE OF THE POSSIBILITY OF SUCH DAMAGES. OUR TOTAL LIABILITY FOR ALL CAUSES OF ACTION AND UNDER ALL THEORIES OF LIABILITY WILL BE LIMITED TO THE AMOUNT YOU PAID TO 360 Degree Cloud. THIS SECTION WILL BE GIVEN FULL EFFECT EVEN IF ANY REMEDY SPECIFIED IN THIS AGREEMENT IS DEEMED TO HAVE FAILED OF ITS ESSENTIAL PURPOSE. You agree to defend, indemnify and hold us harmless from and against any and all costs, damages, liabilities, and expenses (including attorneys' fees, costs, penalties, interest and disbursements) we incur in relation to, arising from, or for the purpose of avoiding, any claim or demand from a third party relating to your use of the Service or the use of the Service by any person using your account, including any claim that your use of the Service violates any applicable law or regulation, or the rights of any third party, and/or your violation of these Terms.
        </p>
      </div>


    </div>
    <div id="tab11" class="tab-content">
      <h2>360 DEGREE NPO SERVICE LEVEL AGREEMENT</h2>

      <p>This Service Level Agreement (SLA) is made between 360 Degree ("Provider," "We," or</p>
      <p>"Us") and ("Customer&rdquo;, Client or "You") for the provision of NPO Service, as outlined below.</p>
      <p>By using our NPO service, the Customer agrees to the terms and conditions outlined in this Agreement.</p>
      <p>1. Definitions</p>
      <p>&ldquo;NPO&rdquo; is a tool and solution tailored to help organizations to manage their missions more effectively, including managing donors, volunteers, campaigns, and fundraising activities. Through Salesforce Nonprofit Cloud, these organizations can centralize their data, automate processes, and build strong relationships with supporters to increase their impact.</p>
      <p>"Salesforce Platform" refers to the third-party platform on which the Company&rsquo;s application runs. 360 Degree Cloud does not own, control, or operate the Salesforce Platform.</p>
      <p>2. Scope of Services</p>
      <p>2.1 The Non-Profit Success Package offers comprehensive solutions to manage donor relations, automate processes, streamline fundraising campaigns, and centralize data.</p>
      <p>2.2 The service includes tailored payment systems integrated into Salesforce to facilitate donations, event payments, and fundraising efforts.</p>
      <p>2.3 It helps in automated workflows, trigger-based emails, flows, and scheduled processes designed to automate personalised donor communication, engagement, and campaign targeting.</p>
      <p>2.4 360 NPO service provides custom configurations of Salesforce Sales Cloud to optimize donor and volunteer management, including custom components and data centralization.</p>
      <p>3. Customer Responsibilities</p>
      <p>3.1 Customer shall provide accurate and timely information to ensure proper integration and automation of your systems, including donor data and fundraising event information.</p>
      <p>3.2 Customer shall ensure all activities related to payment processing, donor information, and fundraising comply with applicable laws and regulations, including data privacy laws.</p>
      <p>3.3 Customer shall abide by all guidelines provided by 360 degree for the use of custom Salesforce components and integrations, including training and technical support as needed.</p>
      <p>4. Service Availability</p>
      <p>360 Degree Cloud will make efforts to provide maximum service uptime, but there are certain limitations. These limitations could include factors such as network capacity or events beyond their control (e.g., internet failures, power outages, third-party service disruptions)</p>
      <p>but not limited to external factors outlined in the terms on 360 degree website, 360 Degree Cloud will use commercially reasonable efforts to ensure the 360 NPO Service meets the Target Availability, which ensures the maximum uptime of the Service, excluding the exclusions defined below.</p>
      <p>5. Exclusions</p>
      <p>The Target Availability does not apply during periods of unavailability caused by the following reasons</p>
      <p>5.1 Any unavailability resulting from the Customer&rsquo;s use of the 360 NPO Service in a manner not authorized by the terms.</p>
      <p>5.2 General internet problems, force majeure events, or any factors outside the reasonable control of 360 Degree Cloud, including but not limited to denial of service attacks or third-party service outages.</p>
      <p>5.3 Issues related to the Customer&rsquo;s equipment, software, network connections, utilities, or other infrastructure.</p>
      <p>5.4 Scheduled maintenance or emergency maintenance, whether planned or unplanned.</p>
      <p>5.5 This Agreement does not apply to any version of the 360 NPO Service that is no longer available or supported.</p>
      <p>6. Scheduled Maintenance</p>
      <p>6.1 For all scheduled maintenance intended to achieve Target Availability, 360 Degree Cloud will use commercially reasonable efforts to notify the Customer at least five (5) business days prior to beginning such maintenance via email.</p>
      <p>6.2 Scheduled maintenance will be conducted, to the extent practicable, during weekend hours to minimize disruption.</p>
      <p>6.3 In the event of unavailability due to scheduled or unscheduled maintenance, 360 Degree Cloud will make reasonable efforts to minimize disruptions, inaccessibility, or inoperability of the 360 NPO Service, and will ensure the service is restored as promptly as possible.</p>
      <p>7. Updates</p>
      <p>360 degree may update this 360 degree SLA from time to time. The then-current version of this 360 degree SLA is available at&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;..</p>

    </div>
    <div id="tab12" class="tab-content">
      <h2>HIGHLIGHTER</h2>

      <p>This Service Level Agreement ("SLA") is made between 360 Degree Cloud ("Provider," "We," or "Us") and ("Customer," "Client," or "You") for the provision of Highlighter services, as outlined below.</p>
      <p>By using our Highlighter services, the Customer agrees to the terms and conditions outlined in this Agreement.</p>
      <p>1. Definitions</p>
      <p>"360 Highlighter Service" refers to a specialized Salesforce-integrated solution that enables highlighting, annotation, and tagging of key information within Salesforce records, thereby enhancing visibility, efficiency, and usability of critical data.</p>
      <p>"Salesforce Platform" refers to the third-party platform on which the Company&rsquo;s application runs. 360 Degree Cloud does not own, control, or operate the Salesforce Platform.</p>
      <p>2. Scope of Service</p>
      <p>2.1 360 Degree Cloud agrees to provide the Customer with access to the 360 Highlighter Service, designed to assist the Customer in enhancing visibility and managing critical information within Salesforce records through the use of highlighting, annotations, and tagging. These annotations can be customized based on predefined or customer-configured rules.</p>
      <p>2.2 The Service provides real-time highlighting and annotations, enabling the Customer to view and interact with changes as they occur within the Salesforce system.</p>
      <p>3. Service Availability</p>
      <p>360 Degree Cloud will make efforts to provide maximum service uptime, there are certain limitations. These limitations could include factors such as network capacity or events beyond their control (e.g., internet failures, power outages, third-party service disruptions) but not limited to external factors outlined in the terms on 360 degree website, 360 Degree Cloud will use commercially reasonable efforts to ensure the 360 Highlighter Service meets the Target Availability, which ensures the maximum uptime of the Service, excluding the exclusions defined below.</p>
      <p>4. Exclusions</p>
      <p>The Target Availability does not apply during periods of unavailability caused by the following reasons:</p>
      <p>4.1 Any unavailability resulting from the Customer&rsquo;s use of the 360 Highlighter Service in a manner not authorized by the terms.</p>
      <p>4.2 General internet problems, force majeure events, or any factors outside the reasonable control of 360 Degree Cloud, including but not limited to denial of service attacks or third-party service outages.</p>
      <p>4.3 Issues related to the Customer&rsquo;s equipment, software, network connections, utilities, or other infrastructure.</p>
      <p>4.4 Scheduled maintenance or emergency maintenance, whether planned or unplanned.</p>
      <p>4.5 This Agreement does not apply to any version of the 360 Highlighter Service that is no longer available or supported.</p>
      <p>5. Customer Responsibilities</p>
      <p>5.1 The Customer understands and agrees that any annotations, highlights, or tags applied using this Service are permanent actions and may not be reversible.</p>
      <p>5.2 The Customer is responsible for ensuring the data uploaded to or integrated with the 360 Highlighter Service is accurate, complete, and legally authorized for use.</p>
      <p>5.3 The Customer shall use the Service in compliance with all applicable laws, including but not limited to data privacy laws, personal data protection regulations, and any contractual obligations related to data protection.</p>
      <p>6. Scheduled Maintenance</p>
      <p>6.1 For all scheduled maintenance intended to achieve Target Availability, 360 Degree Cloud will use commercially reasonable efforts to notify the Customer at least five (5) business days prior to beginning such maintenance via email.</p>
      <p>6.2 Scheduled maintenance will be conducted, to the extent practicable, during weekend hours to minimize disruption.</p>
      <p>6.3 In the event of unavailability due to scheduled or unscheduled maintenance, 360 Degree Cloud will make reasonable efforts to minimize disruptions, inaccessibility, or inoperability of the 360 Highlighter Service, and will ensure the service is restored as promptly as possible.</p>



    </div>


    <div id="tab13" class="tab-content">
      <h2>SMS SERVICE LEVEL AGREEMENT</h2>

      <p>This Service Level Agreement (SLA) is made between 360 Degree Cloud ("Provider," "We," or "Us") and (&ldquo;Customer&rdquo;, "Client" or "You") for the provision of SMS Services, as outlined below.</p>
      <p>By using our SMS services, the Customer agrees to the terms and conditions outlined in this Agreement.</p>
      <p>1. Definition - The following defined terms apply to this service level agreement for the SMS services.</p>
      <p>&ldquo;SMS Messaging Service&rdquo; means the service for transforming, formatting and delivering an SMS Message from the Gateway to the relevant mobile GSM network.</p>
      <p>&ldquo;Opt-out&rdquo; means the information on whether the receiver has opted out of all the Communications from the Sender ID.</p>
      <p>&ldquo;SMS Content&rdquo; means the message content of SMS.</p>
      <p>&ldquo;SMS Aggregators&rdquo; means the agents that deliver messages to subscriber handsets through the operator.</p>
      <p>&ldquo;Credits&rdquo; means the currency the customer needs to purchase to send messages.</p>
      <p>2. SMS Services</p>
      <p>2.1 SMS service enables integration with (CRM) data and enables users to send messages from the CRM to the user&rsquo;s contacts, leads and accounts and other object records.</p>
      <p>2.2 Message transmission requests will proceed as soon as reasonably possible. 360 Degree Cloud shall make all reasonable endeavours to ensure uninterrupted and continued use of the SMS Services, however, the delivery of messages is largely dependent on the effective functioning of Network Operators&rsquo; and Platform Operators&rsquo; communications networks, network coverage and the message recipient&rsquo;s mobile handset and operating system etc.</p>
      <p>2.3 360 Degree Cloud does not and cannot guarantee the availability of any Service, the delivery of any messages or the compatibility between any message or content format and any particular mobile handsets or mobile operating systems, etc.</p>
      <p>3. Payment and Usage of Credit Terms</p>
      <p>3.1 Credit Validity &amp; Usage</p>
      <p>Customer agrees that purchased credits do not expire and may be used at the Customer&rsquo;s convenience. All purchases shall be final, and no refunds will be issued for unused credits.</p>
      <p>3.2 Late Payment Charges</p>
      <p>The Customer agrees that any delayed payments shall accrue interest at the rate of one per cent (1%) per month, compounded half-yearly, from the due date until the outstanding balance is paid in full.</p>
      <p>Any dispute relating to billing amounts or applicable rates must be communicated to 360 Degree Cloud in writing within forty-five (45) days from the date of the invoice. Invoices not disputed within this period shall be deemed accurate, accepted in full, and no longer subject to adjustment, setoff, or challenge.</p>
      <p>During the pendency of a good faith billing dispute, 360 Degree Cloud shall not impose late payment charges or suspend Services with respect to the disputed portion of the invoice, provided that the Customer acts reasonably, promptly, and in good faith to resolve the matter. Failure by the Customer to cooperate in the resolution process, or the assertion of a dispute that is determined by 360 Degree Cloud in its reasonable discretion to be frivolous, unreasonable, or not made in good faith, shall entitle 360 Degree Cloud to impose applicable late payment charges and to suspend or terminate the affected Services.</p>
      <p>It shall be the sole responsibility of the Customer to verify and confirm the accuracy of all invoice details prior to making payment. Requests for itemised billing data or detailed usage reports must be submitted within sixty (60) days from the date such data or reports were originally provided. 360 Degree Cloud shall have no obligation to provide historical billing or usage data beyond this retention period, and requests submitted outside this timeframe shall not be entertained.</p>
      <p>SMS App Text Credit Usage Terms</p>
      <p>No Expiration &amp; Service Conditions: Purchased credits do not expire and may be used at your convenience. No refunds will be issued for unused credits. In the event of nonpayment, partial payment, or delayed payment, 360 Degree Cloud reserves the right to disconnect services and recover the outstanding amount without prior notice. Interest of 1% per month, compounded half-yearly, will be charged on delayed payments.</p>
      <p>Dispute Resolution: You must notify 360 Degree Cloud in writing within 45 days of the billing date for any fee/rate dispute. After this period, the invoice will be deemed accepted. You must act in good faith and cooperate diligently with 360 Degree Cloud to resolve the issue. We will not charge late fees or suspend services for unpaid disputed fees unless you fail to cooperate, or the dispute is deemed unreasonable or not in good faith. It is the customer's responsibility to verify invoices before payment. Once invoice term of 45 days is expired, it cannot be disputed or adjusted against future payments.</p>
      <p>Itemized Billing Reports: Requests for detailed usage reports beyond 60 days from the initial share date will not be entertained to preserve data integrity.</p>
      <p>Usage Clarification: Refer to the usage summary shared via email for clarification.</p>
      <p>Fees: You agree to pay the fees outlined in the appendix. If you use services not listed in the appendix, you will be charged at the applicable rates communicated via email from time to time.</p>
      <p><strong>Taxes & Surcharges:</strong>You agree to pay all applicable taxes, communication surcharges (e.g., pass-through carrier fees), 10DLC charges, fines, and penalties incurred due to your use of our services. These will be listed as separate line items on your invoice for transparency.</p>

      <p>360 Degree Cloud shall levy a <strong>10% administrative markup on all carrier charges</strong> as an admin fee for reporting and operational support. This fee is <strong>included within the billed carrier charges,</strong> and by availing the Services, the Customer agrees to pay the same without dispute.</p>
      <p>Credit Deduction Policy:</p>
      <p>1 SMS credit per SMS up to 160 English characters (1 segment).</p>
      <p>1 call credit per call up to 60 seconds.</p>
      <p>Special rates will be apply for service usage outside the specified country or service usage outside scope of non-provided rates.</p>
      <p>Unicode (non-English) messages: 70 characters per credit (per segment).</p>
      <p>Messages over 160 characters are treated as long messages, with 1 credit deducted for every 153 characters.</p>
      <p>Security &amp; Liability Disclaimer</p>
      <p>Client&rsquo;s Responsibility for Security: You are solely responsible for securing your systems. The application is listed on Salesforce, and your data remains within your Salesforce environment. 360 Degree Cloud does not access or store your data.</p>
      <p>No Liability for System Breaches: We are not responsible for any security breaches or associated costs/fraudulent activities in your systems.</p>
      <p>No Security Training Provided: 360 Degree Cloud does not provide technical training for preventing breaches. It is your sole responsibility to implement and maintain your system&rsquo;s security.</p>
      <p>Client Accountability: Per our contract, the Client is solely responsible for all use of the Services under their account, including securing their environment. This is a reasonable and enforceable clause.</p>
      <p>By continuing to use our services, you agree to these Terms of Service, including your obligations regarding usage, payments, disputes, system security, and service conditions.</p>
      <p>
    </div>
    <div id="tab14" class="tab-content">
      <h2>LINE SERVICE LEVEL AGREEMENT</h2>

      <p>This Service Level Agreement ("SLA") is made between 360 Degree Cloud ("Provider," "We," or "Us") and ("Customer," "Client," or "You") for the provision of 360 Line Japan services, as outlined below.</p>
      <p>By using our 360 Line Japan services, the Customer agrees to the terms and conditions outlined in this Agreement.</p>
      <p>1. Definitions:</p>
      <p>"360 Line Japan Service" refers to a comprehensive cloud-based solution enabling businesses to integrate and manage their LINE communications efficiently within the Salesforce environment. This service facilitates seamless customer engagement through LINE messaging, specifically designed for the Japanese market.</p>
      <p>"Salesforce Platform" refers to the third-party platform on which the Company&rsquo;s application runs. 360 Degree Cloud does not own, control, or operate the Salesforce Platform.</p>
      <p>2. Scope of Services</p>
      <p>2.1 360 degree will integrate the Salesforce Application with the Customer&rsquo;s Salesforce instance, enabling seamless communication with customers through the LINE platform.</p>
      <p>2.2 360 degree shall customise the Salesforce Application to meet the specific business needs of the Customer, including branding, messaging, and automated workflows.</p>
      <p>2.3 360 degree shall provide ongoing technical support for the Salesforce LINE Native Application, including troubleshooting, upgrades, and enhancements as part of the service package.</p>
      <p>2.4 360 Degree will provide training materials and sessions to ensure the Customer&rsquo;s team is proficient in using the Salesforce Application effectively.</p>
      <p>2.5 360 Degree will offer consultation services for strategy and optimization of customer engagement and communication, with a focus on the Japanese market.</p>
      <p>2. Availability and Reliability</p>
      <p>Subject to the concurrent throughput limits, including but not limited to external factors as outlined in the 360 Degree LINE Japan Documentation, 360 Degree Cloud will use commercially reasonable efforts to meet the Target Availability for the 360 Degree LINE Japan Service.</p>
      <p>3. Exclusions</p>
      <p>The Target Availability excludes any unavailability of the 360 Degree LINE Japan Service for the following reasons:</p>
      <p>1. Customer's use of the 360 Degree LINE Japan Service in a manner not authorized in the service documentation or any written agreement between the Customer and 360 Degree regarding the Customer&rsquo;s use of the service.</p>
      <p>2. General Internet problems, force majeure events, or factors outside of the reasonable control of 360 Degree, such as denial of service attacks or third-party service outages</p>
      <p>3. Customer&rsquo;s equipment, software, network connections, utilities, or other infrastructure</p>
      <p>4. Scheduled Maintenance or emergency maintenance, whether planned or unplanned.</p>
      <p>This Service Level Agreement (SLA) will not apply to any version of the 360 Degree LINE Japan Service that is (i) no longer available or supported, or (ii) identified as alpha, beta, limited release, or any similar early access service.</p>
      <p>4. Scheduled Maintenance</p>
      <p>For all scheduled maintenance to achieve the Target Availability, 360 Degree will use commercially reasonable efforts to notify the Customer at least five (5) business days prior to beginning such maintenance via email. Scheduled maintenance will be scheduled, to the extent practicable, during weekend hours.</p>
      <p>In the event of unavailability due to scheduled or unscheduled maintenance, 360 Degree will make reasonable efforts to minimize disruptions, inaccessibility, and/or inoperability of the 360 Degree LINE Japan Service, ensuring the service is restored as promptly as possible.</p>
      <p>5. Customer Responsibilities</p>
      <p>The Customer agrees to use the 360 Degree LINE Japan Service in accordance with the Terms. Any misuse or failure to adhere to the terms outlined in the documentation may result in a reduction in service availability or suspension of access to the service.</p>


    </div>
    <div id="tab15" class="tab-content">
      <h2>360 InstantDocs SERVICE LEVEL AGREEMENT</h2>
      <div class="smart-doc-terms">

        <div class="intro-section">
          <p><strong>ACCEPTANCE:</strong> By installing, activating, or using any product in the 360 InstantDocs suite — including the 360 InstantDocs Tool Salesforce package, MS Word Extension, or File Sync add-on — you confirm that you have read and agree to be legally bound by these Terms. These Terms supplement the Master Services Agreement (MSA) between your organization and 360 Degree Cloud Technologies.</p>

          <p><strong>IMPORTANT — PLEASE READ CAREFULLY:</strong> These Terms govern all products under the 360 InstantDocs suite. By using any product, you confirm acceptance. If you do not agree, do not install or use the product.</p>

          <p>BY USING THE SERVICE IN ANY MANNER, YOU CONFIRM THAT YOU HAVE READ, UNDERSTOOD, AND AGREE TO BE LEGALLY BOUND BY THESE TERMS.</p>
        </div>

        <div class="part-a">
          <p><strong>PART A — 360 InstantDocs TOOL</strong></p>

          <div class="section">
            <p><strong>1. About 360 InstantDocs Tool</strong></p>
            <p>360 InstantDocs Tool is a document generation platform developed and distributed by 360 Degree Cloud Technologies ("360DCT"). It runs natively within your Salesforce environment and integrates with Microsoft Office via a companion extension. It enables organizations to:</p>
            <p>• Design usable document templates in Microsoft Word using merge tags and conditional logic;</p>
            <p>• Automatically populate templates with live Salesforce data;</p>
            <p>• Generate output files in PDF or DOCX format on demand or via automated Salesforce workflows;</p>
            <p>• Send generated documents via email directly from Salesforce;</p>
            <p>• Store and manage generated documents within Client Salesforce records.</p>
            <p><strong>File Sync Add-On:</strong> If you also license File Sync, generated documents can be automatically synced to external platforms such as Google Drive or SharePoint. See Part B for File Sync-specific terms.</p>
          </div>

          <div class="section">
            <p><strong>2. Setup & Usage Workflow</strong></p>
            <p>360 InstantDocs Tool requires the following setup steps, each of which is entirely the Customer's responsibility:</p>
            <p>1. Download and install the 360 InstantDocs Tool managed package from Salesforce AppExchange into your Salesforce org;</p>
            <p>2. Install the companion MS Word Extension onto each user device;</p>
            <p>3. Complete Salesforce configuration including Connected App setup, user permissions, and data field mappings;</p>
            <p>4. Create and manage document templates in Microsoft Word, inserting merge tags corresponding to Salesforce fields;</p>
            <p>5. Trigger document generation from Salesforce to produce PDF or DOCX output;</p>
            <p>6. Optionally send generated documents via email from Salesforce, or sync via File Sync.</p>
            <p><strong>Customer Responsibility:</strong> Salesforce org configuration, API limits, user permissions, field mapping accuracy, and template design are entirely your organization's responsibility. 360DCT is not liable for misconfiguration issues, data errors in generated documents, or Salesforce platform failures.</p>
          </div>

          <div class="section">
            <p><strong>3. License Grant & Editions</strong></p>
            <p>Subject to timely payment and compliance with these Terms, 360DCT grants you a non-exclusive, non-transferable, non-sublicensable, limited license to install and use 360 InstantDocs Tool solely within your own licensed Salesforce organisation, for internal business operations, by Authorised Users you have provisioned, within the edition limits of your Order Form.</p>
            <p>The Software is licensed, not sold. No ownership rights are transferred to you.</p>
          </div>

          <div class="section">
            <p><strong>4. Installation & System Requirements</strong></p>
            <p>By installing 360 InstantDocs Tool, you confirm that:</p>
            <p>• You hold a valid Salesforce license with System Administrator or equivalent permissions to install managed packages;</p>
            <p>• You have a licensed, compatible copy of Microsoft Word for the extension;</p>
            <p>• You have reviewed and complied with Salesforce AppExchange installation guidelines;</p>
            <p>• Your Salesforce org's Connected App, API quotas, and security settings are properly configured;</p>
            <p>• All Salesforce setup, template design, and user access management are your sole responsibility.</p>
          </div>

          <div class="section">
            <p><strong>5. Email Delivery & Document Output</strong></p>
            <p>• <strong>Output Accuracy:</strong> All document content is derived from your Salesforce data and templates. 360DCT is not responsible for errors resulting from incorrect data, misconfigured merge tags, or template design errors;</p>
            <p>• <strong>Email Compliance:</strong> You are solely responsible for CAN-SPAM Act compliance and applicable anti-spam law for all emails sent via 360 InstantDocs Tool;</p>
            <p>• <strong>Email Infrastructure:</strong> Email delivery uses Salesforce's native infrastructure. Deliverability and rate limits are subject to Salesforce platform behaviour.</p>
            <p>• You are solely responsible for ensuring generated documents meet applicable legal or regulatory standards.</p>
            <p>• <strong>Document Storage:</strong> 360DCT does not retain copies of generated documents. Documents are stored within your Salesforce org.</p>
          </div>
        </div>

        <div class="part-b">
          <p><strong>PART B — FILE SYNC ADD-ON</strong></p>

          <div class="section">
            <p><strong>6. About File Sync</strong></p>
            <p>File Sync is an add-on feature within the 360 InstantDocs suite that enables users to efficiently manage and access files by syncing them between the Salesforce Platform and external cloud storage platforms such as Google Drive, Microsoft SharePoint, and other supported services. It optimizes storage, reduces duplication, and enhances cross-platform collaboration.</p>
            <p><strong>Add-On Status:</strong> File Sync requires an active 360 InstantDocs Tool license and is available on Professional and Enterprise editions. If you have not licensed File Sync, Part B of these Terms does not apply to you.</p>
            <p><strong>Key Definitions</strong></p>
            <p><strong>"File Sync Service":</strong> the add-on solution enabling bidirectional or unidirectional syncing of files between Salesforce and supported External Storage Platforms.</p>
            <p><strong>"External Storage Platform":</strong> third-party storage services including Google Drive, Microsoft SharePoint, and other platforms supported by File Sync.</p>
            <p><strong>"Salesforce Platform":</strong> the third-party CRM on which 360 InstantDocs applications run. 360DCT does not own, control, or operate the Salesforce Platform.</p>
            <p><strong>"Synced Files":</strong> files transferred between Salesforce and External Storage Platforms via the File Sync Service.</p>
          </div>

          <div class="section">
            <p><strong>7. File Sync Workflow</strong></p>
            <p>1. Authenticate File Sync with both your Salesforce org and your chosen External Storage Platform (Google Drive, SharePoint, etc.);</p>
            <p>2. Configure sync rules defining which Salesforce records map to which folders in the external platform;</p>
            <p>3. Files attached to Salesforce records are synced to or from the external platform per your configuration.</p>
            <p>4. Access Salesforce-linked files directly from Google Drive, SharePoint, or Salesforce as needed;</p>
            <p>5. Optionally enable auto-sync so documents generated by 360 InstantDocs Tool are automatically synced via File Sync.</p>
          </div>

          <div class="section">
            <p><strong>8. File Sync — User Responsibilities</strong></p>
            <p>By using File Sync, you agree to use the Service in compliance with all applicable laws. Specifically, you agree NOT to:</p>
            <p>• Upload, sync, or share files that violate third-party rights, including intellectual property, privacy, or confidentiality obligations;</p>
            <p>• Use File Sync for illegal, fraudulent, or malicious purposes of any kind;</p>
            <p>• Upload, sync, or share files containing viruses, malware, ransomware, trojans, or any harmful code;</p>
            <p>• Attempt to gain unauthorised access to the File Sync Service, its infrastructure, or any connected storage platform;</p>
            <p>• Interfere with or disrupt the functionality of the File Sync Service or connected platforms;</p>
            <p>• Use the Service to circumvent security controls, access restrictions, or data governance policies;</p>
            <p>• Sync files containing sensitive personal data without ensuring full compliance with applicable privacy laws (CCPA, GDPR, where applicable).</p>
            <p><strong>Your Content is Your Responsibility:</strong> You are solely responsible for the content you store and sync via File Sync. 360DCT does not review, moderate, or validate the content of synced files.</p>
          </div>

          <div class="section">
            <p><strong>9. File Permissions, Ownership & Data Handling</strong></p>
            <p>By syncing files through File Sync, you grant 360DCT the limited technical permissions necessary to access, transfer, and facilitate syncing of your files between your Salesforce org and your designated External Storage Platform.</p>
            <p>360DCT does NOT claim ownership of any files you sync. You retain full ownership of all Synced Files at all times. 360DCT does NOT store, retain, or detain your data on its own servers. File transfers are processed in transit between your Salesforce org and your chosen external storage platform. No copy is maintained by 360DCT beyond what is technically required to execute the sync.</p>
            <p><strong>External Platform Dependency</strong></p>
            <p>File Sync integrates with third-party platforms not owned or controlled by 360DCT. Your use of those platforms is subject to their own terms and privacy policies. 360DCT is not responsible for:</p>
            <p>• Changes to external platform APIs that may affect sync functionality;</p>
            <p>• Data stored on external platforms, including any loss, breach, or unauthorised access;</p>
            <p>• Security incidents occurring within external platforms;</p>
            <p>• Storage limits, sharing policies, or access controls of external platforms.</p>
          </div>

          <div class="section">
            <p><strong>10. Service Availability — File Sync</strong></p>
            <p>360DCT strives to provide reliable and uninterrupted access to File Sync. However, the Service may be temporarily unavailable due to:</p>
            <p>• Scheduled maintenance (with reasonable advance notice where practicable);</p>
            <p>• Unplanned technical issues or operational incidents;</p>
            <p>• Outages or API changes on third-party platforms outside 360DCT's control;</p>
            <p>• Force majeure events as described in Part C.</p>
            <p><strong>No Liability for Outages:</strong> 360DCT is not responsible for disruptions to 360 InstantDocs/File Sync or data loss resulting from service outages, platform failures, or maintenance windows. You are solely responsible for maintaining independent backups of all critical files. File Sync is NOT a backup solution.</p>
          </div>
        </div>

        <div class="part-c">
          <p><strong>PART C — SHARED TERMS (360 InstantDocs TOOL + FILE SYNC)</strong></p>
          <p>The following sections apply equally to 360 InstantDocs Tool and the File Sync add-on unless otherwise specified.</p>

          <div class="section">
            <p><strong>11. Restricted Uses & Prohibited Conduct</strong></p>
            <p><strong>IMPORTANT:</strong> Violation of this Section may result in immediate termination of your license(s) without notice and may expose you to civil and criminal legal liability. 360DCT reserves all rights to pursue legal and equitable remedies.</p>

            <p><strong>11.1 Reverse Engineering & Code Integrity</strong></p>
            <p>• Do not decompile, disassemble, reverse engineer, or attempt to derive source code, algorithms, or proprietary logic of 360 InstantDocs Tool, the MS Word Extension, or File Sync;</p>
            <p>• Do not use debuggers, memory scanners, network interceptors, or similar tools to extract proprietary logic from any component;</p>
            <p>• Do not circumvent, remove, or tamper with any license key, authentication mechanism, or copy protection system.</p>

            <p><strong>11.2 Redistribution & Competitive Use</strong></p>
            <p>• Do not redistribute, resell, sublicense, rent, lease, or transfer either product without 360DCT's prior written consent;</p>
            <p>• Do not use 360 InstantDocs Tool or File Sync to build a competing document generation or file synchronization product;</p>
            <p>• Do not offer either product as a standalone service to your customers;</p>
            <p>• Do not publish or expose any license key, Source URL, or access credentials.</p>

            <p><strong>11.3 Data & Security Misuse</strong></p>
            <p>• Do not use either product to generate, transmit, sync, or deliver content that is fraudulent, unlawful, defamatory, or infringing;</p>
            <p>• Do not introduce malware, viruses, ransomware, or disruptive code through either product;</p>
            <p>• Do not conduct unauthorised penetration testing or security scanning of any component;</p>
            <p>• Do not attempt to access other customers' data or 360DCT's infrastructure.</p>

            <p><strong>11.4 Organizational Accountability</strong></p>
            <p>• You are fully responsible for all actions by your Authorized Users under both products;</p>
            <p>• Fraudulent activities, unauthorized file transfers, or policy violations by your employees or agents are your sole responsibility;</p>
            <p>• 360DCT bears no liability for fraud, breaches, financial loss, or harmful events within your Salesforce org, external storage platforms, or IT environment.</p>
          </div>

          <div class="section">
            <p><strong>12. Data Privacy & Security</strong></p>
            <p>360DCT acts as a data processor in relation to all Customer Data processed through 360 InstantDocs Tool and File Sync. You remain the data controller at all times.</p>
            <p><strong>Your Responsibilities</strong></p>
            <p>• Ensure all data processed through either product complies with applicable privacy laws (CCPA, GDPR where applicable, HIPAA for healthcare data);</p>
            <p>• Obtain all necessary consents from individuals whose personal data is included in generated documents or synced files;</p>
            <p>• Maintain confidentiality of all login credentials, API keys, access tokens, and OAuth authorizations;</p>
            <p>• Implement appropriate access controls within your Salesforce org and External Storage Platforms.</p>
            <p><strong>Data We May Collect</strong></p>
            <p>360DCT may collect anonymised technical usage data (e.g., feature usage frequency, error logs) to improve the products. This does not include document content, Salesforce record data, synced file content, or personally identifiable information. We do not sell your data to any third party.</p>
          </div>
        </div>

      </div>
    </div>
    <div id="tabca15" class="tab-content">
      <h2>CALL ANCHOR SERVICE LEVEL AGREEMENT</h2>
      <p><strong>1. The Service and Licensing</strong></p>
      <p><strong>1.1</strong> Call Anchor is a software application that operates on compatible Android handsets using non-Google dialler applications, and records incoming and/or outgoing calls on licensed, number-mapped handsets, storing the recordings and related data (“Recorded Data”) in the elected Storage.</p>
      <p><strong>1.2</strong> The Service is licensed on a per-Licence basis, where each Licence permits use on one (1) mapped mobile number / handset (“Number Mapping”). Licences, mapped numbers, fees and term are as set out in the applicable Order form/Invoice. Licences are allotted upon receipt of cleared payment and are non-transferable.</p>
      <p><strong>1.3</strong> The Client shall use the Service only for its own lawful internal business purposes and only for authorised business communications. The Client shall not use the Service for personal, household, secret surveillance, interception, harassment, blackmail, stalking, unlawful monitoring, or any purpose prohibited by applicable law.</p>

      <p><strong>2. Call Categorisation</strong></p>
      <p><strong>2.1</strong> The Client’s Administrator may configure, per handset, how calls are treated:</p>
      <p><strong>(a)</strong> Full Business Mode — all incoming and outgoing calls are recorded and stored by default; or</p>
      <p><strong>(b)</strong> User-Marked Mode — where the Administrator grants the right, the Authorised User must, for each call made or received, select “Business” or “Personal”; only “Business” calls are recorded and stored, and “Personal” calls are not stored.</p>
      <p><strong>2.2</strong> The available options, and whether any Authorised User may mark calls, are determined solely by the Client.</p>
      <p><strong>2.3</strong> The Client shall issue a written internal call-recording policy to its employees, consultants and Authorised Users before activation, explaining the business purpose, types of calls recorded, personal-call restrictions, consent requirements, access rights, retention period, grievance/contact point and consequences of misuse.</p>

      <p><strong>3. Recording, Storage and Access</strong></p>
      <p><strong>3.1</strong> Storage. Recorded Data is stored by default in the 360 Degree Cloud’s designated cloud storage (Amazon Web Services S3 or successor). The Client may instead elect 360 Degree Cloud-facilitated cloud storage on a pay-per-usage basis, or may bring its own storage.</p>
      <p><strong>3.2</strong> Client-controlled / third-party storage. Where the Client uses its own or third-party storage, the Client is solely responsible for that storage’s configuration, security, availability, cost and lawful operation, and the 360 Degree Cloud has no responsibility for it.</p>
      <p><strong>3.3</strong> Access. The Administrator may access Recorded Data only within the Platform and only through the access controls provided. The Client is responsible for managing access rights and credentials for its Administrators and Authorised Users.</p>
      <p><strong>3.4</strong> The Client shall maintain strong passwords, multi-factor authentication wherever available, least-privilege access, timely user deactivation, internal audits, device controls and endpoint security. Any activity performed through the Client’s account, credentials, devices or storage shall be deemed to be performed by or on behalf of the Client.</p>

      <p><strong>4. Consent and Lawful Recording</strong></p>
      <p><strong>4.1</strong> In addition to the compliance and consent obligations in the Master Terms, and because Call Anchor records and stores two-way calls, the Client is solely responsible for ensuring that all required notice is given and consent is obtained from every party to a recorded call, and from every Authorised User, before any call is recorded or stored, as required by all applicable laws (including, where applicable, the DPDP, TRAI, DOT Law).</p>
      <p><strong>4.2</strong> Data-protection roles. For Recorded Data, the Client is the Data Fiduciary / data controller (it determines the purpose and means of recording) and 360 Degree Cloud acts as a Data Processor/service provider to the extent it processes Recorded Data on behalf of and on the documented instructions of the Client for providing the Service. The Client remains responsible for the lawfulness of recording, notice and consent, and for responding to data-principal / data-subject requests.</p>
      <p><strong>4.3</strong> The 360 Degree Cloud does not monitor or verify the content or legality of the calls the Client chooses to record.</p>

      <p><strong>5. Free Trial</strong></p>
      <p><strong>5.1</strong> Any Free Trial of Call Anchor is strictly limited to seven (7) days from activation and to a maximum of eight (8) calls, whichever occurs first, after which the trial automatically ends.</p>
      <p><strong>5.2</strong> The Client acknowledges that upon expiry of the Free Trial, all Recorded Data generated during the trial is permanently deleted and is not recoverable. The Free Trial is provided “as is”, and the 360 Degree Cloud has no liability in respect of it or any data lost. The Client must obtain all consents under Clause 4 before recording during the trial.</p>
      <p><strong>5.3</strong> The Client shall not use Free Trial recordings for any high-risk, disciplinary, litigation, regulatory, employment, consumer, debt-recovery or evidentiary purpose without independently confirming lawful recording, consent, retention, disclosure and admissibility requirements.</p>

      <p><strong>6. Recorded Data — Responsibility and Misuse</strong></p>
      <p><strong>6.1</strong> As between the parties, the Client is responsible for the protection, privacy and security of the Recorded Data in respect of all matters within the Client’s control, including the conduct of its Administrators and Authorised Users, its credentials and access controls, and any Client-controlled or third-party storage.</p>
      <p><strong>6.2</strong> The Client shall not, and shall ensure that its Administrators, Authorised Users and representatives do not:</p>
      <p><strong>(a)</strong> reverse engineer, decompile, disassemble, copy, modify, translate, adapt, scrape, resell, rent, sublicense, create derivative works of the Service;</p>
      <p><strong>(b)</strong> bypass technical limits, licence controls, number mapping, security controls or access controls;</p>
      <p><strong>(c)</strong> interfere with the Service or introduce malware;</p>
      <p><strong>(d)</strong> attempt unauthorised access to systems or data;</p>
      <p><strong>(e)</strong> use the Service to violate any law or third-party right; or</p>
      <p><strong>(f)</strong> remove, obscure or alter proprietary notices.</p>
      <p><strong>6.2</strong> Without limiting the limitation-of-liability and indemnification provisions of the Master Terms (which apply to Call Anchor), the 360 Degree Cloud shall have no liability for, and the Client’s indemnity under the Master Terms extends to, any claim, loss or liability arising from:</p>
      <p><strong>(a)</strong> the Client’s failure to obtain required consents or to comply with applicable law;</p>
      <p><strong>(b)</strong> any Client-controlled or third-party storage;</p>
      <p><strong>(c)</strong> the Free Trial;</p>
      <p><strong>(d)</strong> any misuse, reverse engineering, copying or tampering in relation to the Service or Recorded Data by the Client, its Administrators or its Authorised Users; or</p>
      <p><strong>(e)</strong> any hacking, breach, loss or misuse of Recorded Data caused by the Client or its users.</p>
      <p><strong>6.3</strong> If the Client’s instruction, configuration, storage arrangement or intended use appears unlawful, unsafe, non-compliant, excessive, infringing, technically harmful, or capable of exposing 360 Degree Cloud to legal/regulatory risk, 360 Degree Cloud may refuse the instruction, suspend the Service, require corrective undertakings, or terminate the affected Licence(s) without liability.</p>

      <p><strong>7. Exit and Data Deletion</strong></p>
      <p><strong>7.1</strong> Upon termination or expiry, it is the Client’s responsibility to:</p>
      <p><strong>(a)</strong> retrieve any Recorded Data it wishes to keep (where stored with the 360 Degree Cloud),</p>
      <p><strong>(b)</strong> arrange for deletion of its data, and</p>
      <p><strong>(c)</strong> obtain a No-Objection Certificate (NOC) from the 360 Degree Cloud confirming closure.</p>
      <p><strong>7.2</strong> The 360 Degree Cloud will delete the Client’s Recorded Data held in the 360 Degree Cloud’s designated storage within thirty (30) days of the effective exit date, unless a longer period is required by law. After deletion, the 360 Degree Cloud cannot and will not retrieve, restore or share any Recorded Data, and has no liability for its unavailability.</p>
      <p><strong>7.3</strong> Where the Client used its own or third-party storage, deletion of that data is solely the Client’s responsibility, and the 360 Degree Cloud is not responsible for any loss, breach or misuse of the Client’s data after exit.</p>
      <p><strong>7.4</strong> 360 Degree Cloud may immediately suspend or terminate access to the Service, in whole or in part, without liability, if it reasonably suspects unlawful recording, non-consensual recording, misuse, reverse engineering, security risk, data breach, violation of law, regulatory complaint, third-party complaint, non-payment, abusive use, or use that may expose 360 Degree Cloud to legal, regulatory, commercial or reputational risk.</p>
      <p><strong>7.5</strong> The Client shall promptly provide written undertakings, compliance confirmations, consent records, KYC information, storage information and remedial action reports reasonably requested by 360 Degree Cloud. Failure to provide the same may result in suspension or termination without refund.</p>
      <p><strong>7.6</strong> 360 Degree Cloud shall not be responsible for delays, downtime, data loss, data corruption, failed recording, partial recording, non-recording, duplicate recording, poor audio quality, failed upload, network outage, handset defect, OS restriction, dialer restriction, cloud outage, third-party service failure, force majeure event, or legal/regulatory change beyond its reasonable control.</p>

      <p><strong>8. How These Terms Apply</strong></p>
      <p><strong>8.1</strong> These Product Terms apply whenever a Client subscribes to, trials, or uses Call Anchor under an MSA, PO, or the Master Terms. By issuing or accepting a PO that references Call Anchor, by entering into an MSA that incorporates the Master Terms, or by accessing or using Call Anchor, the Client agrees to these Product Terms together with the Master Terms.</p>

      <p><strong>Acceptance</strong></p>
      <p>No separate signature is required. Acceptance occurs through your MSA, your Purchase Order, or your use of the Service, each of which incorporates these Product Terms and the Master Terms by reference.</p>

    </div>
    <div id="tab16" class="tab-content">
      <h2>WHATSAPP BUSINESS SERVICE LEVEL AGREEMENT</h2>

      <p>This Service Level Agreement (SLA) is made between 360 Degree Cloud ("Provider," "We," or "Us") and ("Client" or "You") for the provision of WhatsApp Business Services, as outlined below.</p>
      <p>By using our WhatsApp Business services, the Customer agrees to the terms and conditions outlined in this Agreement.</p>
      <p>The Terms of Use (&ldquo;Terms&rdquo;) set out herein shall apply to the WhatsApp services (&ldquo;Services&rdquo;) being procured by the Customer under an order form/ purchase order (&ldquo;Order Form&rdquo;) executed between the Customer and 360 Degree. It is understood and acknowledged that the Services are a solution owned and controlled by Meta Platforms Ireland, formerly known as Facebook Ireland Limited (&ldquo;Meta Platforms&rdquo;). It is further understood that the Customer has subscribed to the Services, the pricing, payment terms and duration of such service subscription as detailed in the Customer&rsquo;s Order Form.</p>
      <p>1. Definition</p>
      <p>&ldquo;Customer&rdquo; shall mean the entity or person availing the services under the agreement.</p>
      <p>&ldquo;WhatsApp Business Service &rdquo; 360 degree shall provide a tool or platform that enables businesses to engage with customers through messaging on a large scale.</p>
      <p>&ldquo;Downtime&rdquo; is the period when an application is unavailable or experiences disruptions, potentially due to maintenance, technical issues, or outages, impacting user access and potentially causing financial and reputational damage.</p>
      <p>&ldquo;Uptime&rdquo; is the percentage of time a system, application, or service is operational and available to users.</p>
      <p>&ldquo;Third Party&rdquo; refers to the service provider or platform that offers services or infrastructure related to the provisions of WhatsApp messaging, i.e., META and other communication services.</p>
      <p>2. Scope of Service</p>
      <p>2.1 Configuration of WhatsApp accounts within the Salesforce environment.</p>
      <p>2.2 The 360 degree will charge a one-time setup fee for the integration services. The exact amount of the setup fee will be determined based on the complexity and specific requirements of the Client, as agreed upon by both parties in the order form before the commencement of the services.</p>
      <p>2.3 Any services requested by the Client beyond the initial setup and integration will be considered additional services. These services will be charged separately, with fees and payment terms to be mutually agreed upon in writing by both parties on a case-by-case basis.</p>
      <p>2.4 The 360 degree&rsquo;s responsibilities do not include support or maintenance of the WhatsApp and Meta services post-integration. The Client will be responsible for any charges levied by WhatsApp and Meta for their services.</p>
      <p>3. Service Availability</p>
      <p>3.1 Service Uptime Guarantee: We commit to providing 99% uptime for the WhatsApp Business services, subject to third-party services. It shall also exclude planned maintenance.</p>
      <p>3.2 Scheduled Maintenance: Any scheduled maintenance that might affect the availability of services will be communicated to the Client at least 48 hours in advance.</p>
      <p>3.3 Downtime: In case of service downtime is caused by system failure or network issues due to Meta, 360 Degree shall have no liability for recovery.</p>
      <p>3.4 Timely Payment: The Customer shall make timely payments for the Services as per the Order Form, failing which, 360 degree reserves the right to suspend the usage of the Services.</p>
      <p>3.5 Revised Price: Subject to any fluctuations or changes in the pricing structure of Meta Platforms, 360 reserves the right to modify the agreed-upon pricing. In the event of such adjustments, 360 shall provide prior written notice to the customer. Such changes will be effective as per the terms outlined in the notice.</p>
      <p>4. Customer Responsibilities</p>
      <p>4.1 Customer shall at all times be responsible for the creation of the content and creatives of the WhatsApp messages it proposes to send as part of the Services. The customer will at all times be liable for the consequences arising from the Content.</p>
      <p>4.2 Customer shall ensure that the Content is not infringing, libellous, defamatory, obscene, pornographic, abusive, harmful, threatening, harassing, stalking, embarrassing tortuous, offensive, hateful, or racially, ethnically or otherwise objectionable, misleading or violating any law or rules laid down by statute or any right of any individual or third party.</p>
      <p>4.3 Customer shall obtain prior permission from its end recipients and keep a record of their valid opt-in proofs before starting the process of sending the WhatsApp messages. 360 degree shall be entitled to reimbursement of all costs and expenses incurred by it to</p>
      <p>defend any claims or address any complaints made by a recipient, or by Meta Platforms, or any other party or entity, for sending unsolicited WhatsApp messages.</p>
      <p>4.4 The Customer will not (a) resell the WhatsApp solution or allow third parties to integrate with, access or use the WhatsApp solution, unless otherwise permitted by 360 degree in writing or (b) use any of the Meta Platforms or WhatsApp names and trademarks in any way (unless permitted under another agreement between the User and Meta Platforms) or (c) transfer any of its rights or obligations under these Terms to anyone else without User and Meta Platforms&rsquo; consent.</p>
      <p>5. WhatsApp Compliance</p>
      <p>5.1 Our Service is not affiliated with, authorized by, endorsed by, or in any way officially connected with WhatsApp Inc. or any of its subsidiaries or affiliates.</p>
      <p>5.2. The use of our Service must comply with WhatsApp's Terms of Service.</p>
      <p>5.3. We may modify our Service at any time to maintain compliance with WhatsApp's policies or technical requirements.</p>


    </div>
    <div id="tab17" class="tab-content">
      <h2>MASS EMAIL SERVICE LEVEL AGREEMENT</h2>


      <p>This Service Level Agreement (SLA) is made between 360 Degree Cloud ("Provider," "We," or</p>
      <p>"Us") and ("Customer&rdquo;, Client or "You") for the provision of Mass Mail Services, as outlined below.</p>
      <p>By using our Mass Mail services, the Customer agrees to the terms and conditions outlined in this Agreement.</p>
      <p>1. Definition</p>
      <p>&ldquo;360 Degree Mass Mailer&rdquo; is a comprehensive tool designed to facilitate the sending of bulk emails to large audiences efficiently and securely. This service is built specifically for Salesforce users, offering seamless integration and a host of advanced features tailored to enhance email marketing efforts. The Service includes, but is not limited to, features such as streamlined email marketing, automation, Salesforce integration, email personalization, email tracking, and email reputation management. The Service allows users to create, send, and manage mass email campaigns directly through Salesforce.</p>
      <p>&ldquo;Salesforce Platform&rdquo; refers to the third-party platform on which the Company&rsquo;s application runs. 360 Degree Cloud does not own, control, or operate the Salesforce Platform.</p>
      <p>&ldquo;Opt-out/Unsubscribe&rdquo; refers to the process by which an individual withdraws their consent to receive further communications, typically marketing emails, from a business or service. In the context of email marketing, opt-out allows a recipient to stop receiving promotional, newsletter, or marketing-related emails, while still potentially receiving other types of communications, such as transactional or support-related emails.</p>
      <p>&ldquo;Recipient&rdquo; refers to an individual or entity that receives a message, communication, or piece of content, such as an email, letter, or notification.</p>
      <p>2. Subject to these Terms, the 360 Degree Cloud grants Customer a non-exclusive, non-transferable, revocable license to access and use the Service for its intended purpose, solely for your business or personal use.</p>
      <p>3. Use of the Service</p>
      <p>Customer agree to use the Service in compliance with all applicable laws and regulations. Customer shall not:</p>
      <p>● Violate the rights of any third party, including intellectual property rights or privacy rights.</p>
      <p>● Use the Service for any unlawful purpose, including spamming or sending unsolicited emails.</p>
      <p>● Engage in activities that could harm or interfere with the operation of the Service or its infrastructure.</p>
      <p>4. Customer Responsibility: As a Customer of 360 Mass Mailer, Customers are responsible for the content, management, and distribution of any email campaigns you create using the Service. Customers agree to ensure that all email campaigns comply with applicable laws, including but not limited to the CAN-SPAM Act, GDPR, and other email marketing regulations. This includes obtaining appropriate consent for the emails sent and managing opt-outs and unsubscribes as required by law.</p>
      <p>5. Automated emails: If the Customer chooses to use 360 Mass Mailer&rsquo;s automated features (such as email journeys or sequences), the Customer must ensure that all automated campaigns honor opt-out requests. This means that if a recipient unsubscribes from one email within a series, they should be automatically unsubscribed from all future marketing communications. You are responsible for configuring your campaigns to adhere to these requirements.</p>
    </div>
    <div id="tab23" class="tab-content">
      <h2>TEXTOLIC SERVICE LEVEL AGREEMENT </h2>
      <p>This Service Level Agreement (SLA) is made between 360 Degree Cloud ("Provider," "We," or "Us") and (“Customer”, "Client" or "You") for the provision of Textolic Services, as outlined below.</p>
      <p>By using our Textolic services, the Customer agrees to the terms and conditions outlined in this Agreement. </p>
      <p>1. Definition </p>
      <p>“Textolic service” is a comprehensive communication solution that enhances customer engagement within Salesforce. This application directly integrates SMS, WhatsApp, and other messaging platforms into Salesforce, enabling businesses to manage communications efficiently.</p>
      <p>“Salesforce Platform” refers to the third-party platform on which the Company’s application runs. 360 Degree Cloud does not own, control, or operate the Salesforce Platform.</p>
      <p>2. Account Registration and Usage</p>
      <p>2.1 Customers are responsible for maintaining the confidentiality of their account credentials.</p>
      <p>2.2 Customer agree to use the service in compliance with applicable laws and regulations.</p>
      <p>3. Message Limits and Delivery</p>
      <p>3.1 The service may have limits on the number of messages that can be sent or received, depending on the plan selected.</p>
      <p>3.2 Textolic makes no guarantees regarding the delivery of messages, as factors beyond our control (e.g., network issues, carrier limitations) can affect message delivery.</p>
      <p>4. Prohibited Use</p>
      <p>The user shall be prohibited from sending unsolicited marketing messages, violating any applicable laws or third-party rights and interfering with or disrupting the services or networks connected to the service.</p>
    </div>
    <div id="tab18" class="tab-content">
      <h2>MERGE DUPLICATES SERVICE LEVEL AGREEMENT</h2>

      <p>This Service Level Agreement ("SLA") is made between 360 Degree Cloud ("Provider," "We," or "Us") and ("Customer," "Client," or "You") for the provision of Merge Duplicates services, as outlined below.</p>
      <p>By using our Merge Duplicates services, the Customer agrees to the terms and conditions outlined in this Agreement.</p>
      <p>1. Definitions</p>
      <p>"Merge Duplicates Service" refers to a specialized cloud-based solution designed for identifying, managing, and merging duplicate records within the Salesforce environment to maintain data integrity and accuracy.</p>
      <p>"Salesforce Platform" refers to the third-party platform on which the Company&rsquo;s application runs. 360 Degree Cloud does not own, control, or operate the Salesforce Platform.</p>
      <p>2. Scope of Service</p>
      <p>2.1 360 Degree agrees to provide the Customer with access to the Merge Duplicate Service, which is designed to assist the Customer in identifying, filtering, and merging duplicate records within Salesforce. The Service will automatically identify and merge duplicate records in Salesforce based on predefined criteria or rules set by the Customer.</p>
      <p>2.2 The Service will provide the capability to identify duplicate records within the Customer&rsquo;s Salesforce instance, utilizing predefined or custom filter rules as configured by the Customer. The Service will enable the Customer to filter out and eliminate duplicate records from the Salesforce database by applying custom filters and deduplication logic.</p>
      <p>2.3 The Service will provide real-time deduplication, allowing duplicate records to be identified and merged as they are entered into the Salesforce system.</p>
      <p>2.4 The Service includes access to a User-Friendly Dashboard that provides an intuitive interface for the Customer to perform deduplication tasks, including the identification, filtering, and merging of duplicate records.</p>
      <p>3. Service Availability</p>
      <p>Subject to the throughput limits and factors outside of the Provider's control, including but not limited to external factors as outlined in the terms on website, 360 Degree Cloud will use commercially reasonable efforts to ensure the Merge Duplicate Service meets the Target Availability which means 360 degree ensures to provide the Service maximum time, excluding exclusions as defined below.</p>
      <p>4. Exclusions</p>
      <p>The Target Availability does not apply during periods of unavailability caused by any of the following reasons:</p>
      <p>4.1 Any unavailability resulting from the Customer&rsquo;s use of the Merge Duplicate Service in a manner not authorized by the service documentation or any other written agreement between the Customer and 360 Degree Cloud regarding the Customer&rsquo;s use of the Service.</p>
      <p>4.2 General internet problems, force majeure events, or any factors outside of the reasonable control of 360 Degree Cloud, including but not limited to denial of service attacks or third-party service outages.</p>
      <p>4.3 Issues related to the Customer&rsquo;s equipment, software, network connections, utilities, or other infrastructure.</p>
      <p>4.4 Scheduled maintenance or emergency maintenance, whether planned or unplanned.</p>
      <p>4.5 This Agreement does not apply to any version of the Merge Duplicate Service that is no longer available or supported</p>
      <p>5. Customer Responsibility</p>
      <p>5.1 The Customer is responsible for utilizing the dashboard to configure and manage deduplication tasks, and for ensuring that appropriate permissions are set for those who have access to the dashboard.</p>
      <p>5.2 The Customer understands and agrees that any merges performed using this functionality are permanent actions and may not be reversible.</p>
      <p>5.3 The Customer shall ensure that backups of all relevant data are performed before utilizing the auto-merge functionality to avoid unintentional data loss.</p>
      <p>5.7 The Customer acknowledges that the auto-merge functionality is designed to streamline the deduplication process, but it is the responsibility of the Customer to configure and verify the criteria for merging duplicates.</p>
      <p>5.8 The Customer is responsible for determining and configuring the appropriate criteria for identifying duplicate records within their Salesforce instance.</p>
      <p>5.9 The Customer acknowledges that the effectiveness of the identification of duplicates is contingent on the accuracy of the criteria set and the data provided.</p>
      <p>5.10 Ensure that the data you upload or integrate into the App is accurate, complete, and owned or legally authorized for use by you</p>
      <p>5.11 The Customer shall use the App in compliance with all applicable laws, including but not limited to data privacy laws, regulations regarding the use of personal information, and any contractual obligations related to data protection.</p>
      <p>6. Scheduled Maintenance</p>
      <p>6.1 For all scheduled maintenance intended to achieve Target Availability, 360 Degree Cloud will use commercially reasonable efforts to notify the Customer at least five (5) business days prior to beginning such maintenance via email.</p>
      <p>6.2 Scheduled maintenance will be conducted, to the extent practicable, during weekend hours to minimize disruption.</p>
      <p>6.3 In the event of unavailability due to scheduled or unscheduled maintenance, 360 Degree Cloud will make reasonable efforts to minimize disruptions, inaccessibility, or inoperability of the Merge Duplicate Service, and will ensure the service is restored as promptly as possible.</p>


    </div>
    <div id="tab19" class="tab-content">
      <h2>VTM & VTP SERVICE LEVEL AGREEMENT</h2>

      <p>This Service Level Agreement ("SLA") is made between 360 Degree Cloud ("Provider," "We," or "Us") and ("Customer", "Client" or "You") for the provision of Virtual Telephony Manager (VTM) and Virtual Telephony Platform (VTP) services, as outlined below.</p>
      <p>By using our VTM &amp; VTP services, the Customer agrees to the terms and conditions outlined in this Agreement.</p>
      <p>1. Definitions:</p>
      <p>"Verify The Mail (VTM)" refers to a comprehensive cloud-based telephony management solution integrated within Salesforce to validate and confirm the authenticity of email addresses. This tool helps businesses and individuals ensure the accuracy of email addresses, improve email deliverability, reduce bounce rates, and maintain a strong sender reputation.</p>
      <p>"Verify The Phone (VTP)" is a feature that ensures the accuracy of phone numbers directly within Salesforce. It validates numbers in real-time at the point of entry, guaranteeing that only valid and accurate data is recorded. VTP supports both bulk and manual verification, helping maintain clean data for improved communication and targeted outreach.</p>
      <p>"Salesforce Platform" refers to the third-party platform on which the Company&rsquo;s application runs. 360 Degree Cloud does not own, control, or operate the Salesforce Platform.</p>
      <p>&ldquo;Uptime&rdquo; is the period during which a system, service, or website is operational and accessible.</p>
      <p>&ldquo;Downtime&rdquo; is the period during which a system, service, or website is unavailable or experiencing problems.</p>
      <p>2. Scope of Services</p>
      <p>360 Degree Cloud shall provide the following services under VTM &amp; VTP services</p>
      <p>1. The configuration and integration of telephony systems within the Salesforce environment.</p>
      <p>2. The implementation of automated call management systems, including but not limited to advanced Interactive Voice Response (IVR) systems, voicemail integration, and call routing capabilities.</p>
      <p>3. The provision of real-time analytics and the establishment of comprehensive reporting functionalities.</p>
      <p>4. 360 degree shall provide maintenance, support, and the provision of periodic updates as agreed between the parties.</p>
      <p>3. Service Availability:</p>
      <p>3.1 Service Uptime Guarantee: We commit to providing maximum uptime for the VTM &amp; VTP services, excluding planned maintenance.</p>
      <p>3.2 Scheduled Maintenance: Scheduled maintenance affecting the service availability will be communicated to the Client at least 48 hours in advance.</p>
      <p>3.3 Downtime: 360 Degree Cloud Technology shall have no liability for service downtime caused by system failure or network issues beyond its direct control.</p>
      <p>3.4 Timely Payment: The Customer shall make timely payments for the Services as per the Order Form, failing which, 360 degree reserves the right to suspend the usage of the Services.</p>
      <p>4. Customer Responsibilities:</p>
      <p>4.1 The Customer shall maintain the confidentiality of all account credentials and shall not disclose such credentials without prior written consent from 360 Degree Cloud. The Customer shall be solely responsible for any activities conducted under their account.</p>
      <p>4.2 The Customer shall use the services in full compliance with all applicable local, state, national, and international laws, regulations, and industry standards, including but not limited to data privacy and telecommunications regulations.</p>
      <p>4.3 The Customer shall obtain and maintain the necessary consents and permissions from all recipients before initiating any recorded or automated calls, in compliance with all applicable laws, including, but not limited to, the Telephone Consumer Protection Act (TCPA) and other relevant regulations.</p>
      <p>4.5 The Customer agrees and undertakes that, while using 360 Degree Cloud's services, it shall not utilize the services for any unlawful, fraudulent, or malicious purposes.</p>



    </div>

    <div id="tab20" class="tab-content active">
      <h2>TERMS AND CONDITIONS FOR ALL SERVICES</h2>


      <p>It is important that you review and understand these terms before using our services. All the terms are legally
        binding. </p>
      <p>Our services are generally intended for business or professional use only. </p>
      <p><em>These terms are effective on the date you accept them. This includes any additional terms that are referenced in
          these terms and available at hyperlinks and any order forms that you may execute with 360 Degree. </em></p>
      <p><em>PLEASE REVIEW THESE “360 DEGREE” TERMS OF SERVICE CAREFULLY. </em></p>
      <p>These 360 DEGREE CLOUD Terms of Service (“<strong><em>Agreement</em></strong>”) set forth the terms for your use of
        the Services and are effective as of the date you accept or otherwise agree to the terms of 360 Degree Cloud
        agreement. This consists of these 360 DEGREE Terms of Service, and terms referenced in these Terms of Service which
        are available at hyperlinks, and any applicable Order Form(s) (as defined below). This is between the applicable 360
        DEGREE entity identified below (“<strong><em>360 Degree</em></strong>” or “<strong>360 Degree Cloud</strong>”) and you
        or the organization on whose behalf you are accepting or otherwise agreeing to the terms of this Agreement
        (“<strong><em>you</em></strong><em>"</em>,<em> "</em><strong><em>your</em></strong><em>"</em>,<em>
          "</em><strong><em>yours</em></strong><em>"</em>, or<em> "</em><strong><em>Customer</em></strong>”)</p>
      <p><em>These terms might change. We will let you know at least 30 days before we make any significant changes that
          impact you or your use of our services, unless we are unable to because of changes in laws, regulations, or carrier
          requirements. The updated version of these terms will be posted on this page.</em></p>
      <p><em>If you keep using our services after these terms have changed and gone into effect, that means you have accepted
          those changes and they are legally binding on you. If you do not agree with the changed terms, you must stop using
          our services immediately.</em></p>
      <h3><a id="_uizhskpvyeml"></a><a id="_Toc2034475966"></a><strong>1. Definitions</strong></h3>
      <p><strong><em>Affiliate</em></strong>” means any entity that directly or indirectly controls or is controlled by, or is
        under common control with, the party specified. For purposes of this definition, “control” means direct or indirect
        ownership of more than fifty percent (50%) of the voting interests of the subject entity.</p>
      <p>“<strong><em>Customer Data</em></strong>” means any data (a) provided by you or your End Users (as defined below) to
        360 Degree in connection with your use of the Services or (b) generated for your use as part of the Services. Customer
        Data excludes any 360 Degree Data (as defined below).</p>
      <p>“<strong><em>Customer Services</em></strong>” means any software application or other products and services provided
        by you and used in connection with your use of the Services under this Agreement.</p>
      <p>“<strong><em>Data Protection Laws</em></strong>” means all laws and regulations relating to the processing of Personal Data and privacy that apply to a party, including (a) the UK GDPR and the Data Protection Act 2018, in each case as amended by the Data (Use and Access) Act 2025; (b) the Privacy and Electronic Communications (EC Directive) Regulations 2003 ("PECR"), as amended; (c) Regulation (EU) 2016/679 (the "EU GDPR") and Member State implementing laws; and (d) the Digital Personal Data Protection Act, 2023 (India).</p>
      <p>“<strong><em>Documentation</em></strong>” means 360 Degree’s documentation, including any usage guides and policies,
        for the Services.</p>
      <p>“<strong><em>End User</em></strong>” means any user of the Services, including via any Customer Services.</p>
      <p>“<strong><em>Malicious Code</em></strong>” means code, files, scripts, agents, or programs intended to do harm,
        including, for example, viruses, worms, time bombs and Trojan horses.</p>
      <p>“<strong><em>Order Form</em></strong>” means an ordering document between you and 360 Degree, or any of their
        Affiliates, that specifies mutually agreed upon rates for certain Services and any commercial terms related thereto.
      </p>
      <p>“<strong><em>Personal Data</em></strong>”, “<strong><em>controller</em></strong>”, “<strong><em>processor</em></strong>”, “<strong><em>data subject</em></strong>”, “<strong><em>processing</em></strong>” and “<strong><em>personal data breach</em></strong>” have the meanings given to them in the applicable Data Protection Laws.</p>
      <p>“<strong><em>Services</em></strong>” means the products and services provided by 360 Degree or its Affiliates, as
        applicable, including all updates, modifications, or improvements thereto, that you purchase pursuant to an Order Form
        or otherwise use. Services exclude any Customer Services.</p>
      <p>“<strong><em>Sub-processor</em></strong>” means any third party engaged by 360 Degree to process Personal Data on behalf of the Customer in connection with the Services. The current list of Sub-processors is published at the location identified in the 360 Degree Data Protection Addendum.</p>
      <p>"<strong><em>360 Degree Acceptable Use Policy</em></strong>" means certain terms relating to the use of the Services,
        including the Service and Country Specific Requirements set forth therein, the current version of which is available
        at <a href="#" style="color:#00bcd4;" onclick="openTab(event, 'tab21', 'tab-btn-21')">"<strong><em>360 Degree Acceptable Use Policy</em></strong>"</a></p>
      <p>"<strong><em>360 degree intellectual property rights</em></strong>" means certain terms relating to the use of the
        Services, including the Service and Country Specific Requirements set forth therein, the current version of which is
        available at <a href="#" style="color:#00bcd4;" onclick="openTab(event, 'tab2', 'tab-btn-2')"><strong><em>360 degree intellectual property rights </em>
          </strong></a></p>
      <p>"<strong><em> 360 degree security overview</em></strong>" means certain terms relating to the use of the Services,
        including the Service and Country Specific Requirements set forth therein, the current version of which is available
        at <a href="#" style="color:#00bcd4;" onclick="openTab(event, 'tab7', 'tab-btn-7')"><strong><em>360 degree security overview</em></strong></a></p>
      <p>“<strong><em>360 Degree Data</em></strong>” means any data that is (a) derived or generated from the use or provision
        of the Services that does not identify you, your End Users, or any natural person or is anonymized, de-identified,
        and/or aggregated such that it can no longer identify you, your End Users, or any natural person or (b) if applicable,
        any Customer Data that is anonymized, de-identified, and/or aggregated by 360 Degree in accordance with this
        Agreement.</p>
      <p>“<strong><em>360 Degree Data Protection Addendum</em></strong>” means the personal data processing-related terms for
        the Services, the current version of which is available at <a href="#" style="color:#00bcd4;" onclick="openTab(event, 'tab22', 'tab-btn-22')">
          <strong><em>360 Degree Data Protection Addendum</em></strong>
        </a>. The 360 Degree Data Protection Addendum is incorporated into and forms part of this Agreement and applies to all processing of Personal Data by 360 Degree on behalf of the Customer.
      </p>
      <p><strong><em>“Intellectual Property Rights”</em></strong> means patents, trademarks, service marks, trade names,
        design rights, copyright, database rights, semi-conductor topography rights, know-how and other intellectual property
        rights (of whatever nature and wherever arising) whether registered or unregistered including applications for the
        grant of any such rights.</p>
      <p><strong><em>“Subscription Fees” </em></strong>means the recurring licence/subscription fees for the Services set out in an Order Form, excluding all other fees (including implementation, onboarding, support, professional services, consulting, credits, Communications Surcharges, carrier/10DLC fees, and Taxes).</p>
      <h3><a id="_uizhskpvyeml"></a><a id="_Toc2034475966"></a><strong>2. SERVICES</strong></h3>
      <p><em>We will make our services available to you according to our published documentation on our website and our
          service level agreement</em>s<em>. </em></p>
      <p>2.1 Provision of the Services. </p>
      <p>360 degree will: (a) provide the Services to you pursuant to this Agreement, the applicable Documentation, and any
        applicable Order Form(s); (b) comply with the applicable 360 degree SLA; (c) comply with the security terms for the
        Services as set forth in the 360 degree Security Overview; (d) provide the Services in accordance with laws applicable
        to 360 degree’s provision of the Services to its customers generally (i.e., without regard for your particular use of
        the Services), subject to your use of the Services in accordance with this Agreement, the applicable Documentation,
        and any applicable Order Form(s); (e) make commercially reasonable efforts to use industry standard measures designed
        to scan, detect, and delete Malicious Code, and (f) use commercially reasonable efforts to provide you with applicable
        support for the Services as described in the applicable Support Terms.</p>
      <p>2.2 Customer Responsibilities. </p>
      <p>Customer shall: (a) be solely responsible for all use of the Services and Documentation under your account and the Customer Services; (b) not transfer, resell, lease, license, or otherwise make available the Services to third parties (except to make the Services available to your End Users) or offer them on a standalone basis; (c) use the Services only in accordance with this Agreement, the 360 degree Acceptable Use Policy, the applicable Documentation, any applicable Order Form(s), and applicable law or regulation; (d) be solely responsible for all acts, omissions, and activities of your End Users, including their compliance with this Agreement, the 360 degree Acceptable Use Policy, the applicable Documentation, any applicable Order Form(s), and applicable law or regulation; (e) use commercially reasonable efforts to prevent unauthorized access to or use of the Services and notify 360 degree promptly of any such unauthorized access or use; (f) provide reasonable cooperation regarding information requests from law enforcement, regulators, or telecommunications providers; and (g) comply with your representations and warranties set forth in Section 5 (Representations, Warranties, and Disclaimer).</p>
      <p>The Customer is the sender of, and where applicable the person who instigates, every communication transmitted using the Services. The Customer is solely responsible for determining the lawful basis for, and for obtaining and maintaining any consent required for, each such communication, and for implementing, managing and honouring all communication preferences, including SMS opt-outs, call preferences and unsubscribe requests, as required under all applicable Data Protection Laws and direct marketing laws. Without limiting the foregoing, where the Customer sends communications to recipients in the United Kingdom or the European Economic Area, the Customer shall comply with Section 10.5 (United Kingdom and European Economic Area) and with PECR, including Regulations 21, 21A, 21B, 22 and 23. The Customer shall maintain verifiable records of consents, opt-ins and opt-outs, including the date, source and the exact wording of any consent statement presented to the recipient, and shall produce such records to 360 Degree within five (5) business days of request. The Customer must process all opt-out requests without undue delay and in any event before the next scheduled transmission to that recipient.</p>
      <p>Failure to comply may result in suspension or termination of Services as outlined in the Acceptable Use Policy. 360 Degree Cloud disclaims any liability arising from the Customer’s failure to manage consent and opt-outs properly.</p>
      <p>2.3 Suspension of Services</p>
      <p>360 Degree may suspend the Services upon written notice to you if 360 Degree, in good faith, determines: (a) that you
        or your End Users materially breach (or 360 Degree, in good faith, believes that you or your End Users have materially
        breached) the 360 Degree Acceptable Use Policy; (b) there is an unusual and material spike or increase in your use of
        the Services and that such traffic or use is fraudulent or materially and negatively impacting the operating
        capability of the Services; (c) that its provision of the Services is prohibited by applicable law or regulation; (d)
        there is any use of the Services by you or your End Users that threatens the security, integrity, or availability of
        the Services; or (e) that information in your account is untrue, inaccurate, or incomplete. You remain responsible for
        the Fees (as defined in Section 3.3 (Payment Terms)); (f) an access provider, telecom operator, or regulatory authority (including under TRAI regulations or Directions, or any direction, enforcement notice or information notice issued by the Information Commissioner's Office or Ofcom) has suspended, barred, held, or flagged any telecom resource associated with the Customer or its End Users, or such action is required to comply with applicable law or regulation.</p>
      <p>2.4 Changes to the Services. </p>
      <p>You acknowledge that the features and functions of the Services may change over time; provided, however, 360 Degree
        will not materially decrease the overall functionality of the Services. It is your responsibility to ensure that the
        Customer Services are compatible with the Services. 360 Degree endeavours to avoid changes to the Services that are
        not backwards compatible, However, if any such changes become necessary, 360 degrees will use commercially reasonable
        efforts to notify you at least thirty (30) days before implementation. In the event 360 Degree makes a non-backwards
        compatible change to certain Services and such change materially and negatively impacts your use of the Services
        (“<strong><em>Adverse Change</em></strong>”), (a) you will notify 360 Degree of the Adverse Change and (b) 360 degree
        may agree to work with you to resolve or otherwise address the Adverse Change, except where 360 degree, in its sole
        discretion, has determined that an Adverse Change is required for security reasons, by telecommunications providers,
        or to comply with applicable law or regulation.</p>
      <h3><a id="_uizhskpvyeml"></a><a id="_Toc2034475966"></a><strong>3. FEES AND PAYMENT TERMS</strong></h3>
      <p>3.1 Fees</p>
      <p>Customers agree to pay the fees for the specified services set forth in the applicable signed Order Form(s).</p>
      <p>3.2 Invoicing </p>
      <p>The invoice shall raise, except as otherwise set forth in the applicable Order Form(s), (a) invoices will be sent to
        you each month via email to the email address(es) you designate in your account and (b) you will pay the Fees due
        within thirty (30) days of the date of the invoice. Except as otherwise set forth in the applicable Order Form(s) or
        an invoice to the extent you procure the Services without any applicable Order Form(s), the Fees are payable in United
        States dollars or such other currency as is specified in the applicable Order Form. If you fail to pay the Fees, then 360 degree may
        (i) assess and you will pay a late fee of 1.5% per month (or the maximum rate permitted by applicable law, if lower) and (ii) suspend the provision of the Services to all of your
        accounts until the Fees due are paid in full. </p>
      <p>3.3 Payment Disputes. </p>
      <p>You will notify 360 degree in writing within thirty (30) days of the date 360 degree bills you for any Fees that you wish to dispute. You may withhold the disputed Fees until the dispute is resolved. Where you are disputing any Fees, you must act reasonably and in good faith and will cooperate diligently with 360 degree to resolve the dispute. 360 degree will not charge you a late fee or suspend the provision of the Services for unpaid Fees that are in dispute, unless you fail to cooperate diligently with 360 degree or 360 degree determines the dispute is not reasonable or brought in good faith by you.</p>
      <p>
        Customer shall be solely responsible to verify the accuracy and completeness of invoice details prior to making the payment. Any dispute relating to an invoice, whether partially or fully paid, must be raised in writing within thirty (30) days from the invoice date. Failure to do so shall constitute acceptance of the invoice in full and waiver of any right to dispute it thereafter. 360 Degree Cloud shall have no obligation or liability to make any adjustments, issue refunds, or provide compensation for any claims made thereafter.</p>
      <p>
        In the event that the Services are suspended due to the Customer’s non-compliance with the terms of the Agreement, or any breach thereof, 360 Degree shall not be obligated to issue any refund or provide any adjustment to payments received, regardless of whether such payments have been made in full, in part, or on a proportional basis relative to the total contract value. All payments made prior to such suspension shall be deemed non-refundable and shall not be credited toward any future services.</p>
      <p>
        360 Degree shall not, except to the extent such loss arises from 360 Degree's own breach of this Agreement, negligence, wilful misconduct or fraud, be held liable for any loss, damage, cost, or expense whether direct, indirect, incidental, special, or consequential incurred by the Customer as a result of such suspension of Services due to Client’s or any third party’s fault. The Customer expressly acknowledges and agrees that any such suspension is undertaken at the Customer’s sole risk and that 360 Degree Cloud shall have no responsibility or liability in connection therewith.</p>
      <p>3.4 Taxes and Communications Surcharges</p>
      <p>3.4.1 Taxes. </p>
      <p>All fees are exclusive of any applicable taxes, levies, duties, or other similar exactions imposed by a legal,
        governmental, or regulatory authority in any applicable jurisdiction, including, without limitation, sales, use,
        value-added, consumption, communications, or withholding taxes (collectively, “<em>Taxes</em>”). You will pay all
        Taxes in connection with this Agreement, excluding any taxes based on 360 degrees’ net income, property, or employees.
        If you are required by applicable law to withhold any Taxes from payments owed to 360 degree, you will reduce or
        eliminate such withheld Taxes upon receipt of the appropriate tax certificate or document provided by 360 degree. You
        will provide 360 degree with proof of payment of any withheld Taxes to the appropriate authority. Taxes will be shown
        as a separate line item on an invoice.</p>
      <p>3.4.2 Communications Charges. </p>
      <p>If applicable, all fees are exclusive of any applicable communications service or telecommunication provider (e.g.,
        carrier) fees or surcharges (collectively, “<em>Communications Surcharges</em>”). You will pay all Communications
        Surcharges in connection with your use of the Services. Communications Surcharges will be shown as a separate line
        item on an invoice. You will pay all costs, fines, or penalties that are imposed on 360 degree by a government or
        regulatory body or a telecommunications provider as a result of your or your End Users’ use of the Services.</p>
      <h3><a id="_o0lxls39t2j0"></a><a id="_Toc609313972"></a><strong>4. Ownership, Customer Data, and
          Confidentiality</strong></h3>
      <p>4.1 Ownership Rights. As between the parties, 360 Degree exclusively owns and reserves all rights, titles, and
        interests in and to the Services, 360 Degree's Confidential Information, 360 degree Data, as well as any feedback or
        suggestions you or your End Users provide regarding the Services. As between the parties, you exclusively own and
        reserve all rights, titles, and interest in and to the Customer Services, your Confidential Information, and Customer
        Data, subject to 360 degree’s rights to access Customer Data as per this Agreement. </p>
      <p>4.2 Customer Data. You grant 360 degree and its Affiliates the right to access Customer Data as necessary to provide
        the Services in a manner that is consistent with this Agreement, if applicable. Except as expressly described in Section 9.11 (Data Storage), the 360 Degree Data Protection Addendum and the 360 Degree Security Overview, 360 Degree does not persistently retain Customer Data. The Customer remains responsible for the retention, backup, deletion and restoration of Customer Data within its own environment. You are responsible for the quality
        and integrity of Customer Data. </p>
      <p>360 Degree operates as an application installed within the customer's Salesforce environment. All data processing and
        operations occur entirely within the customer’s Salesforce instance, save for the limited system-level metadata described in Section 9.11.2 and the security logging described in the 360 Degree Security Overview. 360 Degree does not store, or retain any customer
        data or access any customer data outside of what is strictly necessary for operational purposes. The only data
        elements that may be shared or referenced by 360 Degree are limited to billing information and the associated email
        address. No other customer data is stored, processed, or retained by 360 Degree.</p>
      <p>4.3 Confidentiality</p>
      <p>4.3.1 Definition. “<em>Confidential Information</em>” means any information or data, regardless of whether it is in
        tangible form, disclosed by either party (“<strong><em>Disclosing Party</em></strong>”) to the other party
        (“<strong><em>Receiving Party</em></strong>”) that is marked or otherwise designated as confidential or proprietary or
        that should otherwise be reasonably understood to be confidential given the nature of the information and the
        circumstances surrounding the disclosure, including, without limitation, this Agreement, Order Form(s), Customer
        Data, security reports and attestations, audit reports, customer lists, pricing,
        concepts, processes, plans, designs and other strategies, “know how”, inventions, and financial, technical, or other
        business information and materials of Disclosing Party and its Affiliates. Confidential Information does not include
        any information which: (a) is publicly available through no breach of this Agreement or fault of Receiving Party; (b)
        was properly known by Receiving Party, and to its knowledge, without any restriction, prior to disclosure by
        Disclosing Party; (c) was properly disclosed to Receiving Party, and to its knowledge, without any restriction, by
        another person without violation of Disclosing Party's rights; or (d) is independently developed by Receiving Party
        without use of or reference to the Confidential Information of Disclosing Party.</p>
      <p>4.3.2 Use and Disclosure. Except as otherwise authorized under Section 4.3.3 (Compelled Disclosure), under the 360
        Degree Data Protection Addendum, or by Disclosing Party in writing, Receiving Party will not (a) use any Confidential
        Information of Disclosing Party for any purpose outside of exercising Receiving Party’s rights or fulfilling its
        obligations under this Agreement and (b) disclose or make Confidential Information of Disclosing Party available to
        any party, except to Receiving Party's Affiliates, and Receiving Party's and its Affiliates’ respective employees,
        legal counsel, accountants, contractors, and in 360 degree’s case, subcontractors (collectively,
        “<strong><em>Representatives</em></strong>”) who have a “need to know” as necessary for Receiving Party to exercise
        its rights or fulfill its obligations under this Agreement. Receiving Party will be responsible for its
        Representatives’ compliance with this Section 4.3. Representatives will be legally bound to protect Confidential
        Information of Disclosing Party under terms of confidentiality that are at least as protective as the terms of this
        Section 4.3. Receiving Party will protect the confidentiality of Confidential Information of Disclosing Party using
        the same degree of care that it uses to protect the confidentiality of its own confidential information but in no
        event less than reasonable care.</p>
      <p>4.3.3 Compelled Disclosure</p>
      <p>Receiving Party may disclose Confidential Information of Disclosing Party if so required pursuant to a request from a
        regulator or pursuant to regulation, law, subpoena, or court order (collectively, “<strong><em>Compelled
            Disclosures</em></strong>”), provided Receiving Party gives Disclosing Party written notice of a Compelled
        Disclosure to the extent (a) legally permitted and (b) where, when 360 degree is Receiving Party, it determines that
        such Compelled Disclosure will not unduly interfere with an ongoing investigation into potential illegal activity. The
        receiving Party will provide reasonable cooperation to the Disclosing Party in connection with a Compelled Disclosure
        at the Disclosing Party’s sole expense.</p>
      <p>4.3.4 Injunctive Relief. </p>
      <p>The parties expressly acknowledge and agree that no adequate remedy may exist at law for an actual or threatened
        breach of this Section 4.3 and that, in the event of an actual or threatened breach of the provisions of this Section
        4.3, the non-breaching party will be entitled to seek immediate injunctive and other equitable relief, without waiving
        any other rights or remedies available to it.</p>
      <p>4.4 Use of Marks. </p>
      <p>You grant 360 Degree the right to use and display your name, logo, and a description of your use case(s) on 360
        Degree’s website, in earnings releases and calls, and in marketing and promotional materials, in each case subject to your prior written consent (which may be given or withheld at your discretion) and to your standard
        trademark usage guidelines that you provide to 360 Degree. You may withdraw such consent at any time on written notice, and 360 Degree will cease the relevant use within thirty (30) days.</p>
      <h3><a id="_si5pun80qqbw"></a><a id="_Toc659978099"></a><strong>5. Representations, Warranties, and Disclaimer</strong>
      </h3>
      <p>5.1 Power and Authority Representation. Each party represents and warrants that it has validly accepted or entered
        into this Agreement and has the legal power to do so.</p>
      <p>5.2 Anti-Corruption and International Trade Laws. </p>
      <p>Each party (a) warrants that it will comply with all applicable anti-corruption, anti-money laundering, economic and
        trade sanctions, export controls, and other international trade laws, regulations, and governmental orders
        (collectively, “<strong><em>Anti-Corruption and Trade Laws</em></strong>”) in the jurisdictions that apply directly or
        indirectly to the Services, including, without limitation, the United States, India , Europe, Brazil, Japan etc. , and
        (b) represents that it has not made, offered, promised to make, or authorized any payment or anything of value in
        violation of Anti-Corruption and Trade Laws. You will promptly notify 360 Degree in writing of any actual or potential
        violation of Anti-Corruption and Trade Laws in connection with the use of the Services and take all appropriate steps
        to remedy or resolve such violations, including any steps requested by 360 Degree. If applicable, you represent that
        you have obtained, and warrant that you will continue to obtain, all licenses or other authorizations required to
        transfer the Services. Each party represents that it (and in your case, also your End Users) is not on any government
        prohibited, denied, or unverified-party, sanctions, debarment, or exclusion list or export-controlled related
        restricted party list (collectively, “<strong><em>Sanctions Lists</em></strong>”). You will immediately (i)
        discontinue your use of the Services if you become placed on any Sanctions List and (ii) remove your End Users’ access
        to the Services if your End Users become placed on any Sanctions List. You represent that you have not, and warrant
        that you will not, export, re-export, or transfer the Services to an entity on any Sanctions List without prior
        authorization from the applicable governmental authority. Notwithstanding anything to the contrary in this Agreement,
        either party may terminate this Agreement immediately upon written notice to the other party if the other party is in
        breach of its obligations in Section 5.2. If your account is blocked because it is operating in a country or region
        prohibited under Section 5.2, you will receive notice of your account being inoperable when you attempt to log into
        your account in such a prohibited country or region.</p>
      <p>5.3 Consents and Permissions. </p>
      <p>You represent and warrant that you have provided, and will continue to provide, adequate notices, and that you have obtained, and will continue to obtain, the necessary permissions and consents required to enable 360 Degree to perform its obligations to provide the Services or as permitted by this Agreement.</p>
      <p>5.4 AI Features Disclaimer</p>
      <p>Certain features of the Services may incorporate Artificial Intelligence (“AI”) technologies, including but not limited to ChatGPT-based solutions. AI-generated outputs are provided for informational purposes only and may contain inaccuracies or incomplete information. Clients acknowledge that they are solely responsible for independently verifying the accuracy, completeness, and suitability of any AI outputs before relying on them, and 360 Degree Cloud expressly disclaims liability for any loss or damage resulting from reliance on such outputs.</p>
      <p>5.5 Disclaimer.</p>
      <p>
        WITHOUT LIMITING A PARTY’S EXPRESS WARRANTIES AND OBLIGATIONS HEREUNDER, AND EXCEPT AS EXPRESSLY PROVIDED HEREIN, THE SERVICES ARE PROVIDED “AS IS,” AND NEITHER PARTY MAKES ANY WARRANTY OF ANY KIND, WHETHER EXPRESS, IMPLIED, STATUTORY, OR OTHERWISE, AND EACH PARTY SPECIFICALLY DISCLAIMS ALL IMPLIED WARRANTIES, INCLUDING ANY IMPLIED WARRANTY OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT TO THE FULLEST EXTENT PERMITTED BY LAW. 360 DEGREE ADDITIONALLY DISCLAIMS ALL WARRANTIES RELATED TO TELECOMMUNICATIONS PROVIDERS. YOU ACKNOWLEDGE THE INTERNET AND TELECOMMUNICATIONS PROVIDERS’ NETWORKS ARE INHERENTLY INSECURE AND THAT 360 DEGREE WILL HAVE NO LIABILITY FOR ANY CHANGES TO, INTERCEPTION OF, WHILE IN TRANSIT VIA THE INTERNET OR A TELECOMMUNICATIONS PROVIDER’S NETWORK.</p>
      <p>
        360 DEGREE DOES NOT GUARANTEE DELIVERY, TIMING, OR ROUTING OF MESSAGES OR COMMUNICATIONS. SUCH DELIVERY IS SUBJECT TO THIRD-PARTY NETWORKS AND CONDITIONS BEYOND 360 DEGREE’S CONTROL.</p>
      <p>
        CUSTOMER ACKNOWLEDGES THAT 360 DEGREE IS A TECHNOLOGY INTERMEDIARY AND DOES NOT CONTROL OR INITIATE ANY COMMUNICATION. ALL COMMUNICATIONS ARE INITIATED, CONTROLLED, AND AUTHORIZED SOLELY BY THE CUSTOMER.</p>
      <p>
        CUSTOMER CONFIRMS THAT IT HAS NOT RELIED ON ANY REPRESENTATION, WARRANTY, OR STATEMENT NOT EXPRESSLY SET FORTH IN THIS AGREEMENT.</p>
      <p>NOTHING IN THIS SECTION 5.5 EXCLUDES OR LIMITS ANY LIABILITY THAT CANNOT LAWFULLY BE EXCLUDED OR LIMITED, INCLUDING LIABILITY FOR DEATH OR PERSONAL INJURY CAUSED BY NEGLIGENCE, FOR FRAUD OR FRAUDULENT MISREPRESENTATION, OR UNDER SECTION 2 OF THE SUPPLY OF GOODS AND SERVICES ACT 1982 WHERE APPLICABLE.</p>
      <h3><a id="_si5pun80qqbw"></a><a id="_Toc659978099"></a><strong>6. Mutual Indemnification</strong>
      </h3>
      <p>6.1 Indemnification by 360 Degree</p>
      <p>360 Degree will defend you, your Affiliates and each of their directors, officers and employees from and against any claim, demand, suit or proceeding made or brought against you by a third party alleging that the Services, when used in accordance with this Agreement and the Documentation, infringe or misappropriate that third party's Intellectual Property Rights (a "360 Degree Indemnifiable Claim"), and will indemnify you against damages, reasonable legal fees and costs finally awarded against you, or for settlement amounts approved by 360 Degree, in respect of such claim. If the Services become, or in 360 Degree's reasonable opinion are likely to become, the subject of a 360 Degree Indemnifiable Claim, 360 Degree may at its option and expense (a) procure the right for you to continue using the Services, (b) modify or replace the Services so that they are non-infringing while materially equivalent in functionality, or (c) if neither (a) nor (b) is commercially reasonable, terminate the affected Services on notice and refund a pro-rata portion of pre-paid Subscription Fees for the unexpired term. damages, reasonable legal fees</p>
      <p>6.1.1 Exclusions.</p>
      <p>360 Degree will have no liability or obligation under this Section 6.1 with respect to any 360 Degree Indemnifiable Claim arising out of (a) your use of the Services in breach of this Agreement; (b) the combination, operation, or use of the Services with other applications, portions of applications, products, or services, including, without limitation, the Customer Services or Third Party Services, where the Services would not by themselves be infringing; or (c) Services for which there is no charge.</p>
      <p>360 Degree's aggregate liability under this Section 6.1, including all defence costs, legal fees and settlement amounts, forms part of and shall not exceed the cap in Section 7.2 (Limitation of Liability).</p>
      <p>6.2 Indemnification by Customer. </p>
      <p>You will defend 360 Degree, its Affiliates, and each of their directors, officers, and employees (collectively,
        “<strong><em>360 Degree Indemnified Parties</em></strong>”) from and against any claim, demand, suit, or proceeding
        made or brought against a 360 Degree Indemnified Party by a third party alleging or arising out of: (a) your or your
        End Users’ breach of Section 2.2 (Customer Responsibilities) or (b) any Customer Services infringing or
        misappropriating such third party’s intellectual property rights (collectively, “<strong><em>Customer Indemnifiable
            Claims</em></strong>”). You will indemnify 360 Degree from any fines, penalties, damages, attorneys’ fees, and
        costs awarded against a 360 Degree Indemnified Party or for settlement amounts that you approve for a Customer
        Indemnifiable Claim. The Customer agrees to indemnify, defend, and hold harmless 360 Degree from and against any
        penalties, fines, charges, or regulatory fees, including any associated costs, incurred by 360 Degree as a result of
        the Customer's use of the services or due to the Customer’s failure to comply with any applicable laws, regulations,
        or industry standards, whether local, national, or international. </p>
      <p>For the avoidance of doubt, the indemnity in this Section 6.2 extends to any monetary penalty, enforcement notice or other regulatory sanction imposed on 360 Degree by the Information Commissioner's Office, Ofcom or any other competent authority as a result of the Customer's or its End Users' breach of PECR or applicable Data Protection Laws.</p>
      <p>6.3 Conditions of Indemnification. </p>
      <p>As a condition of the foregoing indemnification obligations: (a) the indemnified party (“<strong><em>Indemnified
            Party</em></strong>”) will promptly notify the indemnifying party (“<strong><em>Indemnifying Party</em></strong>”)
        of any Customer Indemnifiable Claim or 360 Degree Indemnifiable Claim (individually or collectively referred to herein
        as a “<strong><em>Claim</em></strong>”)in writing; provided, however, that the failure to give prompt written notice
        will not relieve Indemnifying Party of its obligations hereunder, except to the extent that Indemnifying Party was
        actually and materially prejudiced by such failure; (b) Indemnifying Party will have the sole authority to defend or
        settle a Claim; and (c) Indemnified Party will reasonably cooperate with Indemnifying Party in connection with
        Indemnifying Party’s activities hereunder, at Indemnifying Party’s expense. The Indemnified Party reserves the right,
        at its own expense, to participate in the defense of a Claim. Notwithstanding anything herein to the contrary, the
        Indemnifying Party will not settle any Claim for which it has an obligation to indemnify under this Section 6
        admitting liability or fault on behalf of the Indemnified Party, nor create any obligation on behalf of the
        Indemnified Party without the Indemnified Party’s prior written consent, which will not be unreasonably withheld,
        conditioned, or delayed.</p>
      <p>6.4 Exclusive Remedy. This Section 6 states the Indemnifying Party’s sole liability to, and the Indemnified Party’s
        exclusive remedy against, the other party for any third-party claims. 360 Degree shall not be held liable for any
        loss, disruption, or hindrance in Client’s Salesforce Platform that arises due to technical issues, failures, or
        problems inherent in the Salesforce platform itself or any third-party platform upon which the services depend.</p>
      <h3><a id="_nri7hls8lsz6"></a><a id="_Toc94352194"></a><strong>7. Limitation of Liability</strong></h3>
      <p>7.1 LIMITATION ON INDIRECT, CONSEQUENTIAL, AND RELATED DAMAGES. </p>
      <p>IN NO EVENT WILL EITHER PARTY OR ITS AFFILIATES HAVE ANY LIABILITY ARISING OUT OF OR RELATED TO THIS AGREEMENT FOR
        ANY LOST PROFITS, REVENUES, GOODWILL, OR INDIRECT, SPECIAL, INCIDENTAL, CONSEQUENTIAL, COVER, LOST DATA, BUSINESS
        INTERRUPTION, OR PUNITIVE DAMAGES, WHETHER AN ACTION IS IN CONTRACT OR TORT AND REGARDLESS OF THE THEORY OF LIABILITY,
        EVEN IF A PARTY OR ITS AFFILIATES HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES OR IF A PARTY’S OR ITS
        AFFILIATES’ REMEDY OTHERWISE FAILS OF ITS ESSENTIAL PURPOSE. THE FOREGOING DISCLAIMER WILL NOT APPLY TO THE EXTENT
        PROHIBITED BY LAW. </p>
      <p>360 Degree shall not be liable in the event that any unauthorised/unapproved and similar/ identical platform is
        developed independently by any third party. The Client acknowledges that 360 Degree is not responsible for monitoring,
        preventing, or restricting the creation of similar platforms.</p>
      <p>7.2 LIMITATION OF LIABILITY. </p>
      <p>IN NO EVENT SHALL THE TOTAL AGGREGATE LIABILITY OF 360 DEGREE ARISING OUT OF OR RELATED TO THIS AGREEMENT EXCEED THE TOTAL SUBSCRIPTION FEES PAID BY CUSTOMER TO 360 DEGREE FOR THE SERVICES IN THE TWELVE (12) MONTHS PRECEDING THE EVENT GIVING RISE TO THE CLAIM. FOR CLARITY, SUBSCRIPTION FEES EXCLUDE IMPLEMENTATION, ONBOARDING, SUPPORT, PROFESSIONAL SERVICES, CONSULTING, CREDITS, COMMUNICATIONS SURCHARGES, CARRIER/10DLC FEES, TAXES, AND ANY OTHER CHARGES. IF NO SUBSCRIPTION FEES HAVE BEEN PAID, 360 DEGREE SHALL HAVE NO LIABILITY.</p>
      <p>Here “Gross Negligence” means a conscious and voluntary disregard of the need to use reasonable care, which is likely to cause foreseeable grave injury or harm.</p>
      <p>“Willful Misconduct” means intentional wrongdoing or deliberate breach of this Agreement for unlawful gain.</p>
      <p>For avoidance of doubt, operational errors, system downtime, third-party failures, or unintended service disruptions shall not constitute Gross Negligence or Willful Misconduct.</p>
      <p>7.2A EXCEPTIONS TO 360 DEGREE'S LIABILITY CAP.</p>
      <p>Notwithstanding Section 7.2: (a) nothing in this Agreement excludes or limits either party's liability for death or personal injury caused by negligence, for fraud or fraudulent misrepresentation, or for any other liability that cannot lawfully be excluded or limited; (b) 360 Degree's aggregate liability for its own breach of Section 4.3 (Confidentiality), its own breach of the 360 Degree Data Protection Addendum, or its own breach of applicable Data Protection Laws shall not exceed the total Subscription Fees paid by the Customer in the twelve (12) months preceding the event giving rise to the claim.</p>
      <p>7.3 EXCEPTIONS TO THE LIMITATION OF LIABILITY. </p>
      <p>NOTWITHSTANDING ANYTHING TO THE CONTRARY IN SECTION 7.1 (LIMITATION ON INDIRECT, CONSEQUENTIAL, AND RELATED DAMAGES)
        AND SECTION 7.2 (LIMITATION OF LIABILITY), THE LIMITATIONS IN SECTION 7.1 AND SECTION 7.2 DO NOT APPLY TO (a) YOUR
        BREACH OF SECTION 2.2 (CUSTOMER RESPONSIBILITIES); (b) YOUR AND YOUR AFFILIATES’ BREACH OF SECTION 3 (FEES AND PAYMENT
        TERMS); OR (c) AMOUNTS PAYABLE PURSUANT TO CUSTOMER'S INDEMNIFICATION OBLIGATIONS UNDER SECTION 6.2 (INDEMNIFICATION BY CUSTOMER). FOR THE AVOIDANCE OF DOUBT, 360 DEGREE'S OBLIGATIONS UNDER SECTION 6.1 (INDEMNIFICATION BY 360 DEGREE) ARE SUBJECT IN ALL RESPECTS TO THE LIMITATIONS IN SECTIONS 7.1 AND 7.2.</p>
      <h3><a id="_uizhskpvyeml"></a><a id="_Toc2034475966"></a><strong>8. Term, Termination, and Survival</strong></h3>
      <p>8.1 Agreement Term. This Agreement will commence on the
        Effective Date and continue until terminated in accordance with Section 8.2 (Termination) (“<em>Term</em>”).</p>
      <p>The Customer in the initial one year subscription term with 360 degree, no refund shall be made to the customer. The
        term shall automatically renew for successive one (1) year terms unless the Customer provides written notice of
        cancellation at least thirty (30) days prior to the end of the one year term.</p>
      <p>Auto-renewal applies unless terminated in writing 30 days prior; fees may increase annually and will be informed to
        client in written.<br>As termination for convenience is not permitted, if the Customer ceases use before the end of the committed Term (other than for 360 Degree’s uncured material breach under Section 8.2.2), the Customer remains liable for the Subscription Fees for the remainder of the committed Term.</p>
      <p>8.2 Termination</p>
      <p>8.2.1 For Convenience. </p>
      <p>No Termination for Convenience. Neither party may terminate this Agreement or any Order Form for convenience. The Customer’s subscription continues for the committed Term, subject only to termination for uncured material breach under Section 8.2.2.</p>
      <p>8.2.2 Material Breach. </p>
      <p>Either party may terminate this Agreement if the other commits a material breach and fails to remedy it within thirty (30) days of written notice. If the Customer terminates under this Section due to 360 Degree’s uncured material breach, 360 Degree’s sole refund obligation is to refund a pro-rata portion of pre-paid Subscription Fees for the remaining days of the then-current subscription term during which the Services were not provided. No refund is due for implementation, support, professional services, consulting, credits, Communications Surcharges, or any other fees.</p>
      <p>8.2.3 Insolvency. </p>
      <p> Subject to applicable law, either party may terminate this Agreement immediately by providing written notice in the
        event of the other party’s liquidation, commencement of dissolution proceedings, or any other proceeding relating to a
        receivership, failure to continue business, assignment for the benefit of creditors, or becoming the subject of
        insolvency or bankruptcy.</p>
      <p>8.3 Survival. </p>
      <p>Upon termination of this Agreement, the terms of this Section 8.3 and the terms of the following Sections will
        survive: Section 2.1(c) (regarding the 360 Degree Security Overview), Section 3 (Fees and Payment Terms), Section 4
        (Ownership, Customer Data, and Confidentiality), Section 5.5 (Disclaimer), Section 6
        (Mutual Indemnification), Section 7 (Limitation of Liability), Section 9 (General), and any applicable terms in
        Section 10 (Additional Terms).</p>
      <p>8.4 Payment Obligation</p>
      <p>Upon termination, Customer will pay 360 Degree Cloud any unpaid Subscription Fees, Professional Services Fees, and
        other amounts that have accrued prior to the effective date of the termination. In no event will termination relieve
        the Customer of its obligation to pay any undisputed fees payable to 360 Degree Cloud for the period prior to the
        effective date of termination.</p>
      <h3><a id="_ktekk258iplw"></a><a id="_Toc829177376"></a><strong>9. General</strong></h3>
      <p>9.1 Affiliates of Customer </p>
      <p>Your Affiliates may use the Services under and in accordance with the terms of this Agreement. You represent and
        warrant that you have sufficient rights and the authority to make this Agreement binding upon each of your Affiliates.
        You and each of your Affiliates will be jointly and severally liable for the acts and omissions of such Affiliate in
        connection with this Agreement and such Affiliate’s use of the Services. Only you will bring any claim against 360
        Degree on behalf of your Affiliates.</p>
      <p>9.1.1 Affiliates of 360 Degree. An Affiliate of 360 Degree may provide the Services, or a portion thereof, to you or
        your Affiliates, as applicable, in accordance with this Agreement and any applicable Order Form(s) with such Affiliate
        of 360 Degree. 360 Degree will (a) be responsible for the Services its Affiliates provide and (b) not be relieved of
        its obligations under this Agreement if its Affiliates provide the Services or a portion thereof. 360 Degree will
        enforce the terms of this Agreement relating to the Services its Affiliates provide. Notwithstanding anything to the
        contrary in this Agreement, an Affiliate of 360 Degree may directly bill you or your Affiliates, as applicable, (i)
        for the Services it provides or (ii) solely as a billing agent for 360 Degree or the Affiliate of 360 Degree providing
        the Services, as applicable.</p>
      <p>9.2 Assignment </p>
      <p>Neither party may assign or otherwise transfer this Agreement or any applicable Order Form(s), in whole or in part,
        whether by operation of law or otherwise, without the other party’s prior written consent (not to be unreasonably
        withheld or delayed) Notwithstanding the foregoing, either party may assign this Agreement or any applicable Order
        Form(s), in whole or in part, without consent to (a) merger, acquisition, a successor to all or part of its assets or
        business or (b) an Affiliate. Any attempted assignment or transfer by either party in violation hereof will be void.
        Subject to the foregoing, this Agreement and any applicable Order Form(s) will be binding on the parties and their
        respective successors and permitted assigns. </p>
      <p>9.3 Relationship </p>
      <p>Each party is an independent contractor in the performance of each and every part of this Agreement. Nothing in this
        Agreement is intended to create or will be construed as creating an employer-employee relationship or a partnership,
        agency, joint venture, or franchise. Each party will be solely responsible for all of its employees and agents and its
        labor costs and expenses arising in connection therewith and for any and all claims, liabilities, damages, or debts of
        any type whatsoever that may arise on account of its activities, or those of its employees and agents, in the
        performance of this Agreement. Neither party has the authority to commit the other party in any way and will not
        attempt to do so or imply that it has the right to do so.</p>
      <p>9.4 No Third-Party Beneficiaries. This Agreement does not confer any benefits on any third party (including your End Users or an Affiliate) unless it expressly states that it does. No person who is not a party to this Agreement shall have any right to enforce any of its terms under the Contracts (Rights of Third Parties) Act 1999.</p>
      <p>
        360 DEGREE SHALL HAVE NO LIABILITY FOR ANY FAILURE OR DELAY CAUSED BY THIRD-PARTY SERVICES INCLUDING BUT NOT LIMITED TO TELECOM OPERATORS, CLOUD PROVIDERS, SALESFORCE PLATFORM, OR INTERNET SERVICE PROVIDERS.</p>

      <p>ALL SUCH DEPENDENCIES ARE USED AT CUSTOMER’S OWN RISK.</p>
      <p>9.5 Notices. Notices to 360 Degree will be provided via email to <a href="mailto:legal@360degreecloud.com"
          target="_blank" rel="noopener noreferrer">legal@360degreecloud.com</a> All notices to you will be provided via email
        to the relevant contact(s) you designate in your account.</p>
      <p>9.6 Governing Law and Attorneys’ Fees. </p>
      <p>This Agreement will be governed by and interpreted according to the laws of the applicable state or country
        identified below without regard to conflicts of laws and principles that would cause the application of the laws of
        another jurisdiction. This Agreement will not be governed by the United Nations Convention on Contracts for the
        International Sale of Goods. Except as provided in Section 9.7 (Dispute Resolution), any legal suit, action, or
        proceeding arising out of or relating to this Agreement or the Services will be instituted in the applicable courts
        identified below and the parties hereby consent to the personal jurisdiction of these courts. In the event of any
        adjudication of any dispute under this Agreement, the prevailing party in such a legal suit, action, or proceeding
        will be entitled to reimbursement of its attorneys’ fees and related costs by the non-prevailing party.</p>
      <table>
        <tbody>
          <tr>
            <td>
              <p><strong>If you are domiciled in:</strong></p>
            </td>
            <td>
              <p><strong>Governing law:</strong></p>
            </td>
            <td>
              <p><strong>Courts with personal jurisdiction:</strong></p>
            </td>
          </tr>
          <tr>
            <td>
              <p>United States of America </p>
            </td>
            <td>
              <p>State of California</p>
            </td>
            <td>
              <p>State or federal courts of San Francisco, California, United States of America</p>
            </td>
          </tr>
          <tr>
            <td>
              <p>United Kingdom </p>
            </td>
            <td>
              <p>Law of England and Wales</p>
            </td>
            <td>
              <p>Courts of London, England, United Kingdom</p>
            </td>
          </tr>
          <tr>
            <td>
              <p>Any country within the European Economic Area or Switzerland </p>
            </td>
            <td>
              <p>Law of England and Wales</p>
            </td>
            <td>
              <p>Courts of London, England, United Kingdom</p>
            </td>
          </tr>
          <tr>
            <td>
              <p>Any country within the Asia-Pacific region, other than India</p>
            </td>
            <td>
              <p>Singapore</p>
            </td>
            <td>
              <p>Courts of Singapore</p>
            </td>
          </tr>
          <tr>
            <td>
              <p>India</p>
            </td>
            <td>
              <p>Indian Laws</p>
            </td>
            <td>
              <p>Faridabad District Court</p>
            </td>
          </tr>
          <tr>
            <td>
              <p>Canada </p>
            </td>
            <td>
              <p>Canadian Laws </p>
            </td>
            <td>
              <p>Courts of Canada </p>
            </td>
          </tr>
        </tbody>
      </table>
      <p> </p>
      <p>9.7 Dispute Resolution</p>
      <p>In the event of any dispute, claim, or controversy in connection with this Agreement (other than for disputes,
        claims, or controversies related to the intellectual property of a party) (collectively,
        “<strong><em>Disputes</em></strong>”), each party’s senior representatives will, in good faith, attempt to resolve a
        Dispute. If the parties are unable to resolve a Dispute within thirty (30) days or within such other time period as
        the parties may agree in writing, then the parties may commence binding arbitration under JAMS’ Comprehensive
        Arbitration Rules and Procedures. If the parties are in the territories of India, then parties may commence binding
        arbitration under the Arbitration and Conciliation Act,1996. The parties will share equally the fees and expenses of
        the JAMS arbitrator or Indian Arbitrator. The arbitration will be conducted by a sole arbitrator mutually agreed to
        between the parties or, failing that, under the then prevailing rules. Judgment on the award rendered by the
        arbitrator may be entered in any court of competent jurisdiction. The arbitrator will have the authority to grant
        specific performance or any other equitable or legal remedy, including provisional remedies. Each party will be
        responsible for its own incurred expenses arising out of any dispute resolution procedure. Any arbitration proceedings
        will take place in the English language in (a) San Francisco, California, if you are domiciled in United States of
        America (b) London, England, if you are domiciled in any European Economic Area, United Kingdom or Switzerland, (c)
        Singapore, if you are domiciled in Australia, Japan, China and Indonesia, (d) Faridabad, if you are domiciled in
        India. (e) Toronto, if you are domiciled in Canada.</p>
      <p>9.8 Force Majeure. </p>
      <p>No failure, delay, or default in the performance of any obligation of a party will constitute an event of default or breach of this Agreement to the extent that such failure to perform, delay, or default arises out of a cause, existing or future, that is beyond the control and without negligence of such party, including action or inaction of governmental, civil or military authority, fire, strike, lockout, or other labour dispute, flood, terrorist act, war, riot, theft, earthquake, or other natural disasters (collectively, “Force Majeure Events”). The party affected by a Force Majeure Event will take all reasonable actions to minimize the consequences of any such event.</p>
      <p>FORCE MAJEURE SHALL INCLUDE TELECOM FAILURES, NETWORK CONGESTION, DLT PLATFORM ISSUES, REGULATORY RESTRICTIONS, AND GOVERNMENT ACTIONS. FORCE MAJEURE SHALL NOT RELIEVE 360 DEGREE OF ITS OBLIGATIONS UNDER THE 360 DEGREE DATA PROTECTION ADDENDUM OR OF ITS OBLIGATION TO NOTIFY THE CUSTOMER OF A PERSONAL DATA BREACH.</p>
      <p>9.9 Waiver and Order of Precedence. </p>
      <p>No failure or delay by either party in exercising any right or enforcing any provision under this Agreement will
        constitute a waiver of that right or provision, or any other provision. Titles and headings of sections of this
        Agreement are for convenience only and will not affect the construction of any provision of this Agreement. In the
        event of any conflict or inconsistency among the following documents, the order of precedence will be: (1) the
        applicable Order Form(s), (2) the 360 Degree Data Protection Addendum, (3) the terms set forth in the body of this 360
        Degree Terms of Service, (4) the 360 Degree Acceptable Use Policy, (5) any other terms incorporated by reference
        herein or any other exhibits or attachments hereto, and (6) the applicable Documentation.</p>
      <p>9.10 Severability</p>
      <p>If any provision of this Agreement is held by a court or other tribunal of competent jurisdiction to be
        unenforceable, such provision will be limited or eliminated to the minimum extent necessary to render such provision
        enforceable and, in any event, the remainder of this Agreement will continue in full force and effect.</p>
      <p>9.11 Data Storage</p>
      <p><b>9.11.1. No Access to Message Content or Recipient Information</b><br>
        360 Degree Cloud does not access, view, record, or retain the content of any messages, calls, or communications transmitted through its platform. Message content and recipient data remain fully contained within the Customer’s Salesforce environment or the communication network provider’s infrastructure.</p>
      <p><b>9.11.2 Limited System-Level Data Access</b><br>
        The Company’s systems may process and temporarily access non-personal, system-level metadata (such as message counts, timestamps, or delivery status) solely for billing, support, or service performance monitoring (<b>“Permitted Technical Data”</b>). Such metadata is not linked to any identifiable person or communication content.</p>
      <p><b>9.11.3 No Retention or External Storage</b><br>
        The Company does not store Customer Data or message content on any external servers. All Customer Data remains within the Customer’s Salesforce environment. Any access to Permitted Technical Data is transient and automatically deleted once the purpose (such as billing or error resolution) is fulfilled. Security event logs are retained for the period stated in the 360 Degree Security Overview and do not contain message content or recipient identifiers.</p>
      <p><b>9.11.4 Compliance and Legal Framework</b><br>
        The Company acts as a Data Processor and intermediary under applicable Data Protection Laws, including the UK GDPR, the Data Protection Act 2018 and PECR in the United Kingdom, the EU GDPR in the European Economic Area, and the Digital Personal Data Protection Act, 2023 in India. Under the DPDP Act, the Company’s role and liability are limited strictly to the extent of processing basic personal data necessary for legitimate business operations, including Client name, contact number, and billing-related details. Such data is collected, used, and retained solely for billing, support, and account management purposes, and is handled in compliance with the principles of lawful, fair and transparent purpose limitation, data minimization, and storage limitation under the DPDP Act.</p>
      <p>The Company does not process or store any communication content, recipient details, or other personal data transmitted through its platform. The Company does not engage in any profiling, data analytics, or secondary use of Client Data.</p>
      <p>The Company is further entitled to safe-harbour protection under the Information Technology Act, 2000, as it does not initiate, select, modify, or determine the transmission of any message or data. Its functions are limited to automated routing and performance of services as configured within the Customer’s Salesforce environment.</p>
      <p><b>9.11.5 Customer Ownership and Control</b></p>
      <p>(a) The Customer shall be solely responsible for the configuration, operation, and management of the Services within its Salesforce environment, including the accuracy, integrity, and protection of all Customer Data processed or transmitted through the platform.</p>
      <p>(b) The Client shall implement and maintain appropriate technical and organizational measures to ensure the security, confidentiality, and lawful processing of personal data, including adequate access controls, encryption, data retention policies, and user authentication mechanisms.</p>
      <p>(c) The Client acknowledges that 360 Degree Cloud acts only as a technology intermediary and shall not be responsible or liable for any data loss, unauthorized access, corruption, disclosure, or destruction of Customer Data occurring within the client’s Salesforce environment or due to third-party systems, integrations, or networks.</p>
      <p><b>9.11.6 Limitation of Liability and Indemnity</b></p>
      <p>(a) The Customer acknowledges that it is solely responsible for the accuracy, integrity, and security of its data within its Salesforce environment.</p>
      <p>(b) 360 Degree Cloud shall not be liable for any data loss, unauthorized access, corruption, or disclosure of Customer Data occurring within the Customer’s Salesforce environment or due to third-party systems, integrations, or networks.</p>
      <p>(c) The Customer shall be solely responsible for implementing adequate data backup, access controls, and security measures within its Salesforce instance.</p>
      <p>(d) 360 Degree Cloud shall not be liable for any direct, indirect, incidental, consequential, or special damages, including but not limited to loss of data, business interruption, goodwill, or profits, arising from or in connection with the use of its Services, subject always to Section 7 (Limitation of Liability).</p>
      <p>(e) The Customer agrees to indemnify, defend, and hold harmless 360 Degree Cloud, its affiliates, officers, and employees from and against any and all third-party claims, damages, liabilities, costs, and expenses (including legal fees) arising out of or relating to (i) the Customer’s data, (ii) its use of the Services, or (iii) any breach of this Agreement or applicable law.</p>
      <p><b>9.12 Entire Agreement</b><br>
        This Agreement will constitute the entire agreement between the parties with respect to the subject matter hereof and supersedes all prior and contemporaneous understandings, proposals, statements, sales materials, presentations, or non-disclosure or other agreements, whether oral or written. No oral or written information or advice given by 360 Degree, its agents, or its employees will create a warranty or in any way increase the scope of the warranties or obligations in this Agreement. The parties agree that any term or condition stated in your vendor registration form or registration portal or in any purchase order document or similar document will be construed solely as evidence of your internal business processes and the terms and conditions contained therein will be void and have no effect with regard to this Agreement, even if accepted by 360 Degree or executed by the parties after the Effective Date.</p>
      <p><b>9.13 Beta offerings</b><br>
        360 degree does not provide Beta or trial services unless expressly written and agreed upon by both parties. If both parties agree regarding the beta service, 360 degree cloud Technology is provided <b>“as-is”</b>, without any warranty. The 360 degree reserves the right, at its sole discretion, to modify, suspend, or discontinue any Beta or trial services at any time, without prior notice. Furthermore, 360 Degree shall not be responsible for providing training to the Client’s personnel on the use of the platform unless expressly agreed to in writing.</p>
      <h3><a id="_ikjyp3ersj62"></a><a id="_Toc643404327"></a><strong>10. Additional Terms</strong></h3>
      <p>10.1 United States - if you are domiciled in USA the following terms will apply </p>
      <p>10.1.1 Governing Law. </p>
      <p>Section 9.6 (Governing Law and Attorneys’ Fees) of this Agreement is hereby deleted in its entirety and replaced with
        the following: </p>
      <p><em>For Customers domiciled in the United States (other than US Federal entities), this Agreement is governed by the laws of the State of California, and the state or federal courts located in California shall have jurisdiction. </em></p>
      <p>10.1.2 Dispute Resolution. Section 9.7 (Dispute Resolution) of this Agreement is hereby deleted in its entirety and
        replaced with the following: </p>
      <p><em>Except as otherwise specified in applicable law, in the event of a dispute, claim, or controversy arising out of
          or in connection with this Agreement or the breach, termination, enforcement, interpretation, or validity thereof
          (other than for disputes, claims, or controversies related to the intellectual property of a party) (collectively,
          “Disputes”), each party’s senior representatives will engage in good faith negotiations with the other party’s
          senior representatives to amicably resolve a Dispute. If the parties are unable to resolve a Dispute within thirty
          (30) days after the first request to engage in good faith negotiations or within such other time period as the
          parties may agree to in writing, then either party may seek relief as set forth in Section 9.6 (Governing Law and
          Attorneys’ Fees). </em></p>
      <p>10.2 European Electronic Communications Code. </p>
      <p>If you are a microenterprise, small enterprise, or not for profit organisation, and 360 degree provides you the
        Services within the European Economic Area or United Kingdom, you agree you have read and accept the European
        Electronic Communications Code Rights Waiver.</p>
      <p>10.3 Brazil. If you are domiciled in Brazil, the following terms apply:</p>
      <p>10.3.1 Dispute Resolution. Section 9.7 (Dispute Resolution) of this Agreement is hereby deleted in its entirety and
        replaced with the following: </p>
      <p><em>In the event of a dispute, claim, or controversy arising out of or in connection with this Agreement or the
          breach, termination, enforcement, interpretation, or validity thereof (collectively, “Disputes”), each party’s
          senior representatives will engage in good faith negotiations with the other party’s senior representatives to
          amicably resolve a Dispute. If the parties are unable to resolve a Dispute within thirty (30) days after the first
          request to engage in good faith negotiations or within such other time period as the parties may agree to in
          writing, then either party may commence (a) litigation proceedings if the amounts being sought are less than two
          hundred thousand dollars ($200,000 USD) or (b) binding arbitration under the Rules of CAM-CCBC if the amounts being
          sought are greater than or equal to two hundred thousand dollars ($200,000 USD). To the extent a Dispute is
          submitted for arbitration, the parties will share equally the fees and expenses of the CAM-CCBC arbitrator. The
          arbitration will be conducted by a sole arbitrator chosen by the mutual agreement of the parties or, failing that,
          by CAM-CCBC under its then prevailing rules. Judgment on the award rendered by the arbitrator may be entered in any
          court of competent jurisdiction. The arbitrator will have the authority to grant specific performance or any other
          equitable or legal remedy, including provisional remedies. Each party will be responsible for its own incurred
          expenses arising out of any dispute resolution procedure. Any arbitration proceedings will take place in the English
          language in the City and State of São Paulo, Brazil.</em></p>
      <p>10.4 Japan. If you are domiciled in Japan, the following terms apply:</p>
      <p>10.4.1 Intended Use. The Services are intended for business use by corporate or business entities, and you agree that
        you will not use the Services for any personal or individual use.</p>
      <p>10.4.2 Required Information and Verification Process. Depending on the Services you use, you may be required to
        submit copies of government-issued ID documents to 360 degree and/or complete verification processes (e.g., via post)
        as required under applicable law or regulation, including, without limitation, the Act on Prevention of Transfer of
        Criminal Proceeds and the Telecommunications Business Act.</p>
      <p>10.4.3 Taxes and Communications Surcharges. Taxes, as defined in Section 3.4 (Taxes) of this Agreement, will include
        Japanese consumption tax. The universal service fee and the telephone relay service fee charged by telecommunication
        providers (e.g., carriers) will be borne by you as part of the Communications Surcharges set forth in Section 3.4
        (Communications Surcharges) of this Agreement.</p>
      <p>10.4.4 Currency. All Fees are payable in Japanese Yen, except as otherwise set forth in writing, including in an
        applicable Order Form(s) or an invoice to the extent you procure the Services without an Order Form.</p>
      <p>10.4.5 Intellectual Property Rights. Any intellectual property rights vested by 360 degree under this Agreement will
        include the rights set forth in Article 27 (Right of Adaptation) and 28 (Original Author’s Right in Derivative Works)
        of the Copyright Act of Japan, Act No. 48 of May 6, 1970. Further, you agree not to exercise against 360 degree, or
        any other third parties designated by 360 degree, any moral rights you may have in any contents, including, without
        limitation, the feedback or suggestions you or your End Users provide regarding the Services that 360 degree is
        entitled to exploit under this Agreement.</p>
      <p>10.4.6 Anti-Social Forces. Each party represents and warrants that it (a) is not an anti-social force (meaning here
        and hereinafter, gangsters, right-wing groups, anti-social forces, and others equivalent thereto) and (b) does not
        have any exchange or involvement with anti-social forces, such as cooperation or involvement in the maintenance,
        operation, or management of anti-social forces, through funding, or other means.</p>
      <p>10.4.7 Dispute Resolution. Section 9.7 (Dispute Resolution) of this Agreement is hereby deleted in its entirety and
        replaced with the following:</p>
      <p><em>In the event of a dispute, claim, or controversy arising out of or in connection with this Agreement or the
          breach, termination, enforcement, interpretation, or validity thereof (other than for disputes, claims, or
          controversies related to the intellectual property of a party) (collectively, “Disputes”), each party’s senior
          representatives will engage in good faith negotiations with the other party’s senior representatives to amicably
          resolve a Dispute. If the parties are unable to resolve a Dispute within thirty (30) days after the first request to
          engage in good faith negotiations or within such other time period as the parties may agree to in writing, then
          either party may seek relief as set forth in Section 9.6 (Governing Law and Attorneys’ Fees).</em></p>
      <p>10.4.8 Conflict. In the event of any conflict between this Section 10.4 and any other terms of this Agreement, this
        Section 10.4 will prevail.</p>
      <h3><strong>10.5 UNITED KINGDOM AND EUROPEAN ECONOMIC AREA</strong></h3>
      <p><strong>10.5.1 Application.</strong></p>
      <p>(a) Sections 10.5.2 and 10.5.3 apply to any Customer that uses the Services to transmit communications to recipients located in the United Kingdom or the European Economic Area, irrespective of the Customer’s domicile.</p>
      <p>(b) Sections 10.5.4 to 10.5.9 apply only to a Customer domiciled in the United Kingdom or the European Economic Area which has executed the 360 Degree Data Protection Addendum.</p>
      <p><strong>10.5.2 Data Protection Roles.</strong></p>
      <p>In respect of Personal Data contained in Customer Data and processed in connection with the Services, the Customer is the controller and 360 Degree is the processor. 360 Degree shall process such Personal Data only on the Customer’s documented instructions as set out in this Agreement and the 360 Degree Data Protection Addendum, save where required to do so by law to which 360 Degree is subject, in which case 360 Degree shall inform the Customer of that legal requirement before processing unless prohibited from doing so. In respect of Personal Data relating to the Customer’s own account, billing contacts, support contacts and website visitors, 360 Degree acts as a controller.</p>
      <p>The Customer’s documented instructions comprise: (a) processing to provide, maintain, secure and support the Services in accordance with this Agreement, the Documentation and any applicable Order Form; (b) processing in accordance with the Customer’s configuration of, and instructions issued through, the Services; and (c) anonymisation or aggregation of Personal Data such that it no longer identifies any natural person, for the purpose of generating 360 Degree Data in accordance with Section 4.1.</p>
      <p>The Customer warrants that its instructions comply with applicable Data Protection Laws, that it has established a valid lawful basis for all processing it instructs, and that it has provided all notices and obtained all consents required. 360 Degree is entitled to rely on the Customer’s instructions without independent verification.</p>
      <p><strong>10.5.3 Direct Marketing Compliance.</strong></p>
      <p>The Customer acknowledges that it is the sender and, where applicable, the instigator of every communication transmitted using the Services, and that responsibility for compliance with PECR rests solely with the Customer. Without limiting Section 2.2, the Customer shall:</p>
      <p>(a) not transmit unsolicited marketing by electronic mail (including SMS and MMS) to an individual subscriber without that subscriber’s prior consent, unless the conditions of the soft opt-in exemption in Regulation 22(3) of PECR are satisfied in full;</p>
      <p>(b) not make unsolicited marketing calls to any subscriber, whether an individual or corporate subscriber, who has registered with the Telephone Preference Service or the Corporate Telephone Preference Service or who has notified the Customer that such calls should not be made, and shall screen calling lists against both registers at appropriate intervals;</p>
      <p>(c) not transmit automated or recorded marketing calls without the prior specific consent of the subscriber;</p>
      <p>(d) present a valid calling line identification capable of receiving return calls, and not conceal or withhold calling line identification;</p>
      <p>(e) not conceal or disguise the identity of the sender of any marketing communication, and include in every marketing communication a valid address or mechanism by which the recipient may opt out free of charge;</p>
      <p>(f) maintain records evidencing consent (including the date, the source, and the exact wording of the consent statement presented to the recipient) and records of every opt-out request received and actioned, retain those records for the duration of the Term and for two (2) years thereafter, and produce them to 360 Degree within five (5) business days of request;</p>
      <p>(g) act on every opt-out request without undue delay and in any event before the next scheduled transmission to that recipient; and</p>
      <p>(h) not use the Services in a manner that would place 360 Degree in breach of the acceptable use or messaging policies of any Sub-processor or telecommunications provider through which the communication is routed.</p>
      <p>Breach by the Customer of this Section 10.5.3 shall be treated as a breach of Section 2.2 (Customer Responsibilities) for the purposes of Section 2.3 (Suspension of Services), Section 6.2 (Indemnification by Customer) and Section 7.3 (Exceptions to the Limitation of Liability).</p>
      <p>360 Degree gives no advice, representation or warranty as to the Customer’s compliance with PECR or any other direct marketing law, and the Customer confirms that it has not relied on any statement by 360 Degree in determining its own compliance obligations.</p>
      <p><strong>10.5.4 Personal Data Breach Notification.</strong></p>
      <p>360 Degree shall notify the Customer of any personal data breach affecting Customer Personal Data processed by 360 Degree or its Sub-processors without undue delay after becoming aware of it, and shall provide such information as is then available to 360 Degree to assist the Customer in meeting its obligations under Articles 33 and 34 of the UK GDPR.</p>
      <p>For these purposes, 360 Degree becomes aware of a personal data breach when it has a reasonable degree of certainty that a security incident has occurred which has led to Personal Data being compromised. Where a breach originates with or is first detected by a Sub-processor, 360 Degree’s obligation arises only upon 360 Degree being notified by that Sub-processor. Notification may be provided in phases as information becomes available.</p>
      <p>This Section does not apply to any incident occurring within the Customer’s Salesforce environment, or within any system, integration or network controlled by the Customer or by a third party engaged by the Customer. Notification is not, and shall not be construed as, an acknowledgement of fault or liability.</p>
      <p>360 Degree shall provide reasonable assistance in investigating and mitigating a breach. Where such assistance is materially in excess of that reasonably anticipated in the ordinary course, and the breach did not arise from 360 Degree’s breach of this Agreement, 360 Degree may charge at its then-current professional services rates.</p>
      <p><strong>10.5.5 Sub-processors.</strong></p>
      <p>The Customer provides a general authorisation for 360 Degree to engage Sub-processors. 360 Degree shall (a) maintain an up-to-date list of Sub-processors at the URL identified in the 360 Degree Data Protection Addendum; (b) update that list at least thirty (30) days before the addition or replacement of a Sub-processor, save where a shorter period is reasonably necessary to maintain continuity of the Services, to respond to a security risk, or to comply with applicable law, in which case 360 Degree shall update the list as soon as reasonably practicable; (c) impose on each Sub-processor data protection obligations no less protective than those in the 360 Degree Data Protection Addendum; and (d) remain liable to the Customer for the performance of each Sub-processor’s obligations, subject always to Section 7 (Limitation of Liability).</p>
      <p>Publication of the updated list constitutes notice for the purposes of this Section. The Customer may subscribe to email notifications of changes at the same URL. The Customer may object to a proposed Sub-processor on reasonable and documented data protection grounds notified within fifteen (15) days of publication, in which case the parties shall discuss in good faith and 360 Degree may propose a reasonable alternative or additional safeguards. If no resolution is reached, 360 Degree may in its discretion continue to provide the Services without the objected-to Sub-processor where technically feasible, failing which the parties shall discuss commercially reasonable alternatives.</p>
      <p><strong>10.5.6 Assistance and Records.</strong></p>
      <p>360 Degree shall, taking into account the nature of the processing and the information available to it, and insofar as this is possible, provide reasonable assistance to the Customer in fulfilling the Customer’s obligation to respond to requests from data subjects exercising their rights, and in ensuring compliance with the Customer’s obligations under Articles 32 to 36 of the UK GDPR.</p>
      <p>360 Degree may charge the Customer at its then-current professional services rates for assistance under this Section which is materially in excess of that reasonably anticipated in the ordinary course, save where required as a result of 360 Degree’s breach of this Agreement.</p>
      <p>360 Degree shall make available to the Customer information reasonably necessary to demonstrate compliance with Article 28 of the UK GDPR and shall allow for and contribute to audits conducted by the Customer or an auditor mandated by the Customer, subject to the following: (i) no more than once in any twelve (12) month period, save where required by a supervisory authority following a personal data breach affecting the Customer’s Personal Data; (ii) not less than thirty (30) days’ prior written notice; (iii) during normal business hours, and in a manner that does not unreasonably disrupt 360 Degree’s business or compromise the confidentiality or security of other customers’ data; (iv) at the Customer’s cost, including 360 Degree’s reasonable costs of participation; (v) the auditor shall not be a competitor of 360 Degree and shall execute a confidentiality agreement with 360 Degree; and (vi) 360 Degree may satisfy any request under this Section by providing its then-current third-party audit reports, certifications and completed security questionnaires, where these reasonably address the scope of the request.</p>
      <p><strong>10.5.7 International Transfers.</strong></p>
      <p>Where processing involves a transfer of Personal Data originating in the United Kingdom or the European Economic Area to a country not benefiting from adequacy regulations, the transfer shall be governed by the International Data Transfer Agreement issued under section 119A of the Data Protection Act 2018, or for EEA-originating data the EU Standard Contractual Clauses, in each case executed as a schedule to the 360 Degree Data Protection Addendum. 360 Degree shall maintain a documented assessment of the transfer and make it available to the Customer on reasonable request.</p>
      <p><strong>10.5.8 Representative.</strong></p>
      <p>360 Degree has assessed, and shall keep under review, whether it is required to designate a representative under Article 27 of the UK GDPR or Article 27 of the EU GDPR. Where such designation is required, 360 Degree shall designate and maintain a representative and publish that representative’s contact details in its privacy notice.</p>
      <p><strong>10.5.9 Conflict and Limitation.</strong></p>
      <p>In the event of any conflict between this Section 10.5 and any other terms of this Agreement, this Section 10.5 will prevail in respect of Customers and processing to which it applies, save that: (a) nothing in this Section 10.5 shall increase, override, disapply or otherwise affect the limitations and exclusions of liability in Section 7 (Limitation of Liability), which shall apply to all liability arising under or in connection with this Section 10.5; (b) nothing in this Section 10.5 shall confer any right of termination not expressly set out in Section 8.2; and (c) in the event of conflict between this Section 10.5 and the 360 Degree Data Protection Addendum, the Addendum shall prevail, consistent with Section 9.9.</p>
    </div>


    <div id="tab21" class="tab-content">
      <h2 style="text-transform: uppercase;">ACCEPTABLE USE OF POLICY</h2>


      <p>This Acceptable Use Policy (“<em>AUP</em>”) describes rules that apply to any party (“<em>you</em>”, “<em>your</em>”,
        “<em>yours</em>”, or “<em>Customer</em>”) using any products and services provided by 360 Degree or any of its
        affiliates (“<em>Services</em>”) and any user of the Services, including via any products and services provided by
        Customer (“<em>End User</em>”). 360 Degree together with its affiliates will be referred to as <em>"360 Degree"
        </em>in this AUP. </p>
      <h2>GENERAL TERMS</h2>
      <p>I.The Customer agrees to provide timely and complete responses to any requests made by 360 Degree Cloud for
        documentation, data, or clarification in connection with the Customer’s or End Users’ use of the Services. Both
        parties shall maintain compliance with all applicable laws, rules, regulations, and directives issued by relevant
        governmental or regulatory authorities, including but not limited to the Department of Telecommunications (DoT),
        Telecom Regulatory Authority of India (TRAI), and other agencies with jurisdiction over the Services. 360 Degree
        Cloud shall obtain and maintain all permits, licenses, and approvals required to legally provide its Services, and
        both parties shall promptly notify each other of any regulatory changes that may materially impact the Services.</p>
      <p>II. The Customer further agrees to abide by this Acceptable Use Policy ("AUP"), which may be amended by 360 Degree
        Cloud from time to time upon reasonable notice via email, the Customer’s account dashboard, or by posting an updated
        version on the Company’s website. The Customer is solely responsible for ensuring that its End Users are aware of
        and comply with the terms of this AUP. Violations by End Users shall be deemed violations by the Customer.</p>
      <p>III. The Services may not be used to store, transmit, or facilitate access to content or communications that are
        illegal, harmful, unwanted, inappropriate, or otherwise objectionable, including without limitation content that 360
        Degree Cloud, at its sole discretion, deems to be false or misleading; inciting or promoting hate or violence; or
        posing a threat to public safety. Use of the Services by or on behalf of hate groups or to promote such content is
        strictly prohibited.</p>
      <p>IV. The Customer shall not use the Services to engage in any activity that is unlawful, deceptive, infringes on the
        rights of others, or is otherwise damaging to the operations, security, or reputation of 360 Degree Cloud.
        Prohibited conduct includes but is not limited to: violations of applicable laws or telecommunications guidelines,
        including regulations requiring consent to record, collect, or transmit communications; failure to honor opt-out or
        unsubscribe requests; falsification of identity or origin in any message or transmission; and unauthorized access to
        or use of the Services.</p>
      <p>V. The Customer shall not attempt to bypass, disable, or exploit service limitations, security mechanisms, or
        filtering tools. Attempts to perform denial-of-service (DoS) attacks, exploit vulnerabilities, or introduce harmful
        code, malware, bots, or automated systems into the Services are expressly prohibited. Any such conduct shall be
        considered a material breach of this Agreement and may result in immediate suspension or termination of Services
        without further notice.</p>
      <p>VI. The Customer is solely responsible for evaluating whether the Services provide sufficient technical and legal
        safeguards for the Customer’s intended use, including but not limited to compliance with any data protection or
        privacy laws prior to transmitting, processing, or permitting End Users to transmit or process any data via the
        Services.</p>
      <p>360 Degree Cloud reserves the right to suspend or restrict access to the Services if the Customer or its End Users
        are found to be in breach of any term set forth herein. The Customer understands and agrees that continued use of
        the Services is contingent upon ongoing compliance with all applicable laws, this Agreement, and all incorporated
        policies, including this AUP.</p>
      <p>Opt-Out Compliance Responsibility Clause</p>
      <p> In the event that any end-user client opts out of receiving messages or calls from the Client’s texting or calling, it shall be the sole responsibility of the Client to ensure that no further communications are sent to such end-user. The Client must implement and maintain appropriate mechanisms to honor all opt-out requests in a timely and effective manner.
        Should any issue arise, or if a breach of this obligation is discovered, the Client is required to notify 360 Degree Cloud immediately upon such discovery. 360 Degree Cloud shall bear no liability or responsibility for any non-compliance or breach resulting from the Client’s failure to adhere to opt-out requests or failure to notify 360 Degree Cloud of such incidents.</p>
      <h2>INDIA</h2>
      <p>I.The Customer agrees that all services availed from 360 Degree Cloud shall be used solely for lawful and valid business purposes, and shall not be used to generate or transmit any calls or SMS messages that violate applicable laws, including laws and regulations governing unsolicited commercial communications (UCC) or any other telecom regulations issued by DoT, TRAI, or any access provider. For the purposes of this clause, “valid purpose” means that calls or SMS messages are sent only to recipients from whom the Customer holds valid, verifiable consent (opt-in), recorded and maintained on the Distributed Ledger Technology (DLT) platform in the manner required by applicable TRAI regulations. The Customer acknowledges that such consent must be maintained on a continuing basis and functions as the Customer’s evidence in the event of any regulatory action, and that the Customer is solely responsible for keeping such consent current and verifiable at all times.</p>
      <p>II.The Customer acknowledges that, under current TRAI regulations and access provider practice, where a complaint or regulatory flag is received against a telecom resource used by the Customer, the access provider (telecom operator) may suspend, bar, or hold the telecom resource without providing any prior opportunity to submit opt-in or consent proof. Any opt-in or consent proof is considered by the operator, if at all, only after such suspension, as part of the operator’s review process. The Customer therefore agrees to use the Services responsibly and to keep valid DLT-based consent current at all times. Upon request by 360 Degree Cloud, the Customer shall furnish such consent proof promptly, and in any event within 24 hours; however, the Customer acknowledges that furnishing such proof does not prevent or reverse any suspension undertaken by the access provider.</p>
      <p>III. In the event that the Customer fails to comply with the aforementioned requirements, the Customer shall, in each
        instance of non-compliance, be liable to bear the penalty as determined at the sole discretion of 360 Degree.</p>
      <p>IV. Regulatory Suspension and Number Replacement. The Customer acknowledges and agrees that:
        (a) Suspension, barring, holding, disconnection, or blacklisting of any telecom resource by an access provider on account of UCC complaints, DND / preference violations, or regulatory flags (including AI/ML-based flagging under applicable TRAI Directions) is undertaken by the access provider and/or as mandated by TRAI regulations, and 360 Degree Cloud has no control over such action, its timing, or its reversal;
        (b) 360 Degree Cloud shall bear no liability for any suspension, service interruption, loss, or damage arising from such regulatory or operator action;
        (c) Restoration of a suspended telecom resource is subject to the access provider’s process and timelines, and is not guaranteed; and
        (d) Where a suspended telecom resource cannot be restored and a replacement resource must be provisioned, a number replacement fee shall be payable by the Customer. The applicable fee shall be as set out in the Customer’s Order Form or as advised by the Customer’s Account Manager. This fee is a service charge levied by 360 Degree Cloud for re-provisioning and is separate from, and in addition to, any charge, fine, or penalty imposed by the access provider or regulator.</p>
      <p><strong>COUNTRIES OTHER THAN INDIA </strong>- The Customer acknowledges and agrees to comply with all applicable
        regulations, industry standards, and 360 Degree Cloud’s policies regarding the use of messaging services, including
        but not limited to the 10DLC (10-Digit Long Code) messaging framework under the North American Numbering Plan
        (NANP). The Customer further agrees to ensure that its End Users adhere to the same standards and obligations:</p>
      <p>I. The Customer shall not use, nor permit any Message Sender or End User to use, any 10-digit NANP telephone number
        for messaging purposes unless such number has been verified and assigned to the Customer or its authorized End User.
        In the event messages are sent prior to such verification, a penalty of <strong>$10,000 (USD)</strong> shall be
        levied per violation.</p>
      <p>II. The Customer shall not engage in or facilitate any activity that constitutes evasion of 10DLC messaging rules,
        including but not limited to snowshoeing, dynamic routing to obscure origin, spam filter evasion, or use of
        unregistered or unapproved messaging campaigns. Each instance of such evasion shall result in a penalty of
        <strong>$1,000 (USD)</strong>.
      </p>
      <p>III. The Customer agrees to refrain from transmitting, enabling, or permitting the transmission of any content that
        violates applicable laws, industry content standards, or the policies of 360 Degree Cloud, including but not limited
        to content that is false, misleading, phishing-related, spam, or falls under SHAFT categories (Sex, Hate, Alcohol,
        Firearms, Tobacco). Upon a third and each subsequent content violation by the same Content Provider, a penalty of
        <strong>$10,000 (USD)</strong> shall apply per incident.
      </p>


    </div>
    <div id="tab22" class="tab-content">
      <h2>HOW 360 DEGREE CLOUD IS PREPARING TO PROTECT YOUR DATA</h2>
      <h2>OVERVIEW</h2>
      <p>At 360 Degree Cloud, customer trust is our top priority. We deliver services to hundreds of active customers, including small and medium enterprises in India and abroad. Our customers trust us with some of their most sensitive information.</p>

      <p>360 Degree Cloud continually monitors the evolving privacy regulatory and legislative landscape to identify changes and determine what tools our customers might need to meet their compliance needs depending upon their applications. We recommend that customers with questions regarding 360 Degree Cloud data privacy or its data protection regulations contact their account manager first. 360 Degree Cloud is not in the position to provide legal advice, and we recommend that customers consult their legal counsel if they have legal questions.</p>

      <p>This Policy establishes the 360 Degree Cloud group's approach to compliance with applicable data protection laws when processing Personal Data <strong>solely as a Data Processor on behalf of its customers</strong>.</p>

      <p>The standards described in the Policy are worldwide standards that apply to all Group Members when processing any personal data as a processor on behalf of its customers. As such, this Policy applies regardless of the origin of the personal data that we process, the country in which we process personal data, or the country in which a Group Member is established.</p>

      <h2>USEFUL DEFINITIONS</h2>

      <p><strong>"Controller"</strong> means the natural or legal person, public authority, agency or other body which, alone or jointly with others, determines the purposes and means of the Processing of Personal Data.</p>

      <p><strong>"Data Protection Law"</strong> means all applicable legislation relating to data protection and privacy including without limitation the EU Data Protection Directive 95/46/EC and all local laws and regulations which amend or replace any of them, including the GDPR, together with any national implementing laws in any Member State of the European Union or, to the extent applicable, in any other country, as amended, repealed, consolidated or replaced from time to time.</p>

      <p><strong>"Data Subject"</strong> means the individual to whom Personal Data relates.</p>

      <p><strong>"Instruction"</strong> means the written, documented instruction, issued by the Controller to the Processor, and directing the same to perform a specific action regarding Personal Data (including, but not limited to, depersonalizing, blocking, deletion, making available).</p>

      <p><strong>"Personal Data"</strong> means any information relating to an identified or identifiable individual where such information is contained within Customer Data and is protected similarly as personal data or personally identifiable information under applicable Data Protection Law.</p>

      <p><strong>"Personal Data Breach"</strong> means a breach of security leading to accidental or unlawful destruction, loss, alteration, unauthorized disclosure of, or access to, Personal Data transmitted, stored or otherwise processed.</p>

      <p><strong>"Processing"</strong> means any operation or set of operations which is performed on Personal Data, encompassing the collection, recording, organization, structuring, storage, adaptation or alteration, retrieval, consultation, use, disclosure by transmission, dissemination or otherwise making available, alignment or combination, restriction or erasure of Personal Data.</p>

      <p><strong>"Processor"</strong> means a natural or legal person, public authority, agency or other body which processes Personal Data on behalf of the Controller.</p>

      <h2>What is 360 Degree Cloud doing to get compliance ready?</h2>

      <p><strong>360 Degree Cloud has been working on a dedicated product roadmap that places customer consent, information security and data minimization at the very core of its service platform.</strong></p>

      <p><strong>We know that customers care deeply about privacy and data security. That's why 360 Degree Cloud gives you ownership and control over your content through simple, powerful tools that allow you to determine where your content will be stored, secure your content in transit and at rest, and manage your access to 360 Degree Cloud services and resources for your users. We also implement responsible and sophisticated technical and physical controls that are designed to prevent unauthorized access to or disclosure of your content.</strong></p>

      <p>We use appropriate security measures to protect the security of your personal information both online and offline. These measures vary based on the sensitivity of the personal information we collect, process and store and the current state of technology. We also take measures to ensure service providers that process personal data on our behalf also have appropriate security controls in place.</p>

      <p>Where Customers provide Personal Data, 360 Degree Cloud processes such Personal Data strictly on documented instructions of the Customer and solely for the purpose of providing the contracted services or meeting applicable legal or regulatory requirements imposed on the Customer.</p>

      <p>This section describes the technical and organisational measures implemented by 360 Degree Cloud to protect Personal Data against unauthorised access, disclosure, alteration, or misuse.</p>

      <p>If you want to know why/what data is collected and what will be use of your data, please visit our Privacy policy - <a href="https://360smsapp.com/privacy-policy/" target="_blank">https://360smsapp.com/privacy-policy/</a></p>

      <p>While no system can be completely risk-free, 360 Degree Cloud implements and continuously reviews appropriate technical and organisational measures in accordance with GDPR Article 32 to ensure a level of security appropriate to the risk, including protection against unauthorised or unlawful processing and against accidental loss, destruction or damage.</p>

      <p>But 360 Degree Cloud assures to protect the confidentiality of your data and protect from unauthorized use of your data. Additionally, you must keep your account password and not disclose them publicly or to unauthorized individuals - this includes accidentally distributing them in a binary or checking them into source control.</p>

      <h3>Three Core Parts of Our Communication Platform</h3>
      <h4>1. Customer Consent</h4>
      <p>Ensuring clear and specific consent for data collection and processing</p>
      <h4>2. Data Minimization</h4>
      <p>Holding only the bare minimum personal information needed</p>
      <h4>3. Information Security</h4>
      <p>Implementing robust security measures to protect your data</p>

      <h2>1) CUSTOMER CONSENT</h2>
      <p>If we collect and/or process personal information such as telephone numbers, IP Addresses, email ids, etc., then we must ensure that we do so only with clear and specific consent of our users.</p>

      <p>The onus is on us to ensure that our users know exactly what they are signing up for, so consider simplifying the language of your Terms of Service, clearly spelling out what personal data we intend to hold and process. Don't have that checkbox preselected and implement double opt-in for marketing communication.</p>

      <h3>Rights Granted to Every Client:</h3>
      <ol>
        <li>The right to be informed about what personal data you intend to maintain, why access to that data is required, and how you intend to process it.</li>
        <li>The right to access the personal data that you hold about them, at no extra cost.</li>
        <li>The right of rectify inaccuracies in their personal information.</li>
        <li>The right to erasure personal information from your systems, and third-party systems to which this data may have been propagated.</li>
        <li>The right to restrict processing of their personal data.</li>
        <li>The right to data portability</li>
        <li>The right to object to further processing of their personal data.</li>
        <li>Rights regarding automated decision making</li>
      </ol>

      <h2>2) DATA MINIMIZATION</h2>
      <p>A key theme that runs across all compliance is 'Data Minimization'. We should only hold the bare minimum personal information needed by us to offer your services effectively.</p>

      <p>360 Degree Cloud processes Personal Data strictly on a transient basis and does not persistently retain Customer Content or End-User Personal Data. Data minimisation controls are implemented by Customers within their own environments.</p>

      <p>Today, data storage is inexpensive, as a result, modern systems and products tend to maintain data in excess, and for longer periods of time. Also, we make sure to do a thorough audit of our data systems and logging strategy.</p>

      <h2>3) INFORMATION SECURITY</h2>
      <p>The policy requires businesses to take necessary measures to ensure a high level of information security.</p>

      <p>Where 360 Degree Cloud transiently processes Personal Data, appropriate technical and organisational safeguards are applied in accordance with GDPR Article 32.</p>

      <p>Access logs are maintained for operations carried out on the personal data of every client. Any data breach is communicated to impacted users quickly and transparently.</p>

      <p>We conduct regular vulnerability tests and annual penetration testing as part of our audits. We make sure suitable security measures are in place to ensure the confidentiality, integrity, and availability of Information. We also use pseudonymization through encryption and hashing to make sure all personal data is protected. We are taking appropriate technical and organizational measures to adequately protect Personal Data against accidental or unlawful destruction, loss, alteration, unauthorized disclosure, or access to Personal Data.</p>

      <p><strong>Data Protection Officers (DPO):</strong></p>
      <p>1) Mr. Rajeev Khare</p>
      <p>2) Prateek Narayan is our DPO’s</p>
      <p><strong>Being compliant to data privacy, here are the key initiatives and product features and details on how we are preparing to be compliant:</strong></p>

      <h2>KEY INITIATIVES AND PRODUCT FEATURES</h2>

      <h3>ENCRYPTED STORAGE FOR RECORDINGS AND TRANSCRIPTS</h3>
      <p>Where recordings or transcripts are processed as part of a service request, such data is handled in encrypted form and only within the duration required to execute the Customer's instructions. 360 Degree Cloud does not persistently store recordings or transcripts and processes such data solely in transient memory or Customer-controlled environments.</p>

      <h3>ARCHIVAL PROCESS</h3>
      <p>We shall also maintain Billing Detail Records (BDRs), Agreements, Work order records in its transactional databases for a period of 5 years only for the purpose of billing, accounting, etc. After 5 years, we shall delete the data that was not business critical and are archived for much longer time periods in 360 Degree Cloud's data warehouse.</p>
      <p>
        “Any records retained by 360 Degree Cloud for billing, accounting, or legal-compliance purposes contain only non-identifiable transactional and financial reference data and do not contain End-User Personal Data or message content.”</p>

      <h3>PAYMENT DETAILS</h3>
      <p>360 Degree Cloud does not store, process or transmit any cardholder data. All payment transactions are handled exclusively by PCI-DSS compliant third-party payment service providers. 360 Degree Cloud receives only transaction confirmation references and does not have access to full payment credentials at any time.</p>

      <h3>KIDS' PRIVACY</h3>
      <p>We do not address anyone under the age of 13. Customers are responsible for ensuring lawful processing of children's Personal Data in accordance with applicable law. If You are a parent or guardian and You are aware that Your child has provided Us with Personal Data, please contact Us. If We become aware that We have collected Personal Data from anyone under the age of 13 without verification of parental consent, We take steps to remove that information from Our servers.</p>

      <h3>FOR HOW LONG WE KEEP YOUR DATA</h3>
      <ol>
        <li>360 Degree Cloud does not define or control retention periods for Customer Personal Data. All retention, archival and deletion of Personal Data are determined and executed exclusively by the Customer within their own systems and third-party platforms selected by them.</li>
        <li>360 Degree Cloud processes Personal Data only on a transient basis and does not persistently retain Customer Content or End-User Personal Data beyond the duration necessary to execute the Customer's instructions.</li>
        <li>Where 360 Degree Cloud is required to maintain limited non-identifiable transactional or compliance records under applicable law (such as financial reconciliation references), such records do not contain Personal Data.</li>
      </ol>

      <h2>YOU CAN MANAGE YOUR OWN ACCOUNT</h2>
      <p>You can make various choices about your salesforce account data through the salesforce.com login account portal, such as accessing it, correcting it, deleting it, or updating your choices about how it is used, when you log into your sales force account.</p>

      <h3>1. Closing Your Account and Deletion</h3>
      <p>To request closure or deletion of your 360 Degree Cloud data, you can email us at <a href="mailto:legal@360degreecloud.com">legal@360degreecloud.com</a> or contact customer support. You should know that closure and/or deletion of your 360 Degree Cloud data will result in you permanently losing access to your data in the 360 Degree cloud database. Customers are solely responsible for deleting Personal Data from their own systems and third-party platforms. 360 Degree cloud does not take any responsibility for change in any data or application security at salesforce.com. Similarly, data, including personal information, associated with your 360 Degree Cloud's account we are required to maintain for legal purposes or for necessary business operations will be retained after service closure until no longer needed.</p>

      <h3>2. Promotional Communications</h3>
      <p>You can choose not to receive promotional emails from 360 Degree Cloud by following the unsubscribe/opt-out instructions in those emails. You can also opt-out by contacting Customer Support. Please note that even if you opt out of promotional communications, we may still send you non-promotional messages relating to things like updates to our terms of service or privacy notices, security alerts, billing and other notices relating to your access to or use of our products and services.</p>

      <h3>3. Cookies and Tracking Technologies</h3>
      <p>How you make choices about cookies and other tracking technologies depends on the type of cookie or tracking technology being used. We use "Cookies" to identify the areas of our website that you have visited. A Cookie is a small piece of data stored on your computer or mobile device by your web browser. We use Cookies to personalize the Content that you see on our website. Most web browsers can be set to disable the use of Cookies. However, if you disable Cookies, you may not be able to access functionality on our website correctly or at all. We never place Personally Identifiable Information in Cookies.</p>

      <p><strong>Note -</strong> If you are an end user of an application built on 360 Degree Cloud's platform and not a direct client of 360 Degree Cloud, you should direct requests relating to your personal information to the relevant application provider in accordance with the application provider's own privacy policy and cookies policy <a href="https://360degreecloud.com/cookie-policy" target="_blank">https://360degreecloud.com/cookie-policy</a>.</p>

      <h2>WE DON'T SHARE YOUR END USERS' PERSONAL DATA</h2>
      <p>We do not sell or allow your Data to be used by third parties for their own marketing purposes, unless you ask us to do this or give us your consent to do this. Further, we do not sell your or your end users' personal information (whether contained in Customer Usage Data or Customer Content). And we do not share it with third parties for their own marketing or other purposes, unless you instruct us to do so.</p>

      <h2>LOCATION OF YOUR DATA</h2>
      <p>360 Degree Cloud is in India, and our affiliated companies are located throughout the world. Depending on the scope of your interactions with 360 Degree Cloud, your personal information may be stored in or accessed from multiple countries, including India. Whenever we transfer personal information to other jurisdictions, we will ensure that the information is transferred in accordance with this Privacy Notice and as permitted by applicable data protection laws.</p>

      <h2>ACCESS AND CHOICE</h2>
      <p>As 360 Degree Cloud acts solely as a Data Processor, all decisions regarding the collection, use, disclosure, and configuration of Personal Data are determined exclusively by the Customer in their capacity as Data Controller. End Users should exercise their data protection rights directly with the relevant Customer in accordance with that Customer's privacy policy. 360 Degree Cloud will provide reasonable assistance to Customers to enable them to comply with applicable data protection obligations.</p>

      <h2>ACCOUNT DELETION PROCESS</h2>
      <p>Upon termination or closure of a Customer account, 360 Degree Cloud will disable access to the Services.</p>

      <p>360 Degree Cloud does not independently retain or archive Customer Personal Data. Customers remain solely responsible for deleting or retaining Personal Data within their own systems, and third-party platforms selected by them. Where required by applicable law, 360 Degree Cloud may retain limited non-identifiable operational or financial reference records that do not contain Personal Data.</p>

      <h2>COMPLAINT HANDLING</h2>
      <p>Enable individuals to raise data protection complaints and concerns via email at <a href="mailto:legal@360degreecloud.com">legal@360degreecloud.com</a>. 360 Degree Cloud will acknowledge receipt of a question, concern or complaint to the individual concerned within fifteen (15) working days, investigating and making a substantive response within one (1) month.</p>

      <h2>AUDIT AND INSPECTION RIGHTS & DUTIES</h2>
      <p>We have created our own internal process on how we respond and resolve complaints and requests from individuals related to concern or requirements. These rights include the right to information, right to rectification, right to access, right to erasure, right to restrict processing, right to data portability, right to object or right not to be subject to automated decision-making, including profiling.</p>

      <h2>COOPERATION WITH COMPETENT DATA PROTECTION AUTHORITIES</h2>
      <p>Where required, 360 Degree Cloud will make the necessary personnel available for dialogue with a competent data protection authority in relation to the Policies.</p>

      <h2>INTERNAL COMPLIANCE DEDICATED TO POLICY</h2>

      <h3>1. APPROPRIATE STAFF AND SUPPORT</h3>
      <p>Having appropriate staff and support to ensure and oversee privacy compliance throughout the business. The major responsibilities of that core team include:</p>
      <ol>
        <li>Ensuring that the Policies and other privacy-related policies, objectives and standards are defined and communicated.</li>
        <li>Providing clear and visible senior management support and resources for the Policies and for privacy objectives and initiatives in general.</li>
        <li>Evaluating, approving and prioritizing remedial actions consistent with the requirements of the Policies, strategic plans, business objectives and regulatory requirements.</li>
        <li>Periodically assessing privacy initiatives, accomplishments, and resources to ensure continued effectiveness and improvement.</li>
      </ol>

      <h3>2. PRIVACY TRAINING</h3>
      <p>To ensure that the staff is educated about the need to protect personal data in accordance with the controller and Processes. 360 Degree Cloud's Privacy team has overall responsibility for privacy training at 360 Degree Cloud, with input from colleagues from other functional areas, including Legal, Information Security, Data Compliance, HR and other departments, as appropriate. The Privacy team will review training from time to time to ensure it addresses all relevant aspects of the Policies and that it is appropriate for individuals who have permanent or regular access to personal data, who are involved in the processing of personal data or in the development of tools to process personal data.</p>

      <h3>3. DATA PROTECTION IMPACT ASSESSMENT (DPIA)</h3>
      <p>DPIA is conducted to review proposed processing activity of data subjects' personal data. This is to review the purpose, necessity, and proportionality of personal data considering risk to data subjects. It is generally carried out every 3 years. Carry out DPIA whenever the processing of personal data is likely to result in a high risk to the rights and freedoms of individuals. 360 Degree Cloud shall carry out DPIA prior to processing personal data which contain at least the following:</p>
      <ol>
        <li>A systematic description of the processing operations and the purposes of the processing.</li>
        <li>An assessment of the necessity and proportionality of the processing operations in relation to the purposes.</li>
        <li>An assessment of risks to the privacy rights of individuals.</li>
        <li>The measures envisaged to address the risks include safeguards, security measures, and mechanisms to ensure the protection of personal data and demonstrate compliance with applicable data protection laws.</li>
      </ol>

      <h3>4. DOCUMENTATION</h3>
      <p>360 Degree Cloud documents each thing related to your personal data and its processing, and the information on how personal data flows through the system.</p>
      <p>
        360 Degree Cloud shall obtain and maintain all permits, licenses, and approvals required for its own provision of the Services, to the extent applicable to 360 Degree Cloud as a software provider.</p>

      <h3>5. A SEPARATE DATA COMPLIANCE DEPARTMENT / PRIVACY TEAM</h3>
      <p>Incorporating members of Legal and Information Security teams ensures appropriate independence and oversight of duties relating to all aspects of 360 Degree Cloud's data protection compliance.</p>

      <p>The Privacy Team is accountable for managing and implementing 360 Degree Cloud's data privacy program internally (including the Policies) and for ensuring that effective data privacy controls are in place for any third-party service provider 360 Degree Cloud engages. In this way, the Privacy Team is actively engaged in addressing matters relating to 360 Degree Cloud's privacy compliance on a routine, day-to-day basis.</p>

      <h2>CHANGES TO OUR POLICY</h2>
      <p>If we decide to change our policy, we will post those changes on this page, and/or update the Policy modification date below.</p>

      <h2>CONCLUSION</h2>
      <p>As your service provider, we understand that our compliance with data protection is critical for your business. We are making all the efforts to ensure your customer data stays safe, while also being mindful about keeping things simple for developers. It is not a onetime effort. It's a continuous process and we will be making sure we review our processes regularly to make sure we do not breach any obligations set forth and also closely follow more updates to the regulation. If your business processes the personal data of any subject and you want to run that data through 360 Degree Cloud, we've got you covered.</p>

      <h2>YOUR CONSENT</h2>
      <p>By using our site, registering an account, or making a purchase of services, you consent to this Policy.</p>

      <p><strong>Disclaimer:</strong> None of the content above is legal advice. Please seek legal counsel for specific recommendations related to compliance.</p>



    </div>
  </div>
  </div>

<script>
  // FIX: Robust openTab — handles both button clicks and programmatic calls
  function openTab(evt, tabId, buttonId) {
    // Prevent default if this is a real click on an <a>
    if (evt && evt.preventDefault) evt.preventDefault();

    // Hide all tab content panels
    document.querySelectorAll('.tab-content').forEach(function(tc) {
      tc.classList.remove('active');
    });

    // Remove active class from all sidebar buttons
    document.querySelectorAll('.sidebar button.tablink').forEach(function(btn) {
      btn.classList.remove('active');
    });

    // Show selected panel
    var panel = document.getElementById(tabId);
    if (panel) panel.classList.add('active');

    // FIX: Determine which button to highlight
    var targetBtn = null;

    if (buttonId) {
      // Explicit button ID passed (used by inline links in content)
      targetBtn = document.getElementById(buttonId);
    } else if (evt && evt.currentTarget && evt.currentTarget.classList.contains('tablink')) {
      // Clicked a sidebar button directly
      targetBtn = evt.currentTarget;
    }

    if (targetBtn) targetBtn.classList.add('active');

    // On mobile: scroll sidebar so active button is visible
    if (targetBtn && window.innerWidth <= 768) {
      var sidebar = document.querySelector('.sidebar');
      var btnTop = targetBtn.offsetTop;
      var sidebarHeight = sidebar.clientHeight;
      sidebar.scrollTop = btnTop - sidebarHeight / 3;
    }
  }
</script>
<?php get_footer('sms'); ?>