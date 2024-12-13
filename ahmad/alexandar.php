<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Story of Alexander Graham Bell</title>
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
        <h1>The Story of Alexander Graham Bell</h1>
    </header>
    <main>
        <?php
            echo "<p>Alexander Graham Bell, born on March 3, 1847, in Edinburgh, Scotland, was an inventor, scientist, and teacher. Bell is most famous for his invention of the telephone, a groundbreaking technology that revolutionized communication across the globe.</p>";

            echo "<p>Although he initially focused on teaching the deaf, his fascination with sound and speech led him to experiment with devices that could transmit sound. His work ultimately led to the creation of the first practical telephone in 1876, changing the way the world communicated.</p>";

            echo "<p>Bell's telephone invention was a significant leap forward, demonstrating the ability to convert sound into electrical signals that could be transmitted over long distances. His patent for the telephone was awarded on March 7, 1876, and it paved the way for the global telecommunications industry.</p>";

            echo "<p>Bell's contributions were not limited to the telephone. He also worked on a variety of other inventions, including the audiometer and early versions of the airplane. Despite facing competition and controversies over the invention of the telephone, Bell's legacy remains that of a visionary who changed the world.</p>";
        ?>
    </main>
    <footer>
        &copy; <?php echo date("Y"); ?> Alexander Graham Bell Tribute
    </footer>
</body>
</html>
