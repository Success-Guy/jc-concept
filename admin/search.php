<?php
session_start();
if (!isset($_SESSION['param'])) {
    header("location: index.php");
}
require_once ('../class/common.php');


$desc[0] = "Error";

$desc[1] = "Creative; Independent; Inventive; Authoritative; Determination; Ambitious Good sense of judgement Leadership qualities; Will rise to the highest position in life.";

$desc[2] = "Soft-minded; Imaginative; Artistic Romantic, Inventive; Sentimental; Hypersensitive; Anxieties of mind. Easily upset, if not in happy surroundings; should guard against lack of self-confidence and continuity in their plans and ideas.";

$desc[3] = "Ambitious; Commands attention; Independent and hates to be under others' control; Organized; Disciplined; Conscientious; Trustworthy; Responsible; Self-pride; Will rise to a very high position in his chosen career.";

$desc[4] = "Anticonformist; Will take a different view of everything presented to their minds; Activist; Unconventional; Individualistic; Sensitive; Feels lonely; Critical; Easily upset; Makes secret enemies; Often treated badly and has his person dragged to the mud. Lucky colours. ELECTRIC COLOURS, half-shades, half-tones.";

$desc[5] = "Not narrow-minded; Makes friends easily; Has keen sense of making money quickly; Charismatic; Intellectually inclined; Fast thinker; Inventive; Modern; Not too attached in love; A good talker; Power of conviction.";

$desc[6] = "Graceful; A good mixer; Attractive; Loving and lovable; Easily attached in love; Peace-loving; Artistic Music lover; Romantic; Very generous, especially to art and artistic; Cheerful; Fashionable.";

$desc[7] = "Not narrow-minded; Independent; Original; Individualistic; Philosophical; Religious; Prophetic; Business acumen; Love of travels and seas affairs; Often becomes very rich.";

$desc[8] = " Good intentions, but generally misunderstood; Intensely lonely at heart; Often used as instrument of fate for others; Tragic heroism; Extremist; Either a great success or a great failure; Often holds very high position with great self-sacrifice; Often faced with great sorrows, losses and humiliations.";

$desc[9] = "Full of ups and downs. Life of struggle; Determination; Quick-tempered; Independent; Commands attention; Courageous; Foolhardy; Makes great enemies. Rises to high position of general in the army or of political leader; Easily hen-pecked; Often either wounded or killed in war or in real life; Accident-prone.";

$desc[10] = "Creative; Independent; Honour; Self-confident; Leadership qualities; Will rise to the top in his chosen career; Will be famous and successful in life; All his desires will be fulfilled.";

$desc[11] = "Imaginative; Inventive; Artistic; Sentimental; Easily upset; Soft-minded; Hidden dangers; Envy; trial; secret plotting and treachery from others; Great difficulties ahead.";

$desc[12] = "Independent; Ambitious; Organized; Will rise to the top in his chosen career; However, there are sufferings and anxieties of mind; Will tend to sacrifice virtually all that he might acquire.";

$desc[13] = "Ruthless; Anticonformist; Easily upset; Blessings and power, if wrongly used, will lead to self-destruction; Warning of the unexpected;";

$desc[14] = "Not narrow-minded; A good mixer; Modern; A good talker; Power of conviction; Charismatic; Danger from natural forces; Fortunate for business but with high risk attached to it through the actions of others.";

$desc[15] = "Artistic; Attractive; Music lover; Life of ease; Sensuous; Eloquent talker; Dramatic with strong personal charms; Fortunate for obtaining money, gifts and favours from others.";
$desc[16] = "Cosmopolitan; Independent; Original; Philosophical; Love of travels and seas affairs; Often becomes very rich; There is warning of danger of accidents and defeat of one's plans; Likelihood of one ultimately falling from grace to grass;";

$desc[17] = "Old soul; Good intentions, but generally misunderstood by others; Used as instrument of fate for others; Tragic heroism; Extremist; Self mastery over trials and difficulties; His name lives after him.";

