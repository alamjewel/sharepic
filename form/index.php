<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Atomic Project</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
         <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" media="all" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<style>
		body{
			
		}panel3
		.panel{
                    /*background: gray;*/
                    box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
                }
                #panel3{
                    /*background: gray;*/
                    background: #f39c12;
                    color:white;
                }
                .input-group-addon{
                                background: #008080;
                                border-color:#008080;
                                color:White;
                }
                #addon2{
                                background: #2c3e50;
                                border-color:#2c3e50;
                                color:White;
                }
                #addon3{
                                background: #c0292b;
                                border-color:#c0292b;
                                color:White;
                }
                #addon1{
                                background: #f39c12;
                                border-color:#f39c12;
                                color:White;
                }
		</style>
		<script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
       
    </head>
    <body>
        <div class="container">
                    <div id="loginbox" style="margin-top:20px;" class="mainbox col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-2">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Admission Form <small>* are mandatory</small></h3>
                            </div>
                            <div class="panel-body">
                                <form role="form" action="action.php" method="post" autocomplete="off">
                                    <div class="row">
                                    <div class="mainbox col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-2">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">Personal Information</div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="form-group col-xs-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Full Name</span>
                                                        <input type="text" name="std_fname" class="form-control" id="fname" placeholder="First Name" required >
                                                    </div>
                                                </div>
                                                <div class="form-group col-xs-6">
                                                    <input type="text" name="std_lname" class="form-control" id="lname" placeholder="Last Name" >
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-xs-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Father's Name</span>
                                                        <input type="text" name="father_fname" class="form-control" id="ffname" placeholder="First Name" required >
                                                    </div>
                                                </div>
                                                <div class="form-group col-xs-6">
                                                    <input type="text" name="father_lname" class="form-control" id="lname" placeholder="Last Name" >
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-xs-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Mother's Name</span>
                                                        <input type="text" name="mother_fname" class="form-control" id="mfname" size="10" placeholder="First Name" required >
                                                    </div>
                                                </div>
                                                <div class="form-group col-xs-6">
                                                    <input type="text" name="mother_lname" class="form-control" id="mlname" size="12" placeholder="Last Name" >
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-xs-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                                        <input type="date" name="dob" class="form-control" id="dob" >
                                                    </div>
                                                </div>
                                                <div class="form-group col-xs-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Religion</span>
                                                        <select class="form-control" name="religion">
                                                            <option value="ISLAM">ISLAM</option>
                                                            <option value="HINDU">HINDU</option>
                                                            <option value="BHUDDO">BHUDDO</option>
                                                            <option value="CHRISTIAN">CHRISTIAN</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-xs-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Age</span>
                                                        <input type="text" name="age" class="form-control" id="mlname" placeholder="18" >
                                                    </div>
                                                </div>
                                                <div class="form-group col-xs-6">
                                                    Gender : <label class="radio-inline"><input type="radio" name="gender"value="Male">Male</label>
                                                    <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-xs-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Blood Group</span>
                                                        <select class="form-control" name="blood">
                                                            <option value="A+">A+</option>
                                                            <option value="A-">A-</option>
                                                            <option value="B+">B+</option>
                                                            <option value="B-">B-</option>
                                                            <option value="O+">O+</option>
                                                            <option value="O-">O-</option>
                                                            <option value="AB+">AB+</option>
                                                            <option value="AB-">AB-</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-xs-6">
                                                    <div class="input-group">
                                                             <span class="input-group-addon">Country</span>
                                                             <select id="country" name="country" class="form-control">
                                                                <option value="" selected="selected">Select a country</option>
                                                                <option value="AF">Afghanistan</option>
                                                                <option value="AL">Albania</option>
                                                                <option value="DZ">Algeria</option>
                                                                <option value="AS">American Samoa</option>
                                                                <option value="AD">Andorra</option>
                                                                <option value="AO">Angola</option>
                                                                <option value="AI">Anguilla</option>
                                                                <option value="AQ">Antarctica</option>
                                                                <option value="AG">Antigua and Barbuda</option>
                                                                <option value="AR">Argentina</option>
                                                                <option value="AM">Armenia</option>
                                                                <option value="AW">Aruba</option>
                                                                <option value="AU">Australia</option>
                                                                <option value="AT">Austria</option>
                                                                <option value="AZ">Azerbaijan</option>
                                                                <option value="BS">Bahamas</option>
                                                                <option value="BH">Bahrain</option>
                                                                <option value="Bangladesh">Bangladesh</option>
                                                                <option value="BB">Barbados</option>
                                                                <option value="BY">Belarus</option>
                                                                <option value="BE">Belgium</option>
                                                                <option value="BZ">Belize</option>
                                                                <option value="BJ">Benin</option>
                                                                <option value="BM">Bermuda</option>
                                                                <option value="BT">Bhutan</option>
                                                                <option value="BO">Bolivia</option>
                                                                <option value="BA">Bosnia and Herzegowina</option>
                                                                <option value="BW">Botswana</option>
                                                                <option value="BV">Bouvet Island</option>
                                                                <option value="BR">Brazil</option>
                                                                <option value="IO">British Indian Ocean Territory</option>
                                                                <option value="BN">Brunei Darussalam</option>
                                                                <option value="BG">Bulgaria</option>
                                                                <option value="BF">Burkina Faso</option>
                                                                <option value="BI">Burundi</option>
                                                                <option value="KH">Cambodia</option>
                                                                <option value="CM">Cameroon</option>
                                                                <option value="CA">Canada</option>
                                                                <option value="CV">Cape Verde</option>
                                                                <option value="KY">Cayman Islands</option>
                                                                <option value="CF">Central African Republic</option>
                                                                <option value="TD">Chad</option>
                                                                <option value="CL">Chile</option>
                                                                <option value="CN">China</option>
                                                                <option value="CX">Christmas Island</option>
                                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                                <option value="CO">Colombia</option>
                                                                <option value="KM">Comoros</option>
                                                                <option value="CG">Congo</option>
                                                                <option value="CD">Congo, the Democratic Republic of the</option>
                                                                <option value="CK">Cook Islands</option>
                                                                <option value="CR">Costa Rica</option>
                                                                <option value="CI">Cote d'Ivoire</option>
                                                                <option value="HR">Croatia (Hrvatska)</option>
                                                                <option value="CU">Cuba</option>
                                                                <option value="CY">Cyprus</option>
                                                                <option value="CZ">Czech Republic</option>
                                                                <option value="DK">Denmark</option>
                                                                <option value="DJ">Djibouti</option>
                                                                <option value="DM">Dominica</option>
                                                                <option value="DO">Dominican Republic</option>
                                                                <option value="TP">East Timor</option>
                                                                <option value="EC">Ecuador</option>
                                                                <option value="EG">Egypt</option>
                                                                <option value="SV">El Salvador</option>
                                                                <option value="GQ">Equatorial Guinea</option>
                                                                <option value="ER">Eritrea</option>
                                                                <option value="EE">Estonia</option>
                                                                <option value="ET">Ethiopia</option>
                                                                <option value="FK">Falkland Islands (Malvinas)</option>
                                                                <option value="FO">Faroe Islands</option>
                                                                <option value="FJ">Fiji</option>
                                                                <option value="FI">Finland</option>
                                                                <option value="FR">France</option>
                                                                <option value="FX">France, Metropolitan</option>
                                                                <option value="GF">French Guiana</option>
                                                                <option value="PF">French Polynesia</option>
                                                                <option value="TF">French Southern Territories</option>
                                                                <option value="GA">Gabon</option>
                                                                <option value="GM">Gambia</option>
                                                                <option value="GE">Georgia</option>
                                                                <option value="DE">Germany</option>
                                                                <option value="GH">Ghana</option>
                                                                <option value="GI">Gibraltar</option>
                                                                <option value="GR">Greece</option>
                                                                <option value="GL">Greenland</option>
                                                                <option value="GD">Grenada</option>
                                                                <option value="GP">Guadeloupe</option>
                                                                <option value="GU">Guam</option>
                                                                <option value="GT">Guatemala</option>
                                                                <option value="GN">Guinea</option>
                                                                <option value="GW">Guinea-Bissau</option>
                                                                <option value="GY">Guyana</option>
                                                                <option value="HT">Haiti</option>
                                                                <option value="HM">Heard and Mc Donald Islands</option>
                                                                <option value="VA">Holy See (Vatican City State)</option>
                                                                <option value="HN">Honduras</option>
                                                                <option value="HK">Hong Kong</option>
                                                                <option value="HU">Hungary</option>
                                                                <option value="IS">Iceland</option>
                                                                <option value="IN">India</option>
                                                                <option value="ID">Indonesia</option>
                                                                <option value="IR">Iran (Islamic Republic of)</option>
                                                                <option value="IQ">Iraq</option>
                                                                <option value="IE">Ireland</option>
                                                                <option value="IL">Israel</option>
                                                                <option value="IT">Italy</option>
                                                                <option value="JM">Jamaica</option>
                                                                <option value="JP">Japan</option>
                                                                <option value="JO">Jordan</option>
                                                                <option value="KZ">Kazakhstan</option>
                                                                <option value="KE">Kenya</option>
                                                                <option value="KI">Kiribati</option>
                                                                <option value="KP">Korea, Democratic People's Republic of</option>
                                                                <option value="KR">Korea, Republic of</option>
                                                                <option value="KW">Kuwait</option>
                                                                <option value="KG">Kyrgyzstan</option>
                                                                <option value="LA">Lao People's Democratic Republic</option>
                                                                <option value="LV">Latvia</option>
                                                                <option value="LB">Lebanon</option>
                                                                <option value="LS">Lesotho</option>
                                                                <option value="LR">Liberia</option>
                                                                <option value="LY">Libyan Arab Jamahiriya</option>
                                                                <option value="LI">Liechtenstein</option>
                                                                <option value="LT">Lithuania</option>
                                                                <option value="LU">Luxembourg</option>
                                                                <option value="MO">Macau</option>
                                                                <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                                                <option value="MG">Madagascar</option>
                                                                <option value="MW">Malawi</option>
                                                                <option value="MY">Malaysia</option>
                                                                <option value="MV">Maldives</option>
                                                                <option value="ML">Mali</option>
                                                                <option value="MT">Malta</option>
                                                                <option value="MH">Marshall Islands</option>
                                                                <option value="MQ">Martinique</option>
                                                                <option value="MR">Mauritania</option>
                                                                <option value="MU">Mauritius</option>
                                                                <option value="YT">Mayotte</option>
                                                                <option value="MX">Mexico</option>
                                                                <option value="FM">Micronesia, Federated States of</option>
                                                                <option value="MD">Moldova, Republic of</option>
                                                                <option value="MC">Monaco</option>
                                                                <option value="MN">Mongolia</option>
                                                                <option value="MS">Montserrat</option>
                                                                <option value="MA">Morocco</option>
                                                                <option value="MZ">Mozambique</option>
                                                                <option value="MM">Myanmar</option>
                                                                <option value="NA">Namibia</option>
                                                                <option value="NR">Nauru</option>
                                                                <option value="NP">Nepal</option>
                                                                <option value="NL">Netherlands</option>
                                                                <option value="AN">Netherlands Antilles</option>
                                                                <option value="NC">New Caledonia</option>
                                                                <option value="NZ">New Zealand</option>
                                                                <option value="NI">Nicaragua</option>
                                                                <option value="NE">Niger</option>
                                                                <option value="NG">Nigeria</option>
                                                                <option value="NU">Niue</option>
                                                                <option value="NF">Norfolk Island</option>
                                                                <option value="MP">Northern Mariana Islands</option>
                                                                <option value="NO">Norway</option>
                                                                <option value="OM">Oman</option>
                                                                <option value="PK">Pakistan</option>
                                                                <option value="PW">Palau</option>
                                                                <option value="PA">Panama</option>
                                                                <option value="PG">Papua New Guinea</option>
                                                                <option value="PY">Paraguay</option>
                                                                <option value="PE">Peru</option>
                                                                <option value="PH">Philippines</option>
                                                                <option value="PN">Pitcairn</option>
                                                                <option value="PL">Poland</option>
                                                                <option value="PT">Portugal</option>
                                                                <option value="PR">Puerto Rico</option>
                                                                <option value="QA">Qatar</option>
                                                                <option value="RE">Reunion</option>
                                                                <option value="RO">Romania</option>
                                                                <option value="RU">Russian Federation</option>
                                                                <option value="RW">Rwanda</option>
                                                                <option value="KN">Saint Kitts and Nevis</option>
                                                                <option value="LC">Saint LUCIA</option>
                                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                                <option value="WS">Samoa</option>
                                                                <option value="SM">San Marino</option>
                                                                <option value="ST">Sao Tome and Principe</option>
                                                                <option value="SA">Saudi Arabia</option>
                                                                <option value="SN">Senegal</option>
                                                                <option value="SC">Seychelles</option>
                                                                <option value="SL">Sierra Leone</option>
                                                                <option value="SG">Singapore</option>
                                                                <option value="SK">Slovakia (Slovak Republic)</option>
                                                                <option value="SI">Slovenia</option>
                                                                <option value="SB">Solomon Islands</option>
                                                                <option value="SO">Somalia</option>
                                                                <option value="ZA">South Africa</option>
                                                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                                <option value="ES">Spain</option>
                                                                <option value="LK">Sri Lanka</option>
                                                                <option value="SH">St. Helena</option>
                                                                <option value="PM">St. Pierre and Miquelon</option>
                                                                <option value="SD">Sudan</option>
                                                                <option value="SR">Suriname</option>
                                                                <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                                                <option value="SZ">Swaziland</option>
                                                                <option value="SE">Sweden</option>
                                                                <option value="CH">Switzerland</option>
                                                                <option value="SY">Syrian Arab Republic</option>
                                                                <option value="TW">Taiwan, Province of China</option>
                                                                <option value="TJ">Tajikistan</option>
                                                                <option value="TZ">Tanzania, United Republic of</option>
                                                                <option value="TH">Thailand</option>
                                                                <option value="TG">Togo</option>
                                                                <option value="TK">Tokelau</option>
                                                                <option value="TO">Tonga</option>
                                                                <option value="TT">Trinidad and Tobago</option>
                                                                <option value="TN">Tunisia</option>
                                                                <option value="TR">Turkey</option>
                                                                <option value="TM">Turkmenistan</option>
                                                                <option value="TC">Turks and Caicos Islands</option>
                                                                <option value="TV">Tuvalu</option>
                                                                <option value="UG">Uganda</option>
                                                                <option value="UA">Ukraine</option>
                                                                <option value="AE">United Arab Emirates</option>
                                                                <option value="GB">United Kingdom</option>
                                                                <option value="US">United States</option>
                                                                <option value="UM">United States Minor Outlying Islands</option>
                                                                <option value="UY">Uruguay</option>
                                                                <option value="UZ">Uzbekistan</option>
                                                                <option value="VU">Vanuatu</option>
                                                                <option value="VE">Venezuela</option>
                                                                <option value="VN">Viet Nam</option>
                                                                <option value="VG">Virgin Islands (British)</option>
                                                                <option value="VI">Virgin Islands (U.S.)</option>
                                                                <option value="WF">Wallis and Futuna Islands</option>
                                                                <option value="EH">Western Sahara</option>
                                                                <option value="YE">Yemen</option>
                                                                <option value="YU">Yugoslavia</option>
                                                                <option value="ZM">Zambia</option>
                                                                <option value="ZW">Zimbabwe</option>
                                                            </select>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-success">
                                        <div class="panel-heading">Contact Information</div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="form-group col-xs-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="addon1"><span class="glyphicon glyphicon-envelope"></span></span>
                                                        <input type="email" name="email" class="form-control" placeholder="example@example.com"  >
                                                    </div>
                                                </div>
                                                <div class="form-group col-xs-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="addon1"><span class="glyphicon glyphicon-phone-alt"></span></span>
                                                        <input type="text" name="mobile" class="form-control" placeholder="+88017XXXXXXXX"  >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="usr">Present Adress:</label>
                                                <div class="row">
                                                    <div class="form-group col-xs-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon" id="addon2">Address</span></span>
                                                            <input type="text" name="pre_address" class="form-control" placeholder="92/3, Emel,Shukrabad"  >
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-xs-6">
                                                         <div class="input-group">
                                                             <span class="input-group-addon" id="addon2">Post/Zip Code</span></span>
                                                             <input type="text" name="pre_postcode" class="form-control" placeholder="120">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-xs-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon" id="addon2">City/Town</span></span>
                                                            <input type="text" name="pre_city" class="form-control" placeholder="Dhaka"  >
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-xs-6">
                                                         <div class="input-group">
                                                             <span class="input-group-addon" id="addon2">Division/State</span>
                                                             <input type="text" name="pre_division" class="form-control" placeholder="Dhaka"  >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="usr">Permanent Adress:</label>
                                                <div class="row">
                                                    <div class="form-group col-xs-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon" id="addon3">Address</span></span>
                                                            <input type="text" name="per_address" class="form-control" placeholder="92/3, Emel,Shukrabad"  >
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-xs-6">
                                                         <div class="input-group">
                                                             <span class="input-group-addon" id="addon3">Post/Zip Code</span></span>
                                                             <input type="text" name="per_postcode" class="form-control" placeholder="1200">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-xs-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon" id="addon3">City/Town</span></span>
                                                            <input type="text" name="per_city" class="form-control" placeholder="Dhaka"  >
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-xs-6">
                                                         <div class="input-group">
                                                             <span class="input-group-addon" id="addon3">Division/State</span>
                                                             <input type="text" name="per_city" class="form-control" placeholder="Dhaka"  >
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>
                                            <div class="row">
                                                <div class="form-group col-xs-6">
                                                    
                                                </div>
                                                <div class="form-group col-xs-6">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="mainbox col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-2">
                                        <div class="panel panel-default">
                                        <div id="panel3" class="panel-heading">Course Information</div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="form-group col-xs-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Class</span>
                                                        <select class="form-control" name="class">
                                                           <option value="Six">Six</option>
                                                           <option value="Seven">Seven</option>
                                                           <option value="Eight">Eight</option>
                                                           <option value="Nine">Nine</option>
                                                           <option value="Ten">Ten</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-xs-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Section</span>
                                                         <select class="form-control" name="sction">
                                                            <option value="A">A</option>
                                                            <option value="B">B</option>
                                                            <option value="C">C</option>
                                                            <option value="D">D</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-xs-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Admission Year</span>
                                                         <select class="form-control" name="ad_year">
                                                            <option value="" selected="selected">Select a year</option>
                                                            <option value="2000">2000</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2007">2007</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-xs-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Shift</span>
                                                        <select class="form-control" name="shift">
                                                            <option value="Morning">Morning</option>
                                                            <option value="Day">Day</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-xs-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Campus</span>
                                                        <input type="text" name="campus" class="form-control" id="campus" size="10" placeholder="Campus Name" required >
                                                    </div>
                                                </div>
                                                <div class="form-group col-xs-6">
                                                    <div class="input-group">
                                                     <span class="input-group-addon">Roll No.</span>
                                                        <input type="text" name="roll" class="form-control" id="mfname" size="10" placeholder="First Name" required >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-success">
                                        <div class="panel-heading">Login Information</div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="form-group col-xs-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="addon1">Student ID</span>
                                                        <input type="text" name="std_id" class="form-control" placeholder="" Value="<?php $sid=rand(0,10000); echo "2016".$sid;?>" disabled >
                                                    </div>
                                                </div>
                                                <div class="form-group col-xs-6">
                                                   <div class="input-group">
                                                        <span class="input-group-addon" id="addon1">Username</span>
                                                        <input type="text" name="std_username" class="form-control" placeholder="Enter Username">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-xs-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="addon1"><span class="glyphicon glyphicon-lock"></span></span>
                                                        <input type="password" name="std_password" class="form-control" placeholder="XXXXXXXX"  >
                                                    </div>
                                                </div>
                                                <div class="form-group col-xs-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="addon1"><span class="glyphicon glyphicon-lock"></span></span>
                                                        <input type="password" name="std_password" class="form-control" placeholder="XXXXXXXX"  >
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="reset" class="btn tn-default">Reset</button>
                                            <button type="submit" class="btn tn-default">Submit</button>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
        </div>
        <script src="js/bootstrap-min.js"></script>
    </body>
</html>



