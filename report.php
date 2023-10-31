CLASS CA 3<h2>
NAME : ANKIT BISWAL K.
REGISTRATION NO. 12015242.
PHP - PROJECT </h2>
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: #222;
            color: #fff;
            padding: 20px 0;
            margin: 0;
        }

        .container {
            max-width: 100%;
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        label, input, select {
            margin: 10px;
        }

        input[type="text"],
        input[type="number"],
        select {
            padding: 5px;
        }

        button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #000;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        th:first-child {
            text-align: left;
        }

        /* Style for generated combinations */
        .generated-combination {
            font-size: 24px;
            color: #333;
        }

        .qr-code {
            margin: 20px;
        }
    </style>
</head>
<body>
    <h1>ID Card Generator</h1>
    <div class="container">
        <form method="post">
            <label for="username">Enter Username:</label>
            <input type="text" name="username" id="username" required><br>

            <label for="age">Enter Age:</label>
            <input type="number" name="age" id="age" required><br>

            <label for="gender">Select Gender:</label>
            <select name="gender" id="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select><br>

            <label for="blood_group">Select Blood Group:</label>
            <select name="blood_group" id="blood_group">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select><br>

            <label for="dna_sequence">Enter DNA Sequence (ATCG-code):</label>
            <input type="text" name="dna_sequence" id="dna_sequence" required><br>

            <label for="serotonin_value">Enter Serotonin Value:</label>
            <input type="text" name="serotonin_value" id="serotonin_value" required><br>

            <input type="submit" value="Generate ID Card">
        </form>

        <div class="qr-code" id="qrcode"></div>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $age = $_POST["age"];
            $gender = $_POST["gender"];
            $blood_group = $_POST["blood_group"];
            $dna_sequence = $_POST["dna_sequence"];
            $serotonin_value = $_POST["serotonin_value"];

            $adrenaline_value = calculateAdrenaline($serotonin_value);
            $salt_level = calculateSaltLevel($serotonin_value);
            $stress_level = calculateStressLevel($serotonin_value);
            $alert_message = getAlertMessage($serotonin_value);

            displayIDCard($username, $age, $gender, $blood_group, $dna_sequence, $serotonin_value, $adrenaline_value, $salt_level, $stress_level, $alert_message);
        }

        function calculateAdrenaline($serotonin) {
            // Calculate adrenaline value based on serotonin
            // Implement your logic here
            if ($serotonin >= 300) {
                return 63.2;
            } elseif ($serotonin >= 250) {
                return 121.6;
            } elseif ($serotonin >= 160) {
                return 146;
            } elseif ($serotonin >= 80) {
                return 172.1;
            } else {
                return 0; // Handle other cases as needed
            }
        }

        function calculateSaltLevel($serotonin) {
            if ($serotonin > 200) {
                return "Na+: + ION (hyper), Cl-: - ION (hyper) Na2S2O3. 5H2O. k : N/A ";
            } elseif ($serotonin > 100) {
                return "Na+: + ION (hypo), Cl-: - ION (hypo) Na2S2O3. 5H2O. K : N/A";
            } else {
                return "Na+: + ION (good), Cl-: - ION (good) Na2S2O3. 5H2O. K : N/A";
            }
        }

        function calculateStressLevel($serotonin) {
            if ($serotonin > 200) {
                return "Cortisol-9,11,12,12-d4 | C21H30O5 | CID 46781064 (N/A)";
            } elseif ($serotonin > 100) {
                return "Cortisol-9,11,12,12-d4 | C21H30O5 | CID 46781064 (- Detected";
            } else {
                return "None";
            }
        }

        function getAlertMessage($serotonin) {
            // Get alert message based on serotonin
            // Implement your logic here
            if ($serotonin > 200) {
                return "REDUCE SALT - IODINE, DRINK WATER FREQUENTLY AT INTERVAL 3 HRS: 250";
            } elseif ($serotonin > 100) {
                return "CHECK-UP REQUIRED IMMEDIATE";
            } else {
                return "None";
            }
        }

        function displayIDCard($username, $age, $gender, $blood_group, $sequence, $serotonin, $adrenaline, $salt_level, $stress_level, $alert_message) {
            echo "<h2>ID Card</h2>";
            echo "<div style='border: 1px solid #000; width: 300px; padding: 10px;'>";
            echo "<p>Name: $username</p>";
            echo "<p>Age: $age</p>";
            echo "<p>Gender: $gender</p>";
            echo "<p>Blood Group: $blood_group</p>";
            echo "<p>DNA Sequence: $sequence</p>";
            echo "<p>Serotonin Value: $serotonin ng/mL</p>";
            echo "<p>Adrenaline Value: $adrenaline pg/mL</p>";
            echo "<p>Salt Level: $salt_level</p>";
            echo "<p>Stress Level: $stress_level</p>";
            echo "<p>Alert: $alert_message</p>";
            echo "</div>";
            if ($serotonin < 100 || $serotonin > 200) {
                echo "<p>Warning: Medical Emergency!</p>";
            }
        }
        ?>
    </div>
    <script type="text/javascript" src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <script>
        const qrcode = new QRCode(document.getElementById("qrcode"), {
            text: "AUTHORIZED AND PRESCRIBED BY 'PHP CLASS OFK20FA' : PROJECT ILLUSTRATED 2023 CA-3 @ankitbiswalk",
            width: 128,
            height: 128,
        });
    </script>