$desc[18] = "Full of ups and downs; Life of struggle; Determination; Tribulations; Bitter quarrels; Treachery or deception by others; Danger from accidents and natural disasters, explosions etc.; Being sacrificed for others.";

$desc[19] = "Creative; Independent; Fame; Happiness; Achievement; Esteem; Honour; Dignity; Peace of mind; Leadership qualities; Will rise to the top in his chosen career; Success in his plans for the future.";

$desc[20] = "Soft-minded; Imaginative; Artistic; Romantic; Inventive; Awakening of new purpose, new plans, new ambitions to action for some great purpose, cause or duty; But denotes delays, hindrances to one's plans.";

$desc[21] = "Independent; Ambitious; Organized; Advancement; Honours; Elevation in life; General success; Victory after a long struggle; Will rise to the top in his chosen career; Favoured with wealth and position of authority.";

$desc[22] = "Easily upset; Unconventional; Sensitive; A good man with a sack of errors on his back; A dreamer of dreams, blinded by illusion and delusion, beclouded by false judgement; Great service to others but failure to please them.";

$desc[23] = "Not narrow-minded; A good mixer; Modern; Charismatic; A good talker; Power of conviction; There is promise of success and help from superiors; Protection by those in high places; Commands respect from others; Great fortune and success; A fortunate type.";

$desc[24] = "Artistic; Attractive; Music lover; Loving and lovable; Promise of assistance and association of those of high rank and position with one's plans; Favour and gain through love and from the opposite sex; A life of ease and pleasure.";

$desc[25] = "Not narrow-minded; Independent; Original; Love of travels and seas affairs; Philosophical; Strength gained through experience; Benefits obtained through observation; Success achieved through strife, struggle and trials in the earlier life.";

$desc[26] = "An old soul; Good intentions, but generally misunderstood; Used as instrument of fate for others; Tragic heroism; Disasters caused through association with others; Ruin, by bad speculations, by partnerships, unions and bad advice.";

$desc[27] = "Ups and downs; Life of struggle; Determination to succeed; Easily hen-pecked; Accident-prone; Promise of authority, power and command; Can rise to the position of general in the army; Reward will come from the productive intellect; Harvest of good seeds already sown by the creative faculties; Should carry out his own ideas and plans.";

$desc[28] = "Creative; Independent; Famous; Leadership qualities; Will rise to the top in his chosen career; But full of contradictions i.e. a person of great promise and possibilities who is likely to see all taken away from him; Loss through trust in others; Opposition and danger of loss through law, and having to begin life's road over and over again.";

$desc[29] = "Soft-minded; Creative; Imaginative; Sentimental; But full of uncertainties, treachery and deception by others; Trials, tribulations and unexpected dangers; Unreliable friends; Grief and deception caused by members of the opposite sex.";

$desc[30] = "Independent; Ambitious; Organized; Disciplined; Thoughtful deduction; Retrospection; Mental superiority over his fellows; Will rise high in his chosen career; Indifferent to material acquisition; Spends money unselfishly with a detached mind; But he is often sacrificed for the plans or intrigues of others.";

$desc[31] = "Anticonformist; Individualistic; Sensitive; Self- contained, lonely and isolated from others; Not fortunate from worldly or material standpoint.";

$desc[32] = "Not narrow-minded; a good mixer; Intellectually inclined; Charismatic; A good talker; Power of conviction; Fortunate if one holds on to one's own judgement and opinions, or else one's plans are likely to become wrecked by the stubbornness and stupidity of others.";

$desc[33] = "Artistic; Attractive; Music lover; Loving and lovable; Promise of assistance and association of those of high rank and position with one's plans; Favour and gain through love and from the opposite sex; A life of ease and pleasure.";

$desc[34] = "Not narrow-minded; Independent; Original; Love of travels and seas affairs; Philosophical; Strength gained through experience; Benefits obtained through observation; Success achieved through strife, struggle and trials in the earlier life.";

