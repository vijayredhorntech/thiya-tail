<template>
    <div class="lg:w-[80vw] md:w-[90vw] w-[100vw] lg:px-6 px-4 py-4 m-auto">
        <p
            class="lg:text-[45px] md:text-[40px] sm:text-30px text-[25px] text-[#018472] font-bold"
            id="typewriter-text"
        >
<!--            <span class="slide-text typewriter" id="typewriter">Thiya-The Himalayan Farm delivers ethically sourced, <br>delicious, and healthy <span style="background-color: #008973; color: white">Himalayan superfoods</span> for a better you.</span>-->
        </p>
    </div>
</template>

<script>
export default {
    data() {
        return {
            i: 0,
            txt:
                "Thiya-The Himalayan Farm delivers ethically sourced, delicious, and healthy Himalayan superfoods for a better you.",
            speed: 50,
            typewriterText: "",
        };
    },
    mounted() {
        this.typeWriter();
    },
    methods: {
        typeWriter() {
            if (this.i < this.txt.length) {
                this.typewriterText += this.txt.charAt(this.i);
                this.i++;
                setTimeout(this.typeWriter, this.speed);
            }
        },
    },
};
</script>

<style scoped>
/* Add your CSS styles here */
</style>
