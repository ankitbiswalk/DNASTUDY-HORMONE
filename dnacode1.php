CLASS CA 3 <h2>
NAME : ANKIT BISWAL K.
REGISTRATION NO. 12015242.
PHP - PROJECT </h2>
<!DOCTYPE html>
<html>
<head>
    <style>
        .container {
            display: flex;
            justify-content: space-evenly;
        }

        .column {
            width: 45%;
            border: 1px solid #ccc;
            padding: 20px;
            margin: 10px;
            text-align: left; /* Align content to the left */
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Visualization of DNA with Ethidium Bromide</h1>

    <div class="container">
        <div class="column">
            <h2>Materials and Equipment</h2>
            <ul>
                <li>Ethidium bromide solution</li>
                <li>Agarose gel containing DNA samples</li>
                <li>Gel electrophoresis apparatus</li>
                <li>UV transilluminator or gel documentation system</li>
                <li>Appropriate safety equipment, such as gloves and eye protection</li>
            </ul>
        </div>

        <div class="column">
            <h2>Procedure</h2>
            <ol>
                <li>Prepare an Agarose Gel:
                    <ul>
                        <li>Prepare an agarose gel with wells to load your DNA samples. The percentage of agarose in the gel will depend on the size range of DNA fragments you are analyzing. Common percentages are 0.7%, 1%, or 1.5% agarose gels.</li>
                    </ul>
                </li>
                <!-- ... (remaining procedure steps) ... -->
                <ol>
                    <li>Prepare an Agarose Gel:
                        <ul>
                            <li>Prepare an agarose gel with wells to load your DNA samples. The percentage of agarose in the gel will depend on the size range of DNA fragments you are analyzing. Common percentages are 0.7%, 1%, or 1.5% agarose gels.</li>
                        </ul>
                    </li>
                    <li>Load DNA Samples:
                        <ul>
                            <li>Mix your DNA samples with a loading dye (e.g., bromophenol blue) to make the samples visible during loading.</li>
                            <li>Load the DNA samples into the wells of the agarose gel.</li>
                        </ul>
                    </li>
                    <li>Electrophoresis:
                        <ul>
                            <li>Run electrophoresis to separate DNA fragments based on size. Apply an electric current to the gel for a suitable duration based on your gel percentage and the expected DNA fragment sizes. Smaller fragments move faster and will migrate further through the gel.</li>
                        </ul>
                    </li>
                    <li>Staining with Ethidium Bromide:
                        <ul>
                            <li>After electrophoresis, soak the gel in a container filled with a solution of ethidium bromide. The ethidium bromide solution should be at a concentration of around 0.5 µg/ml.</li>
                            <li>Allow the gel to soak in the ethidium bromide solution for 20-30 minutes to ensure proper staining.</li>
                        </ul>
                    </li>
                    <li>Visualize Under UV Light:
                        <ul>
                            <li>Place the stained gel on a UV transilluminator or gel documentation system.</li>
                            <li>When exposed to UV light, DNA fragments containing A, T, G, and C bases will fluoresce. Ethidium bromide binds to the DNA molecules and emits orange-red fluorescence when exposed to UV light.</li>
                        </ul>
                    </li>
                    <li>Image Documentation:
                        <ul>
                            <li>Use a camera or imaging system to capture an image of the gel with the fluorescent DNA bands. These bands represent the DNA fragments in your samples.</li>
                        </ul>
                    </li>
                    <li>Safety Precautions:
                        <ul>
                            <li>Always wear appropriate safety equipment, such as gloves and eye protection, when working with ethidium bromide.</li>
                            <li>Handle ethidium bromide with care, and dispose of any waste or materials contaminated with ethidium bromide according to your laboratory's safety protocols.</li>
                        </ul>
                    </li>
                </ol>
            </ol>
        </div>
    </div>
</body>
</html>

PART 1------------------------------
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
            background-color: #333;
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

        label, input {
            margin: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 5px;
        }

        input[type="number"] {
            width: 50px;
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
    </style>
</head>
<body>
    <h1 style="background-color: #222;">λb2b5c DNA-COVALENTLY: 36°helix is β-configuration</h1>
    <div class="container">
        <form method="post">
            <label for="percentageA">A:</label>
            <input type="number" id="percentageA" name="percentageA" min="0" max="100" step="1" required>% 
            <label for="percentageT">T:</label>
            <input type a="number" id="percentageT" name="percentageT" min="0" max="100" step="1" required>%
            <label for="percentageC">C:</label>
            <input type="number" id="percentageC" name="percentageC" min="0" max="100" step="1" required>%
            <label for="percentageG">G:</label>
            <input type="number" id="percentageG" name="percentageG" min="0" max="100" step="1" required>%
            <button type="submit" name="generate">Generate Combinations</button>
        </form>

        <?php
        if (isset($_POST['generate'])) {
            $percentageA = $_POST['percentageA'];
            $percentageT = $_POST['percentageT'];
            $percentageC = $_POST['percentageC'];
            $percentageG = $_POST['percentageG'];

            $total = $percentageA + $percentageT + $percentageC + $percentageG;

            if ($total !== 100) {
                echo "Percentages must add up to 100%";
            } else {
                $combinations = generateCombinations($percentageA, $percentageT, $percentageC, $percentageG);

                echo "<table>";
                echo "<tr><th>Combination</th></tr>";
                foreach ($combinations as $key => $combination) {
                    echo "<tr><td><span class='generated-combination'>λb2b5c DNA covalently " . ($key + 1) . ": $combination</span></td></tr>";
                }
                echo "</table>";
            }
        }

        function generateCombinations($percentageA, $percentageT, $percentageC, $percentageG) {
            $combinations = [];

            for ($i = 0; $i < 5; $i++) {
                $combination = '';
                for ($j = 0; $j < 100; $j++) {
                    $random = mt_rand(1, 100);
                    if ($random <= $percentageA) {
                        $combination .= "A";
                    } elseif ($random <= $percentageA + $percentageT) {
                        $combination .= "T";
                    } elseif ($random <= $percentageA + $percentageT + $percentageC) {
                        $combination .= "C";
                    } else {
                        $combination .= "G";
                    }
                }
                $combinations[] = $combination;
            }

            return $combinations;
        }
        ?>
    </div>
</body>
</html>

NOTE : OUT OF 5 COMBINATIONS PREFER TO CHOOSE STRAND 2 OR 3 (RATIO SATISFIES THE VALUE RELATED TO PERSISTENT DEPRESSIVE DISORDER /RELATED TO MOOD SWINGS).

PART 2----------------------------------- <br> <br>

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
            background-color: #333;
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

        label, input {
            margin: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 5px;
        }

        input[type="number"] {
            width: 50px;
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
    </style>
</head>
<body>
    <h1 style="background-color: #222;">DNA to Binary Converter and DNA Combinations Generator</h1>
    <div class="container">
        <form method="post">
            <label for="dnaInput">Enter DNA sequence:</label>
            <input type="text" id="dnaInput" name="dnaInput" placeholder="Enter DNA sequence" required>
            <label for="percentageA">A:</label>
            <input type="number" id="percentageA" name="percentageA" min="0" max="100" step="1" required>% 
            <label for="percentageT">T:</label>
            <input type="number" id="percentageT" name="percentageT" min="0" max="100" step="1" required>%
            <label for="percentageC">C:</label>
            <input type="number" id="percentageC" name="percentageC" min="0" max="100" step="1" required>%
            <label for="percentageG">G:</label>
            <input type="number" id="percentageG" name="percentageG" min="0" max="100" step="1" required>%
          <br>  <button type="submit" name="convert">Convert and Generate Combinations</button>
        </form>

        <?php
        if (isset($_POST['convert'])) {
            $dnaInput = strtoupper($_POST['dnaInput']);
            $percentageA = $_POST['percentageA'];
            $percentageT = $_POST['percentageT'];
            $percentageC = $_POST['percentageC'];
            $percentageG = $_POST['percentageG'];

            $total = $percentageA + $percentageT + $percentageC + $percentageG;

            if ($total !== 100) {
                echo "Percentages must add up to 100%";
            } else {
                $binaryResult = [];
                $aCount = 0;
                $tCount = 0;
                $cCount = 0;
                $gCount = 0;

                for ($i = 0; $i < strlen($dnaInput); $i++) {
                    switch ($dnaInput[$i]) {
                        case 'A':
                            $binaryResult[] = '00';
                            $aCount++;
                            break;
                        case 'T':
                            $binaryResult[] = '01';
                            $tCount++;
                            break;
                        case 'G':
                            $binaryResult[] = '10';
                            $gCount++;
                            break;
                        case 'C':
                            $binaryResult[] = '11';
                            $cCount++;
                            break;
                    }
                }

                $binaryString = implode('', $binaryResult);
                $aPercentage = ($aCount / strlen($dnaInput)) * 100;
                $tPercentage = ($tCount / strlen($dnaInput)) * 100;
                $cPercentage = ($cCount / strlen($dnaInput)) * 100;
                $gPercentage = ($gCount / strlen($dnaInput)) * 100;

                echo "<p>Binary: $binaryString</p>";
                echo "<p>A: $aPercentage% T: $tPercentage% C: $cPercentage% G: $gPercentage%</p>";

                // Generate DNA combinations
                $combinations = [];
                for ($i = 0; $i < strlen($dnaInput); $i++) {
                    $combination = generateRandomCombination($percentageA, $percentageT, $percentageC, $percentageG);
                    $combinations[] = $combination;
                }

                echo "<table>";
                echo "<tr><th>Combination</th>";
                foreach ($combinations as $key => $value) {
                    echo "<th>Combination " . ($key + 1) . "</th>";
                }
                echo "</tr>";
                for ($i = 0; $i < strlen($dnaInput); $i++) {
                    echo "<tr><td>Strand " . ($i + 1) . "</td>";
                    foreach ($combinations as $combination) {
                        echo "<td>" . $combination[$i] . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
        }

        function generateRandomCombination($percentageA, $percentageT, $percentageC, $percentageG) {
            $randomCombination = '';
            for ($i = 0; $i < 100; $i++) {
                $random = mt_rand(1, 100);
                if ($random <= $percentageA) {
                    $randomCombination .= "A";
                } elseif ($random <= $percentageA + $percentageT) {
                    $randomCombination .= "T";
                } elseif ($random <= $percentageA + $percentageT + $percentageC) {
                    $randomCombination .= "C";
                } else {
                    $randomCombination .= "G";
                }
            }
            return $randomCombination;
        }
        ?>
    </div>
</body>
</html>

PART 3-------------------------

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
            background-color: #333;
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

        label, input {
            margin: 10px;
        }

        input[type="text"] {
            width: 100%;
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
    </style>
</head>
<body>
    <h1 style="background-color: #222;">DNA Sequence Analysis</h1>
    <div class="container">
        <form method="post">
            <label for="dnaSequence">Enter DNA Sequence (A, T, C, G):</label>
            <input type="text" id="dnaSequence" name="dnaSequence" required>
            <button type="submit" name="analyze">Analyze DNA</button>
        </form>

        <?php
        if (isset($_POST['analyze'])) {
            $dnaSequence = strtoupper($_POST['dnaSequence']);
            $sequenceLength = strlen($dnaSequence);

            if ($sequenceLength > 0) {
                $transmission = substr($dnaSequence, 0, 16);
                $synopsis = substr($dnaSequence, 16, 4);
                $hormone = substr($dnaSequence, 20, 16);
                $other = substr($dnaSequence, 36);

                // Function to calculate the percentage of each base
                function calculatePercentage($sequence, $base) {
                    $baseCount = substr_count($sequence, $base);
                    $percentage = ($baseCount / strlen($sequence)) * 100;
                    return "Number of $base = $baseCount : $percentage%";
                }

                echo "<table border='1'>";
                echo "<tr><th>Transmission - Neural CODE</th><th>Synopsis CODE</th><th>Hormone CODE</th><th>Other Functional CODE</th></tr>";
                echo "<tr><td>$transmission</td><td>$synopsis</td><td>$hormone</td><td>$other</td></tr>";
                echo "<tr><td>" . calculatePercentage($transmission, 'A') . "</td><td>" . calculatePercentage($synopsis, 'A') . "</td><td>" . calculatePercentage($hormone, 'A') . "</td><td>" . calculatePercentage($other, 'A') . "</td></tr>";
                echo "<tr><td>" . calculatePercentage($transmission, 'T') . "</td><td>" . calculatePercentage($synopsis, 'T') . "</td><td>" . calculatePercentage($hormone, 'T') . "</td><td>" . calculatePercentage($other, 'T') . "</td></tr>";
                echo "<tr><td>" . calculatePercentage($transmission, 'C') . "</td><td>" . calculatePercentage($synopsis, 'C') . "</td><td>" . calculatePercentage($hormone, 'C') . "</td><td>" . calculatePercentage($other, 'C') . "</td></tr>";
                echo "<tr><td>" . calculatePercentage($transmission, 'G') . "</td><td>" . calculatePercentage($synopsis, 'G') . "</td><td>" . calculatePercentage($hormone, 'G') . "</td><td>" . calculatePercentage($other, 'G') . "</td></tr>";
                echo "</table>";
            }
        }
        ?>
    </div>
</body>
</html>

PART 4-----------------------------

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
            background-color: #333;
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

        label, input {
            margin: 10px;
        }

        input[type="text"] {
            width: 100%;
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

        p {
            margin: 10px;
            font-weight: bold;
        }

        p.red {
            color: red;
        }

        p.blue {
            color: blue;
        }
    </style>
</head>
<body>
    <h1 style="background-color: #222;">Serotonin Level Calculator</h1>
    <div class="container">
        <form method="post">
            <label for="blood_pH">Blood pH (6.0 - 7.5):</label>
            <input type="text" id="blood_pH" name="blood_pH" required>
            <br>
            <label for="nacl_level">Blood NaCl level (0.2 - 1.5):</label>
            <input type="text" id="nacl_level" name="nacl_level" required>
            <br>
            <button type="submit" name="calculate">Calculate Serotonin Level</button>
        </form>

        <?php
        if (isset($_POST['calculate'])) {
            $blood_pH = floatval($_POST['blood_pH']);
            $nacl_level = floatval($_POST['nacl_level']);

            function calculateSerotoninLevel($blood_pH, $nacl_level) {
                if ($blood_pH >= 6.0 && $blood_pH <= 7.0 && $nacl_level >= 0.2 && $nacl_level <= 1.2) {
                    return 163; // ng/mL
                } elseif ($blood_pH >= 7.1 && $blood_pH <= 7.5 && $nacl_level >= 1.2 && $nacl_level <= 1.5) {
                    return 206; // ng/mL
                } elseif ($blood_pH < 6.0 || ($blood_pH > 7.5 && $nacl_level > 1.5)) {
                    return 306; // ng/mL (Alert)
                } else {
                    return 200; // Default value
                }
            }

            $serotoninLevel = calculateSerotoninLevel($blood_pH, $nacl_level);

            echo "<table>";
            echo "<tr><th>Parameter</th><th>Value</th></tr>";
            echo "<tr><td>Blood pH</td><td>$blood_pH</td></tr>";
            echo "<tr><td>Blood NaCl level</td><td>$nacl_level</td></tr>";
            echo "<tr><td>Serotonin Level</td><td>$serotoninLevel ng/mL</td></tr>";
            echo "</table>";

            if ($serotoninLevel < 101) {
                echo "<p class='red'>Serotonin level is below 101 ng/mL. It's in the fatigue range. Please consider visiting a doctor.</p>";
            } elseif ($serotoninLevel > 203) {
                echo "<p class='red'>Serotonin level is beyond 203 ng/mL. It's considered harmful.</p>";
            } elseif ($serotoninLevel >= 101 && $serotoninLevel <= 160) {
                echo "<p class='blue'>Serotonin level is between 101 and 160 ng/mL. Consider consuming more amine-related foods.</p>";
            } elseif ($serotoninLevel >= 210 && $serotoninLevel <= 300) {
                echo "<p class='blue'>Serotonin level is between 210 and 300 ng/mL. Consider reducing NaCl intake.</p>";
            } else {
                echo "<p>Serotonin level is in the safe range.</p>";
            }
        }
        ?>
    </div>
</body>
</html>

PART 5--------------------------

