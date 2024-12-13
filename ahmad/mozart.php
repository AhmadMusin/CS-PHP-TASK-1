<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Story of Mozart</title>
    <style>
        body {
            font-family: 'Georgia', serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #0a1f44;
            color: white;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #1f3b6a;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }

        main {
            flex: 1;
            padding: 20px;
            max-width: 800px;
            margin: auto;
            background: #1e2a47;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        h1 {
            text-align: center;
            color: #ffffff;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #1f3b6a;
            color: white;
        }

        p {
            color: #d0d0d0;
        }
    </style>
</head>
<body>
    <header>
        <h1>The Story of Mozart</h1>
    </header>
    <main>
        <?php
            echo "<p>Wolfgang Amadeus Mozart, born on January 27, 1756, in Salzburg, Austria, was a child prodigy whose music would go on to define the classical era. By the age of five, Mozart was composing and performing for European royalty, astonishing everyone with his natural talent.</p>";

            echo "<p>Despite his extraordinary abilities, Mozart faced many struggles in his short life. Moving to Vienna as a young man, he sought to make a living as a freelance composer, a daring and unstable career at the time. Though he achieved some fame, he often struggled financially.</p>";

            echo "<p>Among his many masterpieces are the operas <i>The Magic Flute</i> and <i>Don Giovanni</i>, symphonies like <i>Jupiter Symphony</i>, and chamber works of exquisite beauty. Each composition showcases his brilliance in melody, harmony, and innovation.</p>";

            echo "<p>Tragically, Mozart passed away on December 5, 1791, at the young age of 35, leaving behind an enduring legacy. Today, he is celebrated as one of the greatest composers in history, his music continuing to inspire and move audiences around the globe.</p>";
        ?>
    </main>
    <footer>
        &copy; <?php echo date("Y"); ?> Mozart Tribute
    </footer>
</body>
</html>
