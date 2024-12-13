<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Story of Isaac Newton</title>
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
        <h1>The Story of Isaac Newton</h1>
    </header>
    <main>
        <?php
            echo "<p>Sir Isaac Newton, born on January 4, 1643, in Woolsthorpe, England, is widely regarded as one of the most influential scientists of all time. His work in mathematics, physics, and astronomy laid the foundation for much of modern science, and his discoveries have had a lasting impact on the way we understand the universe.</p>";

            echo "<p>Newton is best known for formulating the laws of motion and universal gravitation, which revolutionized our understanding of the physical world. His groundbreaking work, *Philosophiæ Naturalis Principia Mathematica* (Mathematical Principles of Natural Philosophy), published in 1687, provided the mathematical framework for classical mechanics.</p>";

            echo "<p>One of Newton's most famous achievements was his explanation of gravity. He proposed that every mass in the universe attracts every other mass with a force proportional to their masses and inversely proportional to the square of the distance between them. This universal law of gravitation explained why objects fall to the ground and how planets move in their orbits around the sun.</p>";

            echo "<p>In addition to his work on gravity, Newton made significant contributions to optics, including his theory of light and color. He also invented the reflecting telescope, which improved upon earlier telescopes and made astronomical observations more accurate.</p>";

            echo "<p>Newton's legacy extends far beyond his lifetime. His work continues to influence fields such as physics, engineering, and astronomy, and his discoveries helped usher in the Age of Enlightenment. Sir Isaac Newton passed away on March 31, 1727, but his contributions to science remain some of the most important in history.</p>";
        ?>
    </main>
    <footer>
        &copy; <?php echo date("Y"); ?> Isaac Newton Tribute
    </footer>
</body>
</html>
