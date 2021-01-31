<template>
    <layout>
        <div class="header">
            <h2>Galaxy</h2>
        </div>
        <div class="body">
            <canvas id="galaxy"></canvas>
        </div>
    </layout>
</template>

<style lang="scss" scoped>
    .header {
        background-color: #d6d6d6;
        height: 3rem;

        h2 {
            margin: auto;
        }
    }

    .body {
        height: calc(100% - 3rem - 1rem);
        margin-top: 1rem;

        #galaxy {
            background-color: black;
        }
    }
</style>
<script>
export default {
    data() {
        return {
            canvas  : null,
            context : null,
            galaxy  : {}
        }
    },
    methods: {
        initCanvas() {
            this.canvas = document.getElementById('galaxy');
            this.canvas.width = this.canvas.parentElement.offsetWidth;
            this.canvas.height = this.canvas.parentElement.offsetHeight;
            this.context = this.canvas.getContext('2d');
        },
        initGalaxy() {
            let userLocation = this.$store.getters['user/getLocation'];
            this.galaxy = this.$store.getters['galaxy/getSystems'](userLocation.galaxy)

            if (!this.galaxy) {
                return this.$store.dispatch('galaxy/populateGalaxy', userLocation.galaxy).then(() => {
                    this.galaxy = this.$store.getters['galaxy/getSystems'](userLocation.galaxy);
                });
            }
        },
        drawSystems() {
            let wc = this.canvas.width / 100;
            let hc = this.canvas.height / 100;

            for (const systemId in this.galaxy) {
                if (Object.hasOwnProperty.call(this.galaxy, systemId)) {
                    const system = this.galaxy[systemId];
                    this.context.fillStyle = system.color;
                    this.context.beginPath();
                    this.context.arc((system.coord_x * wc), (system.coord_y * hc), 2.5, 0, 2 * Math.PI); // fill in the pixel at (10,10)
                    this.context.stroke();
                    this.context.closePath();
                    this.context.fill();
                }
            }
        }
    },
    mounted() {
        this.initCanvas();
        this.initGalaxy().then(() => {
            this.drawSystems();
        });
    }
}
</script>