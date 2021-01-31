<canvas id="stockGraph" width="1024" height="768"></canvas>

<script>
    var context = getContext();

    var background = new Image();
    background.src = "{{ asset('img/space_bg.jpg') }}";

    // Make sure the image is loaded first otherwise nothing will draw.
    background.onload = function () {
        context.drawImage(background, 0, 0);

        @foreach ($stellarObjects as $stellarObject)
            {!! $stellarObject !!}
        @endforeach
    }

    function getContext() {
        let monCanvas = document.getElementById("stockGraph");

        return monCanvas.getContext("2d");
    }

    function drawCircle(posX, posY, type = 'star') {
        let fillColor = "#ffd700";
        let size = 6;

        if (type !== 'star') {
            fillColor = '#ffffff';
            size = 3;
        }

        context.fillStyle = fillColor;
        context.beginPath();
        context.arc(posX, posY, size, 0, 2 * Math.PI);
        context.fill();
    }
</script>