$desc[35] = "An old soul; Good intentions, but generally misunderstood; Used as instrument of fate for others; Tragic heroism; Disasters caused through association with others; Ruin, by bad speculations, by partnerships, unions and bad advice.";

$desc[36] = "Ups and downs; Life of struggle; Determination to succeed; Easily hen-pecked; Accident-prone; Promise of authority, power and command; Can rise to the position of general in the army; Reward will come from the productive intellect; Harvest of good seeds already sown by the creative faculties; Should carry out his own ideas and plans.";

$desc[37] = "Independent; Creative; Good sense of judgement; Fame; Good and fortunate friendships in love, and in combinations connected with the opposite sex; Good for partnership of all kinds.";

$desc[38] = "Soft-minded; Creative; Imaginative; Sentimental; But full of uncertainties, treachery and deception by others; Trials, tribulations and unexpected dangers; Unreliable friends; Grief and deception caused by members of the opposite sex.";

$desc[39] = "Independent; Ambitious; Organized; Disciplined; Thoughtful deduction; Retrospection; Mental superiority over his fellows; Will rise high in his chosen career; Indifferent to material acquisition; Spends money unselfishly with a detached mind; But he is often sacrificed for the plans or intrigues of others.";

$desc[40] = "Anticonformist; Individualistic; Sensitive; Self- contained, lonely and isolated from others; Not fortunate from worldly or material standpoint.";

$desc[43] = "Not narrow-minded; Independent, Original; Individualistic; Philosophical; Prophetic; Love of travels and seas affairs; But rather unfortunate as it is symbolized by the signs of revolution, upheaval, strife, failure, and prevention from one's plans and aspirations.";

$desc[52] = "Not narrow-minded; Independent, Original; Individualistic; Philosophical; Prophetic; Love of travels and seas affairs; But rather unfortunate as it is symbolized by the signs of revolution, upheaval, strife, failure, and prevention from one's plans and aspirations.";

$desc[51] = "Nature of the warrior; Promise of sudden advancement in whatever one undertakes, especially for those in military life and for leaders in any cause; However, it threatens enemies, danger and the likelihood of assassination.";

$desc[46] = "Independent; Creative; Good sense of judgement; Fame; Good and fortunate friendships in love, and in combinations connected with the opposite sex; Good for partnership of all kinds.";

$desc[41] = "Not narrow-minded; a good mixer; Intellectually inclined; Charismatic; A good talker; Power of conviction; Fortunate if one holds on to one's own judgement and opinions, or else one's plans are likely to become wrecked by the stubbornness and stupidity of others.";

$desc[50] = "Not narrow-minded; a good mixer; Intellectually inclined; Charismatic; A good talker; Power of conviction; Fortunate if one holds on to one's own judgement and opinions, or else one's plans are likely to become wrecked by the stubbornness and stupidity of others.";

$desc[49] = "Anticonformist; Individualistic; Sensitive; Self- contained, lonely and isolated from others; Not fortunate from worldly or material standpoint.";

$desc[48] = "Independent; Ambitious; Organized; Disciplined; Thoughtful deduction; Retrospection; Mental superiority over his fellows; Will rise high in his chosen career; Indifferent to material acquisition; Spends money unselfishly with a detached mind; But he is often sacrificed for the plans or intrigues of others.";


$desc[47] = "Soft-minded; Creative; Imaginative; Sentimental; But full of uncertainties, treachery and deception by others; Trials, tribulations and unexpected dangers; Unreliable friends; Grief and deception caused by members of the opposite sex.";

$desc[45] = "Ups and downs; Life of struggle; Determination to succeed; Easily hen-pecked; Accident-prone; Promise of authority, power and command; Can rise to the position of general in the army; Reward will come from the productive intellect; Harvest of good seeds already sown by the creative faculties; Should carry out his own ideas and plans.";

$desc[42] = "Artistic; Attractive; Music lover; Loving and lovable; Promise of assistance and association of those of high rank and position with one's plans; Favour and gain through love and from the opposite sex; A life of ease and pleasure.";

