<template>
    <div class="w-[30%] flex flex-col gap-4">
        <div
            class="flex justify-end w-full"
            v-for="(image, index) in images"
            :key="index"
        >
            <a
                href="#"
                class="small-image"
                @click="changeImage(image.url, image.variationId)"
                :class="{ 'selected-thumbnail': isSelectedThumbnail(image.variationId) }"
            >
                <img
                    class="w-[60px] transition-transform transform hover:scale-105 active:scale-100 shadow-md"
                    :src="image.url"
                    :alt="'Thumbnail ' + (index + 1)"
                />
            </a>
        </div>
    </div>
    <div class="w-[70%]">
        <div class="w-full">
            <img
                v-if="!isVideo"
                class="rounded-md big-image"
                :src="currentImage"
                alt=""
            />
            <video v-else class="w-full h-[600px] videoSection" controls>
                <source class="videoSrc" :src="currentImage" type="video/mp4" />
            </video>
        </div>
    </div>
</template>

<script>
import { ref, onMounted, watch } from "vue";

export default {
    props: {
        images: {
            type: Array,
            required: true,
        },
        selectedVariation: {
            type: Number,
            required: false, // Allow the prop to be optional
            default: null, // Set a default value of null
        },
    },
    setup(props) {
        const currentImage = ref(props.images[0].url);
        const isVideo = ref(false);
        const selectedVariationId = ref(props.images[0].variationId);

        onMounted(() => {
            if (currentImage.value.includes(".mp4")) {
                isVideo.value = true;
            }
            const foundImage = props.images.find(
                (image) => image.variationId === props.selectedVariation
            );
            if (foundImage) {
                currentImage.value = foundImage.url;
                selectedVariationId.value = foundImage.variationId;
            }

        });

        const changeImage = (image, variationId) => {
            currentImage.value = image;
            selectedVariationId.value = variationId;
        };

        const isSelectedThumbnail = (variationId) => {
            return selectedVariationId.value === variationId;
        };

        // Watch for changes in the selectedVariation prop
        watch(() => props.selectedVariation, (newVal) => {
            if (newVal !== null) {
                // Find the first image with matching variationId
                const foundImage = props.images.find(
                    (image) => image.variationId === newVal
                );

                if (foundImage) {
                    currentImage.value = foundImage.url;
                    selectedVariationId.value = foundImage.variationId;
                }
            }
        });

        return {
            currentImage,
            isVideo,
            selectedVariationId,
            changeImage,
            isSelectedThumbnail,
        };
    },
};
</script>

<style>
.selected-thumbnail {
    border: 2px solid #3490dc;
}
</style>
