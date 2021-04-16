
<img src="image.jpg" /><br/><br/>
<?php
//header("Content-type: image/png"); cherger directement la page

//$image= imagecreate(200,150);// ressource

// pour les miniatures

$source= imagecreatefromjpeg("image.jpg");

$destination= imagecreatetruecolor(80, 100);
// dimensions
$largeur_source= imagesx($source);
$hauteur_source = imagesy($source);

$largeur_destination= imagesx($destination);
$hauteur_destination = imagesy($destination);

// création de la miniature
imagecopyresampled($destination, $source, 0, 0, 0, 0, $largeur_destination, $hauteur_destination, $largeur_source, $hauteur_source);

imagejpeg($destination,"image.jpg");

//$image1=imagecreatefromjpeg( "image/img3.jpeg");
/*$image1= imagecreatefromjpeg('image/3.jpg');
$image2 = imagecreatefrompng('image/htc.png ');*/
//imagejpeg($image, "image/monimage.jpeg"); // ou imagejpeg si le fichier est en jpeg ou jpg
/*$couleur=imagecolorallocate($image, 245, 175, 29);
$blanc=imagecolorallocate($image, 255, 255, 255);
$noir=imagecolorallocate($image, 0, 0, 0);

imagestring($image,5, 15, 35, "Voici ma 1ere image", $noir); */
/*imagesetpixel($image, 15, 35, $noir); // forme d image*/
/*imagecolortransparent($image,$couleur);// image transparente;
// fusionner deux images imagecopymerge

imagepng($image); */
?>
