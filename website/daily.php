<?php include('includes/header.php'); 

// the switch statements for the daily changes
switch($today) {
    case 'Monday':
        $content = '<h2>It\'s Magic monday</h2>';
        $description = 'It\s time to play some magic the gathering the card game.';
        $backgroundColor = 'lightblue';
        $pic = 'magicCards.jpg';
        $alt = 'cards';
        break;

    case 'Tuesday':
        $content = '<h2>Its Tuesday lets go to the opera!</h2>';
        $description = 'Today is the day where you would get dressed and 
        spend the night at the opera house.';
        $backgroundColor = 'tan';
        $pic = 'the-met-small.jpg';
        $alt = 'the met';
        break;

    case 'Wednesday':
        $content = '<h2>It\'s Wednesday lets build some gundams!</h2>';
        $description = 'Break out those hobby knife and glue, it\s time to 
        assemble some gundam models today.';
        $backgroundColor = 'grey';
        $pic = 'gundam.jpg';
        $alt = 'gundam';
        break;

    case 'Thursday':
        $content = '<h2>It\s that time of the week for the gym.</h2>';
        $description = 'Can\t sit all day on the computer, time to go to the
        gym.';
        $backgroundColor = 'white';
        $pic = 'exercise.jpg';
        $alt = 'exercise';
        break;

    case 'Friday':
        $content = '<h2>Its friday</h2>';
        $description = 'It\s the end of the work week time to get some pizza 
        downtown.';
        $backgroundColor = 'lightgreen';
        $pic = 'pizza.jpg';
        $alt = 'pizza';
        break;

    case 'Saturday':
        $content = '<h2>Board game Saturday!</h2>';
        $description = 'Just stay at home, invite some friends over and 
        sit down with some board games for the night.';
        $backgroundColor = 'dodgerblue';
        $pic = 'board-games.jpg';
        $alt = 'board games';
        break;

    case 'Sunday':
        $content = '<h2>Lets end the week with some dungeons and dragons!</h2>';
        $description = 'Let\'s end the week off with some dungeon and dragons 
        with some freinds.';
        $backgroundColor = 'coral';
        $pic = 'dndbooks.jpg';
        $alt = 'books';
        break;
}
// end of php //////////////////////
?>
    <!-- START of wrapper //////////////////////////////////////////////// -->
   <div id="wrapper">

    <main style="background:<?php echo $backgroundColor; ?>;"> <!-- START of main section //////// -->
        <h1><?php echo $headline; ?></h1>

        <p><?php echo $content; ?></p>

        <p><?php echo $description; ?></p>

        <ul>
            <li><a href="daily.php?today=Monday">Monday</a></li>
            <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
            <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
            <li><a href="daily.php?today=Thursday">Thursday</a></li>
            <li><a href="daily.php?today=Friday">Friday</a></li>
            <li><a href="daily.php?today=Saturday">Saturday</a></li>
            <li><a href="daily.php?today=Sunday">Sunday</a></li>
        </ul>
    </main>

    <aside> <!-- START of aside section //////// -->
        <img src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
    </aside>

<?php include('includes/footer.php'); ?>