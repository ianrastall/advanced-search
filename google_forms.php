<div class="container">
    <!-- Google Advanced Search Form -->
    <div class="form-container">
        <div class="form-title">
            <h2>Advanced Google Web Search</h2>
            <div class="icon-link">
                <a href="https://www.google.com/webhp?hl=en" target="_blank">
                    <img src="images/icon-web.png" alt="Google Web">
                </a>
            </div>
        </div>
        <form action="https://www.google.com/search" method="get">
            <div class="form-group">
                <label for="as_q">All these words:</label>
                <input type="text" id="as_q" name="as_q" aria-label="All these words">
            </div>
            <div class="form-group">
                <label for="as_epq">This exact word or phrase:</label>
                <input type="text" id="as_epq" name="as_epq" aria-label="This exact word or phrase">
            </div>
            <div class="form-group">
                <label for="as_oq">Any of these words:</label>
                <input type="text" id="as_oq" name="as_oq" aria-label="Any of these words">
            </div>
            <div class="form-group">
                <label for="as_eq">None of these words:</label>
                <input type="text" id="as_eq" name="as_eq" aria-label="None of these words">
            </div>
            <div class="form-group">
                <label for="as_nlo">Numbers ranging from:</label>
                <div class="number-inputs">
                    <input type="number" id="as_nlo" name="as_nlo" aria-label="Numbers ranging from">
                    <span>to</span>
                    <input type="number" id="as_nhi" name="as_nhi" aria-label="to">
                </div>
            </div>
            <div class="form-group">
                <label for="lr">Language:</label>
                <select id="lr" name="lr">
                            <option value="">Any Language</option>
						<option value="lang_af">Afrikaans</option>
						<option value="lang_sq">Albanian</option>
						<option value="lang_am">Amharic</option>
						<option value="lang_ar">Arabic</option>
						<option value="lang_hy">Armenian</option>
						<option value="lang_az">Azerbaijani</option>
						<option value="lang_eu">Basque</option>
						<option value="lang_be">Belarusian</option>
						<option value="lang_bn">Bengali</option>
						<option value="lang_bs">Bosnian</option>
						<option value="lang_bg">Bulgarian</option>
						<option value="lang_ca">Catalan</option>
						<option value="lang_ceb">Cebuano</option>
						<option value="lang_zh-CN">Chinese (Simplified)</option>
						<option value="lang_zh-TW">Chinese (Traditional)</option>
						<option value="lang_co">Corsican</option>
						<option value="lang_hr">Croatian</option>
						<option value="lang_cs">Czech</option>
						<option value="lang_da">Danish</option>
						<option value="lang_nl">Dutch</option>
						<option value="lang_en">English</option>
						<option value="lang_eo">Esperanto</option>
						<option value="lang_et">Estonian</option>
						<option value="lang_fi">Finnish</option>
						<option value="lang_fr">French</option>
						<option value="lang_fy">Frisian</option>
						<option value="lang_gl">Galician</option>
						<option value="lang_ka">Georgian</option>
						<option value="lang_de">German</option>
						<option value="lang_el">Greek</option>
						<option value="lang_gu">Gujarati</option>
						<option value="lang_ht">Haitian Creole</option>
						<option value="lang_ha">Hausa</option>
						<option value="lang_haw">Hawaiian</option>
						<option value="lang_he">Hebrew</option>
						<option value="lang_hi">Hindi</option>
						<option value="lang_hmn">Hmong</option>
						<option value="lang_hu">Hungarian</option>
						<option value="lang_is">Icelandic</option>
						<option value="lang_ig">Igbo</option>
						<option value="lang_id">Indonesian</option>
						<option value="lang_ga">Irish</option>
						<option value="lang_it">Italian</option>
						<option value="lang_ja">Japanese</option>
						<option value="lang_jv">Javanese</option>
						<option value="lang_kn">Kannada</option>
						<option value="lang_kk">Kazakh</option>
						<option value="lang_km">Khmer</option>
						<option value="lang_rw">Kinyarwanda</option>
						<option value="lang_ko">Korean</option>
						<option value="lang_ku">Kurdish</option>
						<option value="lang_ky">Kyrgyz</option>
						<option value="lang_lo">Lao</option>
						<option value="lang_la">Latin</option>
						<option value="lang_lv">Latvian</option>
						<option value="lang_lt">Lithuanian</option>
						<option value="lang_lb">Luxembourgish</option>
						<option value="lang_mk">Macedonian</option>
						<option value="lang_mg">Malagasy</option>
						<option value="lang_ms">Malay</option>
						<option value="lang_ml">Malayalam</option>
						<option value="lang_mt">Maltese</option>
						<option value="lang_mi">Maori</option>
						<option value="lang_mr">Marathi</option>
						<option value="lang_mn">Mongolian</option>
						<option value="lang_my">Myanmar (Burmese)</option>
						<option value="lang_ne">Nepali</option>
						<option value="lang_no">Norwegian</option>
						<option value="lang_ny">Nyanja (Chichewa)</option>
						<option value="lang_or">Odia (Oriya)</option>
						<option value="lang_ps">Pashto</option>
						<option value="lang_fa">Persian</option>
						<option value="lang_pl">Polish</option>
						<option value="lang_pt">Portuguese</option>
						<option value="lang_pa">Punjabi</option>
						<option value="lang_ro">Romanian</option>
						<option value="lang_ru">Russian</option>
						<option value="lang_sm">Samoan</option>
						<option value="lang_gd">Scots Gaelic</option>
						<option value="lang_sr">Serbian</option>
						<option value="lang_st">Sesotho</option>
						<option value="lang_sn">Shona</option>
						<option value="lang_sd">Sindhi</option>
						<option value="lang_si">Sinhala (Sinhalese)</option>
						<option value="lang_sk">Slovak</option>
						<option value="lang_sl">Slovenian</option>
						<option value="lang_so">Somali</option>
						<option value="lang_es">Spanish</option>
						<option value="lang_su">Sundanese</option>
						<option value="lang_sw">Swahili</option>
						<option value="lang_sv">Swedish</option>
						<option value="lang_tl">Tagalog (Filipino)</option>
						<option value="lang_tg">Tajik</option>
						<option value="lang_ta">Tamil</option>
						<option value="lang_tt">Tatar</option>
						<option value="lang_te">Telugu</option>
						<option value="lang_th">Thai</option>
						<option value="lang_tr">Turkish</option>
						<option value="lang_tk">Turkmen</option>
						<option value="lang_uk">Ukrainian</option>
						<option value="lang_ur">Urdu</option>
						<option value="lang_ug">Uyghur</option>
						<option value="lang_uz">Uzbek</option>
						<option value="lang_vi">Vietnamese</option>
						<option value="lang_cy">Welsh</option>
						<option value="lang_xh">Xhosa</option>
						<option value="lang_yi">Yiddish</option>
						<option value="lang_yo">Yoruba</option>
						<option value="lang_zu">Zulu</option>
                        </select>
                </select>
            </div>
            <div class="form-group">
                <label for="cr">Region:</label>
                <select id="cr" name="cr">
                            <option value="">Any Region</option>
						<option value="countryAF">Afghanistan</option>
						<option value="countryAX">Åland Islands</option>
						<option value="countryAL">Albania</option>
						<option value="countryDZ">Algeria</option>
						<option value="countryAS">American Samoa</option>
						<option value="countryAD">Andorra</option>
						<option value="countryAO">Angola</option>
						<option value="countryAI">Anguilla</option>
						<option value="countryAQ">Antarctica</option>
						<option value="countryAG">Antigua and Barbuda</option>
						<option value="countryAR">Argentina</option>
						<option value="countryAM">Armenia</option>
						<option value="countryAW">Aruba</option>
						<option value="countryAU">Australia</option>
						<option value="countryAT">Austria</option>
						<option value="countryAZ">Azerbaijan</option>
						<option value="countryBS">Bahamas</option>
						<option value="countryBH">Bahrain</option>
						<option value="countryBD">Bangladesh</option>
						<option value="countryBB">Barbados</option>
						<option value="countryBY">Belarus</option>
						<option value="countryBE">Belgium</option>
						<option value="countryBZ">Belize</option>
						<option value="countryBJ">Benin</option>
						<option value="countryBM">Bermuda</option>
						<option value="countryBT">Bhutan</option>
						<option value="countryBO">Bolivia</option>
						<option value="countryBQ">Bonaire, Sint Eustatius and Saba</option>
						<option value="countryBA">Bosnia and Herzegovina</option>
						<option value="countryBW">Botswana</option>
						<option value="countryBV">Bouvet Island</option>
						<option value="countryBR">Brazil</option>
						<option value="countryIO">British Indian Ocean Territory</option>
						<option value="countryBN">Brunei Darussalam</option>
						<option value="countryBG">Bulgaria</option>
						<option value="countryBF">Burkina Faso</option>
						<option value="countryBI">Burundi</option>
						<option value="countryKH">Cambodia</option>
						<option value="countryCM">Cameroon</option>
						<option value="countryCA">Canada</option>
						<option value="countryCV">Cape Verde</option>
						<option value="countryKY">Cayman Islands</option>
						<option value="countryCF">Central African Republic</option>
						<option value="countryTD">Chad</option>
						<option value="countryCL">Chile</option>
						<option value="countryCN">China</option>
						<option value="countryCX">Christmas Island</option>
						<option value="countryCC">Cocos (Keeling) Islands</option>
						<option value="countryCO">Colombia</option>
						<option value="countryKM">Comoros</option>
						<option value="countryCG">Congo</option>
						<option value="countryCD">Congo, Democratic Republic of the</option>
						<option value="countryCK">Cook Islands</option>
						<option value="countryCR">Costa Rica</option>
						<option value="countryCI">Côte d'Ivoire</option>
						<option value="countryHR">Croatia</option>
						<option value="countryCU">Cuba</option>
						<option value="countryCW">Curaçao</option>
						<option value="countryCY">Cyprus</option>
						<option value="countryCZ">Czech Republic</option>
						<option value="countryDK">Denmark</option>
						<option value="countryDJ">Djibouti</option>
						<option value="countryDM">Dominica</option>
						<option value="countryDO">Dominican Republic</option>
						<option value="countryEC">Ecuador</option>
						<option value="countryEG">Egypt</option>
						<option value="countrySV">El Salvador</option>
						<option value="countryGQ">Equatorial Guinea</option>
						<option value="countryER">Eritrea</option>
						<option value="countryEE">Estonia</option>
						<option value="countryET">Ethiopia</option>
						<option value="countryFK">Falkland Islands (Malvinas)</option>
						<option value="countryFO">Faroe Islands</option>
						<option value="countryFJ">Fiji</option>
						<option value="countryFI">Finland</option>
						<option value="countryFR">France</option>
						<option value="countryGF">French Guiana</option>
						<option value="countryPF">French Polynesia</option>
						<option value="countryTF">French Southern Territories</option>
						<option value="countryGA">Gabon</option>
						<option value="countryGM">Gambia</option>
						<option value="countryGE">Georgia</option>
						<option value="countryDE">Germany</option>
						<option value="countryGH">Ghana</option>
						<option value="countryGI">Gibraltar</option>
						<option value="countryGR">Greece</option>
						<option value="countryGL">Greenland</option>
						<option value="countryGD">Grenada</option>
						<option value="countryGP">Guadeloupe</option>
						<option value="countryGU">Guam</option>
						<option value="countryGT">Guatemala</option>
						<option value="countryGG">Guernsey</option>
						<option value="countryGN">Guinea</option>
						<option value="countryGW">Guinea-Bissau</option>
						<option value="countryGY">Guyana</option>
						<option value="countryHT">Haiti</option>
						<option value="countryHM">Heard Island and McDonald Islands</option>
						<option value="countryVA">Holy See (Vatican City State)</option>
						<option value="countryHN">Honduras</option>
						<option value="countryHK">Hong Kong</option>
						<option value="countryHU">Hungary</option>
						<option value="countryIS">Iceland</option>
						<option value="countryIN">India</option>
						<option value="countryID">Indonesia</option>
						<option value="countryIR">Iran, Islamic Republic of</option>
						<option value="countryIQ">Iraq</option>
						<option value="countryIE">Ireland</option>
						<option value="countryIM">Isle of Man</option>
						<option value="countryIL">Israel</option>
						<option value="countryIT">Italy</option>
						<option value="countryJM">Jamaica</option>
						<option value="countryJP">Japan</option>
						<option value="countryJE">Jersey</option>
						<option value="countryJO">Jordan</option>
						<option value="countryKZ">Kazakhstan</option>
						<option value="countryKE">Kenya</option>
						<option value="countryKI">Kiribati</option>
						<option value="countryKP">Korea, Democratic People's Republic of</option>
						<option value="countryKR">Korea, Republic of</option>
						<option value="countryKW">Kuwait</option>
						<option value="countryKG">Kyrgyzstan</option>
						<option value="countryLA">Lao People's Democratic Republic</option>
						<option value="countryLV">Latvia</option>
						<option value="countryLB">Lebanon</option>
						<option value="countryLS">Lesotho</option>
						<option value="countryLR">Liberia</option>
						<option value="countryLY">Libya</option>
						<option value="countryLI">Liechtenstein</option>
						<option value="countryLT">Lithuania</option>
						<option value="countryLU">Luxembourg</option>
						<option value="countryMO">Macao</option>
						<option value="countryMK">Macedonia, the former Yugoslav Republic of</option>
						<option value="countryMG">Madagascar</option>
						<option value="countryMW">Malawi</option>
						<option value="countryMY">Malaysia</option>
						<option value="countryMV">Maldives</option>
						<option value="countryML">Mali</option>
						<option value="countryMT">Malta</option>
						<option value="countryMH">Marshall Islands</option>
						<option value="countryMQ">Martinique</option>
						<option value="countryMR">Mauritania</option>
						<option value="countryMU">Mauritius</option>
						<option value="countryYT">Mayotte</option>
						<option value="countryMX">Mexico</option>
						<option value="countryFM">Micronesia, Federated States of</option>
						<option value="countryMD">Moldova, Republic of</option>
						<option value="countryMC">Monaco</option>
						<option value="countryMN">Mongolia</option>
						<option value="countryME">Montenegro</option>
						<option value="countryMS">Montserrat</option>
						<option value="countryMA">Morocco</option>
						<option value="countryMZ">Mozambique</option>
						<option value="countryMM">Myanmar</option>
						<option value="countryNA">Namibia</option>
						<option value="countryNR">Nauru</option>
						<option value="countryNP">Nepal</option>
						<option value="countryNL">Netherlands</option>
						<option value="countryNC">New Caledonia</option>
						<option value="countryNZ">New Zealand</option>
						<option value="countryNI">Nicaragua</option>
						<option value="countryNE">Niger</option>
						<option value="countryNG">Nigeria</option>
						<option value="countryNU">Niue</option>
						<option value="countryNF">Norfolk Island</option>
						<option value="countryMP">Northern Mariana Islands</option>
						<option value="countryNO">Norway</option>
						<option value="countryOM">Oman</option>
						<option value="countryPK">Pakistan</option>
						<option value="countryPW">Palau</option>
						<option value="countryPS">Palestine, State of</option>
						<option value="countryPA">Panama</option>
						<option value="countryPG">Papua New Guinea</option>
						<option value="countryPY">Paraguay</option>
						<option value="countryPE">Peru</option>
						<option value="countryPH">Philippines</option>
						<option value="countryPN">Pitcairn</option>
						<option value="countryPL">Poland</option>
						<option value="countryPT">Portugal</option>
						<option value="countryPR">Puerto Rico</option>
						<option value="countryQA">Qatar</option>
						<option value="countryRE">Réunion</option>
						<option value="countryRO">Romania</option>
						<option value="countryRU">Russian Federation</option>
						<option value="countryRW">Rwanda</option>
						<option value="countryBL">Saint Barthélemy</option>
						<option value="countrySH">Saint Helena, Ascension and Tristan da Cunha</option>
						<option value="countryKN">Saint Kitts and Nevis</option>
						<option value="countryLC">Saint Lucia</option>
						<option value="countryMF">Saint Martin (French part)</option>
						<option value="countryPM">Saint Pierre and Miquelon</option>
						<option value="countryVC">Saint Vincent and the Grenadines</option>
						<option value="countryWS">Samoa</option>
						<option value="countrySM">San Marino</option>
						<option value="countryST">Sao Tome and Principe</option>
						<option value="countrySA">Saudi Arabia</option>
						<option value="countrySN">Senegal</option>
						<option value="countryRS">Serbia</option>
						<option value="countrySC">Seychelles</option>
						<option value="countrySL">Sierra Leone</option>
						<option value="countrySG">Singapore</option>
						<option value="countrySX">Sint Maarten (Dutch part)</option>
						<option value="countrySK">Slovakia</option>
						<option value="countrySI">Slovenia</option>
						<option value="countrySB">Solomon Islands</option>
						<option value="countrySO">Somalia</option>
						<option value="countryZA">South Africa</option>
						<option value="countryGS">South Georgia and the South Sandwich Islands</option>
						<option value="countrySS">South Sudan</option>
						<option value="countryES">Spain</option>
						<option value="countryLK">Sri Lanka</option>
						<option value="countrySD">Sudan</option>
						<option value="countrySR">Suriname</option>
						<option value="countrySJ">Svalbard and Jan Mayen</option>
						<option value="countrySZ">Swaziland</option>
						<option value="countrySE">Sweden</option>
						<option value="countryCH">Switzerland</option>
						<option value="countrySY">Syrian Arab Republic</option>
						<option value="countryTW">Taiwan, Province of China</option>
						<option value="countryTJ">Tajikistan</option>
						<option value="countryTZ">Tanzania, United Republic of</option>
						<option value="countryTH">Thailand</option>
						<option value="countryTL">Timor-Leste</option>
						<option value="countryTG">Togo</option>
						<option value="countryTK">Tokelau</option>
						<option value="countryTO">Tonga</option>
						<option value="countryTT">Trinidad and Tobago</option>
						<option value="countryTN">Tunisia</option>
						<option value="countryTR">Turkey</option>
						<option value="countryTM">Turkmenistan</option>
						<option value="countryTC">Turks and Caicos Islands</option>
						<option value="countryTV">Tuvalu</option>
						<option value="countryUG">Uganda</option>
						<option value="countryUA">Ukraine</option>
						<option value="countryAE">United Arab Emirates</option>
						<option value="countryGB">United Kingdom</option>
						<option value="countryUS">United States</option>
						<option value="countryUY">Uruguay</option>
						<option value="countryUZ">Uzbekistan</option>
						<option value="countryVU">Vanuatu</option>
						<option value="countryVE">Venezuela</option>
						<option value="countryVN">Viet Nam</option>
						<option value="countryVG">Virgin Islands, British</option>
						<option value="countryVI">Virgin Islands, U.S.</option>
						<option value="countryWF">Wallis and Futuna</option>
						<option value="countryEH">Western Sahara</option>
						<option value="countryYE">Yemen</option>
						<option value="countryZM">Zambia</option>
						<option value="countryZW">Zimbabwe</option>
                </select>
            </div>
            <div class="form-group">
                <label for="as_qdr">Last update:</label>
                <select id="as_qdr" name="as_qdr">
                    <option value="">Any time</option>
                    <option value="d">Past 24 hours</option>
                    <option value="w">Past week</option>
                    <option value="m">Past month</option>
                    <option value="y">Past year</option>
                </select>
            </div>
            <div class="form-actions">
                <input type="submit" value="Search">
                <input type="reset" value="Clear Form">
            </div>
        </form>
    </div>
    
            <!-- Google Advanced Image Search Form -->
            <div class="form-container">
                <div class="form-title">
                    <h2>Advanced Google Image Search</h2>
                    <div class="icon-link">
                        <a href="https://www.google.com/imghp?hl=en" target="_blank">
                            <img src="images/icon-images.png" alt="Google Images">
                        </a>
                    </div>
                </div>
                <form action="https://www.google.com/search" method="get">
                    <input type="hidden" name="tbm" value="isch">
                    <div class="form-group">
                        <label for="as_q_img">All these words:</label>
                        <input type="text" id="as_q_img" name="as_q" aria-label="All these words">
                    </div>
                    <div class="form-group">
                        <label for="as_epq_img">This exact word or phrase:</label>
                        <input type="text" id="as_epq_img" name="as_epq" aria-label="This exact word or phrase">
                    </div>
                    <div class="form-group">
                        <label for="as_oq_img">Any of these words:</label>
                        <input type="text" id="as_oq_img" name="as_oq" aria-label="Any of these words">
                    </div>
                    <div class="form-group">
                        <label for="as_eq_img">None of these words:</label>
                        <input type="text" id="as_eq_img" name="as_eq" aria-label="None of these words">
                    </div>
                    <div class="form-group">
                        <label for="imgsz">Image size:</label>
                        <select id="imgsz" name="imgsz">
                            <option value="">Any size</option>
                            <option value="icon">Icon</option>
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                            <option value="xlarge">Extra large</option>
                            <option value="xxlarge">XX large</option>
                            <option value="huge">Huge</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="imgtype">Image type:</label>
                        <select id="imgtype" name="imgtype">
                            <option value="">Any type</option>
                            <option value="clipart">Clip art</option>
                            <option value="lineart">Line drawing</option>
                            <option value="photo">Photo</option>
                            <option value="animated">Animated</option>
                            <option value="face">Face</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="imgc">Color:</label>
                        <select id="imgc" name="imgc">
                            <option value="">Any color</option>
                            <option value="color">Full color</option>
                            <option value="gray">Black and white</option>
                            <option value="trans">Transparent</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="imgar">Aspect ratio:</label>
                        <select id="imgar" name="imgar">
                            <option value="">Any aspect ratio</option>
                            <option value="t">Tall</option>
                            <option value="s">Square</option>
                            <option value="w">Wide</option>
                            <option value="xw">Extra wide</option>
                        </select>
                    </div>
                    <div class="form-actions">
                        <input type="submit" value="Search">
                        <input type="reset" value="Clear Form">
                    </div>
                </form>
            </div>
            
            <!-- Google Advanced News Search Form -->
            <div class="form-container">
                <div class="form-title">
                    <h2>Advanced Google News Search</h2>
                    <div class="icon-link">
                        <a href="https://news.google.com" target="_blank">
                            <img src="images/icon-news.png" alt="Google News">
                        </a>
                    </div>
                </div>
                <form action="https://www.google.com/search" method="get">
                    <input type="hidden" name="tbm" value="nws">
                    <div class="form-group">
                        <label for="as_q_nws">All these words:</label>
                        <input type="text" id="as_q_nws" name="as_q" aria-label="All these words">
                    </div>
                    <div class="form-group">
                        <label for="as_epq_nws">This exact word or phrase:</label>
                        <input type="text" id="as_epq_nws" name="as_epq" aria-label="This exact word or phrase">
                    </div>
                    <div class="form-group">
                        <label for="as_oq_nws">Any of these words:</label>
                        <input type="text" id="as_oq_nws" name="as_oq" aria-label="Any of these words">
                    </div>
                    <div class="form-group">
                        <label for="as_eq_nws">None of these words:</label>
                        <input type="text" id="as_eq_nws" name="as_eq" aria-label="None of these words">
                    </div>
                    <div class="form-group">
                        <label for="as_nlo_nws">Numbers ranging from:</label>
                        <div class="number-inputs">
                            <input type="number" id="as_nlo_nws" name="as_nlo" aria-label="Numbers ranging from">
                            <span>to</span>
                            <input type="number" id="as_nhi_nws" name="as_nhi" aria-label="to">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lr_nws">Language:</label>
                        <select id="lr_nws" name="lr">
                            <option value="">Any Language</option>
                            <option value="">Any Language</option>
