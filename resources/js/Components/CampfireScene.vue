<template>
    <div class="container">
        <div class="campfire-wrapper">
            <div class="tree-container-back">
                <div class="tree-8"></div>
                <div class="tree-9"></div>
                <div class="tree-10"></div>
            </div>
            <div class="rock-container">
                <div class="rock-big"></div>
                <div class="rock-small">
                    <div class="rock-1"></div>
                    <div class="rock-2"></div>
                    <div class="rock-3"></div>
                    <div class="rock-4"></div>
                </div>
            </div>
            <div class="smoke-container">
                <svg>
                    <path
                        d="M 150 0 Q 200 100 100 250 C 0 450 120 400 50 600  "
                    />
                </svg>
                <div class="fire-container">
                    <div class="flame-1"></div>
                    <div class="flame-2"></div>
                    <div class="flame-3"></div>
                </div>
            </div>
            <div class="tree-container-front">
                <div class="tree-1"></div>
                <div class="tree-2"></div>
                <div class="tree-3"></div>
                <div class="tree-4"></div>
                <div class="tree-5"></div>
                <div class="tree-6"></div>
                <div class="tree-7"></div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "CampfireScene",
};
</script>

<style>
:root {
    --color-sky-light: #ffd2bc;
    --color-sky-dark: #f8b9ae;
    --color-tree-dark: #365e57;
    --color-rock-dark: #2f484f;
    --color-rock-light: #917472;
    --color-flame-yellow: #fde26c;
    --color-flame-orange: #fda263;
}

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    transition: all 0.2s ease;
}

*:before,
*:after {
    content: "";
    position: absolute;
}

.container {
    background-color: #7c90a0;
    width: 100%;
    height: 0vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding-bottom: 15%;
    position: relative;
}

.container:before {
    width: 100%;
    height: 100vh;
    opacity: 0.4;
    z-index: 1;
}

.campfire-wrapper {
    width: 500px;
    height: 400px;
    position: relative;
}

.tree-container-front,
.tree-container-back {
    bottom: 0;
    height: 200px;
    position: absolute;
}

.tree-container-front {
    width: 390px;
}

.tree-container-back {
    width: 110px;
    right: 0;
}

.tree-container-front > div,
.tree-container-back > div {
    border-bottom-color: var(--color-tree-dark);
    border-bottom-style: solid;
    position: absolute;
    width: 0;
    height: 0;
    border-left-color: transparent;
    border-right-color: transparent;
    border-right-style: solid;
    border-left-style: solid;
}

.tree-container-front > div:before,
.tree-container-back > div:before {
    border-top-color: var(--color-tree-dark);
    border-top-style: solid;
    position: absolute;
    width: 0;
    height: 0;
    border-left-color: transparent;
    border-right-color: transparent;
    border-right-style: solid;
    border-left-style: solid;
    transform: skewX(-70deg);
    opacity: 0.5;
}

.tree-1,
.tree-2,
.tree-10 {
    border-left-width: 6px;
    border-right-width: 6px;
    border-bottom-width: 32px;
    bottom: 68px;
    left: 80px;
}

.tree-1:before,
.tree-2:before,
.tree-10:before {
    margin-top: 32px;
    border-left-width: 6px;
    border-right-width: 6px;
    border-top-width: 13px;
    left: -24px;
}

.tree-2 {
    left: 160px;
}

.tree-3,
.tree-4,
.tree-5,
.tree-6,
.tree-7,
.tree-8,
.tree-9 {
    border-left-width: 6px;
    border-right-width: 6px;
    border-bottom-width: 56px;
    bottom: 72px;
    left: 172px;
}

.tree-3:before,
.tree-4:before,
.tree-5:before,
.tree-6:before,
.tree-7:before,
.tree-8:before,
.tree-9:before {
    margin-top: 56px;
    border-left-width: 6px;
    border-right-width: 6px;
    border-top-width: 23px;
    left: -38px;
}

.tree-4 {
    bottom: 64px;
    left: 238px;
}

.tree-4:before {
    border-top-width: 13px;
    left: -24px;
}

.tree-5 {
    bottom: 76px;
    left: 334px;
}

.tree-5:before {
    border-top-width: 18px;
    left: -31px;
}

.tree-6 {
    bottom: 100px;
    left: 362px;
}

.tree-6:before {
    border-top-width: 12px;
    left: -22px;
}

.tree-7 {
    bottom: 110px;
    left: 368px;
}

.tree-7:before {
    border-top-width: 15px;
    left: -26px;
}

.tree-8 {
    bottom: 120px;
    left: 6px;
}

.tree-9 {
    bottom: 115px;
    left: 12px;
}

.tree-9:before,
.tree-8:before {
    border-top-width: 0px;
}

.tree-10 {
    bottom: 130px;
    left: 34px;
}

.tree-10:before {
    border-top-width: 10px;
    left: -20px;
}

