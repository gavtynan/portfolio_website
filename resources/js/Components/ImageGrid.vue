<template>
    <div
        class="sphere-container"
        @mousedown="startDrag"
        @mousemove="onDrag"
        @mouseup="stopDrag"
        @mouseleave="stopDrag"
        @touchstart="startDrag"
        @touchmove.prevent="onDrag"
        @touchend="stopDrag"
    >
        <div
            v-for="(image, index) in images"
            :key="index"
            class="sphere-item"
            :style="getItemStyle(index)"
            @dragstart.prevent
        >
            <img :src="image.src" :alt="image.title" draggable="false" />
            <p class="image-title">{{ image.title }}</p>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            images: [
                { src: "/images/languages/1.png", title: "HTML" },
                { src: "/images/languages/2.png", title: "CSS" },
                { src: "/images/languages/3.png", title: "JavaScript" },
                { src: "/images/languages/4.png", title: "Vue" },
                { src: "/images/languages/5.png", title: "PHP" },
                { src: "/images/languages/6.png", title: "Laravel" },
                { src: "/images/languages/7.png", title: "JSON" },
                { src: "/images/languages/8.png", title: "Node" },
                { src: "/images/languages/9.png", title: "JQuery" },
                { src: "/images/languages/10.png", title: "MySQL" },
                { src: "/images/languages/11.png", title: "React" },
                { src: "/images/languages/12.png", title: "Java" },
                { src: "/images/languages/13.png", title: "Python" },
                { src: "/images/languages/14.png", title: "Bootstrap" },
                { src: "/images/languages/15.png", title: "VSCode" },
            ],
            gridCols: 3, // Number of items per row
            gridRows: 4, // Number of rows
            rotateX: 0, // Track vertical rotation
            rotateY: 0, // Track horizontal rotation
            isDragging: false, // Flag to track dragging state
            lastMouseX: 0, // Store last X position during dragging
            lastMouseY: 0, // Store last Y position during dragging
        };
    },
    methods: {
        // Compute the style for each item based on rotation
        getItemStyle(index) {
            const row = Math.floor(index / this.gridCols);
            const col = index % this.gridCols;

            const rotateX = this.rotateX + (row - 1) * 20;
            const rotateY = this.rotateY + (col - 1) * 30;

            const translateZ = window.innerWidth < 768 ? 200 : 225;

            const scale = 1 - Math.abs(row - 1) * 0.05;
            const opacity = 1 - Math.abs(row - 1) * 0.1;

            return {
                transform: `rotateY(${rotateY}deg) rotateX(${rotateX}deg) translateZ(${translateZ}px) scale(${scale})`,
                opacity: opacity,
            };
        },

        // Start dragging (on mouse down or touch start)
        startDrag(event) {
            this.isDragging = true;
            this.lastMouseX = event.clientX || event.touches[0].clientX;
            this.lastMouseY = event.clientY || event.touches[0].clientY;
        },

        // Update the sphere's rotation during dragging
        onDrag(event) {
            if (this.isDragging) {
                const currentMouseX = event.clientX || event.touches[0].clientX;
                const currentMouseY = event.clientY || event.touches[0].clientY;

                const deltaX = currentMouseX - this.lastMouseX;
                const deltaY = currentMouseY - this.lastMouseY;

                // Update the rotation while clamping both rotateX and rotateY
                this.rotateY = this.clampHorizontalRotation(
                    this.rotateY + deltaX * 0.6
                );
                this.rotateX = this.clampVerticalRotation(
                    this.rotateX - deltaY * 0.6
                );

                this.lastMouseX = currentMouseX;
                this.lastMouseY = currentMouseY;
            }
        },

        // Stop dragging (on mouse up or touch end)
        stopDrag() {
            this.isDragging = false;
        },

        // Clamp the vertical rotation (rotateX) to prevent the sphere from flipping
        clampVerticalRotation(rotateX) {
            const minRotateX = -45; // Allow some up/down movement but not a full flip
            const maxRotateX = 30;

            return Math.max(minRotateX, Math.min(maxRotateX, rotateX));
        },

        // Clamp the horizontal rotation (rotateY) to prevent infinite spinning
        clampHorizontalRotation(rotateY) {
            const minRotateY = -40; // Allow a wider range of left/right movement
            const maxRotateY = 40;

            return Math.max(minRotateY, Math.min(maxRotateY, rotateY));
        },
    },
};
</script>

<style scoped>
.sphere-container {
    display: flex;
    justify-content: center;
    align-items: center;
    perspective: 500px; /* Perspective to create a 3D space */
    width: 100%;
    height: 70vh;
    position: relative;
    cursor: grab;
    user-select: none;
    padding-right: 20%;
    position: relative;

    transform: translateX(-8rem);
}

.sphere-item {
    position: absolute;
    transform-origin: center;
    transition: transform 0.5s, opacity 0.5s;
}

.sphere-item img {
    width: 150%; /* Adjust size */
    object-fit: cover;
}

.image-title {
    font-size: 1rem;
    font-weight: bold;
    text-align: center;
    margin-top: 0px;
    color: #fdf0d5;
}

@media only screen and (max-width: 768px) {
    .sphere-container {
        position: relative; /* Ensure it can be adjusted relative to parent */
        left: 15%; /* Move the left edge to the center */
        transform: translateX(-50%); /* Center it horizontally */
    }
}
</style>
