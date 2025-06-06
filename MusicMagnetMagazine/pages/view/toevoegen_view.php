<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/toevoegen.css">
    <title>Muziek Toevoegen | Music Magnet Magazine</title>
</head>
<body>
<h1>Muziek Toevoegen</h1>
<form action="toevoegen.php" method="POST" enctype="multipart/form-data">
    <label for="title">Titel:</label>
    <input type="text" id="title" name="title" required>

    <label for="artist">Artiest:</label>
    <input type="text" id="artist" name="artist" required>

    <label for="cover">Cover Afbeelding:</label>
    <input type="file" id="cover" name="cover" accept="image/*" required>

    <label for="audio">Audiobestand:</label>
    <input type="file" id="audio" name="audio" accept="audio/*" required>

    <button type="submit">Muziek Toevoegen</button>
</form>
</form>
</body>
</html>
