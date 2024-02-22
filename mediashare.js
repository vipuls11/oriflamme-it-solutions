
const link = encodeURI(window.location.href);
const msg = encodeURIComponent('Hey, I found interesting Blog');
const title = encodeURIComponent('10 points to incorporate in your 2023 social media strategy');

const fb = document.querySelector('.facebook');
fb.href = `https://www.facebook.com/share.php?u=${link}`;

const twitter = document.querySelector('.twitter');
twitter.href = `http://twitter.com/share?&url=${link}&text=${msg}`;

const linkedIn = document.querySelector('.linkedin');
linkedIn.href = `https://www.linkedin.com/sharing/share-offsite/?url=${link}`;

// const reddit = document.querySelector('.reddit');
// reddit.href = `http://www.reddit.com/submit?url=${link}&title=${title}`;

const whatsapp = document.querySelector('.whatsapp');
whatsapp.href = `https://api.whatsapp.com/send?text=${msg}: ${link}`;

// const telegram = document.querySelector('.telegram');
// telegram.href = `https://telegram.me/share/url?url=${link}&text=${msg}`;

//  const instagram = document.querySelector('.instagram');
// instagram.href = `https://www.pinterest.com/pin/create/button/?url=${link}`;


