<?php
error_reporting(0);

//      CONFIGURATION
$title = "Les couleurs";
$address = "index.html";
$randomizequestions = "yes"; // set up as "no" to show questions without randomization
//    END CONFIGURATION
// #########################################

$a = array(
        1 => array(
                0 => "Couleur du cheval blanc d'Henry IV",
                1 => "Blanc",
                2 => "Noir",
                3 => "Jaune",
                4 => "Rouge",
                5 => 1
        ),
        2 => array(
                0 => "Couleur des petits poids",
                1 => "Marron",
                2 => "Blanc",
                3 => "Vert",
                4 => "Jaune",
                5 => 3
        ),
        3 => array(
                0 => "Couleur du soleil",
                1 => "Violet",
                2 => "Blanc",
                3 => "Noir",
                4 => "Jaune",
                5 => 4
        ),
);

$max = 3;

$question = $_POST["question"];

if ($_POST["Randon"] == 0) {
        if ($randomizequestions == "yes") {
                $randval = mt_rand(1, $max);
        } else {
                $randval = 1;
        }
        $randval2 = $randval;
} else {
        $randval = $_POST["Randon"];
        $randval2 = $_POST["Randon"] + $question;
        if ($randval2 > $max) {
                $randval2 = $randval2 - $max;
        }
}

$ok = $_POST["ok"];

if ($question == 0) {
        $question = 0;
        $ok = 0;
        $percentaje = 0;
} else {
        $percentaje = Round(100 * $ok / $question);
}
?>

<HTML>

<HEAD>
        <TITLE>Multiple Choice Questions: <?php print $title; ?></TITLE>

        <SCRIPT LANGUAGE='JavaScript'>
                function Goahead(number) {
                        if (document.percentaje.response.value == 0) {
                                if (number == <?php print $a[$randval2][5]; ?>) {
                                        document.percentaje.response.value = 1
                                        document.percentaje.question.value++
                                        document.percentaje.ok.value++
                                } else {
                                        document.percentaje.response.value = 1
                                        document.percentaje.question.value++
                                }
                        }
                        if (number == <?php print $a[$randval2][5]; ?>) {
                                document.question.response.value = "Correct"
                        } else {
                                document.question.response.value = "Incorrect"
                        }
                }
        </SCRIPT>

</HEAD>

<BODY BGCOLOR=FFFFFF>


        <H1><?php print "$title"; ?></H1>
        <TABLE BORDER=0 CELLSPACING=5 WIDTH=500>

                <?php if ($question < $max) { ?>

                        <TR>
                                <TD ALIGN=RIGHT>
                                        <FORM METHOD=POST NAME="percentaje" ACTION="<?php print $URL; ?>">

                                                <BR>Pourcentage des réponses corrects: <?php print $percentaje; ?> %
                                                <BR><input type=submit value="Next >>">
                                                <input type=hidden name=response value=0>
                                                <input type=hidden name=question value=<?php print $question; ?>>
                                                <input type=hidden name=ok value=<?php print $ok; ?>>
                                                <input type=hidden name=Randon value=<?php print $randval; ?>>
                                                <br><?php print $question + 1; ?> / <?php print $max; ?>
                                        </FORM>
                                        <HR>
                                </TD>
                        </TR>

                        <TR>
                                <TD>
                                        <FORM METHOD=POST NAME="question" ACTION="">
                                                <?php print "<b>" . $a[$randval2][0] . "</b>"; ?>

                                                <BR>     <INPUT TYPE=radio NAME="option" VALUE="1" onClick=" Goahead (1);"><?php print $a[$randval2][1]; ?>
                                                <BR>     <INPUT TYPE=radio NAME="option" VALUE="2" onClick=" Goahead (2);"><?php print $a[$randval2][2]; ?>
                                                <?php if ($a[$randval2][3] != "") { ?>
                                                        <BR>     <INPUT TYPE=radio NAME="option" VALUE="3" onClick=" Goahead (3);"><?php print $a[$randval2][3];
                                                                                                                                } ?>
                                                <?php if ($a[$randval2][4] != "") { ?>
                                                        <BR>     <INPUT TYPE=radio NAME="option" VALUE="4" onClick=" Goahead (4);"><?php print $a[$randval2][4];
                                                                                                                                } ?>
                                                <BR>     <input type=text name=response size=8>


                                        </FORM>

                                <?php
                        } else {
                                ?>
                        <TR>
                                <TD ALIGN=Center>
                                        Le quiz est terminé
                                        <BR>Pourcentage des réponses corrects: <?php print $percentaje; ?> %
                                        <p><A HREF="<?php print $address; ?>">Home Page</a>

                                        <?php } ?>

                                </TD>
                        </TR>
        </TABLE>

</BODY>

</HTML>