<template>
    <div>
        <Splide :options="splideOptions" aria-label="Image Slider">
            <SplideSlide v-for="(image, index) in images" :key="index">
                <img :src="image.url" :alt="'Image ' + (index + 1)" loading="lazy">
            </SplideSlide>
        </Splide>
    </div>
</template>

<script>
import { Splide, SplideSlide } from '@splidejs/vue-splide';
import '@splidejs/vue-splide/css';

export default {
    props: {
        images: {
            type: Array,
            required: true,
        },
    },
    components: {
        Splide,
        SplideSlide,
    },
    data() {
        return {
            splideOptions: {
                rewind: true, // Allow looping
                // Add any other Splide options you need here
            },
        };
    },
};
</script>