$desc[44] = "An old soul; Good intentions, but generally misunderstood; Used as instrument of fate for others; Tragic heroism; Disasters caused through association with others; Ruin, by bad speculations, by partnerships, unions and bad advice.";





//////////////////////////////////////////////////////////////////////////////////////////////
$name = $value = $description = $msg = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name  = test_input($_POST['search-keyword']);
    $name  = strtoupper($name);
    $names = str_split($name);

    // echo "$name <br>";
    $value = getNameValue($names);
    // echo "$value <br>";
    $description = $desc[$value];
    $msg         = $name . ": " . $description;
}

function getNameValue(array $names) {
    $length = count($names);
    $total  = 0;
    for ($i = 0; $i < $length; $i++) {
        $total += charValue($names[$i]);
    }

    if ($total > 52) {
        $a     = str_split(strval($total));
        $total = $a[0] + $a[1];
    }

    return $total;
}
function charValue($char) {

    switch ($char) {
        case "A":
            return 1;
            break;
        case "B":
            return 2;
            break;
        case "C":
            return 3;
            break;
        case "D":
            return 4;
            break;
        case "E":
            return 5;
            break;
        case "F":
            return 8;
            break;
        case "G":
            return 3;
            break;
        case "H":
            return 5;
            break;
        case "I":
            return 1;
            break;
        case "J":
            return 1;
            break;
        case "K":
            return 2;
            break;
        case "L":
            return 3;
            break;
        case "M":
            return 4;
            break;
        case "N":
            return 5;
            break;
        case "O":
            return 7;
            break;
        case "P":
            return 8;
            break;
        case "Q":
            return 1;
            break;
        case "R":
            return 2;
            break;
        case "S":
            return 3;
            break;
        case "T":
            return 4;
            break;
        case "U":
            return 6;
            break;
        case "V":
            return 6;
            break;
        case "W":
            return 6;
            break;
        case "X":
            return 5;
            break;
        case "Y":
            return 1;
            break;
        case "Z":
            return 7;
            break;
        default:
            return 0;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | JC Concept</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="body">
        <header>
            <nav class="navbar container">
                <a class="navbar-brand" href="index.php">
                    <span class="nav-logo"></span>
                    <span class="nav-name">JC Concepts</span>
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a>SMS Balance: <?= getPlainBalance(); ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?logout=true">Logout</a>
                    </li>
                </ul>
            </nav>
        </header>

        <section>
            <div class=" container">
                <!-- <h1>JC Concept</h1> -->
                <div class="body-co">
                    <h1
                        style="font-size:22px; font-weight:normal;  margin-bottom: 20px; color:#333; text-align: center;">
                        Search result</h1>
                    <div style="text-align:center;color:red"></div>
                    <div class="detail" id="login-form">
                        <div class="name">
                            <?= $name; ?>
                        </div>
                        <!-- <div class="value">
                            Name value: <?= $value; ?>
                        </div> -->
                        <div class="description">
                            <h3>Name description:</h3>
                            <p> <?= $description; ?> </p>
                        </div>

                        <form class="login-form" id="login-form" action="sendmsg.php" method="POST"
                            style="color: #333;">
                            <div class="log-input-group">
                                <label>Phone Number:</label>
                                <input type="text" name="phone" style="color: #333; border: 1px solid #333;"
                                    placeholder="09039834732">
                            </div>
                            <input type="hidden" name="message" value="<?= $msg; ?>">
                            <input type="hidden" name="name" value="<?= $name; ?>">
                            <div class="log-input-group">
                                <button type="submit" class="btn">Send Message</button>
                            </div>
                        </form>
                    </div>
                    <!-- <button id="test">test</button> -->
                </div>

        </section>
        <footer>
            <nav class="navbar container">
                <a class="navbar-brand" href="index.php">
                    <span class="nav-logo"></span>
                    <span class="nav-name">JC Concept</span>
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#">About Us</a>
                    </li>
                    </li>
                </ul>
            </nav>
        </footer>
    </div>

    <script src="js/index.js" type="module"></script>
</body>

</html>