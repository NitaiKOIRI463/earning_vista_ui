<form method="POST" name="generateFunds" action="<?php echo base_url('Member/MemberRegister/UpdateMember'); ?>">
    <div class="content-area">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <strong>Side</strong>
                        <select name="side" id="side" class="form-control" required>
                            <option value="">---select---</option>
                            <option <?php if($member_details[0]['side'] == "L"){echo 'selected="selected"';} ?> value="L">Left</option>
                            <option <?php if($member_details[0]['side'] == "R"){echo 'selected="selected"';} ?> value="R">Right</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-4">
                    <input type="hidden" name="member_id" id="member_id" value="<?php echo $member_details[0]['member_id']; ?>">
                    <div class="form-group">
                        <strong>Name</strong>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="<?php echo $member_details[0]['name']; ?>">
                    </div>
                </div>
            
                <div class="col-lg-4">
                    <div class="form-group">
                        <strong>Father/Husband Name</strong>
                        <input type="text" class="form-control" name="fatherHusband_name" id="fatherHusband_name" placeholder="Enter father/husband name" required="" value="<?php echo $member_details[0]['f_h_name']; ?>">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="form-group">
                        <strong>Email Id</strong> <span id="email-error"></span>
                        <input type="email" class="form-control" name="email" id="email" required="" parsley-type="email" placeholder="Enter a valid e-mail" onblur="checkEmail(this.value);" value="<?php echo $member_details[0]['email_id']; ?>">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <strong>Country Code </strong>
                        <select class="form-control" name="country_code" id="country_code" required>
                            <option value="">-Select-</option>
                            <option <?php if($member_details[0]['country_code'] == 1){echo 'selected="selected"';} ?> value="1">ABW (297)</option>
                            <option <?php if($member_details[0]['country_code'] == 2){echo 'selected="selected"';} ?> value="2">AFG (93)</option>
                            <option <?php if($member_details[0]['country_code'] == 3){echo 'selected="selected"';} ?> value="3">AGO (244)</option>
                            <option <?php if($member_details[0]['country_code'] == 4){echo 'selected="selected"';} ?> value="4">ALB (355)</option>
                            <option <?php if($member_details[0]['country_code'] == 5){echo 'selected="selected"';} ?> value="5">AND (376)</option>
                            <option <?php if($member_details[0]['country_code'] == 6){echo 'selected="selected"';} ?> value="6">ANT (599)</option>
                            <option <?php if($member_details[0]['country_code'] == 7){echo 'selected="selected"';} ?> value="7">ARE (971)</option>
                            <option <?php if($member_details[0]['country_code'] == 8){echo 'selected="selected"';} ?> value="8">ARG (54)</option>
                            <option <?php if($member_details[0]['country_code'] == 9){echo 'selected="selected"';} ?> value="9">ARM (374)</option>
                            <option <?php if($member_details[0]['country_code'] == 10){echo 'selected="selected"';} ?> value="10">ATA (672)</option>
                            <option <?php if($member_details[0]['country_code'] == 11){echo 'selected="selected"';} ?> value="11">AUS (61)</option>
                            <option <?php if($member_details[0]['country_code'] == 12){echo 'selected="selected"';} ?> value="12">AUT (43)</option>
                            <option <?php if($member_details[0]['country_code'] == 13){echo 'selected="selected"';} ?> value="13">AZE (994)</option>
                            <option <?php if($member_details[0]['country_code'] == 14){echo 'selected="selected"';} ?> value="14">BDI (257)</option>
                            <option <?php if($member_details[0]['country_code'] == 15){echo 'selected="selected"';} ?> value="15">BEL (32)</option>
                            <option <?php if($member_details[0]['country_code'] == 16){echo 'selected="selected"';} ?> value="16">BEN (229)</option>
                            <option <?php if($member_details[0]['country_code'] == 17){echo 'selected="selected"';} ?> value="17">BFA (226)</option>
                            <option <?php if($member_details[0]['country_code'] == 18){echo 'selected="selected"';} ?> value="18">BGD (880)</option>
                            <option <?php if($member_details[0]['country_code'] == 19){echo 'selected="selected"';} ?> value="19">BGR (359)</option>
                            <option <?php if($member_details[0]['country_code'] == 20){echo 'selected="selected"';} ?> value="20">BHR (973)</option>
                            <option <?php if($member_details[0]['country_code'] == 21){echo 'selected="selected"';} ?> value="21">BIH (387)</option>
                            <option <?php if($member_details[0]['country_code'] == 22){echo 'selected="selected"';} ?> value="22">BLR (375)</option>
                            <option <?php if($member_details[0]['country_code'] == 23){echo 'selected="selected"';} ?> value="23">BLZ (501)</option>
                            <option <?php if($member_details[0]['country_code'] == 24){echo 'selected="selected"';} ?> value="24">BOL (591)</option>
                            <option <?php if($member_details[0]['country_code'] == 25){echo 'selected="selected"';} ?> value="25">BRA (55)</option>
                            <option <?php if($member_details[0]['country_code'] == 26){echo 'selected="selected"';} ?> value="26">BRN (673)</option>
                            <option <?php if($member_details[0]['country_code'] == 27){echo 'selected="selected"';} ?> value="27">BTN (975)</option>
                            <option <?php if($member_details[0]['country_code'] == 28){echo 'selected="selected"';} ?> value="28">BWA (267)</option>
                            <option <?php if($member_details[0]['country_code'] == 29){echo 'selected="selected"';} ?> value="29">CAF (236)</option>
                            <option <?php if($member_details[0]['country_code'] == 30){echo 'selected="selected"';} ?> value="30">CAN (1)</option>
                            <option <?php if($member_details[0]['country_code'] == 31){echo 'selected="selected"';} ?> value="31">CCK (672)</option>
                            <option <?php if($member_details[0]['country_code'] == 32){echo 'selected="selected"';} ?> value="32">CHE (41)</option>
                            <option <?php if($member_details[0]['country_code'] == 33){echo 'selected="selected"';} ?> value="33">CHL (56)</option>
                            <option <?php if($member_details[0]['country_code'] == 34){echo 'selected="selected"';} ?> value="34">CHN (86)</option>
                            <option <?php if($member_details[0]['country_code'] == 35){echo 'selected="selected"';} ?> value="35">CIV (225)</option>
                            <option <?php if($member_details[0]['country_code'] == 36){echo 'selected="selected"';} ?> value="36">CMR (237)</option>
                            <option <?php if($member_details[0]['country_code'] == 37){echo 'selected="selected"';} ?> value="37">COG (242)</option>
                            <option <?php if($member_details[0]['country_code'] == 38){echo 'selected="selected"';} ?> value="38">COK (682)</option>
                            <option <?php if($member_details[0]['country_code'] == 39){echo 'selected="selected"';} ?> value="39">COL (57)</option>
                            <option <?php if($member_details[0]['country_code'] == 40){echo 'selected="selected"';} ?> value="40">COM (269)</option>
                            <option <?php if($member_details[0]['country_code'] == 41){echo 'selected="selected"';} ?> value="41">CPV (238)</option>
                            <option <?php if($member_details[0]['country_code'] == 42){echo 'selected="selected"';} ?> value="42">CRI (506)</option>
                            <option <?php if($member_details[0]['country_code'] == 43){echo 'selected="selected"';} ?> value="43">CUB (53)</option>
                            <option <?php if($member_details[0]['country_code'] == 44){echo 'selected="selected"';} ?> value="44">CXR (61)</option>
                            <option <?php if($member_details[0]['country_code'] == 45){echo 'selected="selected"';} ?> value="45">CYP (357)</option>
                            <option <?php if($member_details[0]['country_code'] == 46){echo 'selected="selected"';} ?> value="46">CZE (420)</option>
                            <option <?php if($member_details[0]['country_code'] == 47){echo 'selected="selected"';} ?> value="47">DEU (49)</option>
                            <option <?php if($member_details[0]['country_code'] == 48){echo 'selected="selected"';} ?> value="48">DJI (253)</option>
                            <option <?php if($member_details[0]['country_code'] == 49){echo 'selected="selected"';} ?> value="49">DNK (45)</option>
                            <option <?php if($member_details[0]['country_code'] == 50){echo 'selected="selected"';} ?> value="50">DZA (213)</option>
                            <option <?php if($member_details[0]['country_code'] == 51){echo 'selected="selected"';} ?> value="51">ECU (593)</option>
                            <option <?php if($member_details[0]['country_code'] == 52){echo 'selected="selected"';} ?> value="52">EGY (20)</option>
                            <option <?php if($member_details[0]['country_code'] == 53){echo 'selected="selected"';} ?> value="53">ERI (291)</option>
                            <option <?php if($member_details[0]['country_code'] == 54){echo 'selected="selected"';} ?> value="54">ESH (212)</option>
                            <option <?php if($member_details[0]['country_code'] == 55){echo 'selected="selected"';} ?> value="55">ESP (34)</option>
                            <option <?php if($member_details[0]['country_code'] == 56){echo 'selected="selected"';} ?> value="56">EST (372)</option>
                            <option <?php if($member_details[0]['country_code'] == 57){echo 'selected="selected"';} ?> value="57">ETH (251)</option>
                            <option <?php if($member_details[0]['country_code'] == 58){echo 'selected="selected"';} ?> value="58">FIN (358)</option>
                            <option <?php if($member_details[0]['country_code'] == 59){echo 'selected="selected"';} ?> value="59">FJI (679)</option>
                            <option <?php if($member_details[0]['country_code'] == 60){echo 'selected="selected"';} ?> value="60">FLK (500)</option>
                            <option <?php if($member_details[0]['country_code'] == 61){echo 'selected="selected"';} ?> value="61">FRA (33)</option>
                            <option <?php if($member_details[0]['country_code'] == 62){echo 'selected="selected"';} ?> value="62">FRO (298)</option>
                            <option <?php if($member_details[0]['country_code'] == 63){echo 'selected="selected"';} ?> value="63">GAB (241)</option>
                            <option <?php if($member_details[0]['country_code'] == 64){echo 'selected="selected"';} ?> value="64">GBR (44)</option>
                            <option <?php if($member_details[0]['country_code'] == 65){echo 'selected="selected"';} ?> value="65">GEO (995)</option>
                            <option <?php if($member_details[0]['country_code'] == 66){echo 'selected="selected"';} ?> value="66">GHA (233)</option>
                            <option <?php if($member_details[0]['country_code'] == 67){echo 'selected="selected"';} ?> value="67">GIB (350)</option>
                            <option <?php if($member_details[0]['country_code'] == 68){echo 'selected="selected"';} ?> value="68">GIN (224)</option>
                            <option <?php if($member_details[0]['country_code'] == 69){echo 'selected="selected"';} ?> value="69">GLP (590)</option>
                            <option <?php if($member_details[0]['country_code'] == 70){echo 'selected="selected"';} ?> value="70">GMB (220)</option>
                            <option <?php if($member_details[0]['country_code'] == 71){echo 'selected="selected"';} ?> value="71">GNB (245)</option>
                            <option <?php if($member_details[0]['country_code'] == 72){echo 'selected="selected"';} ?> value="72">GNQ (240)</option>
                            <option <?php if($member_details[0]['country_code'] == 73){echo 'selected="selected"';} ?> value="73">GRC (30)</option>
                            <option <?php if($member_details[0]['country_code'] == 74){echo 'selected="selected"';} ?> value="74">GRL (299)</option>
                            <option <?php if($member_details[0]['country_code'] == 75){echo 'selected="selected"';} ?> value="75">GTM (502)</option>
                            <option <?php if($member_details[0]['country_code'] == 76){echo 'selected="selected"';} ?> value="76">GUF (594)</option>
                            <option <?php if($member_details[0]['country_code'] == 77){echo 'selected="selected"';} ?> value="77">GUY (592)</option>
                            <option <?php if($member_details[0]['country_code'] == 78){echo 'selected="selected"';} ?> value="78">HKG (852)</option>
                            <option <?php if($member_details[0]['country_code'] == 79){echo 'selected="selected"';} ?> value="79">HND (504)</option>
                            <option <?php if($member_details[0]['country_code'] == 80){echo 'selected="selected"';} ?> value="80">HRV (385)</option>
                            <option <?php if($member_details[0]['country_code'] == 81){echo 'selected="selected"';} ?> value="81">HTI (509)</option>
                            <option <?php if($member_details[0]['country_code'] == 82){echo 'selected="selected"';} ?> value="82">HUN (36)</option>
                            <option <?php if($member_details[0]['country_code'] == 83){echo 'selected="selected"';} ?> value="83">IDN (62)</option>
                            <option <?php if($member_details[0]['country_code'] == 84){echo 'selected="selected"';} ?> value="84">IND (91)</option>
                            <option <?php if($member_details[0]['country_code'] == 85){echo 'selected="selected"';} ?> value="85">IOT (246)</option>
                            <option <?php if($member_details[0]['country_code'] == 86){echo 'selected="selected"';} ?> value="86">IRL (353)</option>
                            <option <?php if($member_details[0]['country_code'] == 87){echo 'selected="selected"';} ?> value="87">IRN (98)</option>
                            <option <?php if($member_details[0]['country_code'] == 88){echo 'selected="selected"';} ?> value="88">IRQ (964)</option>
                            <option <?php if($member_details[0]['country_code'] == 89){echo 'selected="selected"';} ?> value="89">ISL (354)</option>
                            <option <?php if($member_details[0]['country_code'] == 90){echo 'selected="selected"';} ?> value="90">ISR (972)</option>
                            <option <?php if($member_details[0]['country_code'] == 91){echo 'selected="selected"';} ?> value="91">ITA (39)</option>
                            <option <?php if($member_details[0]['country_code'] == 92){echo 'selected="selected"';} ?> value="92">JOR (962)</option>
                            <option <?php if($member_details[0]['country_code'] == 93){echo 'selected="selected"';} ?> value="93">JPN (81)</option>
                            <option <?php if($member_details[0]['country_code'] == 94){echo 'selected="selected"';} ?> value="94">KAZ (7)</option>
                            <option <?php if($member_details[0]['country_code'] == 95){echo 'selected="selected"';} ?> value="95">KEN (254)</option>
                            <option <?php if($member_details[0]['country_code'] == 96){echo 'selected="selected"';} ?> value="96">KGZ (996)</option>
                            <option <?php if($member_details[0]['country_code'] == 97){echo 'selected="selected"';} ?> value="97">KHM (855)</option>
                            <option <?php if($member_details[0]['country_code'] == 98){echo 'selected="selected"';} ?> value="98">KIR (686)</option>
                            <option <?php if($member_details[0]['country_code'] == 99){echo 'selected="selected"';} ?> value="99">KOR (82)</option>
                            <option <?php if($member_details[0]['country_code'] == 100){echo 'selected="selected"';} ?> value="100">KWT (965)</option>
                            <option <?php if($member_details[0]['country_code'] == 101){echo 'selected="selected"';} ?> value="101">LBN (961)</option>
                            <option <?php if($member_details[0]['country_code'] == 102){echo 'selected="selected"';} ?> value="102">LBR (231)</option>
                            <option <?php if($member_details[0]['country_code'] == 103){echo 'selected="selected"';} ?> value="103">LBY (218)</option>
                            <option <?php if($member_details[0]['country_code'] == 104){echo 'selected="selected"';} ?> value="104">LIE (423)</option>
                            <option <?php if($member_details[0]['country_code'] == 105){echo 'selected="selected"';} ?> value="105">LKA (94)</option>
                            <option <?php if($member_details[0]['country_code'] == 106){echo 'selected="selected"';} ?> value="106">LSO (266)</option>
                            <option <?php if($member_details[0]['country_code'] == 107){echo 'selected="selected"';} ?> value="107">LTU (370)</option>
                            <option <?php if($member_details[0]['country_code'] == 108){echo 'selected="selected"';} ?> value="108">LUX (352)</option>
                            <option <?php if($member_details[0]['country_code'] == 109){echo 'selected="selected"';} ?> value="109">LVA (371)</option>
                            <option <?php if($member_details[0]['country_code'] == 110){echo 'selected="selected"';} ?> value="110">MAC (853)</option>
                            <option <?php if($member_details[0]['country_code'] == 111){echo 'selected="selected"';} ?> value="111">MAR (212)</option>
                            <option <?php if($member_details[0]['country_code'] == 112){echo 'selected="selected"';} ?> value="112">MCO (377)</option>
                            <option <?php if($member_details[0]['country_code'] == 113){echo 'selected="selected"';} ?> value="113">MDG (261)</option>
                            <option <?php if($member_details[0]['country_code'] == 114){echo 'selected="selected"';} ?> value="114">MDV (960)</option>
                            <option <?php if($member_details[0]['country_code'] == 115){echo 'selected="selected"';} ?> value="115">MEX (52)</option>
                            <option <?php if($member_details[0]['country_code'] == 116){echo 'selected="selected"';} ?> value="116">MHL (692)</option>
                            <option <?php if($member_details[0]['country_code'] == 117){echo 'selected="selected"';} ?> value="117">MKD (389)</option>
                            <option <?php if($member_details[0]['country_code'] == 118){echo 'selected="selected"';} ?> value="118">MLI (223)</option>
                            <option <?php if($member_details[0]['country_code'] == 119){echo 'selected="selected"';} ?> value="119">MLT (356)</option>
                            <option <?php if($member_details[0]['country_code'] == 120){echo 'selected="selected"';} ?> value="120">MMR (95)</option>
                            <option <?php if($member_details[0]['country_code'] == 121){echo 'selected="selected"';} ?> value="121">MNE (382)</option>
                            <option <?php if($member_details[0]['country_code'] == 122){echo 'selected="selected"';} ?> value="122">MNG (976)</option>
                            <option <?php if($member_details[0]['country_code'] == 123){echo 'selected="selected"';} ?> value="123">MOZ (258)</option>
                            <option <?php if($member_details[0]['country_code'] == 124){echo 'selected="selected"';} ?> value="124">MRT (222)</option>
                            <option <?php if($member_details[0]['country_code'] == 125){echo 'selected="selected"';} ?> value="125">MTQ (596)</option>
                            <option <?php if($member_details[0]['country_code'] == 126){echo 'selected="selected"';} ?> value="126">MUS (230)</option>
                            <option <?php if($member_details[0]['country_code'] == 127){echo 'selected="selected"';} ?> value="127">MWI (265)</option>
                            <option <?php if($member_details[0]['country_code'] == 128){echo 'selected="selected"';} ?> value="128">MYS (60)</option>
                            <option <?php if($member_details[0]['country_code'] == 129){echo 'selected="selected"';} ?> value="129">MYT (269)</option>
                            <option <?php if($member_details[0]['country_code'] == 130){echo 'selected="selected"';} ?> value="130">NAM (264)</option>
                            <option <?php if($member_details[0]['country_code'] == 131){echo 'selected="selected"';} ?> value="131">NCL (687)</option>
                            <option <?php if($member_details[0]['country_code'] == 132){echo 'selected="selected"';} ?> value="132">NER (227)</option>
                            <option <?php if($member_details[0]['country_code'] == 133){echo 'selected="selected"';} ?> value="133">NGA (234)</option>
                            <option <?php if($member_details[0]['country_code'] == 134){echo 'selected="selected"';} ?> value="134">NIC (505)</option>
                            <option <?php if($member_details[0]['country_code'] == 135){echo 'selected="selected"';} ?> value="135">NIU (683)</option>
                            <option <?php if($member_details[0]['country_code'] == 136){echo 'selected="selected"';} ?> value="136">NLD (31)</option>
                            <option <?php if($member_details[0]['country_code'] == 137){echo 'selected="selected"';} ?> value="137">NOR (47)</option>
                            <option <?php if($member_details[0]['country_code'] == 138){echo 'selected="selected"';} ?> value="138">NPL (977)</option>
                            <option <?php if($member_details[0]['country_code'] == 139){echo 'selected="selected"';} ?> value="139">NRU (674)</option>
                            <option <?php if($member_details[0]['country_code'] == 140){echo 'selected="selected"';} ?> value="140">NZL (64)</option>
                            <option <?php if($member_details[0]['country_code'] == 141){echo 'selected="selected"';} ?> value="141">OMN (968)</option>
                            <option <?php if($member_details[0]['country_code'] == 142){echo 'selected="selected"';} ?> value="142">PAK (92)</option>
                            <option <?php if($member_details[0]['country_code'] == 143){echo 'selected="selected"';} ?> value="143">PAN (507)</option>
                            <option <?php if($member_details[0]['country_code'] == 144){echo 'selected="selected"';} ?> value="144">PCN (64)</option>
                            <option <?php if($member_details[0]['country_code'] == 145){echo 'selected="selected"';} ?> value="145">PER (51)</option>
                            <option <?php if($member_details[0]['country_code'] == 146){echo 'selected="selected"';} ?> value="146">PHL (63)</option>
                            <option <?php if($member_details[0]['country_code'] == 147){echo 'selected="selected"';} ?> value="147">PLW (680)</option>
                            <option <?php if($member_details[0]['country_code'] == 148){echo 'selected="selected"';} ?> value="148">PNG (675)</option>
                            <option <?php if($member_details[0]['country_code'] == 149){echo 'selected="selected"';} ?> value="149">POL (48)</option>
                            <option <?php if($member_details[0]['country_code'] == 150){echo 'selected="selected"';} ?> value="150">PRT (351)</option>
                            <option <?php if($member_details[0]['country_code'] == 151){echo 'selected="selected"';} ?> value="151">PRY (595)</option>
                            <option <?php if($member_details[0]['country_code'] == 152){echo 'selected="selected"';} ?> value="152">PYF (689)</option>
                            <option <?php if($member_details[0]['country_code'] == 153){echo 'selected="selected"';} ?> value="153">QAT (974)</option>
                            <option <?php if($member_details[0]['country_code'] == 154){echo 'selected="selected"';} ?> value="154">REU (262)</option>
                            <option <?php if($member_details[0]['country_code'] == 155){echo 'selected="selected"';} ?> value="155">ROM (40)</option>
                            <option <?php if($member_details[0]['country_code'] == 156){echo 'selected="selected"';} ?> value="156">RUS (7)</option>
                            <option <?php if($member_details[0]['country_code'] == 157){echo 'selected="selected"';} ?> value="157">RWA (250)</option>
                            <option <?php if($member_details[0]['country_code'] == 158){echo 'selected="selected"';} ?> value="158">SAU (966)</option>
                            <option <?php if($member_details[0]['country_code'] == 159){echo 'selected="selected"';} ?> value="159">SDN (249)</option>
                            <option <?php if($member_details[0]['country_code'] == 160){echo 'selected="selected"';} ?> value="160">SEN (221)</option>
                            <option <?php if($member_details[0]['country_code'] == 161){echo 'selected="selected"';} ?> value="161">SGP (65)</option>
                            <option <?php if($member_details[0]['country_code'] == 162){echo 'selected="selected"';} ?> value="162">SHN (290)</option>
                            <option <?php if($member_details[0]['country_code'] == 163){echo 'selected="selected"';} ?> value="163">SJM (47)</option>
                            <option <?php if($member_details[0]['country_code'] == 164){echo 'selected="selected"';} ?> value="164">SLB (677)</option>
                            <option <?php if($member_details[0]['country_code'] == 165){echo 'selected="selected"';} ?> value="165">SLE (232)</option>
                            <option <?php if($member_details[0]['country_code'] == 166){echo 'selected="selected"';} ?> value="166">SLV (503)</option>
                            <option <?php if($member_details[0]['country_code'] == 167){echo 'selected="selected"';} ?> value="167">SMR (378)</option>
                            <option <?php if($member_details[0]['country_code'] == 168){echo 'selected="selected"';} ?> value="168">SOM (252)</option>
                            <option <?php if($member_details[0]['country_code'] == 169){echo 'selected="selected"';} ?> value="169">SPM (508)</option>
                            <option <?php if($member_details[0]['country_code'] == 170){echo 'selected="selected"';} ?> value="170">SRB (381)</option>
                            <option <?php if($member_details[0]['country_code'] == 171){echo 'selected="selected"';} ?> value="171">STP (239)</option>
                            <option <?php if($member_details[0]['country_code'] == 172){echo 'selected="selected"';} ?> value="172">SUR (597)</option>
                            <option <?php if($member_details[0]['country_code'] == 173){echo 'selected="selected"';} ?> value="173">SVK (421)</option>
                            <option <?php if($member_details[0]['country_code'] == 174){echo 'selected="selected"';} ?> value="174">SVN (386)</option>
                            <option <?php if($member_details[0]['country_code'] == 175){echo 'selected="selected"';} ?> value="175">SWE (46)</option>
                            <option <?php if($member_details[0]['country_code'] == 176){echo 'selected="selected"';} ?> value="176">SWZ (268)</option>
                            <option <?php if($member_details[0]['country_code'] == 177){echo 'selected="selected"';} ?> value="177">SYC (248)</option>
                            <option <?php if($member_details[0]['country_code'] == 178){echo 'selected="selected"';} ?> value="178">SYR (963)</option>
                            <option <?php if($member_details[0]['country_code'] == 179){echo 'selected="selected"';} ?> value="179">TCD (235)</option>
                            <option <?php if($member_details[0]['country_code'] == 180){echo 'selected="selected"';} ?> value="180">TGO (228)</option>
                            <option <?php if($member_details[0]['country_code'] == 181){echo 'selected="selected"';} ?> value="181">THA (66)</option>
                            <option <?php if($member_details[0]['country_code'] == 182){echo 'selected="selected"';} ?> value="182">TJK (992)</option>
                            <option <?php if($member_details[0]['country_code'] == 183){echo 'selected="selected"';} ?> value="183">TKL (690)</option>
                            <option <?php if($member_details[0]['country_code'] == 184){echo 'selected="selected"';} ?> value="184">TKM (993)</option>
                            <option <?php if($member_details[0]['country_code'] == 185){echo 'selected="selected"';} ?> value="185">TLS (670)</option>
                            <option <?php if($member_details[0]['country_code'] == 186){echo 'selected="selected"';} ?> value="186">TON (676)</option>
                            <option <?php if($member_details[0]['country_code'] == 187){echo 'selected="selected"';} ?> value="187">TUN (216)</option>
                            <option <?php if($member_details[0]['country_code'] == 188){echo 'selected="selected"';} ?> value="188">TUR (90)</option>
                            <option <?php if($member_details[0]['country_code'] == 189){echo 'selected="selected"';} ?> value="189">TUV (688)</option>
                            <option <?php if($member_details[0]['country_code'] == 190){echo 'selected="selected"';} ?> value="190">TWN (886)</option>
                            <option <?php if($member_details[0]['country_code'] == 191){echo 'selected="selected"';} ?> value="191">TZA (255)</option>
                            <option <?php if($member_details[0]['country_code'] == 192){echo 'selected="selected"';} ?> value="192">UGA (256)</option>
                            <option <?php if($member_details[0]['country_code'] == 193){echo 'selected="selected"';} ?> value="193">UKR (380)</option>
                            <option <?php if($member_details[0]['country_code'] == 194){echo 'selected="selected"';} ?> value="194">URY (598)</option>
                            <option <?php if($member_details[0]['country_code'] == 195){echo 'selected="selected"';} ?> value="195">USA (1)</option>
                            <option <?php if($member_details[0]['country_code'] == 196){echo 'selected="selected"';} ?> value="196">UZB (998)</option>
                            <option <?php if($member_details[0]['country_code'] == 197){echo 'selected="selected"';} ?> value="197">VEN (58)</option>
                            <option <?php if($member_details[0]['country_code'] == 198){echo 'selected="selected"';} ?> value="198">VNM (84)</option>
                            <option <?php if($member_details[0]['country_code'] == 199){echo 'selected="selected"';} ?> value="199">VUT (678)</option>
                            <option <?php if($member_details[0]['country_code'] == 200){echo 'selected="selected"';} ?> value="200">WLF (681)</option>
                            <option <?php if($member_details[0]['country_code'] == 201){echo 'selected="selected"';} ?> value="201">WSM (684)</option>
                            <option <?php if($member_details[0]['country_code'] == 202){echo 'selected="selected"';} ?> value="202">XKX (383)</option>
                            <option <?php if($member_details[0]['country_code'] == 203){echo 'selected="selected"';} ?> value="203">YEM (967)</option>
                            <option <?php if($member_details[0]['country_code'] == 204){echo 'selected="selected"';} ?> value="204">ZAF (27)</option>
                            <option <?php if($member_details[0]['country_code'] == 205){echo 'selected="selected"';} ?> value="205">ZMB (260)</option>
                            <option <?php if($member_details[0]['country_code'] == 206){echo 'selected="selected"';} ?> value="206">ZWE (263)</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="form-group">
                        <strong>Country</strong>
                        <input type="text" class="form-control" name="country" id="country" placeholder="Enter country name" required="" value="<?php echo $member_details[0]['country']; ?>">
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group">
                        <strong>Phone</strong> <span id="phone-error"></span>
                        <input data-parsley-type="number" type="number" name="number" id="number" class="form-control" required="" placeholder="Enter only numbers" onblur="checkMobile(this.value);" value="<?php echo $member_details[0]['mobile_no']; ?>">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <strong>Gender</strong>
                        <select name="gender" id="gender" class="form-control" required>
                            <option value="">---select---</option>
                            <option <?php if($member_details[0]['gender'] == "M"){echo 'selected="selected"';} ?> value="M">Male</option>
                            <option <?php if($member_details[0]['gender'] == "F"){echo 'selected="selected"';} ?> value="F">Female</option>
                            <option <?php if($member_details[0]['gender'] == "O"){echo 'selected="selected"';} ?> value="O">Other</option>
                        </select>
                    </div>
                </div>
                <!-- <div class="col-lg-4">
                    <div class="form-group">
                        <strong>Country</strong>
                        <input type="text" class="form-control" name="country" id="country" placeholder="Enter country name" required="" value="<?php echo $member_details[0]['country']; ?>">
                    </div>
                </div> -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <strong>State</strong>
                        <input type="text" class="form-control" name="state" id="state" placeholder="Enter state name" required="" value="<?php echo $member_details[0]['state']; ?>">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <strong>City</strong>
                        <input type="text" class="form-control" name="city" id="city" placeholder="Enter city name" required="" value="<?php echo $member_details[0]['city']; ?>">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <strong>Pincode</strong>
                        <input type="number" class="form-control" name="pincode" id="pincode" placeholder="Enter pincode" required="" value="<?php echo $member_details[0]['pin']; ?>">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <strong>Photo</strong>
                        <input class="form-control" type="file" id="photo" name="photo" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <strong>Transection Pin</strong>
                        <input type="number" class="form-control" name="transection_pin" id="transection_pin" placeholder="Enter pincode" required="" value="<?php echo $member_details[0]['transaction_pin']; ?>">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <strong>Password</strong>
                        <input type="number" class="form-control" name="password" id="password" placeholder="Enter pincode" required="" value="<?php echo $member_details[0]['password']; ?>">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <strong>Address</strong>
                        <textarea class="form-control" name="address" id="address" required rows="2"><?php echo $member_details[0]['address']; ?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-area pt-3" style="float: right;">
            <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
        </div>
    </div>        
</form>