.rock-container {
    position: absolute;
    width: 180px;
    height: 100px;
    bottom: 66px;
    right: 40px;
}

.rock-big {
    position: absolute;
    height: 38px;
    width: 74px;
    border-radius: 74px 74px 0 0;
    left: 80px;
    bottom: 46px;
    background-image: radial-gradient(
        circle at bottom right,
        var(--color-rock-light) 20%,
        var(--color-rock-dark) 60%
    );
}

.rock-big:before {
    position: absolute;
    background-color: var(--color-rock-light);
    transform: skewX(-70deg);
    opacity: 0.6;
    margin-top: 38px;
    height: 18px;
    width: 74px;
    border-radius: 0 0 74px 74px;
    left: -25px;
}

.rock-small > div {
    position: absolute;
    height: 6px;
    width: 12px;
    border-radius: 6px 6px 0 0;
}

.rock-small > div:before {
    position: absolute;
    background-color: var(--color-rock-light);
    transform: skewX(-70deg);
    opacity: 0.5;
}

.rock-1,
.rock-2,
.rock-3,
.rock-4 {
    background-image: radial-gradient(
        circle at bottom right,
        var(--color-rock-light) 20%,
        var(--color-rock-dark) 90%
    );
    left: 70px;
    bottom: 44px;
}

.rock-1:before,
.rock-2:before,
.rock-3:before,
.rock-4:before {
    margin-top: 6px;
    height: 6px;
    width: 12px;
    border-radius: 0 0 6px 6px;
    left: -8px;
}

.rock-2,
.rock-3 {
    background-image: radial-gradient(
        circle at bottom right,
        var(--color-rock-light) 60%,
        var(--color-rock-dark)
    );
}

.rock-2 {
    left: 48px;
    bottom: 36px;
}

.rock-3 {
    left: 30px;
    bottom: 28px;
}

.rock-4 {
    left: 24px;
    bottom: 16px;
}

.smoke-container {
    position: absolute;
    height: 300px;
    width: 200px;
    bottom: 86px;
    left: 270px;
    -webkit-mask-image: linear-gradient(
        to top,
        rgba(0, 0, 0, 1) 30%,
        rgba(0, 0, 0, 0)
    );
    -webkit-mask-size: 100% 100%;
    -webkit-mask-repeat: no-repeat;
    -webkit-mask-position: center bottom;
}
.fire-container {
    position: absolute;
    width: 42px;
    height: 42px;
    border-radius: 50%;
    background: transparent;
    box-shadow: 0 0 30px rgba(255, 255, 255, 0.7);
    bottom: 0px;
    left: 30px;
    transform-origin: center center;
    transform: rotate(-5deg);
    animation: flicker 3s ease alternate infinite;
}

.flame-1 {
    width: 0;
    height: 0;
    border: 10px solid transparent;
    border-bottom: 34px solid var(--color-flame-yellow);
    position: absolute;
    top: -30px;
    left: 10px;
    opacity: 0.4;
}

.flame-1:after {
    content: "";
    position: absolute;
    left: -10px;
    top: 34px;
    width: 0;
    height: 0;
    border: 10px solid transparent;
    border-top: 16px solid var(--color-flame-yellow);
}

.flame-2 {
    width: 0;
    height: 0;
    border: 4px solid transparent;
    border-bottom: 12px solid var(--color-flame-orange);
    position: absolute;
    top: 6px;
    left: 16px;
    opacity: 0.8;
}

.flame-2:after {
    content: "";
    position: absolute;
    left: -4px;
    top: 12px;
    width: 0;
    height: 0;
    border: 4px solid transparent;
    border-top: 8px solid var(--color-flame-orange);
}

.flame-3 {
    width: 0;
    height: 0;
    border: 1px solid transparent;
    border-bottom: 4px solid var(--color-sky-light);
    position: absolute;
    top: 20px;
    left: 19px;
    opacity: 0.9;
}

.flame-3:after {
    content: "";
    position: absolute;
    left: -1px;
    top: 4px;
    width: 0;
    height: 0;
    border: 1px solid transparent;
    border-top: 4px solid var(--color-sky-light);
}

@keyframes flicker {
    0% {
        transform: rotate(-1deg);
    }
    20% {
        transform: rotate(1deg);
    }
    40% {
        transform: rotate(-1deg);
    }
    60% {
        transform: rotate(1deg) scale(1.1);
    }
    80% {
        transform: rotate(-2deg) scale(1);
    }
    100% {
        transform: rotate(1deg);
    }
}

svg {
    position: absolute;
    top: 0;
    height: 600px;
    width: 200px;
}

svg path {
    fill: none;
    stroke: white;
    opacity: 0.3;
    stroke-width: 5px;
    stroke-dasharray: 500 100;
    stroke-linecap: round;
    animation: dash 3s linear infinite;
}

@keyframes dash {
    from {
        stroke-dashoffset: 0;
    }
    to {
        stroke-dashoffset: 600;
    }
}
</style>
