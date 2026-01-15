<?php 
//NAME: Zabala, Jan Chrysler S.
//SECTION: CYB-201
//SUBJECT: 6DWEB
//DATE: January 15, 2026

    include 'addons/includes/header.php';

    $ChangingCC = 'The you today is made only today!';
    $CountingCW = 'Believing in yourself is confidence!';
    $RemoveRC = ' There is always room for improvement!';
    $Others = ' You have yourself within!';
    $OtherNumber = '192.168';
    $NameArray = ['Jc', 'Sean', 'Harvey', 'Ian', 'Kenth'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Zabala - Builtin_Functions</title>
    <link rel="stylesheet" href="addons/css/styles.css?v=1">
</head>
<body>
    <h2>    Changing the Case of Characters: String = <?= $ChangingCC ?></h2>
    <table>
        <thead>
            <tr>
                <th>PHP Built-in Functions</th>
                <th>Functions</th>
                <th>Result</th>
            </tr>
        </thead>  
        <tbody>
            <tr>
                <td>Lowercase:</td>
                <td>strtolower()</td>
                <td><?= strtolower($ChangingCC) ?></td>
            </tr>
            <tr>
                <td>Uppercase:</td>
                <td>strtoupper()</td>
                <td><?= strtoupper($ChangingCC) ?></td>
            </tr>
            <tr>
                <td>Capitalize:</td>
                <td>ucwords()</td>
                <td><?= ucwords($ChangingCC) ?></td>
            </tr>
        </tbody>  
    </table>

    <h2>    Counting Characters and Words: String = <?= $CountingCW ?></h2>
    <table>
        <thead>
                <tr>
                    <th>PHP Built-in Functions</th>
                    <th>Functions</th>
                    <th>Result</th>
                </tr>
        </thead>
        <tbody>
            <tr>
                <td>Number of Characters:</td>
                <td>strlen()</td>
                <td><?= strlen($CountingCW) ?></td>
            </tr>
            <tr>
                <td>Number of Words:</td>
                <td>str_word_count()</td>
                <td><?= str_word_count($CountingCW) ?></td>
            </tr>
        </tbody>
    </table>

    <h2>    Removing and Replacing Characters: String = <?= $RemoveRC ?></h2>
    <table>
        <thead>
                <tr>
                    <th>PHP Built-in Functions</th>
                    <th>Functions</th>
                    <th>Result</th>
                </tr>
        </thead>
        <tbody>
            <tr>
                <td>Remove whitespaces from left:</td>
                <td>ltrim()</td>
                <td><?= ltrim($RemoveRC) ?></td>
            </tr>
            <tr>
                <td>Remove whitespaces from right:</td>
                <td>rtrim()</td>
                <td><?= rtrim($RemoveRC) ?></td>
            </tr>
            <tr>
                <td>Remove whitespace from left and right:</td>
                <td>trim()</td>
                <td><?= trim($RemoveRC) ?></td>
            </tr>
            <tr>
                <td>String replace:</td>
                <td>str_replace()</td>
                <td><?= str_replace('for', '4', $RemoveRC) ?></td>
            </tr>
            <tr>
                <td>String ireplace:</td>
                <td>str_ireplace()</td>
                <td><?= str_ireplace('FOR', '4',$RemoveRC) ?></td>
            </tr>
            <tr>
                <td>String Repeat:</td>
                <td>str_repeat()</td>
                <td><?= str_repeat($RemoveRC, 2) ?></td>
            </tr>
        </tbody>
    </table>

    <h2>    OTHER BUILT-IN FUNCTIONS: String = <?= $Others ?> | Number = <?= $OtherNumber ?> | Array = <?= implode(', ', $NameArray) ?></h2>
    <table>
        <thead>
                <tr>
                    <th>PHP Built-in Functions</th>
                    <th>Functions</th>
                    <th>Result</th>
                </tr>
        </thead>
        <tbody>
            <tr>
                <td>Returns position of first match for substring (case-sensitive). If offset is used, it only looks after this character position:</td>
                <td>strpos()</td>
                <td><?= strpos($Others, 've') ?></td>
            </tr>
            <tr>
                <td>Returns characters from the position specified in $offset to the end of the string. If the $characters parameter is used, it specifies the number of  characters to return after $offset:</td>
                <td>substr()</td>
                <td><?= substr($Others, 5, 5) ?></td>
            </tr>
            <tr>
                <td>Returns the number of characters in the string:</td>
                <td>mb_strlen()</td>
                <td><?= mb_strlen($Others) ?></td>
            </tr>
            <tr>
                <td>Returns the position of the first place the substring is found (case-sensitive). If an $offset is specified, it only looks after this character position:</td>
                <td>mb_strpos()</td>
                <td><?= mb_strpos($Others, 'yourself') ?></td>
            </tr>
            <tr>
                <td>Looks for a matching pattern in a string. It returns 1 if a match was found, 0 if no match was found, false if an error occurred:</td>
                <td>preg_match()</td>
                <td><?= preg_match('/have/', $Others) ?></td>
            </tr>
            <tr>
                <td>Replaces specified characters with an alternative string. It is similar to find and replace tool in a word processor. It returns the string with characters replaced or null if an error occurred. To delete characters, replace them with a black string:</td>
                <td>preg_replace()</td>
                <td><?= preg_replace('/You/', "U", $Others) ?></td>
            </tr>
            <tr>
                <td>Rounds floating point numbers up or down:</td>
                <td>round()</td>
                <td><?= round($OtherNumber, 2) ?></td>
            </tr>
            <tr>
                <td>Rounds a number up to the nearest integer (whole number):</td>
                <td>ceil()</td>
                <td><?= ceil($OtherNumber) ?></td>
            </tr>
            <tr>
                <td>Returns the square root of a number:</td>
                <td>sqrt()</td>
                <td><?= sqrt($OtherNumber) ?></td>
            </tr>
            <tr>
                <td>Returns the number of items in the array:</td>
                <td>count()</td>
                <td><?= count($NameArray) ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
<?php include 'addons/includes/footer.php'; ?>


