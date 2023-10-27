<?php
$dir = "videos/"; // the directory where your .mp4 files are stored
$mp4Files = glob($dir . "*.mp4");

// Custom display names
$customNames = [
    "TheEnd.mp4" => "The End",
    "Zap-Hosting-Exposed-_-Trailer.mp4" => "Zap Hosting Exposed - Trailer",
	"Coronavirus-as-Friends-Opening.mp4" => "Coronavirus as Friends Opening",
	"crying-cats.mp4" => "Crying Cats",
	"i-just-wasted-25-hours-of-my-life.mp4" => "I just wasted 25 hours of my life",
	"Pterodactyl-Daemon-_-Demon.mp4" => "Pterodactyl Daemon = Demon",
	"will-smith-asks-if-you-wannasprite.mp4" => "Will Smith asks if you wannasprite",
	
    // Add more custom names here
];

function getDisplayName($filename, $customNames) {
    return isset($customNames[basename($filename)]) ? $customNames[basename($filename)] : basename($filename);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sloth's Memorial</title>
</head>
<body>
    <h1>Sloth's videos</h1>
    <ul>
        <?php foreach($mp4Files as $file): ?>
        <li><a href="<?php echo $file; ?>" target="_blank"><?php echo getDisplayName($file, $customNames); ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

<!-- Test -->