</body>
</html>

DATA SEROTONIN : https://www.ncbi.nlm.nih.gov/books/NBK545168/



<!-- for example : lets say im filling value: ATTCGCGCCTCGCTCGTCGCTAGATAGTAGATAG ; note:filling value should even orelse mention an warning filling value should within ATCG 
from the filling value it should take 4 value after 2 value such as in this tcgc mention A% T% G% C% and then the serotonin value should
like : FILL STRAND CODE : SAMPLE ATTCGCGCCTCGCTCGTCGCTAGATAGTAGATAG 
FILL SEROTONIN VALUE (ng/mL): IT SHOULD BE BETWEEN 0.2 TO 2.0
REPORT SHOULD PRINT BY ANALYSING ABOVE FILL : 
AMINE (-ve)CODE : TTC WHICH VALUE TAKEN FROM  3RD OF STRAND CODE TAKE VALE OF ALWAYS 3RD.
ADRENALINE VALUE : if serotonin is 300 then adrenaline should 63.2 pg/mL with this mention this too in red Selective Serotonin Reuptake Inhibitors (SSRIs): These medications, such as Prozac (fluoxetine), Zoloft (sertraline), and Lexapro (escitalopram), are commonly prescribed for depression and anxiety.
then it its between 250 to 299 then it will be 121.6 pg/mL  with this mention this too in red Serotonin-Norepinephrine Reuptake Inhibitors (SNRIs): Medications like Cymbalta (duloxetine) and Effexor (venlafaxine) affect both serotonin and norepinephrine levels and are used to treat depression and certain anxiety disorders.
if its between 160 to 249 then it will be 146 pg/mL with this mention this too in red Monoamine Oxidase Inhibitors (MAOIs): These are older antidepressants that can increase serotonin levels. Examples include Nardil (phenelzine) and Parnate (tranylcypromine). MAOIs have specific dietary restrictions and interactions, so they are prescribed less frequently.
if its between 80 to 160 then it will be 172.1 pg/mL with this mention this too in red Atypical Antidepressants: There are various atypical antidepressants, including Wellbutrin (bupropion) and Remeron (mirtazapine), which work differently than SSRIs and SNRIs and may influence serotonin and other neurotransmitters.

if its value is above or below this then generate error in your measurement / its medical emergency !
for this in table like structure if possible try make the result section report to come in table in php code 
and also generate result in qr code form using js code







Atypical Antidepressants: There are various atypical antidepressants, including Wellbutrin (bupropion) and Remeron (mirtazapine), which work differently than SSRIs and SNRIs and may influence serotonin and other neurotransmitters.

10 to 180 pg/mL (picograms per milliliter) -->
