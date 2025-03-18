function generateJoke(){
    return "I dont trust stairs. Theyre always up to something."
}
// fetcherImages.js
class FetcherImages {
    constructor(containerId) {
        this.containerId = containerId;

        this.picsumUrl = 'https://picsum.photos/2000/400';
        
    }

    fetchRandomImage(urlService) {
        fetch(urlService)
            .then(response => {
                const imageUrl = response.url;
                const img = document.createElement('img');
                img.src = imageUrl;
                img.alt = 'Random Image';
                img.className = "img-fluid d-block mx-auto custom-img";
                let containerElement = document.getElementById(this.containerId);
                if(containerElement){
                    containerElement.appendChild(img);
                }
                
            })
            .catch(error => {
                console.error('Errore nel fetch dell\'immagine:', error);
            });
    }

    startComponent(){
        //FetchRandomImage
        document.addEventListener("DOMContentLoaded", () => {
            this.fetchRandomImage(this.picsumUrl);
        });
    }

}

export {FetcherImages, generateJoke};