import{_ as v}from"./_plugin-vue_export-helper-c27b6911.js";import{r as u,o as g,w as h,a as o,c,b as l,F as _,d as I,n as y}from"./app-9dc9f741.js";const w={props:{images:{type:Array,required:!0},selectedVariation:{type:Number,required:!1,default:null}},setup(s){const r=s.images.find(e=>parseInt(e.variationId)===parseInt(s.selectedVariation)),t=u(r?r.url:s.images[0].url),a=u(r?r.variationId:s.images[0].variationId),d=u(!1);g(()=>{t.value.includes(".mp4")&&(d.value=!0)});const m=(e,n)=>{t.value=e,a.value=n},i=e=>a.value===e;return h(()=>s.selectedVariation,e=>{if(e!==null){const n=s.images.find(f=>f.variationId===e);n&&(t.value=n.url,a.value=n.variationId)}}),{currentImage:t,isVideo:d,selectedVariationId:a,changeImage:m,isSelectedThumbnail:i}}},x={class:"w-[30%] flex flex-col gap-4"},b=["onClick"],k=["src","alt"],V={class:"w-[70%]"},p={class:"w-full"},S=["src"],B={key:1,class:"w-full h-[600px] videoSection",controls:""},C=["src"];function T(s,r,t,a,d,m){return o(),c(_,null,[l("div",x,[(o(!0),c(_,null,I(t.images,(i,e)=>(o(),c("div",{class:"flex justify-end w-full",key:e},[l("a",{href:"#",class:y(["small-image",{"selected-thumbnail":a.isSelectedThumbnail(i.variationId)}]),onClick:n=>a.changeImage(i.url,i.variationId)},[l("img",{class:"w-[60px] transition-transform transform hover:scale-105 active:scale-100 shadow-md",src:i.url,alt:"Thumbnail "+(e+1)},null,8,k)],10,b)]))),128))]),l("div",V,[l("div",p,[a.isVideo?(o(),c("video",B,[l("source",{class:"videoSrc",src:a.currentImage,type:"video/mp4"},null,8,C)])):(o(),c("img",{key:0,class:"rounded-md big-image",src:a.currentImage,alt:""},null,8,S))])])],64)}const N=v(w,[["render",T]]);export{N as default};
