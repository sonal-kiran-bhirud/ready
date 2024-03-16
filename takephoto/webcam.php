<!DOCTYPE html>
<html>
    <head>
        <title>webcam</title>
    </head>
    <body>
        <div class="video-wrap">
            <!--stream video via webcam-->
            <video id="video" playsinline autoplay></video>
        </div>

        <!--trigger canvas web API-->
        <div class="controller">
            <button id="snap"> capture</button>
</div>

<!--webcam vid. snapshot-->
<canvas id="canvas" width="640" height="k480">
</canvas>

<script>
    const video=document.getElementById('video');
    const canvas=document.getElementById('canvas');
    const snap=document.getElementById('snap');
    const errorMsgElement=document.getElementById('spanerrorMsg');

    const constraints = {
        audio:true,
        video:{
            width:1280, height:720 height:720
        }
    };
    
     async function init(){
        try{
            const stream = await navigator.mediaDevices.getUserMedia(constraints);
            hadleSuccess(stream);
        }
        catch(e){
            errorMsgElement.innerHTML=`navigator.getUserMedia.error:${e.toString()}`;

        }
     }

     //success
     function handleSuccess(stream){
        window.stream=stream;
        video.srcObject=stream;

     }

     //Loadm9j9t
     init();



     //draw image
     var context=canvas.getContext(`2d`);
     snap.addEventListener("click".function(){
        context.drawImage(video,0,0,640,480);

     });

    


</html>
