
<?
 include('../connectionn.php');
 if(isset($_POST['submit'])){

    $imgdata= $_POST['imgData'];

    print_r($imgdata).die;


 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <video id="video" width="200" height="200" autoplay></video>
							
							<canvas id="canvas" width="150" height="150"></canvas>
						    <button type="button" onclick="capturePhoto()" id="captureButton">Capture Photo</button>
                            <form action="#" method="post" enctype="multipart/form-data">

						    <input type="hidden" id="imgData" name="imgData" required/>
                            <button name="submit">submit</button>
                        </form>
                         
                            <script>
                                        function capturePhoto() {
                                            const video = document.getElementById('video');
                                            const canvas = document.getElementById('canvas');
                                            const captureButton = document.getElementById('captureButton');
                                            const context = canvas.getContext('2d');

                                            navigator.mediaDevices.getUserMedia({ video: true })
                                                .then((stream) => {
                                                    video.srcObject = stream;
                                                    // Show the "Capture Photo" button once the video stream is accessed
                                                    captureButton.style.display = 'inline-block';
                                                })
                                                .catch((error) => {
                                                    console.error('Error accessing camera:', error);
                                                });

                                            captureButton.addEventListener('click', () => {
                                                context.drawImage(video, 0, 0, canvas.width, canvas.height);
                                                const imgData = canvas.toDataURL('image/jpeg');
                                                document.getElementById('imgData').value = imgData;
                                                document.getElementById('imglink').href=imgData;
                                            });
                                        }
</script> 
</body>
</html>

