@extends('layouts.applayout')
@section('content')


<!-- <link rel="stylesheet" href="{{route('home')}}/assets/css/checkout.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" />
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!-- ======= Checkout ======= -->

<div class="container-fluid checkout-main pt-5">
    <section class="container pt-5">
        <form action="{{ route('processTransaction') }}" id="checkout" method="post">
            @csrf
            <div class="row gx-5">
                <div class="col-md-5 left p-4 rounded me-md-2 border-top border-bottom border-info border-5" style="height:50%;">
                    <h5 class="heading p-2 rounded bg-info text-light ">ORDER SUMMERY</h5>
                    <h6 class=" my-3">Title Name</h6>
                    <p class="text-secondary">{{$report->title}}</p>
                    <h6 class="  my-3">Type</h6>
                    <p class="text-secondary">{{$report->type}}</p>
                    <h6 class=" my-3">Price</h6>

                    <p class="text-secondary">
                        @if( $user_type === "single")
                        {{$report->single_user_price}}
                        @elseif($user_type === "multiple")
                        {{$report->multi_user_price}}
                        @endif
                    </p>
                </div>
                <!-- sending report id -->
                <div class="col-md-6 right p-4 ms-md-4 rounded border-top border-info border-5">
                    <h5 class="p-2 rounded heading text-light bg-info">PERSONAL DETAILS (SECURE WITH US)</h5>
                    <div class="mb-3">
                        <div class="row">
                        <input type="number" value="{{($report->id)}}" name="report_id" hidden
                        >
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-3">
                                <label class="form-label">Full Name:<span class="text-danger">*</span></label>
                            </div>
                            <div class="col">
                                <input type="text" name="fname" class="form-control">
                            </div>
                            <span style="color:red">@error('fname'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-3">
                                <label class="form-label">Email:<span class="text-danger">*</span></label>
                            </div>
                            <div class="col">
                                <input type="text" name="email" class="form-control">
                            </div>
                        </div>
                    </div>
                    <span style="color:red">@error('email'){{$message}}@enderror</span>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-3">
                                <label class="form-label">Phone Number:<span class="text-danger">*</span></label>
                            </div>
                            <div class="col">
                                <div class="form-control">
                                    <input class=" border-0" name="phone" id="phone" style="outline:none" type="tel">
                                    <span id="valid-msg" class="hide"></span>
                                    <span id="error-msg" class="hide"></span>
                                </div>
                            </div>
                        </div>
                    <span style="color:red">@error('phone'){{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-3">
                                <label class="form-label">Company:<span class="text-danger">*</span></label>
                            </div>
                            <div class="col">
                                <input type="text" name="company" class="form-control">
                            </div>
                        </div>
                        <span style="color:red">@error('company'){{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-3">
                                <label class="form-label">City:<span class="text-danger">*</span></label>
                            </div>
                            <div class="col">
                                <input type="text" name="city" class="form-control">
                            </div>
                        </div>
                        <span style="color:red">@error('city'){{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-3">
                                <label class="form-label">State:<span class="text-danger">*</span></label>
                            </div>
                            <div class="col">
                                <input type="text" name="state" class="form-control">
                            </div>
                        </div>
                        <span style="color:red">@error('state'){{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-3">
                                <label class="form-label">Zip Code:<span class="text-danger">*</span></label>
                            </div>
                            <div class="col">
                                <input type="text" name="zipcode" class="form-control">
                            </div>
                        </div>
                        <span style="color:red">@error('zipcode'){{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-3">
                                <label class="form-label">Country:<span class="text-danger">*</span></label>
                            </div>
                            <div class="col">
                                <select class="countrySelect form-control form-control" id="country" name="country"
                                    title="Country">
                                    <option value="0" class="text-secondary">Select</option>
                                    <option value="af" data-country-name="Afghanistan " data-dial-code="93">
                                        Afghanistan
                                    </option>
                                    <option value="al" data-country-name="Albania " data-dial-code="355">Albania
                                    </option>
                                    <option value="dz" data-country-name="Algeria " data-dial-code="213">Algeria
                                    </option>
                                    <option value="as" data-country-name="American Samoa" data-dial-code="1684">
                                        American
                                        Samoa</option>
                                    <option value="ad" data-country-name="Andorra" data-dial-code="376">Andorra
                                    </option>
                                    <option value="ao" data-country-name="Angola" data-dial-code="244">Angola
                                    </option>
                                    <option value="ai" data-country-name="Anguilla" data-dial-code="1264">Anguilla
                                    </option>
                                    <option value="ag" data-country-name="Antigua and Barbuda" data-dial-code="1268">
                                        Antigua and Barbuda</option>
                                    <option value="ar" data-country-name="Argentina" data-dial-code="54">Argentina
                                    </option>
                                    <option value="am" data-country-name="Armenia " data-dial-code="374">Armenia
                                    </option>
                                    <option value="aw" data-country-name="Aruba" data-dial-code="297">Aruba</option>
                                    <option value="au" data-country-name="Australia" data-dial-code="61">Australia
                                    </option>
                                    <option value="at" data-country-name="Austria " data-dial-code="43">Austria
                                    </option>
                                    <option value="az" data-country-name="Azerbaijan " data-dial-code="994">
                                        Azerbaijan </option>
                                    <option value="bs" data-country-name="Bahamas" data-dial-code="1242">Bahamas
                                    </option>
                                    <option value="bh" data-country-name="Bahrain " data-dial-code="973">Bahrain
                                    </option>
                                    <option value="bd" data-country-name="Bangladesh " data-dial-code="880">
                                        Bangladesh </option>
                                    <option value="bb" data-country-name="Barbados" data-dial-code="1246">Barbados
                                    </option>
                                    <option value="by" data-country-name="Belarus " data-dial-code="375">Belarus
                                    </option>
                                    <option value="be" data-country-name="Belgium " data-dial-code="32">Belgium
                                    </option>
                                    <option value="bz" data-country-name="Belize" data-dial-code="501">Belize
                                    </option>
                                    <option value="bj" data-country-name="Benin " data-dial-code="229">Benin
                                    </option>
                                    <option value="bm" data-country-name="Bermuda" data-dial-code="1441">Bermuda
                                    </option>
                                    <option value="bt" data-country-name="Bhutan " data-dial-code="975">Bhutan
                                    </option>
                                    <option value="bo" data-country-name="Bolivia" data-dial-code="591">Bolivia
                                    </option>
                                    <option value="ba" data-country-name="Bosnia and Herzegovina " data-dial-code="387">
                                        Bosnia and Herzegovina </option>
                                    <option value="bw" data-country-name="Botswana" data-dial-code="267">Botswana
                                    </option>
                                    <option value="br" data-country-name="Brazil " data-dial-code="55">Brazil
                                    </option>
                                    <option value="io" data-country-name="British Indian Ocean Territory"
                                        data-dial-code="246">British Indian Ocean Territory</option>
                                    <option value="vg" data-country-name="British Virgin Islands" data-dial-code="1284">
                                        British Virgin Islands</option>
                                    <option value="bn" data-country-name="Brunei" data-dial-code="673">Brunei
                                    </option>
                                    <option value="bg" data-country-name="Bulgaria " data-dial-code="359">Bulgaria
                                    </option>
                                    <option value="bf" data-country-name="Burkina Faso" data-dial-code="226">Burkina
                                        Faso</option>
                                    <option value="bi" data-country-name="Burundi " data-dial-code="257">Burundi
                                    </option>
                                    <option value="kh" data-country-name="Cambodia " data-dial-code="855">Cambodia
                                    </option>
                                    <option value="cm" data-country-name="Cameroon " data-dial-code="237">Cameroon
                                    </option>
                                    <option value="ca" data-country-name="Canada" data-dial-code="1">Canada</option>
                                    <option value="cv" data-country-name="Cape Verde " data-dial-code="238">Cape
                                        Verde </option>
                                    <option value="bq" data-country-name="Caribbean Netherlands" data-dial-code="599">
                                        Caribbean Netherlands</option>
                                    <option value="ky" data-country-name="Cayman Islands" data-dial-code="1345">
                                        Cayman Islands</option>
                                    <option value="cf" data-country-name="Central African Republic "
                                        data-dial-code="236">
                                        Central African Republic </option>
                                    <option value="td" data-country-name="Chad " data-dial-code="235">Chad </option>
                                    <option value="cl" data-country-name="Chile" data-dial-code="56">Chile</option>
                                    <option value="cn" data-country-name="China " data-dial-code="86">China
                                    </option>
                                    <option value="cx" data-country-name="Christmas Island" data-dial-code="61">
                                        Christmas Island</option>
                                    <option value="cc" data-country-name="Cocos " data-dial-code="61">Cocos
                                    </option>
                                    <option value="co" data-country-name="Colombia" data-dial-code="57">Colombia
                                    </option>
                                    <option value="km" data-country-name="Comoros " data-dial-code="269">Comoros
                                    </option>
                                    <option value="cd" data-country-name="Congo " data-dial-code="243">Congo
                                    </option>
                                    <option value="cg" data-country-name="Congo " data-dial-code="242">Congo
                                    </option>
                                    <option value="ck" data-country-name="Cook Islands" data-dial-code="682">Cook
                                        Islands</option>
                                    <option value="cr" data-country-name="Costa Rica" data-dial-code="506">Costa
                                        Rica
                                    </option>
                                    <option value="ci" data-country-name="Côte d’Ivoire" data-dial-code="225">Côte
                                        d’Ivoire</option>
                                    <option value="hr" data-country-name="Croatia " data-dial-code="385">Croatia
                                    </option>
                                    <option value="cu" data-country-name="Cuba" data-dial-code="53">Cuba</option>
                                    <option value="cw" data-country-name="Curaçao" data-dial-code="599">Curaçao
                                    </option>
                                    <option value="cy" data-country-name="Cyprus " data-dial-code="357">Cyprus
                                    </option>
                                    <option value="cz" data-country-name="Czech Republic " data-dial-code="420">
                                        Czech
                                        Republic </option>
                                    <option value="dk" data-country-name="Denmark " data-dial-code="45">Denmark
                                    </option>
                                    <option value="dj" data-country-name="Djibouti" data-dial-code="253">Djibouti
                                    </option>
                                    <option value="dm" data-country-name="Dominica" data-dial-code="1767">Dominica
                                    </option>
                                    <option value="do" data-country-name="Dominican Republic " data-dial-code="1">
                                        Dominican Republic </option>
                                    <option value="ec" data-country-name="Ecuador" data-dial-code="593">Ecuador
                                    </option>
                                    <option value="eg" data-country-name="Egypt " data-dial-code="20">Egypt
                                    </option>
                                    <option value="sv" data-country-name="El Salvador" data-dial-code="503">El
                                        Salvador</option>
                                    <option value="gq" data-country-name="Equatorial Guinea " data-dial-code="240">
                                        Equatorial Guinea </option>
                                    <option value="er" data-country-name="Eritrea" data-dial-code="291">Eritrea
                                    </option>
                                    <option value="ee" data-country-name="Estonia " data-dial-code="372">Estonia
                                    </option>
                                    <option value="et" data-country-name="Ethiopia" data-dial-code="251">Ethiopia
                                    </option>
                                    <option value="fk" data-country-name="Falkland Islands " data-dial-code="500">
                                        Falkland Islands </option>
                                    <option value="fo" data-country-name="Faroe Islands " data-dial-code="298">Faroe
                                        Islands </option>
                                    <option value="fj" data-country-name="Fiji" data-dial-code="679">Fiji</option>
                                    <option value="fi" data-country-name="Finland " data-dial-code="358">Finland
                                    </option>
                                    <option value="fr" data-country-name="France" data-dial-code="33">France
                                    </option>
                                    <option value="gf" data-country-name="French Guiana " data-dial-code="594">
                                        French
                                        Guiana </option>
                                    <option value="pf" data-country-name="French Polynesia " data-dial-code="689">
                                        French Polynesia </option>
                                    <option value="ga" data-country-name="Gabon" data-dial-code="241">Gabon</option>
                                    <option value="gm" data-country-name="Gambia" data-dial-code="220">Gambia
                                    </option>
                                    <option value="ge" data-country-name="Georgia " data-dial-code="995">Georgia
                                    </option>
                                    <option value="de" data-country-name="Germany " data-dial-code="49">Germany
                                    </option>
                                    <option value="gh" data-country-name="Ghana " data-dial-code="233">Ghana
                                    </option>
                                    <option value="gi" data-country-name="Gibraltar" data-dial-code="350">Gibraltar
                                    </option>
                                    <option value="gr" data-country-name="Greece " data-dial-code="30">Greece
                                    </option>
                                    <option value="gl" data-country-name="Greenland " data-dial-code="299">Greenland
                                    </option>
                                    <option value="gd" data-country-name="Grenada" data-dial-code="1473">Grenada
                                    </option>
                                    <option value="gp" data-country-name="Guadeloupe" data-dial-code="590">
                                        Guadeloupe
                                    </option>
                                    <option value="gu" data-country-name="Guam" data-dial-code="1671">Guam</option>
                                    <option value="gt" data-country-name="Guatemala" data-dial-code="502">Guatemala
                                    </option>
                                    <option value="gg" data-country-name="Guernsey" data-dial-code="44">Guernsey
                                    </option>
                                    <option value="gn" data-country-name="Guinea " data-dial-code="224">Guinea
                                    </option>
                                    <option value="gw" data-country-name="Guinea-Bissau " data-dial-code="245">
                                        Guinea-Bissau </option>
                                    <option value="gy" data-country-name="Guyana" data-dial-code="592">Guyana
                                    </option>
                                    <option value="ht" data-country-name="Haiti" data-dial-code="509">Haiti</option>
                                    <option value="hn" data-country-name="Honduras" data-dial-code="504">Honduras
                                    </option>
                                    <option value="hk" data-country-name="Hong Kong " data-dial-code="852">Hong Kong
                                    </option>
                                    <option value="hu" data-country-name="Hungary " data-dial-code="36">Hungary
                                    </option>
                                    <option value="is" data-country-name="Iceland " data-dial-code="354">Iceland
                                    </option>
                                    <option value="in" data-country-name="India " data-dial-code="91">India
                                    </option>
                                    <option value="id" data-country-name="Indonesia" data-dial-code="62">Indonesia
                                    </option>
                                    <option value="ir" data-country-name="Iran " data-dial-code="98">Iran </option>
                                    <option value="iq" data-country-name="Iraq " data-dial-code="964">Iraq </option>
                                    <option value="ie" data-country-name="Ireland" data-dial-code="353">Ireland
                                    </option>
                                    <option value="im" data-country-name="Isle of Man" data-dial-code="44">Isle of
                                        Man</option>
                                    <option value="il" data-country-name="Israel " data-dial-code="972">Israel
                                    </option>
                                    <option value="it" data-country-name="Italy " data-dial-code="39">Italy
                                    </option>
                                    <option value="jm" data-country-name="Jamaica" data-dial-code="1876">Jamaica
                                    </option>
                                    <option value="jp" data-country-name="Japan " data-dial-code="81">Japan
                                    </option>
                                    <option value="je" data-country-name="Jersey" data-dial-code="44">Jersey
                                    </option>
                                    <option value="jo" data-country-name="Jordan " data-dial-code="962">Jordan
                                    </option>
                                    <option value="kz" data-country-name="Kazakhstan " data-dial-code="7">Kazakhstan
                                    </option>
                                    <option value="ke" data-country-name="Kenya" data-dial-code="254">Kenya</option>
                                    <option value="ki" data-country-name="Kiribati" data-dial-code="686">Kiribati
                                    </option>
                                    <option value="kw" data-country-name="Kuwait " data-dial-code="965">Kuwait
                                    </option>
                                    <option value="kg" data-country-name="Kyrgyzstan " data-dial-code="996">
                                        Kyrgyzstan </option>
                                    <option value="la" data-country-name="Laos " data-dial-code="856">Laos </option>
                                    <option value="lv" data-country-name="Latvia " data-dial-code="371">Latvia
                                    </option>
                                    <option value="lb" data-country-name="Lebanon " data-dial-code="961">Lebanon
                                    </option>
                                    <option value="ls" data-country-name="Lesotho" data-dial-code="266">Lesotho
                                    </option>
                                    <option value="lr" data-country-name="Liberia" data-dial-code="231">Liberia
                                    </option>
                                    <option value="ly" data-country-name="Libya " data-dial-code="218">Libya
                                    </option>
                                    <option value="li" data-country-name="Liechtenstein" data-dial-code="423">
                                        Liechtenstein</option>
                                    <option value="lt" data-country-name="Lithuania " data-dial-code="370">Lithuania
                                    </option>
                                    <option value="lu" data-country-name="Luxembourg" data-dial-code="352">
                                        Luxembourg
                                    </option>
                                    <option value="mo" data-country-name="Macau " data-dial-code="853">Macau
                                    </option>
                                    <option value="mk" data-country-name="Macedonia " data-dial-code="389">Macedonia
                                    </option>
                                    <option value="mg" data-country-name="Madagascar " data-dial-code="261">
                                        Madagascar </option>
                                    <option value="mw" data-country-name="Malawi" data-dial-code="265">Malawi
                                    </option>
                                    <option value="my" data-country-name="Malaysia" data-dial-code="60">Malaysia
                                    </option>
                                    <option value="mv" data-country-name="Maldives" data-dial-code="960">Maldives
                                    </option>
                                    <option value="ml" data-country-name="Mali" data-dial-code="223">Mali</option>
                                    <option value="mt" data-country-name="Malta" data-dial-code="356">Malta</option>
                                    <option value="mh" data-country-name="Marshall Islands" data-dial-code="692">
                                        Marshall Islands</option>
                                    <option value="mq" data-country-name="Martinique" data-dial-code="596">
                                        Martinique
                                    </option>
                                    <option value="mr" data-country-name="Mauritania " data-dial-code="222">
                                        Mauritania </option>
                                    <option value="mu" data-country-name="Mauritius " data-dial-code="230">Mauritius
                                    </option>
                                    <option value="yt" data-country-name="Mayotte" data-dial-code="262">Mayotte
                                    </option>
                                    <option value="mx" data-country-name="Mexico " data-dial-code="52">Mexico
                                    </option>
                                    <option value="fm" data-country-name="Micronesia" data-dial-code="691">
                                        Micronesia
                                    </option>
                                    <option value="md" data-country-name="Moldova " data-dial-code="373">Moldova
                                    </option>
                                    <option value="mc" data-country-name="Monaco" data-dial-code="377">Monaco
                                    </option>
                                    <option value="mn" data-country-name="Mongolia " data-dial-code="976">Mongolia
                                    </option>
                                    <option value="me" data-country-name="Montenegro " data-dial-code="382">
                                        Montenegro </option>
                                    <option value="ms" data-country-name="Montserrat" data-dial-code="1664">
                                        Montserrat</option>
                                    <option value="ma" data-country-name="Morocco " data-dial-code="212">Morocco
                                    </option>
                                    <option value="mz" data-country-name="Mozambique " data-dial-code="258">
                                        Mozambique </option>
                                    <option value="mm" data-country-name="Myanmar " data-dial-code="95">Myanmar
                                    </option>
                                    <option value="na" data-country-name="Namibia " data-dial-code="264">Namibia
                                    </option>
                                    <option value="nr" data-country-name="Nauru" data-dial-code="674">Nauru</option>
                                    <option value="np" data-country-name="Nepal " data-dial-code="977">Nepal
                                    </option>
                                    <option value="nl" data-country-name="Netherlands " data-dial-code="31">
                                        Netherlands </option>
                                    <option value="nc" data-country-name="New Caledonia " data-dial-code="687">New
                                        Caledonia </option>
                                    <option value="nz" data-country-name="New Zealand" data-dial-code="64">New
                                        Zealand</option>
                                    <option value="ni" data-country-name="Nicaragua" data-dial-code="505">Nicaragua
                                    </option>
                                    <option value="ne" data-country-name="Niger " data-dial-code="227">Niger
                                    </option>
                                    <option value="ng" data-country-name="Nigeria" data-dial-code="234">Nigeria
                                    </option>
                                    <option value="nu" data-country-name="Niue" data-dial-code="683">Niue</option>
                                    <option value="nf" data-country-name="Norfolk Island" data-dial-code="672">
                                        Norfolk Island</option>
                                    <option value="kp" data-country-name="North Korea " data-dial-code="850">North
                                        Korea </option>
                                    <option value="mp" data-country-name="Northern Mariana Islands"
                                        data-dial-code="1670">
                                        Northern Mariana Islands</option>
                                    <option value="no" data-country-name="Norway " data-dial-code="47">Norway
                                    </option>
                                    <option value="om" data-country-name="Oman " data-dial-code="968">Oman </option>
                                    <option value="pk" data-country-name="Pakistan " data-dial-code="92">Pakistan
                                    </option>
                                    <option value="pw" data-country-name="Palau" data-dial-code="680">Palau</option>
                                    <option value="ps" data-country-name="Palestine " data-dial-code="970">Palestine
                                    </option>
                                    <option value="pa" data-country-name="Panama " data-dial-code="507">Panama
                                    </option>
                                    <option value="pg" data-country-name="Papua New Guinea" data-dial-code="675">
                                        Papua New Guinea</option>
                                    <option value="py" data-country-name="Paraguay" data-dial-code="595">Paraguay
                                    </option>
                                    <option value="pe" data-country-name="Peru " data-dial-code="51">Peru </option>
                                    <option value="ph" data-country-name="Philippines" data-dial-code="63">
                                        Philippines</option>
                                    <option value="pl" data-country-name="Poland " data-dial-code="48">Poland
                                    </option>
                                    <option value="pt" data-country-name="Portugal" data-dial-code="351">Portugal
                                    </option>
                                    <option value="pr" data-country-name="Puerto Rico" data-dial-code="1">Puerto
                                        Rico
                                    </option>
                                    <option value="qa" data-country-name="Qatar " data-dial-code="974">Qatar
                                    </option>
                                    <option value="re" data-country-name="Réunion " data-dial-code="262">Réunion
                                    </option>
                                    <option value="ro" data-country-name="Romania " data-dial-code="40">Romania
                                    </option>
                                    <option value="ru" data-country-name="Russia " data-dial-code="7">Russia
                                    </option>
                                    <option value="rw" data-country-name="Rwanda" data-dial-code="250">Rwanda
                                    </option>
                                    <option value="bl" data-country-name="Saint Barthélemy " data-dial-code="590">
                                        Saint Barthélemy </option>
                                    <option value="sh" data-country-name="Saint Helena" data-dial-code="290">Saint
                                        Helena</option>
                                    <option value="kn" data-country-name="Saint Kitts and Nevis" data-dial-code="1869">
                                        Saint
                                        Kitts and Nevis</option>
                                    <option value="lc" data-country-name="Saint Lucia" data-dial-code="1758">Saint
                                        Lucia</option>
                                    <option value="mf" data-country-name="Saint Martin " data-dial-code="590">Saint
                                        Martin </option>
                                    <option value="pm" data-country-name="Saint Pierre and Miquelon "
                                        data-dial-code="508">
                                        Saint Pierre and Miquelon </option>
                                    <option value="vc" data-country-name="Saint Vincent and the Grenadines"
                                        data-dial-code="1784">Saint Vincent and the Grenadines</option>
                                    <option value="ws" data-country-name="Samoa" data-dial-code="685">Samoa</option>
                                    <option value="sm" data-country-name="San Marino" data-dial-code="378">San
                                        Marino
                                    </option>
                                    <option value="st" data-country-name="São Tomé and Príncipe " data-dial-code="239">
                                        São
                                        Tomé and Príncipe </option>
                                    <option value="sa" data-country-name="Saudi Arabia " data-dial-code="966">Saudi
                                        Arabia </option>
                                    <option value="sn" data-country-name="Senegal " data-dial-code="221">Senegal
                                    </option>
                                    <option value="rs" data-country-name="Serbia " data-dial-code="381">Serbia
                                    </option>
                                    <option value="sc" data-country-name="Seychelles" data-dial-code="248">
                                        Seychelles
                                    </option>
                                    <option value="sl" data-country-name="Sierra Leone" data-dial-code="232">Sierra
                                        Leone</option>
                                    <option value="sg" data-country-name="Singapore" data-dial-code="65">Singapore
                                    </option>
                                    <option value="sx" data-country-name="Sint Maarten" data-dial-code="1721">Sint
                                        Maarten</option>
                                    <option value="sk" data-country-name="Slovakia " data-dial-code="421">Slovakia
                                    </option>
                                    <option value="si" data-country-name="Slovenia " data-dial-code="386">Slovenia
                                    </option>
                                    <option value="sb" data-country-name="Solomon Islands" data-dial-code="677">
                                        Solomon Islands</option>
                                    <option value="so" data-country-name="Somalia " data-dial-code="252">Somalia
                                    </option>
                                    <option value="za" data-country-name="South Africa" data-dial-code="27">South
                                        Africa</option>
                                    <option value="kr" data-country-name="South Korea " data-dial-code="82">South
                                        Korea </option>
                                    <option value="ss" data-country-name="South Sudan " data-dial-code="211">South
                                        Sudan </option>
                                    <option value="es" data-country-name="Spain " data-dial-code="34">Spain
                                    </option>
                                    <option value="lk" data-country-name="Sri Lanka " data-dial-code="94">Sri Lanka
                                    </option>
                                    <option value="sd" data-country-name="Sudan " data-dial-code="249">Sudan
                                    </option>
                                    <option value="sr" data-country-name="Suriname" data-dial-code="597">Suriname
                                    </option>
                                    <option value="sj" data-country-name="Svalbard and Jan Mayen" data-dial-code="47">
                                        Svalbard and Jan Mayen</option>
                                    <option value="sz" data-country-name="Swaziland" data-dial-code="268">Swaziland
                                    </option>
                                    <option value="se" data-country-name="Sweden " data-dial-code="46">Sweden
                                    </option>
                                    <option value="ch" data-country-name="Switzerland " data-dial-code="41">
                                        Switzerland </option>
                                    <option value="sy" data-country-name="Syria " data-dial-code="963">Syria
                                    </option>
                                    <option value="tw" data-country-name="Taiwan " data-dial-code="886">Taiwan
                                    </option>
                                    <option value="tj" data-country-name="Tajikistan" data-dial-code="992">
                                        Tajikistan
                                    </option>
                                    <option value="tz" data-country-name="Tanzania" data-dial-code="255">Tanzania
                                    </option>
                                    <option value="th" data-country-name="Thailand " data-dial-code="66">Thailand
                                    </option>
                                    <option value="tl" data-country-name="Timor-Leste" data-dial-code="670">
                                        Timor-Leste</option>
                                    <option value="tg" data-country-name="Togo" data-dial-code="228">Togo</option>
                                    <option value="tk" data-country-name="Tokelau" data-dial-code="690">Tokelau
                                    </option>
                                    <option value="to" data-country-name="Tonga" data-dial-code="676">Tonga</option>
                                    <option value="tt" data-country-name="Trinidad and Tobago" data-dial-code="1868">
                                        Trinidad and Tobago</option>
                                    <option value="tn" data-country-name="Tunisia " data-dial-code="216">Tunisia
                                    </option>
                                    <option value="tr" data-country-name="Turkey " data-dial-code="90">Turkey
                                    </option>
                                    <option value="tm" data-country-name="Turkmenistan" data-dial-code="993">
                                        Turkmenistan</option>
                                    <option value="tc" data-country-name="Turks and Caicos Islands"
                                        data-dial-code="1649">
                                        Turks and Caicos Islands</option>
                                    <option value="tv" data-country-name="Tuvalu" data-dial-code="688">Tuvalu
                                    </option>
                                    <option value="vi" data-country-name="U.S. Virgin Islands" data-dial-code="1340">
                                        U.S. Virgin Islands</option>
                                    <option value="ug" data-country-name="Uganda" data-dial-code="256">Uganda
                                    </option>
                                    <option value="ua" data-country-name="Ukraine " data-dial-code="380">Ukraine
                                    </option>
                                    <option value="ae" data-country-name="United Arab Emirates " data-dial-code="971">
                                        United
                                        Arab Emirates </option>
                                    <option value="gb" data-country-name="United Kingdom" data-dial-code="44">United
                                        Kingdom</option>
                                    <option value="us" data-country-name="United States" data-dial-code="1">United
                                        States</option>
                                    <option value="uy" data-country-name="Uruguay" data-dial-code="598">Uruguay
                                    </option>
                                    <option value="uz" data-country-name="Uzbekistan " data-dial-code="998">
                                        Uzbekistan </option>
                                    <option value="vu" data-country-name="Vanuatu" data-dial-code="678">Vanuatu
                                    </option>
                                    <option value="va" data-country-name="Vatican City " data-dial-code="39">Vatican
                                        City </option>
                                    <option value="ve" data-country-name="Venezuela" data-dial-code="58">Venezuela
                                    </option>
                                    <option value="vn" data-country-name="Vietnam " data-dial-code="84">Vietnam
                                    </option>
                                    <option value="wf" data-country-name="Wallis and Futuna" data-dial-code="681">
                                        Wallis and Futuna</option>
                                    <option value="eh" data-country-name="Western Sahara " data-dial-code="212">
                                        Western Sahara </option>
                                    <option value="ye" data-country-name="Yemen " data-dial-code="967">Yemen
                                    </option>
                                    <option value="zm" data-country-name="Zambia" data-dial-code="260">Zambia
                                    </option>
                                    <option value="zw" data-country-name="Zimbabwe" data-dial-code="263">Zimbabwe
                                    </option>
                                    <option value="ax" data-country-name="Åland Islands" data-dial-code="358">Åland
                                        Islands</option>
                                </select>
                            </div>
                        </div>
                        <span style="color:red">@error('ountry'){{$message}}@enderror</span>
                    </div>
                    <!-- <div class="mb-3">
                        <div class="row">
                            <div class="col-3">
                                <label class="form-label">Human Verification:<span class="text-danger">*</span></label>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control">

                            </div>
                        </div>
                    </div> -->
                    <h6 class="my-3">Choose a Payment Mode (Online Payment/Credit Card)</h6>
                    <div class="row gx-5 px-3">
                        <div class="col mb-3">
                            <label for="paypal">
                            <img class="" alt="paypal" id="paypal_tnr_img" src="{{route('home')}}/assets/img/Paypal-icon.png">
                            </label>
                            <input type="radio" id="paypal" name="pay_method" value="paypal" class="form-check-input" hidden>
                        </div>
                        <div class="col mb-3">
                            <label for="wiretransfer">
                            <img class="" alt="Wire Transfer" id="wire_tnr_img"
                                    src="{{route('home')}}/assets/img/wire-transfer-icon.png">
                            </label>
                            <input type="radio" id="wiretransfer" name="pay_method" value="wiretransfer"
                                class="form-check-input" hidden>
                        </div>
                        <span style="color:red">@error('pay_method'){{$message}}@enderror</span>
                    </div>
                    <button type="submit" class="btn bg-success px-3 align-center w-100 text-light" id="processTrn"><b>PROCEED TO
                            PAY</b></button>
                </div>

            </div>


        </form>


    </section>
</div>
<script>


</script>

@endsection

@section('script')
<!-- <script src="{{route('home')}}/assets/js/checkout.js"></script> -->
<script>   
$(document).ready(function(){
  $('#processTrn').click(function(){
    $('#checkout').submit();
  })
}); 

// jquery for paypal and wiretranser image
$('#wire_tnr_img').click(function() {
    $('#wire_tnr_img').css({
        'box-shadow': '1px 1px 10px green',
        'border-radius': '25px'

    });
    $('#paypal_tnr_img').css({
        'box-shadow': '0px 0px 0px gray',
        'border-radius': '25px'
    });
});
$('#paypal_tnr_img').click(function() {
    $('#paypal_tnr_img').css({
        'box-shadow': '1px 1px 10px green',
        'border-radius': '25px'
    });
    $('#wire_tnr_img').css({
        'box-shadow': '0px 0px 0px gray',
        'border-radius': '25px'
    });
});
</script>

@endsection


<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PayPal Payment Gateway Integration Tutorial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
</head>
<body>
    <div class="container mt-5 text-center">
        {{-- <h2>Laravel 7 PayPal Integration Example</h2> --}}
        <a href="{{ route('processTransaction') }}" class="btn btn-primary mt-3">Pay $224 via Paypal</a>
    </div>
</body>
</html> 