<?php

function getImages($connection)
{
    $sql = "SELECT url FROM Images";
    $result = json_encode(mysqli_query($connection, $sql)->fetch_all());

    echo "<script>
        var images = $result;
        var index = 0;
        var sliderImage = document.getElementById('sliderImageID');
        sliderImage.src = images[index];
        
        function changePicture(isNext){
            isNext ? index++ : index--;
            if(index === images.length)
                index = 0;
            else if(index === -1)
                index = images.length - 1;
    
            sliderImage.src = images[index];
        }
    </script>";
}

?>
