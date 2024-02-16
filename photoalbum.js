const photoUrls = [
    'https://drive.google.com/uc?export=view&id=1LCqauf9zmEj6NsP5Lm24VZA1pJJQMIf-',
    'https://drive.usercontent.google.com/download?id=1LCqauf9zmEj6NsP5Lm24VZA1pJJQMIf-&export=view&authuser=0',
    'https://drive.google.com/uc?id=1LCqauf9zmEj6NsP5Lm24VZA1pJJQMIf-',
    // Add more image IDs as needed
];

const photoContainer = document.getElementById('photo-container');

function loadPhotos() {
    photoUrls.forEach(url => {
        const img = document.createElement('img');
        img.src = url;
        photoContainer.appendChild(img);
    });
}

loadPhotos();
