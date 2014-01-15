<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
   <head>
      <link rel="shortcut icon" href="https://ssl.gstatic.com/docs/spreadsheets/forms/favicon_jfk2.png" type="image/x-icon">
      <meta http-equiv="Content-type" content="text/html; charset=utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=10; chrome=1;">
      <meta name="fragment" content="!">
      <base target="_blank">
      <link href='https://docs.google.com/static/forms/client/css/1136591106-formview_embedded_ltr.css' type='text/css' rel='stylesheet'>
      <style type="text/css">
         body.ss-base-body {
         font-family: Arial,sans-serif;
         overflow: hidden;
         }
         div.ss-form-container {
         padding: 15px;
         background-color: #f7f7f7;
         border-color: #0b61a4;
         border-style: solid;
         border-width: 1px;
         }
         h1.ss-form-title {
         background-color: #0b61a4;
         padding: 15px;
         margin: -15px -15px 15px;
         color: #ffffff;
         text-align: left;
         }
         div.errorbox-bad {
         background-color: #f7f7f7;
         }
         h2.ss-section-title {
         background-color: transparent;
         }
         div.ss-submit div.ss-form-entry {
         background: none;
         border: none;
         }
      </style>
      <style type="text/css">
      </style>
      <script type="text/javascript">
         /**
         * @license
         *! H5F
         * https://github.com/ryanseddon/H5F/
         * Copyright (c) Ryan Seddon | Licensed MIT
         */
         
         (function(e,t){"function"==typeof define&&define.amd?define(t):e.H5F=t()})(this,function(){var e,t,a,i,n,r,s,l,u,o,c,d,v,f,p,m,h,g,b,y,w,C,N,A,E,$,k=document,x=k.createElement("input"),q=/^[a-zA-Z0-9.!#$%&'*+-\/=?\^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/,M=/[a-z][\-\.+a-z]*:\/\//i,L=/^(input|select|textarea)$/i;return r=function(e,t){var a=!e.nodeType||!1,i={validClass:"valid",invalidClass:"error",requiredClass:"required",placeholderClass:"placeholder"};if("object"==typeof t)for(var r in i)t[r]===void 0&&(t[r]=i[r]);if(n=t||i,a)for(var l=0,u=e.length;u>l;l++)s(e[l]);else s(e)},s=function(a){var i,n=a.elements,r=n.length,s=!!a.attributes.novalidate;if(b(a,"invalid",u,!0),b(a,"blur",u,!0),b(a,"input",u,!0),b(a,"keyup",u,!0),b(a,"focus",u,!0),b(a,"change",u,!0),b(a,"click",o,!0),b(a,"submit",function(i){e=!0,t||s||a.checkValidity()||w(i)},!1),!v())for(a.checkValidity=function(){return c(a)};r--;)i=!!n[r].attributes.required,"fieldset"!==n[r].nodeName.toLowerCase()&&l(n[r])},l=function(e){var t=e,a=g(t),n={type:t.getAttribute("type"),pattern:t.getAttribute("pattern"),placeholder:t.getAttribute("placeholder")},r=/^(email|url)$/i,s=/^(input|keyup)$/i,l=r.test(n.type)?n.type:n.pattern?n.pattern:!1,u=f(t,l),o=m(t,"step"),v=m(t,"min"),h=m(t,"max"),b=!(""===t.validationMessage||void 0===t.validationMessage);t.checkValidity=function(){return c.call(this,t)},t.setCustomValidity=function(e){d.call(t,e)},t.validity={valueMissing:a,patternMismatch:u,rangeUnderflow:v,rangeOverflow:h,stepMismatch:o,customError:b,valid:!(a||u||o||v||h||b)},n.placeholder&&!s.test(i)&&p(t)},u=function(e){var t=C(e)||e,a=/^(input|keyup|focusin|focus|change)$/i,r=/^(submit|image|button|reset)$/i,s=/^(checkbox|radio)$/i,o=!0;!L.test(t.nodeName)||r.test(t.type)||r.test(t.nodeName)||(i=e.type,v()||l(t),t.validity.valid&&(""!==t.value||s.test(t.type))||t.value!==t.getAttribute("placeholder")&&t.validity.valid?(A(t,[n.invalidClass,n.requiredClass]),N(t,n.validClass)):a.test(i)?t.validity.valueMissing&&A(t,[n.requiredClass,n.invalidClass,n.validClass]):t.validity.valueMissing?(A(t,[n.invalidClass,n.validClass]),N(t,n.requiredClass)):t.validity.valid||(A(t,[n.validClass,n.requiredClass]),N(t,n.invalidClass)),"input"===i&&o&&(y(t.form,"keyup",u,!0),o=!1))},c=function(t){var a,i,n,r,s=!1;if("form"===t.nodeName.toLowerCase()){a=t.elements;for(var l=0,o=a.length;o>l;l++)i=a[l],n=!!i.attributes.required,r=!!i.attributes.pattern,"fieldset"!==i.nodeName.toLowerCase()&&(n||r&&n)&&(u(i),i.validity.valid||s||(e&&i.focus(),s=!0));return!s}return u(t),t.validity.valid},d=function(e){var t=this;t.validationMessage=e},o=function(e){var a=C(e);a.attributes.formnovalidate&&"submit"===a.type&&(t=!0)},v=function(){return E(x,"validity")&&E(x,"checkValidity")},f=function(e,t){if("email"===t)return!q.test(e.value);if("url"===t)return!M.test(e.value);if(t){var i=e.getAttribute("placeholder"),n=e.value;return a=RegExp("^(?:"+t+")$"),n===i?!1:""===n?!1:!a.test(e.value)}return!1},p=function(e){var t={placeholder:e.getAttribute("placeholder")},a=/^(focus|focusin|submit)$/i,r=/^(input|textarea)$/i,s=/^password$/i,l=!!("placeholder"in x);l||!r.test(e.nodeName)||s.test(e.type)||(""!==e.value||a.test(i)?e.value===t.placeholder&&a.test(i)&&(e.value="",A(e,n.placeholderClass)):(e.value=t.placeholder,b(e.form,"submit",function(){i="submit",p(e)},!0),N(e,n.placeholderClass)))},m=function(e,t){var a=parseInt(e.getAttribute("min"),10)||0,i=parseInt(e.getAttribute("max"),10)||!1,n=parseInt(e.getAttribute("step"),10)||1,r=parseInt(e.value,10),s=(r-a)%n;return g(e)||isNaN(r)?"number"===e.getAttribute("type")?!0:!1:"step"===t?e.getAttribute("step")?0!==s:!1:"min"===t?e.getAttribute("min")?a>r:!1:"max"===t?e.getAttribute("max")?r>i:!1:void 0},h=function(e){var t=!!e.attributes.required;return t?g(e):!1},g=function(e){var t=e.getAttribute("placeholder"),a=/^(checkbox|radio)$/i,i=!!e.attributes.required;return!(!i||""!==e.value&&e.value!==t&&(!a.test(e.type)||$(e)))},b=function(e,t,a,i){E(window,"addEventListener")?e.addEventListener(t,a,i):E(window,"attachEvent")&&window.event!==void 0&&("blur"===t?t="focusout":"focus"===t&&(t="focusin"),e.attachEvent("on"+t,a))},y=function(e,t,a,i){E(window,"removeEventListener")?e.removeEventListener(t,a,i):E(window,"detachEvent")&&window.event!==void 0&&e.detachEvent("on"+t,a)},w=function(e){e=e||window.event,e.stopPropagation&&e.preventDefault?(e.stopPropagation(),e.preventDefault()):(e.cancelBubble=!0,e.returnValue=!1)},C=function(e){return e=e||window.event,e.target||e.srcElement},N=function(e,t){var a;e.className?(a=RegExp("(^|\\s)"+t+"(\\s|$)"),a.test(e.className)||(e.className+=" "+t)):e.className=t},A=function(e,t){var a,i,n="object"==typeof t?t.length:1,r=n;if(e.className)if(e.className===t)e.className="";else for(;n--;)a=RegExp("(^|\\s)"+(r>1?t[n]:t)+"(\\s|$)"),i=e.className.match(a),i&&3===i.length&&(e.className=e.className.replace(a,i[1]&&i[2]?" ":""))},E=function(e,t){var a=typeof e[t],i=RegExp("^function|object$","i");return!!(i.test(a)&&e[t]||"unknown"===a)},$=function(e){for(var t=document.getElementsByName(e.name),a=0;t.length>a;a++)if(t[a].checked)return!0;return!1},{setup:r}});
         
      </script>
   </head>
   <body class="ss-base-body" dir="ltr">
      <div class="ss-form-container">
         <div class="ss-top-of-page">
            <div class="ss-form-heading">
               <h1 class="ss-form-title" dir="ltr">Questions for Future Athletes</h1>
               <hr class="ss-email-break" style="display:none;">
               <div class="ss-required-asterisk">* Required</div>
            </div>
         </div>
         <div class="ss-form">
            <form action="https://docs.google.com/forms/d/1ChXMYkB08dFG5FbX8G0pRB8-tf0XciMLyY7jxS4YGkc/formResponse?embedded=true" method="POST" id="ss-form" target="_self" onsubmit="">
               <ol style="padding-left: 0">
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item ss-item-required ss-text">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_96071365">
                              <div class="ss-q-title">Fullname
                           <label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
                           <span class="ss-required-asterisk">*</span></div>
                           <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <input type="text" name="entry.96071365" value="" class="ss-q-short" id="entry_96071365" dir="auto" aria-label="Fullname  " aria-required="true" required="" title="">
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                           <div style="margin-top: 10px">
                              <a href="http://dbinbox.com/westca" target="_blank">Upload you picture</a> Please enter your name and lastname in your image title. ( Example: john-ive.jpeg)
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item  ss-date">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_645231675">
                              <div class="ss-q-title">Date you received this form:</div>
                              <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <input type="date" name="entry.645231675" value="" class="ss-q-date" dir="auto" id="entry_645231675" aria-label="Date you received this form:  ">
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item ss-item-required ss-text">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_132486975">
                              <div class="ss-q-title">Email Address
                           <label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
                           <span class="ss-required-asterisk">*</span></div>
                           <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <input type="email" name="entry.132486975" value="" class="ss-q-short" id="entry_132486975" dir="auto" aria-label="Email Address  Must be a valid email address" aria-required="true" required="" title="Must be a valid email address">
                           <div class="error-message">Must be a valid email address</div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item ss-item-required ss-text">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_1364208533">
                              <div class="ss-q-title">Phone Number
                           <label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
                           <span class="ss-required-asterisk">*</span></div>
                           <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <input type="text" name="entry.1364208533" value="" class="ss-q-short" id="entry_1364208533" dir="auto" aria-label="Phone Number  " aria-required="true" required="" title="">
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item  ss-text">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_352927173">
                              <div class="ss-q-title">Age</div>
                              <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <input type="text" name="entry.352927173" value="" class="ss-q-short" id="entry_352927173" dir="auto" aria-label="Age  " title="">
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item  ss-text">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_256093449">
                              <div class="ss-q-title">Height</div>
                              <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <input type="text" name="entry.256093449" value="" class="ss-q-short" id="entry_256093449" dir="auto" aria-label="Height  " title="">
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item  ss-paragraph-text">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_2109310792">
                              <div class="ss-q-title">Injuries / Health Issues</div>
                              <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <textarea name="entry.2109310792" rows="8" cols="0" class="ss-q-long" id="entry_2109310792" dir="auto" aria-label="Injuries / Health Issues  "></textarea>
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item  ss-text">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_1841421883">
                              <div class="ss-q-title">Current Weight</div>
                              <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <input type="text" name="entry.1841421883" value="" class="ss-q-short" id="entry_1841421883" dir="auto" aria-label="Current Weight  " title="">
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item  ss-text">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_2026312151">
                              <div class="ss-q-title">Goal Weight</div>
                              <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <input type="text" name="entry.2026312151" value="" class="ss-q-short" id="entry_2026312151" dir="auto" aria-label="Goal Weight  " title="">
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item  ss-text">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_212656347">
                              <div class="ss-q-title">Occupation</div>
                              <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <input type="text" name="entry.212656347" value="" class="ss-q-short" id="entry_212656347" dir="auto" aria-label="Occupation  " title="">
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item  ss-radio">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_1134158349">
                              <div class="ss-q-title">Do you smoke?</div>
                              <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <ul class="ss-choices" role="radiogroup" aria-label="Do you smoke?  ">
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.292202870" value="Yes" id="group_292202870_1" role="radio" class="ss-q-radio" aria-label="Yes"></span>
                                 <span class="ss-choice-label">Yes</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.292202870" value="No" id="group_292202870_2" role="radio" class="ss-q-radio" aria-label="No"></span>
                                 <span class="ss-choice-label">No</span>
                                 </label>
                              </li>
                           </ul>
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item  ss-text">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_1282070067">
                              <div class="ss-q-title">Goal Date</div>
                              <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <input type="text" name="entry.1282070067" value="" class="ss-q-short" id="entry_1282070067" dir="auto" aria-label="Goal Date  " title="">
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item  ss-radio">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_1297721438">
                              <div class="ss-q-title">Do you drink ?</div>
                              <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <ul class="ss-choices" role="radiogroup" aria-label="Do you drink ?  ">
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.928940991" value="Yes" id="group_928940991_1" role="radio" class="ss-q-radio" aria-label="Yes"></span>
                                 <span class="ss-choice-label">Yes</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.928940991" value="No" id="group_928940991_2" role="radio" class="ss-q-radio" aria-label="No"></span>
                                 <span class="ss-choice-label">No</span>
                                 </label>
                              </li>
                           </ul>
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item  ss-radio">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_1118541758">
                              <div class="ss-q-title">Allergic to any foods</div>
                              <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <ul class="ss-choices" role="radiogroup" aria-label="Allergic to any foods  ">
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.549964336" value="Yes" id="group_549964336_1" role="radio" class="ss-q-radio" aria-label="Yes"></span>
                                 <span class="ss-choice-label">Yes</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.549964336" value="No" id="group_549964336_2" role="radio" class="ss-q-radio" aria-label="No"></span>
                                 <span class="ss-choice-label">No</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.549964336" value="__other_option__" id="group_549964336_3" role="radio" class="ss-q-radio ss-q-other-toggle"></span>
                                 Other:</label>
                                 <span class="ss-q-other-container goog-inline-block"><input type="text" name="entry.549964336.other_option_response" value="" class="ss-q-other" id="entry_549964336_other_option_response" dir="auto" aria-label="Other"></span>
                              </li>
                           </ul>
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item  ss-text">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_1509239527">
                              <div class="ss-q-title">Ethnicity</div>
                              <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <input type="text" name="entry.1509239527" value="" class="ss-q-short" id="entry_1509239527" dir="auto" aria-label="Ethnicity  " title="">
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item  ss-radio">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_215917612">
                              <div class="ss-q-title">Do you stress ?</div>
                              <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <ul class="ss-choices" role="radiogroup" aria-label="Do you stress ?  ">
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.951565420" value="Yes" id="group_951565420_1" role="radio" class="ss-q-radio" aria-label="Yes"></span>
                                 <span class="ss-choice-label">Yes</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.951565420" value="No" id="group_951565420_2" role="radio" class="ss-q-radio" aria-label="No"></span>
                                 <span class="ss-choice-label">No</span>
                                 </label>
                              </li>
                           </ul>
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item  ss-paragraph-text">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_973956276">
                              <div class="ss-q-title">List you Competition History and what you placed: State never if you never competed.</div>
                              <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <textarea name="entry.973956276" rows="8" cols="0" class="ss-q-long" id="entry_973956276" dir="auto" aria-label="List you Competition History and what you placed: State never if you never competed.  "></textarea>
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item  ss-paragraph-text">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_1755306574">
                              <div class="ss-q-title">If you want to compete, please state the name of the competition and identify the date of the event.</div>
                              <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <textarea name="entry.1755306574" rows="8" cols="0" class="ss-q-long" id="entry_1755306574" dir="auto" aria-label="If you want to compete, please state the name of the competition and identify the date of the event.  "></textarea>
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item  ss-paragraph-text">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_335777010">
                              <div class="ss-q-title">When I stress out I:</div>
                              <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <textarea name="entry.335777010" rows="8" cols="0" class="ss-q-long" id="entry_335777010" dir="auto" aria-label="When I stress out I:  "></textarea>
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item  ss-radio">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_1290687414">
                              <div class="ss-q-title">I agree to send weekly photos so you can view my progress:</div>
                              <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <ul class="ss-choices" role="radiogroup" aria-label="I agree to send weekly photos so you can view my progress:  ">
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1284411150" value="Yes" id="group_1284411150_1" role="radio" class="ss-q-radio" aria-label="Yes"></span>
                                 <span class="ss-choice-label">Yes</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1284411150" value="No" id="group_1284411150_2" role="radio" class="ss-q-radio" aria-label="No"></span>
                                 <span class="ss-choice-label">No</span>
                                 </label>
                              </li>
                           </ul>
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item  ss-checkbox">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_1754739372">
                              <div class="ss-q-title">What is/are your goal (s)?</div>
                              <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <ul class="ss-choices" role="group" aria-label="What is/are your goal (s)?  ">
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1227790437" value="Improve Health" id="group_1227790437_1" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Improve Health</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1227790437" value="Maintain" id="group_1227790437_2" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Maintain</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1227790437" value="Seek advice/tips" id="group_1227790437_3" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Seek advice/tips</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1227790437" value="Lose weight" id="group_1227790437_4" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Lose weight</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1227790437" value="Manage stress" id="group_1227790437_5" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Manage stress</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1227790437" value="Get Physically stronger" id="group_1227790437_6" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Get Physically stronger</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1227790437" value="Gain Weight/Build Muscle" id="group_1227790437_7" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Gain Weight/Build Muscle</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1227790437" value="Tone-up" id="group_1227790437_8" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Tone-up</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1227790437" value="To Compete" id="group_1227790437_9" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">To Compete</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1227790437" value="__other_option__" id="group_1227790437_10" role="checkbox" class="ss-q-checkbox ss-q-other-toggle"></span>
                                 Other:</label>
                                 <span class="ss-q-other-container goog-inline-block"><input type="text" name="entry.1227790437.other_option_response" value="" class="ss-q-other" id="entry_1227790437_other_option_response" dir="auto" aria-label="Other"></span>
                              </li>
                           </ul>
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item  ss-checkbox">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_1859855765">
                              <div class="ss-q-title">Mark the following that you do NOT like:</div>
                              <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <ul class="ss-choices" role="group" aria-label="Mark the following that you do NOT like:  ">
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.662675253" value="Ground Turkey" id="group_662675253_1" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Ground Turkey</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.662675253" value="Chicken Breast" id="group_662675253_2" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Chicken Breast</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.662675253" value="Fish" id="group_662675253_3" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Fish</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.662675253" value="Ground Beef" id="group_662675253_4" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Ground Beef</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.662675253" value="Turkey Breast" id="group_662675253_5" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Turkey Breast</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.662675253" value="Shrimp" id="group_662675253_6" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Shrimp</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.662675253" value="Steak" id="group_662675253_7" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Steak</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.662675253" value="Eggs" id="group_662675253_8" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Eggs</span>
                                 </label>
                              </li>
                           </ul>
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item  ss-checkbox">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_1326374336">
                              <div class="ss-q-title">Mark the following that you do NOT like:</div>
                              <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <ul class="ss-choices" role="group" aria-label="Mark the following that you do NOT like:  ">
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1559901026" value="Asparagus" id="group_1559901026_1" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Asparagus</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1559901026" value="Broccoli" id="group_1559901026_2" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Broccoli</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1559901026" value="Green Beans" id="group_1559901026_3" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Green Beans</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1559901026" value="Lettuce" id="group_1559901026_4" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Lettuce</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1559901026" value="Carrots" id="group_1559901026_5" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Carrots</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1559901026" value="Cauliflower" id="group_1559901026_6" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Cauliflower</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1559901026" value="Spinach" id="group_1559901026_7" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Spinach</span>
                                 </label>
                              </li>
                           </ul>
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item  ss-checkbox">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_661189303">
                              <div class="ss-q-title">Mark the following that you do NOT like</div>
                              <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <ul class="ss-choices" role="group" aria-label="Mark the following that you do NOT like  ">
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1716963630" value="White Potatoes" id="group_1716963630_1" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">White Potatoes</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1716963630" value="Sweet Potatoes" id="group_1716963630_2" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Sweet Potatoes</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1716963630" value="Yams" id="group_1716963630_3" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Yams</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1716963630" value="Brown Rice" id="group_1716963630_4" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Brown Rice</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1716963630" value="Oats" id="group_1716963630_5" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Oats</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1716963630" value="Grits" id="group_1716963630_6" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Grits</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1716963630" value="White Rice" id="group_1716963630_7" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">White Rice</span>
                                 </label>
                              </li>
                           </ul>
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item  ss-checkbox">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_524071561">
                              <div class="ss-q-title">Mark the following that you do NOT like</div>
                              <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <ul class="ss-choices" role="group" aria-label="Mark the following that you do NOT like  ">
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1575050230" value="Treadmill" id="group_1575050230_1" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Treadmill</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1575050230" value="Elliptical" id="group_1575050230_2" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Elliptical</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1575050230" value="Upright Bike" id="group_1575050230_3" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Upright Bike</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1575050230" value="Recumbent Bike" id="group_1575050230_4" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Recumbent Bike</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1575050230" value="Revolving Stairs" id="group_1575050230_5" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Revolving Stairs</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1575050230" value="Stairmaster" id="group_1575050230_6" role="checkbox" class="ss-q-checkbox"></span>
                                 <span class="ss-choice-label">Stairmaster</span>
                                 </label>
                              </li>
                           </ul>
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item  ss-radio">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_77240263">
                              <div class="ss-q-title">How many days can you make it to the gym during the week?</div>
                              <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <ul class="ss-choices" role="radiogroup" aria-label="How many days can you make it to the gym during the week?  ">
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1644494149" value="3 days" id="group_1644494149_1" role="radio" class="ss-q-radio" aria-label="3 days"></span>
                                 <span class="ss-choice-label">3 days</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1644494149" value="4 days" id="group_1644494149_2" role="radio" class="ss-q-radio" aria-label="4 days"></span>
                                 <span class="ss-choice-label">4 days</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1644494149" value="5 days" id="group_1644494149_3" role="radio" class="ss-q-radio" aria-label="5 days"></span>
                                 <span class="ss-choice-label">5 days</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1644494149" value="6 days" id="group_1644494149_4" role="radio" class="ss-q-radio" aria-label="6 days"></span>
                                 <span class="ss-choice-label">6 days</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1644494149" value="7 days" id="group_1644494149_5" role="radio" class="ss-q-radio" aria-label="7 days"></span>
                                 <span class="ss-choice-label">7 days</span>
                                 </label>
                              </li>
                           </ul>
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item  ss-radio">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_1028390988">
                              <div class="ss-q-title">How long can you stay at the gym?</div>
                              <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <ul class="ss-choices" role="radiogroup" aria-label="How long can you stay at the gym?  ">
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.799323756" value="30 mins." id="group_799323756_1" role="radio" class="ss-q-radio" aria-label="30 mins."></span>
                                 <span class="ss-choice-label">30 mins.</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.799323756" value="45 mins." id="group_799323756_2" role="radio" class="ss-q-radio" aria-label="45 mins."></span>
                                 <span class="ss-choice-label">45 mins.</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.799323756" value="1 hr." id="group_799323756_3" role="radio" class="ss-q-radio" aria-label="1 hr."></span>
                                 <span class="ss-choice-label">1 hr.</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.799323756" value="1.5 hrs." id="group_799323756_4" role="radio" class="ss-q-radio" aria-label="1.5 hrs."></span>
                                 <span class="ss-choice-label">1.5 hrs.</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.799323756" value="2 hrs" id="group_799323756_5" role="radio" class="ss-q-radio" aria-label="2 hrs"></span>
                                 <span class="ss-choice-label">2 hrs</span>
                                 </label>
                              </li>
                           </ul>
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item  ss-radio">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_1346945422">
                              <div class="ss-q-title">Where do you train? Or Where are you going to train?</div>
                              <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <ul class="ss-choices" role="radiogroup" aria-label="Where do you train? Or Where are you going to train?  ">
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1576361530" value="At Home/ Complex" id="group_1576361530_1" role="radio" class="ss-q-radio" aria-label="At Home/ Complex"></span>
                                 <span class="ss-choice-label">At Home/ Complex</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1576361530" value="At a Gym" id="group_1576361530_2" role="radio" class="ss-q-radio" aria-label="At a Gym"></span>
                                 <span class="ss-choice-label">At a Gym</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1576361530" value="__other_option__" id="group_1576361530_3" role="radio" class="ss-q-radio ss-q-other-toggle"></span>
                                 Other:</label>
                                 <span class="ss-q-other-container goog-inline-block"><input type="text" name="entry.1576361530.other_option_response" value="" class="ss-q-other" id="entry_1576361530_other_option_response" dir="auto" aria-label="Other"></span>
                              </li>
                           </ul>
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item  ss-radio">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_807943146">
                              <div class="ss-q-title">Approximately how much time you currently spend at the gym ?</div>
                              <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <ul class="ss-choices" role="radiogroup" aria-label="Approximately how much time you currently spend at the gym ?  ">
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.932812708" value="30 mins." id="group_932812708_1" role="radio" class="ss-q-radio" aria-label="30 mins."></span>
                                 <span class="ss-choice-label">30 mins.</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.932812708" value="45 mins." id="group_932812708_2" role="radio" class="ss-q-radio" aria-label="45 mins."></span>
                                 <span class="ss-choice-label">45 mins.</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.932812708" value="1 hr." id="group_932812708_3" role="radio" class="ss-q-radio" aria-label="1 hr."></span>
                                 <span class="ss-choice-label">1 hr.</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.932812708" value="1.5 hrs" id="group_932812708_4" role="radio" class="ss-q-radio" aria-label="1.5 hrs"></span>
                                 <span class="ss-choice-label">1.5 hrs</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.932812708" value="2 hrs" id="group_932812708_5" role="radio" class="ss-q-radio" aria-label="2 hrs"></span>
                                 <span class="ss-choice-label">2 hrs</span>
                                 </label>
                              </li>
                           </ul>
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item  ss-text">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_2047786102">
                              <div class="ss-q-title">I struggle with dieting because: Put N/A if this is not a problem</div>
                              <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <input type="text" name="entry.2047786102" value="" class="ss-q-short" id="entry_2047786102" dir="auto" aria-label="I struggle with dieting because: Put N/A if this is not a problem  " title="">
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item  ss-radio">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_553567155">
                              <div class="ss-q-title">If I was allowed a cheat day, I would prefer it to be on:</div>
                              <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <ul class="ss-choices" role="radiogroup" aria-label="If I was allowed a cheat day, I would prefer it to be on:  ">
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.593954652" value="Sunday" id="group_593954652_1" role="radio" class="ss-q-radio" aria-label="Sunday"></span>
                                 <span class="ss-choice-label">Sunday</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.593954652" value="Monday" id="group_593954652_2" role="radio" class="ss-q-radio" aria-label="Monday"></span>
                                 <span class="ss-choice-label">Monday</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.593954652" value="Tuesday" id="group_593954652_3" role="radio" class="ss-q-radio" aria-label="Tuesday"></span>
                                 <span class="ss-choice-label">Tuesday</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.593954652" value="Wednesday" id="group_593954652_4" role="radio" class="ss-q-radio" aria-label="Wednesday"></span>
                                 <span class="ss-choice-label">Wednesday</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.593954652" value="Thursday" id="group_593954652_5" role="radio" class="ss-q-radio" aria-label="Thursday"></span>
                                 <span class="ss-choice-label">Thursday</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.593954652" value="Friday" id="group_593954652_6" role="radio" class="ss-q-radio" aria-label="Friday"></span>
                                 <span class="ss-choice-label">Friday</span>
                                 </label>
                              </li>
                              <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.593954652" value="Saturday" id="group_593954652_7" role="radio" class="ss-q-radio" aria-label="Saturday"></span>
                                 <span class="ss-choice-label">Saturday</span>
                                 </label>
                              </li>
                           </ul>
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item  ss-text">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_1101722674">
                              <div class="ss-q-title">Those that have competed before. Please indicate your Coach’s Name ?</div>
                              <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <input type="text" name="entry.1101722674" value="" class="ss-q-short" id="entry_1101722674" dir="auto" aria-label="Those that have competed before. Please indicate your Coach’s Name ?  " title="">
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item  ss-text">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_1326090922">
                              <div class="ss-q-title">Those that have competed before. Please indicate your Trainer’s Name ?</div>
                              <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <input type="text" name="entry.1326090922" value="" class="ss-q-short" id="entry_1326090922" dir="auto" aria-label="Those that have competed before. Please indicate your Trainer’s Name ?  " title="">
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item  ss-text">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_1998348477">
                              <div class="ss-q-title">Those that have competed before. Please indicate your Pre-contest diet ?</div>
                              <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <input type="text" name="entry.1998348477" value="" class="ss-q-short" id="entry_1998348477" dir="auto" aria-label="Those that have competed before. Please indicate your Pre-contest diet ?  " title="">
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item ss-item-required ss-paragraph-text">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_1787436780">
                              <div class="ss-q-title">Signature or Initials &amp; The date you submitted this form
                           <label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
                           <span class="ss-required-asterisk">*</span></div>
                           <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <textarea name="entry.1787436780" rows="8" cols="0" class="ss-q-long" id="entry_1787436780" dir="auto" aria-label="Signature or Initials &amp; The date you submitted this form  " aria-required="true" required=""></textarea>
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <div class="ss-form-question errorbox-good">
                     <div dir="ltr" class="ss-item  ss-paragraph-text">
                        <div class="ss-form-entry">
                           <label aria-hidden="true" class="ss-q-item-label" for="entry_1485210159">
                              <div class="ss-q-title">Message to the trainer</div>
                              <div class="ss-q-help ss-secondary-text" dir="ltr"></div>
                           </label>
                           <textarea name="entry.1485210159" rows="8" cols="0" class="ss-q-long" id="entry_1485210159" dir="auto" aria-label="Message to the trainer  "></textarea>
                           <div class="error-message"></div>
                           <div class="required-message">This is a required question</div>
                        </div>
                     </div>
                  </div>
                  <input type="hidden" name="draftResponse" value="[,,&quot;-189698057191530084&quot;]
                     ">
                  <input type="hidden" name="pageHistory" value="0">
                  <input type="hidden" name="fbzx" value="-189698057191530084">
                  <div class="ss-item ss-navigate">
                     <table id="navigation-table">
                        <tbody>
                           <tr>
                              <td class="ss-form-entry goog-inline-block" id="navigation-buttons" dir="ltr">
                                 <input type="submit" name="submit" value="Submit" id="ss-submit">
                                 <div class="ss-secondary-text">Never submit passwords through Google Forms.</div>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </ol>
            </form>
         </div>
         <div class="ss-footer">
            <div class="ss-attribution"></div>
            <div class="ss-legal">
               <div class="disclaimer-separator"></div>
               <div class="disclaimer" dir="ltr">
                  <div class="powered-by-logo"><span class="powered-by-text">Powered by</span>
                     <a class="ss-logo-link" href="http://drive.google.com"><img class="ss-logo" src="https://ssl.gstatic.com/docs/forms/drive_logo_small.png" alt="Google Drive"></a>
                  </div>
                  <div class="ss-terms"><span class="disclaimer-msg">This form was created inside of Mexo Inc.</span>
                     <br>
                     <a href="https://docs.google.com/forms/d/1ChXMYkB08dFG5FbX8G0pRB8-tf0XciMLyY7jxS4YGkc/reportabuse?source=https://docs.google.com/forms/d/1ChXMYkB08dFG5FbX8G0pRB8-tf0XciMLyY7jxS4YGkc/viewform?embedded%3Dtrue">Report Abuse</a>
                     -
                     <a href="http://www.google.com/accounts/TOS">Terms of Service</a>
                     -
                     <a href="http://www.google.com/google-d-s/terms.html">Additional Terms</a>
                  </div>
               </div>
            </div>
         </div>
         <div id="docs-aria-speakable" class="docs-a11y-ariascreenreader-speakable docs-offscreen" aria-live="assertive" role="region" aria-atomic></div>
      </div>
      <script type='text/javascript' src='https://docs.google.com/static/forms/client/js/1262724199-formviewer_prd.js'></script>
      <script type="text/javascript">H5F.setup(document.getElementById('ss-form'));_initFormViewer(
         "[100,\x22#0b61a4\x22,[[[132486975,[[2,102,,\x22\x22]\n]\n]\n]\n]\n]\n");
      </script>
   </body>
</html>