<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words Censured</title>
</head>
<!-- Descrizione:
[*] Creare una variabile con un paragrafo di testo a vostra scelta.
[*] Stampare a schermo il paragrafo e la sua lunghezza.
[*] Una parola da censurare viene passata dall'utente tramite parametro GET.
[] Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->
<body>
    <?php
    $paragraph = "
    To be, or not to be, that is the question:
    Whether 'tis nobler in the mind to suffer
    The slings and arrows of outrageous fortune,
    Or to take arms against a sea of troubles
    And by opposing end them?
    To die: to sleep;
    No more; and, by a sleep to say we end
    The heart-ache and the thousand natural shocks
    That flesh is heir to, 'tis a consummation
    Devoutly to be wish'd. To die, to sleep;
    To sleep: perchance to dream: ay, there's the rub;
    For in that sleep of death what dreams may come
    When we have shuffled off this mortal coil,
    Must give us pause. ";

    $par_length = strlen($paragraph);
    $bad_word = $_GET['name'];
    $censured_content = str_replace($bad_word, '***', $paragraph);
    $censured_length = strlen($censured_content);
    ?>

    <h1>To be, or not to be</h1>
    <p>
        <?php
        echo $paragraph;
        ?>
    </p>
    <p>
        <strong>
            <?php
            echo 'This text contains'. ' ' . $par_length . ' ' . 'characters';
            ?>
        </strong>
    </p>

    <h2>Here it is the not-explicit text</h2>
    <p>
        <?php 
        echo $censured_content;
        ?>
    </p>
    <p>
        <strong>
            <?php
            echo 'The censured text contains'. ' ' . $censured_length . ' ' . 'characters';
            ?>
        </strong>
    </p>
</body>
</html>