<option value="lang_af">Afrikaans</option>
<option value="lang_sq">Albanian</option>
<option value="lang_am">Amharic</option>
<option value="lang_ar">Arabic</option>
<option value="lang_hy">Armenian</option>
<option value="lang_az">Azerbaijani</option>
<option value="lang_eu">Basque</option>
<option value="lang_be">Belarusian</option>
<option value="lang_bn">Bengali</option>
<option value="lang_bs">Bosnian</option>
<option value="lang_bg">Bulgarian</option>
<option value="lang_ca">Catalan</option>
<option value="lang_ceb">Cebuano</option>
<option value="lang_zh-CN">Chinese (Simplified)</option>
<option value="lang_zh-TW">Chinese (Traditional)</option>
<option value="lang_co">Corsican</option>
<option value="lang_hr">Croatian</option>
<option value="lang_cs">Czech</option>
<option value="lang_da">Danish</option>
<option value="lang_nl">Dutch</option>
<option value="lang_en">English</option>
<option value="lang_eo">Esperanto</option>
<option value="lang_et">Estonian</option>
<option value="lang_fi">Finnish</option>
<option value="lang_fr">French</option>
<option value="lang_fy">Frisian</option>
<option value="lang_gl">Galician</option>
<option value="lang_ka">Georgian</option>
<option value="lang_de">German</option>
<option value="lang_el">Greek</option>
<option value="lang_gu">Gujarati</option>
<option value="lang_ht">Haitian Creole</option>
<option value="lang_ha">Hausa</option>
<option value="lang_haw">Hawaiian</option>
<option value="lang_he">Hebrew</option>
<option value="lang_hi">Hindi</option>
<option value="lang_hmn">Hmong</option>
<option value="lang_hu">Hungarian</option>
<option value="lang_is">Icelandic</option>
<option value="lang_ig">Igbo</option>
<option value="lang_id">Indonesian</option>
<option value="lang_ga">Irish</option>
<option value="lang_it">Italian</option>
<option value="lang_ja">Japanese</option>
<option value="lang_jv">Javanese</option>
<option value="lang_kn">Kannada</option>
<option value="lang_kk">Kazakh</option>
<option value="lang_km">Khmer</option>
<option value="lang_rw">Kinyarwanda</option>
<option value="lang_ko">Korean</option>
<option value="lang_ku">Kurdish</option>
<option value="lang_ky">Kyrgyz</option>
<option value="lang_lo">Lao</option>
<option value="lang_la">Latin</option>
<option value="lang_lv">Latvian</option>
<option value="lang_lt">Lithuanian</option>
<option value="lang_lb">Luxembourgish</option>
<option value="lang_mk">Macedonian</option>
<option value="lang_mg">Malagasy</option>
<option value="lang_ms">Malay</option>
<option value="lang_ml">Malayalam</option>
<option value="lang_mt">Maltese</option>
<option value="lang_mi">Maori</option>
<option value="lang_mr">Marathi</option>
<option value="lang_mn">Mongolian</option>
<option value="lang_my">Myanmar (Burmese)</option>
<option value="lang_ne">Nepali</option>
<option value="lang_no">Norwegian</option>
<option value="lang_ny">Nyanja (Chichewa)</option>
<option value="lang_or">Odia (Oriya)</option>
<option value="lang_ps">Pashto</option>
<option value="lang_fa">Persian</option>
<option value="lang_pl">Polish</option>
<option value="lang_pt">Portuguese</option>
<option value="lang_pa">Punjabi</option>
<option value="lang_ro">Romanian</option>
<option value="lang_ru">Russian</option>
<option value="lang_sm">Samoan</option>
<option value="lang_gd">Scots Gaelic</option>
<option value="lang_sr">Serbian</option>
<option value="lang_st">Sesotho</option>
<option value="lang_sn">Shona</option>
<option value="lang_sd">Sindhi</option>
<option value="lang_si">Sinhala (Sinhalese)</option>
<option value="lang_sk">Slovak</option>
<option value="lang_sl">Slovenian</option>
<option value="lang_so">Somali</option>
<option value="lang_es">Spanish</option>
<option value="lang_su">Sundanese</option>
<option value="lang_sw">Swahili</option>
<option value="lang_sv">Swedish</option>
<option value="lang_tl">Tagalog (Filipino)</option>
<option value="lang_tg">Tajik</option>
<option value="lang_ta">Tamil</option>
<option value="lang_tt">Tatar</option>
<option value="lang_te">Telugu</option>
<option value="lang_th">Thai</option>
<option value="lang_tr">Turkish</option>
<option value="lang_tk">Turkmen</option>
<option value="lang_uk">Ukrainian</option>
<option value="lang_ur">Urdu</option>
<option value="lang_ug">Uyghur</option>
<option value="lang_uz">Uzbek</option>
<option value="lang_vi">Vietnamese</option>
<option value="lang_cy">Welsh</option>
<option value="lang_xh">Xhosa</option>
<option value="lang_yi">Yiddish</option>
<option value="lang_yo">Yoruba</option>
<option value="lang_zu">Zulu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="as_qdr_nws">Last update:</label>
                        <select id="as_qdr_nws" name="as_qdr">
                            <option value="">Any time</option>
                            <option value="d">Past 24 hours</option>
                            <option value="w">Past week</option>
                            <option value="m">Past month</option>
                            <option value="y">Past year</option>
                        </select>
                    </div>
                    <div class="form-actions">
                        <input type="submit" value="Search">
                        <input type="reset" value="Clear Form">
                    </div>
                </form>
            </div>
            
            <!-- Advanced YouTube Search Form -->
            <div class="form-container">
                <div class="form-title">
                    <h2>Advanced YouTube Search</h2>
                    <div class="icon-link">
                        <a href="https://www.youtube.com" target="_blank">
                            <img src="images/icon-youtube.png" alt="YouTube">
                        </a>
                    </div>
                </div>
                <form action="https://www.youtube.com/results" method="get">
                    <div class="form-group">
                        <label for="search_query">Search for:</label>
                        <input type="text" id="search_query" name="search_query" aria-label="Search for">
                    </div>
                    <div class="form-group">
                        <label for="as_epq_yt">This exact word or phrase:</label>
                        <input type="text" id="as_epq_yt" name="as_epq" aria-label="This exact word or phrase">
                    </div>
                    <div class="form-group">
                        <label for="as_eq_yt">None of these words:</label>
                        <input type="text" id="as_eq_yt" name="as_eq" aria-label="None of these words">
                    </div>
                    <div class="form-group">
                        <label for="sp">Sort by:</label>
                        <select id="sp" name="sp">
                            <option value="">Relevance</option>
                            <option value="CAISBAgBEAE%3D">Upload Date</option>
                            <option value="CAISBBgAEAEB">View Count</option>
                            <option value="CAISBAgCEAE%3D">Rating</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="filters">Filters:</label>
                        <select id="filters" name="filters">
                            <option value="">Any</option>
                            <option value="EgIQAQ%3D%3D">Short (< 4 minutes)</option>
                            <option value="EgQQAQ%3D%3D">Long (> 20 minutes)</option>
                            <option value="EgIIAQ%3D%3D">Live</option>
                            <option value="EgQIBRgB">4K</option>
                            <option value="EgQIBCgB">HD</option>
                            <option value="EgQIAxAB">Subtitles/CC</option>
                            <option value="EgYIBBYA">Creative Commons</option>
                            <option value="EgQIAhAB">360°</option>
                            <option value="EgYYAQ%3D%3D">VR180</option>
                            <option value="EgYIAxAB">3D</option>
                            <option value="EgQIBxAB">HDR</option>
                            <option value="EgsIAlNLb3AB">Location</option>
                            <option value="EgsIAXwBAkA%3D">Purchased</option>
                        </select>
                    </div>
                    <div class="form-actions">
                        <input type="submit" value="Search">
                        <input type="reset" value="Clear Form">
                    </div>
                </form>
            </div>
        </div>
</div>
