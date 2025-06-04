<?php
    global $siteTokens;
$siteTokens['[hero-3-step-form]'] = '
<!-- Hero 3 Step Form -->
        <div id="hero">
        <style>
            :root {
            --brand-default: #22873b;
            --brand-accent: #52b057;
            --brand-dark: #005ba9;
        }
        #hero-img > img {
            width:100%;
            height: 100%;
            position: absolute;
            inset: 0;
            opacity: .35;
        }
        #hero-form {
            box-shadow:0 0 40px rgba(0 0 0 / 10%);
            display:flex;
            flex-direction:column;
            background-color: #fff;
        }
        #hero-form-header {
            position:relative;
            background-color:#014784;
            color:#fff;
            padding: 2rem 2rem 2rem 3.5rem;
        }
        #hero-form-header span {
            background-color: var(--brand-accent);
            color:#000;
            font-family: \'tg-adventor-bold\';
            font-size: 1.75rem;
            padding:.5rem 1.5rem;
            letter-spacing:.025rem;
            margin-bottom:1rem;
            border-radius:2px;
            display:block;
            width:fit-content;
            text-transform: uppercase;
        }
        p.hero-form-title {
            font-size: clamp(1.25rem, 3vw, 1.5rem);
            font-weight:600;
            line-height:1.3;
            margin-bottom:.5rem;
            font-family: \'tg-adventor-bold\';
        }
        p.hero-form-details {
            font-size:.8rem;
            font-weight:300;
            letter-spacing:.025rem;
            margin-bottom:0;
            line-height:1.4;
        }
        #hero-form-arrow {
            position:absolute;
            height:170px;
            width:60px;
            bottom:-20px;
            left:10px;
            pointer-events:none;
        }
        #hero-form-arrow img {
            object-fit:contain;
            height:100%;
            object-position:bottom;
            filter: hue-rotate(-225deg) brightness(1.1);
        }
        #hero-form-wrap {
            flex:1;
            justify-content:center;
            align-items:end;
            display:flex;
            min-height:250px;
        }
        @media (width >= 1024px) {
            #hero {
                margin-inline: auto;
                padding: 2rem;
                display: grid;
                grid-template-columns: 60% 1fr;
                gap: 2rem;
                align-items: start;
                background-color: var(--brand-dark);
            }
            #hero-top-bar {
                display:flex;
                width:100%;
                align-items:center;
                height:48px;
                gap:2rem;
            }
            #hero-img {
                grid-column:1;
                height:100%;
            }
            #hero-form {
                grid-column:2;
                height:100%;
            }
        }
        #hero-img #main-text {
            position: relative;
            transform: none;
            top: 0;
            padding-block: 2rem 0;
            padding-inline: clamp(1rem, 2vw, 2rem);
            width: 100%;
            text-align: left;
            display: grid;
            grid-template-columns: 1fr auto;
            grid-template-rows: 1fr 1fr;
            background: transparent;
            gap: 1rem 0;
            container-type: inline-size;
            container-name: owner;
            height: 100%;
        }
        #hero-img {
            position: relative;
            display: flex;
            align-items: end;
            justify-content: start;
            background-color: #fff;
            max-height: 300px;
            overflow:hidden;
        }
        
        #hero-img #main-text .main-service-text {
            margin: 0 0 2rem 1rem;
        }
        li.main-service-item {
            display: flex;
            margin-bottom: .5rem;
        }
        #hero-img #main-text .main-service-text a {
            font-size: clamp(1rem, 2vw, 1.2rem);
            line-height: 1.2;
        }
        #hero-img #main-text img {
            margin: 0;
        }
        #main-text picture {
            align-self: end;
        }   
        #main-text picture:last-child {
            grid-row: 1 / 3;
            grid-column: 2;
        }
        #main-text picture:last-child {
                width: clamp(250px, 28vw, 375px);
            }
        @container owner (width >= 600px){
            #main-text picture:last-child {
                width: clamp(250px, 35vw, 375px);
            }
        }
        #form-wrap {padding-top: 1.5rem;}
        
        #contact_form {
            padding-bottom: 2rem;
        }
        
        #btn-container {
            margin-top: 1.5rem;
        }
        #btn-container input[type=submit] {
            background-color:var(--brand-default);
            color:#fff;
        }
        #form-wrap .form-title p {
            font-family: \'tg-adventor-bold\';
            color: var(--brand-dark);
        }
        @media (width >= 641px){
            #hero-img {
                max-height: 520px;
            }
        }
        </style>
            <div id="hero-img">
            <img src="https://cdn.treehouseinternetgroup.com/cms_images/60/crawl_space_installation_64.jpg" alt="[company]"><div id="main-text">
                <picture>
                    <source srcset="https://cdn.treehouseinternetgroup.com/cms_images/60/JW_HeadlineNEW_rep.png" media="(max-width: 640px)">
                    <img src="https://cdn.treehouseinternetgroup.com/cms_images/60/JW_HeadlineNEW_rep.png" alt="Waterproofing Oregon &amp; Washington" width="600" height="220" decoding="async" fetchpriority="high">
                </picture>
                <ul class="main-service-text" style="list-style: none;">
                    <li class="main-service-item"><i class="fa fa-check"></i><a href="/basement-waterproofing.html" contenteditable="false" style="cursor: pointer;" title="Basement Waterproofing">Basement Waterproofing</a></li>
                    <li class="main-service-item"><i class="fa fa-check"></i><a href="/crawl-space-repair.html" contenteditable="false" style="cursor: pointer;" title="Crawl Space Encapsulation">Crawl Space Encapsulation</a></li>
                    <li class="main-service-item"><i class="fa fa-check"></i><a href="/electrical.html" contenteditable="false" style="cursor: pointer;" title="Electrical">Electrical</a></li>
                    <li class="main-service-item"><i class="fa fa-check"></i><a href="/foundation-repair.html" contenteditable="false" style="cursor: pointer;" title="Structural Services">Structural Services</a></li>
                </ul> 
                <picture>
                    <source srcset="https://cdn.treehouseinternetgroup.com/cms_images/60/john-headshot.webp" type="image/webp">
                    <img src="https://cdn.treehouseinternetgroup.com/cms_images/60/john-headshot.png" alt="Robin Ekloff" width="360" height="383" decoding="async" fetchpriority="high">
                </picture>
            </div>
            
            </div>
            <div id="hero-form">
                <div id="hero-form-header">
                    <span>5% Off</span>
                    <p class="hero-form-title">Any New Basement Waterproofing or Crawl Space Repair Project</p>
                    <p class="hero-form-details">*Cannot be combined with other offers. Expires on date of appointment.</p>
                    <div id="hero-form-arrow"><img src="https://cdn.treehouseinternetgroup.com/cms_images/7/hero-form-arrow.svg" alt="Special Offer"></div>
                </div>
                <div id="hero-form-wrap">
                    <div id="form-wrap">
                        <div id="submit-loader">
                            <div class="submit-loader--wrap">
                              <div></div>
                              <div></div>
                              <div></div>
                            </div>
                        </div>
                        <div class="form-title">
                            <p>Contact Us for a Free Estimate</p>
                        </div>
                        <form id="contact_form" action="/free-estimate/confirmation.html" method="post" novalidate="true">
                                <input type="hidden" name="save" value="1">
                            <div id="step-dot-container">
                                <span class="step active"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                            </div>
                            <!-- TAB 1 -->
                            <div class="tab current">
                                <div class="col-span-3">
                              <label for="First_Name">First Name</label>
                              <input type="text" id="First_Name" name="First_Name" placeholder="" maxlength="50" required="">
                            </div>
                                <div class="col-span-3">
                              <label for="Last_Name">Last Name</label>
                              <input type="text" id="Last_Name" name="Last_Name" placeholder="" maxlength="50" required="">
                            </div>
                            </div>
                            <!-- TAB 2 -->
                            <div class="tab">
                                <div class="col-span-full">
                              <label for="Street_Address">Street Address</label>
                              <input id="Street_Address" name="Street" type="text" title="please enter a valid street address" required="">
                            </div>
                                <div class="col-span-3 md-col-span-2">
                              <label for="City">City</label>
                              <input id="City" name="City" type="text" title="please enter a valid city" required="">
                            </div>
                                <div class="col-span-3 md-col-span-2">
                              <label for="State">State</label>
                              <select name="State" id="State" required="required">
                                <option value="">Select...</option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="DC">District of Columbia</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                              </select>
                            </div>
                                <div class="col-span-3 md-col-span-2">
                              <label for="Zip_Code">Zip Code</label>
                              <input type="text" id="Zip" name="Zip_Code" maxlength="10" data-validate-zip="" required="">
                            </div>
                                <div class="col-span-3">
                              <label for="Phone">Phone Number</label>
                              <input type="text" id="Phone" name="Phone" data-validate-phone="" required="">
                            </div>
                                <div class="col-span-full md-col-span-3">
                              <label for="Email_Address">Email Address</label>
                              <input id="Email_Address" name="Email_Address" type="email" title="please enter a valid email address" required="">
                            </div>
                            </div>
                            <!-- TAB 3 -->
                            <div class="tab">
                                <div class="col-span-full">
                              <label for="What_Prompted_Id"> What prompted you to contact us? </label>
                              <input type="hidden" id="lead_what_prompted_response" name="What_Prompted_Response" value="">
                              <select id="lead_what_prompted_id" name="What_Prompted_Id" required="">
                                <option value="">Please select...</option>
                                <option value="1">Referral</option>
                                <option value="2">Previous Customer</option>
                                <option value="3">Internet / Web Search</option>
                                <option value="4">TV</option>
                                <option value="5">Radio</option>
                                <option value="6">Mail</option>
                                <option value="7">Billboards</option>
                                <option value="8">Other</option>
                              </select>
                            </div>
                                <div class="col-span-full">
                              <label for="Message"> What type of service are you requesting? </label>
                              <textarea id="Message" name="Message" rows="3"></textarea>
                            </div>
                            </div>
                            <!-- NAV BUTTONS -->
                            <div>
                                <div id="btn-container" class="mx-auto mt-8 flex w-fit justify-between gap-4">
                                    <button type="button" id="prevBtn" onclick="nextPrev(-1)" style="display: none">Previous Step</button>
                                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next Step</button>
                                    <input type="submit" value="Send Request" style="display: none">
                                </div>
                            </div>
                        </form>
                </div>
        
                    <script type="text/javascript" src="https://cdn.treehouseinternetgroup.com/cms_core/assets/js/th_form_validator.js?v=1"></script>
                    <script>
                      const validator = new ThFormValidator("contact_form", {
                      	disableSubmit: true,
                      });
                    </script>
                    <script>
                      var currentTab = 0;
                      const emailAddress = document.querySelector("#Email_Address");
                      const phone = document.querySelector("#Phone");
                      const zip = document.querySelector("#Zip");
                      const btns = document.querySelector("#btn-container");
                      const submit = document.querySelector("input[type=\'submit\']");
                      const prevBtn = document.querySelector("#prevBtn");
                      const nextBtn = document.querySelector("#nextBtn");
                      const form = document.querySelector("#contact_form");
                      const tabs = document.querySelectorAll("#contact_form .tab");
                      const steps = document.querySelectorAll("#contact_form .step");
                      const whatPromptedSelect = document.getElementById(
                      	"lead_what_prompted_id"
                      );
                      const whatPromptedResponse = document.getElementById(
                      	"lead_what_prompted_response"
                      );
                    
                      form.addEventListener("submit", function (e) {
                      	e.preventDefault();
                      	const errorFields = validator.validateAll();
                      	if (errorFields.length) {
                      		errorFields[0].focus();
                      		return;
                      	}
                      	document
                      		.querySelector(\'#contact_form [type="submit"]\')
                      		.setAttribute("disabled", "disabled");
                      	document.querySelector("#submit-loader").classList.add("loading");
                      	this.submit();
                      });
                    
                      whatPromptedSelect.addEventListener("change", (e) => {
                      	whatPromptedResponse.value = whatPromptedSelect.value;
                      });
                    
                      function showTab(n) {
                      	document
                      		.querySelector("#contact_form .tab.current")
                      		.classList.remove("current");
                      	tabs[n].classList.add("current");
                      	document
                      		.querySelector("#contact_form .step.active")
                      		.classList.remove("active");
                      	steps[n].classList.add("active");
                      	steps[n].classList.remove("finish");
                    
                      	if (n == 0) {
                      		prevBtn.style.display = "none";
                      		btns.classList.add("w-fit");
                      		btns.classList.remove("w-full");
                      	} else {
                      		prevBtn.style.display = "inline-block";
                      		btns.classList.add("w-full");
                      		btns.classList.remove("w-fit");
                      	}
                      	if (n == 1) {
                      		nextBtn.style.display = "inline-block";
                      	}
                      	if (n == 2) {
                      		nextBtn.style.display = "none";
                      		submit.style.display = "inline-block";
                      	} else {
                      		submit.style.display = "none";
                      	}
                    
                      	let element = document.getElementById("contact_form");
                      	//let header = document.getElementById("header");
                      	//let headerOffset = header.offsetHeight;
                      	let paddingOffset = "30";
                      	let elementPosition = element.getBoundingClientRect().top;
                      	let offsetPosition =
                      		elementPosition + window.pageYOffset - paddingOffset;
                    
                      	if (window.innerWidth < 768) {
                      		if (n >= 1) {
                      			window.scrollTo({
                      				top: offsetPosition,
                      				behavior: "smooth",
                      			});
                      		}
                      	}
                      }
                    
                      function nextPrev(n) {
                      	if (n == 1 && validator) {
                      		const errorFields = validator.validateAll(tabs[currentTab]);
                      		if (errorFields.length) {
                      			errorFields[0].focus();
                      			return false;
                      		}
                      		steps[currentTab].classList.add("finish");
                      	}
                      	currentTab = currentTab + n;
                      	showTab(currentTab);
                      	return false;
                      }
                    </script>
                </div>
            </div>
        </div>
';

?>
