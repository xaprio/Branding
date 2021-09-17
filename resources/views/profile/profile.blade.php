@include('layouts.sidebar');

@include('layouts.header');
<div class="content-page">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<nav aria-label="breadcrumb">
<ol class="breadcrumb mb-0 pl-0 pt-0">
<li class="breadcrumb-item"><a href="#"><i class="ri-home-4-line mr-1 float-left"></i>Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Account Setting</li>
</ol>
</nav>
</div>
</div>
<div class="row">
<div class="col-md-4">
<div class="card card-block p-card">
<div class="profile-box">
<div class="profile-card rounded">
<img src="{{asset('public/assets/images/user/1.jpg')}}" alt="profile-bg" class="avatar-100 rounded d-block mx-auto img-fluid mb-3">
<h3 class="font-600 text-white text-center mb-0">John Doe</h3>
<p class="text-white text-center mb-5">Web Developer</p>
</div>
<div class="pro-content rounded">
<div class="d-flex align-items-center mb-3">
<div class="p-icon mr-3">
<svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76"></path>
</svg>
</div>
<p class="mb-0 eml"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="315b5e595f555e5408090871565c50585d1f525e5c">[email&#160;protected]</a></p>
</div>
<div class="d-flex align-items-center mb-3">
<div class="p-icon mr-3">
<svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z"></path>
</svg>
</div>
<p class="mb-0">(123) 123 1234</p>
</div>
<div class="d-flex align-items-center mb-3">
<div class="p-icon mr-3">
<svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
</svg>
</div>
<p class="mb-0">USA</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-8">
<div class="d-flex flex-wrap align-items-center width-100 justify-content-between my-schedule mb-2">
<div class="d-flex align-items-center justify-content-between">
<h4 class="font-weight-bold">
<svg xmlns="http://www.w3.org/2000/svg" width="20" class="mr-1" viewBox="0 0 20 20" fill="currentColor">
<path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
<path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
</svg>
Account Setting
</h4>
</div>
<div class="create-workform">
<button type="submit" class="btn btn-primary mr-2">Submit</button>
<button type="submit" class="btn btn-danger mr-2">Cancel</button>
</div>
</div>
<form class="needs-validation" novalidate>
<div class="card">
<div class="card-header d-flex justify-content-between">
<div class="header-title">
<h4 class="card-title">
Edit your Profile
</h4>
</div>
</div>
<form class="needs-validation" novalidate>
<div class="card-body">
<div class="form-group row">
<label class="control-label col-sm-3 align-self-center text-lg-right text-left">Company Name:</label>
<div class="col-sm-9">
<div class="form-group mb-0">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">
<svg xmlns="http://www.w3.org/2000/svg" width="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
</svg>
</span>
</div>
<input class="form-control required" type="text" value="XYZ Company" required>
</div>
</div>
</div>
</div>
<div class="form-group row">
<label class="control-label col-sm-3 align-self-center text-lg-right text-left">Name:</label>
<div class="col-sm-9">
<div class="form-group mb-0">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">
<svg xmlns="http://www.w3.org/2000/svg" width="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
</svg>
</span>
</div>
<input class="form-control required" type="text" required value="John Doe">
 </div>
</div>
</div>
</div>
<div class="form-group row">
<label class="control-label col-sm-3 align-self-center text-lg-right text-left">Email:</label>
<div class="col-sm-9">
<div class="form-group mb-0">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">
<svg xmlns="http://www.w3.org/2000/svg" width="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
</svg>
</span>
</div>
<input class="form-control required" type="text" required value="johndoe989@gmail.com">
</div>
</div>
</div>
</div>
<div class="form-group row">
<label class="control-label col-sm-3 align-self-center text-lg-right text-left">Mobile:</label>
<div class="col-sm-9">
<div class="form-group mb-0">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">
<svg xmlns="http://www.w3.org/2000/svg" width="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
</svg>
</span>
</div>
<input class="form-control" type="text" value="(123) 123 1234">
</div>
</div>
</div>
</div>
<div class="form-group row">
<label class="control-label col-sm-3 align-self-center text-lg-right text-left">Skype:</label>
<div class="col-sm-9">
<div class="form-group mb-0">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">
<svg xmlns="http://www.w3.org/2000/svg" width="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
</svg>
</span>
</div>
<input class="form-control" type="text">
</div>
</div>
</div>
</div>
<div class="form-group row">
<label class="control-label col-sm-3 align-self-center text-lg-right text-left">Address Line 1:</label>
<div class="col-sm-9">
<div class="form-group mb-0">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">
<svg xmlns="http://www.w3.org/2000/svg" width="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
</svg>
</span>
</div>
<input class="form-control required" type="text" required>
</div>
</div>
</div>
</div>
<div class="form-group row">
<label class="control-label col-sm-3 align-self-center text-lg-right text-left">Address Line 2:</label>
<div class="col-sm-9">
<div class="form-group mb-0">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">
<svg xmlns="http://www.w3.org/2000/svg" width="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
</svg>
</span>
</div>
<input class="form-control" type="text">
</div>
</div>
</div>
</div>
<div class="form-group row">
<label class="control-label col-sm-3 align-self-center text-lg-right text-left">City:</label>
<div class="col-sm-9">
<div class="form-group mb-0">
<div class="input-group">
<input class="form-control required" type="text" required>
</div>
</div>
</div>
</div>
<div class="form-group row">
<label class="control-label col-sm-3 align-self-center text-lg-right text-left">Region/State:</label>
<div class="col-sm-9">
<div class="form-group mb-0">
<input class="form-control required" type="text" required>
</div>
</div>
</div>
<div class="form-group row">
<label class="control-label col-sm-3 align-self-center text-lg-right text-left">Country:</label>
<div class="col-sm-9">
<select class="required choicesjs" required>
<option value="AF">Afghanistan(AF)</option>
<option value="AX">Aland Islands(AX)</option>
<option value="AL">Albania(AL)</option>
<option value="DZ">Algeria(DZ)</option>
<option value="AS">American Samoa(AS)</option>
<option value="AD">Andorra(AD)</option>
<option value="AO">Angola(AO)</option>
<option value="AI">Anguilla(AI)</option>
<option value="AQ">Antarctica(AQ)</option>
<option value="AG">Antigua and Barbuda(AG)</option>
<option value="AR">Argentina(AR)</option>
<option value="AM">Armenia(AM)</option>
<option value="AW">Aruba(AW)</option>
<option value="AP">Asia (Unknown Country)(AP)</option>
<option value="AU">Australia(AU)</option>
<option value="AZ">Azerbaijan(AZ)</option>
<option value="BS">Bahamas(BS)</option>
<option value="BH">Bahrain(BH)</option>
<option value="BD">Bangladesh(BD)</option>
<option value="BB">Barbados(BB)</option>
<option value="BY">Belarus(BY)</option>
<option value="BZ">Belize(BZ)</option>
<option value="BJ">Benin(BJ)</option>
<option value="BM">Bermuda(BM)</option>
<option value="BT">Bhutan(BT)</option>
<option value="BO">Bolivia(BO)</option>
<option value="BQ">Bonaire/Sint Eustatius/Saba(BQ)</option>
<option value="BA">Bosnia and Herzegovina(BA)</option>
<option value="BW">Botswana(BW)</option>
<option value="BV">Bouvet Island(BV)</option>
<option value="BR">Brazil(BR)</option>
<option value="IO">British Indian Ocean Territory(IO)</option>
<option value="VG">British Virgin Islands(VG)</option>
<option value="BN">Brunei Darussalam(BN)</option>
<option value="BF">Burkina Faso(BF)</option>
<option value="BI">Burundi(BI)</option>
<option value="KH">Cambodia(KH)</option>
<option value="CM">Cameroon(CM)</option>
<option value="CA">Canada(CA)</option>
<option value="CV">Cape Verde(CV)</option>
<option value="KY">Cayman Islands(KY)</option>
<option value="CF">Central African Republic(CF)</option>
<option value="TD">Chad(TD)</option>
<option value="CL">Chile(CL)</option>
<option value="CN">China(CN)</option>
<option value="CX">Christmas Island(CX)</option>
<option value="CC">Cocos (Keeling) Islands(CC)</option>
<option value="CO">Colombia(CO)</option>
<option value="KM">Comoros(KM)</option>
<option value="CG">Congo(CG)</option>
<option value="CK">Cook Islands(CK)</option>
<option value="CR">Costa Rica(CR)</option>
<option value="CI">Cote D Ivoire(CI)</option>
<option value="CU">Cuba(CU)</option>
<option value="CW">Curacao(CW)</option>
<option value="CD">Democratic Republic of the Congo(CD)</option>
<option value="DJ">Djibouti(DJ)</option>
<option value="DM">Dominica(DM)</option>
<option value="DO">Dominican Republic(DO)</option>
<option value="EC">Ecuador(EC)</option>
<option value="EG">Egypt(EG)</option>
<option value="SV">El Salvador(SV)</option>
<option value="GQ">Equatorial Guinea(GQ)</option>
<option value="ER">Eritrea(ER)</option>
<option value="ET">Ethiopia(ET)</option>
<option value="EU">Europe (Unknown Country)(EU)</option>
<option value="FK">Falkland Islands (Malvinas)(FK)</option>
<option value="FO">Faroe Islands(FO)</option>
<option value="FM">Federated States of Micronesia(FM)</option>
<option value="FJ">Fiji(FJ)</option>
<option value="GF">French Guiana(GF)</option>
<option value="PF">French Polynesia(PF)</option>
<option value="TF">French Southern Territories(TF)</option>
<option value="GA">Gabon(GA)</option>
<option value="GM">Gambia(GM)</option>
<option value="GE">Georgia(GE)</option>
<option value="GH">Ghana(GH)</option>
<option value="GI">Gibraltar(GI)</option>
<option value="GL">Greenland(GL)</option>
<option value="GD">Grenada(GD)</option>
<option value="GP">Guadeloupe(GP)</option>
<option value="GU">Guam(GU)</option>
<option value="GT">Guatemala(GT)</option>
<option value="GG">Guernsey(GG)</option>
<option value="GN">Guinea(GN)</option>
<option value="GW">Guinea-Bissau(GW)</option>
<option value="GY">Guyana(GY)</option>
<option value="HT">Haiti(HT)</option>
<option value="HM">Heard and Mc Donald Islands(HM)</option>
<option value="VA">Holy See (Vatican City State)(VA)</option>
<option value="HN">Honduras(HN)</option>
<option value="HK">Hong Kong(HK)</option>
<option value="IS">Iceland(IS)</option>
<option value="IN" selected="selected" data-select2-id="3">India(IN)</option>
<option value="ID">Indonesia(ID)</option>
<option value="IR">Iran (Islamic Republic Of)(IR)</option>
<option value="IQ">Iraq(IQ)</option>
<option value="IM">Isle of Man(IM)</option>
<option value="IL">Israel(IL)</option>
<option value="JM">Jamaica(JM)</option>
<option value="JP">Japan(JP)</option>
<option value="JE">Jersey(JE)</option>
<option value="JO">Jordan(JO)</option>
<option value="KZ">Kazakhstan(KZ)</option>
<option value="KE">Kenya(KE)</option>
<option value="KI">Kiribati(KI)</option>
<option value="KW">Kuwait(KW)</option>
<option value="KG">Kyrgyzstan(KG)</option>
<option value="LA">Lao Peoples Democratic Republic(LA)</option>
<option value="LB">Lebanon(LB)</option>
<option value="LS">Lesotho(LS)</option>
<option value="LR">Liberia(LR)</option>
<option value="LY">Libyan Arab Jamahiriya(LY)</option>
<option value="LI">Liechtenstein(LI)</option>
<option value="MO">Macau(MO)</option>
<option value="MK">Macedonia(MK)</option>
<option value="MG">Madagascar(MG)</option>
<option value="MW">Malawi(MW)</option>
<option value="MY">Malaysia(MY)</option>
<option value="MV">Maldives(MV)</option>
<option value="ML">Mali(ML)</option>
<option value="MH">Marshall Islands(MH)</option>
<option value="MQ">Martinique(MQ)</option>
<option value="MR">Mauritania(MR)</option>
<option value="MU">Mauritius(MU)</option>
<option value="YT">Mayotte(YT)</option>
<option value="MX">Mexico(MX)</option>
<option value="MD">Moldova(MD)</option>
<option value="MC">Monaco(MC)</option>
<option value="MN">Mongolia(MN)</option>
<option value="ME">Montenegro(ME)</option>
<option value="MS">Montserrat(MS)</option>
<option value="MA">Morocco(MA)</option>
<option value="MZ">Mozambique(MZ)</option>
<option value="MM">Myanmar(MM)</option>
<option value="NA">Namibia(NA)</option>
<option value="NR">Nauru(NR)</option>
<option value="NP">Nepal(NP)</option>
<option value="AN">Netherlands Antilles(AN)</option>
<option value="NC">New Caledonia(NC)</option>
<option value="NZ">New Zealand(NZ)</option>
<option value="NI">Nicaragua(NI)</option>
<option value="NE">Niger(NE)</option>
<option value="NG">Nigeria(NG)</option>
<option value="NU">Niue(NU)</option>
<option value="NF">Norfolk Island(NF)</option>
<option value="KP">North Korea(KP)</option>
<option value="MP">Northern Mariana Islands(MP)</option>
<option value="NO">Norway(NO)</option>
<option value="OM">Oman(OM)</option>
<option value="PK">Pakistan(PK)</option>
<option value="PW">Palau(PW)</option>
<option value="PS">Palestinian Territories(PS)</option>
<option value="PA">Panama(PA)</option>
<option value="PG">Papua New Guinea(PG)</option>
<option value="PY">Paraguay(PY)</option>
<option value="PE">Peru(PE)</option>
<option value="PH">Philippines(PH)</option>
<option value="PN">Pitcairn(PN)</option>
<option value="PR">Puerto Rico(PR)</option>
<option value="QA">Qatar(QA)</option>
<option value="**">Reserved/Private(**)</option>
<option value="RE">Reunion(RE)</option>
<option value="RU">Russian Federation(RU)</option>
<option value="RW">Rwanda(RW)</option>
<option value="BL">Saint Barthelemy(BL)</option>
<option value="KN">Saint Kitts and Nevis(KN)</option>
<option value="LC">Saint Lucia(LC)</option>
<option value="MF">Saint Martin(MF)</option>
<option value="VC">Saint Vincent and the Grenadines(VC)</option>
<option value="WS">Samoa(WS)</option>
<option value="SM">San Marino(SM)</option>
<option value="ST">Sao Tome and Principe(ST)</option>
<option value="SA">Saudi Arabia(SA)</option>
<option value="SN">Senegal(SN)</option>
<option value="RS">Serbia(RS)</option>
<option value="SC">Seychelles(SC)</option>
<option value="SL">Sierra Leone(SL)</option>
<option value="SG">Singapore(SG)</option>
<option value="SX">Sint Maarten(SX)</option>
<option value="SB">Solomon Islands(SB)</option>
<option value="SO">Somalia(SO)</option>
<option value="ZA">South Africa(ZA)</option>
<option value="GS">South Georgia / South Sandwich Isl(GS)</option>
<option value="KR">South Korea(KR)</option>
<option value="SS">South Sudan(SS)</option>
<option value="LK">Sri Lanka(LK)</option>
<option value="SH">St. Helena(SH)</option>
<option value="PM">St. Pierre and Miquelon(PM)</option>
<option value="SD">Sudan(SD)</option>
<option value="SR">Suriname(SR)</option>
<option value="SJ">Svalbard and Jan Mayen Islands(SJ)</option>
<option value="SZ">Swaziland(SZ)</option>
<option value="CH">Switzerland(CH)</option>
<option value="SY">Syrian Arab Republic(SY)</option>
<option value="TW">Taiwan Province of China(TW)</option>
<option value="TJ">Tajikistan(TJ)</option>
<option value="TZ">Tanzania(TZ)</option>
<option value="TH">Thailand(TH)</option>
<option value="TL">Timor-Leste(TL)</option>
<option value="TG">Togo(TG)</option>
<option value="TK">Tokelau(TK)</option>
<option value="TO">Tonga(TO)</option>
<option value="TT">Trinidad and Tobago(TT)</option>
<option value="TN">Tunisia(TN)</option>
<option value="TR">Turkey(TR)</option>
<option value="TM">Turkmenistan(TM)</option>
<option value="TC">Turks and Caicos Islands(TC)</option>
<option value="TV">Tuvalu(TV)</option>
<option value="UG">Uganda(UG)</option>
<option value="UA">Ukraine(UA)</option>
<option value="AE">United Arab Emirates(AE)</option>
<option value="US">United States(US)</option>
<option value="?">Unknown(?)</option>
<option value="UY">Uruguay(UY)</option>
<option value="UM">Us Minor Outlying Islands(UM)</option>
<option value="VI">Us Virgin Islands(VI)</option>
<option value="UZ">Uzbekistan(UZ)</option>
<option value="VU">Vanuatu(VU)</option>
<option value="VE">Venezuela(VE)</option>
<option value="VN">Viet Nam(VN)</option>
<option value="WF">Wallis and Futuna Islands(WF)</option>
<option value="EH">Western Sahara(EH)</option>
<option value="YE">Yemen(YE)</option>
<option value="ZM">Zambia(ZM)</option>
<option value="ZW">Zimbabwe(ZW)</option>
</select>
</div>
</div>
<div class="form-group row">
<label class="control-label col-sm-3 align-self-center text-lg-right text-left">Zipcode:</label>
<div class="col-sm-9">
<div class="form-group mb-0">
<div class="input-group">
<input class="form-control required" type="text" required>
</div>
</div>
</div>
</div>
</div>
</form>
</div>
</div>

</div>
</div>
</div>
</div>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('public/assets/js/backend-bundle.min.js')}}"></script>

<script src="{{asset('public/assets/js/customizer.js')}}"></script>
<script src="{{asset('public/assets/js/sidebar.js')}}"></script>

<script src="{{asset('public/assets/js/flex-tree.min.js')}}"></script>
<script src="{{asset('public/assets/js/tree.js')}}"></script>

<script src="{{asset('public/assets/js/table-treeview.js')}}"></script>

<script src="{{asset('public/assets/js/sweetalert.js')}}"></script>

<script src="{{asset('public/assets/js/vector-map-custom.js')}}"></script>

<script src="{{asset('public/assets/js/chart-custom.js')}}"></script>
<script src="{{asset('public/assets/js/charts/01.js')}}"></script>
<script src="{{asset('public/assets/js/charts/02.js')}}"></script>

<script src="{{asset('public/assets/js/slider.js')}}"></script>

<script src="{{asset('public/assets/js/app.js')}}"></script>