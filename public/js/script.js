// Function to open the lightbox with the selected image
function openLightbox(imageSrc) {
    const lightbox = document.getElementById("lightbox");
    const lightboxImg = document.getElementById("lightbox-img");
    
    lightbox.style.display = "flex"; // Show the lightbox
    lightboxImg.src = imageSrc; // Set the image source
}

// Function to close the lightbox
function closeLightbox() {
    document.getElementById("lightbox").style.display = "none";
}

// Close the lightbox when clicking outside the image
document.getElementById("lightbox").addEventListener("click", function(event) {
    if (event.target === this) {
        closeLightbox();
    }
});
